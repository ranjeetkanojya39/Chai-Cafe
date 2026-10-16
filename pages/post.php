<style>
  .post-detail-container {
    max-width: 800px;
    margin: 60px auto;
    padding: 0 20px;
  }

  .crumbs {
    font-size: 0.9rem;
    color: #78716c;
    margin-bottom: 20px;
  }

  .crumbs a {
    color: #78350f;
    text-decoration: none;
    font-weight: 500;
  }

  .crumbs a:hover {
    text-decoration: underline;
  }

  .post h1 {
    font-size: 2.5rem;
    color: #292524;
    line-height: 1.25;
    margin-bottom: 12px;
    letter-spacing: -0.5px;
  }

  .post .small {
    font-size: 0.9rem;
    color: #78716c;
    margin-bottom: 30px;
    font-weight: 500;
  }

  .post .wide {
    width: 100%;
    height: auto;
    border-radius: 16px;
    box-shadow: 0 15px 25px -5px rgba(0, 0, 0, 0.08);
    margin-bottom: 40px;
    object-fit: cover;
  }

  /* Typography for rich-text article content */
  .post {
    color: #3f3f46;
    font-size: 1.125rem;
    line-height: 1.8;
  }

  .post p {
    margin-bottom: 24px;
  }

  .post h2, .post h3 {
    color: #292524;
    margin-top: 40px;
    margin-bottom: 16px;
  }

  .post h2 {
    font-size: 1.75rem;
  }

  .post h3 {
    font-size: 1.35rem;
  }

  .post ul, .post ol {
    margin-bottom: 24px;
    padding-left: 24px;
  }

  .post li {
    margin-bottom: 8px;
  }

  .post blockquote {
    border-left: 4px solid #d97706;
    padding: 16px 20px;
    margin: 30px 0;
    font-style: italic;
    color: #57534e;
    background: #fef3c7;
    border-radius: 0 8px 8px 0;
  }

  .post-back-link {
    display: inline-block;
    margin-top: 40px;
    font-weight: 600;
    color: #78350f;
    text-decoration: none;
    transition: color 0.2s ease;
  }

  .post-back-link:hover {
    color: #d97706;
    text-decoration: underline;
  }

  @media (max-width: 768px) {
    .post h1 {
      font-size: 2rem;
    }
  }
</style>

<article class="container post-detail-container post">
  <nav class="crumbs" aria-label="Breadcrumb">
    <a href="<?= e(url('/')) ?>">Home</a> / <a href="<?= e(url('/blog')) ?>">Blog</a>
  </nav>
  <h1><?= e($post['title'] ?? '') ?></h1>
  
  <?php if (!empty($post['published_at'])): ?>
    <p class="small">Published <time datetime="<?= e(substr($post['published_at'], 0, 10)) ?>"><?= e(date('j F Y', strtotime($post['published_at']))) ?></time></p>
  <?php endif; ?>

  <?php if (!empty($post['image'])): ?>
    <img class="wide" src="<?= e(url($post['image'])) ?>" width="800" height="600" alt="<?= e($post['image_alt'] ?? '') ?>">
  <?php endif; ?>

  <?= $post['content'] ?? '' /* trusted HTML from our own DB; uses h2/h3 only */ ?>
  
  <p><a class="post-back-link" href="<?= e(url('/blog')) ?>">&larr; Back to all posts</a></p>
</article>