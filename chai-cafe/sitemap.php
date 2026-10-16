<?php
require __DIR__ . '/includes/bootstrap.php';
header('Content-Type: application/xml; charset=utf-8');

$urls = [
    ['/', null],
    ['/about', null],
    ['/blog', null],
];
foreach (get_posts() as $p) {
    $urls[] = ['/blog/' . $p['slug'], substr($p['updated_at'], 0, 10)];
}

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach ($urls as [$loc, $last]) {
    echo "  <url><loc>" . e(site_url($loc)) . "</loc>";
    if ($last) echo "<lastmod>" . e($last) . "</lastmod>";
    echo "</url>\n";
}
echo '</urlset>';
