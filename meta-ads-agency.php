<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Top Meta Ads Agency | Facebook & Instagram Advertising | Rankmator</title>
  <meta name="description"
    content="Rankmator is a leading Meta Ads Agency in India. We create high-converting Facebook and Instagram ad campaigns that drive leads, sales, and brand growth at scale." />
  <?php include 'links.php'; ?>
  <style>
    .hero-meta {
      background: var(--gradient-hero);
      padding: 60px 0;
      position: relative;
      overflow: hidden;
    }

    .hero-meta::before {
      content: '';
      position: absolute;
      inset: 0;
      background: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');
      opacity: 0.1;
    }

    .hero-badge-meta {
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

    .hero-badge-dot-meta {
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
        transform: translateX(0)
      }

      100% {
        transform: translateX(-50%)
      }
    }

    @keyframes pulse {
      0% {
        transform: scale(1);
        opacity: 1
      }

      50% {
        transform: scale(1.5);
        opacity: 0.5
      }

      100% {
        transform: scale(1);
        opacity: 1
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

  <!-- HERO -->
  <section class="hero-meta">
    <div class="hero-orbs">
      <div class="orb orb-1"></div>
      <div class="orb orb-2"></div>
    </div>
    <div class="container">
      <div class="hero-grid">
        <div class="hero-left">
          <div class="hero-badge-meta">
            <div class="hero-badge-dot-meta"></div>Certified Meta Business Partner
          </div>
          <h1 class="hero-title">Scale Your Brand with <br /><span class="highlight">Meta Ads That</span><br />Actually
            Convert</h1>
          <p class="hero-subtitle">From laser-targeted Facebook campaigns to high-ROAS Instagram ads, we engineer Meta
            advertising strategies that turn scrolls into sales across the full funnel.</p>
          <div class="hero-actions">
            <a href="#contact" class="btn btn-green"><i class="fa-brands fa-facebook" style="margin-right:8px;"></i>Get
              a Free Meta Ads Audit</a>
            <a href="#solutions" class="btn btn-ghost-white">Explore Solutions</a>
          </div>
          <div class="hero-trust">
            <div class="trust-avatars"><i>D</i><i>R</i><i>A</i><i>P</i><i>M</i></div>
            <div class="trust-text"><strong>4x Average ROAS Across 200+ Meta Campaigns</strong>Facebook &amp; Instagram
              Ad Specialists</div>
          </div>
        </div>
        <div class="hero-right">
          <div class="hero-illustration">
            <div class="hero-banner-frame fade-in">
              <img src="assets/images/meta_ads_hero.png" alt="Meta Ads Agency Excellence" class="hero-banner-img">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WHY META ADS -->
  <section class="section-pad" style="background:#fff;padding-bottom:0!important;">
    <div class="container">
      <div class="market-lead-box"
        style="background:#f8fafc;padding:50px;border-radius:30px;border:1px solid #e2e8f0;position:relative;overflow:hidden;">
        <div
          style="position:absolute;top:-50px;right:-50px;width:300px;height:300px;background:rgba(107,171,68,0.05);border-radius:50%;z-index:0;">
        </div>
        <div style="position:relative;z-index:1;">
          <h2 style="font-size:32px;font-weight:800;color:var(--text-primary);margin-bottom:30px;">Why Meta Ads Are the
            Fastest Path to Scalable Revenue</h2>
          <ul style="list-style:none;padding:0;">
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span><strong>3.27 billion
                  people</strong> use Meta platforms monthly — the largest advertising audience on Earth.</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span><strong>Facebook Ads offer
                  14.3%</strong> click-through rate for retargeting campaigns — higher than any other paid
                channel.</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>Meta Business Partner — we have
                direct access to beta features and priority support from Meta.</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>Proven strategies for D2C
                brands, lead generation, app installs, and e-commerce scaling.</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- PLATFORMS -->
  <section style="background:#fff;border-bottom:1px solid #e2e8f0;padding:20px 0;">
    <div class="platform-slider-container fade-in">
      <div class="platform-logos-track">
        <div class="platform-logo"><i class="fa-brands fa-facebook"></i> Facebook Ads</div>
        <div class="platform-logo"><i class="fa-brands fa-instagram"></i> Instagram Ads</div>
        <div class="platform-logo"><i class="fa-brands fa-whatsapp"></i> WhatsApp Ads</div>
        <div class="platform-logo"><i class="fa-solid fa-vr-cardboard"></i> Metaverse Ads</div>
        <div class="platform-logo"><i class="fa-solid fa-film"></i> Reels Ads</div>
        <div class="platform-logo"><i class="fa-solid fa-bullseye"></i> Audience Network</div>
        <div class="platform-logo"><i class="fa-brands fa-facebook"></i> Facebook Ads</div>
        <div class="platform-logo"><i class="fa-brands fa-instagram"></i> Instagram Ads</div>
        <div class="platform-logo"><i class="fa-brands fa-whatsapp"></i> WhatsApp Ads</div>
        <div class="platform-logo"><i class="fa-solid fa-vr-cardboard"></i> Metaverse Ads</div>
        <div class="platform-logo"><i class="fa-solid fa-film"></i> Reels Ads</div>
        <div class="platform-logo"><i class="fa-solid fa-bullseye"></i> Audience Network</div>
      </div>
    </div>
  </section>

  <!-- SOLUTIONS -->
  <section id="solutions" class="section-pad" style="background:#fcfcfc;">
    <div class="container">
      <div class="section-header" style="text-align:left;margin-bottom:60px;">
        <h2 class="section-title" style="font-size:42px;line-height:1.2;margin-bottom:25px;">Meta Advertising Solutions
          Engineered for Maximum ROAS</h2>
        <p class="section-subtitle" style="font-size:18px;margin-left:0;">We manage the entire Meta advertising funnel —
          from audience research and creative production to campaign optimization and conversion tracking. Every rupee
          spent has a purpose.</p>
        <p style="font-size:16px;color:#64748b;margin-top:15px;">Our core Meta Ads service components include:</p>
      </div>
      <div class="service-grid-premium">
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i class="fa-solid fa-users"
              style="color:var(--secondary);"></i></div>
          <h3>Audience Research &amp; Targeting</h3>
          <p>Deep-dive audience analysis using Custom Audiences, Lookalike Audiences, and interest/behavioral layering
            to reach your ideal customer profile at scale.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-palette" style="color:var(--secondary);"></i></div>
          <h3>Ad Creative &amp; Copywriting</h3>
          <p>Scroll-stopping visuals, UGC-style videos, and persuasive copy that speaks directly to your audience's pain
            points and drives action — tested with A/B splits.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-funnel-dollar" style="color:var(--secondary);"></i></div>
          <h3>Full-Funnel Campaign Strategy</h3>
          <p>TOFU, MOFU, and BOFU campaigns built for each stage of the customer journey — from awareness to purchase —
            reducing CAC and improving LTV.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i class="fa-solid fa-rotate"
              style="color:var(--secondary);"></i></div>
          <h3>Retargeting &amp; Dynamic Ads</h3>
          <p>Pixel-powered retargeting campaigns and dynamic product ads that re-engage website visitors and cart
            abandoners with personalized, high-intent creatives.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-chart-pie" style="color:var(--secondary);"></i></div>
          <h3>Conversion Tracking &amp; Analytics</h3>
          <p>Advanced Meta Pixel setup, Conversions API (CAPI) implementation, and UTM tracking for accurate
            attribution, even in a post-iOS14 privacy landscape.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-arrows-spin" style="color:var(--secondary);"></i></div>
          <h3>Budget Scaling &amp; Optimisation</h3>
          <p>Strategic budget allocation, bid strategy management, and campaign scaling protocols that maximise your
            ROAS as spend increases — without breaking what works.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <div style="text-align:center;margin-top:50px;"><a href="#contact" class="btn btn-primary"
          style="padding:15px 40px;border-radius:10px;font-weight:700;">Get Your Free Meta Ads Audit <i
            class="fa-solid fa-arrow-right" style="margin-left:8px;"></i></a></div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="section-pad" style="padding-top:0;">
    <div class="container">
      <div class="insights-banner"
        style="background:var(--gradient-blue);border-radius:20px;display:flex;align-items:center;padding:0 40px;color:#fff;overflow:hidden;height:180px;position:relative;">
        <div class="insights-img" style="width:200px;height:100%;display:flex;align-items:flex-end;"><img
            src="assets/images/seo_insights_cta.png" alt="Meta Ads Insights"
            style="height:120%;object-fit:contain;margin-bottom:-1px;"></div>
        <div class="insights-text" style="flex:1;padding-left:40px;">
          <h2 style="font-size:28px;font-weight:800;margin-bottom:10px;">What's Your Meta Ads Costing You?</h2>
          <p style="font-size:16px;opacity:0.9;">Get a free audit to reveal wasted spend, missed audiences, and untapped
            ROAS opportunities.</p>
        </div>
        <div class="insights-action"><a href="#contact" class="btn btn-white"
            style="border-radius:50px;padding:12px 30px;">Get Audit <i class="fa-solid fa-arrow-right"
              style="margin-left:8px;"></i></a></div>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section class="section-pad" style="background:var(--primary);color:#fff;">
    <div class="container">
      <div class="section-header" style="text-align:left;margin-bottom:40px;">
        <h2 class="section-title" style="color:#fff;font-size:38px;">Our Meta Ads Growth Framework</h2>
        <p class="section-subtitle" style="color:rgba(255,255,255,0.9);margin-left:0;max-width:900px;">A structured
          system built to consistently deliver high-ROAS Meta campaigns that scale with your business.</p>
      </div>
      <div class="service-slider-wrap"
        style="display:flex;align-items:center;gap:15px;margin-bottom:50px;overflow-x:auto;padding-bottom:10px;scrollbar-width:none;">
        <button class="slider-nav-btn active" data-target="audit"
          style="background:var(--primary-dark);border:1px solid rgba(255,255,255,0.3);color:#fff;padding:12px 24px;border-radius:50px;white-space:nowrap;font-weight:600;cursor:pointer;transition:all 0.3s;">Account
          Audit</button>
        <button class="slider-nav-btn" data-target="strategy"
          style="background:transparent;border:1px solid rgba(255,255,255,0.3);color:#fff;padding:12px 24px;border-radius:50px;white-space:nowrap;font-weight:600;cursor:pointer;transition:all 0.3s;">Audience
          Strategy</button>
        <button class="slider-nav-btn" data-target="onpage"
          style="background:transparent;border:1px solid rgba(255,255,255,0.3);color:#fff;padding:12px 24px;border-radius:50px;white-space:nowrap;font-weight:600;cursor:pointer;transition:all 0.3s;">Creative
          Production</button>
        <button class="slider-nav-btn" data-target="offpage"
          style="background:transparent;border:1px solid rgba(255,255,255,0.3);color:#fff;padding:12px 24px;border-radius:50px;white-space:nowrap;font-weight:600;cursor:pointer;transition:all 0.3s;">Launch
          &amp; Optimise</button>
        <button class="slider-nav-btn" data-target="technical"
          style="background:transparent;border:1px solid rgba(255,255,255,0.3);color:#fff;padding:12px 24px;border-radius:50px;white-space:nowrap;font-weight:600;cursor:pointer;transition:all 0.3s;">Reporting
          &amp; Scale</button>
      </div>
      <div id="slider-content-area" style="background:rgba(0,0,0,0.1);border-radius:30px;padding:50px;">
        <div class="slider-panel active" id="panel-audit"
          style="display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center;">
          <div class="panel-left">
            <h3 style="font-size:28px;margin-bottom:20px;">Full Meta Account Audit</h3>
            <p style="font-size:18px;margin-bottom:30px;opacity:0.9;">We start by diagnosing your current Meta
              performance:</p>
            <ul style="list-style:none;padding:0;">
              <li style="display:flex;align-items:center;gap:15px;margin-bottom:20px;font-size:16px;"><i
                  class="fa-solid fa-circle-check" style="color:#fff;font-size:20px;"></i><span>Ad account health &amp;
                  pixel verification</span></li>
              <li style="display:flex;align-items:center;gap:15px;margin-bottom:20px;font-size:16px;"><i
                  class="fa-solid fa-circle-check" style="color:#fff;font-size:20px;"></i><span>Current ROAS &amp; CPA
                  benchmarking</span></li>
              <li style="display:flex;align-items:center;gap:15px;margin-bottom:20px;font-size:16px;"><i
                  class="fa-solid fa-circle-check" style="color:#fff;font-size:20px;"></i><span>Audience overlap &amp;
                  fatigue analysis</span></li>
              <li style="display:flex;align-items:center;gap:15px;margin-bottom:20px;font-size:16px;"><i
                  class="fa-solid fa-circle-check" style="color:#fff;font-size:20px;"></i><span>Creative performance
                  scorecard</span></li>
            </ul>
          </div>
          <div class="panel-right" style="text-align:right;"><img src="assets/images/seo_audit_graphic.png"
              alt="Meta Ads Audit" style="max-width:450px;border-radius:50%;box-shadow:0 20px 50px rgba(0,0,0,0.3);">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- RESULTS -->
  <section class="section-pad" style="background:#f8fafc;">
    <div class="container">
      <div class="section-header" style="text-align:center;margin-bottom:60px;">
        <div class="section-tag">Industry Results</div>
        <h2 class="section-title">Meta Ads Results Across <span>Every Industry</span></h2>
        <p class="section-subtitle">We've scaled Meta campaigns across D2C, SaaS, healthcare, real estate, and
          education.</p>
      </div>
      <div class="service-grid-premium" style="grid-template-columns:repeat(3,1fr);gap:30px;">
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-shirt"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">D2C Fashion</h3>
          <div class="vstat-number">6.2x</div>
          <div class="vstat-label">Return on Ad Spend</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">UGC-first creative strategy driving repeat purchase
            cycles.</p>
        </div>
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-house"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">Real Estate</h3>
          <div class="vstat-number">70%</div>
          <div class="vstat-label">Reduction in CPL</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">Hyper-targeted lead gen campaigns for property
            developers.</p>
        </div>
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-graduation-cap"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">EdTech</h3>
          <div class="vstat-number">4x</div>
          <div class="vstat-label">Course Enrolments</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">Webinar funnels and VSL campaigns for online course
            sales.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- COMPARISON TABLE -->
  <section class="section-pad" style="background:#fff;">
    <div class="container">
      <div class="section-header" style="text-align:center;margin-bottom:60px;">
        <div class="section-tag">Comparison</div>
        <h2 class="section-title">Why Our <span>Meta Ads Strategy</span> Wins</h2>
        <p class="section-subtitle">We build sustainable Meta advertising systems, not just one-time campaigns.</p>
      </div>
      <table class="diff-table">
        <thead>
          <tr>
            <th>Core Capability</th>
            <th>Typical Agency</th>
            <th style="background:var(--secondary);">The Rankmator Edge</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="point-label">Targeting</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Basic interest targeting</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>AI-powered Custom &amp; Lookalike
              audience layering</td>
          </tr>
          <tr>
            <td class="point-label">Creatives</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Static graphics only</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>UGC, video, carousel &amp; dynamic
              creatives with A/B testing</td>
          </tr>
          <tr>
            <td class="point-label">Tracking</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Basic Pixel only</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Conversions API (CAPI) + full
              multi-touch attribution</td>
          </tr>
          <tr>
            <td class="point-label">Reporting</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Vanity metric dashboards</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Real-time ROAS, CAC, LTV &amp;
              revenue reporting</td>
          </tr>
          <tr>
            <td class="point-label">Scaling</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Manual ad set duplication</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Systematic horizontal &amp; vertical
              budget scaling protocols</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="section-pad" style="background:var(--primary-dark);color:#fff;">
    <div class="container">
      <div class="section-header">
        <div class="section-tag" style="color:var(--secondary);">FAQ</div>
        <h2 class="section-title" style="color:#fff;">Meta Ads Agency FAQs</h2>
      </div>
      <div class="faq-container">
        <div class="faq-item">
          <div class="faq-question">
            <h4>How much budget do I need to start Meta Ads?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>We recommend a minimum of ₹30,000–₹50,000/month ad spend for meaningful results. We manage campaigns
              starting from these budgets all the way to crore-level spends.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>How do you handle iOS 14+ tracking limitations?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>We implement the Meta Conversions API (CAPI) alongside the Pixel to recover lost attribution data and
              ensure accurate reporting despite browser-level restrictions.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>Do you produce the ad creatives?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Yes, our in-house creative team designs all ad graphics, videos, and copy. We provide all creative assets
              as part of our Meta Ads management service.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>How long before I see results from Meta Ads?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Most campaigns start generating results within 7-14 days of launch. Full optimization typically happens
              within the first 45-60 days as the algorithm gathers conversion data.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact" class="section-pad"
    style="background:linear-gradient(rgba(255,255,255,0.93),rgba(255,255,255,0.98));position:relative;">
    <div class="container" style="position:relative;z-index:2;">
      <div class="section-header fade-in">
        <h2 class="section-title">Launch Your <span>Meta Ads Campaign</span></h2>
        <p class="section-subtitle">Get a free audit and custom Meta advertising strategy for your business today.</p>
      </div>
      <div class="contact-grid">
        <div class="contact-info-card fade-in">
          <div class="location-header">
            <div class="location-title"><i class="fa-solid fa-hotel"></i><span>Delhi</span></div><span
              class="corp-badge">Corporate Office</span>
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
          <h3 style="font-size:24px;font-weight:800;margin-bottom:30px;color:var(--text-primary);">Request a Free Meta
            Ads Audit*</h3>
          <form class="main-contact-form" action="mail.php" method="POST">
            <div class="form-group"><input type="text" name="name" class="form-field" placeholder="Full Name *"
                required></div>
            <div class="form-group"><input type="email" name="email" class="form-field" placeholder="Work Email *"
                required></div>
            <div class="form-group"><input type="tel" name="phone" class="form-field" placeholder="Mobile Number *"
                required></div>

            <div class="form-group-full"><textarea class="form-field" name="message"
                placeholder="Tell us about your Meta Ads goals and current challenges..."></textarea></div>

          </form>
        </div>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>
  <script>

    const navBtns = document.querySelectorAll('.slider-nav-btn');
    const contentData = { audit: { title: "Full Meta Account Audit", desc: "We start by diagnosing your current Meta performance:", items: ["Ad account health & pixel verification", "Current ROAS & CPA benchmarking", "Audience overlap & fatigue analysis", "Creative performance scorecard"] }, strategy: { title: "Audience Strategy", desc: "Precision audience architecture:", items: ["ICP (Ideal Customer Profile) mapping", "Custom Audience creation from CRM data", "Lookalike audience building", "Interest & behavioral layering"] }, onpage: { title: "Creative Production", desc: "Scroll-stopping creatives that convert:", items: ["UGC-style video scripting & production", "Static &amp; carousel design", "Copywriting for all ad formats", "A/B creative testing framework"] }, offpage: { title: "Launch & Optimise", desc: "Systematic campaign management:", items: ["Campaign structure &amp; objective setting", "Bid strategy selection &amp; management", "Daily optimization &amp; budget pacing", "Landing page conversion alignment"] }, technical: { title: "Reporting & Scale", desc: "Transparent performance &amp; intelligent scaling:", items: ["Custom real-time ROAS dashboards", "Bi-weekly performance reviews", "Horizontal &amp; vertical budget scaling", "Monthly creative refresh cycles"] } };
    navBtns.forEach(btn => { btn.addEventListener('click', () => { const target = btn.getAttribute('data-target'); navBtns.forEach(b => { b.style.background = 'transparent'; b.classList.remove('active'); }); btn.style.background = 'var(--primary-dark)'; btn.classList.add('active'); const data = contentData[target]; document.querySelector('#panel-audit h3').textContent = data.title; document.querySelector('#panel-audit p').textContent = data.desc; document.querySelector('#panel-audit ul').innerHTML = data.items.map(item => `<li style="display:flex;align-items:center;gap:15px;margin-bottom:20px;font-size:16px;"><i class="fa-solid fa-circle-check" style="color:#fff;font-size:20px;"></i><span>${item}</span></li>`).join(''); }); });
  </script>
</body>

</html>