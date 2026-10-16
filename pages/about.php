<style>
  .about-container {
    max-width: 900px;
    margin: 60px auto;
    padding: 0 20px;
  }

  .about-header {
    text-align: center;
    margin-bottom: 30px;
  }

  .about-header h1 {
    font-size: 2.75rem;
    color: #292524;
    letter-spacing: -0.5px;
  }

  .about-img {
    width: 100%;
    height: auto;
    border-radius: 20px;
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.08);
    margin-bottom: 50px;
    object-fit: cover;
  }

  .about-section-title {
    font-size: 1.8rem;
    color: #78350f;
    margin: 40px 0 15px 0;
    position: relative;
    padding-bottom: 10px;
  }

  .about-section-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 3px;
    background: #d97706;
    border-radius: 2px;
  }

  .about-text {
    font-size: 1.15rem;
    color: #57534e;
    line-height: 1.8;
    margin-bottom: 30px;
  }

  .beliefs-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    margin: 30px 0 50px 0;
  }

  .belief-card {
    background: #ffffff;
    padding: 25px;
    border-radius: 16px;
    border: 1px solid #f5f5f4;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.03);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .belief-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.08);
  }

  .belief-card h3 {
    font-size: 1.2rem;
    color: #78350f;
    margin-bottom: 10px;
  }

  .belief-card p {
    font-size: 0.95rem;
    color: #57534e;
    margin: 0;
    line-height: 1.6;
  }

  .find-us-box {
    background: linear-gradient(135deg, #fef3c7 0%, #fffbeb 100%);
    border: 1px solid #fde68a;
    padding: 35px;
    border-radius: 16px;
    margin-top: 50px;
    text-align: center;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
  }

  .find-us-box h2 {
    color: #78350f;
    margin-bottom: 12px;
    font-size: 1.8rem;
  }

  .find-us-box p {
    color: #57534e;
    font-size: 1.1rem;
    margin: 0;
  }

  @media (max-width: 768px) {
    .beliefs-grid {
      grid-template-columns: 1fr;
    }
    .about-header h1 {
      font-size: 2.2rem;
    }
  }
</style>

<section class="container section about-container">
  <div class="about-header">
    <h1>About Chai &amp; Chapter Café</h1>
  </div>
  
  <img class="wide about-img" src="<?= e(url('/assets/img/cafe.svg')) ?>" width="800" height="600"
       alt="Illustration of the Chai and Chapter café interior with a bookshelf, lamp and tables">

  <h2 class="about-section-title">Our Story</h2>
  <p class="about-text">Chai &amp; Chapter started in 2019 as a tiny counter with one stove and a shelf of second-hand books. Today it is a Marine Lines neighbourhood favourite for people who want good tea and unhurried conversation.</p>

  <h2 class="about-section-title">What We Believe</h2>
  <div class="beliefs-grid">
    <div class="belief-card">
      <h3>Slow-brewed, always</h3>
      <p>We never rush chai. Every pot is simmered with fresh spices, not pre-mixed powders.</p>
    </div>
    <div class="belief-card">
      <h3>Local ingredients</h3>
      <p>Our tea, milk and spices come from small suppliers across Maharashtra and Assam.</p>
    </div>
    <div class="belief-card">
      <h3>A space to linger</h3>
      <p>Free Wi-Fi, plenty of plug points and a community book swap on the back wall.</p>
    </div>
  </div>

  <div class="find-us-box">
    <h2>Find Us</h2>
    <p>12 Marine Lines Road, Mumbai 400002. Open daily, 8:00 AM to 11:00 PM.</p>
  </div>
</section>