<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Custom Web Development Services for High-Growth Brands | Rankmator</title>
  <meta name="description"
    content="Build high-performance, secure, and SEO-optimized websites with Rankmator. Expert web development services in React, Next.js, WordPress, and Ecommerce solutions." />
  <?php include 'links.php'; ?>
  <style>
    /* Page Specific Styles */
    .hero-webdev {
      background: var(--gradient-hero);
      padding: 60px 0 60px;
      position: relative;
      overflow: hidden;
    }

    .hero-webdev::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');
      opacity: 0.1;
    }

    .hero-badge-webdev {
      background: rgba(107, 171, 68, 0.1);
      border: 1px solid rgba(107, 171, 68, 0.3);
      color: var(--secondary);
      padding: 8px 16px;
      border-radius: 50px;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 14px;
      font-weight: 600;
      margin-bottom: 24px;
      animation: fadeInUp 0.8s ease-out;
    }

    .hero-badge-dot-webdev {
      width: 8px;
      height: 8px;
      background: var(--secondary);
      border-radius: 50%;
      box-shadow: 0 0 10px var(--secondary);
      animation: pulse 2s infinite;
    }

    .service-grid-premium {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 32px;
      margin-top: 48px;
    }

    .premium-card {
      background: #ffffff;
      padding: 40px;
      border-radius: 24px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
      border: 1px solid #f0f0f0;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      position: relative;
      overflow: hidden;
    }

    .premium-card:hover {
      transform: translateY(-12px);
      box-shadow: 0 20px 60px rgba(107, 171, 68, 0.15);
      border-color: var(--secondary);
    }

    .card-icon-wrap {
      width: 64px;
      height: 64px;
      background: var(--secondary);
      border-radius: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 28px;
      color: #fff;
      margin-bottom: 28px;
    }

    .premium-card h3 {
      font-size: 24px;
      font-weight: 800;
      color: var(--text-primary);
      margin-bottom: 16px;
    }

    .premium-card p {
      color: #64748b;
      line-height: 1.7;
    }

    .platform-slider-container {
      width: 100%;
      overflow: hidden;
      white-space: nowrap;
      position: relative;
      padding: 40px 0;
    }

    .platform-slider-container::before,
    .platform-slider-container::after {
      content: '';
      position: absolute;
      top: 0;
      width: 15rem;
      height: 100%;
      z-index: 2;
      pointer-events: none;
    }

    .platform-slider-container::before {
      left: 0;
      background: linear-gradient(to right, #ffffff, transparent);
    }

    .platform-slider-container::after {
      right: 0;
      background: linear-gradient(to left, #ffffff, transparent);
    }

    .platform-logos-track {
      display: inline-block;
      animation: marquee 30s linear infinite;
    }

    .platform-logos-track:hover {
      animation-play-state: paused;
    }

    .platform-logo {
      display: inline-flex;
      align-items: center;
      gap: 12px;
      font-size: 26px;
      font-weight: 800;
      color: #0f172a;
      margin: 0 40px;
      transition: color 0.3s;
    }

    @keyframes marquee {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(-50%);
      }
    }

    @keyframes pulse {
      0% {
        transform: scale(1);
        opacity: 1;
      }

      50% {
        transform: scale(1.5);
        opacity: 0.5;
      }

      100% {
        transform: scale(1);
        opacity: 1;
      }
    }

    .diff-table {
      width: 100%;
      border-collapse: separate;
      border-spacing: 0;
      margin-top: 30px;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      border: 1px solid #e2e8f0;
    }

    .diff-table th {
      background: var(--primary);
      color: #fff;
      padding: 20px;
      text-align: left;
      font-size: 18px;
    }

    .diff-table td {
      padding: 20px;
      border-bottom: 1px solid #f1f5f9;
      background: #fff;
      vertical-align: middle;
    }

    .diff-table tr:last-child td {
      border-bottom: none;
    }

    .diff-table .point-label {
      font-weight: 700;
      color: var(--text-primary);
      width: 25%;
      background: #f8fafc;
    }

    .diff-table .others-cell {
      color: #64748b;
      width: 35%;
    }

    .diff-table .rankmator-cell {
      color: #000;
      font-weight: 600;
      background: #fffdf5;
      width: 40%;
      border-left: 2px solid var(--secondary);
    }

    .diff-table .check-icon {
      color: #22c55e;
      margin-right: 8px;
    }

    .diff-table .cross-icon {
      color: #ef4444;
      margin-right: 8px;
    }

    .vstat-card {
      background: #fff;
      padding: 40px;
      border-radius: 20px;
      border: 1px solid #e2e8f0;
      transition: all 0.3s;
      position: relative;
      overflow: hidden;
    }

    .vstat-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
      border-color: var(--secondary);
    }

    .vstat-icon {
      font-size: 40px;
      margin-bottom: 20px;
      color: var(--primary);
    }

    .vstat-number {
      font-size: 48px;
      font-weight: 900;
      color: var(--secondary);
      margin-bottom: 5px;
    }

    .vstat-label {
      font-size: 14px;
      text-transform: uppercase;
      letter-spacing: 1px;
      color: #64748b;
      font-weight: 700;
    }
  </style>
