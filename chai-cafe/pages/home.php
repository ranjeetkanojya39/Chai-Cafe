<section class="hero">
  <div class="container hero-grid">
    <div>
      <h1>Chai, Coffee &amp; Calm in the Heart of Mumbai</h1>
      <p class="lead">Slow-brewed kadak masala chai, specialty coffee and fresh snacks, served in a cosy Marine Lines corner with shelves full of books.</p>
      <a class="btn" href="<?= e(url('/about')) ?>">Our story</a>
    </div>
    <img src="<?= e(url('/assets/img/hero.svg')) ?>" width="800" height="600"
         alt="Illustration of a steaming glass of masala chai on a wooden café table">
  </div>
</section>

<section class="container section">
  <h2>Our Signature Menu</h2>
  <div class="grid">
    <article class="card">
      <h3>Kadak Masala Chai</h3>
      <p>Assam tea, fresh ginger, cardamom and a pinch of black pepper, simmered the slow way.</p>
    </article>
    <article class="card">
      <h3>Filter Coffee</h3>
      <p>South Indian style decoction with frothed milk, served in a steel tumbler.</p>
    </article>
    <article class="card">
      <h3>Bun Maska &amp; Omelette Pav</h3>
      <p>Soft pav, salted butter and a masala omelette, the classic Mumbai pairing.</p>
    </article>
  </div>
</section>

<section class="container section">
  <h2>From the Blog</h2>
  <div class="grid two">
    <?php foreach ($latest as $p): ?>
      <article class="card">
        <img src="<?= e(url($p['image'])) ?>" width="800" height="600" loading="lazy" alt="<?= e($p['image_alt']) ?>">
        <h3><a href="<?= e(url('/blog/' . $p['slug'])) ?>"><?= e($p['title']) ?></a></h3>
        <p><?= e($p['excerpt']) ?></p>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<section class="container section">
  <h2>Visit Us</h2>
  <p>12 Marine Lines Road, Mumbai 400002. Open every day from 8:00 AM to 11:00 PM. Walk-ins welcome, stay as long as your chai lasts.</p>
</section>
