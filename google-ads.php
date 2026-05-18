<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Google Ads Management Services | Rankmator</title>
  <meta name="description"
    content="Maximize your Google Ads ROI with Rankmator's certified PPC experts. Search, Display, Shopping, PMax & Remarketing campaigns managed by India's top Google Premier Partner agency." />
  <?php include 'links.php'; ?>
  <style>
    .hero-gads {
      background: var(--gradient-hero);
      padding: 60px 0;
      position: relative;
      overflow: hidden;
    }

    .hero-gads::before {
      content: '';
      position: absolute;
      inset: 0;
      background: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');
      opacity: 0.1;
    }

    .hero-badge-gads {
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

    .hero-badge-dot-gads {
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
  <section class="hero-gads">
    <div class="hero-orbs">
      <div class="orb orb-1"></div>
      <div class="orb orb-2"></div>
    </div>
    <div class="container">
      <div class="hero-grid">
        <div class="hero-left">
          <div class="hero-badge-gads">
            <div class="hero-badge-dot-gads"></div>Google Premier Partner Agency
          </div>
          <h1 class="hero-title">Get Instant Visibility &amp; <br /><span class="highlight">Maximum ROI
              With</span><br />Expert Google Ads</h1>
          <p class="hero-subtitle">As a Google Premier Partner — one of only 50 agencies in India — Rankmator delivers
            data-driven Google Ads campaigns that maximize your ad spend and drive measurable business results.</p>
          <div class="hero-actions"><a href="#contact" class="btn btn-green"><i class="fa-brands fa-google"
                style="margin-right:8px;"></i>Get Instant ROI</a><a href="#solutions" class="btn btn-ghost-white">View
              Our Services</a></div>
          <div class="hero-trust">
            <div class="trust-avatars"><i>S</i><i>R</i><i>A</i><i>P</i><i>M</i></div>
            <div class="trust-text"><strong>₹500Cr+ Ad Spend Managed</strong> Google Premier Partner · 4x Avg. ROAS
            </div>
          </div>
        </div>
        <div class="hero-right">
          <div class="hero-illustration">
            <div class="hero-banner-frame fade-in"><img src="assets/images/google_ads_hero.png"
                alt="Google Ads Management" class="hero-banner-img"></div>
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
          <h2 style="font-size:32px;font-weight:800;color:var(--text-primary);margin-bottom:30px;">Why Google Ads Are
            Essential for Business Growth in 2025</h2>
          <ul style="list-style:none;padding:0;">
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>Google processes <strong>8.5
                  billion searches per day</strong> — Google Ads put your brand directly in front of high-intent
                buyers.</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>Businesses earn an average of
                <strong>$8 for every $1</strong> spent on Google Ads (Google Economic Impact Report).</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>We've managed <strong>₹500Cr+ in
                  Google Ads spend</strong> delivering an average 4x ROAS for our clients.</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>As Google Premier Partners, we
                get <strong>exclusive beta access</strong> to new ad features before they're publicly available.</span>
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
        <div class="platform-logo"><i class="fa-brands fa-google"></i> Google Search</div>
        <div class="platform-logo"><i class="fa-solid fa-display"></i> Google Display</div>
        <div class="platform-logo"><i class="fa-solid fa-cart-shopping"></i> Shopping Ads</div>
        <div class="platform-logo"><i class="fa-solid fa-bolt"></i> Performance Max</div>
        <div class="platform-logo"><i class="fa-brands fa-youtube"></i> YouTube Ads</div>
        <div class="platform-logo"><i class="fa-solid fa-map-location-dot"></i> Local Ads</div>
        <div class="platform-logo"><i class="fa-brands fa-google"></i> Google Search</div>
        <div class="platform-logo"><i class="fa-solid fa-display"></i> Google Display</div>
        <div class="platform-logo"><i class="fa-solid fa-cart-shopping"></i> Shopping Ads</div>
        <div class="platform-logo"><i class="fa-solid fa-bolt"></i> Performance Max</div>
        <div class="platform-logo"><i class="fa-brands fa-youtube"></i> YouTube Ads</div>
        <div class="platform-logo"><i class="fa-solid fa-map-location-dot"></i> Local Ads</div>
      </div>
    </div>
  </section>

  <!-- SERVICES GRID -->
  <section id="solutions" class="section-pad" style="background:#fcfcfc;">
    <div class="container">
      <div class="section-header" style="text-align:left;margin-bottom:60px;">
        <h2 class="section-title" style="font-size:42px;line-height:1.2;margin-bottom:25px;">Complete Google Ads
          Management Services</h2>
        <p class="section-subtitle" style="font-size:18px;margin-left:0;">From keyword strategy to creative and bid
          management, our certified Google Ads experts handle everything to maximize your ROI.</p>
      </div>
      <div class="service-grid-premium">
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-magnifying-glass" style="color:var(--secondary);"></i></div>
          <h3>Google Search Ads</h3>
          <p>High-intent keyword targeting with compelling ad copy, Quality Score optimization, and smart bidding to
            capture customers at the moment they're ready to buy.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i class="fa-solid fa-bolt"
              style="color:var(--secondary);"></i></div>
          <h3>Performance Max (PMax)</h3>
          <p>AI-powered campaigns that automatically serve your ads across all Google channels — Search, Display,
            YouTube, Gmail, and Maps — for maximum reach and conversions.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-cart-shopping" style="color:var(--secondary);"></i></div>
          <h3>Google Shopping Ads</h3>
          <p>Product listing ad optimization, Google Merchant Center management, feed optimization, and ROAS-focused
            bidding strategy to dominate shopping search results.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-display" style="color:var(--secondary);"></i></div>
          <h3>Display &amp; Remarketing</h3>
          <p>Eye-catching display banners and precision remarketing campaigns to re-engage website visitors across
            Google's 2M+ partner sites and apps with dynamic ads.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-sliders" style="color:var(--secondary);"></i></div>
          <h3>Conversion Rate Optimization</h3>
          <p>Landing page optimization, heatmap analysis, A/B testing, and conversion funnel improvements to maximize
            the value of every click you pay for.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-chart-pie" style="color:var(--secondary);"></i></div>
          <h3>Tracking &amp; Analytics Setup</h3>
          <p>Full GA4, Google Tag Manager, and conversion tracking implementation to ensure accurate data attribution
            and enable smart, data-driven campaign decisions.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <div style="text-align:center;margin-top:50px;"><a href="#contact" class="btn btn-primary"
          style="padding:15px 40px;border-radius:10px;font-weight:700;">Start Your Google Ads Campaign <i
            class="fa-solid fa-arrow-right" style="margin-left:8px;"></i></a></div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="section-pad" style="padding-top:0;">
    <div class="container">
      <div class="insights-banner"
        style="background:var(--gradient-blue);border-radius:20px;display:flex;align-items:center;padding:0 40px;color:#fff;overflow:hidden;height:180px;">
        <div class="insights-img" style="width:200px;height:100%;display:flex;align-items:flex-end;"><img
            src="assets/images/seo_insights_cta.png" alt="Google Ads Audit"
            style="height:120%;object-fit:contain;margin-bottom:-1px;"></div>
        <div class="insights-text" style="flex:1;padding-left:40px;">
          <h2 style="font-size:28px;font-weight:800;margin-bottom:10px;">Is Your Ad Spend Delivering Maximum ROI?</h2>
          <p style="font-size:16px;opacity:0.9;">Get a free Google Ads account audit and discover how to cut wasted
            spend and increase conversions.</p>
        </div>
        <div class="insights-action"><a href="#contact" class="btn btn-white"
            style="border-radius:50px;padding:12px 30px;">Free Ads Audit <i class="fa-solid fa-arrow-right"
              style="margin-left:8px;"></i></a></div>
      </div>
    </div>
  </section>

  <!-- VERTICAL STATS -->
  <section class="section-pad" style="background:#f8fafc;">
    <div class="container">
      <div class="section-header" style="text-align:center;margin-bottom:60px;">
        <div class="section-tag">Proven Results</div>
        <h2 class="section-title">Google Ads Success Across <span>All Industries</span></h2>
        <p class="section-subtitle">Our Google Ads management delivers measurable ROI across diverse sectors and
          business sizes.</p>
      </div>
      <div class="service-grid-premium" style="grid-template-columns:repeat(3,1fr);gap:30px;">
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-bag-shopping"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">E-commerce &amp; Retail</h3>
          <div class="vstat-number">5x</div>
          <div class="vstat-label">Average ROAS</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">Shopping and PMax campaigns driving consistent
            revenue growth for online stores of all sizes.</p>
        </div>
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-house"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">Real Estate</h3>
          <div class="vstat-number">60%</div>
          <div class="vstat-label">Reduction in CPA</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">Hyper-targeted search campaigns generating quality
            property inquiry leads at optimized cost per acquisition.</p>
        </div>
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-hospital"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">Healthcare</h3>
          <div class="vstat-number">3x</div>
          <div class="vstat-label">Lead Volume Growth</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">Compliant Google Ads for clinics, hospitals, and
            healthcare brands driving patient appointments at scale.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- COMPARISON TABLE -->
  <section class="section-pad" style="background:#fff;">
    <div class="container">
      <div class="section-header" style="text-align:center;margin-bottom:60px;">
        <div class="section-tag">The Comparison</div>
        <h2 class="section-title">The Rankmator <span>Google Ads Edge</span></h2>
        <p class="section-subtitle">As Google Premier Partners, we have an exclusive advantage that typical agencies
          simply can't match.</p>
      </div>
      <table class="diff-table">
        <thead>
          <tr>
            <th>Capability</th>
            <th>Typical PPC Agencies</th>
            <th style="background:var(--secondary);">The Rankmator Edge</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="point-label">Partner Status</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Basic Google Partner or none</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Google Premier Partner (Top 3%
              globally)</td>
          </tr>
          <tr>
            <td class="point-label">Bidding Strategy</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Manual or generic automated bidding</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>AI-powered smart bidding with custom
              ROAS targets</td>
          </tr>
          <tr>
            <td class="point-label">Optimization</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Monthly review cycles</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Daily optimization &amp; weekly
              performance calls</td>
          </tr>
          <tr>
            <td class="point-label">Transparency</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Limited campaign access</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Full account ownership &amp;
              real-time dashboards</td>
          </tr>
          <tr>
            <td class="point-label">Beta Features</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Standard product only</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Exclusive access to Google beta
              features &amp; support</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="section-pad" style="background:var(--primary-dark);color:#fff;">
    <div class="container">
      <div class="section-header">
        <div class="section-tag" style="color:var(--secondary);">Google Ads Expert Q&amp;A</div>
        <h2 class="section-title" style="color:#fff;">Google Ads FAQs</h2>
      </div>
      <div class="faq-container">
        <div class="faq-item">
          <div class="faq-question">
            <h4>What is the minimum budget needed for Google Ads?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>There is no fixed minimum, but we typically recommend starting with at least ₹50,000-₹1,00,000 per month
              to gather sufficient data for optimization. The ideal budget depends on your industry competitiveness,
              target keywords, and business goals.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>How quickly will I see results from Google Ads?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Google Ads can drive traffic and leads from day one. However, the first 2-4 weeks are a learning phase
              where the algorithm optimizes. You can expect peak performance and stable ROAS from week 4-8 onwards as we
              continuously optimize bids, keywords, and creatives.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>Do you manage our Google Ads account or set it up for us to manage?</h4><i
              class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>We provide full end-to-end managed services. Our team handles all aspects of campaign creation,
              optimization, A/B testing, and reporting. You retain full ownership of your Google Ads account and can
              view everything in real time.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>What makes Rankmator a Google Premier Partner?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Google Premier Partner status is awarded to the top 3% of Google Partner agencies globally. It requires
              meeting high performance standards for ad spend, client growth, and certified expertise across multiple
              specializations. This gives us exclusive beta features, direct Google support, and higher quality insights
              for our clients.</p>
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
        <h2 class="section-title">Ready to Maximize Your <span>Google Ads ROI?</span></h2>
        <p class="section-subtitle">Talk to our certified Google Ads experts today and get a free account audit.</p>
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
</body>

</html>