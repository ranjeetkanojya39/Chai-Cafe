<style>
  .error-container {
    max-width: 600px;
    margin: 100px auto;
    padding: 50px 30px;
    text-align: center;
    background: #ffffff;
    border-radius: 20px;
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
    border: 1px solid #f5f5f4;
  }

  .error-icon {
    font-size: 4rem;
    margin-bottom: 20px;
  }

  .error-container h1 {
    font-size: 2.5rem;
    color: #292524;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
  }

  .error-container p {
    font-size: 1.15rem;
    color: #57534e;
    line-height: 1.6;
    margin-bottom: 0;
  }

  .error-container a {
    color: #78350f;
    font-weight: 600;
    text-decoration: none;
    transition: color 0.2s ease;
  }

  .error-container a:hover {
    color: #d97706;
    text-decoration: underline;
  }

  @media (max-width: 768px) {
    .error-container {
      margin: 40px 20px;
      padding: 35px 20px;
    }
    .error-container h1 {
      font-size: 2rem;
    }
  }
</style>

<section class="container section error-container">
  <div class="error-icon">🫖</div>
  <h1>Page not found</h1>
  <p>That page does not exist. Try the <a href="<?= e(url('/')) ?>">home page</a> or read our <a href="<?= e(url('/blog')) ?>">blog</a>.</p>
</section>