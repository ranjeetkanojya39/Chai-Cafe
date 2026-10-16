<section class="container section">
  <h1>The Chai &amp; Chapter Blog</h1>
  <p class="lead">Chai guides, brewing tips and stories from our café in Mumbai.</p>
  <div class="grid two">
    <?php foreach ($posts as $p): ?>
      <article class="card">
        <img src="<?= e(url($p['image'])) ?>" width="800" height="600" loading="lazy" alt="<?= e($p['image_alt']) ?>">
        <h2><a href="<?= e(url('/blog/' . $p['slug'])) ?>"><?= e($p['title']) ?></a></h2>
        <p class="small"><time datetime="<?= e(substr($p['published_at'], 0, 10)) ?>"><?= e(date('j M Y', strtotime($p['published_at']))) ?></time></p>
        <p><?= e($p['excerpt']) ?></p>
      </article>
    <?php endforeach; ?>
  </div>
</section>
