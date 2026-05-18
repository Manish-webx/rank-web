<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Social Media Marketing Services | Rankmator</title>
  <meta name="description"
    content="Transform your brand with Rankmator's Social Media Marketing services. Expert strategies for Meta, Instagram, LinkedIn & more. Build communities, drive engagement, and grow revenue." />
  <?php include 'links.php'; ?>
  <style>
    .hero-smm {
      background: var(--gradient-hero);
      padding: 60px 0;
      position: relative;
      overflow: hidden;
    }

    .hero-smm::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');
      opacity: 0.1;
    }

    .hero-badge-smm {
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

    .hero-badge-dot-smm {
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
      background: #fff;
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
      background: linear-gradient(to right, #fff, transparent);
    }

    .platform-slider-container::after {
      right: 0;
      background: linear-gradient(to left, #fff, transparent);
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
  <!-- TOP BAR -->
  <?php include 'header.php'; ?>

  <!-- HERO -->
  <section class="hero-smm">
    <div class="hero-orbs">
      <div class="orb orb-1"></div>
      <div class="orb orb-2"></div>
    </div>
    <div class="container">
      <div class="hero-grid">
        <div class="hero-left">
          <div class="hero-badge-smm">
            <div class="hero-badge-dot-smm"></div>India's #1 Social Media Agency
          </div>
          <h1 class="hero-title">Build Brands That <br /><span class="highlight">Dominate Social</span><br />Media
            Globally</h1>
          <p class="hero-subtitle">From viral content to precision-targeted paid campaigns, Rankmator transforms your
            social media presence into a powerful revenue-generating engine. Meta, Instagram, LinkedIn, X & more.</p>
          <div class="hero-actions">
            <a href="#contact" class="btn btn-green"><i class="fa-solid fa-share-nodes"
                style="margin-right:8px;"></i>Grow My Audience</a>
            <a href="#solutions" class="btn btn-ghost-white">View Our Approach</a>
          </div>
          <div class="hero-trust">
            <div class="trust-avatars"><i>S</i><i>R</i><i>A</i><i>P</i><i>M</i></div>
            <div class="trust-text"><strong>300+ Brands Trust Us</strong> 5x Engagement Growth Delivered</div>
          </div>
        </div>
        <div class="hero-right">
          <div class="hero-illustration">
            <div class="hero-banner-frame fade-in">
              <img src="assets/images/social_media_hero.png" alt="Social Media Marketing Excellence"
                class="hero-banner-img">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MARKET IMPACT -->
  <section class="section-pad" style="background:#fff;padding-bottom:0!important;">
    <div class="container">
      <div class="market-lead-box"
        style="background:#f8fafc;padding:50px;border-radius:30px;border:1px solid #e2e8f0;position:relative;overflow:hidden;">
        <div
          style="position:absolute;top:-50px;right:-50px;width:300px;height:300px;background:rgba(107,171,68,0.05);border-radius:50%;z-index:0;">
        </div>
        <div style="position:relative;z-index:1;">
          <h2 style="font-size:32px;font-weight:800;color:var(--text-primary);margin-bottom:30px;">Why Social Media
            Marketing Is Non-Negotiable for Growth</h2>
          <ul style="list-style:none;padding:0;">
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span><strong>5.04 billion
                  people</strong> use social media globally — your audience is already there, waiting.</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>We delivered <strong>5x
                  engagement growth</strong> for 200+ brands across Facebook, Instagram, and LinkedIn.</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>Brands that invest in social
                media report <strong>32% higher revenue growth</strong> vs. non-social-active competitors.</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>Our AI-powered social listening
                tracks real-time brand sentiment and competitor moves 24/7.</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- PLATFORM MARQUEE -->
  <section style="background:#fff;border-bottom:1px solid #e2e8f0;padding:20px 0;">
    <div class="platform-slider-container fade-in">
      <div class="platform-logos-track">
        <div class="platform-logo"><i class="fa-brands fa-facebook"></i> Facebook</div>
        <div class="platform-logo"><i class="fa-brands fa-instagram"></i> Instagram</div>
        <div class="platform-logo"><i class="fa-brands fa-linkedin"></i> LinkedIn</div>
        <div class="platform-logo"><i class="fa-brands fa-x-twitter"></i> X / Twitter</div>
        <div class="platform-logo"><i class="fa-brands fa-youtube"></i> YouTube</div>
        <div class="platform-logo"><i class="fa-brands fa-pinterest"></i> Pinterest</div>
        <div class="platform-logo"><i class="fa-brands fa-facebook"></i> Facebook</div>
        <div class="platform-logo"><i class="fa-brands fa-instagram"></i> Instagram</div>
        <div class="platform-logo"><i class="fa-brands fa-linkedin"></i> LinkedIn</div>
        <div class="platform-logo"><i class="fa-brands fa-x-twitter"></i> X / Twitter</div>
        <div class="platform-logo"><i class="fa-brands fa-youtube"></i> YouTube</div>
        <div class="platform-logo"><i class="fa-brands fa-pinterest"></i> Pinterest</div>
      </div>
    </div>
  </section>

  <!-- SERVICES GRID -->
  <section id="solutions" class="section-pad" style="background:#fcfcfc;">
    <div class="container">
      <div class="section-header" style="text-align:left;margin-bottom:60px;">
        <h2 class="section-title" style="font-size:42px;line-height:1.2;margin-bottom:25px;">Full-Spectrum Social Media
          Marketing Services</h2>
        <p class="section-subtitle" style="font-size:18px;margin-left:0;">We don't just post content — we engineer
          social strategies that build communities, grow awareness, and convert followers into loyal customers.</p>
      </div>
      <div class="service-grid-premium">
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-calendar-days" style="color:var(--secondary);"></i></div>
          <h3>Social Media Strategy</h3>
          <p>Bespoke monthly content calendars, campaign blueprints, and competitive intelligence tailored to your brand
            voice and business goals.</p>
          <a href="#contact" style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-palette" style="color:var(--secondary);"></i></div>
          <h3>Creative Content &amp; Design</h3>
          <p>High-impact reels, carousels, infographics, and stories crafted by our in-house creative studio to stop the
            scroll and drive action.</p>
          <a href="#contact" style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i class="fa-solid fa-users"
              style="color:var(--secondary);"></i></div>
          <h3>Community Management</h3>
          <p>Proactive comment moderation, DM management, and community engagement to build brand loyalty and turn
            customers into advocates.</p>
          <a href="#contact" style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-bullseye" style="color:var(--secondary);"></i></div>
          <h3>Paid Social Campaigns</h3>
          <p>ROI-focused Meta, LinkedIn, and X ad campaigns with advanced audience targeting, A/B testing, and real-time
            budget optimization.</p>
          <a href="#contact" style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i class="fa-solid fa-star"
              style="color:var(--secondary);"></i></div>
          <h3>Influencer Marketing</h3>
          <p>End-to-end influencer sourcing, briefing, campaign management, and performance tracking across nano, micro,
            and macro influencers.</p>
          <a href="#contact" style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-chart-bar" style="color:var(--secondary);"></i></div>
          <h3>Social Listening &amp; Analytics</h3>
          <p>AI-powered brand monitoring, sentiment analysis, competitor benchmarking, and monthly performance reports
            with actionable insights.</p>
          <a href="#contact" style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <div style="text-align:center;margin-top:50px;">
        <a href="#contact" class="btn btn-primary" style="padding:15px 40px;border-radius:10px;font-weight:700;">Book
          Free Consultation <i class="fa-solid fa-arrow-right" style="margin-left:8px;"></i></a>
      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="section-pad" style="padding-top:0;">
    <div class="container">
      <div class="insights-banner"
        style="background:var(--gradient-blue);border-radius:20px;display:flex;align-items:center;padding:0 40px;color:#fff;overflow:hidden;height:180px;position:relative;">
        <div class="insights-img" style="width:200px;height:100%;display:flex;align-items:flex-end;">
          <img src="assets/images/seo_insights_cta.png" alt="Social Media Audit"
            style="height:120%;object-fit:contain;margin-bottom:-1px;">
        </div>
        <div class="insights-text" style="flex:1;padding-left:40px;">
          <h2 style="font-size:28px;font-weight:800;margin-bottom:10px;">Is Your Social Media Driving Real Revenue?</h2>
          <p style="font-size:16px;opacity:0.9;">Get a free social media audit and discover untapped growth
            opportunities for your brand.</p>
        </div>
        <div class="insights-action">
          <a href="#contact" class="btn btn-white" style="border-radius:50px;padding:12px 30px;">Free Audit <i
              class="fa-solid fa-arrow-right" style="margin-left:8px;"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- PROCESS SECTION -->
  <section class="section-pad" style="background:var(--primary);color:#fff;">
    <div class="container">
      <div class="section-header" style="text-align:left;margin-bottom:40px;">
        <h2 class="section-title" style="color:#fff;font-size:38px;">Our Data-Driven Social Media Process</h2>
        <p class="section-subtitle" style="color:rgba(255,255,255,0.9);margin-left:0;max-width:900px;">We follow a
          proven, scientific methodology that ensures every piece of content and every ad penny delivers maximum impact
          for your business.</p>
      </div>
      <div class="service-slider-wrap"
        style="display:flex;align-items:center;gap:15px;margin-bottom:50px;overflow-x:auto;padding-bottom:10px;scrollbar-width:none;">
        <button class="slider-nav-btn active" data-target="audit"
          style="background:var(--primary-dark);border:1px solid rgba(255,255,255,0.3);color:#fff;padding:12px 24px;border-radius:50px;white-space:nowrap;font-weight:600;cursor:pointer;transition:all 0.3s;display:flex;align-items:center;gap:8px;">Brand
          Audit &amp; Strategy</button>
        <button class="slider-nav-btn" data-target="strategy"
          style="background:transparent;border:1px solid rgba(255,255,255,0.3);color:#fff;padding:12px 24px;border-radius:50px;white-space:nowrap;font-weight:600;cursor:pointer;transition:all 0.3s;">Content
          Creation</button>
        <button class="slider-nav-btn" data-target="onpage"
          style="background:transparent;border:1px solid rgba(255,255,255,0.3);color:#fff;padding:12px 24px;border-radius:50px;white-space:nowrap;font-weight:600;cursor:pointer;transition:all 0.3s;">Publishing
          &amp; Engagement</button>
        <button class="slider-nav-btn" data-target="offpage"
          style="background:transparent;border:1px solid rgba(255,255,255,0.3);color:#fff;padding:12px 24px;border-radius:50px;white-space:nowrap;font-weight:600;cursor:pointer;transition:all 0.3s;">Paid
          Amplification</button>
        <button class="slider-nav-btn" data-target="technical"
          style="background:transparent;border:1px solid rgba(255,255,255,0.3);color:#fff;padding:12px 24px;border-radius:50px;white-space:nowrap;font-weight:600;cursor:pointer;transition:all 0.3s;">Reporting
          &amp; Optimization</button>
      </div>
      <div id="slider-content-area" style="background:rgba(0,0,0,0.1);border-radius:30px;padding:50px;">
        <div class="slider-panel active" id="panel-audit"
          style="grid-template-columns:1fr 1fr;gap:60px;align-items:center;display:grid;">
          <div class="panel-left">
            <h3 style="font-size:28px;margin-bottom:20px;">Brand Audit &amp; Strategy</h3>
            <p style="font-size:18px;margin-bottom:30px;opacity:0.9;">We begin with a comprehensive 360° analysis:</p>
            <ul style="list-style:none;padding:0;">
              <li style="display:flex;align-items:center;gap:15px;margin-bottom:20px;font-size:16px;"><i
                  class="fa-solid fa-circle-check" style="color:#fff;font-size:20px;"></i><span>Competitor social
                  benchmarking &amp; gap analysis</span></li>
              <li style="display:flex;align-items:center;gap:15px;margin-bottom:20px;font-size:16px;"><i
                  class="fa-solid fa-circle-check" style="color:#fff;font-size:20px;"></i><span>Audience persona
                  development &amp; psychographic profiling</span></li>
              <li style="display:flex;align-items:center;gap:15px;margin-bottom:20px;font-size:16px;"><i
                  class="fa-solid fa-circle-check" style="color:#fff;font-size:20px;"></i><span>Platform selection &amp;
                  channel prioritization</span></li>
              <li style="display:flex;align-items:center;gap:15px;margin-bottom:20px;font-size:16px;"><i
                  class="fa-solid fa-circle-check" style="color:#fff;font-size:20px;"></i><span>Content pillar
                  definition &amp; brand voice guidelines</span></li>
            </ul>
          </div>
          <div class="panel-right" style="text-align:right;">
            <img src="assets/images/seo_audit_graphic.png" alt="Social Strategy"
              style="max-width:450px;border-radius:50%;box-shadow:0 20px 50px rgba(0,0,0,0.3);">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- VERTICAL STATS -->
  <section class="section-pad" style="background:#f8fafc;">
    <div class="container">
      <div class="section-header" style="text-align:center;margin-bottom:60px;">
        <div class="section-tag">Industry Performance</div>
        <h2 class="section-title">Dominating Social Media Across <span>All Verticals</span></h2>
        <p class="section-subtitle">Our social media strategies deliver proven results across competitive industries.
        </p>
      </div>
      <div class="service-grid-premium" style="grid-template-columns:repeat(3,1fr);gap:30px;">
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-bag-shopping"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">E-commerce &amp; Retail</h3>
          <div class="vstat-number">5x</div>
          <div class="vstat-label">ROAS on Social Ads</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">Driving product discovery and impulse purchases
            through shoppable social content.</p>
        </div>
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-graduation-cap"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">Education &amp; EdTech</h3>
          <div class="vstat-number">300%</div>
          <div class="vstat-label">Lead Volume Growth</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">Converting social engagement into enrolment inquiries
            and course registrations.</p>
        </div>
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-building-columns"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">BFSI &amp; Fintech</h3>
          <div class="vstat-number">1M+</div>
          <div class="vstat-label">Community Members Built</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">Building trust and brand authority through
            educational content and thought leadership.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- COMPARISON TABLE -->
  <section class="section-pad" style="background:#fff;">
    <div class="container">
      <div class="section-header" style="text-align:center;margin-bottom:60px;">
        <div class="section-tag">The Comparison</div>
        <h2 class="section-title">The Rankmator <span>Social Media Edge</span></h2>
        <p class="section-subtitle">We don't just manage pages — we engineer brand movements that drive measurable
          business growth.</p>
      </div>
      <table class="diff-table">
        <thead>
          <tr>
            <th>Capability</th>
            <th>Typical SMM Agencies</th>
            <th style="background:var(--secondary);">The Rankmator Edge</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="point-label">Strategy</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Generic post scheduling</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Data-backed, AI-assisted content
              strategy</td>
          </tr>
          <tr>
            <td class="point-label">Creative</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Template-based designs</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>In-house premium creative studio</td>
          </tr>
          <tr>
            <td class="point-label">Paid Ads</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Basic boosted posts</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Full-funnel paid social with A/B
              testing</td>
          </tr>
          <tr>
            <td class="point-label">Reporting</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Vanity metrics only</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Revenue-impact dashboards &amp; ROI
              focus</td>
          </tr>
          <tr>
            <td class="point-label">Support</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Outsourced account managers</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Dedicated in-house social strategist
              pod</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="section-pad" style="background:var(--primary-dark);color:#fff;">
    <div class="container">
      <div class="section-header">
        <div class="section-tag" style="color:var(--secondary);">SMM Expert Q&amp;A</div>
        <h2 class="section-title" style="color:#fff;">Social Media Marketing FAQs</h2>
      </div>
      <div class="faq-container">
        <div class="faq-item">
          <div class="faq-question">
            <h4>How long before I see results from social media marketing?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Organic growth typically shows meaningful results in 3-6 months. Paid social campaigns can deliver
              measurable leads and sales within the first 2-4 weeks of launching. We set clear KPIs from day one so you
              always know where you stand.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>Which social media platforms should my business be on?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>It depends on your audience and goals. B2C brands typically thrive on Instagram and Facebook, while B2B
              companies see the best results on LinkedIn. We conduct a platform audit during onboarding to recommend the
              optimal mix for your specific business.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>Do you create the social media content or does my team?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>We handle everything end-to-end — copywriting, graphic design, video editing, and scheduling. Your team's
              involvement is limited to approvals, ensuring your brand voice is maintained without the workload.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>What is included in social media reporting?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Our monthly reports cover reach, impressions, engagement rate, follower growth, website referral traffic,
              lead generation metrics, and paid campaign ROAS. We focus on business outcomes, not just vanity metrics.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT SECTION -->
  <section id="contact" class="section-pad" style="background:#fff;">
    <div class="container">
      <div class="section-header fade-in" style="text-align:center;margin-bottom:60px;">
        <div class="section-tag">Get Started</div>
        <h2 class="section-title">Ready to Transform Your <span>Social Media Presence?</span></h2>
        <p class="section-subtitle">Talk to our social media experts today and get a customized growth plan for your
          brand.</p>
      </div>
      <div class="contact-grid">
        <div class="contact-info-card fade-in">
          <div class="location-header">
            <div class="location-title"><i class="fa-solid fa-hotel"></i><span>Delhi</span></div>
            <span class="corp-badge">Corporate Office</span>
          </div>
          <div class="contact-detail-group"><span class="contact-detail-label">Email :</span>
            <div class="contact-detail-content"><i class="fa-solid fa-envelope"></i><a
                href="mailto:rankmator@gmail.com">rankmator@gmail.com</a></div>
          </div>
          <div class="contact-detail-group"><span class="contact-detail-label">Marketing :</span>
            <div class="contact-detail-content"><i class="fa-solid fa-phone"></i><a href="tel:+919560864432">+91
                9560864432</a></div>
          </div>
          <div class="contact-detail-group"><span class="contact-detail-label">WhatsApp :</span>
            <div class="contact-detail-content"><i class="fa-brands fa-whatsapp"></i><a
                href="https://api.whatsapp.com/send?phone=919560864432&text=Hi Rankmator!" target="_blank">Chat Now</a>
            </div>
          </div>
          <div class="info-card-footer"><a href="#" class="btn-direction">Get Direction <i
                class="fa-solid fa-arrow-right"></i></a></div>
        </div>
        <div class="contact-form-side fade-in">
          <h3 style="font-size:24px;font-weight:800;margin-bottom:30px;color:#111;">Contact Info*</h3>
          <form class="main-contact-form" action="mail.php" method="POST">
            <div class="form-group"><input type="text" name="name" class="form-field" placeholder="Name *" required>
            </div>
            <div class="form-group"><input type="email" name="email" class="form-field" placeholder="Email *" required>
            </div>
            <div class="form-group"><input type="tel" name="phone" class="form-field" placeholder="Phone *" required>
            </div>
            <div class="form-group-full"><textarea name="message" class="form-field"
                placeholder="Your Message"></textarea></div>
            <div class="form-footer">
              <button type="submit" class="btn-submit-main">Submit Now <i class="fa-solid fa-arrow-right"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER CTA -->
  <div class="footer-cta-wrapper">
    <div class="container">
      <div class="footer-cta-banner fade-in">
        <div class="cta-left">
          <h2>Are You Ready for Transformational Social Media Growth?</h2>
          <button class="cta-btn-alt" onclick="alert('Our team will call you back within 24 hours!')">Request a Call
            Back</button>
        </div>
        <div class="cta-right">
          <p class="cta-trust-text">Trusted by Google Premier Partner<br />&amp; Top Rated Agency</p>
          <div class="cta-trust-badges">
            <div class="trust-badge-mini"><i class="fa-brands fa-google" style="color:#4285F4;"></i><span>Google
                Partner<br /><small style="font-size:8px;opacity:0.6;">PREMIER 2025</small></span></div>
            <div class="trust-badge-mini"><span style="font-size:14px;font-weight:900;">Clutch</span><span
                class="clutch-stars">4.5 ★★★★★</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <?php include 'footer.php'; ?>
</body>

</html>