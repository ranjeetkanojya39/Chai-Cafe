<?php
$title = $meta['meta_title'] ?? SITE_NAME;
$desc  = $meta['meta_description'] ?? '';
$canon = site_url($meta['path'] ?? '/');
$ogType = $meta['og_type'] ?? 'website';
$current = $meta['nav'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($title) ?></title>
  <meta name="description" content="<?= e($desc) ?>">
  <link rel="canonical" href="<?= e($canon) ?>">
<?php if (!empty($meta['noindex'])): ?>
  <meta name="robots" content="noindex, follow">
<?php endif; ?>
  <meta property="og:title" content="<?= e($title) ?>">
  <meta property="og:description" content="<?= e($desc) ?>">
  <meta property="og:type" content="<?= e($ogType) ?>">
  <meta property="og:url" content="<?= e($canon) ?>">
  <meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
  <meta name="theme-color" content="#8a3b12">
  <link rel="icon" href="<?= e(url('/assets/img/favicon.svg')) ?>" type="image/svg+xml">
  <link rel="stylesheet" href="<?= e(url('/assets/css/style.css')) ?>">
<?php if (!empty($meta['schema'])): ?>
  <script type="application/ld+json"><?= json_encode($meta['schema'], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?></script>
<?php endif; ?>
</head>
<body>
<a class="skip" href="#main">Skip to content</a>
<header class="site-header">
  <div class="container bar">
    <a class="logo" href="<?= e(url('/')) ?>">Chai &amp; Chapter</a>
    <nav aria-label="Main navigation">
      <a href="<?= e(url('/')) ?>"<?= $current === 'home' ? ' aria-current="page"' : '' ?>>Home</a>
      <a href="<?= e(url('/about')) ?>"<?= $current === 'about' ? ' aria-current="page"' : '' ?>>About</a>
      <a href="<?= e(url('/blog')) ?>"<?= $current === 'blog' ? ' aria-current="page"' : '' ?>>Blog</a>
    </nav>
  </div>
</header>
<main id="main">
