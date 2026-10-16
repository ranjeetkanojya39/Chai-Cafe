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

  /* Modern Hero Section */
  .hero-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #fef3c7 0%, #fffbeb 100%);
    border-bottom-left-radius: 40px;
    border-bottom-right-radius: 40px;
    margin-bottom: 60px;
  }

  .container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  .hero-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    align-items: center;
  }

  .hero-badge {
    display: inline-block;
    background: #fde68a;
    color: var(--primary-color);
    padding: 6px 14px;
    border-radius: 50px;
    font-size: 0.85rem;
    font-weight: 600;
    margin-bottom: 16px;
  }

  .hero-content h1 {
    font-size: 3rem;
    color: var(--text-main);
    line-height: 1.2;
    margin-bottom: 20px;
    letter-spacing: -0.5px;
  }

  .hero-content .lead {
    font-size: 1.15rem;
    color: var(--text-muted);
    margin-bottom: 30px;
    line-height: 1.6;
  }

  .hero-actions {
    display: flex;
    gap: 16px;
  }

  .hero-svg {
    width: 100%;
    height: auto;
    border-radius: var(--border-radius);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.05);
  }

  /* Sections General */
  .section {
    margin-bottom: 80px;
  }

  .section-header {
    text-align: center;
    margin-bottom: 40px;
  }

  .section-header h2 {
    font-size: 2.25rem;
    color: var(--text-main);
    margin-bottom: 8px;
    letter-spacing: -0.5px;
  }

  .section-subtitle {
    color: var(--text-muted);
    font-size: 1.05rem;
  }

  /* Cards & Grids */
  .grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
  }

  .grid.two {
    grid-template-columns: repeat(2, 1fr);
  }

  .card {
    background: var(--card-bg);
    border-radius: var(--border-radius);
    padding: 30px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.03), 0 2px 4px -1px rgba(0, 0, 0, 0.02);
    transition: var(--transition);
    border: 1px solid #f5f5f4;
  }

  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.08);
  }

  .menu-card .card-icon {
    font-size: 2.5rem;
    margin-bottom: 16px;
  }

  .menu-card h3 {
    font-size: 1.25rem;
    margin-bottom: 10px;
    color: var(--text-main);
  }

  .menu-card p {
    color: var(--text-muted);
    font-size: 1rem;
    line-height: 1.6;
    margin: 0;
  }

  /* Blog Cards */
  .blog-card {
    padding: 0;
    overflow: hidden;
    display: flex;
    flex-direction: column;
  }

  .blog-img-wrap img {
    width: 100%;
    height: 240px;
    object-fit: cover;
  }

  .blog-content {
    padding: 24px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
  }

  .blog-content h3 {
    font-size: 1.3rem;
    margin-bottom: 10px;
  }

  .blog-content h3 a {
    color: var(--text-main);
    text-decoration: none;
    transition: var(--transition);
  }

  .blog-content h3 a:hover {
    color: var(--accent-color);
  }

  .blog-content p {
    color: var(--text-muted);
    font-size: 1rem;
    line-height: 1.6;
    margin: 0;
  }

  .read-more {
    display: inline-block;
    margin-top: 15px;
    font-weight: 600;
    color: var(--primary-color);
    font-size: 0.9rem;
  }

  .no-posts {
    grid-column: span 2;
    text-align: center;
    padding: 40px;
    color: var(--text-muted);
    font-size: 1.1rem;
    background: var(--card-bg);
    border-radius: var(--border-radius);
    border: 1px solid #f5f5f4;
  }

  /* Visit Us Section */
  .visit-section {
    text-align: center;
  }

  .visit-card {
    background: linear-gradient(135deg, #451a03 0%, #78350f 100%);
    color: #ffffff;
    padding: 50px 30px;
    border-radius: var(--border-radius);
    max-width: 800px;
    margin: 0 auto;
    box-shadow: 0 10px 25px rgba(120, 53, 15, 0.2);
  }

  .visit-card .visit-icon {
    font-size: 3rem;
    margin-bottom: 15px;
  }

  .visit-card h2 {
    color: #fff;
    margin-bottom: 15px;
    font-size: 2rem;
  }

  .visit-card p {
    font-size: 1.15rem;
    opacity: 0.9;
    max-width: 600px;
    margin: 0 auto 25px auto;
    line-height: 1.6;
  }

  /* Buttons */
  .btn {
    display: inline-block;
    padding: 12px 28px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    transition: var(--transition);
    cursor: pointer;
  }

  .btn-primary {
    background: var(--primary-color);
    color: #ffffff;
  }

  .btn-primary:hover {
    background: var(--primary-hover);
  }

  .btn-outline {
    background: transparent;
    border: 2px solid var(--primary-color);
    color: var(--primary-color);
  }

  .btn-outline:hover {
    background: var(--primary-color);
    color: #ffffff;
  }

  .btn-secondary {
    background: #ffffff;
    color: var(--primary-color);
  }

  .btn-secondary:hover {
    background: #fef3c7;
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .hero-grid, .grid, .grid.two {
      grid-template-columns: 1fr;
    }
    .hero-content h1 {
      font-size: 2.2rem;
    }
    .hero-section {
      padding: 40px 0;
    }
  }
</style>

<!-- Modern Hero Section -->
<section class="hero-section">
  <div class="container hero-grid">
    <div class="hero-content">
      <span class="hero-badge">☕ Mumbai's Cozy Corner</span>
      <h1>Chai, Coffee &amp; Calm in the Heart of Mumbai</h1>
      <p class="lead">Slow-brewed kadak masala chai, specialty coffee and fresh snacks, served in a cosy Marine Lines corner with shelves full of books.</p>
      <div class="hero-actions">
        <a class="btn btn-primary" href="<?= e(url('/about')) ?>">Our story</a>
        <a class="btn btn-outline" href="#menu">Explore Menu</a>
      </div>
    </div>
    <div class="hero-img-wrapper">
      <img src="<?= e(url('/assets/img/hero.svg')) ?>" width="800" height="600"
           alt="Illustration of a steaming glass of masala chai on a wooden café table" class="hero-svg">
    </div>
  </div>
</section>

<!-- Signature Menu Section -->
<section id="menu" class="container section">
  <div class="section-header">
    <h2>Our Signature Menu</h2>
    <p class="section-subtitle">Handcrafted with love and traditional warmth</p>
  </div>
  <div class="grid menu-grid">
    <article class="card menu-card">
      <div class="card-icon">🫖</div>
      <h3>Kadak Masala Chai</h3>
      <p>Assam tea, fresh ginger, cardamom and a pinch of black pepper, simmered the slow way.</p>
    </article>
    <article class="card menu-card">
      <div class="card-icon">☕</div>
      <h3>Filter Coffee</h3>
      <p>South Indian style decoction with frothed milk, served in a steel tumbler.</p>
    </article>
    <article class="card menu-card">
      <div class="card-icon">🍞</div>
      <h3>Bun Maska &amp; Omelette Pav</h3>
      <p>Soft pav, salted butter and a masala omelette, the classic Mumbai pairing.</p>
    </article>
  </div>
</section>

<!-- Blog Section -->
<section class="container section">
  <div class="section-header">
    <h2>From the Blog</h2>
    <p class="section-subtitle">Stories, recipes, and cafe musings</p>
  </div>
  <div class="grid two blog-grid">
    <?php if (!empty($latest) && is_array($latest)): ?>
      <?php foreach ($latest as $p): ?>
        <article class="card blog-card">
          <div class="blog-img-wrap">
            <img src="<?= e(url($p['image'] ?? '')) ?>" width="800" height="600" loading="lazy" alt="<?= e($p['image_alt'] ?? '') ?>">
          </div>
          <div class="blog-content">
            <h3><a href="<?= e(url('/blog/' . ($p['slug'] ?? ''))) ?>"><?= e($p['title'] ?? '') ?></a></h3>
            <p><?= e($p['excerpt'] ?? '') ?></p>
            <span class="read-more">Read Article &rarr;</span>
          </div>
        </article>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="no-posts">
        <p>No recent stories found.</p>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- Visit Us Section -->
<section class="container section visit-section">
  <div class="visit-card">
    <div class="visit-icon">📍</div>
    <h2>Visit Us</h2>
    <p>12 Marine Lines Road, Mumbai 400002. Open every day from 8:00 AM to 11:00 PM. Walk-ins welcome, stay as long as your chai lasts.</p>
    <a href="https://maps.google.com" target="_blank" class="btn btn-secondary">Get Directions</a>
  </div>
</section>