CREATE DATABASE IF NOT EXISTS chai_cafe CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE chai_cafe;

DROP TABLE IF EXISTS posts;
DROP TABLE IF EXISTS pages;

CREATE TABLE pages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  slug VARCHAR(100) NOT NULL UNIQUE,
  meta_title VARCHAR(70) NOT NULL,
  meta_description VARCHAR(170) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  slug VARCHAR(120) NOT NULL UNIQUE,
  title VARCHAR(160) NOT NULL,
  meta_title VARCHAR(70) NOT NULL,
  meta_description VARCHAR(170) NOT NULL,
  excerpt VARCHAR(255) NOT NULL,
  content MEDIUMTEXT NOT NULL,
  image VARCHAR(255) NOT NULL,
  image_alt VARCHAR(255) NOT NULL,
  published_at DATETIME NOT NULL,
  updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

INSERT INTO pages (slug, meta_title, meta_description) VALUES
('home', 'Chai & Chapter Café – Chai & Coffee in Marine Lines, Mumbai',
 'Cosy Mumbai café in Marine Lines serving kadak masala chai, specialty coffee and fresh snacks. Open daily 8 AM to 11 PM.'),
('about', 'About Us | Chai & Chapter Café, Mumbai',
 'Meet the team behind Chai & Chapter, a Marine Lines café built on slow-brewed chai, local ingredients and good conversation.'),
('blog', 'Blog | Chai Guides & Café Stories from Mumbai',
 'Chai guides, brewing tips and café stories from Chai & Chapter in Mumbai. Read our latest posts.');

INSERT INTO posts (slug, title, meta_title, meta_description, excerpt, content, image, image_alt, published_at) VALUES
('best-chai-in-mumbai',
 'Best Chai in Mumbai: Styles to Try and How to Order',
 'Best Chai in Mumbai: 5 Styles You Must Try',
 'From kadak cutting chai to elaichi and masala blends, here is our guide to the best chai in Mumbai and how to order like a local.',
 'From cutting chai at a street stall to slow-simmered masala chai in a café, here is how to find the best cup in Mumbai.',
 '<p>Mumbai runs on chai. Whether you grab a quick cup near the station or sit down in a café, the city has a style for every mood.</p>
<h2>Cutting Chai</h2>
<p>Half a glass, strong and sweet. It is the commuter classic, built for speed and served in seconds.</p>
<h2>Kadak Masala Chai</h2>
<p>Extra tea leaves, ginger, cardamom and black pepper. This is the cup we serve at Chai &amp; Chapter every morning.</p>
<h3>How to order it</h3>
<p>Ask for <em>kadak</em> if you want it strong, or <em>kam cheeni</em> for less sugar.</p>
<h2>Elaichi Chai</h2>
<p>Light, fragrant and cardamom-forward, perfect for an evening by the sea.</p>
<h2>Irani Chai</h2>
<p>Creamy and mellow, traditionally paired with bun maska at old Irani cafés.</p>',
 '/assets/img/chai.svg', 'Illustration of a glass of masala chai with rising steam', '2026-09-20 09:00:00'),

('how-to-make-kadak-masala-chai',
 'How to Make Kadak Masala Chai at Home',
 'How to Make Kadak Masala Chai at Home | Chai & Chapter',
 'Our café recipe for kadak masala chai: the right tea, spice ratio and brewing time for a strong, fragrant Mumbai-style cup.',
 'The tea, the spices and the timing. Our café method for a strong, fragrant cup you can repeat at home.',
 '<p>Great chai is simple, but the details matter. This is the method our baristas use every day.</p>
<h2>What You Need</h2>
<p>For two cups: 1 cup water, 1 cup whole milk, 2 tsp strong Assam tea, a small piece of ginger, 2 crushed cardamom pods and sugar to taste.</p>
<h2>Method</h2>
<h3>Step 1: Simmer the spices</h3>
<p>Boil the water with ginger and cardamom for two minutes.</p>
<h3>Step 2: Add the tea</h3>
<p>Add the tea leaves and let them bubble for one minute until the colour deepens.</p>
<h3>Step 3: Add milk</h3>
<p>Pour in the milk and bring it to a rolling boil twice, then strain and serve hot.</p>
<h2>Tips</h2>
<p>Use fresh spices and never skip the second boil. That is where the kadak flavour comes from.</p>',
 '/assets/img/chai.svg', 'Illustration of a cup of kadak masala chai ready to serve', '2026-09-27 09:00:00'),

('best-snacks-with-chai',
 'Best Snacks to Pair with Masala Chai',
 'Best Snacks to Pair with Masala Chai | Chai & Chapter',
 'Bun maska, khari, samosa or omelette pav? Our favourite Mumbai snacks to enjoy with a hot cup of masala chai.',
 'Bun maska, khari biscuits and omelette pav: the snacks that make a cup of chai feel complete.',
 '<p>A good cup of chai deserves a good partner. Here are the pairings our regulars order again and again.</p>
<h2>Bun Maska</h2>
<p>Soft pav, generous salted butter. Dip it in your chai.</p>
<h2>Khari Biscuits</h2>
<p>Flaky, buttery and made for dunking.</p>
<h2>Masala Omelette Pav</h2>
<p>A savoury breakfast favourite with green chilli and coriander.</p>
<h2>Vada Pav</h2>
<p>Mumbai street food at its best, a spicy potato fritter in a soft bun.</p>',
 '/assets/img/snacks.svg', 'Illustration of buns and snacks served on a plate', '2026-10-05 09:00:00');
