<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Email Marketing Services | Rankmator</title>
  <meta name="description"
    content="Drive revenue through the inbox with Rankmator's email marketing services. Automated drip campaigns, advanced segmentation, personalization, and measurable ROI for every send." />
  <?php include 'links.php'; ?>
  <style>
    .hero-em {
      background: var(--gradient-hero);
      padding: 60px 0;
      position: relative;
      overflow: hidden;
    }

    .hero-em::before {
      content: '';
      position: absolute;
      inset: 0;
      background: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');
      opacity: 0.1;
    }

    .hero-badge-em {
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

    .hero-badge-dot-em {
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
  <section class="hero-em">
    <div class="hero-orbs">
      <div class="orb orb-1"></div>
      <div class="orb orb-2"></div>
    </div>
    <div class="container">
      <div class="hero-grid">
        <div class="hero-left">
          <div class="hero-badge-em">
            <div class="hero-badge-dot-em"></div>India's #1 Email Marketing Agency
          </div>
          <h1 class="hero-title">Turn Your Inbox Into a <br /><span
              class="highlight">Revenue-Generating</span><br />Growth Machine</h1>
          <p class="hero-subtitle">Email marketing delivers the highest ROI of any digital channel — $42 for every $1
            spent. Rankmator's automated, hyper-personalized email strategies convert prospects into loyal, repeat
            customers.</p>
          <div class="hero-actions"><a href="#contact" class="btn btn-green"><i class="fa-solid fa-envelope"
                style="margin-right:8px;"></i>Start Email Campaigns</a><a href="#solutions"
              class="btn btn-ghost-white">View Our Services</a></div>
          <div class="hero-trust">
            <div class="trust-avatars"><i>S</i><i>R</i><i>A</i><i>P</i><i>M</i></div>
            <div class="trust-text"><strong>1M+ Emails Sent Monthly</strong> Average 10x ROI on Campaigns</div>
          </div>
        </div>
        <div class="hero-right">
          <div class="hero-illustration">
            <div class="hero-banner-frame fade-in"><img src="assets/images/email_marketing_hero.png"
                alt="Email Marketing" class="hero-banner-img"></div>
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
          <h2 style="font-size:32px;font-weight:800;color:var(--text-primary);margin-bottom:30px;">Why Email Marketing
            Remains the Highest-ROI Channel in 2025</h2>
          <ul style="list-style:none;padding:0;">
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>Email generates an average ROI
                of <strong>$42 for every $1 spent</strong> — higher than any other digital marketing channel.</span>
            </li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>There are <strong>4.3 billion
                  email users globally</strong> — more than any social media platform combined.</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>Personalized email campaigns
                deliver <strong>6x higher transaction rates</strong> than generic mass-blast campaigns.</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>Our AI-powered email automation
                delivers an average open rate of <strong>25%+</strong> vs. a 15% industry standard.</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- MARQUEE -->
  <section style="background:#fff;border-bottom:1px solid #e2e8f0;padding:20px 0;">
    <div class="platform-slider-container fade-in">
      <div class="platform-logos-track">
        <div class="platform-logo"><i class="fa-regular fa-envelope"></i> Mailchimp</div>
        <div class="platform-logo"><i class="fa-solid fa-h"></i> HubSpot</div>
        <div class="platform-logo"><i class="fa-solid fa-k"></i> Klaviyo</div>
        <div class="platform-logo"><i class="fa-solid fa-b"></i> Brevo</div>
        <div class="platform-logo"><i class="fa-brands fa-salesforce"></i> Salesforce</div>
        <div class="platform-logo"><i class="fa-solid fa-gear"></i> ActiveCampaign</div>
        <div class="platform-logo"><i class="fa-regular fa-envelope"></i> Mailchimp</div>
        <div class="platform-logo"><i class="fa-solid fa-h"></i> HubSpot</div>
        <div class="platform-logo"><i class="fa-solid fa-k"></i> Klaviyo</div>
        <div class="platform-logo"><i class="fa-solid fa-b"></i> Brevo</div>
        <div class="platform-logo"><i class="fa-brands fa-salesforce"></i> Salesforce</div>
        <div class="platform-logo"><i class="fa-solid fa-gear"></i> ActiveCampaign</div>
      </div>
    </div>
  </section>

  <!-- SERVICES GRID -->
  <section id="solutions" class="section-pad" style="background:#fcfcfc;">
    <div class="container">
      <div class="section-header" style="text-align:left;margin-bottom:60px;">
        <h2 class="section-title" style="font-size:42px;line-height:1.2;margin-bottom:25px;">Full-Spectrum Email
          Marketing Services</h2>
        <p class="section-subtitle" style="font-size:18px;margin-left:0;">From list building to automation workflows and
          deliverability optimization, Rankmator handles every element of your email marketing for maximum revenue
          impact.</p>
      </div>
      <div class="service-grid-premium">
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-code-branch" style="color:var(--secondary);"></i></div>
          <h3>Drip Campaign Design</h3>
          <p>Automated multi-stage email sequences that nurture leads from awareness to purchase with perfectly timed,
            contextually relevant messages at every funnel stage.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-puzzle-piece" style="color:var(--secondary);"></i></div>
          <h3>Advanced Segmentation</h3>
          <p>Behavioral, demographic, and purchase-history-based list segmentation to ensure every subscriber receives
            the most relevant content for maximum engagement and conversions.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-wand-magic-sparkles" style="color:var(--secondary);"></i></div>
          <h3>AI-Powered Personalization</h3>
          <p>Dynamic content blocks, personalized subject lines, and AI-driven send time optimization that adapts every
            email to individual subscriber behavior and preferences.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-rotate-right" style="color:var(--secondary);"></i></div>
          <h3>Automation &amp; Flows</h3>
          <p>Welcome series, abandoned cart recovery, post-purchase flows, win-back campaigns, and re-engagement
            sequences — all automated for consistent revenue on autopilot.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-envelope-open-text" style="color:var(--secondary);"></i></div>
          <h3>Email Template Design</h3>
          <p>Stunning, on-brand HTML email templates optimized for all devices and clients, combining exceptional design
            with high deliverability best practices.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-chart-line" style="color:var(--secondary);"></i></div>
          <h3>Deliverability &amp; Analytics</h3>
          <p>DNS setup (SPF, DKIM, DMARC), list hygiene, spam score monitoring, and comprehensive reporting on opens,
            clicks, conversions, and revenue attribution.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <div style="text-align:center;margin-top:50px;"><a href="#contact" class="btn btn-primary"
          style="padding:15px 40px;border-radius:10px;font-weight:700;">Start Email Marketing <i
            class="fa-solid fa-arrow-right" style="margin-left:8px;"></i></a></div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="section-pad" style="padding-top:0;">
    <div class="container">
      <div class="insights-banner"
        style="background:var(--gradient-blue);border-radius:20px;display:flex;align-items:center;padding:0 40px;color:#fff;overflow:hidden;height:180px;">
        <div class="insights-img" style="width:200px;height:100%;display:flex;align-items:flex-end;"><img
            src="assets/images/seo_insights_cta.png" alt="Email Marketing Audit"
            style="height:120%;object-fit:contain;margin-bottom:-1px;"></div>
        <div class="insights-text" style="flex:1;padding-left:40px;">
          <h2 style="font-size:28px;font-weight:800;margin-bottom:10px;">Is Your Email List a Revenue Asset or Dead
            Weight?</h2>
          <p style="font-size:16px;opacity:0.9;">Get a free email marketing audit and see how to turn your existing list
            into a consistent revenue engine.</p>
        </div>
        <div class="insights-action"><a href="#contact" class="btn btn-white"
            style="border-radius:50px;padding:12px 30px;">Free Email Audit <i class="fa-solid fa-arrow-right"
              style="margin-left:8px;"></i></a></div>
      </div>
    </div>
  </section>

  <!-- VERTICAL STATS -->
  <section class="section-pad" style="background:#f8fafc;">
    <div class="container">
      <div class="section-header" style="text-align:center;margin-bottom:60px;">
        <div class="section-tag">Proven Results</div>
        <h2 class="section-title">Email Marketing ROI Across <span>All Industries</span></h2>
        <p class="section-subtitle">Our email campaigns consistently outperform industry benchmarks across every sector
          we serve.</p>
      </div>
      <div class="service-grid-premium" style="grid-template-columns:repeat(3,1fr);gap:30px;">
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-bag-shopping"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">E-commerce &amp; D2C</h3>
          <div class="vstat-number">12x</div>
          <div class="vstat-label">Email Revenue ROI</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">Abandoned cart flows and post-purchase upsell
            sequences driving significant repeat purchase revenue.</p>
        </div>
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-shield-halved"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">BFSI &amp; Insurance</h3>
          <div class="vstat-number">25%</div>
          <div class="vstat-label">Average Open Rate</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">REBI-compliant transactional and marketing emails for
            financial services with trusted deliverability.</p>
        </div>
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-graduation-cap"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">Education &amp; EdTech</h3>
          <div class="vstat-number">3x</div>
          <div class="vstat-label">Enrolment Conversion</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">Lead nurturing email sequences that guide potential
            students from inquiry to confirmed enrolment.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- COMPARISON -->
  <section class="section-pad" style="background:#fff;">
    <div class="container">
      <div class="section-header" style="text-align:center;margin-bottom:60px;">
        <div class="section-tag">The Comparison</div>
        <h2 class="section-title">The Rankmator <span>Email Marketing Edge</span></h2>
        <p class="section-subtitle">We treat your email list as your most valuable owned asset and manage it with the
          precision it deserves.</p>
      </div>
      <table class="diff-table">
        <thead>
          <tr>
            <th>Capability</th>
            <th>Typical Email Agencies</th>
            <th style="background:var(--secondary);">The Rankmator Edge</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="point-label">Strategy</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Monthly newsletters only</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Full lifecycle email strategy &amp;
              automation</td>
          </tr>
          <tr>
            <td class="point-label">Personalization</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>First name only</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>AI-driven dynamic content &amp;
              behavioral triggers</td>
          </tr>
          <tr>
            <td class="point-label">Deliverability</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Basic list management</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Full DNS setup, spam testing &amp;
              inbox placement</td>
          </tr>
          <tr>
            <td class="point-label">Reporting</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Open and click rates only</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Revenue attribution &amp; full funnel
              reporting</td>
          </tr>
          <tr>
            <td class="point-label">Automation</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Basic welcome email</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>10+ automated flows covering full
              customer lifecycle</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="section-pad" style="background:var(--primary-dark);color:#fff;">
    <div class="container">
      <div class="section-header">
        <div class="section-tag" style="color:var(--secondary);">Email Marketing Q&amp;A</div>
        <h2 class="section-title" style="color:#fff;">Email Marketing FAQs</h2>
      </div>
      <div class="faq-container">
        <div class="faq-item">
          <div class="faq-question">
            <h4>What email marketing platforms do you work with?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>We work with all major platforms including Mailchimp, Klaviyo, HubSpot, Brevo (formerly Sendinblue),
              ActiveCampaign, Salesforce Marketing Cloud, and Marketo. We can also recommend the best platform for your
              specific business needs and migrate your existing lists.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>Do you build the email list or do I need to provide it?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>We can do both. If you have an existing list, we'll audit it for deliverability and segment it properly.
              If you need to build a list, we design opt-in strategies including lead magnets, website pop-ups, and
              gated content to grow a high-quality, consent-based subscriber list.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>How do you ensure emails land in inbox and not spam?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>We handle the full technical setup including SPF, DKIM, and DMARC DNS records, domain warming for new
              sending infrastructure, regular list hygiene (removing bounces and inactives), spam score testing with
              tools like Litmus, and content optimization to maximize inbox placement rates.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>What types of automated email flows do you set up?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>We design and build all essential automation flows including: welcome series, abandoned cart recovery,
              browse abandonment, post-purchase follow-up &amp; upsell, win-back campaigns for inactive subscribers,
              birthday emails, VIP loyalty flows, and lead nurturing funnels for B2B.</p>
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
        <h2 class="section-title">Ready to Turn Your List Into a <span>Revenue Machine?</span></h2>
        <p class="section-subtitle">Talk to our email marketing experts today and get a free list audit and strategy
          recommendation.</p>
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