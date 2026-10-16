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
  <meta name="theme-color" content="#78350f">
  <link rel="icon" href="<?= e(url('/assets/img/favicon.svg')) ?>" type="image/svg+xml">
  
  <!-- Modern Integrated Café Stylesheet -->
  <style>
    :root {
      --primary-color: #78350f;
      --primary-hover: #451a03;
      --accent-color: #d97706;
      --bg-color: #fafaf9;
      --card-bg: #ffffff;
      --text-main: #292524;
      --text-muted: #57534e;
      --border-radius: 16px;
      --transition: all 0.3s ease;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
      background-color: var(--bg-color);
      color: var(--text-main);
      line-height: 1.6;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    /* Skip Link for Accessibility */
    .skip {
      position: absolute;
      top: -40px;
      left: 0;
      background: var(--primary-color);
      color: white;
      padding: 8px;
      z-index: 100;
      transition: top 0.3s;
    }
    .skip:focus {
      top: 0;
    }

    /* Modern Site Header */
    .site-header {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      border-bottom: 1px solid #e7e5e4;
      position: sticky;
      top: 0;
      z-index: 50;
      padding: 16px 0;
    }

    .bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-size: 1.5rem;
      font-weight: 800;
      color: var(--primary-color);
      text-decoration: none;
      letter-spacing: -0.5px;
    }

    .site-header nav {
      display: flex;
      gap: 24px;
    }

    .site-header nav a {
      text-decoration: none;
      color: var(--text-muted);
      font-weight: 600;
      font-size: 0.95rem;
      transition: var(--transition);
      position: relative;
      padding-bottom: 4px;
    }

    .site-header nav a:hover,
    .site-header nav a[aria-current="page"] {
      color: var(--primary-color);
    }

    .site-header nav a[aria-current="page"]::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 2px;
      background: var(--accent-color);
      border-radius: 2px;
    }

    /* Main Content Area */
    main {
      flex: 1;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .bar {
        flex-direction: column;
        gap: 12px;
      }
      .site-header nav {
        gap: 16px;
      }
    }
  </style>

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

<main id="main"></main>