<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Content Marketing Agency | Authority-Building Content Strategy | Rankmator</title>
  <meta name="description"
    content="Rankmator's Contents Marketing Agency creates strategic, SEO-optimised content that builds authority, drives organic traffic, and converts readers into customers. From blogs to full content strategies." />
  <?php include 'links.php'; ?> 

  <style>
    .hero-cm {
      background: var(--gradient-hero);
      padding: 60px 0;
      position: relative;
      overflow: hidden;
    }

    .hero-cm::before {
      content: '';
      position: absolute;
      inset: 0;
      background: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');
      opacity: 0.1;
    }

    .hero-badge-cm {
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

    .hero-badge-dot-cm {
      width: 8px;
      height: 8px;
      background: var(--secondary);
      border-radius: 50%;
      box-shadow: 0 0 10px var(--secondary);
      animation: pulse 2s infinite;
    }

    .service-grid-premium {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
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

  <section class="hero-cm">
    <div class="hero-orbs">
      <div class="orb orb-1"></div>
      <div class="orb orb-2"></div>
    </div>
    <div class="container">
      <div class="hero-grid">
        <div class="hero-left">
          <div class="hero-badge-cm">
            <div class="hero-badge-dot-cm"></div>Strategic Content Marketing Agency
          </div>
          <h1 class="hero-title">Content That Builds <br /><span class="highlight">Authority, Drives</span><br />Traffic
            &amp; Converts</h1>
          <p class="hero-subtitle">We create data-driven content strategies and high-quality content assets — from SEO
            blog posts to thought leadership articles — that make your brand the trusted voice in your industry.</p>
          <div class="hero-actions"><a href="#contact" class="btn btn-green"><i class="fa-solid fa-pen-nib"
                style="margin-right:8px;"></i>Get a Free Content Audit</a><a href="#solutions"
              class="btn btn-ghost-white">View Services</a></div>
          <div class="hero-trust">
            <div class="trust-avatars"><i>D</i><i>R</i><i>A</i><i>P</i><i>M</i></div>
            <div class="trust-text"><strong>10,000+ Content Pieces Published Across 200+ Brands</strong>SEO Content ·
              Thought Leadership · Lead Magnets</div>
          </div>
        </div>
        <div class="hero-right">
          <div class="hero-illustration">
            <div class="hero-banner-frame fade-in"><img src="assets/images/content_marketing_hero.png"
                alt="Content Marketing Agency" class="hero-banner-img"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-pad" style="background:#fff;padding-bottom:0!important;">
    <div class="container">
      <div class="market-lead-box" style="background:#f8fafc;padding:50px;border-radius:30px;border:1px solid #e2e8f0;">
        <div style="position:relative;z-index:1;">
          <h2 style="font-size:32px;font-weight:800;color:var(--text-primary);margin-bottom:30px;">Content Marketing
            Delivers 3x More Leads Than Outbound — at 62% Lower Cost</h2>
          <ul style="list-style:none;padding:0;">
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span><strong>Content marketing
                  generates 3x more leads</strong> than outbound marketing at 62% of the cost.</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span><strong>Businesses that
                  blog</strong> generate 67% more monthly leads than those that don't.</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>We combine rigorous keyword
                research, topical clustering, and editorial excellence for content that ranks and converts.</span></li>
            <li style="display:flex;align-items:flex-start;gap:15px;margin-bottom:20px;font-size:18px;color:#475569;"><i
                class="fa-solid fa-circle-check"
                style="color:var(--secondary);font-size:24px;margin-top:2px;"></i><span>10,000+ content pieces
                published. Industry specialists for technology, healthcare, finance, education, and more.</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section style="background:#fff;border-bottom:1px solid #e2e8f0;padding:20px 0;">
    <div class="platform-slider-container fade-in">
      <div class="platform-logos-track">
        <div class="platform-logo"><i class="fa-solid fa-pen-nib"></i> Blog Writing</div>
        <div class="platform-logo"><i class="fa-solid fa-file-lines"></i> White Papers</div>
        <div class="platform-logo"><i class="fa-solid fa-chart-bar"></i> Infographics</div>
        <div class="platform-logo"><i class="fa-solid fa-video"></i> Video Scripts</div>
        <div class="platform-logo"><i class="fa-solid fa-envelope-open-text"></i> Email Sequences</div>
        <div class="platform-logo"><i class="fa-solid fa-magnifying-glass"></i> Keyword Research</div>
        <div class="platform-logo"><i class="fa-solid fa-pen-nib"></i> Blog Writing</div>
        <div class="platform-logo"><i class="fa-solid fa-file-lines"></i> White Papers</div>
        <div class="platform-logo"><i class="fa-solid fa-chart-bar"></i> Infographics</div>
        <div class="platform-logo"><i class="fa-solid fa-video"></i> Video Scripts</div>
        <div class="platform-logo"><i class="fa-solid fa-envelope-open-text"></i> Email Sequences</div>
        <div class="platform-logo"><i class="fa-solid fa-magnifying-glass"></i> Keyword Research</div>
      </div>
    </div>
  </section>

  <section id="solutions" class="section-pad" style="background:#fcfcfc;">
    <div class="container">
      <div class="section-header" style="text-align:left;margin-bottom:60px;">
        <h2 class="section-title" style="font-size:42px;line-height:1.2;margin-bottom:25px;">Full-Funnel Content
          Marketing Services That Drive Real Business Results</h2>
        <p class="section-subtitle" style="font-size:18px;margin-left:0;">We don't just write content — we build content
          ecosystems that rank on Google, educate your audience, and move prospects through the buyer's journey at every
          stage.</p>
      </div>
      <div class="service-grid-premium">
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-sitemap" style="color:var(--secondary);"></i></div>
          <h3>Content Strategy &amp; Roadmap</h3>
          <p>Topic cluster mapping, keyword universe research, editorial calendar planning, and content gap analysis — a
            6-12 month roadmap aligned to your business and SEO goals.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i class="fa-solid fa-pen"
              style="color:var(--secondary);"></i></div>
          <h3>SEO Blog Writing</h3>
          <p>Expertly written, fact-checked long-form blog articles (1,500-4,000 words) built around topical clusters —
            designed to rank, earn backlinks, and capture organic search demand.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i class="fa-solid fa-trophy"
              style="color:var(--secondary);"></i></div>
          <h3>Thought Leadership &amp; PR Content</h3>
          <p>Executive interviews, industry reports, opinion pieces, and guest article placements on high-DA
            publications to build personal and brand authority in your sector.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-file-arrow-down" style="color:var(--secondary);"></i></div>
          <h3>Lead Magnets &amp; Gated Content</h3>
          <p>Ebooks, white papers, checklists, and industry reports that capture email leads and move prospects down the
            funnel — professionally designed and copywritten for maximum downloads.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-share-nodes" style="color:var(--secondary);"></i></div>
          <h3>Social Media Content</h3>
          <p>Platform-native content for LinkedIn, Instagram, Twitter/X, and Facebook — short-form posts, carousels, and
            micro-content repurposed from your long-form content library.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="premium-card">
          <div class="card-icon-wrap" style="background:#f8fafc;border:1px solid #e2e8f0;"><i
              class="fa-solid fa-chart-line" style="color:var(--secondary);"></i></div>
          <h3>Content Performance &amp; Analytics</h3>
          <p>Monthly content performance reports tracking organic traffic, keyword rankings, content-attributed leads,
            and time-on-page metrics with actionable optimisation recommendations.</p><a href="#contact"
            style="color:var(--secondary);display:block;margin-top:20px;font-size:20px;"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <div style="text-align:center;margin-top:50px;"><a href="#contact" class="btn btn-primary"
          style="padding:15px 40px;border-radius:10px;font-weight:700;">Get a Free Content Audit <i
            class="fa-solid fa-arrow-right" style="margin-left:8px;"></i></a></div>
    </div>
  </section>

  <section class="section-pad" style="padding-top:0;">
    <div class="container">
      <div class="insights-banner"
        style="background:var(--gradient-blue);border-radius:20px;display:flex;align-items:center;padding:0 40px;color:#fff;overflow:hidden;height:180px;">
        <div class="insights-img" style="width:200px;height:100%;display:flex;align-items:flex-end;"><img
            src="assets/images/seo_insights_cta.png" alt="Content Insights"
            style="height:120%;object-fit:contain;margin-bottom:-1px;"></div>
        <div class="insights-text" style="flex:1;padding-left:40px;">
          <h2 style="font-size:28px;font-weight:800;margin-bottom:10px;">Is Your Content Working Hard Enough?</h2>
          <p style="font-size:16px;opacity:0.9;">Get a free content gap analysis. We'll show you which topics your
            competitors rank for that you're missing.</p>
        </div>
        <div class="insights-action"><a href="#contact" class="btn btn-white"
            style="border-radius:50px;padding:12px 30px;">Free Audit <i class="fa-solid fa-arrow-right"
              style="margin-left:8px;"></i></a></div>
      </div>
    </div>
  </section>

  <section class="section-pad" style="background:#f8fafc;">
    <div class="container">
      <div class="section-header" style="text-align:center;margin-bottom:60px;">
        <div class="section-tag">Results</div>
        <h2 class="section-title">Content Marketing Results We've <span>Delivered</span></h2>
      </div>
      <div class="service-grid-premium" style="grid-template-columns:repeat(3,1fr);gap:30px;">
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-arrow-trend-up"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">Organic Traffic</h3>
          <div class="vstat-number">340%</div>
          <div class="vstat-label">Average Traffic Growth in 12 Months</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">Strategic blog cluster campaigns driving compounding
            search visibility.</p>
        </div>
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-users"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">Lead Generation</h3>
          <div class="vstat-number">3x</div>
          <div class="vstat-label">More Leads Than Outbound</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">Content-fuelled inbound funnels generating
            consistent, qualified leads monthly.</p>
        </div>
        <div class="vstat-card">
          <div class="vstat-icon"><i class="fa-solid fa-star"></i></div>
          <h3 style="font-size:20px;margin-bottom:15px;">Authority</h3>
          <div class="vstat-number">50+</div>
          <div class="vstat-label">Average DR Points Gained</div>
          <p style="margin-top:15px;font-size:14px;color:#64748b;">Link-worthy content assets that earn backlinks and
            grow domain authority naturally.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-pad" style="background:#fff;">
    <div class="container">
      <div class="section-header" style="text-align:center;margin-bottom:60px;">
        <div class="section-tag">Comparison</div>
        <h2 class="section-title">Why Our <span>Content Marketing</span> Outperforms</h2>
      </div>
      <table class="diff-table">
        <thead>
          <tr>
            <th>Core Capability</th>
            <th>Generic Content Agency</th>
            <th style="background:var(--secondary);">The Rankmator Edge</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="point-label">Strategy</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Publish &amp; pray approach</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Data-driven topical cluster strategy
              with clear ROI mapping</td>
          </tr>
          <tr>
            <td class="point-label">Quality</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Cheap, generic content</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Industry expert writers with E-E-A-T
              compliance built in</td>
          </tr>
          <tr>
            <td class="point-label">SEO Integration</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Content independent of SEO</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Every piece built on keyword research
              &amp; semantic SEO</td>
          </tr>
          <tr>
            <td class="point-label">Measurement</td>
            <td class="others-cell"><i class="fa-solid fa-xmark cross-icon"></i>Vanity metrics (views, likes)</td>
            <td class="rankmator-cell"><i class="fa-solid fa-check check-icon"></i>Revenue-tied content attribution —
              leads, pipeline, MQLs</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <section id="faq" class="section-pad" style="background:var(--primary-dark);color:#fff;">
    <div class="container">
      <div class="section-header">
        <div class="section-tag" style="color:var(--secondary);">FAQ</div>
        <h2 class="section-title" style="color:#fff;">Content Marketing FAQs</h2>
      </div>
      <div class="faq-container">
        <div class="faq-item">
          <div class="faq-question">
            <h4>How long before content marketing shows results?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Content marketing is a long-term investment. Most clients start seeing meaningful organic traffic
              increases at 3-6 months, with significant leads and authority growth at 6-12 months.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>Do you write content for regulated industries?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Yes. We have specialist writers for healthcare, finance, legal, and pharma who understand E-E-A-T
              requirements, medical disclaimers, and compliance obligations in regulated sectors.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>Can you manage our existing blog?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Absolutely. We offer full editorial management — content audits, refreshing old posts, publishing new
              articles, and tracking performance across your entire blog archive.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>What languages do you produce content in?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>We produce content primarily in English and Hindi, with access to specialist writers for other Indian
              regional languages upon request.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="section-pad"
    style="background:linear-gradient(rgba(255,255,255,0.93),rgba(255,255,255,0.98));">
    <div class="container" style="position:relative;z-index:2;">
      <div class="section-header fade-in">
        <h2 class="section-title">Grow With <span>Strategic Content</span></h2>
        <p class="section-subtitle">Get a free content gap analysis and 3-month content roadmap for your business.</p>
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
        </div>
        <div class="contact-form-side fade-in">
          <h3 style="font-size:24px;font-weight:800;margin-bottom:30px;color:var(--text-primary);">Request a Content
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
            <div class="form-footer">
              <button type="submit" class="btn-submit-main">Submit Now <i class="fa-solid fa-arrow-right"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>

</body>

</html>