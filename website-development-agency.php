<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Website Development Agency | Custom Web Development | Rankmator</title>
  <meta name="description"
    content="Rankmator is a top website development agency building fast, scalable, and conversion-focused custom websites. From corporate sites to complex web applications, we deliver digital excellence." />
  <?php include 'links.php'; ?>
  <style>
    .hero-webdev {
      background: var(--gradient-hero);
      padding: 60px 0;
      position: relative;
      overflow: hidden;
    }

    .hero-webdev::before {
      content: '';
      position: absolute;
      inset: 0;
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

    .check-icon {
      color: #22c55e;
      margin-right: 8px;
    }

    .cross-icon {
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

  <section class="hero-webdev">
    <div class="hero-orbs">
      <div class="orb orb-1"></div>
      <div class="orb orb-2"></div>
    </div>
    <div class="container">
      <div class="hero-grid">
        <div class="hero-left">
          <div class="hero-badge-webdev">
            <div class="hero-badge-dot-webdev"></div>Full-Stack Website Development Agency
          </div>
          <h1 class="hero-title">Build Websites That <br /><span class="highlight">Load Fast, Look</span><br />Stunning
            &amp; Drive ROI</h1>
          <p class="hero-subtitle">From corporate brochure sites to complex web applications — we engineer
            high-performance websites built on clean code, modern tech stacks, and conversion-first design principles.
          </p>
          <div class="hero-actions">
            <a href="#contact" class="btn btn-green"><i class="fa-solid fa-code" style="margin-right:8px;"></i>Get a
              Free Website Audit</a>
            <a href="#solutions" class="btn btn-ghost-white">View Our Services</a>
          </div>
          <div class="hero-trust">
            <div class="trust-avatars"><i>D</i><i>R</i><i>A</i><i>P</i><i>M</i></div>
            <div class="trust-text"><strong>300+ Websites Delivered On-Time &amp; On-Budget</strong>React · Next.js ·
              WordPress · Custom Development</div>
          </div>
        </div>
        <div class="hero-right">
          <div class="hero-illustration">
            <div class="hero-banner-frame fade-in"><img src="assets/images/web_dev_hero.png"
                alt="Website Development Agency" class="hero-banner-img"></div>
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
          <h2 style="font-size:32px;font-weight:800;color:var(--text-primary);margin-bottom:30px;">Your Website is Your
            Most Powerful Business Asset — Build It Right</h2>
          <ul style="list-style:none;padding:0;">
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span><strong>75% of
                  consumers</strong> judge a business's credibility based on its website design and performance.</span>
            </li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span><strong>A 1-second
                  delay</strong> in page load time reduces conversions by 7% — speed is not optional.</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>We build every website SEO-ready
                from day one — clean code, schema markup, and Core Web Vitals optimised.</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>End-to-end service — strategy,
                design, development, QA, launch, and post-live support all under one roof.</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section style="background:#fff;border-bottom:1px solid #e2e8f0;padding:20px 0;">
    <div class="platform-slider-container fade-in">
      <div class="platform-logos-track">
        <div class="platform-logo"><i class="fa-brands fa-react"></i> React.js</div>
        <div class="platform-logo"><i class="fa-solid fa-n"></i> Next.js</div>
        <div class="platform-logo"><i class="fa-brands fa-wordpress"></i> WordPress</div>
        <div class="platform-logo"><i class="fa-solid fa-wind"></i> Webflow</div>
        <div class="platform-logo"><i class="fa-brands fa-node-js"></i> Node.js</div>
        <div class="platform-logo"><i class="fa-solid fa-database"></i> MySQL / MongoDB</div>
        <div class="platform-logo"><i class="fa-brands fa-react"></i> React.js</div>
        <div class="platform-logo"><i class="fa-solid fa-n"></i> Next.js</div>
        <div class="platform-logo"><i class="fa-brands fa-wordpress"></i> WordPress</div>
        <div class="platform-logo"><i class="fa-solid fa-wind"></i> Webflow</div>
        <div class="platform-logo"><i class="fa-brands fa-node-js"></i> Node.js</div>
        <div class="platform-logo"><i class="fa-solid fa-database"></i> MySQL / MongoDB</div>
      </div>
    </div>
  </section>

  <section id="solutions" class="section-pad" style="background:#fcfcfc;">
    <div class="container">
      <div class="section-header" style="text-align:left;margin-bottom:60px;">
        <h2 class="section-title" style="font-size:42px;line-height:1.2;margin-bottom:25px;">End-to-End Website
          Development Services for Every Business Need</h2>
        <p class="section-subtitle" style="font-size:18px;margin-left:0;">We plan, design, develop, and launch digital
          products that are fast, scalable, accessible, and optimised for search from the very first line of code.</p>
        <p style="font-size:16px;color:#64748b;margin-top:15px;">Our core web development services include:</p>
      </div>
      <div class="service-grid-premium">
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-building" style="color:var(--secondary);"></i></div>
          <h3>Corporate Website Development</h3>
          <p>Premium multi-page corporate websites with custom CMS, team pages, case studies, and on-brand visual
            identity — designed to build trust and generate qualified leads.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-laptop-code" style="color:var(--secondary);"></i></div>
          <h3>Custom Web Application Development</h3>
          <p>Bespoke web apps built with React, Next.js, and Node.js — SaaS dashboards, portals, booking systems, and
            workflow automation tools built to your exact specifications.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-gauge-high" style="color:var(--secondary);"></i></div>
          <h3>Website Speed Optimisation</h3>
          <p>Technical performance audits and Core Web Vitals improvements (LCP, CLS, FID) that improve SEO rankings,
            user experience, and conversion rates across all devices.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-magnifying-glass" style="color:var(--secondary);"></i></div>
          <h3>SEO-Ready Website Architecture</h3>
          <p>Technical SEO baked into every build — proper URL structures, canonical tags, schema markup, XML sitemaps,
            robots.txt, and indexation controls from day one.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-arrows-rotate" style="color:var(--secondary);"></i></div>
          <h3>Website Redesign &amp; Migration</h3>
          <p>Full website redesigns and CMS migrations with zero SEO loss — careful URL mapping, 301 redirects, and
            GA4/Search Console verification to protect your existing rankings.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-headset" style="color:var(--secondary);"></i></div>
          <h3>Ongoing Maintenance &amp; Support</h3>
          <p>Monthly retainer support covering security updates, plugin management, performance monitoring, content
            updates, and emergency bug fixes to keep your site running perfectly.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <div style="text-align:center;margin-top:50px;"><a href="#contact" class="btn btn-primary"
          style="padding:15px 40px;border-radius:10px;font-weight:700;">Get a Free Website Audit <i
            class="fa-solid fa-arrow-right" style="margin-left:8px;"></i></a></div>
    </div>
  </section>

  <section class="section-pad" style="padding-top:0;">
    <div class="container">
      <div class="insights-banner"
        style="background:var(--gradient-blue);border-radius:20px;display:flex;align-items:center;padding:0 40px;color:#fff;overflow:hidden;height:180px;position:relative;">
        <div class="insights-img" style="width:200px;height:100%;display:flex;align-items:flex-end;"><img
            src="assets/images/seo_insights_cta.png" alt="Web Dev Insights"
            style="height:120%;object-fit:contain;margin-bottom:-1px;"></div>
        <div class="insights-text" style="flex:1;padding-left:40px;">
          <h2 style="font-size:28px;font-weight:800;margin-bottom:10px;">Is Your Website Costing You Business?</h2>
          <p style="font-size:16px;opacity:0.9;">Get a free technical audit. We'll reveal speed issues, SEO gaps, and
            conversion bottlenecks in your current site.</p>
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
        <h2 class="section-title" style="color:#fff;font-size:38px;">Our Website Development Process</h2>
        <p class="section-subtitle" style="color:rgba(255,255,255,0.9);margin-left:0;max-width:900px;">A structured
          5-phase process that delivers every project on-time, on-scope, and with zero surprises.</p>
      </div>
      <div class="service-slider-wrap"
        style="display:flex;align-items:center;gap:15px;margin-bottom:50px;overflow-x:auto;padding-bottom:10px;scrollbar-width:none;">
        <button class="slider-nav-btn active" data-target="audit"
          style="background:var(--primary-dark);border:1px solid rgba(255,255,255,0.3);color:#fff;padding:12px 24px;border-radius:50px;white-space:nowrap;font-weight:600;cursor:pointer;transition:all 0.3s;">Discovery</button>
        <button class="slider-nav-btn" data-target="strategy"
          style="background:transparent;border:1px solid rgba(255,255,255,0.3);color:#fff;padding:12px 24px;border-radius:50px;white-space:nowrap;font-weight:600;cursor:pointer;transition:all 0.3s;">Design</button>
        <button class="slider-nav-btn" data-target="onpage"
          style="background:transparent;border:1px solid rgba(255,255,255,0.3);color:#fff;padding:12px 24px;border-radius:50px;white-space:nowrap;font-weight:600;cursor:pointer;transition:all 0.3s;">Development</button>
        <button class="slider-nav-btn" data-target="offpage"
          style="background:transparent;border:1px solid rgba(255,255,255,0.3);color:#fff;padding:12px 24px;border-radius:50px;white-space:nowrap;font-weight:600;cursor:pointer;transition:all 0.3s;">QA
          &amp; Testing</button>
        <button class="slider-nav-btn" data-target="technical"
          style="background:transparent;border:1px solid rgba(255,255,255,0.3);color:#fff;padding:12px 24px;border-radius:50px;white-space:nowrap;font-weight:600;cursor:pointer;transition:all 0.3s;">Launch
          &amp; Support</button>
      </div>
      <div id="slider-content-area" style="background:rgba(0,0,0,0.1);border-radius:30px;padding:50px;">
        <div class="slider-panel active" id="panel-audit"
          style="display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center;">
          <div class="panel-left">
            <h3 style="font-size:28px;margin-bottom:20px;">Discovery &amp; Planning</h3>
            <p style="font-size:18px;margin-bottom:30px;opacity:0.9;">Every successful website starts with deep
              planning:</p>
            <ul style="list-style:none;padding:0;">
              <li style="display:flex;align-items:center;gap:15px;margin-bottom:20px;font-size:16px;"><i
                  class="fa-solid fa-circle-check" style="color:#fff;font-size:20px;"></i><span>Business goals &amp; KPI
                  alignment workshop</span></li>
              <li style="display:flex;align-items:center;gap:15px;margin-bottom:20px;font-size:16px;"><i
                  class="fa-solid fa-circle-check" style="color:#fff;font-size:20px;"></i><span>Technology stack
                  recommendation</span></li>
              <li style="display:flex;align-items:center;gap:15px;margin-bottom:20px;font-size:16px;"><i
                  class="fa-solid fa-circle-check" style="color:#fff;font-size:20px;"></i><span>Sitemap &amp;
                  information architecture</span></li>
              <li style="display:flex;align-items:center;gap:15px;margin-bottom:20px;font-size:16px;"><i
                  class="fa-solid fa-circle-check" style="color:#fff;font-size:20px;"></i><span>Project timeline &amp;
                  milestone planning</span></li>
            </ul>
          </div>
          <div class="panel-right" style="text-align:right;"><img src="assets/images/seo_audit_graphic.png"
              alt="Web Development Process"
              style="max-width:450px;border-radius:50%;box-shadow:0 20px 50px rgba(0,0,0,0.3);"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-pad" style="background:#f8fafc;">
    <div class="container">
      <div class="section-header" style="text-align:center;margin-bottom:60px;">
        <div class="section-tag">Results</div>
        <h2 class="section-title">Web Development Results Across <span>Every Industry</span></h2>
      </div>
      <div class="service-grid-premium" style="grid-template-columns:repeat(3,1fr);gap:30px;">
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-gauge"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">Performance</h3>
          <div class="vstat-number">98</div>
          <div class="vstat-label">Average PageSpeed Score</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">All our websites achieve 90+ scores on Google
            PageSpeed Insights.</p>
        </div>
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-arrow-trend-up"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">Conversions</h3>
          <div class="vstat-number">35%</div>
          <div class="vstat-label">Avg CVR Improvement on Redesigns</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">Data-driven redesigns with CRO built-in from the
            start.</p>
        </div>
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-clock"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">Delivery</h3>
          <div class="vstat-number">98%</div>
          <div class="vstat-label">On-Time Project Delivery</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">Rigorous project management ensuring milestone
            delivery every time.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-pad" style="background:#fff;">
    <div class="container">
      <div class="section-header" style="text-align:center;margin-bottom:60px;">
        <div class="section-tag">Comparison</div>
        <h2 class="section-title">Why Our <span>Web Development</span> Stands Apart</h2>
      </div>
      <table class="diff-table">
        <thead>
          <tr>
            <th>Core Capability</th>
            <th>Generic Dev Agency</th>
            <th style="background:var(--secondary);">The Rankmator Edge</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="point-label">Code Quality</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Template-based builds</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Clean, documented, scalable custom
              code</td>
          </tr>
          <tr>
            <td class="point-label">SEO Readiness</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>SEO added as afterthought</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Technical SEO baked into every page
              from line 1</td>
          </tr>
          <tr>
            <td class="point-label">Speed</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>50-65 PageSpeed score</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>90+ PageSpeed on mobile &amp; desktop
              guaranteed</td>
          </tr>
          <tr>
            <td class="point-label">Support</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Disappears post-launch</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Dedicated post-launch support &amp;
              maintenance plans</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <section id="faq" class="section-pad" style="background:var(--primary-dark);color:#fff;">
    <div class="container">
      <div class="section-header">
        <div class="section-tag" style="color:var(--secondary);">FAQ</div>
        <h2 class="section-title" style="color:#fff;">Website Development FAQs</h2>
      </div>
      <div class="faq-container">
        <div class="faq-item">
          <div class="faq-question">
            <h4>How long does a website project take?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>A standard 5-10 page corporate website takes 4-6 weeks. Complex web applications or large e-commerce
              platforms can take 8-16 weeks depending on feature requirements.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>What tech stack do you use?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>We work with React/Next.js, WordPress, Webflow, and custom HTML/CSS/JS. We recommend the right stack
              based on your content management needs, scalability requirements, and budget.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>Will my website be SEO-optimised from the start?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Yes. All our websites include technical SEO foundations: clean URL structure, schema markup, XML
              sitemaps, canonical tags, Core Web Vitals optimisation, and Google Search Console setup.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>Do you provide website maintenance after launch?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Yes. We offer monthly maintenance retainers covering security updates, performance monitoring, content
              edits, plugin updates, backup management, and 24-48 hour bug fix SLA.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="section-pad"
    style="background:linear-gradient(rgba(255,255,255,0.93),rgba(255,255,255,0.98));position:relative;">
    <div class="container" style="position:relative;z-index:2;">
      <div class="section-header fade-in">
        <h2 class="section-title">Build Your <span>Dream Website</span></h2>
        <p class="section-subtitle">Get a free technical audit and website strategy consultation today.</p>
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
          <h3 style="font-size:24px;font-weight:800;margin-bottom:30px;color:var(--text-primary);">Request a Free
            Website Audit*</h3>
          <form class="main-contact-form" action="mail.php" method="POST">
            <div class="form-group"><input type="text" name="name" class="form-field" placeholder="Name *" required>
            </div>
            <div class="form-group"><input type="email" name="email" class="form-field" placeholder="Email *" required>
            </div>
            <div class="form-group"><input type="tel" name="phone" class="form-field" placeholder="Phone *" required>
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
    const contentData = { audit: { title: "Discovery & Planning", desc: "Every successful website starts with deep planning:", items: ["Business goals & KPI alignment workshop", "Technology stack recommendation", "Sitemap & information architecture", "Project timeline & milestone planning"] }, strategy: { title: "Design", desc: "Pixel-perfect, conversion-focused UI/UX:", items: ["Wireframe creation & client approval", "High-fidelity UI design in Figma", "Mobile-first responsive design", "Brand identity integration"] }, onpage: { title: "Development", desc: "Clean code, built to scale:", items: ["Front-end HTML/CSS/JS development", "CMS setup & configuration", "API integrations & third-party services", "Performance optimisation throughout"] }, offpage: { title: "QA & Testing", desc: "Rigorous quality assurance:", items: ["Cross-browser compatibility testing", "Mobile device testing (iOS & Android)", "Form & functionality QA", "Page speed &amp; accessibility audit"] }, technical: { title: "Launch & Support", desc: "A smooth go-live and beyond:", items: ["DNS configuration & hosting setup", "Google Analytics 4 & Search Console setup", "Post-launch performance monitoring", "Ongoing maintenance retainer (optional)"] } };
    navBtns.forEach(btn => { btn.addEventListener('click', () => { const target = btn.getAttribute('data-target'); navBtns.forEach(b => { b.style.background = 'transparent'; b.classList.remove('active'); }); btn.style.background = 'var(--primary-dark)'; btn.classList.add('active'); const data = contentData[target]; document.querySelector('#panel-audit h3').textContent = data.title; document.querySelector('#panel-audit p').textContent = data.desc; document.querySelector('#panel-audit ul').innerHTML = data.items.map(item => `<li style="display:flex;align-items:center;gap:15px;margin-bottom:20px;font-size:16px;"><i class="fa-solid fa-circle-check" style="color:#fff;font-size:20px;"></i><span>${item}</span></li>`).join(''); }); });
  </script>
</body>

</html>