# ☕ Chai & Chapter Café

### Dynamic PHP & MySQL Website with SEO Optimization

**Chai & Chapter Café** is a dynamic, SEO-friendly website for a fictional café based in Mumbai, India. Built with PHP and MySQL, the website includes three main pages—Home, About, and Blog—with database-driven content and SEO metadata.

The project focuses on clean URL routing, technical SEO, semantic HTML, structured data, and search-engine-friendly architecture.

## ✨ Key Features

* **Dynamic Content Management:** Blog posts and page-specific SEO metadata are stored and retrieved from MySQL.
* **Three Main Pages:** Home, About, and Blog, with individual content and metadata.
* **Dynamic Blog System:** Dedicated pages for individual blog posts using SEO-friendly slugs.
* **SEO-Optimized Metadata:** Unique page titles, meta descriptions, and canonical URLs managed through the database.
* **Clean URL Structure:** Apache `.htaccess` and `mod_rewrite` provide readable URLs without unnecessary query parameters.
* **XML Sitemap:** Automatically generated from database content, including `lastmod` dates where available.
* **Robots.txt:** Provides crawler guidance and references the XML sitemap.
* **Custom 404 Pages:** Invalid blog slugs return an actual HTTP 404 response and include a `noindex` directive.
* **Semantic HTML:** Uses appropriate landmarks and a logical heading hierarchy for accessibility and content structure.
* **Structured Data:** Includes `CafeOrCoffeeShop` JSON-LD on the homepage, with business information, address, geographic coordinates, and opening hours.
* **Image Optimization:** Images include descriptive alt text and explicit width and height attributes to improve accessibility and reduce layout shifts.
* **Performance Testing:** Supports mobile performance audits through Google Lighthouse.

## 🛠️ Technology Stack

| Technology        | Purpose                                        |
| ----------------- | ---------------------------------------------- |
| PHP 8+            | Server-side application logic and routing      |
| MySQL / MariaDB   | Database for page metadata and blog content    |
| HTML5             | Semantic page structure                        |
| CSS3              | Styling and responsive layouts                 |
| Apache            | Web server and URL rewriting                   |
| JSON-LD           | Structured data for local business information |
| Google Lighthouse | Performance, accessibility, and SEO auditing   |

## 📁 Project Structure

```text
chai-cafe/
├── config.php
├── index.php
├── .htaccess
├── robots.txt
├── sitemap.xml
├── database/
│   └── schema.sql
├── pages/
│   ├── home.php
│   ├── about.php
│   ├── blog.php
│   └── single-post.php
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── functions.php
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
└── README.md
```

*Note: This is a suggested structure. Adjust the directory tree to match the actual project files.*

## 🌐 Website Routes

| Route          | Description                                 |
| -------------- | ------------------------------------------- |
| `/`            | Café homepage                               |
| `/about`       | Information about the café                  |
| `/blog`        | Blog listing page                           |
| `/blog/{slug}` | Individual blog post                        |
| `/sitemap.xml` | XML sitemap generated from database content |
| `/robots.txt`  | Search engine crawler instructions          |

## 🔍 SEO Implementation

### 1. Database-Driven Metadata

Page titles and meta descriptions are retrieved from the `pages` and `posts` tables, allowing each page to have its own SEO metadata.

### 2. Canonical URLs

Each page specifies a canonical URL to identify its preferred URL and help reduce duplicate URL issues.

### 3. SEO-Friendly Routing

Apache URL rewriting maps clean URLs to the appropriate PHP handlers without exposing unnecessary query parameters.

### 4. XML Sitemap

The sitemap includes eligible pages and published blog posts, with `lastmod` values when reliable modification dates are available.

### 5. Robots
