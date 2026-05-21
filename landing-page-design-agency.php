<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Landing Page Design Agency | High-Converting Pages | Rankmator</title>
  <meta name="description"
    content="Rankmator's Landing Page Design Agency creates high-converting landing pages built on data, psychology, and design. Boost your lead gen and sales campaigns with pages that convert at 2x industry average." />
  <?php include 'links.php'; ?>
  <style>
    .hero-lp {
      background: var(--gradient-hero);
      padding: 60px 0;
      position: relative;
      overflow: hidden;
    }

    .hero-lp::before {
      content: '';
      position: absolute;
      inset: 0;
      background: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');
      opacity: 0.1;
    }

    .hero-badge-lp {
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

    .hero-badge-dot-lp {
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

  <section class="hero-lp">
    <div class="hero-orbs">
      <div class="orb orb-1"></div>
      <div class="orb orb-2"></div>
    </div>
    <div class="container">
      <div class="hero-grid">
        <div class="hero-left">
          <div class="hero-badge-lp">
            <div class="hero-badge-dot-lp"></div>Conversion-First Landing Page Experts
          </div>
          <h1 class="hero-title">Landing Pages That <br /><span class="highlight">Turn Clicks Into</span><br />Clients
            &amp; Sales</h1>
          <p class="hero-subtitle">We design and build high-converting landing pages powered by CRO science, behavioural
            psychology, and A/B testing — pages that don't just look great, they drive measurable ROI.</p>
          <div class="hero-actions">
            <a href="#contact" class="btn btn-green"><i class="fa-solid fa-file-code" style="margin-right:8px;"></i>Get
              a Free Landing Page Audit</a>
            <a href="#solutions" class="btn btn-ghost-white">See Our Work</a>
          </div>
          <div class="hero-trust">
            <div class="trust-avatars"><i>D</i><i>R</i><i>A</i><i>P</i><i>M</i></div>
            <div class="trust-text"><strong>2x Industry-Average Conversion Rates</strong>300+ High-Converting Pages
              Delivered</div>
          </div>
        </div>
        <div class="hero-right">
          <div class="hero-illustration">
            <div class="hero-banner-frame fade-in"><img src="assets/images/landing_page_hero.png"
                alt="Landing Page Design Agency" class="hero-banner-img"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-pad" style="background:#fff;padding-bottom:0!important;">
    <div class="container">
      <div class="market-lead-box"
        style="background:#f8fafc;padding:50px;border-radius:30px;border:1px solid #e2e8f0;position:relative;overflow:hidden;">
        <div
          style="position:absolute;top:-50px;right:-50px;width:300px;height:300px;background:rgba(107,171,68,0.05);border-radius:50%;z-index:0;">
        </div>
        <div style="position:relative;z-index:1;">
          <h2 style="font-size:32px;font-weight:800;color:var(--text-primary);margin-bottom:30px;">Why Your Landing Page
            is Worth More Than Your Entire Ad Budget</h2>
          <ul style="list-style:none;padding:0;">
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>The average landing page
                converts at just <strong>2.35%</strong> — our pages average 4.7% or higher.</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span><strong>A/B testing landing
                  pages</strong> can improve conversion rates by 30-400% — we run this systematically.</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>Purpose-built for Google Ads,
                Meta Ads, SEO, and email campaigns with dedicated conversion tracking.</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>Every page is designed with
                message-match, scarcity triggers, and social proof to maximise trust and action.</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section style="background:#fff;border-bottom:1px solid #e2e8f0;padding:20px 0;">
    <div class="platform-slider-container fade-in">
      <div class="platform-logos-track">
        <div class="platform-logo"><i class="fa-brands fa-google"></i> Google Ads LPs</div>
        <div class="platform-logo"><i class="fa-brands fa-facebook"></i> Meta Ads LPs</div>
        <div class="platform-logo"><i class="fa-solid fa-envelope"></i> Email Campaign LPs</div>
        <div class="platform-logo"><i class="fa-solid fa-chart-bar"></i> A/B Testing</div>
        <div class="platform-logo"><i class="fa-solid fa-fire"></i> Hotjar Heatmaps</div>
        <div class="platform-logo"><i class="fa-solid fa-shield-halved"></i> GDPR Compliant</div>
        <div class="platform-logo"><i class="fa-brands fa-google"></i> Google Ads LPs</div>
        <div class="platform-logo"><i class="fa-brands fa-facebook"></i> Meta Ads LPs</div>
        <div class="platform-logo"><i class="fa-solid fa-envelope"></i> Email Campaign LPs</div>
        <div class="platform-logo"><i class="fa-solid fa-chart-bar"></i> A/B Testing</div>
        <div class="platform-logo"><i class="fa-solid fa-fire"></i> Hotjar Heatmaps</div>
        <div class="platform-logo"><i class="fa-solid fa-shield-halved"></i> GDPR Compliant</div>
      </div>
    </div>
  </section>

  <section id="solutions" class="section-pad" style="background:#fcfcfc;">
    <div class="container">
      <div class="section-header" style="text-align:left;margin-bottom:60px;">
        <h2 class="section-title" style="font-size:42px;line-height:1.2;margin-bottom:25px;">Landing Page Services Built
          for Every Campaign Type &amp; Channel</h2>
        <p class="section-subtitle" style="font-size:18px;margin-left:0;">Whether it's a product launch, lead gen
          campaign, or an event registration — we design, build, and optimise landing pages that consistently outperform
          benchmarks.</p>
        <p style="font-size:16px;color:#64748b;margin-top:15px;">Our core landing page services include:</p>
      </div>
      <div class="service-grid-premium">
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-user-check" style="color:var(--secondary);"></i></div>
          <h3>Lead Generation Pages</h3>
          <p>Optimised for maximum form submissions. We craft compelling offers, trust signals, and minimal-friction
            forms that convert cold traffic into warm leads.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-bag-shopping" style="color:var(--secondary);"></i></div>
          <h3>Sales &amp; Product Pages</h3>
          <p>Long-form sales pages with psychological triggers — social proof, FOMO, value stacking, and strong CTAs —
            designed to move hesitant buyers to purchase decision.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-calendar-check" style="color:var(--secondary);"></i></div>
          <h3>Event &amp; Webinar Registration</h3>
          <p>High-impact event pages with countdown timers, speaker highlights, and urgency elements that drive maximum
            registrations for online and offline events.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i class="fa-solid fa-vial"
              style="color:var(--secondary);"></i></div>
          <h3>A/B Testing &amp; CRO</h3>
          <p>Systematic multivariate testing of headlines, CTAs, imagery, form fields, and page structure to
            continuously improve conversion rates through data, not guesswork.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i class="fa-solid fa-mobile"
              style="color:var(--secondary);"></i></div>
          <h3>Mobile-First, Fast-Loading</h3>
          <p>Every landing page is built mobile-first with 90+ Google PageSpeed scores. Fast pages rank better in ads,
            cost less per click, and convert dramatically more.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-plug-circle-check" style="color:var(--secondary);"></i></div>
          <h3>CRM &amp; Analytics Integration</h3>
          <p>Seamless integration with HubSpot, Salesforce, Zoho, Google Analytics, Meta Pixel, and custom webhooks for
            complete lead tracking and campaign attribution.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <div style="text-align:center;margin-top:50px;"><a href="#contact" class="btn btn-primary"
          style="padding:15px 40px;border-radius:10px;font-weight:700;">Get Your Free Landing Page Audit <i
            class="fa-solid fa-arrow-right" style="margin-left:8px;"></i></a></div>
    </div>
  </section>

  <section class="section-pad" style="padding-top:0;">
    <div class="container">
      <div class="insights-banner"
        style="background:var(--gradient-blue);border-radius:20px;display:flex;align-items:center;padding:0 40px;color:#fff;overflow:hidden;height:180px;position:relative;">
        <div class="insights-img" style="width:200px;height:100%;display:flex;align-items:flex-end;"><img
            src="assets/images/seo_insights_cta.png" alt="LP Insights"
            style="height:120%;object-fit:contain;margin-bottom:-1px;"></div>
        <div class="insights-text" style="flex:1;padding-left:40px;">
          <h2 style="font-size:28px;font-weight:800;margin-bottom:10px;">What's Your Landing Page Converting At?</h2>
          <p style="font-size:16px;opacity:0.9;">Get a free CRO audit. Discover exactly why visitors aren't converting
            and what to fix first.</p>
        </div>
        <div class="insights-action"><a href="#contact" class="btn btn-white"
            style="border-radius:50px;padding:12px 30px;">Free Audit <i class="fa-solid fa-arrow-right"
              style="margin-left:8px;"></i></a></div>
      </div>
    </div>
  </section>

  <section class="section-pad" style="background:var(--primary);color:#fff;">
    <div class="container">
      <div class="section-header" style="text-align:left;margin-bottom:40px;">
        <h2 class="section-title" style="color:#fff;font-size:38px;">Our Landing Page Conversion System</h2>
        <p class="section-subtitle" style="color:rgba(255,255,255,0.9);margin-left:0;max-width:900px;">A proven,
          data-driven framework for building landing pages that consistently outperform benchmarks.</p>
      </div>
      <div class="service-slider-wrap"
        style="display:flex;align-items:center;gap:15px;margin-bottom:50px;overflow-x:auto;padding-bottom:10px;scrollbar-width:none;">
        <button class="slider-nav-btn active" data-target="audit"
          style="background:var(--primary-dark);border:1px solid rgba(255,255,255,0.3);color:#fff;padding:12px 24px;border-radius:50px;white-space:nowrap;font-weight:600;cursor:pointer;transition:all 0.3s;">Research
          &amp; Strategy</button>
        <button class="slider-nav-btn" data-target="strategy"
          style="background:transparent;border:1px solid rgba(255,255,255,0.3);color:#fff;padding:12px 24px;border-radius:50px;white-space:nowrap;font-weight:600;cursor:pointer;transition:all 0.3s;">Copy
          &amp; Messaging</button>
        <button class="slider-nav-btn" data-target="onpage"
          style="background:transparent;border:1px solid rgba(255,255,255,0.3);color:#fff;padding:12px 24px;border-radius:50px;white-space:nowrap;font-weight:600;cursor:pointer;transition:all 0.3s;">Design
          &amp; Build</button>
        <button class="slider-nav-btn" data-target="offpage"
          style="background:transparent;border:1px solid rgba(255,255,255,0.3);color:#fff;padding:12px 24px;border-radius:50px;white-space:nowrap;font-weight:600;cursor:pointer;transition:all 0.3s;">Launch
          &amp; Track</button>
        <button class="slider-nav-btn" data-target="technical"
          style="background:transparent;border:1px solid rgba(255,255,255,0.3);color:#fff;padding:12px 24px;border-radius:50px;white-space:nowrap;font-weight:600;cursor:pointer;transition:all 0.3s;">Test
          &amp; Optimise</button>
      </div>
      <div id="slider-content-area" style="background:rgba(0,0,0,0.1);border-radius:30px;padding:50px;">
        <div class="slider-panel active" id="panel-audit"
          style="display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center;">
          <div class="panel-left">
            <h3 style="font-size:28px;margin-bottom:20px;">Research &amp; Strategy</h3>
            <p style="font-size:18px;margin-bottom:30px;opacity:0.9;">Before a single pixel is designed, we do the
              research:</p>
            <ul style="list-style:none;padding:0;">
              <li style="display:flex;align-items:center;gap:15px;margin-bottom:20px;font-size:16px;"><i
                  class="fa-solid fa-circle-check" style="color:#fff;font-size:20px;"></i><span>Audience ICP &amp;
                  buying psychology analysis</span></li>
              <li style="display:flex;align-items:center;gap:15px;margin-bottom:20px;font-size:16px;"><i
                  class="fa-solid fa-circle-check" style="color:#fff;font-size:20px;"></i><span>Competitor landing page
                  benchmarking</span></li>
              <li style="display:flex;align-items:center;gap:15px;margin-bottom:20px;font-size:16px;"><i
                  class="fa-solid fa-circle-check" style="color:#fff;font-size:20px;"></i><span>Message-match analysis
                  to traffic source</span></li>
              <li style="display:flex;align-items:center;gap:15px;margin-bottom:20px;font-size:16px;"><i
                  class="fa-solid fa-circle-check" style="color:#fff;font-size:20px;"></i><span>Offer &amp; CTA strategy
                  development</span></li>
            </ul>
          </div>
          <div class="panel-right" style="text-align:right;"><img src="assets/images/seo_audit_graphic.png"
              alt="LP Strategy" style="max-width:450px;border-radius:50%;box-shadow:0 20px 50px rgba(0,0,0,0.3);"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-pad" style="background:#f8fafc;">
    <div class="container">
      <div class="section-header" style="text-align:center;margin-bottom:60px;">
        <div class="section-tag">Results</div>
        <h2 class="section-title">Landing Page Results Across <span>Every Campaign Type</span></h2>
      </div>
      <div class="service-grid-premium" style="grid-template-columns:repeat(3,1fr);gap:30px;">
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-briefcase"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">B2B Lead Gen</h3>
          <div class="vstat-number">3.5x</div>
          <div class="vstat-label">More Qualified Leads</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">Gated content and webinar pages for SaaS &amp;
            enterprise sales.</p>
        </div>
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-cart-plus"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">E-Commerce</h3>
          <div class="vstat-number">62%</div>
          <div class="vstat-label">Increase in Add-to-Cart Rate</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">Product-specific pages with UGC, reviews, and urgency
            elements.</p>
        </div>
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-graduation-cap"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">EdTech &amp; Courses</h3>
          <div class="vstat-number">5x</div>
          <div class="vstat-label">Webinar Registration Rate</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">VSL pages and webinar registration funnels for online
            courses.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-pad" style="background:#fff;">
    <div class="container">
      <div class="section-header" style="text-align:center;margin-bottom:60px;">
        <div class="section-tag">Comparison</div>
        <h2 class="section-title">Why Our <span>Landing Pages</span> Convert More</h2>
      </div>
      <table class="diff-table">
        <thead>
          <tr>
            <th>Core Element</th>
            <th>Generic Agency</th>
            <th style="background:var(--secondary);">The Rankmator Edge</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="point-label">Strategy</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Design-first approach</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Research &amp; psychology-driven
              strategy first</td>
          </tr>
          <tr>
            <td class="point-label">Copy</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Generic filler content</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>CRO copywriting aligned to search
              intent</td>
          </tr>
          <tr>
            <td class="point-label">Speed</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>2-4 second load time</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Sub-1.5 second mobile load, 90+
              PageSpeed</td>
          </tr>
          <tr>
            <td class="point-label">Optimisation</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Static, one-time build</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Ongoing A/B testing cycles
              post-launch</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <section id="faq" class="section-pad" style="background:var(--primary-dark);color:#fff;">
    <div class="container">
      <div class="section-header">
        <div class="section-tag" style="color:var(--secondary);">FAQ</div>
        <h2 class="section-title" style="color:#fff;">Landing Page Design FAQs</h2>
      </div>
      <div class="faq-container">
        <div class="faq-item">
          <div class="faq-question">
            <h4>How fast can you build a landing page?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Standard landing pages are delivered in 5-10 business days. For urgent campaigns, we offer a 48-72 hour
              fast-track delivery for high-priority projects.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>What platforms do you build landing pages on?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>We build on any platform — custom HTML/CSS, WordPress, Unbounce, Webflow, Instapage, or directly within
              your existing CMS/website. We recommend the best fit for your campaign.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>Do you write the copy for the landing page?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Yes, our CRO copywriters craft all messaging, headlines, and CTAs. Copy is a core part of our service,
              not an optional add-on.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>Will my landing page integrate with my CRM?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Yes. We integrate with all major CRMs including HubSpot, Salesforce, Zoho, ActiveCampaign, Mailchimp, and
              custom webhook/API solutions for seamless lead capture.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="section-pad"
    style="background:linear-gradient(rgba(255,255,255,0.93),rgba(255,255,255,0.98));position:relative;">
    <div class="container" style="position:relative;z-index:2;">
      <div class="section-header fade-in">
        <h2 class="section-title">Build Your <span>High-Converting Page</span></h2>
        <p class="section-subtitle">Get a free CRO audit and learn how to 2x your landing page conversions.</p>
      </div>
      <div class="contact-grid">
        <div class="contact-info-card fade-in">
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
        </div>
        <div class="contact-form-side fade-in">
          <h3 style="font-size:24px;font-weight:800;margin-bottom:30px;color:var(--text-primary);">Request a Free LP
            Audit*</h3>
          <form class="main-contact-form" action="mail.php" method="POST">
            <div class="form-group"><input type="text" name="name" class="form-field" placeholder="Name *" required>
            </div>
            <div class="form-group"><input type="email" name="email" class="form-field" placeholder="Email *" required>
            </div>
            <div class="form-group-full"><input type="tel" name="phone" class="form-field" placeholder="Phone *"
                required>
            </div>
            <div class="form-group-full"><textarea name="message" class="form-field"
                placeholder="Your Message"></textarea></div>
            <div class="form-footer"><button type="submit" class="btn-submit-main">Submit Now <i
                  class="fa-solid fa-arrow-right"></i></button></div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>
  <script>

    const navBtns = document.querySelectorAll('.slider-nav-btn');
    const contentData = { audit: { title: "Research & Strategy", desc: "Before a single pixel is designed, we do the research:", items: ["Audience ICP & buying psychology analysis", "Competitor landing page benchmarking", "Message-match analysis to traffic source", "Offer & CTA strategy development"] }, strategy: { title: "Copy & Messaging", desc: "Persuasive copy that converts:", items: ["Headline variants with A/B strategy", "Value proposition articulation", "Objection-handling copy blocks", "Trust signals & social proof writing"] }, onpage: { title: "Design & Build", desc: "Pixel-perfect, fast, and conversion-optimised:", items: ["Conversion-focused visual hierarchy", "Mobile-first responsive design", "Sub-1.5s load speed optimisation", "CRM & tracking code integration"] }, offpage: { title: "Launch & Track", desc: "Going live with full analytics visibility:", items: ["QA testing across all devices", "Google Analytics 4 event tracking", "Meta Pixel & Google Ads conversion tracking", "UTM parameter setup for attribution"] }, technical: { title: "Test & Optimise", desc: "Continuous improvement through data:", items: ["Heatmap & session recording setup", "A/B and multivariate test cycles", "Statistical significance analysis", "Monthly CRO report & recommendations"] } };
    navBtns.forEach(btn => { btn.addEventListener('click', () => { const target = btn.getAttribute('data-target'); navBtns.forEach(b => { b.style.background = 'transparent'; b.classList.remove('active'); }); btn.style.background = 'var(--primary-dark)'; btn.classList.add('active'); const data = contentData[target]; document.querySelector('#panel-audit h3').textContent = data.title; document.querySelector('#panel-audit p').textContent = data.desc; document.querySelector('#panel-audit ul').innerHTML = data.items.map(item => `<li style="display:flex;align-items:center;gap:15px;margin-bottom:20px;font-size:16px;"><i class="fa-solid fa-circle-check" style="color:#fff;font-size:20px;"></i><span>${item}</span></li>`).join(''); }); });
  </script>
</body>

</html>