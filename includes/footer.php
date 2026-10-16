</main>

<style>
  /* Modern Site Footer Styling */
  .site-footer {
    background: #292524;
    color: #a8a29e;
    padding: 60px 0 30px 0;
    margin-top: 80px;
    border-top-left-radius: 32px;
    border-top-right-radius: 32px;
  }

  .foot {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 16px;
  }

  .foot address {
    font-style: normal;
    color: #e7e5e4;
    font-size: 1.05rem;
    line-height: 1.7;
  }

  .foot address strong {
    color: #ffffff;
    font-size: 1.2rem;
  }

  .foot address a {
    color: #d97706;
    text-decoration: none;
  }

  .foot address a:hover {
    text-decoration: underline;
  }

  .foot p {
    color: #d6d3d1;
  }

  .foot .small {
    font-size: 0.85rem;
    color: #78716c;
    border-top: 1px solid #44403c;
    width: 100%;
    padding-top: 20px;
    margin-top: 10px;
  }
</style>

<footer class="site-footer">
  <div class="container foot">
    <address>
      <strong>Chai &amp; Chapter Café</strong><br>
      12 Marine Lines Road, Mumbai 400002<br>
      <a href="tel:+912255550123">+91 7800144975</a>
    </address>
    <p>Open daily, 8:00 AM – 11:00 PM</p>
    <p class="small">&copy; <?= date('Y') ?> Chai &amp; Chapter Café. A fictional café built for an assignment.</p>
  </div>
</footer>
</body>
</html>