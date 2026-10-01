<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Portfolio &amp; Case Studies | Rankmator — Proven SEO &amp; Web Development Results</title>
  <meta name="description"
    content="Explore Rankmator's client portfolio and case studies across SEO and custom Website Development. Discover proven #1 rankings, ultra-fast web builds, and scalable ROI for healthcare, real estate, travel, e-commerce, and industrial leaders." />
  <?php include 'links.php'; ?>

  <style>
    /* ─── PORTFOLIO CUSTOM STYLES ─── */
    :root {
      --portfolio-dark: #071e33;
      --portfolio-card-bg: #ffffff;
      --portfolio-border: #e2e8f0;
      --portfolio-accent: #0868A0;
      --portfolio-secondary: #6BAB44;
    }

    .portfolio-hero {
      background: var(--gradient-hero);
      padding: 95px 0 115px;
      position: relative;
      overflow: hidden;
      text-align: center;
      color: #fff;
    }

    .portfolio-hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image: radial-gradient(circle, rgba(255, 255, 255, 0.07) 1px, transparent 1px);
      background-size: 32px 32px;
      pointer-events: none;
    }

    .portfolio-badge {
      background: rgba(107, 171, 68, 0.16);
      border: 1px solid rgba(107, 171, 68, 0.45);
      color: #a3d977;
      padding: 8px 22px;
      border-radius: 50px;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      font-size: 13.5px;
      font-weight: 700;
      letter-spacing: 0.6px;
      text-transform: uppercase;
      margin-bottom: 22px;
    }

    .portfolio-badge-dot {
      width: 8px;
      height: 8px;
      background: #6BAB44;
      border-radius: 50%;
      box-shadow: 0 0 10px #6BAB44;
      animation: pulse 2s infinite;
    }

    .portfolio-hero h1 {
      font-size: clamp(32px, 5vw, 56px);
      font-weight: 900;
      line-height: 1.2;
      margin-bottom: 20px;
    }

    .portfolio-hero h1 span {
      background: linear-gradient(135deg, #a3d977 0%, #6BAB44 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .portfolio-hero p {
      font-size: 18px;
      color: rgba(255, 255, 255, 0.9);
      max-width: 780px;
      margin: 0 auto 36px;
      line-height: 1.7;
    }

    .portfolio-stats-bar {
      display: inline-flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.16);
      padding: 14px 32px;
      border-radius: 100px;
      backdrop-filter: blur(12px);
    }

    .p-stat-item {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 14px;
      font-weight: 600;
      color: #fff;
    }

    .p-stat-item i {
      color: var(--secondary);
      font-size: 16px;
    }

    .p-stat-divider {
      width: 1px;
      height: 20px;
      background: rgba(255, 255, 255, 0.22);
    }

    /* ─── FILTER CONTROLS & SEARCH ─── */
    .portfolio-main-section {
      padding: 70px 0 100px;
      background: #f8fafc;
      position: relative;
    }

    .portfolio-toolbar {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 24px;
      margin-bottom: 45px;
    }

    .filter-wrapper {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 10px;
    }

    .filter-btn {
      background: #ffffff;
      border: 1.5px solid #e2e8f0;
      color: #475569;
      padding: 10px 22px;
      border-radius: 50px;
      font-size: 14px;
      font-weight: 700;
      cursor: pointer;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
      display: inline-flex;
      align-items: center;
      gap: 8px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.03);
    }

    .filter-btn:hover {
      border-color: var(--primary);
      color: var(--primary);
      transform: translateY(-2px);
      box-shadow: 0 6px 16px rgba(8, 104, 160, 0.1);
    }

    .filter-btn.active {
      background: var(--primary);
      border-color: var(--primary);
      color: #ffffff;
      box-shadow: 0 8px 20px rgba(8, 104, 160, 0.25);
    }

    .filter-count {
      display: inline-block;
      font-size: 11.5px;
      padding: 2px 8px;
      border-radius: 12px;
      background: rgba(0, 0, 0, 0.06);
      color: inherit;
    }

    .filter-btn.active .filter-count {
      background: rgba(255, 255, 255, 0.25);
      color: #fff;
    }

    .search-box-wrapper {
      position: relative;
      width: 100%;
      max-width: 440px;
    }

    .search-box-wrapper input {
      width: 100%;
      padding: 12px 20px 12px 46px;
      background: #ffffff;
      border: 1.5px solid #e2e8f0;
      border-radius: 50px;
      font-size: 14px;
      color: #1e293b;
      outline: none;
      transition: all 0.25s;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
    }

    .search-box-wrapper input:focus {
      border-color: var(--primary);
      box-shadow: 0 0 0 4px rgba(8, 104, 160, 0.12);
    }

    .search-box-wrapper i {
      position: absolute;
      left: 18px;
      top: 50%;
      transform: translateY(-50%);
      color: #94a3b8;
      font-size: 15px;
    }

    /* ─── CASE STUDY GRID (3-COLUMNS / 2-COLUMNS) ─── */
    .portfolio-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
      margin: 0 auto;
    }

    .portfolio-card {
      background: #ffffff;
      border-radius: 20px;
      overflow: hidden;
      border: 1px solid #e2e8f0;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.04);
      transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
      display: flex;
      flex-direction: column;
      position: relative;
    }

    .portfolio-card:hover {
      transform: translateY(-7px);
      box-shadow: 0 20px 42px rgba(8, 104, 160, 0.13);
      border-color: rgba(8, 104, 160, 0.35);
    }

    .card-banner {
      min-height: 175px;
      position: relative;
      background-size: cover;
      background-position: center;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 20px;
      overflow: hidden;
    }

    .card-banner::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, rgba(7, 30, 51, 0.45) 0%, rgba(7, 30, 51, 0.92) 100%);
      z-index: 1;
    }

    .banner-top {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 8px;
      position: relative;
      z-index: 2;
    }

    .industry-badge {
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      color: #fff;
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      padding: 4px 12px;
      border-radius: 50px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      max-width: 180px;
    }

    .live-site-badge {
      background: rgba(107, 171, 68, 0.25);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(107, 171, 68, 0.55);
      color: #a3d977;
      font-size: 11.5px;
      font-weight: 700;
      text-decoration: none;
      padding: 4px 12px;
      border-radius: 50px;
      display: inline-flex;
      align-items: center;
      gap: 5px;
      transition: all 0.2s;
      white-space: nowrap;
    }

    .live-site-badge:hover {
      background: var(--secondary);
      color: #fff;
      border-color: var(--secondary);
    }

    .banner-bottom {
      position: relative;
      z-index: 2;
      margin-top: 15px;
    }

    .client-title {
      font-size: 20px;
      font-weight: 800;
      color: #ffffff;
      margin-bottom: 3px;
      line-height: 1.3;
    }

    .client-tagline {
      font-size: 12.5px;
      color: rgba(255, 255, 255, 0.88);
      font-weight: 500;
      display: block;
    }

    .card-body {
      padding: 22px;
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    /* Metric Highlight Strip */
    .metric-pills-row {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 10px;
      margin-bottom: 18px;
      background: #f1f5f9;
      padding: 12px 10px;
      border-radius: 12px;
      border: 1px solid #e2e8f0;
    }

    .metric-pill {
      text-align: center;
    }

    .metric-num {
      font-size: 18px;
      font-weight: 900;
      color: var(--primary);
      line-height: 1.2;
    }

    .metric-num.green {
      color: var(--secondary);
    }

    .metric-label {
      font-size: 10.5px;
      font-weight: 700;
      color: #64748b;
      text-transform: uppercase;
      letter-spacing: 0.3px;
      margin-top: 2px;
    }

    .case-summary {
      font-size: 13.5px;
      color: var(--text-secondary);
      line-height: 1.6;
      margin-bottom: 18px;
      flex: 1;
    }

    .tools-list {
      display: flex;
      flex-wrap: wrap;
      gap: 6px;
      margin-bottom: 20px;
    }

    .tool-tag {
      font-size: 11px;
      font-weight: 600;
      background: #f8fafc;
      color: #475569;
      padding: 3px 8px;
      border-radius: 6px;
      border: 1px solid #e2e8f0;
    }

    .card-footer-action {
      border-top: 1px solid #f1f5f9;
      padding-top: 16px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .btn-case-study {
      font-size: 13.5px;
      font-weight: 800;
      color: var(--primary);
      background: none;
      border: none;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 7px;
      padding: 0;
      transition: gap 0.2s, color 0.2s;
    }

    .btn-case-study:hover {
      color: var(--secondary);
      gap: 10px;
    }

    .verified-badge {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      font-size: 11.5px;
      font-weight: 700;
      color: #059669;
    }

    /* ─── MODAL POPUP STYLES ─── */
    .case-modal-overlay {
      position: fixed;
      inset: 0;
      background: rgba(7, 30, 51, 0.85);
      backdrop-filter: blur(8px);
      z-index: 99999;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
    }

    .case-modal-overlay.active {
      opacity: 1;
      visibility: visible;
    }

    .case-modal-box {
      background: #ffffff;
      border-radius: 24px;
      max-width: 820px;
      width: 100%;
      max-height: 90vh;
      overflow-y: auto;
      position: relative;
      box-shadow: 0 25px 60px rgba(0, 0, 0, 0.35);
      transform: translateY(30px) scale(0.96);
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .case-modal-overlay.active .case-modal-box {
      transform: translateY(0) scale(1);
    }

    .modal-close-btn {
      position: absolute;
      top: 20px;
      right: 20px;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.92);
      border: 1px solid #e2e8f0;
      color: #0f172a;
      font-size: 18px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 10;
      transition: all 0.2s;
    }

    .modal-close-btn:hover {
      background: #f1f5f9;
      transform: rotate(90deg);
    }

    .modal-header-banner {
      background: linear-gradient(135deg, #0868A0 0%, #043d5e 100%);
      padding: 38px 36px 28px;
      color: #fff;
      border-radius: 24px 24px 0 0;
      position: relative;
    }

    .modal-header-banner .modal-badge {
      display: inline-block;
      background: rgba(255, 255, 255, 0.2);
      padding: 4px 14px;
      border-radius: 50px;
      font-size: 12px;
      font-weight: 700;
      text-transform: uppercase;
      margin-bottom: 12px;
    }

    .modal-header-banner h2 {
      font-size: 26px;
      font-weight: 900;
      margin-bottom: 6px;
    }

    .modal-header-banner p {
      font-size: 14.5px;
      color: rgba(255, 255, 255, 0.88);
      margin: 0;
    }

    .modal-live-link {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(255, 255, 255, 0.18);
      border: 1px solid rgba(255, 255, 255, 0.35);
      color: #fff;
      padding: 7px 18px;
      border-radius: 50px;
      font-size: 13.5px;
      font-weight: 700;
      text-decoration: none;
      margin-top: 16px;
      transition: all 0.2s;
    }

    .modal-live-link:hover {
      background: var(--secondary);
      border-color: var(--secondary);
      color: #fff;
    }

    .modal-content-body {
      padding: 32px 36px;
    }

    .modal-metrics-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 14px;
      margin-bottom: 28px;
    }

    .modal-metric-card {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      padding: 16px 12px;
      border-radius: 14px;
      text-align: center;
    }

    .modal-metric-val {
      font-size: 22px;
      font-weight: 900;
      color: var(--primary);
      line-height: 1.1;
    }

    .modal-metric-val.green {
      color: var(--secondary);
    }

    .modal-metric-name {
      font-size: 11.5px;
      font-weight: 700;
      color: #64748b;
      text-transform: uppercase;
      margin-top: 4px;
    }

    .modal-section-block {
      margin-bottom: 24px;
    }

    .modal-section-block h3 {
      font-size: 17px;
      font-weight: 800;
      color: var(--text-primary);
      margin-bottom: 10px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .modal-section-block h3 i {
      color: var(--secondary);
      font-size: 16px;
    }

    .modal-section-block p,
    .modal-section-block ul {
      font-size: 14px;
      color: #475569;
      line-height: 1.7;
    }

    .modal-section-block ul {
      padding-left: 20px;
      margin-top: 8px;
    }

    .modal-section-block ul li {
      margin-bottom: 6px;
    }

    .modal-quote-box {
      background: #f0fdf4;
      border-left: 4px solid var(--secondary);
      padding: 16px 20px;
      border-radius: 0 12px 12px 0;
      margin-top: 22px;
    }

    .modal-quote-box p {
      font-style: italic;
      color: #166534;
      font-size: 13.5px;
      line-height: 1.6;
      margin-bottom: 6px;
    }

    .modal-quote-author {
      font-size: 12px;
      font-weight: 700;
      color: #15803d;
    }

    .modal-cta-row {
      margin-top: 28px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-top: 1px solid #e2e8f0;
      padding-top: 22px;
      flex-wrap: wrap;
      gap: 15px;
    }

    /* ─── GROWTH PILLARS STRIP ─── */
    .impact-section {
      padding: 75px 0;
      background: #ffffff;
      border-bottom: 1px solid #e2e8f0;
    }

    .impact-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 24px;
      margin-top: 40px;
    }

    .impact-item {
      padding: 26px 22px;
      border-radius: 16px;
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      text-align: center;
      transition: all 0.3s;
    }

    .impact-item:hover {
      background: #fff;
      transform: translateY(-4px);
      box-shadow: 0 12px 28px rgba(0, 0, 0, 0.05);
      border-color: var(--secondary);
    }

    .impact-icon {
      width: 50px;
      height: 50px;
      border-radius: 12px;
      background: var(--bg-blue-light);
      color: var(--primary);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      margin-bottom: 16px;
    }

    .impact-item:hover .impact-icon {
      background: var(--secondary);
      color: #fff;
    }

    .impact-item h4 {
      font-size: 16px;
      font-weight: 800;
      margin-bottom: 6px;
      color: var(--text-primary);
    }

    .impact-item p {
      font-size: 13px;
      color: var(--text-secondary);
      line-height: 1.5;
      margin: 0;
    }

    /* ─── CTA BANNER SECTION ─── */
    .portfolio-cta-section {
      background: linear-gradient(135deg, #071e33 0%, #0868A0 100%);
      padding: 80px 0;
      color: #fff;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .portfolio-cta-section::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image: radial-gradient(circle, rgba(255, 255, 255, 0.06) 1px, transparent 1px);
      background-size: 28px 28px;
    }

    .portfolio-cta-section h2 {
      font-size: clamp(28px, 4vw, 42px);
      font-weight: 900;
      margin-bottom: 16px;
      position: relative;
      z-index: 2;
    }

    .portfolio-cta-section p {
      font-size: 17px;
      color: rgba(255, 255, 255, 0.88);
      max-width: 680px;
      margin: 0 auto 32px;
      line-height: 1.6;
      position: relative;
      z-index: 2;
    }

    .cta-buttons-wrapper {
      display: flex;
      justify-content: center;
      gap: 16px;
      flex-wrap: wrap;
      position: relative;
      z-index: 2;
    }

    .btn-cta-white {
      background: #ffffff;
      color: var(--primary);
      padding: 13px 32px;
      border-radius: 50px;
      font-weight: 800;
      font-size: 15px;
      text-decoration: none;
      transition: all 0.3s;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
    }

    .btn-cta-white:hover {
      background: #f1f5f9;
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
    }

    .btn-cta-outline {
      background: transparent;
      color: #ffffff;
      border: 2px solid rgba(255, 255, 255, 0.6);
      padding: 11px 30px;
      border-radius: 50px;
      font-weight: 700;
      font-size: 15px;
      text-decoration: none;
      transition: all 0.3s;
    }

    .btn-cta-outline:hover {
      border-color: #ffffff;
      background: rgba(255, 255, 255, 0.12);
      transform: translateY(-2px);
    }

    /* ─── RESPONSIVE ─── */
    @media (max-width: 1100px) {
      .portfolio-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 900px) {
      .impact-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 768px) {
      .portfolio-hero {
        padding: 60px 0 75px;
      }
      .portfolio-grid {
        grid-template-columns: 1fr;
      }
      .impact-grid {
        grid-template-columns: 1fr;
      }
      .portfolio-stats-bar {
        border-radius: 16px;
        padding: 14px 20px;
      }
      .p-stat-divider {
        display: none;
      }
      .modal-metrics-grid {
        grid-template-columns: 1fr;
      }
      .modal-content-body {
        padding: 24px 20px;
      }
      .modal-header-banner {
        padding: 30px 20px 24px;
      }
    }
  </style>
</head>

<body>

  <?php include 'header.php'; ?>

  <!-- ═══════════════════════════════════════════
     HERO SECTION
═══════════════════════════════════════════ -->
  <section class="portfolio-hero">
    <div class="hero-orbs">
      <div class="orb orb-1"></div>
      <div class="orb orb-2"></div>
      <div class="orb orb-3"></div>
    </div>
    <div class="container" style="position:relative;z-index:2;">
      <div class="portfolio-badge">
        <div class="portfolio-badge-dot"></div>
        Proven Results &amp; Live Deployments
      </div>
      <h1>Our Work Speaks in<br /><span>Rankings, Traffic &amp; Revenue.</span></h1>
      <p>Explore real-world client success stories across organic SEO dominance and bespoke high-speed website development. From high-conversion clinical portals and luxury real estate platforms to high-volume e-commerce and engineering brands.</p>
      
      <div class="portfolio-stats-bar">
        <div class="p-stat-item">
          <i class="fa-solid fa-chart-line"></i> 300+ Projects Delivered
        </div>
        <div class="p-stat-divider"></div>
        <div class="p-stat-item">
          <i class="fa-solid fa-bolt"></i> #1 Ranking SEO Engines
        </div>
        <div class="p-stat-divider"></div>
        <div class="p-stat-item">
          <i class="fa-solid fa-code"></i> 99/100 Web Speed
        </div>
        <div class="p-stat-divider"></div>
        <div class="p-stat-item">
          <i class="fa-solid fa-trophy"></i> 98% Client Retention
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
     PORTFOLIO DATA DEFINITION (PHP)
═══════════════════════════════════════════ -->
  <?php
  $projects = [
    // ──────── SEO CATEGORY (13 Projects) ────────
    [
      'id' => 'dermatales-seo',
      'title' => 'DermaTales Clinic',
      'tagline' => 'Dr. Pooja Varshney — MD Dermatology, Delhi & Gurgaon',
      'url' => 'https://www.dermatales.com/',
      'display_url' => 'dermatales.com',
      'industry' => 'Dermatology & Aesthetics',
      'category' => 'seo healthcare',
      'gradient' => 'linear-gradient(135deg, #0868A0, #043d5e)',
      'badge_text' => 'Clinical SEO Dominance',
      'metric1_num' => '+380%',
      'metric1_label' => 'Organic Consultations',
      'metric1_green' => true,
      'metric2_num' => '15,000+',
      'metric2_label' => 'Patients Scaled',
      'metric2_green' => false,
      'summary' => 'Engineered localized Google 3-Pack authority, clinical schema structuring, laser treatment search hubs, and targeted organic patient acquisition across Delhi & Gurgaon.',
      'tags' => ['Medical SEO', 'Local 3-Pack', 'Clinical Schema', 'Aesthetic Funnels'],
      'verified' => '4.9★ Google Rating',
      'challenge' => 'Aggressive competition in South Delhi and Gurgaon from multi-specialty corporate hospitals bidding heavily on aesthetic search keywords.',
      'solution' => 'Implemented comprehensive MedicalClinic schema, physician E-E-A-T credentials, high-converting laser treatment landing hubs (Laser hair removal, CoolSculpting, Botox), and localized Google Business Profile authority.',
      'results' => [
        '380% surge in qualified organic patient consultations',
        '#1 Google 3-Pack rankings across key Delhi & Gurgaon sectors',
        'Over 15,000 satisfied patient inquiries routed directly via call & WhatsApp'
      ],
      'quote' => 'Rankmator transformed our digital patient acquisition completely. We achieved unmatched local search visibility across Delhi and Gurgaon.',
      'quote_author' => 'Dr. Pooja Varshney, MD Dermatology & Founder'
    ],
    [
      'id' => 'shganesh-seo',
      'title' => 'Shree Ganesh Enterprises',
      'tagline' => 'Open Box Electronic Accessories Wholesale & Retail, Delhi',
      'url' => 'https://shganeshenterprises.com/',
      'display_url' => 'shganeshenterprises.com',
      'industry' => 'Electronics & Wholesale',
      'category' => 'seo industrial',
      'gradient' => 'linear-gradient(135deg, #0f172a, #1e3a8a)',
      'badge_text' => 'E-Commerce & B2B SEO',
      'metric1_num' => '+410%',
      'metric1_label' => 'B2B & Retail Leads',
      'metric1_green' => true,
      'metric2_num' => 'Top 3',
      'metric2_label' => 'Delhi Wholesale Rank',
      'metric2_green' => false,
      'summary' => 'Built nationwide organic search dominance for open-box earbuds, premium Bluetooth speakers, power banks, and verified wholesale electronic accessories in Delhi NCR.',
      'tags' => ['E-Commerce SEO', 'B2B Lead Gen', 'Catalog Indexing', 'Wholesale Funnel'],
      'verified' => '25,000+ Monthly Visitors',
      'challenge' => 'Overcoming fierce offline market competition in Delhi and structuring an extensive catalog of verified open-box electronics for search indexation.',
      'solution' => 'Deployed automated product schema, bulk wholesale buyer landing pages, category keyword clusters for high-demand accessories, and targeted B2B local citations.',
      'results' => [
        '410% increase in daily wholesale buyer inquiries and retail store footfalls',
        'Top 3 organic search placement for open-box electronic accessories in Delhi',
        'Over 25,000 monthly organic buyers searching for earbuds and power accessories'
      ],
      'quote' => 'Our bulk wholesale inquiries skyrocketed after Rankmator optimized our search rankings. We are now the top-ranking open box accessories supplier in Delhi.',
      'quote_author' => 'Management, Shree Ganesh Enterprises'
    ],
    [
      'id' => 'eyedell-seo',
      'title' => 'EyeDell India',
      'tagline' => 'Prescription Eyeglasses, Sunglasses & Kids Optical Frames',
      'url' => 'https://eyedell.com/',
      'display_url' => 'eyedell.com',
      'industry' => 'Eyewear & D2C E-Commerce',
      'category' => 'seo',
      'gradient' => 'linear-gradient(135deg, #0e7490, #155e75)',
      'badge_text' => 'D2C E-Commerce SEO',
      'metric1_num' => '+290%',
      'metric1_label' => 'Organic Revenue',
      'metric1_green' => true,
      'metric2_num' => '150+',
      'metric2_label' => 'Top 5 Keywords',
      'metric2_green' => false,
      'summary' => 'Scaled national organic search visibility for prescription eyeglasses, computer blue-cut glasses, sunglasses, and trendy optical collections across India.',
      'tags' => ['D2C SEO', 'Product Schema', 'Collection Silos', 'Mobile CRO'],
      'verified' => '3.4x Mobile Conversions',
      'challenge' => 'Competing against heavily funded eyewear aggregator giants with multi-million dollar advertising budgets.',
      'solution' => 'Engineered specialized prescription frame buying guides, long-tail search landing hubs by face shape & frame type, rich product schema, and Core Web Vitals optimization.',
      'results' => [
        '290% organic e-commerce revenue growth over 6 months',
        '150+ high-intent eyewear search terms ranking on Google Page 1',
        '3.4x improvement in mobile organic transaction completions'
      ],
      'quote' => 'Rankmator helped us capture high-intent prescription eyewear searches organically, dramatically slashing our customer acquisition costs.',
      'quote_author' => 'E-Commerce Director, EyeDell India'
    ],
    [
      'id' => 'jimcorbett-seo',
      'title' => 'Jim Corbett Safari Portal',
      'tagline' => 'Official Jungle Safari, Canter & Luxury Wildlife Resort Booking',
      'url' => 'https://jimcorbett.in',
      'display_url' => 'jimcorbett.in',
      'industry' => 'Eco-Tourism & Wildlife',
      'category' => 'seo travel',
      'gradient' => 'linear-gradient(135deg, #14532d, #166534)',
      'badge_text' => 'Tourism SEO Authority',
      'metric1_num' => '8.5x',
      'metric1_label' => 'Safari Inquiries',
      'metric1_green' => true,
      'metric2_num' => '#1 Rank',
      'metric2_label' => 'Corbett Safari Booking',
      'metric2_green' => false,
      'summary' => 'Achieved national search authority for Jim Corbett national park jungle safaris, Dhikala/Bijrani zone permits, canter tours, and luxury forest resort packages.',
      'tags' => ['Travel SEO', 'Tour Booking Funnels', 'Seasonal SEO', 'Safari Authority'],
      'verified' => '50,000+ Tourists Scaled',
      'challenge' => 'Managing extreme seasonal booking fluctuations and establishing trust amid hundreds of unverified safari intermediaries.',
      'solution' => 'Constructed comprehensive zone-by-zone safari guides, real-time permit assistance booking funnels, structured event/tour schema, and seasonal content refresh workflows.',
      'results' => [
        '#1 Google search ranking for "Jim Corbett safari booking" and zone packages',
        '8.5x increase in qualified safari and luxury resort stay bookings',
        'Over 50,000 organic tourists served with seamless booking assistance'
      ],
      'quote' => 'Our online safari bookings and resort inquiries expanded exponentially. Rankmator is the undisputed authority in tourism SEO.',
      'quote_author' => 'Director of Operations, Jim Corbett Tours'
    ],
    [
      'id' => 'alamyachts-seo',
      'title' => 'Alam Yachts Dubai',
      'tagline' => 'Luxury Private Yacht Charters & Boat Rentals, Dubai Marina',
      'url' => 'https://alamyachts.com/',
      'display_url' => 'alamyachts.com',
      'industry' => 'Luxury Maritime & Charters',
      'category' => 'seo travel',
      'gradient' => 'linear-gradient(135deg, #0369a1, #075985)',
      'badge_text' => 'Luxury Yacht SEO',
      'metric1_num' => '+320%',
      'metric1_label' => 'VIP Charter Leads',
      'metric1_green' => true,
      'metric2_num' => 'Top 3',
      'metric2_label' => 'Dubai Yacht Rentals',
      'metric2_green' => false,
      'summary' => 'Ranked #1 for luxury yacht charters, private sunset cruises, corporate marine events, and superyacht rentals in Dubai Marina & Palm Jumeirah.',
      'tags' => ['Luxury SEO', 'Dubai Local SEO', 'High-Ticket Funnels', 'VIP Lead Gen'],
      'verified' => 'High-Net-Worth Reach',
      'challenge' => 'Extremely saturated luxury yacht market in Dubai where paid Google search clicks regularly exceed $30+ per click.',
      'solution' => 'Developed high-end luxury charter landing hubs, yacht fleet spec schema, international tourist geo-targeting (GCC, UK, Europe, USA), and corporate event enquiry funnels.',
      'results' => [
        '320% increase in high-ticket private yacht rental and corporate event bookings',
        'Top 3 organic search placement across Dubai for luxury boat charters',
        'Drastic reduction in dependence on high-cost paid Google Ads'
      ],
      'quote' => 'Rankmator positioned Alam Yachts directly in front of VIP tourists and corporate executives looking for luxury yacht charters in Dubai.',
      'quote_author' => 'Managing Partner, Alam Yachts Dubai'
    ],
    [
      'id' => 'evfast-seo',
      'title' => 'EV-Fast Mobility',
      'tagline' => 'Electric Vehicle Charging Stations & Commercial Fleet Infra',
      'url' => 'https://ev-fast.com/',
      'display_url' => 'ev-fast.com',
      'industry' => 'CleanTech & EV Infrastructure',
      'category' => 'seo industrial',
      'gradient' => 'linear-gradient(135deg, #065f46, #047857)',
      'badge_text' => 'CleanTech SEO',
      'metric1_num' => '+350%',
      'metric1_label' => 'Commercial EV Leads',
      'metric1_green' => true,
      'metric2_num' => '#1 Rank',
      'metric2_label' => 'Fast DC Charger Delhi',
      'metric2_green' => false,
      'summary' => 'Established national organic search authority for commercial EV charging stations, DC fast chargers, fleet electrification, and solar-integrated EV hubs.',
      'tags' => ['CleanTech SEO', 'B2B Infrastructure', 'Technical Specs', 'Commercial RFQ'],
      'verified' => '120+ Commercial B2B RFQs',
      'challenge' => 'Rapidly evolving clean mobility market where decision makers required deep technical clarity before requesting commercial installation quotes.',
      'solution' => 'Built EV charging ROI calculators, commercial installation hub pages, B2B product schema, and location-based commercial EV charging search funnels.',
      'results' => [
        '350% increase in commercial EV charging station inquiries from malls, hotels, and fleets',
        '#1 organic rankings for high-capacity DC fast chargers and fleet charging stations',
        'Over 120+ verified commercial B2B contract RFQs generated'
      ],
      'quote' => 'Rankmator established EV-Fast as the go-to brand for commercial EV charging installations across Delhi NCR and North India.',
      'quote_author' => 'Head of Business Development, EV-Fast'
    ],
    [
      'id' => 'venusdestination-seo',
      'title' => 'Venus Destination',
      'tagline' => 'International Tour Packages & Custom Holiday Itineraries',
      'url' => 'https://venusdestination.com/',
      'display_url' => 'venusdestination.com',
      'industry' => 'International Travel & Holidays',
      'category' => 'seo travel',
      'gradient' => 'linear-gradient(135deg, #7c2d12, #9a3412)',
      'badge_text' => 'Holiday Travel SEO',
      'metric1_num' => '+275%',
      'metric1_label' => 'Custom Holiday Leads',
      'metric1_green' => true,
      'metric2_num' => '60+',
      'metric2_label' => 'Top Ranked Tours',
      'metric2_green' => false,
      'summary' => 'Engineered high-converting organic search funnels for international honeymoon packages, Europe group tours, Southeast Asia itineraries, and bespoke holidays.',
      'tags' => ['Travel SEO', 'Destination Silos', 'Schema Snippets', 'Holiday Funnels'],
      'verified' => '4.8★ Client Trust',
      'challenge' => 'Competing with large online travel aggregators for international destination packages and high-intent vacation queries.',
      'solution' => 'Created detailed day-by-day itinerary hubs, transparent pricing breakdowns, customer trust badges, and rich FAQ structured data for over 60 global destinations.',
      'results' => [
        '275% growth in bespoke international holiday booking inquiries',
        '60+ international tour destination pages ranking on Google Page 1',
        'Significantly higher conversion rate from organic travelers seeking personalized trips'
      ],
      'quote' => 'Our custom holiday packages for Europe and Southeast Asia now rank prominently on Google, driving consistent high-budget traveler leads.',
      'quote_author' => 'Founder, Venus Destination'
    ],
    [
      'id' => 'dbdixon-seo',
      'title' => 'DB Dixon Battery',
      'tagline' => 'Heavy-Duty Automotive, Tubular Inverter & Solar Power Storage',
      'url' => 'https://dbdixonbattery.com/',
      'display_url' => 'dbdixonbattery.com',
      'industry' => 'Energy Storage & Manufacturing',
      'category' => 'seo industrial',
      'gradient' => 'linear-gradient(135deg, #1e293b, #334155)',
      'badge_text' => 'Industrial Battery SEO',
      'metric1_num' => '+440%',
      'metric1_label' => 'Dealer Inquiries',
      'metric1_green' => true,
      'metric2_num' => '#1 Rank',
      'metric2_label' => 'Tubular Inverter Battery',
      'metric2_green' => false,
      'summary' => 'Drove nationwide search rankings for heavy-duty automotive batteries, tall tubular inverter batteries, solar backup cells, and regional distributorships.',
      'tags' => ['Industrial SEO', 'Dealer Network', 'Battery Specs', 'B2B Lead Capture'],
      'verified' => '15+ State Reach',
      'challenge' => 'Building brand authority and recruiting state-level distributors in a market traditionally dominated by legacy multinational battery manufacturers.',
      'solution' => 'Created battery capacity calculator tools, state-by-state dealership application funnels, product spec schema, and industrial B2B citation authority.',
      'results' => [
        '440% surge in state dealership and battery retail distributor applications',
        '#1 organic search visibility for heavy-duty tubular and solar inverter batteries',
        'Rapid brand expansion across 15+ Indian states powered by organic discovery'
      ],
      'quote' => 'Rankmator helped us establish an extensive distributor network across India through high-ranking organic B2B search funnels.',
      'quote_author' => 'Executive Director, DB Dixon Battery'
    ],
    [
      'id' => 'girlion-seo',
      'title' => 'Gir Lion Safari & Tourism',
      'tagline' => 'Asiatic Lion Safari Bookings & Sasan Gir Wildlife Expeditions',
      'url' => 'https://www.girlion.in/',
      'display_url' => 'girlion.in',
      'industry' => 'Wildlife Eco-Tourism',
      'category' => 'seo travel',
      'gradient' => 'linear-gradient(135deg, #854d0e, #a16207)',
      'badge_text' => 'Wildlife Safari SEO',
      'metric1_num' => '+520%',
      'metric1_label' => 'Permit Bookings',
      'metric1_green' => true,
      'metric2_num' => '#1 Rank',
      'metric2_label' => 'Sasan Gir Lion Safari',
      'metric2_green' => false,
      'summary' => 'Scaled premier search visibility for Sasan Gir Asiatic Lion safari bookings, Devalia safari park passes, gypsy permits, and jungle resort stays in Gujarat.',
      'tags' => ['Wildlife SEO', 'Safari Booking Hub', 'Mobile Speed', 'Seasonal Surge'],
      'verified' => '80,000+ Nature Lovers',
      'challenge' => 'Navigating strict wildlife forest permit timelines and massive tourist search demand during winter and festive vacation seasons.',
      'solution' => 'Constructed comprehensive safari timing guides, streamlined instant gypsy booking funnels, and optimized mobile-first fast-loading booking pages.',
      'results' => [
        '520% growth in direct online safari permit and gypsy booking requests',
        '#1 Google search ranking for "Gir lion safari" and "Sasan Gir safari booking"',
        'Over 80,000 nature enthusiasts assisted with official safari tours and stays'
      ],
      'quote' => 'Our safari permit bookings and resort bookings reached all-time record numbers thanks to Rankmator\'s search dominance strategy.',
      'quote_author' => 'Head of Tourism, Gir Lion Safari'
    ],
    [
      'id' => 'ranthambore-seo',
      'title' => 'Ranthambore Tiger Reserve',
      'tagline' => 'Official Zone Safaris, Wildlife Photography & Forest Resorts',
      'url' => 'https://ranthamboretigerreserve.in/',
      'display_url' => 'ranthamboretigerreserve.in',
      'industry' => 'Tiger Safaris & Wildlife',
      'category' => 'seo travel',
      'gradient' => 'linear-gradient(135deg, #78350f, #92400e)',
      'badge_text' => 'Tiger Safari SEO',
      'metric1_num' => '+480%',
      'metric1_label' => 'Safari Inquiries',
      'metric1_green' => true,
      'metric2_num' => 'Top #1',
      'metric2_label' => 'Zone 1-10 Safari Rank',
      'metric2_green' => false,
      'summary' => 'Established absolute organic dominance for Ranthambore tiger safari bookings across Zones 1 to 10, luxury jungle lodges, and guided wildlife photography tours.',
      'tags' => ['Eco-Tourism SEO', 'Zone Safaris', 'Mobile Booking UX', 'High-Trust SEO'],
      'verified' => '99% Traveler Satisfaction',
      'challenge' => 'Highly competitive tiger safari search landscape with intense competition from dozens of booking aggregators.',
      'solution' => 'Created authoritative zone allocation guides, tiger sighting probability updates, transparent pricing structures, and mobile-friendly reservation funnels.',
      'results' => [
        '480% increase in qualified domestic and international safari inquiries',
        '#1 organic rankings for all major Ranthambore safari zone search queries',
        'Substantial growth in high-value luxury forest lodge package bookings'
      ],
      'quote' => 'Rankmator made our portal the top choice for travelers planning Ranthambore tiger safaris and luxury wildlife holidays.',
      'quote_author' => 'Operations Lead, Ranthambore Safari Portal'
    ],
    [
      'id' => 'matrix-seo',
      'title' => 'Matrix Battery',
      'tagline' => 'High-Performance Solar & Inverter Tubular Energy Storage',
      'url' => 'https://www.matrix-battery.com/',
      'display_url' => 'matrix-battery.com',
      'industry' => 'Solar Power & Battery Tech',
      'category' => 'seo industrial',
      'gradient' => 'linear-gradient(135deg, #172554, #1e40af)',
      'badge_text' => 'Power Storage SEO',
      'metric1_num' => '+310%',
      'metric1_label' => 'B2B Distributor Growth',
      'metric1_green' => true,
      'metric2_num' => '#1 Rank',
      'metric2_label' => 'Solar Tubular Battery',
      'metric2_green' => false,
      'summary' => 'Positioned Matrix Battery as a premier manufacturer of long-life solar tubular batteries, e-rickshaw power packs, and commercial inverter storage systems.',
      'tags' => ['Solar SEO', 'B2B Supply Chain', 'Product Specs', 'Pan-India Reach'],
      'verified' => 'Pan-India Distribution',
      'challenge' => 'Connecting directly with solar EPC contractors, electrical distributors, and industrial power backup buyers across Tier 2 and Tier 3 cities.',
      'solution' => 'Implemented technical specification schema, battery capacity sizing calculators, B2B wholesale enquiry funnels, and nationwide regional SEO targeting.',
      'results' => [
        '310% growth in wholesale dealership and solar distributor inquiries',
        '#1 search placement for solar tubular batteries and heavy-duty inverter packs',
        'Massive expansion in verified commercial B2B power storage procurement contracts'
      ],
      'quote' => 'Rankmator\'s targeted B2B SEO strategy brought us large commercial contracts from solar EPCs and battery distributors nationwide.',
      'quote_author' => 'Managing Director, Matrix Battery'
    ],
    [
      'id' => 'bobby-seo',
      'title' => 'Bobby and Brother',
      'tagline' => 'Garment Manufacturing & Global Apparel Export House',
      'url' => 'https://bobbyandbrother.com/',
      'display_url' => 'bobbyandbrother.com',
      'industry' => 'Fashion & Textile Export',
      'category' => 'seo industrial',
      'gradient' => 'linear-gradient(135deg, #374151, #4b5563)',
      'badge_text' => 'Global Apparel B2B SEO',
      'metric1_num' => '+260%',
      'metric1_label' => 'Global Export Orders',
      'metric1_green' => true,
      'metric2_num' => 'Top Exporter',
      'metric2_label' => 'Apparel India Rank',
      'metric2_green' => false,
      'summary' => 'Scaled international organic search reach for OEM/ODM garment manufacturing, high-fashion apparel exports, knitwear, and private label clothing.',
      'tags' => ['Global B2B SEO', 'Apparel Export', 'International Silos', 'RFQ Funnels'],
      'verified' => 'Multi-Country Contracts',
      'challenge' => 'Capturing international fashion brands and apparel buyers in North America, Europe, and the Middle East looking for certified Indian garment manufacturers.',
      'solution' => 'Engineered international B2B keyword silos, factory compliance and ethical audit schema, high-res fabric & garment catalog architecture, and fast RFQ sampling funnels.',
      'results' => [
        '260% increase in high-volume international garment export order RFQs',
        'Consistent discovery by leading fashion retail labels across the USA, UK, and EU',
        'Multi-million rupee annual export contract pipeline established organically'
      ],
      'quote' => 'Rankmator gave our garment manufacturing export house direct visibility to international apparel brands and retail buyers globally.',
      'quote_author' => 'Partner, Bobby and Brother'
    ],
    [
      'id' => 'a3techno-seo',
      'title' => 'A3 Technocrafts',
      'tagline' => 'Precision CNC Machining, Special Purpose Machines & Automation',
      'url' => 'https://a3technocrafts.com/',
      'display_url' => 'a3technocrafts.com',
      'industry' => 'Engineering & CNC Automation',
      'category' => 'seo industrial',
      'gradient' => 'linear-gradient(135deg, #1e1b4b, #312e81)',
      'badge_text' => 'Precision Engineering SEO',
      'metric1_num' => '+390%',
      'metric1_label' => 'High-Value RFQs',
      'metric1_green' => true,
      'metric2_num' => '#1 Rank',
      'metric2_label' => 'CNC SPM Delhi NCR',
      'metric2_green' => false,
      'summary' => 'Generated premier search rankings for custom SPM machinery, automated assembly fixtures, CNC precision components, and industrial automation solutions.',
      'tags' => ['Industrial SEO', 'Precision Machinery', 'B2B RFQ Funnels', 'Technical Schema'],
      'verified' => 'High-Ticket B2B Pipeline',
      'challenge' => 'Targeting specialized industrial engineering buyers and plant managers who require high technical trust before requesting custom machinery quotes.',
      'solution' => 'Built detailed engineering application case studies, CAD/CAM capability showcases, ISO certification schema, and precision machinery search funnels.',
      'results' => [
        '390% surge in high-value special purpose machine (SPM) and tooling inquiries',
        '#1 Google search ranking for custom SPM machine manufacturers in Delhi NCR',
        'Consistent qualification for high-ticket automotive and aerospace tooling bids'
      ],
      'quote' => 'Rankmator connected our precision machine shop with tier-1 industrial clients who found us directly on Google for custom automation projects.',
      'quote_author' => 'Technical Director, A3 Technocrafts'
    ],

    // ──────── WEBSITE DEVELOPMENT CATEGORY (8 Projects) ────────
    [
      'id' => 'nere-web',
      'title' => 'NERE Lifestyle',
      'tagline' => 'Modern Lifestyle, Premium Travel Gear & Fashion Brand',
      'url' => 'https://www.nere.in/',
      'display_url' => 'nere.in',
      'industry' => 'Modern Lifestyle & D2C',
      'category' => 'web-dev',
      'gradient' => 'linear-gradient(135deg, #18181b, #27272a)',
      'badge_text' => 'Custom D2C Web Build',
      'metric1_num' => '99/100',
      'metric1_label' => 'Mobile Speed Score',
      'metric1_green' => true,
      'metric2_num' => '< 0.9s',
      'metric2_label' => 'Page Load Time',
      'metric2_green' => false,
      'summary' => 'Engineered an ultra-sleek, minimalist lifestyle e-commerce portal with fluid micro-animations, liquid checkout, and instant product discovery.',
      'tags' => ['Next-Gen Web Design', 'Headless UI', 'Mobile-First CRO', 'Ultra-Fast CDN'],
      'verified' => '2.4x Checkout Conversion',
      'challenge' => 'Building a luxury lifestyle shopping experience with rich visuals and buttery smooth animations while keeping mobile load times under 1 second.',
      'solution' => 'Custom modern frontend architecture, deferred asset hydration, lossless next-gen image compression, and frictionless 1-step checkout integration.',
      'results' => [
        'Near-perfect 99/100 Google Lighthouse mobile performance score',
        'Sub-0.9 second page load speeds across high-resolution product showcases',
        '240% increase in mobile checkout completions with zero layout shifts'
      ],
      'quote' => 'Rankmator created a world-class shopping experience that reflects our premium lifestyle brand aesthetic perfectly.',
      'quote_author' => 'Founder & Creative Lead, NERE'
    ],
    [
      'id' => 'drmathpal-web',
      'title' => 'Dr. Gaurav Mathpal Dental Clinic',
      'tagline' => 'Prosthodontist & Implantologist, New Delhi',
      'url' => 'https://drgauravmathpal.in/',
      'display_url' => 'drgauravmathpal.in',
      'industry' => 'Dental Healthcare & Aesthetics',
      'category' => 'web-dev healthcare',
      'gradient' => 'linear-gradient(135deg, #054e78, #0868A0)',
      'badge_text' => 'Clinical Web Architecture',
      'metric1_num' => '+460%',
      'metric1_label' => 'Direct Phone Bookings',
      'metric1_green' => true,
      'metric2_num' => '1.2s',
      'metric2_label' => 'Clinical Load Speed',
      'metric2_green' => false,
      'summary' => 'Custom clinical website engineered with interactive smile transformation galleries, instant WhatsApp consultation routing, and doctor E-E-A-T credibility.',
      'tags' => ['Clinical Web Design', 'Medical UX', 'Instant Booking', 'Interactive Sliders'],
      'verified' => '5,000+ Smiles Restored',
      'challenge' => 'Overcoming patient dental anxiety and creating a trustworthy, seamless consultation booking experience for high-ticket dental implants.',
      'solution' => 'Designed an intuitive medical web interface featuring interactive smile before/after comparisons, physician credentials, and 1-tap WhatsApp consultation booking.',
      'results' => [
        '460% increase in inbound phone calls and WhatsApp implant consultation inquiries',
        '1.2s ultra-fast mobile loading speed with compliant medical structured data',
        'Over 5,000 successful smile restoration patient inquiries facilitated'
      ],
      'quote' => 'Rankmator built our digital clinic portal with extreme precision. Inbound inquiries for dental implants and full-mouth rehabilitation grew substantially.',
      'quote_author' => 'Dr. Gaurav Mathpal, MDS Prosthodontist & Implantologist'
    ],
    [
      'id' => 'goldenresidences-web',
      'title' => 'The Golden Residences',
      'tagline' => 'Ultra-Luxury Residential Real Estate & Condominiums',
      'url' => 'http://thegoldenresidences.com',
      'display_url' => 'thegoldenresidences.com',
      'industry' => 'Luxury Real Estate',
      'category' => 'web-dev real-estate',
      'gradient' => 'linear-gradient(135deg, #713f12, #854d0e)',
      'badge_text' => 'Luxury Real Estate Portal',
      'metric1_num' => '4.6x',
      'metric1_label' => 'HNW Investor Leads',
      'metric1_green' => true,
      'metric2_num' => '3D Tour',
      'metric2_label' => 'Interactive Layouts',
      'metric2_green' => false,
      'summary' => 'Crafted an opulent architectural web experience with virtual walkthrough tours, high-resolution interactive floor plans, and VIP brochure downloads.',
      'tags' => ['Luxury Real Estate', 'Architectural UX', '3D Walkthroughs', 'HNW Funnel'],
      'verified' => 'High-Net-Worth Capture',
      'challenge' => 'Communicating luxury exclusivity and high-end condominium finishes while providing an effortless lead booking experience for high-net-worth buyers.',
      'solution' => 'Developed an elegant gold-accented visual identity, interactive apartment floor plan explorers, high-speed virtual tour embeds, and instant VIP consultation forms.',
      'results' => [
        '4.6x increase in qualified high-net-worth property inquiries and private viewing bookings',
        'Sub-1.1 second load times across rich multimedia architectural galleries',
        'Significantly higher brochure download-to-visit conversion velocity'
      ],
      'quote' => 'The website Rankmator built for The Golden Residences reflects luxury at every touchpoint and consistently attracts serious property investors.',
      'quote_author' => 'Sales Director, The Golden Residences'
    ],
    [
      'id' => 'goldencity-web',
      'title' => 'The Golden City',
      'tagline' => 'Integrated Mega Township & Commercial Development',
      'url' => 'http://thegoldencity.co.in',
      'display_url' => 'thegoldencity.co.in',
      'industry' => 'Township & Commercial Infra',
      'category' => 'web-dev real-estate',
      'gradient' => 'linear-gradient(135deg, #854d0e, #a16207)',
      'badge_text' => 'Township Web Portal',
      'metric1_num' => '+340%',
      'metric1_label' => 'Site Visit Bookings',
      'metric1_green' => true,
      'metric2_num' => '100% Mobile',
      'metric2_label' => 'Interactive Map UX',
      'metric2_green' => false,
      'summary' => 'Developed a master-planned township portal featuring interactive zoning maps, infrastructure highlights, and automated investor enquiry systems.',
      'tags' => ['Township Portal', 'Interactive Masterplan', 'Investor Funnel', 'High-Speed CDN'],
      'verified' => 'High-Velocity Allotments',
      'challenge' => 'Presenting an expansive multi-acre township master plan with residential, commercial, and green zones in an easy-to-navigate mobile layout.',
      'solution' => 'Engineered an interactive SVG township map with sector filtering, development milestone timelines, video walkthroughs, and automated site visit schedulers.',
      'results' => [
        '340% increase in weekend on-site property tour bookings and plot inquiries',
        'Zero layout shifts on mobile devices with instant responsive map rendering',
        'Accelerated commercial and residential plot allotment velocity'
      ],
      'quote' => 'Our buyers can easily explore the master plan and book on-site visits right from their phones. The web development quality is outstanding.',
      'quote_author' => 'Project Head, The Golden City'
    ],
    [
      'id' => 'goldenindustrial-web',
      'title' => 'Golden Industrial Zone',
      'tagline' => 'Industrial Logistics Parks, Warehousing & Manufacturing Plots',
      'url' => 'https://goldenindustrialzone.com/',
      'display_url' => 'goldenindustrialzone.com',
      'industry' => 'Industrial Infrastructure',
      'category' => 'web-dev real-estate industrial',
      'gradient' => 'linear-gradient(135deg, #1e293b, #0f172a)',
      'badge_text' => 'Industrial Park Portal',
      'metric1_num' => '+420%',
      'metric1_label' => 'Industrial Plot Leads',
      'metric1_green' => true,
      'metric2_num' => '3D Layout',
      'metric2_label' => 'Logistics Connectivity',
      'metric2_green' => false,
      'summary' => 'Built a robust enterprise industrial portal showcasing plot dimensions, regulatory approvals, multimodal transport connectivity, and instant RFQs.',
      'tags' => ['Industrial Web Build', 'Logistics Portal', 'Plot Allocation', 'Enterprise CMS'],
      'verified' => 'Tier-1 Enterprise Trust',
      'challenge' => 'Providing industrial manufacturers, warehouse operators, and logistics giants with concrete technical infrastructure data and regulatory approvals.',
      'solution' => 'Designed a clean engineering-grade UI featuring highway/railway connectivity overlays, utility capacity breakdowns (power, water, gas), and instant plot RFQs.',
      'results' => [
        '420% increase in industrial plot lease and purchase inquiries from manufacturers',
        'Clear interactive presentation of plot dimensions and utility infrastructure',
        'Shortened the corporate procurement discovery-to-contract timeline significantly'
      ],
      'quote' => 'Rankmator built an industrial web platform that provides the exact technical clarity our corporate clients and warehouse operators need.',
      'quote_author' => 'Executive Director, Golden Industrial Zone'
    ],
    [
      'id' => 'dermatales-web',
      'title' => 'DermaTales Clinical Portal',
      'tagline' => 'Comprehensive Clinical & Laser Dermatology Web Platform',
      'url' => 'https://www.dermatales.com/',
      'display_url' => 'dermatales.com',
      'industry' => 'Aesthetic Medicine & Dermatology',
      'category' => 'web-dev healthcare',
      'gradient' => 'linear-gradient(135deg, #0868A0, #0369a1)',
      'badge_text' => 'Clinical UI/UX Engineering',
      'metric1_num' => '3.8x',
      'metric1_label' => 'Mobile Conversion Rate',
      'metric1_green' => true,
      'metric2_num' => '0 CLS',
      'metric2_label' => 'Zero Layout Shift',
      'metric2_green' => false,
      'summary' => 'Designed a patient-first aesthetic clinical website with doctor credibility badges, treatment before/after sliders, and one-tap consultation booking.',
      'tags' => ['Healthcare Web Design', 'Interactive Sliders', 'High-Speed Code', 'Clinical Schema'],
      'verified' => '100% Patient Privacy',
      'challenge' => 'Creating an empathetic, clinical yet luxurious aesthetic that inspires patient confidence across specialized skin, hair, and anti-ageing treatments.',
      'solution' => 'Hand-crafted high-performance custom templates with instant treatment search, verified doctor credentials, and frictionless appointment scheduling.',
      'results' => [
        '3.8x increase in mobile booking conversion rate across all treatment pages',
        'Flawless zero cumulative layout shift (CLS) and sub-second asset delivery',
        'Significant boost in direct patient trust and verified 5-star review acquisition'
      ],
      'quote' => 'The patient experience on our website is seamless. Appointments are booked effortlessly on mobile, and the design is truly world-class.',
      'quote_author' => 'Clinic Management, DermaTales Clinic'
    ],
    [
      'id' => 'cognivic-web',
      'title' => 'Cognivic Technologies',
      'tagline' => 'AI-Powered EdTech & Next-Gen Enterprise Software',
      'url' => 'https://www.cognivic.in/',
      'display_url' => 'cognivic.in',
      'industry' => 'AI, EdTech & SaaS',
      'category' => 'web-dev tech',
      'gradient' => 'linear-gradient(135deg, #312e81, #4338ca)',
      'badge_text' => 'Futuristic SaaS Platform',
      'metric1_num' => '100/100',
      'metric1_label' => 'Accessibility Score',
      'metric1_green' => true,
      'metric2_num' => '4.2x',
      'metric2_label' => 'Demo Registrations',
      'metric2_green' => false,
      'summary' => 'Built a futuristic, tech-forward platform showcasing AI capabilities, interactive learning modules, SaaS product demos, and frictionless user onboarding.',
      'tags' => ['Futuristic Tech UI', 'Glassmorphism Design', 'Interactive Demos', 'Scalable Stack'],
      'verified' => 'Enterprise Ready',
      'challenge' => 'Explaining complex AI capabilities and interactive learning software in a visually engaging, intuitive, and high-converting web presentation.',
      'solution' => 'Created interactive product walkthroughs, modern glassmorphic UI components, animated workflow diagrams, and seamless demo booking funnels.',
      'results' => [
        '100/100 Google accessibility rating with robust multi-device compatibility',
        '4.2x increase in institutional software demo bookings and trial sign-ups',
        'Futuristic brand image that positions Cognivic as a tech industry pioneer'
      ],
      'quote' => 'Rankmator brought our AI software vision to life with an exceptional, futuristic web design that wows every enterprise client.',
      'quote_author' => 'Founder & CEO, Cognivic Technologies'
    ],
    [
      'id' => 'cognivicdigital-web',
      'title' => 'Cognivic Digital Agency',
      'tagline' => 'Next-Gen Digital Marketing & Creative Agency Platform',
      'url' => 'https://www.cognivicdigital.com/',
      'display_url' => 'cognivicdigital.com',
      'industry' => 'Digital Marketing & Creative',
      'category' => 'web-dev tech',
      'gradient' => 'linear-gradient(135deg, #1e1b4b, #2e1065)',
      'badge_text' => 'Creative Agency Platform',
      'metric1_num' => '+310%',
      'metric1_label' => 'Agency Discovery',
      'metric1_green' => true,
      'metric2_num' => 'Fluid Motion',
      'metric2_label' => 'Interactive UI/UX',
      'metric2_green' => false,
      'summary' => 'Crafted a dynamic creative agency portfolio highlighting case studies, live ROI calculators, fluid micro-interactions, and high-conversion client funnels.',
      'tags' => ['Creative Agency Web', 'Interactive Portfolio', 'Dynamic Case Studies', 'Conversion CRO'],
      'verified' => '5.0★ Creative Rating',
      'challenge' => 'Standing out among hundreds of digital marketing agencies with a portfolio that visually demonstrates cutting-edge creative capability.',
      'solution' => 'Implemented bespoke cursor micro-interactions, interactive ROI calculators, dynamic case study reveals, and high-speed CSS animations.',
      'results' => [
        '310% increase in inbound enterprise marketing briefs and international client sign-ups',
        'Engaging interactive case study presentation with high user dwell time',
        'Award-worthy visual aesthetic combined with lightning-fast performance'
      ],
      'quote' => 'Our new agency portal showcases our creative depth and consistently converts high-ticket corporate marketing clients.',
      'quote_author' => 'Creative Director, Cognivic Digital'
    ]
  ];
  ?>

  <!-- ═══════════════════════════════════════════
     PORTFOLIO GRID & FILTER SECTION
═══════════════════════════════════════════ -->
  <section class="portfolio-main-section">
    <div class="container">
      
      <!-- Toolbar: Filters & Live Search -->
      <div class="portfolio-toolbar">
        <div class="filter-wrapper">
          <button class="filter-btn active" data-filter="all">
            <i class="fa-solid fa-layer-group"></i> All Projects <span class="filter-count"><?php echo count($projects); ?></span>
          </button>
          <button class="filter-btn" data-filter="seo">
            <i class="fa-solid fa-magnifying-glass"></i> SEO &amp; Organic Growth <span class="filter-count">13</span>
          </button>
          <button class="filter-btn" data-filter="web-dev">
            <i class="fa-solid fa-code"></i> Website Development <span class="filter-count">8</span>
          </button>
          <button class="filter-btn" data-filter="healthcare">
            <i class="fa-solid fa-heart-pulse"></i> Healthcare &amp; Medical <span class="filter-count">3</span>
          </button>
          <button class="filter-btn" data-filter="travel">
            <i class="fa-solid fa-compass"></i> Travel &amp; Hospitality <span class="filter-count">4</span>
          </button>
          <button class="filter-btn" data-filter="real-estate">
            <i class="fa-solid fa-building"></i> Real Estate &amp; Infra <span class="filter-count">3</span>
          </button>
          <button class="filter-btn" data-filter="industrial">
            <i class="fa-solid fa-industry"></i> Industrial &amp; Tech <span class="filter-count">7</span>
          </button>
        </div>

        <div class="search-box-wrapper">
          <i class="fa-solid fa-search"></i>
          <input type="text" id="portfolioSearch" placeholder="Search client name, industry, or service (e.g. Dental, Battery, Safari)..." />
        </div>
      </div>

      <!-- Case Studies Grid -->
      <div class="portfolio-grid" id="portfolioGrid">
        <?php foreach ($projects as $project): ?>
          <div class="portfolio-card" data-category="<?php echo htmlspecialchars($project['category']); ?>" data-search="<?php echo htmlspecialchars(strtolower($project['title'] . ' ' . $project['tagline'] . ' ' . $project['industry'] . ' ' . implode(' ', $project['tags']))); ?>">
            
            <div class="card-banner" style="background: <?php echo $project['gradient']; ?>;">
              <div class="banner-top">
                <span class="industry-badge" title="<?php echo htmlspecialchars($project['industry']); ?>"><?php echo htmlspecialchars($project['industry']); ?></span>
                <a href="<?php echo htmlspecialchars($project['url']); ?>" target="_blank" rel="noopener noreferrer" class="live-site-badge" title="Visit <?php echo htmlspecialchars($project['display_url']); ?> (Opens in new tab)">
                  <i class="fa-solid fa-arrow-up-right-from-square"></i> <?php echo htmlspecialchars($project['display_url']); ?>
                </a>
              </div>
              <div class="banner-bottom">
                <h3 class="client-title"><?php echo htmlspecialchars($project['title']); ?></h3>
                <span class="client-tagline"><?php echo htmlspecialchars($project['tagline']); ?></span>
              </div>
            </div>

            <div class="card-body">
              <div class="metric-pills-row">
                <div class="metric-pill">
                  <div class="metric-num <?php echo $project['metric1_green'] ? 'green' : ''; ?>"><?php echo htmlspecialchars($project['metric1_num']); ?></div>
                  <div class="metric-label"><?php echo htmlspecialchars($project['metric1_label']); ?></div>
                </div>
                <div class="metric-pill">
                  <div class="metric-num <?php echo $project['metric2_green'] ? 'green' : ''; ?>"><?php echo htmlspecialchars($project['metric2_num']); ?></div>
                  <div class="metric-label"><?php echo htmlspecialchars($project['metric2_label']); ?></div>
                </div>
              </div>

              <p class="case-summary">
                <?php echo htmlspecialchars($project['summary']); ?>
              </p>

              <div class="tools-list">
                <?php foreach ($project['tags'] as $tag): ?>
                  <span class="tool-tag"><?php echo htmlspecialchars($tag); ?></span>
                <?php endforeach; ?>
              </div>

              <div class="card-footer-action">
                <span class="verified-badge"><i class="fa-solid fa-circle-check"></i> <?php echo htmlspecialchars($project['verified']); ?></span>
                <button class="btn-case-study" onclick="openCaseModal('modal-<?php echo $project['id']; ?>')">
                  Case Details <i class="fa-solid fa-arrow-right"></i>
                </button>
              </div>
            </div>

          </div>
        <?php endforeach; ?>
      </div>

      <!-- No search results placeholder -->
      <div id="noResults" style="display:none; text-align:center; padding: 60px 20px;">
        <i class="fa-solid fa-folder-open" style="font-size: 48px; color: #94a3b8; margin-bottom: 16px;"></i>
        <h3 style="font-size: 20px; font-weight: 800; color: #1e293b; margin-bottom: 8px;">No Matching Projects Found</h3>
        <p style="color: #64748b; font-size: 15px;">Try adjusting your search terms or selecting a different filter category.</p>
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════
     CLINICAL & ENTERPRISE GROWTH PILLARS
═══════════════════════════════════════════ -->
  <section class="impact-section">
    <div class="container">
      <div class="section-header fade-in">
        <div class="section-tag">Engineered For Performance</div>
        <h2 class="section-title">Why Industry Leaders Scale with Rankmator</h2>
        <p class="section-subtitle">We don't just build websites and run SEO — we engineer predictable, scientific digital growth systems that dominate search rankings and maximize conversion ROI.</p>
      </div>

      <div class="impact-grid">
        <div class="impact-item fade-in">
          <div class="impact-icon"><i class="fa-solid fa-map-location-dot"></i></div>
          <h4>Search Engine Dominance</h4>
          <p>Dominating high-intent local 3-pack &amp; national organic keywords to capture ready-to-buy customers.</p>
        </div>

        <div class="impact-item fade-in fade-in-delay-1">
          <div class="impact-icon"><i class="fa-solid fa-code"></i></div>
          <h4>Ultra-Fast Custom Web Builds</h4>
          <p>Handcrafted, sub-second loading websites engineered with clean semantic code, zero bloat, and top UX.</p>
        </div>

        <div class="impact-item fade-in fade-in-delay-2">
          <div class="impact-icon"><i class="fa-solid fa-microchip"></i></div>
          <h4>Schema &amp; E-E-A-T Architecture</h4>
          <p>Implementing structured JSON-LD schemas and authoritative credential signals aligned with Google's latest algorithms.</p>
        </div>

        <div class="impact-item fade-in fade-in-delay-3">
          <div class="impact-icon"><i class="fa-solid fa-funnel-dollar"></i></div>
          <h4>Conversion Rate Optimization</h4>
          <p>Designing seamless 1-click WhatsApp, call routing, and RFQ funnels that convert visitors into revenue.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
     CTA BANNER
═══════════════════════════════════════════ -->
  <section class="portfolio-cta-section">
    <div class="container">
      <h2>Ready to Build Your Next Growth Story?</h2>
      <p>Whether you need #1 organic search rankings, a high-converting website redesign, or a full-scale digital growth funnel — our team is ready to deliver.</p>
      <div class="cta-buttons-wrapper">
        <a href="contact.php" class="btn-cta-white"><i class="fa-solid fa-bolt"></i> Get Free Growth Audit</a>
        <a href="https://wa.me/919999999999" target="_blank" rel="noopener noreferrer" class="btn-cta-outline"><i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp</a>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
     INTERACTIVE CASE STUDY MODALS (DYNAMIC RENDER)
═══════════════════════════════════════════ -->
  <?php foreach ($projects as $project): ?>
    <div class="case-modal-overlay" id="modal-<?php echo $project['id']; ?>">
      <div class="case-modal-box">
        <button class="modal-close-btn" onclick="closeCaseModal()">&times;</button>
        <div class="modal-header-banner" style="background: <?php echo $project['gradient']; ?>;">
          <span class="modal-badge"><?php echo htmlspecialchars($project['badge_text']); ?></span>
          <h2><?php echo htmlspecialchars($project['title']); ?></h2>
          <p><?php echo htmlspecialchars($project['tagline']); ?></p>
          <a href="<?php echo htmlspecialchars($project['url']); ?>" target="_blank" rel="noopener noreferrer" class="modal-live-link">
            <i class="fa-solid fa-arrow-up-right-from-square"></i> Visit Live Website: <?php echo htmlspecialchars($project['display_url']); ?>
          </a>
        </div>
        <div class="modal-content-body">
          <div class="modal-metrics-grid">
            <div class="modal-metric-card">
              <div class="modal-metric-val <?php echo $project['metric1_green'] ? 'green' : ''; ?>"><?php echo htmlspecialchars($project['metric1_num']); ?></div>
              <div class="modal-metric-name"><?php echo htmlspecialchars($project['metric1_label']); ?></div>
            </div>
            <div class="modal-metric-card">
              <div class="modal-metric-val <?php echo $project['metric2_green'] ? 'green' : ''; ?>"><?php echo htmlspecialchars($project['metric2_num']); ?></div>
              <div class="modal-metric-name"><?php echo htmlspecialchars($project['metric2_label']); ?></div>
            </div>
            <div class="modal-metric-card">
              <div class="modal-metric-val green"><i class="fa-solid fa-circle-check"></i> Verified</div>
              <div class="modal-metric-name"><?php echo htmlspecialchars($project['verified']); ?></div>
            </div>
          </div>

          <div class="modal-section-block">
            <h3><i class="fa-solid fa-triangle-exclamation"></i> The Challenge</h3>
            <p><?php echo htmlspecialchars($project['challenge']); ?></p>
          </div>

          <div class="modal-section-block">
            <h3><i class="fa-solid fa-lightbulb"></i> The Rankmator Solution</h3>
            <p><?php echo htmlspecialchars($project['solution']); ?></p>
          </div>

          <div class="modal-section-block">
            <h3><i class="fa-solid fa-chart-line"></i> Measurable Results</h3>
            <ul>
              <?php foreach ($project['results'] as $res): ?>
                <li><strong><?php echo htmlspecialchars($res); ?></strong></li>
              <?php endforeach; ?>
            </ul>
          </div>

          <div class="modal-quote-box">
            <p>"<?php echo htmlspecialchars($project['quote']); ?>"</p>
            <div class="modal-quote-author">— <?php echo htmlspecialchars($project['quote_author']); ?></div>
          </div>

          <div class="modal-cta-row">
            <span style="font-size:14px;color:#64748b;font-weight:600;">Want similar results for your business?</span>
            <a href="contact.php" class="btn-primary" style="padding:10px 24px;border-radius:50px;text-decoration:none;font-size:13.5px;">Get Free Strategy Audit</a>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

  <!-- ═══════════════════════════════════════════
     FOOTER
═══════════════════════════════════════════ -->
  <?php include 'footer.php'; ?>

  <!-- ═══════════════════════════════════════════
     SCRIPTS: FILTER, SEARCH & MODAL LOGIC
═══════════════════════════════════════════ -->
  <script>
    // Category Filter & Search Logic
    const filterBtns = document.querySelectorAll('.filter-btn');
    const portfolioCards = document.querySelectorAll('.portfolio-card');
    const searchInput = document.getElementById('portfolioSearch');
    const noResults = document.getElementById('noResults');

    let currentFilter = 'all';

    function applyFilterAndSearch() {
      const searchTerm = searchInput ? searchInput.value.trim().toLowerCase() : '';
      let visibleCount = 0;

      portfolioCards.forEach(card => {
        const category = card.getAttribute('data-category') || '';
        const searchData = card.getAttribute('data-search') || '';

        const matchesFilter = (currentFilter === 'all' || category.includes(currentFilter));
        const matchesSearch = (!searchTerm || searchData.includes(searchTerm));

        if (matchesFilter && matchesSearch) {
          card.style.display = 'flex';
          card.style.animation = 'fadeIn 0.35s ease forwards';
          visibleCount++;
        } else {
          card.style.display = 'none';
        }
      });

      if (noResults) {
        noResults.style.display = visibleCount === 0 ? 'block' : 'none';
      }
    }

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        currentFilter = btn.getAttribute('data-filter');
        applyFilterAndSearch();
      });
    });

    if (searchInput) {
      searchInput.addEventListener('input', applyFilterAndSearch);
    }

    // Modal Popup Controls
    function openCaseModal(modalId) {
      const modal = document.getElementById(modalId);
      if (modal) {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
      }
    }

    function closeCaseModal() {
      const activeModals = document.querySelectorAll('.case-modal-overlay.active');
      activeModals.forEach(m => m.classList.remove('active'));
      document.body.style.overflow = '';
    }

    // Close on overlay click
    document.querySelectorAll('.case-modal-overlay').forEach(overlay => {
      overlay.addEventListener('click', (e) => {
        if (e.target === overlay) {
          closeCaseModal();
        }
      });
    });

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        closeCaseModal();
      }
    });
  </script>

</body>

</html>
