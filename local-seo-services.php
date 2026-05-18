<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Local SEO Services to Dominate Your Market | Rankmator</title>
  <meta name="description"
    content="Boost your local visibility with Rankmator's expert Local SEO services. Optimize your Google Business Profile, build local citations, and rank for 'near me' searches in 2025." />
  <?php include 'links.php'; ?>
  <style>
    /* Page Specific Styles */
    .hero-local {
      background: var(--gradient-hero);
      padding: 60px 0 60px;
      position: relative;
      overflow: hidden;
    }

    .hero-local::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');
      opacity: 0.1;
    }

    .hero-badge-local {
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

    .hero-badge-dot-local {
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
  <section class="hero-local">
    <div class="hero-orbs">
      <div class="orb orb-1"></div>
      <div class="orb orb-2"></div>
    </div>
    <div class="container">
      <div class="hero-grid">
        <div class="hero-left">
          <div class="hero-badge-local">
            <div class="hero-badge-dot-local"></div>
            Expert Local SEO Services
          </div>
          <h1 class="hero-title">
            Dominate Your <br />
            <span class="highlight">Neighborhood with AI</span><br />
            Local SEO & GMB
          </h1>
          <p class="hero-subtitle">
            Get found by customers near you. We optimize your business for Google Maps, Yelp, and LLMs to ensure you're
            the first choice when locals search for your services.
          </p>
          <div class="hero-actions">
            <a href="#contact" class="btn btn-green">
              <i class="fa-solid fa-location-dot" style="margin-right:8px;"></i>
              Get a Free Local SEO Audit
            </a>
            <a href="#solutions" class="btn btn-ghost-white">
              Explore Solutions
            </a>
          </div>
          <div class="hero-trust">
            <div class="trust-avatars">
              <i>D</i><i>R</i><i>A</i><i>P</i><i>M</i>
            </div>
            <div class="trust-text">
              <strong>Trusted by 500+ Local Businesses</strong>
              GMB, Yelp & Local Citation Experts
            </div>
          </div>
        </div>
        <div class="hero-right">
          <div class="hero-illustration">
            <div class="hero-banner-frame fade-in">
              <img src="assets/images/local_seo_hero.png" alt="Local SEO Excellence" class="hero-banner-img">
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
          <h2 style="font-size: 32px; font-weight: 800; color: var(--text-primary); margin-bottom: 30px;">Grow Your
            Local Footprint with Rankmator’s Specialized Local SEO</h2>
          <ul style="list-style: none; padding: 0;">
            <li
              style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 20px; font-size: 18px; color: #475569;">
              <i class="fa-solid fa-circle-check"
                style="color: var(--secondary); font-size: 24px; margin-top: 2px;"></i>
              <span><strong>46% of all Google searches</strong> are seeking local information.</span>
            </li>
            <li
              style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 20px; font-size: 18px; color: #475569;">
              <i class="fa-solid fa-circle-check"
                style="color: var(--secondary); font-size: 24px; margin-top: 2px;"></i>
              <span><strong>88% of searches</strong> for local businesses on a mobile device result in a call or visit
                within 24 hours.</span>
            </li>
            <li
              style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 20px; font-size: 18px; color: #475569;">
              <i class="fa-solid fa-circle-check"
                style="color: var(--secondary); font-size: 24px; margin-top: 2px;"></i>
              <span>Google Premier Partner – Specialized in Local Search & Map Pack rankings.</span>
            </li>
            <li
              style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 20px; font-size: 18px; color: #475569;">
              <i class="fa-solid fa-circle-check"
                style="color: var(--secondary); font-size: 24px; margin-top: 2px;"></i>
              <span>Proven strategies for multi-location enterprises and local brick-and-mortar stores.</span>
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
        <!-- Local Platforms -->
        <div class="platform-logo"><i class="fa-brands fa-google"></i> Google Maps</div>
        <div class="platform-logo"><i class="fa-brands fa-apple"></i> Apple Maps</div>
        <div class="platform-logo"><i class="fa-brands fa-facebook"></i> FB Local</div>
        <div class="platform-logo"><i class="fa-brands fa-yelp"></i> Yelp</div>
        <div class="platform-logo"><i class="fa-solid fa-map-pin"></i> Bing Places</div>
        <div class="platform-logo"><i class="fa-solid fa-house-chimney"></i> Nextdoor</div>
        <!-- Duplicated for Scroll -->
        <div class="platform-logo"><i class="fa-brands fa-google"></i> Google Maps</div>
        <div class="platform-logo"><i class="fa-brands fa-apple"></i> Apple Maps</div>
        <div class="platform-logo"><i class="fa-brands fa-facebook"></i> FB Local</div>
        <div class="platform-logo"><i class="fa-brands fa-yelp"></i> Yelp</div>
        <div class="platform-logo"><i class="fa-solid fa-map-pin"></i> Bing Places</div>
        <div class="platform-logo"><i class="fa-solid fa-house-chimney"></i> Nextdoor</div>
      </div>
    </div>
  </section>

  <!-- FULL FUNNEL SOLUTIONS SECTION -->
  <section id="solutions" class="section-pad" style="background: #fcfcfc;">
    <div class="container">
      <div class="section-header" style="text-align: left; margin-bottom: 60px;">
        <h2 class="section-title" style="font-size: 42px; line-height: 1.2; margin-bottom: 25px;">Hyper-Local Search
          Solutions: Be the First Business Your Customers See</h2>
        <p class="section-subtitle" style="font-size: 18px; margin-left: 0;">Rankmator's Local SEO services are designed
          to maximize your visibility in the "Map Pack" and "Near Me" results. We optimize every touchpoint from
          discovery to decision.</p>
        <p style="font-size: 16px; color: #64748b; margin-top: 15px;">Our core Local SEO components include:</p>
      </div>

      <div class="service-grid-premium">
        <!-- Card 1 -->
        <div class="premium-card">
          <div class="card-icon-wrap" style="background: #f8fafc; border: 1px solid #e2e8f0;"><i
              class="fa-solid fa-store" style="color: var(--secondary);"></i></div>
          <h3>Google Business Profile (GMB)</h3>
          <p>Full optimization of your Google Business Profile to ensure you show up in the Local 3-Pack with correct
            info, photos, and Q&A.</p>
          <a href="#contact" style="color: var(--secondary); display: block; margin-top: 20px; font-size: 20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <!-- Card 2 -->
        <div class="premium-card">
          <div class="card-icon-wrap" style="background: #f8fafc; border: 1px solid #e2e8f0;"><i
              class="fa-solid fa-quote-left" style="color: var(--secondary);"></i></div>
          <h3>Local Citation Management</h3>
          <p>We build and maintain your business information across high-authority local directories and niche platforms
            to ensure NAP consistency.</p>
          <a href="#contact" style="color: var(--secondary); display: block; margin-top: 20px; font-size: 20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <!-- Card 3 -->
        <div class="premium-card">
          <div class="card-icon-wrap" style="background: #f8fafc; border: 1px solid #e2e8f0;"><i
              class="fa-solid fa-star-half-stroke" style="color: var(--secondary);"></i></div>
          <h3>Review & Reputation Management</h3>
          <p>Strategic review acquisition and management to build trust and authority, directly impacting your local
            ranking signals.</p>
          <a href="#contact" style="color: var(--secondary); display: block; margin-top: 20px; font-size: 20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <!-- Card 4 -->
        <div class="premium-card">
          <div class="card-icon-wrap" style="background: #f8fafc; border: 1px solid #e2e8f0;"><i
              class="fa-solid fa-pen-nib" style="color: var(--secondary);"></i></div>
          <h3>Hyper-Local Content Strategy</h3>
          <p>Creating location-specific landing pages and blog content that resonate with your local community and
            target geo-specific keywords.</p>
          <a href="#contact" style="color: var(--secondary); display: block; margin-top: 20px; font-size: 20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <!-- Card 5 -->
        <div class="premium-card">
          <div class="card-icon-wrap" style="background: #f8fafc; border: 1px solid #e2e8f0;"><i
              class="fa-solid fa-code" style="color: var(--secondary);"></i></div>
          <h3>Local Schema Implementation</h3>
          <p>Deploying specialized Schema markup for local businesses to help search engines understand your location,
            service area, and hours.</p>
          <a href="#contact" style="color: var(--secondary); display: block; margin-top: 20px; font-size: 20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <!-- Card 6 -->
        <div class="premium-card">
          <div class="card-icon-wrap" style="background: #f8fafc; border: 1px solid #e2e8f0;"><i
              class="fa-solid fa-bullseye" style="color: var(--secondary);"></i></div>
          <h3>Geo-Targeted Local Ads</h3>
          <p>Precision-targeted local search ads (LSAs) and Google Maps ads to drive immediate foot traffic and calls
            from high-intent local buyers.</p>
          <a href="#contact" style="color: var(--secondary); display: block; margin-top: 20px; font-size: 20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <div style="text-align: center; margin-top: 50px;">
        <a href="#contact" class="btn btn-primary"
          style="padding: 15px 40px; border-radius: 10px; font-weight: 700;">Claim Your Local Audit <i
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
          <img src="assets/images/seo_insights_cta.png" alt="Local Search Insights"
            style="height: 120%; object-fit: contain; margin-bottom: -1px;">
        </div>
        <div class="insights-text" style="flex: 1; padding-left: 40px;">
          <h2 style="font-size: 28px; font-weight: 800; margin-bottom: 10px;">Who Is Searching For You Locally?</h2>
          <p style="font-size: 16px; opacity: 0.9;">Identify high-volume 'near me' keywords and capture ready-to-buy
            customers in your city.</p>
        </div>
        <div class="insights-action">
          <a href="#contact" class="btn btn-white" style="border-radius: 50px; padding: 12px 30px;">Get Report <i
              class="fa-solid fa-arrow-right" style="margin-left: 8px;"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES INCLUSION SLIDER SECTION -->
  <section class="section-pad" style="background: var(--primary); color: #fff;">
    <div class="container">
      <div class="section-header" style="text-align: left; margin-bottom: 40px;">
        <h2 class="section-title" style="color: #fff; font-size: 38px;">What's Inside Our Local SEO Growth Engine?</h2>
        <p class="section-subtitle" style="color: rgba(255,255,255,0.9); margin-left: 0; max-width: 900px;">Rankmator
          delivers a data-led approach to local dominance. From audit to authority, we cover it all.</p>
      </div>

      <!-- Category Slider -->
      <div class="service-slider-wrap"
        style="display: flex; align-items: center; gap: 15px; margin-bottom: 50px; overflow-x: auto; padding-bottom: 10px; scrollbar-width: none;">
        <button class="slider-nav-btn active" data-target="audit"
          style="background: var(--primary-dark); border: 1px solid rgba(255,255,255,0.3); color: #fff; padding: 12px 24px; border-radius: 50px; white-space: nowrap; font-weight: 600; cursor: pointer; transition: all 0.3s; display: flex; align-items: center; gap: 8px;">
          Local Presence Audit
        </button>
        <button class="slider-nav-btn" data-target="strategy"
          style="background: transparent; border: 1px solid rgba(255,255,255,0.3); color: #fff; padding: 12px 24px; border-radius: 50px; white-space: nowrap; font-weight: 600; cursor: pointer; transition: all 0.3s;">
          GMB Optimization Strategy
        </button>
        <button class="slider-nav-btn" data-target="onpage"
          style="background: transparent; border: 1px solid rgba(255,255,255,0.3); color: #fff; padding: 12px 24px; border-radius: 50px; white-space: nowrap; font-weight: 600; cursor: pointer; transition: all 0.3s;">
          Hyper-Local On-Page
        </button>
        <button class="slider-nav-btn" data-target="offpage"
          style="background: transparent; border: 1px solid rgba(255,255,255,0.3); color: #fff; padding: 12px 24px; border-radius: 50px; white-space: nowrap; font-weight: 600; cursor: pointer; transition: all 0.3s;">
          Citation & Link Building
        </button>
        <button class="slider-nav-btn" data-target="technical"
          style="background: transparent; border: 1px solid rgba(255,255,255,0.3); color: #fff; padding: 12px 24px; border-radius: 50px; white-space: nowrap; font-weight: 600; cursor: pointer; transition: all 0.3s;">
          Technical Local SEO
        </button>
      </div>

      <!-- Slider Content -->
      <div id="slider-content-area" style="background: rgba(0,0,0,0.1); border-radius: 30px; padding: 50px;">
        <div class="slider-panel active" id="panel-audit"
          style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
          <div class="panel-left">
            <h3 style="font-size: 28px; margin-bottom: 20px;">Local Presence Audit</h3>
            <p style="font-size: 18px; margin-bottom: 30px; opacity: 0.9;">We deep-dive into your current local
              standing:
            </p>
            <ul style="list-style: none; padding: 0;">
              <li style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px; font-size: 16px;">
                <i class="fa-solid fa-circle-check" style="color: #fff; font-size: 20px;"></i>
                <span>GMB Health & Compliance check</span>
              </li>
              <li style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px; font-size: 16px;">
                <i class="fa-solid fa-circle-check" style="color: #fff; font-size: 20px;"></i>
                <span>Local Search Visibility vs Competitors</span>
              </li>
              <li style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px; font-size: 16px;">
                <i class="fa-solid fa-circle-check" style="color: #fff; font-size: 20px;"></i>
                <span>NAP Consistency & Citation Audit</span>
              </li>
              <li style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px; font-size: 16px;">
                <i class="fa-solid fa-circle-check" style="color: #fff; font-size: 20px;"></i>
                <span>Review velocity and sentiment analysis</span>
              </li>
            </ul>
          </div>
          <div class="panel-right" style="text-align: right;">
            <img src="assets/images/seo_audit_graphic.png" alt="Local SEO Audit Graphic"
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
        <div class="section-tag">Industry Focus</div>
        <h2 class="section-title">Scaling Results for <span>Local Vertical</span></h2>
        <p class="section-subtitle">We specialize in hyper-local growth for service-based and physical storefront
          industries.</p>
      </div>

      <div class="service-grid-premium" style="grid-template-columns: repeat(3, 1fr); gap: 30px;">
        <!-- Real Estate -->
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-house-laptop"></i></div>
          <h3 style="font-size: 20px; margin-bottom: 15px;">Real Estate</h3>
          <div class="vstat-number">4x</div>
          <div class="vstat-label">Qualified Local Leads</div>
          <p style="margin-top: 15px; font-size: 14px; color: #64748b;">Dominating local neighborhood searches for
            agencies and developers.</p>
        </div>
        <!-- Healthcare -->
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-user-doctor"></i></div>
          <h3 style="font-size: 20px; margin-bottom: 15px;">Healthcare</h3>
          <div class="vstat-number">350%</div>
          <div class="vstat-label">Increase in Patient Calls</div>
          <p style="margin-top: 15px; font-size: 14px; color: #64748b;">Scaling clinic appointments via Map Pack
            visibility and E-E-A-T.</p>
        </div>
        <!-- Law -->
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-gavel"></i></div>
          <h3 style="font-size: 20px; margin-bottom: 15px;">Law Firms</h3>
          <div class="vstat-number">2.5x</div>
          <div class="vstat-label">Trust & Case Intake</div>
          <p style="margin-top: 15px; font-size: 14px; color: #64748b;">Creating high-authority local presences for
            competitive legal niches.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- WHY WE ARE DIFFERENT TABLE -->
  <section class="section-pad" style="background: #fff;">
    <div class="container">
      <div class="section-header" style="text-align: center; margin-bottom: 60px;">
        <div class="section-tag">Comparison</div>
        <h2 class="section-title">Why Our <span>Local SEO</span> Wins</h2>
        <p class="section-subtitle">We go beyond simple directory submissions to build true local authority.</p>
      </div>

      <table class="diff-table">
        <thead>
          <tr>
            <th>Core Capability</th>
            <th>Basic Local SEO</th>
            <th style="background: var(--secondary);">The Rankmator Edge</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="point-label">GMB Strategy</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i> Basic info update only</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i> AI-Optimized Q&A, Posts & Geotagging
            </td>
          </tr>
          <tr>
            <td class="point-label">Citations</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i> Automated generic lists</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i> Premium Niche & Local Authority
              Citations</td>
          </tr>
          <tr>
            <td class="point-label">Reporting</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i> Simple monthly PDF</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i> Real-time Map Ranking & Call
              Tracking</td>
          </tr>
          <tr>
            <td class="point-label">Content</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i> Stock city landing pages</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i> Hyper-local original content &
              Schema</td>
          </tr>
          <tr>
            <td class="point-label">Reviews</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i> Ignore or reactive</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i> Proactive AI Sentiment Management
            </td>
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
        <h2 class="section-title">Why Businesses Trust Rankmator for <br /><span>Local Excellence</span></h2>
        <p class="section-subtitle">We combine city-specific knowledge with global SEO standards to put your business on
          the map.</p>
      </div>

      <div class="service-grid-premium" style="grid-template-columns: repeat(3, 1fr); gap: 30px;">
        <!-- Card 1 -->
        <div class="premium-card">
          <div class="card-icon-wrap"
            style="background: rgba(8, 104, 160, 0.05); border: 1px solid rgba(8, 104, 160, 0.1);"><i
              class="fa-solid fa-bullseye" style="color: var(--primary);"></i></div>
          <h3>Geo-Targeted Precision</h3>
          <p>We target the exact suburbs and zip codes where your customers live, ensuring no budget is wasted on
            irrelevant traffic.</p>
        </div>
        <!-- Card 2 -->
        <div class="premium-card">
          <div class="card-icon-wrap"
            style="background: rgba(107, 171, 68, 0.05); border: 1px solid rgba(107, 171, 68, 0.1);"><i
              class="fa-solid fa-arrows-to-circle" style="color: var(--secondary);"></i></div>
          <h3>MAP-Pack Domination</h3>
          <p>Strategic focus on the Local 3-Pack, where 70% of local Clicks happen, ensuring your brand is the obvious
            choice.</p>
        </div>
        <!-- Card 3 -->
        <div class="premium-card">
          <div class="card-icon-wrap"
            style="background: rgba(8, 104, 160, 0.05); border: 1px solid rgba(8, 104, 160, 0.1);"><i
              class="fa-solid fa-link" style="color: var(--primary);"></i></div>
          <h3>Local Link Building</h3>
          <p>Acquiring links from local newspapers, blogs, and community portals to establish authentic local authority.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ SECTION -->
  <section id="faq" class="section-pad" style="background: var(--primary-dark); color: #fff;">
    <div class="container">
      <div class="section-header">
        <div class="section-tag" style="color:var(--secondary);">Local FAQ</div>
        <h2 class="section-title" style="color:#fff;">Local SEO Service FAQs</h2>
      </div>

      <div class="faq-container">
        <div class="faq-item">
          <div class="faq-question">
            <h4>How long does it take to rank in Google Maps?</h4>
            <i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Significant improvements can often be seen in 30-90 days, depending on existing competition and profile
              health. Full domination typically takes 4-6 months.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>Can you help with multi-location businesses?</h4>
            <i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Yes, we specialize in enterprise Local SEO architectures for brands with hundreds of locations, ensuring
              centralized management with local relevance.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>What is GMB optimization?</h4>
            <i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>It's the process of technical and content enhancement of your Google Business Profile to improve signals
              like relevance, distance, and prominence.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>How do you handle negative reviews?</h4>
            <i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>We help implement response strategies and review acquisition funnels to bury negative feedback with
              high-quality, authentic positive experiences.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT FORM SECTION -->
  <section id="contact" class="section-pad"
    style="background: linear-gradient(rgba(255, 255, 255, 0.93), rgba(255, 255, 255, 0.98)), url('local_seo_hero.png') center/cover no-repeat; position: relative;">
    <div class="container" style="position: relative; z-index: 2;">
      <div class="section-header fade-in">
        <h2 class="section-title">Claim Your <span>Local Market</span></h2>
        <p class="section-subtitle">Get a free local SEO health check and GMB audit today.</p>
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
          <h3 style="font-size:24px; font-weight:800; margin-bottom:30px; color:var(--text-primary);">Request a Free
            Local Audit*</h3>
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
        title: "Local Presence Audit",
        desc: "We deep-dive into your current local standing:",
        items: [
          "GMB Health & Compliance check",
          "Local Search Visibility vs Competitors",
          "NAP Consistency & Citation Audit",
          "Review velocity and sentiment analysis"
        ]
      },
      strategy: {
        title: "GMB Optimization Strategy",
        desc: "A data-driven plan to dominate the Local 3-Pack:",
        items: [
          "Category and attribute optimization for relevance",
          "Keyword-rich business description and service listings",
          "Strategic GMB posting schedule creation",
          "Geo-tagged photo and video upload roadmap"
        ]
      },
      onpage: {
        title: "Hyper-Local On-Page",
        desc: "Optimizing your website for local intent:",
        items: [
          "Location-specific keyword targeting in metadata",
          "Service area page creation and optimization",
          "Local map embedding and schema markup",
          "Localized internal linking strategy"
        ]
      },
      offpage: {
        title: "Citation & Link Building",
        desc: "Building authentic local authority:",
        items: [
          "High-DA local directory submissions",
          "Niche-relevant business citations",
          "Local community and portal link acquisition",
          "Competitor citation gap analysis"
        ]
      },
      technical: {
        title: "Technical Local SEO",
        desc: "Backend fixes for local performance:",
        items: [
          "Mobile performance audit for on-the-go searches",
          "Local Business JSON-LD schema implementation",
          "Core Web Vitals check for location pages",
          "Site structure audit for multi-location SEO"
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