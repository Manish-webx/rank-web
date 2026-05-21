<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Performance Marketing Services | PPC &amp; Paid Media | Rankmator</title>
  <meta name="description"
    content="Maximize ROI with Rankmator's data-driven Performance Marketing services. Google Ads, Meta Ads, programmatic advertising, and CRO — all driven by measurable results and real business growth." />
  <?php include 'links.php'; ?>
  <style>
    .hero-pm {
      background: var(--gradient-hero);
      padding: 60px 0;
      position: relative;
      overflow: hidden;
    }

    .hero-pm::before {
      content: '';
      position: absolute;
      inset: 0;
      background: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');
      opacity: 0.1;
    }

    .hero-badge-pm {
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

    .hero-badge-dot-pm {
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
      border-radius: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 28px;
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

    .platform-slider-container::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      width: 15rem;
      height: 100%;
      z-index: 2;
      background: linear-gradient(to right, #fff, transparent);
      pointer-events: none;
    }

    .platform-slider-container::after {
      content: '';
      position: absolute;
      right: 0;
      top: 0;
      width: 15rem;
      height: 100%;
      z-index: 2;
      background: linear-gradient(to left, #fff, transparent);
      pointer-events: none;
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
        transform: translateX(0);
      }

      100% {
        transform: translateX(-50%);
      }
    }

    @keyframes pulse {

      0%,
      100% {
        transform: scale(1);
        opacity: 1;
      }

      50% {
        transform: scale(1.5);
        opacity: 0.5;
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

  <!-- HERO -->
  <section class="hero-pm">
    <div class="hero-orbs">
      <div class="orb orb-1"></div>
      <div class="orb orb-2"></div>
    </div>
    <div class="container">
      <div class="hero-grid">
        <div class="hero-left">
          <div class="hero-badge-pm">
            <div class="hero-badge-dot-pm"></div>India's #1 Performance Marketing Agency
          </div>
          <h1 class="hero-title">Every Rupee Spent,<br /><span class="highlight">Every Result Measured.</span><br />Pure
            Performance.</h1>
          <p class="hero-subtitle">Rankmator's performance marketing experts manage ₹500Cr+ in annual ad spend across
            Google, Meta, Programmatic, and more — delivering an average 4x ROAS with transparent, real-time reporting.
          </p>
          <div class="hero-actions"><a href="#contact" class="btn btn-green"><i class="fa-solid fa-bolt"
                style="margin-right:8px;"></i>Maximize My ROI</a><a href="#solutions"
              class="btn btn-ghost-white">Explore Services</a></div>
          <div class="hero-trust">
            <div class="trust-avatars"><i>S</i><i>R</i><i>A</i><i>P</i><i>M</i></div>
            <div class="trust-text"><strong>₹500Cr+ Ad Spend Managed</strong> Google Premier Partner · 4x Avg. ROAS
              Delivered</div>
          </div>
        </div>
        <div class="hero-right">
          <div class="hero-illustration">
            <div class="hero-banner-frame fade-in"><img src="assets/images/performance_marketing_hero.png"
                alt="Performance Marketing" class="hero-banner-img"></div>
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
          <h2 style="font-size:32px;font-weight:800;color:var(--text-primary);margin-bottom:30px;">Why Performance
            Marketing Is Your Fastest Path to Revenue Growth</h2>
          <ul style="list-style:none;padding:0;">
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>Performance marketing is
                <strong>100% measurable</strong> — every click, lead, and sale is trackable against the exact ad spend
                that generated it.</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>We've delivered an average
                <strong>4x ROAS</strong> across 150+ campaigns with a 60% average reduction in cost per
                acquisition.</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>Our AI-powered bid management
                reduces <strong>wasted ad spend by up to 35%</strong> while maintaining and growing conversions.</span>
            </li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>As Google Premier Partners, we
                manage <strong>₹500Cr+ in annual ad spend</strong> for 150+ brands across India and globally.</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- MARQUEE -->
  <section style="background:#fff;border-bottom:1px solid #e2e8f0;padding:20px 0;">
    <div class="platform-slider-container fade-in">
      <div class="platform-logos-track">
        <div class="platform-logo"><i class="fa-brands fa-google"></i> Google Ads</div>
        <div class="platform-logo"><i class="fa-brands fa-meta"></i> Meta Ads</div>
        <div class="platform-logo"><i class="fa-brands fa-linkedin"></i> LinkedIn Ads</div>
        <div class="platform-logo"><i class="fa-brands fa-youtube"></i> YouTube Ads</div>
        <div class="platform-logo"><i class="fa-solid fa-display"></i> Programmatic</div>
        <div class="platform-logo"><i class="fa-solid fa-chart-line"></i> Analytics</div>
        <div class="platform-logo"><i class="fa-brands fa-google"></i> Google Ads</div>
        <div class="platform-logo"><i class="fa-brands fa-meta"></i> Meta Ads</div>
        <div class="platform-logo"><i class="fa-brands fa-linkedin"></i> LinkedIn Ads</div>
        <div class="platform-logo"><i class="fa-brands fa-youtube"></i> YouTube Ads</div>
        <div class="platform-logo"><i class="fa-solid fa-display"></i> Programmatic</div>
        <div class="platform-logo"><i class="fa-solid fa-chart-line"></i> Analytics</div>
      </div>
    </div>
  </section>

  <!-- SERVICES GRID -->
  <section id="solutions" class="section-pad" style="background:#fcfcfc;">
    <div class="container">
      <div class="section-header" style="text-align:left;margin-bottom:60px;">
        <h2 class="section-title" style="font-size:42px;line-height:1.2;margin-bottom:25px;">Full-Spectrum Performance
          Marketing Services</h2>
        <p class="section-subtitle" style="font-size:18px;margin-left:0;">We manage the entire performance marketing
          ecosystem — from paid search and social to programmatic and CRO — delivering a unified strategy optimized for
          maximum ROI.</p>
      </div>
      <div class="service-grid-premium">
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-brands fa-google" style="color:var(--secondary);"></i></div>
          <h3>Google Ads (PPC)</h3>
          <p>Search, Shopping, Display, Performance Max, and YouTube ad campaigns managed by certified Google Premier
            Partner experts to maximize ROAS at every budget level.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i class="fa-brands fa-meta"
              style="color:var(--secondary);"></i></div>
          <h3>Paid Social (Meta, LinkedIn)</h3>
          <p>Full-funnel Meta and LinkedIn ad campaigns with precision audience targeting, high-converting creatives,
            and advanced Conversions API attribution for B2B and B2C brands.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-display" style="color:var(--secondary);"></i></div>
          <h3>Programmatic Advertising</h3>
          <p>AI-powered display, native, and video advertising across premium publisher networks with real-time bidding,
            audience data layering, and brand safety controls.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-rotate-right" style="color:var(--secondary);"></i></div>
          <h3>Remarketing &amp; Retargeting</h3>
          <p>Cross-channel remarketing campaigns that re-engage lost visitors across Google, Meta, and the open web,
            turning abandoned sessions into conversions with smart sequential messaging.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-sliders" style="color:var(--secondary);"></i></div>
          <h3>Conversion Rate Optimization (CRO)</h3>
          <p>Landing page optimization, A/B testing, heatmap analysis, and UX improvements that maximize conversions
            from existing traffic and reduce your effective cost per acquisition.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-chart-pie" style="color:var(--secondary);"></i></div>
          <h3>Analytics &amp; Attribution</h3>
          <p>GA4, Google Tag Manager, and multi-touch attribution modelling that gives you a complete picture of the
            customer journey and enables smarter budget allocation across channels.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <div style="text-align:center;margin-top:50px;"><a href="#contact" class="btn btn-primary"
          style="padding:15px 40px;border-radius:10px;font-weight:700;">Maximize My Performance <i
            class="fa-solid fa-arrow-right" style="margin-left:8px;"></i></a></div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="section-pad" style="padding-top:0;">
    <div class="container">
      <div class="insights-banner"
        style="background:var(--gradient-blue);border-radius:20px;display:flex;align-items:center;padding:0 40px;color:#fff;overflow:hidden;height:180px;">
        <div class="insights-img" style="width:200px;height:100%;display:flex;align-items:flex-end;"><img
            src="assets/images/seo_insights_cta.png" alt="Performance Marketing Audit"
            style="height:120%;object-fit:contain;margin-bottom:-1px;"></div>
        <div class="insights-text" style="flex:1;padding-left:40px;">
          <h2 style="font-size:28px;font-weight:800;margin-bottom:10px;">Is Your Ad Spend Delivering Its Full Potential?
          </h2>
          <p style="font-size:16px;opacity:0.9;">Get a free performance marketing audit and uncover where your budget is
            leaking and where the growth opportunities are.</p>
        </div>
        <div class="insights-action"><a href="#contact" class="btn btn-white"
            style="border-radius:50px;padding:12px 30px;">Free Campaign Audit <i class="fa-solid fa-arrow-right"
              style="margin-left:8px;"></i></a></div>
      </div>
    </div>
  </section>

  <!-- VERTICAL STATS -->
  <section class="section-pad" style="background:#f8fafc;">
    <div class="container">
      <div class="section-header" style="text-align:center;margin-bottom:60px;">
        <div class="section-tag">Proven Results</div>
        <h2 class="section-title">Performance Marketing That <span>Moves the Needle</span></h2>
        <p class="section-subtitle">Real numbers. Real businesses. Real transformational growth through data-driven
          performance marketing.</p>
      </div>
      <div class="service-grid-premium" style="grid-template-columns:repeat(3,1fr);gap:30px;">
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-bag-shopping"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">E-commerce &amp; Retail</h3>
          <div class="vstat-number">5x</div>
          <div class="vstat-label">Average ROAS</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">Omnichannel paid campaigns driving consistent DTC
            revenue growth for e-commerce brands at scale.</p>
        </div>
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-building-columns"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">BFSI &amp; Finance</h3>
          <div class="vstat-number">60%</div>
          <div class="vstat-label">Reduction in CPA</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">Lead generation campaigns for insurance, banking, and
            fintech delivering high-quality leads at optimized acquisition costs.</p>
        </div>
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-house"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">Real Estate</h3>
          <div class="vstat-number">4x</div>
          <div class="vstat-label">Lead Volume Growth</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">Full-funnel campaigns from awareness to site visit
            generating buyer inquiries for luxury and affordable real estate projects.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- COMPARISON -->
  <section class="section-pad" style="background:#fff;">
    <div class="container">
      <div class="section-header" style="text-align:center;margin-bottom:60px;">
        <div class="section-tag">The Comparison</div>
        <h2 class="section-title">The Rankmator <span>Performance Edge</span></h2>
        <p class="section-subtitle">We manage performance marketing as a growth system, not just a campaign management
          service.</p>
      </div>
      <table class="diff-table">
        <thead>
          <tr>
            <th>Capability</th>
            <th>Typical Performance Agencies</th>
            <th style="background:var(--secondary);">The Rankmator Edge</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="point-label">Expertise</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Single-channel specialists</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>True omnichannel performance
              marketing</td>
          </tr>
          <tr>
            <td class="point-label">Technology</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Standard platform tools</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Proprietary AI bid management &amp;
              analytics stack</td>
          </tr>
          <tr>
            <td class="point-label">CRO</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Ad management only, no CRO</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Integrated CRO and landing page
              optimization</td>
          </tr>
          <tr>
            <td class="point-label">Attribution</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Platform-reported data only</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Cross-channel multi-touch attribution
              modelling</td>
          </tr>
          <tr>
            <td class="point-label">Transparency</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Monthly summary reports</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Real-time live dashboards + weekly
              strategy calls</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="section-pad" style="background:var(--primary-dark);color:#fff;">
    <div class="container">
      <div class="section-header">
        <div class="section-tag" style="color:var(--secondary);">Performance Marketing Q&amp;A</div>
        <h2 class="section-title" style="color:#fff;">Performance Marketing FAQs</h2>
      </div>
      <div class="faq-container">
        <div class="faq-item">
          <div class="faq-question">
            <h4>What is performance marketing and how is it different from traditional advertising?</h4><i
              class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Performance marketing is entirely results-based — you pay for measurable outcomes (clicks, leads, sales)
              rather than exposure (impressions). Unlike traditional advertising where results are difficult to
              attribute, performance marketing provides 100% attribution, allowing us to optimize every aspect of your
              campaign based on real data.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>What channels does Rankmator use for performance marketing?</h4><i
              class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>We manage performance marketing across Google (Search, Display, Shopping, YouTube, PMax), Meta (Facebook,
              Instagram), LinkedIn, programmatic networks, and affiliate marketing. We select the right channel mix
              based on your specific target audience, product/service, and business goals.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>How do you measure and report ROAS?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>We implement full tracking infrastructure including server-side tagging, GA4, and cross-channel
              attribution modelling. You get access to a live real-time dashboard showing ad spend, revenue, ROAS, CPA,
              and lead quality metrics by channel. Monthly reports include deep-dive analysis, insights, and
              forward-looking strategy adjustments.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>How much budget do I need to start performance marketing?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>We recommend a minimum monthly ad budget of ₹1,00,000 to get meaningful data across at least 2 channels
              for optimization. However, many of our clients start smaller and scale up as we prove ROAS. There is no
              one-size-fits-all answer — our team will recommend the right starting budget based on your industry,
              competition, and goals.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact" class="section-pad" style="background:#fff;">
    <div class="container">
      <div class="section-header fade-in" style="text-align:center;margin-bottom:60px;">
        <div class="section-tag">Get Started</div>
        <h2 class="section-title">Ready to Maximize Your <span>Marketing Performance?</span></h2>
        <p class="section-subtitle">Talk to our performance marketing experts today and get a free campaign audit and
          ROI projection.</p>
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
          <h3 style="font-size:24px;font-weight:800;margin-bottom:30px;color:#111;">Contact Info*</h3>
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
</body>

</html>