</head>

<body>

  <?php include 'header.php'; ?>

  <!-- HERO SECTION -->
  <section class="hero-webdev">
    <div class="hero-orbs">
      <div class="orb orb-1"></div>
      <div class="orb orb-2"></div>
    </div>
    <div class="container">
      <div class="hero-grid">
        <div class="hero-left">
          <div class="hero-badge-webdev">
            <div class="hero-badge-dot-webdev"></div>
            Next-Gen Web Development
          </div>
          <h1 class="hero-title">
            Build High-Performance <br />
            <span class="highlight">Digital Experiences</span><br />
            That Convert
          </h1>
          <p class="hero-subtitle">
            Custom website design and development tailored to your business goals. We create fast, secure, and
            SEO-optimized sites that deliver premium user experiences across all devices.
          </p>
          <div class="hero-actions">
            <a href="#contact" class="btn btn-green">
              <i class="fa-solid fa-code" style="margin-right:8px;"></i>
              Start Your Project
            </a>
            <a href="#solutions" class="btn btn-ghost-white">
              View Our Stack
            </a>
          </div>
          <div class="hero-trust">
            <div class="trust-avatars">
              <i>W</i><i>P</i><i>R</i><i>N</i><i>S</i>
            </div>
            <div class="trust-text">
              <strong>Trusted by Global Enterprises</strong>
              React, Next.js & Full-Stack Experts
            </div>
          </div>
        </div>
        <div class="hero-right">
          <div class="hero-illustration">
            <div class="hero-banner-frame fade-in">
              <img src="assets/images/web_dev_hero.png" alt="Web Development Excellence" class="hero-banner-img">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- LEAD THE MARKET SECTION -->
  <section class="section-pad" style="background: #fff;padding-bottom: 0px !important;">
    <div class="container">
      <div class="market-lead-box"
        style="background: #f8fafc; padding: 50px; border-radius: 30px; border: 1px solid #e2e8f0; position: relative; overflow: hidden;">
        <div
          style="position: absolute; top: -50px; right: -50px; width: 300px; height: 300px; background: rgba(107, 171, 68, 0.05); border-radius: 50%; z-index: 0;">
        </div>
        <div style="position: relative; z-index: 1;">
          <h2 style="font-size: 32px; font-weight: 800; color: var(--text-primary); margin-bottom: 30px;">Engineered for
            Impact: Rankmator’s Web Development Edge</h2>
          <ul style="list-style: none; padding: 0;">
            <li
              style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 20px; font-size: 18px; color: #475569;">
              <i class="fa-solid fa-circle-check"
                style="color: var(--secondary); font-size: 24px; margin-top: 2px;"></i>
              <span><strong>75% of users</strong> admit to making judgments on a company's credibility based on their
                website design.</span>
            </li>
            <li
              style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 20px; font-size: 18px; color: #475569;">
              <i class="fa-solid fa-circle-check"
                style="color: var(--secondary); font-size: 24px; margin-top: 2px;"></i>
              <span><strong>88% of online consumers</strong> are less likely to return to a site after a bad user
                experience.</span>
            </li>
            <li
              style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 20px; font-size: 18px; color: #475569;">
              <i class="fa-solid fa-circle-check"
                style="color: var(--secondary); font-size: 24px; margin-top: 2px;"></i>
              <span>Google Core Web Vitals optimized out-of-the-box for superior search rankings.</span>
            </li>
            <li
              style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 20px; font-size: 18px; color: #475569;">
              <i class="fa-solid fa-circle-check"
                style="color: var(--secondary); font-size: 24px; margin-top: 2px;"></i>
              <span>Scalable architecture designed to grow with your business traffic and complexity.</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- PLATFORM LOGOS -->
  <section style="background: #ffffff; border-bottom: 1px solid #e2e8f0; padding: 20px 0;">
    <div class="platform-slider-container fade-in">
      <div class="platform-logos-track">
        <!-- Tech Stack -->
        <div class="platform-logo"><i class="fa-brands fa-react"></i> React.js</div>
        <div class="platform-logo"><i class="fa-solid fa-bolt"></i> Next.js</div>
        <div class="platform-logo"><i class="fa-brands fa-wordpress"></i> WordPress</div>
        <div class="platform-logo"><i class="fa-brands fa-node-js"></i> Node.js</div>
        <div class="platform-logo"><i class="fa-brands fa-shopify"></i> Shopify</div>
        <div class="platform-logo"><i class="fa-brands fa-laravel"></i> Laravel</div>
        <!-- Duplicated for Scroll -->
        <div class="platform-logo"><i class="fa-brands fa-react"></i> React.js</div>
        <div class="platform-logo"><i class="fa-solid fa-bolt"></i> Next.js</div>
        <div class="platform-logo"><i class="fa-brands fa-wordpress"></i> WordPress</div>
        <div class="platform-logo"><i class="fa-brands fa-node-js"></i> Node.js</div>
        <div class="platform-logo"><i class="fa-brands fa-shopify"></i> Shopify</div>
        <div class="platform-logo"><i class="fa-brands fa-laravel"></i> Laravel</div>
      </div>
    </div>
  </section>

  <!-- FULL FUNNEL SOLUTIONS SECTION -->
  <section id="solutions" class="section-pad" style="background: #fcfcfc;">
    <div class="container">
      <div class="section-header" style="text-align: left; margin-bottom: 60px;">
        <h2 class="section-title" style="font-size: 42px; line-height: 1.2; margin-bottom: 25px;">End-to-End Web
          Solutions: From Discovery to Deployment</h2>
        <p class="section-subtitle" style="font-size: 18px; margin-left: 0;">We don't just write code; we build digital
          assets that drive revenue. Our development process combines aesthetic excellence with technical robustness.
        </p>
        <p style="font-size: 16px; color: #64748b; margin-top: 15px;">Our core Web Development services include:</p>
      </div>

      <div class="service-grid-premium">
        <!-- Card 1 -->
        <div class="premium-card">
          <div class="card-icon-wrap" style="background: #f8fafc; border: 1px solid #e2e8f0;"><i
              class="fa-solid fa-laptop-code" style="color: var(--secondary);"></i></div>
          <h3>Custom Web Applications</h3>
          <p>Complex, scalable web applications built with modern frameworks like React and Next.js for superior
            performance and user interactivity.</p>
          <a href="#contact" style="color: var(--secondary); display: block; margin-top: 20px; font-size: 20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <!-- Card 2 -->
        <div class="premium-card">
          <div class="card-icon-wrap" style="background: #f8fafc; border: 1px solid #e2e8f0;"><i
              class="fa-solid fa-pen-ruler" style="color: var(--secondary);"></i></div>
          <h3>UI/UX Design & Prototyping</h3>
          <p>User-centric design that prioritizes intuitive navigation, accessibility, and brand storytelling to
            maximize engagement and conversion.</p>
          <a href="#contact" style="color: var(--secondary); display: block; margin-top: 20px; font-size: 20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <!-- Card 3 -->
        <div class="premium-card">
          <div class="card-icon-wrap" style="background: #f8fafc; border: 1px solid #e2e8f0;"><i
              class="fa-solid fa-cart-shopping" style="color: var(--secondary);"></i></div>
          <h3>Full-Stack E-commerce</h3>
          <p>Robust online stores built on Shopify, Magento, or custom headless architectures, engineered for high
            volume SKU management and fast checkout.</p>
          <a href="#contact" style="color: var(--secondary); display: block; margin-top: 20px; font-size: 20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <!-- Card 4 -->
        <div class="premium-card">
          <div class="card-icon-wrap" style="background: #f8fafc; border: 1px solid #e2e8f0;"><i
              class="fa-solid fa-layer-group" style="color: var(--secondary);"></i></div>
          <h3>Enterprise CMS Solutions</h3>
          <p>Flexible and secure content management systems that empower your team to update content easily while
            maintaining brand consistency.</p>
          <a href="#contact" style="color: var(--secondary); display: block; margin-top: 20px; font-size: 20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <!-- Card 5 -->
        <div class="premium-card">
          <div class="card-icon-wrap" style="background: #f8fafc; border: 1px solid #e2e8f0;"><i
              class="fa-solid fa-plug" style="color: var(--secondary);"></i></div>
          <h3>API & Integrations</h3>
          <p>Seamlessly connecting your website with ERPs, CRMs, payment gateways, and third-party SaaS tools to
            automate your business workflows.</p>
          <a href="#contact" style="color: var(--secondary); display: block; margin-top: 20px; font-size: 20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <!-- Card 6 -->
        <div class="premium-card">
          <div class="card-icon-wrap" style="background: #f8fafc; border: 1px solid #e2e8f0;"><i
              class="fa-solid fa-gauge-high" style="color: var(--secondary);"></i></div>
          <h3>Performance Optimization</h3>
          <p>Advanced speed tuning, image optimization, and server-side enhancements to ensure your site loads instantly
            and stays ahead of search algorithms.</p>
          <a href="#contact" style="color: var(--secondary); display: block; margin-top: 20px; font-size: 20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <div style="text-align: center; margin-top: 50px;">
        <a href="#contact" class="btn btn-primary"
          style="padding: 15px 40px; border-radius: 10px; font-weight: 700;">Start Your Roadmap <i
            class="fa-solid fa-arrow-right" style="margin-left: 8px;"></i></a>
      </div>
    </div>
  </section>

  <!-- SEARCH INSIGHTS CTA BANNER -->
  <section class="section-pad" style="padding-top: 0;">
    <div class="container">
      <div class="insights-banner"
        style="background: var(--gradient-blue); border-radius: 20px; display: flex; align-items: center; padding: 0 40px; color: #fff; overflow: hidden; height: 180px; position: relative;">
        <div class="insights-img" style="width: 200px; height: 100%; display: flex; align-items: flex-end;">
          <img src="assets/images/seo_insights_cta.png" alt="Dev Insights"
            style="height: 120%; object-fit: contain; margin-bottom: -1px;">
        </div>
        <div class="insights-text" style="flex: 1; padding-left: 40px;">
          <h2 style="font-size: 28px; font-weight: 800; margin-bottom: 10px;">Is Your Website Underperforming?</h2>
          <p style="font-size: 16px; opacity: 0.9;">Get a free technical audit to identify speed bottlenecks and UI/UX
            friction points.</p>
        </div>
        <div class="insights-action">
          <a href="#contact" class="btn btn-white" style="border-radius: 50px; padding: 12px 30px;">Get Free Audit <i
              class="fa-solid fa-arrow-right" style="margin-left: 8px;"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES INCLUSION SLIDER SECTION -->
  <section class="section-pad" style="background: var(--primary); color: #fff;">
    <div class="container">
      <div class="section-header" style="text-align: left; margin-bottom: 40px;">
        <h2 class="section-title" style="color: #fff; font-size: 38px;">Our Scientific Development Process</h2>
        <p class="section-subtitle" style="color: rgba(255,255,255,0.9); margin-left: 0; max-width: 900px;">We follow a
          disciplined, agile methodology to ensure every line of code adds value and every design element serves a
          purpose.</p>
      </div>

      <!-- Category Slider -->
      <div class="service-slider-wrap"
        style="display: flex; align-items: center; gap: 15px; margin-bottom: 50px; overflow-x: auto; padding-bottom: 10px; scrollbar-width: none;">
        <button class="slider-nav-btn active" data-target="audit"
          style="background: var(--primary-dark); border: 1px solid rgba(255,255,255,0.3); color: #fff; padding: 12px 24px; border-radius: 50px; white-space: nowrap; font-weight: 600; cursor: pointer; transition: all 0.3s; display: flex; align-items: center; gap: 8px;">
          Discovery & Roadmap
        </button>
        <button class="slider-nav-btn" data-target="strategy"
          style="background: transparent; border: 1px solid rgba(255,255,255,0.3); color: #fff; padding: 12px 24px; border-radius: 50px; white-space: nowrap; font-weight: 600; cursor: pointer; transition: all 0.3s;">
          UI/UX Prototyping
        </button>
        <button class="slider-nav-btn" data-target="onpage"
          style="background: transparent; border: 1px solid rgba(255,255,255,0.3); color: #fff; padding: 12px 24px; border-radius: 50px; white-space: nowrap; font-weight: 600; cursor: pointer; transition: all 0.3s;">
          Agile Development
        </button>
        <button class="slider-nav-btn" data-target="offpage"
          style="background: transparent; border: 1px solid rgba(255,255,255,0.3); color: #fff; padding: 12px 24px; border-radius: 50px; white-space: nowrap; font-weight: 600; cursor: pointer; transition: all 0.3s;">
          Quality Assurance
        </button>
        <button class="slider-nav-btn" data-target="technical"
          style="background: transparent; border: 1px solid rgba(255,255,255,0.3); color: #fff; padding: 12px 24px; border-radius: 50px; white-space: nowrap; font-weight: 600; cursor: pointer; transition: all 0.3s;">
          Launch & Evolution
        </button>
      </div>

      <!-- Slider Content -->
      <div id="slider-content-area" style="background: rgba(0,0,0,0.1); border-radius: 30px; padding: 50px;">
        <div class="slider-panel active" id="panel-audit"
          style="grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; display: grid;">
          <div class="panel-left">
            <h3 style="font-size: 28px; margin-bottom: 20px;">Discovery & Roadmap</h3>
            <p style="font-size: 18px; margin-bottom: 30px; opacity: 0.9;">We begin by understanding your business DNA:
            </p>
            <ul style="list-style: none; padding: 0;">
              <li style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px; font-size: 16px;">
                <i class="fa-solid fa-circle-check" style="color: #fff; font-size: 20px;"></i>
                <span>Deep dive into business goals and target audiences</span>
              </li>
              <li style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px; font-size: 16px;">
                <i class="fa-solid fa-circle-check" style="color: #fff; font-size: 20px;"></i>
                <span>Technical feasibility study and tech stack selection</span>
              </li>
              <li style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px; font-size: 16px;">
                <i class="fa-solid fa-circle-check" style="color: #fff; font-size: 20px;"></i>
                <span>IA (Information Architecture) & site mapping</span>
              </li>
              <li style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px; font-size: 16px;">
                <i class="fa-solid fa-circle-check" style="color: #fff; font-size: 20px;"></i>
                <span>Project timeline and milestone definition</span>
              </li>
            </ul>
          </div>
          <div class="panel-right" style="text-align: right;">
            <img src="assets/images/seo_audit_graphic.png" alt="Dev Roadmap Graphic"
              style="max-width: 450px; border-radius: 50%; box-shadow: 0 20px 50px rgba(0,0,0,0.3);">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- VERTICAL GROWTH STATS -->
  <section class="section-pad" style="background: #f8fafc;">
    <div class="container">
      <div class="section-header" style="text-align: center; margin-bottom: 60px;">
        <div class="section-tag">Vertical Expertise</div>
        <h2 class="section-title">Dominating Specialized <span>Industries</span></h2>
        <p class="section-subtitle">Our development frameworks are customized for the unique requirements of your
          sector.</p>
      </div>

      <div class="service-grid-premium" style="grid-template-columns: repeat(3, 1fr); gap: 30px;">
        <!-- Fintech -->
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-building-columns"></i></div>
          <h3 style="font-size: 20px; margin-bottom: 15px;">Fintech & Banking</h3>
          <div class="vstat-number">99.9%</div>
          <div class="vstat-label">Security Uptime</div>
          <p style="margin-top: 15px; font-size: 14px; color: #64748b;">Enterprise-grade security and API-driven
            architectures for financial products.</p>
        </div>
        <!-- Healthcare -->
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-house-medical"></i></div>
          <h3 style="font-size: 20px; margin-bottom: 15px;">Healthcare</h3>
          <div class="vstat-number">100%</div>
          <div class="vstat-label">HIPAA Compliant</div>
          <p style="margin-top: 15px; font-size: 14px; color: #64748b;">Patient-first portals and secure medical data
            management systems.</p>
        </div>
        <!-- SaaS -->
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-cloud"></i></div>
          <h3 style="font-size: 20px; margin-bottom: 15px;">SaaS & Tech</h3>
          <div class="vstat-number">3x</div>
          <div class="vstat-label">Faster Time-to-Market</div>
          <p style="margin-top: 15px; font-size: 14px; color: #64748b;">Rapid MVP development and scalable
            infrastructure for tech startups.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- WHY WE ARE DIFFERENT TABLE -->
  <section class="section-pad" style="background: #fff;">
    <div class="container">
      <div class="section-header" style="text-align: center; margin-bottom: 60px;">
        <div class="section-tag">Comparison</div>
        <h2 class="section-title">The Rankmator <span>Dev Edge</span></h2>
        <p class="section-subtitle">We don't just build sites; we engineer growth engines.</p>
      </div>

      <table class="diff-table">
        <thead>
          <tr>
            <th>Core Capability</th>
            <th>Typical Template Providers</th>
            <th style="background: var(--secondary);">The Rankmator Edge</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="point-label">Code Quality</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i> Bloated, generic code</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i> Clean, Minified & Semantic</td>
          </tr>
          <tr>
            <td class="point-label">Speed</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i> Slow loading, poor scores</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>
              < 2s Loading & High CWV Scores</td>
          </tr>
          <tr>
            <td class="point-label">SEO Ready</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i> Ad-hoc plugins needed</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i> Integrated Architecture & Schema
            </td>
          </tr>
          <tr>
            <td class="point-label">Security</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i> High vulnerability risk</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i> Hardened Security Protocols</td>
          </tr>
          <tr>
            <td class="point-label">Support</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i> Hit-and-run delivery</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i> 72-hr Post Launch Monitoring</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- WHY TRUSTED SECTION -->
  <section class="section-pad" style="background: #ffffff; border-top: 1px solid #f0f0f0;">
    <div class="container">
      <div class="section-header" style="text-align: center; margin-bottom: 60px;">
        <div class="section-tag">Trust & Scale</div>
        <h2 class="section-title">Why Enterprises Trust Rankmator for <br /><span>Digital Engineering</span></h2>
        <p class="section-subtitle">We combine creative design with engineering excellence to deliver world-class web
          solutions.</p>
      </div>

      <div class="service-grid-premium" style="grid-template-columns: repeat(3, 1fr); gap: 30px;">
        <!-- Card 1 -->
        <div class="premium-card">
          <div class="card-icon-wrap"
            style="background: rgba(8, 104, 160, 0.05); border: 1px solid rgba(8, 104, 160, 0.1);"><i
              class="fa-solid fa-shield-halved" style="color: var(--primary);"></i></div>
          <h3>Security First</h3>
          <p>We implement the latest security standards, including SSL, DDoS protection, and regular security audits.
          </p>
        </div>
        <!-- Card 2 -->
        <div class="premium-card">
          <div class="card-icon-wrap"
            style="background: rgba(107, 171, 68, 0.05); border: 1px solid rgba(107, 171, 68, 0.1);"><i
              class="fa-solid fa-expand" style="color: var(--secondary);"></i></div>
          <h3>Infinite Scalability</h3>
          <p>Architecture designed to handle millions of users and process complex data without performance degradation.
          </p>
        </div>
        <!-- Card 3 -->
        <div class="premium-card">
          <div class="card-icon-wrap"
            style="background: rgba(8, 104, 160, 0.05); border: 1px solid rgba(8, 104, 160, 0.1);"><i
              class="fa-solid fa-laptop-medical" style="color: var(--primary);"></i></div>
          <h3>Omnichannel Focus</h3>
          <p>Seamlessly matching mobile app experiences with web presence for a unified brand journey.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ SECTION -->
  <section id="faq" class="section-pad" style="background: var(--primary-dark); color: #fff;">
    <div class="container">
      <div class="section-header">
        <div class="section-tag" style="color:var(--secondary);">Dev Expert Q&A</div>
        <h2 class="section-title" style="color:#fff;">Web Development FAQs</h2>
      </div>

      <div class="faq-container">
        <div class="faq-item">
          <div class="faq-question">
            <h4>How long does it take to build a custom website?</h4>
            <i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>A standard corporate project usually takes 6-10 weeks. Complex ecommerce or SaaS platforms can take 3-6
              months depending on functionality requirements.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>Which tech stack do you recommend?</h4>
            <i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>We typically recommend React/Next.js for high-performance apps, WordPress for content-heavy sites, and
              custom Node.js/Laravel for complex logic.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>Do you provide ongoing maintenance?</h4>
            <i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Yes, we offer monthly maintenance retainers that cover security updates, performance monitoring, and
              small feature enhancements.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>Will my site be SEO-friendly?</h4>
            <i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Absolutely. Every site we build includes technical SEO foundations like clean URL structure, Schema
              markup, and speed optimization as standard.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT FORM SECTION -->
  <section id="contact" class="section-pad"
    style="background: linear-gradient(rgba(255, 255, 255, 0.93), rgba(255, 255, 255, 0.98)), url('web_dev_hero.png') center/cover no-repeat; position: relative;">
    <div class="container" style="position: relative; z-index: 2;">
      <div class="section-header fade-in">
        <h2 class="section-title">Ready to <span>Build Your Vision?</span></h2>
        <p class="section-subtitle">Get a custom quote and technical roadmap for your next digital project.</p>
      </div>

      <div class="contact-grid">
        <!-- Left Column: Location Card -->
        <div class="contact-info-card fade-in">
          <div class="location-header">
            <div class="location-title">
              <i class="fa-solid fa-hotel"></i>
              <span>Delhi</span>
            </div>
            <span class="corp-badge">Corporate Office</span>
          </div>

          <div class="contact-detail-group">
            <span class="contact-detail-label">Email :</span>
            <div class="contact-detail-content">
              <i class="fa-solid fa-envelope"></i>
              <a href="mailto:rankmator@gmail.com">rankmator@gmail.com</a>
            </div>
          </div>

          <div class="contact-detail-group">
            <span class="contact-detail-label">Marketing :</span>
            <div class="contact-detail-content">
              <i class="fa-solid fa-phone"></i>
              <a href="tel:+919560864432">+91 9560864432</a>
            </div>
          </div>

          <div class="contact-detail-group">
            <span class="contact-detail-label">WhatsApp :</span>
            <div class="contact-detail-content">
              <i class="fa-brands fa-whatsapp"></i>
              <a href="https://api.whatsapp.com/send?phone=919560864432&text=Hi Rankmator!" target="_blank">Chat Now</a>
            </div>
          </div>

          <div class="info-card-footer">
            <a href="#" class="btn-direction">Get Direction <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>

        <!-- Right Column: Contact Form -->
        <div class="contact-form-side fade-in">
          <h3 style="font-size:24px; font-weight:800; margin-bottom:30px; color:var(--text-primary);">Request a
            Technical Proposal*</h3>
          <form class="main-contact-form" action="mail.php" method="POST">
            <div class="form-group">
              <input type="text" name="name" class="form-field" placeholder="Name *" required>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-field" placeholder="Email *" required>
            </div>
            <div class="form-group">
              <input type="tel" name="phone" class="form-field" placeholder="Phone *" required>
            </div>
            <div class="form-group-full">
              <textarea name="message" class="form-field" placeholder="Your Message"></textarea>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn-submit-main">
                Submit Now <i class="fa-solid fa-arrow-right"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>
  <script>
    // FAQ Accordion
    document.querySelectorAll('.faq-question').forEach(q => {
      q.addEventListener('click', () => {
        const item = q.parentElement;
        item.classList.toggle('active');
      });
    });

    // Service Inclusion Slider/Tabs
    const navBtns = document.querySelectorAll('.slider-nav-btn');
    const contentData = {
      audit: {
        title: "Discovery & Roadmap",
        desc: "We begin by understanding your business DNA:",
        items: [
          "Deep dive into business goals and target audiences",
          "Technical feasibility study and tech stack selection",
          "IA (Information Architecture) & site mapping",
          "Project timeline and milestone definition"
        ]
      },
      strategy: {
        title: "UI/UX Prototyping",
        desc: "Designing for user journey and engagement:",
        items: [
          "Wireframing key user journeys",
          "High-fidelity visual design (UI)",
          "Interactive prototyping for user feedback",
          "Style guide and design system creation"
        ]
      },
      onpage: {
        title: "Agile Development",
        desc: "Building with standard coding practices:",
        items: [
          "Frontend development using modern frameworks",
          "Secure backend and API construction",
          "Database architecture and optimization",
          "Integration of 3rd party services"
        ]
      },
      offpage: {
        title: "Quality Assurance",
        desc: "Meticulous testing before launch:",
        items: [
          "Cross-browser and device compatibility testing",
          "Security vulnerability scanning",
          "Speed and performance benchmarking",
          "User acceptance testing (UAT)"
        ]
      },
      technical: {
        title: "Launch & Evolution",
        desc: "Seamless deployment and beyond:",
        items: [
          "Server configuration and deployment",
          "Post-launch monitoring and bug fixing",
          "Performance tracking and analysis",
          "Continuous evolution and updates"
        ]
      }
    };

    navBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        const target = btn.getAttribute('data-target');

        // Update Buttons
        navBtns.forEach(b => {
          b.style.background = 'transparent';
          b.classList.remove('active');
        });
        btn.style.background = 'var(--primary-dark)';
        btn.classList.add('active');

        // Update Content
        const data = contentData[target];
        const titleEl = document.querySelector('#panel-audit h3');
        const descEl = document.querySelector('#panel-audit p');
        const listEl = document.querySelector('#panel-audit ul');

        titleEl.textContent = data.title;
        descEl.textContent = data.desc;

        listEl.innerHTML = data.items.map(item => `
          <li style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px; font-size: 16px;">
            <i class="fa-solid fa-circle-check" style="color: #fff; font-size: 20px;"></i>
            <span>${item}</span>
          </li>
        `).join('');
      });
    });
  </script>
</body>

</html>