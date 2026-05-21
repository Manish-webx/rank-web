<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Facebook Ads Management Services | Meta Advertising | Rankmator</title>
  <meta name="description"
    content="Drive targeted leads and sales with Rankmator's expert Facebook & Meta Ads management. Precision audience targeting, compelling ad creatives, and data-driven campaigns for maximum ROAS." />
  <?php include 'links.php'; ?>
  <style>
    .hero-fb {
      background: var(--gradient-hero);
      padding: 60px 0;
      position: relative;
      overflow: hidden;
    }

    .hero-fb::before {
      content: '';
      position: absolute;
      inset: 0;
      background: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');
      opacity: 0.1;
    }

    .hero-badge-fb {
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

    .hero-badge-dot-fb {
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
  <section class="hero-fb">
    <div class="hero-orbs">
      <div class="orb orb-1"></div>
      <div class="orb orb-2"></div>
    </div>
    <div class="container">
      <div class="hero-grid">
        <div class="hero-left">
          <div class="hero-badge-fb">
            <div class="hero-badge-dot-fb"></div>Meta Business Partner Agency
          </div>
          <h1 class="hero-title">Precision Facebook Ads <br /><span class="highlight">That Convert &amp;
              Scale</span><br />Your Business Growth</h1>
          <p class="hero-subtitle">Reach 3 billion+ Meta users with laser-targeted Facebook and Instagram ads.
            Rankmator's certified Meta Ads team designs, manages, and scales campaigns that deliver measurable ROI.</p>
          <div class="hero-actions"><a href="#contact" class="btn btn-green"><i class="fa-brands fa-meta"
                style="margin-right:8px;"></i>Start Meta Ads</a><a href="#solutions" class="btn btn-ghost-white">View
              Our Services</a></div>
          <div class="hero-trust">
            <div class="trust-avatars"><i>S</i><i>R</i><i>A</i><i>P</i><i>M</i></div>
            <div class="trust-text"><strong>200+ Meta Ad Campaigns</strong> Average 4x ROAS Delivered</div>
          </div>
        </div>
        <div class="hero-right">
          <div class="hero-illustration">
            <div class="hero-banner-frame fade-in"><img src="assets/images/facebook_ads_hero.png"
                alt="Facebook Ads Management" class="hero-banner-img"></div>
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
          <h2 style="font-size:32px;font-weight:800;color:var(--text-primary);margin-bottom:30px;">Why Facebook &amp;
            Meta Ads Are a Business Growth Powerhouse</h2>
          <ul style="list-style:none;padding:0;">
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>Meta's advertising ecosystem
                reaches over <strong>3.27 billion daily active users</strong> across Facebook, Instagram, WhatsApp, and
                Messenger.</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>Facebook Ads offer the most
                sophisticated <strong>interest, demographic, and behavioral targeting</strong> of any advertising
                platform globally.</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>We've generated <strong>₹200Cr+
                  in revenue</strong> for e-commerce brands through our Meta Advantage+ and Dynamic Product Ad
                campaigns.</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>Our Advantage+ AI campaigns
                reduce <strong>cost per acquisition by up to 50%</strong> compared to traditional manual
                targeting.</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- MARQUEE -->
  <section style="background:#fff;border-bottom:1px solid #e2e8f0;padding:20px 0;">
    <div class="platform-slider-container fade-in">
      <div class="platform-logos-track">
        <div class="platform-logo"><i class="fa-brands fa-facebook"></i> Facebook</div>
        <div class="platform-logo"><i class="fa-brands fa-instagram"></i> Instagram</div>
        <div class="platform-logo"><i class="fa-brands fa-whatsapp"></i> WhatsApp Ads</div>
        <div class="platform-logo"><i class="fa-solid fa-envelope"></i> Messenger Ads</div>
        <div class="platform-logo"><i class="fa-solid fa-bolt"></i> Advantage+</div>
        <div class="platform-logo"><i class="fa-solid fa-cart-shopping"></i> Dynamic Ads</div>
        <div class="platform-logo"><i class="fa-brands fa-facebook"></i> Facebook</div>
        <div class="platform-logo"><i class="fa-brands fa-instagram"></i> Instagram</div>
        <div class="platform-logo"><i class="fa-brands fa-whatsapp"></i> WhatsApp Ads</div>
        <div class="platform-logo"><i class="fa-solid fa-envelope"></i> Messenger Ads</div>
        <div class="platform-logo"><i class="fa-solid fa-bolt"></i> Advantage+</div>
        <div class="platform-logo"><i class="fa-solid fa-cart-shopping"></i> Dynamic Ads</div>
      </div>
    </div>
  </section>

  <!-- SERVICES GRID -->
  <section id="solutions" class="section-pad" style="background:#fcfcfc;">
    <div class="container">
      <div class="section-header" style="text-align:left;margin-bottom:60px;">
        <h2 class="section-title" style="font-size:42px;line-height:1.2;margin-bottom:25px;">Complete Facebook &amp;
          Meta Ads Services</h2>
        <p class="section-subtitle" style="font-size:18px;margin-left:0;">From audience strategy to ad creative and
          campaign optimization, our Meta Ads team delivers full-funnel performance across every Meta platform.</p>
      </div>
      <div class="service-grid-premium">
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-crosshairs" style="color:var(--secondary);"></i></div>
          <h3>Audience Strategy &amp; Targeting</h3>
          <p>Custom, Lookalike, and Interest-based audience creation using data-driven segmentation to reach your ideal
            customers at the lowest possible cost per click.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-palette" style="color:var(--secondary);"></i></div>
          <h3>Ad Creative &amp; Copywriting</h3>
          <p>High-performing video, carousel, single image, and collection ad creatives crafted by our in-house design
            team, backed by data from thousands of campaigns.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-cart-shopping" style="color:var(--secondary);"></i></div>
          <h3>Dynamic Product Ads (DPA)</h3>
          <p>Automated product catalog ads that show the right product to each shopper based on their browsing history,
            cart activity, and purchase behavior.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-user-plus" style="color:var(--secondary);"></i></div>
          <h3>Lead Generation Campaigns</h3>
          <p>Facebook Lead Ads and landing page campaigns with optimized lead forms and instant CRM integration to
            capture high-quality leads at scale.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-rotate-right" style="color:var(--secondary);"></i></div>
          <h3>Retargeting &amp; Funnel Campaigns</h3>
          <p>Strategic retargeting of website visitors, video viewers, and engaged audiences through multi-stage funnel
            campaigns that nurture prospects to conversion.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-chart-pie" style="color:var(--secondary);"></i></div>
          <h3>Analytics &amp; Attribution</h3>
          <p>Meta Pixel setup, Conversions API implementation, and comprehensive attribution tracking to accurately
            measure campaign impact and optimize ROAS.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <div style="text-align:center;margin-top:50px;"><a href="#contact" class="btn btn-primary"
          style="padding:15px 40px;border-radius:10px;font-weight:700;">Launch Facebook Ads Campaign <i
            class="fa-solid fa-arrow-right" style="margin-left:8px;"></i></a></div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="section-pad" style="padding-top:0;">
    <div class="container">
      <div class="insights-banner"
        style="background:var(--gradient-blue);border-radius:20px;display:flex;align-items:center;padding:0 40px;color:#fff;overflow:hidden;height:180px;">
        <div class="insights-img" style="width:200px;height:100%;display:flex;align-items:flex-end;"><img
            src="assets/images/seo_insights_cta.png" alt="Facebook Ads Audit"
            style="height:120%;object-fit:contain;margin-bottom:-1px;"></div>
        <div class="insights-text" style="flex:1;padding-left:40px;">
          <h2 style="font-size:28px;font-weight:800;margin-bottom:10px;">Is Your Facebook Ad Spend Wasting Budget?</h2>
          <p style="font-size:16px;opacity:0.9;">Get a free Meta Ads audit and uncover why your campaigns aren't
            converting at their full potential.</p>
        </div>
        <div class="insights-action"><a href="#contact" class="btn btn-white"
            style="border-radius:50px;padding:12px 30px;">Free Meta Audit <i class="fa-solid fa-arrow-right"
              style="margin-left:8px;"></i></a></div>
      </div>
    </div>
  </section>

  <!-- VERTICAL STATS -->
  <section class="section-pad" style="background:#f8fafc;">
    <div class="container">
      <div class="section-header" style="text-align:center;margin-bottom:60px;">
        <div class="section-tag">Proven Results</div>
        <h2 class="section-title">Meta Ads Success Across <span>All Industries</span></h2>
        <p class="section-subtitle">Our Facebook and Instagram ad campaigns drive measurable revenue for brands in every
          sector.</p>
      </div>
      <div class="service-grid-premium" style="grid-template-columns:repeat(3,1fr);gap:30px;">
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-bag-shopping"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">E-commerce &amp; D2C</h3>
          <div class="vstat-number">6x</div>
          <div class="vstat-label">Average ROAS Delivered</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">Dynamic Product Ads and Advantage+ Shopping campaigns
            scaling D2C brands from ₹10L to ₹1Cr+ monthly revenue.</p>
        </div>
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-graduation-cap"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">Education &amp; EdTech</h3>
          <div class="vstat-number">50%</div>
          <div class="vstat-label">Reduction in Lead Cost</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">Lead Gen and Messenger campaigns driving enrolment
            inquiries at significantly lower cost per lead for education brands.</p>
        </div>
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-house"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">Real Estate</h3>
          <div class="vstat-number">4x</div>
          <div class="vstat-label">Increase in Site Visits</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">Video ads and instant experience campaigns driving
            high-intent property buyers to showrooms and project sites.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- COMPARISON TABLE -->
  <section class="section-pad" style="background:#fff;">
    <div class="container">
      <div class="section-header" style="text-align:center;margin-bottom:60px;">
        <div class="section-tag">The Comparison</div>
        <h2 class="section-title">The Rankmator <span>Facebook Ads Edge</span></h2>
        <p class="section-subtitle">We go beyond the basics to build Facebook ad systems that scale profitably.</p>
      </div>
      <table class="diff-table">
        <thead>
          <tr>
            <th>Capability</th>
            <th>Typical Meta Agencies</th>
            <th style="background:var(--secondary);">The Rankmator Edge</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="point-label">Creative</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Outsourced or template designs</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>In-house creative team with
              data-backed design</td>
          </tr>
          <tr>
            <td class="point-label">Targeting</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Basic interest-based targeting</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Multi-layered audience + Conversions
              API integration</td>
          </tr>
          <tr>
            <td class="point-label">Optimization</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Set &amp; check weekly</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Daily monitoring + rapid creative
              iteration</td>
          </tr>
          <tr>
            <td class="point-label">Attribution</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Last-click Pixel only</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Conversions API + cross-channel
              attribution modelling</td>
          </tr>
          <tr>
            <td class="point-label">Scaling</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Manual budget increases</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Proven scaling framework maintaining
              ROAS at each step</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="section-pad" style="background:var(--primary-dark);color:#fff;">
    <div class="container">
      <div class="section-header">
        <div class="section-tag" style="color:var(--secondary);">Meta Ads Expert Q&amp;A</div>
        <h2 class="section-title" style="color:#fff;">Facebook Ads FAQs</h2>
      </div>
      <div class="faq-container">
        <div class="faq-item">
          <div class="faq-question">
            <h4>What budget should I start with for Facebook Ads?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>We recommend a starting budget of at least ₹30,000-₹50,000 per month to test multiple audiences and
              creatives. E-commerce brands typically see optimal results with ₹1L+ monthly budgets where we can scale
              Advantage+ Shopping campaigns for compound ROAS growth.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>How do you handle iOS 14+ tracking limitations?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>We implement Meta's Conversions API (CAPI) server-side tracking which bypasses browser-level privacy
              restrictions, maintaining 85-90% attribution accuracy. We also set up aggregated event measurement and use
              first-party data strategies to maximize campaign performance despite iOS limitations.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>Do Facebook Ads work for B2B businesses?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Facebook Ads can work very well for B2B when used correctly. We target decision-makers by job title,
              company size, and industry, running Lead Gen campaigns for whitepapers, webinars, and consultations. For
              many B2B verticals, Facebook Ads deliver leads at significantly lower CPL than LinkedIn.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>How long does it take to see Facebook Ads results?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Facebook's algorithm needs a "learning phase" of approximately 50 conversion events per ad set (usually
              1-2 weeks) before it stabilizes. You'll typically see initial results in week 1-2, with optimized
              performance from week 4 onwards as we iterate on creatives and audiences based on data.</p>
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
        <h2 class="section-title">Ready to Scale with <span>Facebook Ads?</span></h2>
        <p class="section-subtitle">Talk to our certified Meta Ads experts today and get a free account audit and growth
          strategy.</p>
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