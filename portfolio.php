<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Portfolio &amp; Case Studies | Rankmator — Proven Growth &amp; ROI Results</title>
  <meta name="description"
    content="Explore Rankmator's client portfolio and case studies including DermaTales Clinic and Dr. Gaurav Mathpal Dental Clinic. See how we deliver #1 rankings, custom web builds, and healthcare growth." />
  <?php include 'links.php'; ?>

  <style>
    /* ─── PORTFOLIO CUSTOM STYLES ─── */
    :root {
      --portfolio-dark: #071e33;
      --portfolio-card-bg: #ffffff;
      --portfolio-border: #e2e8f0;
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
      max-width: 740px;
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

    /* ─── FILTER CONTROLS ─── */
    .portfolio-main-section {
      padding: 80px 0 100px;
      background: #f8fafc;
      position: relative;
    }

    .filter-wrapper {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 12px;
      margin-bottom: 50px;
    }

    .filter-btn {
      background: #ffffff;
      border: 1.5px solid #e2e8f0;
      color: #475569;
      padding: 10px 24px;
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
      font-size: 11px;
      padding: 2px 7px;
      border-radius: 12px;
      background: rgba(0, 0, 0, 0.06);
      color: inherit;
    }

    .filter-btn.active .filter-count {
      background: rgba(255, 255, 255, 0.25);
      color: #fff;
    }

    /* ─── CASE STUDY GRID ─── */
    .portfolio-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 36px;
      max-width: 1040px;
      margin: 0 auto;
    }

    .portfolio-card {
      background: #ffffff;
      border-radius: 24px;
      overflow: hidden;
      border: 1px solid #e2e8f0;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
      transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
      display: flex;
      flex-direction: column;
      position: relative;
    }

    .portfolio-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 22px 48px rgba(8, 104, 160, 0.14);
      border-color: rgba(8, 104, 160, 0.35);
    }

    .card-banner {
      height: 210px;
      position: relative;
      background-size: cover;
      background-position: center;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 24px;
      overflow: hidden;
    }

    .card-banner::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, rgba(7, 30, 51, 0.4) 0%, rgba(7, 30, 51, 0.88) 100%);
      z-index: 1;
    }

    .banner-top {
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: relative;
      z-index: 2;
    }

    .industry-badge {
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      color: #fff;
      font-size: 11.5px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      padding: 5px 14px;
      border-radius: 50px;
    }

    .live-site-badge {
      background: rgba(107, 171, 68, 0.3);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(107, 171, 68, 0.6);
      color: #a3d977;
      font-size: 12px;
      font-weight: 700;
      text-decoration: none;
      padding: 5px 14px;
      border-radius: 50px;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      transition: all 0.2s;
    }

    .live-site-badge:hover {
      background: var(--secondary);
      color: #fff;
    }

    .banner-bottom {
      position: relative;
      z-index: 2;
    }

    .client-title {
      font-size: 23px;
      font-weight: 800;
      color: #ffffff;
      margin-bottom: 3px;
      line-height: 1.3;
    }

    .client-tagline {
      font-size: 13.5px;
      color: rgba(255, 255, 255, 0.88);
      font-weight: 500;
    }

    .card-body {
      padding: 28px;
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    /* Metric Highlight Strip */
    .metric-pills-row {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 14px;
      margin-bottom: 22px;
      background: #f1f5f9;
      padding: 14px;
      border-radius: 14px;
      border: 1px solid #e2e8f0;
    }

    .metric-pill {
      text-align: center;
    }

    .metric-num {
      font-size: 22px;
      font-weight: 900;
      color: var(--primary);
      line-height: 1.2;
    }

    .metric-num.green {
      color: var(--secondary);
    }

    .metric-label {
      font-size: 11.5px;
      font-weight: 700;
      color: #64748b;
      text-transform: uppercase;
      letter-spacing: 0.3px;
      margin-top: 2px;
    }

    .case-summary {
      font-size: 14px;
      color: var(--text-secondary);
      line-height: 1.65;
      margin-bottom: 22px;
      flex: 1;
    }

    .tools-list {
      display: flex;
      flex-wrap: wrap;
      gap: 7px;
      margin-bottom: 24px;
    }

    .tool-tag {
      font-size: 11.5px;
      font-weight: 600;
      background: #f8fafc;
      color: #475569;
      padding: 4px 10px;
      border-radius: 6px;
      border: 1px solid #e2e8f0;
    }

    .card-footer-action {
      border-top: 1px solid #f1f5f9;
      padding-top: 18px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .btn-case-study {
      font-size: 14px;
      font-weight: 800;
      color: var(--primary);
      background: none;
      border: none;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 0;
      transition: gap 0.2s, color 0.2s;
    }

    .btn-case-study:hover {
      color: var(--secondary);
      gap: 12px;
    }

    .verified-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 12px;
      font-weight: 700;
      color: #059669;
    }

    /* ─── MODAL POPUP STYLES ─── */
    .case-modal-overlay {
      position: fixed;
      inset: 0;
      background: rgba(7, 30, 51, 0.8);
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
      background: rgba(255, 255, 255, 0.9);
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
      background: linear-gradient(135deg, #0868A0 0%, #054e78 100%);
      padding: 40px 36px 30px;
      color: #fff;
      border-radius: 24px 24px 0 0;
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
      font-size: 28px;
      font-weight: 900;
      margin-bottom: 6px;
    }

    .modal-header-banner p {
      font-size: 15px;
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
      padding: 36px;
    }

    .modal-metrics-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 16px;
      margin-bottom: 32px;
    }

    .modal-metric-card {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      padding: 18px 14px;
      border-radius: 14px;
      text-align: center;
    }

    .modal-metric-val {
      font-size: 26px;
      font-weight: 900;
      color: var(--primary);
      line-height: 1.1;
    }

    .modal-metric-val.green {
      color: var(--secondary);
    }

    .modal-metric-name {
      font-size: 12px;
      font-weight: 700;
      color: #64748b;
      text-transform: uppercase;
      margin-top: 4px;
    }

    .modal-section-block {
      margin-bottom: 28px;
    }

    .modal-section-block h3 {
      font-size: 18px;
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

    .modal-section-block p, .modal-section-block ul {
      font-size: 14.5px;
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
      padding: 18px 22px;
      border-radius: 0 12px 12px 0;
      margin-top: 24px;
    }

    .modal-quote-box p {
      font-style: italic;
      color: #166534;
      font-size: 14px;
      line-height: 1.6;
      margin-bottom: 8px;
    }

    .modal-quote-author {
      font-size: 12.5px;
      font-weight: 700;
      color: #15803d;
    }

    .modal-cta-row {
      margin-top: 32px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-top: 1px solid #e2e8f0;
      padding-top: 24px;
    }

    /* ─── HEALTHCARE STRIP ─── */
    .impact-section {
      padding: 70px 0;
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
      padding: 24px;
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

    /* ─── RESPONSIVE ─── */
    @media (max-width: 900px) {
      .portfolio-grid {
        grid-template-columns: 1fr;
      }
      .impact-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 768px) {
      .portfolio-hero {
        padding: 60px 0 75px;
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
        Proven Track Record &amp; Case Studies
      </div>
      <h1>Our Work Speaks in<br /><span>Revenue, Rankings &amp; ROI.</span></h1>
      <p>Explore real-world client campaigns engineered for exponential scale. See how we scaled patient consultations, built high-speed clinical platforms, and achieved #1 organic search rankings for top healthcare leaders in Delhi NCR.</p>
      
      <div class="portfolio-stats-bar">
        <div class="p-stat-item">
          <i class="fa-solid fa-chart-line"></i> 300+ Projects Scaled
        </div>
        <div class="p-stat-divider"></div>
        <div class="p-stat-item">
          <i class="fa-solid fa-bolt"></i> 4.2x Avg. Ad ROAS
        </div>
        <div class="p-stat-divider"></div>
        <div class="p-stat-item">
          <i class="fa-solid fa-magnifying-glass"></i> 12M+ Organic Visits
        </div>
        <div class="p-stat-divider"></div>
        <div class="p-stat-item">
          <i class="fa-solid fa-trophy"></i> 98% Client Retention
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
     PORTFOLIO GRID & FILTER SECTION
═══════════════════════════════════════════ -->
  <section class="portfolio-main-section">
    <div class="container">
      
      <!-- Filter Bar -->
      <div class="filter-wrapper">
        <button class="filter-btn active" data-filter="all">
          <i class="fa-solid fa-layer-group"></i> All Case Studies <span class="filter-count">2</span>
        </button>
        <button class="filter-btn" data-filter="derma">
          <i class="fa-solid fa-spa"></i> Dermatology &amp; Aesthetics <span class="filter-count">1</span>
        </button>
        <button class="filter-btn" data-filter="dental">
          <i class="fa-solid fa-tooth"></i> Dental &amp; Implants <span class="filter-count">1</span>
        </button>
        <button class="filter-btn" data-filter="seo">
          <i class="fa-solid fa-magnifying-glass"></i> SEO &amp; Organic <span class="filter-count">2</span>
        </button>
      </div>

      <!-- Case Studies Grid (DermaTales & Dr. Gaurav Mathpal) -->
      <div class="portfolio-grid">

        <!-- 1. DermaTales Clinic (dermatales.com) -->
        <div class="portfolio-card" data-category="derma seo">
          <div class="card-banner" style="background: linear-gradient(135deg, #0868A0, #043d5e);">
            <div class="banner-top">
              <span class="industry-badge">Dermatology &amp; Aesthetics</span>
              <a href="https://www.dermatales.com/" target="_blank" rel="noopener noreferrer" class="live-site-badge" title="Visit Live Site">
                <i class="fa-solid fa-arrow-up-right-from-square"></i> dermatales.com
              </a>
            </div>
            <div class="banner-bottom">
              <h3 class="client-title">DermaTales Clinic</h3>
              <span class="client-tagline">Dr. Pooja Varshney — Delhi &amp; Gurgaon</span>
            </div>
          </div>
          <div class="card-body">
            <div class="metric-pills-row">
              <div class="metric-pill">
                <div class="metric-num green">+380%</div>
                <div class="metric-label">Organic Consultations</div>
              </div>
              <div class="metric-pill">
                <div class="metric-num">15,000+</div>
                <div class="metric-label">Patients Scaled</div>
              </div>
            </div>
            <p class="case-summary">
              Executed comprehensive medical SEO, localized Google 3-Pack authority, and custom high-speed web optimization for laser treatments, acne care, anti-ageing, and medical weight loss across Delhi &amp; Gurgaon.
            </p>
            <div class="tools-list">
              <span class="tool-tag">Medical SEO</span>
              <span class="tool-tag">Local 3-Pack</span>
              <span class="tool-tag">Clinical Schema</span>
              <span class="tool-tag">Fast Responsive Web</span>
            </div>
            <div class="card-footer-action">
              <span class="verified-badge"><i class="fa-solid fa-circle-check"></i> 4.9★ Google Rating</span>
              <button class="btn-case-study" onclick="openCaseModal('case-dermatales')">
                View Case Study <i class="fa-solid fa-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- 2. Dr. Gaurav Mathpal Dental Clinic (drgauravmathpal.in) -->
        <div class="portfolio-card" data-category="dental seo">
          <div class="card-banner" style="background: linear-gradient(135deg, #054e78, #0868A0);">
            <div class="banner-top">
              <span class="industry-badge">Prosthodontics &amp; Implants</span>
              <a href="https://drgauravmathpal.in/" target="_blank" rel="noopener noreferrer" class="live-site-badge" title="Visit Live Site">
                <i class="fa-solid fa-arrow-up-right-from-square"></i> drgauravmathpal.in
              </a>
            </div>
            <div class="banner-bottom">
              <h3 class="client-title">Dr. Gaurav Mathpal</h3>
              <span class="client-tagline">Prosthodontist &amp; Implantologist, New Delhi</span>
            </div>
          </div>
          <div class="card-body">
            <div class="metric-pills-row">
              <div class="metric-pill">
                <div class="metric-num green">+460%</div>
                <div class="metric-label">Inbound Phone Calls</div>
              </div>
              <div class="metric-pill">
                <div class="metric-num">#1 Rank</div>
                <div class="metric-label">Dental Implants Delhi</div>
              </div>
            </div>
            <p class="case-summary">
              Custom responsive clinical website engineering, local business JSON-LD schema, and targeted Google search presence for advanced dental implants, smile designing, and full-mouth rehabilitation in New Delhi.
            </p>
            <div class="tools-list">
              <span class="tool-tag">Custom Clinical Web</span>
              <span class="tool-tag">Local Maps SEO</span>
              <span class="tool-tag">Google Business</span>
              <span class="tool-tag">Implant Funnels</span>
            </div>
            <div class="card-footer-action">
              <span class="verified-badge"><i class="fa-solid fa-circle-check"></i> 5,000+ Smiles</span>
              <button class="btn-case-study" onclick="openCaseModal('case-drmathpal')">
                View Case Study <i class="fa-solid fa-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
     CLINICAL & HEALTHCARE GROWTH PILLARS
═══════════════════════════════════════════ -->
  <section class="impact-section">
    <div class="container">
      <div class="section-header fade-in">
        <div class="section-tag">Clinical &amp; Enterprise Growth</div>
        <h2 class="section-title">Why Leading Medical &amp; Aesthetic Clinics Choose Rankmator</h2>
        <p class="section-subtitle">We build compliant, scientific, and patient-centric digital growth engines that convert local searches into booked clinic appointments.</p>
      </div>

      <div class="impact-grid">
        <div class="impact-item fade-in">
          <div class="impact-icon"><i class="fa-solid fa-map-location-dot"></i></div>
          <h4>Local 3-Pack Dominance</h4>
          <p>Dominating Google Map searches for high-intent queries across specific city sectors and pin codes.</p>
        </div>

        <div class="impact-item fade-in fade-in-delay-1">
          <div class="impact-icon"><i class="fa-solid fa-notes-medical"></i></div>
          <h4>Medical Schema &amp; E-E-A-T</h4>
          <p>Structuring doctor credentials, treatments, and FAQ schema according to Google's strict medical guidelines.</p>
        </div>

        <div class="impact-item fade-in fade-in-delay-2">
          <div class="impact-icon"><i class="fa-solid fa-bolt"></i></div>
          <h4>Ultra-Fast Mobile Websites</h4>
          <p>Hand-crafted clinical websites loading under 1.5s with 1-click WhatsApp and phone call appointment routing.</p>
        </div>

        <div class="impact-item fade-in fade-in-delay-3">
          <div class="impact-icon"><i class="fa-solid fa-star"></i></div>
          <h4>Review Velocity Automation</h4>
          <p>Systematizing verified 5-star patient review acquisition to build unmatched local trust and social proof.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
     INTERACTIVE CASE STUDY MODALS
═══════════════════════════════════════════ -->
  
  <!-- Modal 1: DermaTales Clinic -->
  <div class="case-modal-overlay" id="case-dermatales">
    <div class="case-modal-box">
      <button class="modal-close-btn" onclick="closeCaseModal()">&times;</button>
      <div class="modal-header-banner" style="background: linear-gradient(135deg, #0868A0 0%, #043d5e 100%);">
        <span class="modal-badge">Clinical SEO &amp; Medical Growth</span>
        <h2>DermaTales Clinic — Delhi &amp; Gurgaon</h2>
        <p>Led by Dr. Pooja Varshney (MD Dermatology, Gold Medalist) — Scaling high-ticket patient consultations across Delhi NCR.</p>
        <a href="https://www.dermatales.com/" target="_blank" rel="noopener noreferrer" class="modal-live-link">
          <i class="fa-solid fa-arrow-up-right-from-square"></i> Visit Live Website: dermatales.com
        </a>
      </div>
      <div class="modal-content-body">
        <div class="modal-metrics-grid">
          <div class="modal-metric-card">
            <div class="modal-metric-val green">+380%</div>
            <div class="modal-metric-name">Organic Appointment Growth</div>
          </div>
          <div class="modal-metric-card">
            <div class="modal-metric-val">15,000+</div>
            <div class="modal-metric-name">Satisfied Patients Reached</div>
          </div>
          <div class="modal-metric-card">
            <div class="modal-metric-val green">4.9★</div>
            <div class="modal-metric-name">Verified Google Rating</div>
          </div>
        </div>

        <div class="modal-section-block">
          <h3><i class="fa-solid fa-triangle-exclamation"></i> The Challenge</h3>
          <p>DermaTales provides world-class dermatological care, US-FDA approved laser therapies (Carbon laser, Laser hair removal), acne &amp; pigmentation treatments, anti-ageing solutions (Botox, Fillers), and medical weight loss (CoolSculpting, Ozempic). However, they faced aggressive competition in Delhi &amp; Gurgaon from corporate hospital chains bidding heavily on paid keywords.</p>
        </div>

        <div class="modal-section-block">
          <h3><i class="fa-solid fa-lightbulb"></i> The Rankmator Solution</h3>
          <ul>
            <li><strong>Advanced Medical &amp; Clinical Schema:</strong> Implemented comprehensive MedicalClinic JSON-LD schema, physician profile credentials, and treatment-specific FAQs.</li>
            <li><strong>Local 3-Pack Maps Authority:</strong> Optimized multi-location GBP listings for Gurgaon (Sector 31) and Delhi, boosting verified patient review velocity.</li>
            <li><strong>Treatment-Specific Search Hubs:</strong> Built high-ranking landing pages for specialized aesthetic treatments with instant WhatsApp booking integration.</li>
            <li><strong>Speed &amp; Mobile Experience:</strong> Streamlined website architecture to achieve instant load times on mobile devices.</li>
          </ul>
        </div>

        <div class="modal-quote-box">
          <p>"Rankmator transformed our online presence completely. We've seen a massive surge in genuine patient bookings for specialized treatments across Delhi and Gurgaon. Their strategic precision is unmatched."</p>
          <div class="modal-quote-author">— Dr. Pooja Varshney, MD Dermatology &amp; Founder, DermaTales Clinic</div>
        </div>

        <div class="modal-cta-row">
          <span style="font-size:14px;color:#64748b;font-weight:600;">Want similar healthcare growth for your clinic?</span>
          <a href="contact.php" class="btn-primary" style="padding:10px 24px;border-radius:50px;text-decoration:none;font-size:13.5px;">Get Free Medical SEO Audit</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2: Dr. Gaurav Mathpal -->
  <div class="case-modal-overlay" id="case-drmathpal">
    <div class="case-modal-box">
      <button class="modal-close-btn" onclick="closeCaseModal()">&times;</button>
      <div class="modal-header-banner" style="background: linear-gradient(135deg, #054e78 0%, #0868A0 100%);">
        <span class="modal-badge">Dental Healthcare &amp; Web Development</span>
        <h2>Dr. Gaurav Mathpal — Prosthodontist &amp; Implantologist</h2>
        <p>Premier Dental Specialist in New Delhi — Establishing #1 search rankings for dental implants and smile designing.</p>
        <a href="https://drgauravmathpal.in/" target="_blank" rel="noopener noreferrer" class="modal-live-link">
          <i class="fa-solid fa-arrow-up-right-from-square"></i> Visit Live Website: drgauravmathpal.in
        </a>
      </div>
      <div class="modal-content-body">
        <div class="modal-metrics-grid">
          <div class="modal-metric-card">
            <div class="modal-metric-val green">+460%</div>
            <div class="modal-metric-name">Inbound Phone Inquiries</div>
          </div>
          <div class="modal-metric-card">
            <div class="modal-metric-val">#1 Rank</div>
            <div class="modal-metric-name">Google Map 3-Pack</div>
          </div>
          <div class="modal-metric-card">
            <div class="modal-metric-val green">5,000+</div>
            <div class="modal-metric-name">Smiles Restored</div>
          </div>
        </div>

        <div class="modal-section-block">
          <h3><i class="fa-solid fa-triangle-exclamation"></i> The Challenge</h3>
          <p>With over 15 years of expertise in full-mouth rehabilitation, dental implants, root canal therapies, TMJ disorders, and smile makeovers, Dr. Gaurav Mathpal required a modern, ultra-fast website and local search strategy to attract high-intent dental patients in New Delhi.</p>
        </div>

        <div class="modal-section-block">
          <h3><i class="fa-solid fa-lightbulb"></i> The Rankmator Solution</h3>
          <ul>
            <li><strong>Bespoke Fast Clinical Web Development:</strong> Designed and developed a sleek, modern responsive website featuring intuitive appointment booking and clear service breakdowns.</li>
            <li><strong>Local Dentist Schema &amp; Geotagging:</strong> Configured comprehensive Dentist structured data, verified NAP citations, and geo-targeted service landing pages.</li>
            <li><strong>High-Intent Search Visibility:</strong> Targeted high-value search queries such as 'Prosthodontist in New Delhi', 'Dental Implants Delhi', and 'Smile Designing Expert'.</li>
            <li><strong>Instant Consultation Routing:</strong> Added seamless click-to-call and WhatsApp appointment booking features for mobile patients.</li>
          </ul>
        </div>

        <div class="modal-quote-box">
          <p>"Rankmator built our digital presence with tremendous precision. Our inbound inquiries for dental implants and complex smile rehabilitation cases increased dramatically."</p>
          <div class="modal-quote-author">— Dr. Gaurav Mathpal, MDS Prosthodontist &amp; Implantologist, New Delhi</div>
        </div>

        <div class="modal-cta-row">
          <span style="font-size:14px;color:#64748b;font-weight:600;">Looking to scale your dental practice?</span>
          <a href="contact.php" class="btn-primary" style="padding:10px 24px;border-radius:50px;text-decoration:none;font-size:13.5px;">Request Practice Strategy</a>
        </div>
      </div>
    </div>
  </div>

  <!-- ═══════════════════════════════════════════
     FOOTER
═══════════════════════════════════════════ -->
  <?php include 'footer.php'; ?>

  <!-- ═══════════════════════════════════════════
     SCRIPTS: FILTER & MODAL LOGIC
═══════════════════════════════════════════ -->
  <script>
    // Category Filter Handler
    const filterBtns = document.querySelectorAll('.filter-btn');
    const portfolioCards = document.querySelectorAll('.portfolio-card');

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const filterVal = btn.getAttribute('data-filter');

        portfolioCards.forEach(card => {
          const category = card.getAttribute('data-category');
          if (filterVal === 'all' || (category && category.includes(filterVal))) {
            card.style.display = 'flex';
            card.style.animation = 'fadeIn 0.4s ease forwards';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });

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
