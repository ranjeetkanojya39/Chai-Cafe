<?php
function e($s): string { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

// Works at domain root or inside a sub-folder (e.g. localhost/chai-cafe)
function base_path(): string
{
    return rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
}

function url(string $path = '/'): string { return base_path() . $path; }

function site_url(string $path = ''): string
{
    $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');
    return ($https ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . base_path() . $path;
}

function get_page(string $slug): ?array
{
    $s = db()->prepare('SELECT * FROM pages WHERE slug = ?');
    $s->execute([$slug]);
    return $s->fetch() ?: null;
}

function get_posts(?int $limit = null): array
{
    $sql = 'SELECT slug, title, excerpt, image, image_alt, published_at, updated_at
            FROM posts ORDER BY published_at DESC';
    if ($limit) $sql .= ' LIMIT ' . (int)$limit;
    return db()->query($sql)->fetchAll();
}

function get_post(string $slug): ?array
{
    $s = db()->prepare('SELECT * FROM posts WHERE slug = ?');
    $s->execute([$slug]);
    return $s->fetch() ?: null;
}

function render(string $view, array $meta, array $vars = [], int $status = 200): void
{
    http_response_code($status);
    extract($vars);
    require __DIR__ . '/header.php';
    require __DIR__ . '/../pages/' . $view . '.php';
    require __DIR__ . '/footer.php';
}

function local_business_schema(): array
{
    return [
        '@context'  => 'https://schema.org',
        '@type'     => 'CafeOrCoffeeShop', // subtype of LocalBusiness
        'name'      => SITE_NAME,
        'url'       => site_url('/'),
        'image'     => site_url('/assets/img/hero.svg'),
        'description' => 'Cosy Mumbai café serving kadak masala chai, specialty coffee and fresh snacks.',
        'telephone' => '+91-22-5555-0123',
        'priceRange' => '₹₹',
        'servesCuisine' => ['Indian', 'Café', 'Chai'],
        'address'   => [
            '@type' => 'PostalAddress',
            'streetAddress' => '12 Marine Lines Road',
            'addressLocality' => 'Mumbai',
            'addressRegion' => 'Maharashtra',
            'postalCode' => '400002',
            'addressCountry' => 'IN',
        ],
        'geo' => ['@type' => 'GeoCoordinates', 'latitude' => 18.9432, 'longitude' => 72.8234],
        'openingHoursSpecification' => [[
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
            'opens' => '08:00',
            'closes' => '23:00',
        ]],
    ];
}
