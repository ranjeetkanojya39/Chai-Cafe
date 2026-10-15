<?php
require __DIR__ . '/includes/helpers.php';
header('Content-Type: text/plain; charset=utf-8');
echo "User-agent: *\nAllow: /\nDisallow: /includes/\nDisallow: /database/\n\n";
echo 'Sitemap: ' . site_url('/sitemap.xml') . "\n";
