<article class="container section post">
  <nav class="crumbs" aria-label="Breadcrumb">
    <a href="<?= e(url('/')) ?>">Home</a> / <a href="<?= e(url('/blog')) ?>">Blog</a>
  </nav>
  <h1><?= e($post['title']) ?></h1>
  <p class="small">Published <time datetime="<?= e(substr($post['published_at'], 0, 10)) ?>"><?= e(date('j F Y', strtotime($post['published_at']))) ?></time></p>
  <img class="wide" src="<?= e(url($post['image'])) ?>" width="800" height="600" alt="<?= e($post['image_alt']) ?>">
  <?= $post['content'] /* trusted HTML from our own DB; uses h2/h3 only */ ?>
  <p><a href="<?= e(url('/blog')) ?>">&larr; Back to all posts</a></p>
</article>
