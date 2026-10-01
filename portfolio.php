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
  require_once __DIR__ . '/portfolio-data.php';
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
          <div class="portfolio-card" data-category="<?php echo htmlspecialchars($project['category']); ?>" data-search="<?php echo htmlspecialchars(strtolower($project['title'] . ' ' . $project['tagline'] . ' ' . $project['industry'] . ' ' . implode(' ', $project['tags'] ?? $project['services_provided']))); ?>">
            
            <div class="card-banner" style="background: <?php echo $project['gradient']; ?>;">
              <div class="banner-top">
                <span class="industry-badge" title="<?php echo htmlspecialchars($project['industry']); ?>"><?php echo htmlspecialchars($project['industry']); ?></span>
                <a href="<?php echo htmlspecialchars($project['url']); ?>" target="_blank" rel="noopener noreferrer" class="live-site-badge" title="Visit <?php echo htmlspecialchars($project['display_url']); ?> (Opens in new tab)">
                  <i class="fa-solid fa-arrow-up-right-from-square"></i> <?php echo htmlspecialchars($project['display_url']); ?>
                </a>
              </div>
              <div class="banner-bottom">
                <h3 class="client-title">
                  <a href="<?php echo htmlspecialchars($project['file']); ?>" style="color:inherit;text-decoration:none;">
                    <?php echo htmlspecialchars($project['title']); ?>
                  </a>
                </h3>
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
                <?php 
                $displayTags = $project['tags'] ?? array_slice($project['services_provided'], 0, 4);
                foreach ($displayTags as $tag): 
                ?>
                  <span class="tool-tag"><?php echo htmlspecialchars($tag); ?></span>
                <?php endforeach; ?>
              </div>

              <div class="card-footer-action">
                <span class="verified-badge"><i class="fa-solid fa-circle-check"></i> <?php echo htmlspecialchars($project['verified']); ?></span>
                <div style="display:flex;align-items:center;gap:12px;">
                  <button class="btn-case-study" style="font-size:12.5px;color:#64748b;" onclick="openCaseModal('modal-<?php echo $project['id']; ?>')">
                    Quick View
                  </button>
                  <a href="<?php echo htmlspecialchars($project['file']); ?>" class="btn-case-study" style="color:var(--primary);font-weight:800;">
                    Read Story <i class="fa-solid fa-arrow-right"></i>
                  </a>
                </div>
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
        <a href="https://wa.me/919560864432" target="_blank" rel="noopener noreferrer" class="btn-cta-outline"><i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp</a>
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
            <a href="<?php echo htmlspecialchars($project['file']); ?>" class="btn-primary" style="padding:10px 22px;border-radius:50px;text-decoration:none;font-size:13.5px;display:inline-flex;align-items:center;gap:7px;">
              Read Full Case Study Page <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="contact.php" class="btn-outline" style="padding:10px 20px;border-radius:50px;text-decoration:none;font-size:13.5px;">
              Get Free Strategy Audit
            </a>
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
