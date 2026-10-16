<style>
  .blog-page-container {
    max-width: 1200px;
    margin: 60px auto;
    padding: 0 20px;
  }

  .blog-page-header {
    text-align: center;
    margin-bottom: 50px;
  }

  .blog-page-header h1 {
    font-size: 2.75rem;
    color: #292524;
    margin-bottom: 12px;
    letter-spacing: -0.5px;
  }

  .blog-page-header .lead {
    font-size: 1.15rem;
    color: #57534e;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
  }

  .blog-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
  }

  .blog-card {
    background: #ffffff;
    border-radius: 16px;
    overflow: hidden;
    border: 1px solid #f5f5f4;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.03);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
  }

  .blog-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.08);
  }

  .blog-card img {
    width: 100%;
    height: 260px;
    object-fit: cover;
  }

  .blog-card-content {
    padding: 24px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
  }

  .blog-card h2 {
    font-size: 1.35rem;
    margin-bottom: 10px;
  }

  .blog-card h2 a {
    color: #292524;
    text-decoration: none;
    transition: color 0.2s ease;
  }

  .blog-card h2 a:hover {
    color: #d97706;
  }

  .blog-card .small {
    font-size: 0.85rem;
    color: #78716c;
    margin-bottom: 12px;
    font-weight: 500;
  }

  .blog-card p:not(.small) {
    color: #57534e;
    font-size: 1rem;
    line-height: 1.6;
    margin: 0;
  }

  .no-posts {
    grid-column: span 2;
    text-align: center;
    padding: 40px;
    color: #78716c;
    font-size: 1.1rem;
    background: #ffffff;
    border-radius: 16px;
    border: 1px solid #f5f5f4;
  }

  @media (max-width: 768px) {
    .blog-grid {
      grid-template-columns: 1fr;
    }
    .blog-page-header h1 {
      font-size: 2.2rem;
    }
  }
</style>

<section class="blog-page-container">
  <div class="blog-page-header">
    <h1>The Chai &amp; Chapter Blog</h1>
    <p class="lead">Chai guides, brewing tips and stories from our café in Mumbai.</p>
  </div>
  
  <div class="blog-grid">
    <?php if (!empty($posts) && is_array($posts)): ?>
      <?php foreach ($posts as $p): ?>
        <article class="blog-card">
          <img src="<?= e(url($p['image'] ?? '')) ?>" width="800" height="600" loading="lazy" alt="<?= e($p['image_alt'] ?? '') ?>">
          <div class="blog-card-content">
            <h2><a href="<?= e(url('/blog/' . ($p['slug'] ?? ''))) ?>"><?= e($p['title'] ?? '') ?></a></h2>
            <?php if (!empty($p['published_at'])): ?>
              <p class="small"><time datetime="<?= e(substr($p['published_at'], 0, 10)) ?>"><?= e(date('j M Y', strtotime($p['published_at']))) ?></time></p>
            <?php endif; ?>
            <p><?= e($p['excerpt'] ?? '') ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="no-posts">
        <p>No blog posts found right now. Check back soon!</p>
      </div>
    <?php endif; ?>
  </div>
</section>