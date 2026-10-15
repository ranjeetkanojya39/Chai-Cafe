<?php
require __DIR__ . '/includes/bootstrap.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?: '/';
$base = base_path();
if ($base !== '' && str_starts_with($path, $base)) {
    $path = substr($path, strlen($base));
}
$path = '/' . trim($path, '/');

if ($path === '/') {
    $meta = get_page('home') ?? [];
    $meta += ['path' => '/', 'nav' => 'home', 'schema' => local_business_schema()];
    render('home', $meta, ['latest' => get_posts(2)]);

} elseif ($path === '/about') {
    $meta = get_page('about') ?? [];
    $meta += ['path' => '/about', 'nav' => 'about'];
    render('about', $meta);

} elseif ($path === '/blog') {
    $meta = get_page('blog') ?? [];
    $meta += ['path' => '/blog', 'nav' => 'blog'];
    render('blog', $meta, ['posts' => get_posts()]);

} elseif (preg_match('#^/blog/([a-z0-9-]+)$#', $path, $m) && ($post = get_post($m[1]))) {
    $meta = [
        'meta_title'       => $post['meta_title'],
        'meta_description' => $post['meta_description'],
        'path'             => '/blog/' . $post['slug'],
        'nav'              => 'blog',
        'og_type'          => 'article',
    ];
    render('post', $meta, ['post' => $post]);

} else {
    $meta = [
        'meta_title'       => 'Page Not Found | ' . SITE_NAME,
        'meta_description' => 'Sorry, we could not find that page. Head back to the Chai & Chapter Café home page.',
        'path'             => $path,
        'noindex'          => true,
    ];
    render('404', $meta, [], 404);
}
