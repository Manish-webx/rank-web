<?php
/**
 * Master Case Study Detail Page Template
 * Expects $project_id to be set before including this template.
 */

if (!isset($project_id) || empty($project_id)) {
  // Fallback to first project if not specified
  $project_id = 'dermatales-seo';
}

require_once __DIR__ . '/portfolio-data.php';

if (!isset($projects[$project_id])) {
  header("Location: portfolio.php");
  exit;
}

$p = $projects[$project_id];

// Canonical URL
$canonical_url = "https://www.rankmator.com/" . $p['file'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo htmlspecialchars($p['meta_title']); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($p['meta_description']); ?>" />
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>" />
  
  <!-- Open Graph / Social Meta -->
  <meta property="og:type" content="article" />
  <meta property="og:title" content="<?php echo htmlspecialchars($p['meta_title']); ?>" />
  <meta property="og:description" content="<?php echo htmlspecialchars($p['meta_description']); ?>" />
  <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>" />
  <meta property="og:site_name" content="Rankmator" />
  
  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?php echo htmlspecialchars($p['meta_title']); ?>" />
  <meta name="twitter:description" content="<?php echo htmlspecialchars($p['meta_description']); ?>" />

  <?php include 'links.php'; ?>

  <!-- JSON-LD Structured Data for Case Study & Breadcrumbs -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "BreadcrumbList",
        "itemListElement": [
          {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://www.rankmator.com/"
          },
          {
            "@type": "ListItem",
            "position": 2,
            "name": "Portfolio",
            "item": "https://www.rankmator.com/portfolio"
          },
          {
            "@type": "ListItem",
            "position": 3,
            "name": "<?php echo addslashes($p['title']); ?> Case Study",
            "item": "<?php echo addslashes($canonical_url); ?>"
          }
        ]
      },
      {
        "@type": "CreativeWork",
        "name": "<?php echo addslashes($p['title']); ?> — Client Growth Case Study",
        "headline": "<?php echo addslashes($p['meta_title']); ?>",
        "description": "<?php echo addslashes($p['meta_description']); ?>",
        "author": {
          "@type": "Organization",
          "name": "Rankmator",
          "url": "https://www.rankmator.com/"
        },
        "publisher": {
          "@type": "Organization",
          "name": "Rankmator",
          "logo": {
            "@type": "ImageObject",
            "url": "https://www.rankmator.com/assets/img/logo.png"
          }
        },
        "about": {
          "@type": "Organization",
          "name": "<?php echo addslashes($p['client_name']); ?>",
          "url": "<?php echo addslashes($p['url']); ?>"
        }
      }
    ]
  }
  </script>

  <style>
    /* ─── CASE STUDY CUSTOM STYLES ─── */
    .cs-breadcrumb-bar {
      background: #04243d;
      padding: 14px 0;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      font-size: 13.5px;
    }

    .cs-breadcrumb-list {
      display: flex;
      align-items: center;
      gap: 10px;
      list-style: none;
      margin: 0;
      padding: 0;
      flex-wrap: wrap;
    }

    .cs-breadcrumb-list li {
      display: flex;
      align-items: center;
      gap: 10px;
      color: rgba(255, 255, 255, 0.7);
    }

    .cs-breadcrumb-list a {
      color: rgba(255, 255, 255, 0.85);
      text-decoration: none;
      transition: color 0.2s;
    }

    .cs-breadcrumb-list a:hover {
      color: #a3d977;
    }

    .cs-breadcrumb-list .active {
      color: #a3d977;
      font-weight: 700;
    }

    /* ─── HERO BANNER ─── */
    .cs-hero {
      background: <?php echo $p['gradient']; ?>;
      padding: 75px 0 85px;
      color: #fff;
      position: relative;
      overflow: hidden;
    }

    .cs-hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image: radial-gradient(circle, rgba(255, 255, 255, 0.08) 1px, transparent 1px);
      background-size: 32px 32px;
      pointer-events: none;
    }

    .cs-hero-inner {
      position: relative;
      z-index: 2;
      max-width: 900px;
    }

    .cs-badge-group {
      display: flex;
      align-items: center;
      gap: 12px;
      flex-wrap: wrap;
      margin-bottom: 20px;
    }

    .cs-pill-badge {
      background: rgba(255, 255, 255, 0.18);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      color: #fff;
      font-size: 12.5px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      padding: 5px 16px;
      border-radius: 50px;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .cs-pill-badge.green {
      background: rgba(107, 171, 68, 0.28);
      border-color: rgba(107, 171, 68, 0.6);
      color: #a3d977;
    }

    .cs-hero h1 {
      font-size: clamp(32px, 4.5vw, 50px);
      font-weight: 900;
      line-height: 1.2;
      margin-bottom: 16px;
      color: #ffffff;
    }

    .cs-hero-tagline {
      font-size: 18px;
      color: rgba(255, 255, 255, 0.9);
      margin-bottom: 30px;
      line-height: 1.6;
      font-weight: 500;
    }

    .cs-hero-actions {
      display: flex;
      align-items: center;
      gap: 16px;
      flex-wrap: wrap;
    }

    .cs-btn-live {
      background: #6BAB44;
      color: #ffffff;
      padding: 12px 28px;
      border-radius: 50px;
      font-size: 14.5px;
      font-weight: 800;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: all 0.3s;
      box-shadow: 0 6px 20px rgba(107, 171, 68, 0.4);
    }

    .cs-btn-live:hover {
      background: #5a9436;
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(107, 171, 68, 0.5);
      color: #fff;
    }

    .cs-btn-audit {
      background: rgba(255, 255, 255, 0.15);
      border: 1.5px solid rgba(255, 255, 255, 0.45);
      color: #ffffff;
      padding: 11px 26px;
      border-radius: 50px;
      font-size: 14.5px;
      font-weight: 700;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: all 0.3s;
    }

    .cs-btn-audit:hover {
      background: #ffffff;
      color: var(--primary);
      border-color: #ffffff;
      transform: translateY(-2px);
    }

    /* ─── METRIC HIGHLIGHTS STRIP ─── */
    .cs-metrics-section {
      background: #ffffff;
      padding: 0;
      position: relative;
      z-index: 10;
      margin-top: -36px;
    }

    .cs-metrics-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      background: #ffffff;
      border-radius: 20px;
      padding: 24px 30px;
      box-shadow: 0 16px 40px rgba(8, 104, 160, 0.12);
      border: 1px solid #e2ecf3;
    }

    .cs-metric-card {
      text-align: center;
      padding: 10px 12px;
      border-right: 1px solid #f1f5f9;
    }

    .cs-metric-card:last-child {
      border-right: none;
    }

    .cs-metric-number {
      font-size: clamp(26px, 3.2vw, 36px);
      font-weight: 900;
      color: var(--primary);
      line-height: 1.1;
      margin-bottom: 4px;
    }

    .cs-metric-number.green {
      color: var(--secondary);
    }

    .cs-metric-label {
      font-size: 12.5px;
      font-weight: 700;
      color: #64748b;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    /* ─── MAIN CONTENT LAYOUT ─── */
    .cs-content-section {
      padding: 70px 0 90px;
      background: #f8fafc;
    }

    .cs-layout-grid {
      display: grid;
      grid-template-columns: 1fr 340px;
      gap: 40px;
      align-items: start;
    }

    .cs-main-body {
      background: #ffffff;
      border-radius: 24px;
      padding: 45px 40px;
      border: 1px solid #e2e8f0;
      box-shadow: 0 6px 24px rgba(0, 0, 0, 0.03);
    }

    .cs-section-block {
      margin-bottom: 45px;
      padding-bottom: 40px;
      border-bottom: 1px solid #f1f5f9;
    }

    .cs-section-block:last-child {
      margin-bottom: 0;
      padding-bottom: 0;
      border-bottom: none;
    }

    .cs-block-title {
      font-size: 22px;
      font-weight: 900;
      color: var(--text-primary);
      margin-bottom: 18px;
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .cs-block-title-icon {
      width: 40px;
      height: 40px;
      border-radius: 10px;
      background: var(--bg-blue-light);
      color: var(--primary);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      flex-shrink: 0;
    }

    .cs-block-text {
      font-size: 15.5px;
      line-height: 1.8;
      color: #475569;
      margin-bottom: 20px;
    }

    /* Challenge List */
    .cs-points-list {
      list-style: none;
      padding: 0;
      margin: 20px 0 0;
      display: grid;
      gap: 12px;
    }

    .cs-point-item {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      background: #fff5f5;
      border: 1px solid #fed7d7;
      padding: 14px 18px;
      border-radius: 12px;
      font-size: 14.5px;
      color: #9b2c2c;
      font-weight: 600;
    }

    .cs-point-item i {
      color: #e53e3e;
      margin-top: 3px;
      font-size: 16px;
    }

    /* Strategic Steps Grid */
    .cs-steps-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 18px;
      margin-top: 24px;
    }

    .cs-step-card {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 16px;
      padding: 22px 20px;
      position: relative;
      transition: all 0.3s;
    }

    .cs-step-card:hover {
      background: #ffffff;
      border-color: var(--primary);
      box-shadow: 0 8px 24px rgba(8, 104, 160, 0.08);
      transform: translateY(-3px);
    }

    .cs-step-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 12px;
    }

    .cs-step-num {
      font-size: 13px;
      font-weight: 800;
      color: var(--secondary);
      background: rgba(107, 171, 68, 0.12);
      padding: 3px 10px;
      border-radius: 50px;
    }

    .cs-step-icon {
      font-size: 18px;
      color: var(--primary);
    }

    .cs-step-card h4 {
      font-size: 16px;
      font-weight: 800;
      color: var(--text-primary);
      margin-bottom: 8px;
    }

    .cs-step-card p {
      font-size: 13.5px;
      color: #64748b;
      line-height: 1.6;
      margin: 0;
    }

    /* Deliverables & Tools Tags */
    .cs-tags-wrapper {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-top: 14px;
    }

    .cs-tool-tag {
      background: #f1f5f9;
      color: #334155;
      font-size: 13px;
      font-weight: 700;
      padding: 6px 14px;
      border-radius: 8px;
      border: 1px solid #e2e8f0;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .cs-tool-tag i {
      color: var(--secondary);
    }

    /* Results Bullet Points */
    .cs-results-list {
      list-style: none;
      padding: 0;
      margin: 20px 0 25px;
      display: grid;
      gap: 12px;
    }

    .cs-result-item {
      display: flex;
      align-items: flex-start;
      gap: 14px;
      background: #f0fdf4;
      border: 1px solid #bbf7d0;
      padding: 16px 20px;
      border-radius: 12px;
      font-size: 15px;
      color: #166534;
      font-weight: 700;
    }

    .cs-result-item i {
      color: var(--secondary);
      font-size: 18px;
      margin-top: 2px;
    }

    /* Results Milestone Grid */
    .cs-milestones-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 14px;
      margin-top: 20px;
    }

    .cs-milestone-card {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 14px;
      padding: 16px 12px;
      text-align: center;
    }

    .cs-milestone-val {
      font-size: 20px;
      font-weight: 900;
      color: var(--primary);
      margin-bottom: 4px;
    }

    .cs-milestone-label {
      font-size: 11px;
      font-weight: 700;
      color: #64748b;
      text-transform: uppercase;
    }

    /* Testimonial Quote Box */
    .cs-testimonial-box {
      background: linear-gradient(135deg, #071e33 0%, #0868A0 100%);
      color: #ffffff;
      border-radius: 20px;
      padding: 36px 32px;
      position: relative;
      margin-top: 30px;
    }

    .cs-stars-row {
      color: #f59e0b;
      font-size: 16px;
      margin-bottom: 14px;
      display: flex;
      gap: 4px;
    }

    .cs-quote-text {
      font-size: 17px;
      line-height: 1.7;
      font-style: italic;
      color: rgba(255, 255, 255, 0.95);
      margin-bottom: 18px;
    }

    .cs-quote-meta {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .cs-quote-author-name {
      font-size: 15px;
      font-weight: 800;
      color: #ffffff;
    }

    .cs-quote-author-role {
      font-size: 12.5px;
      color: #a3d977;
    }

    /* ─── SIDEBAR WIDGETS ─── */
    .cs-sidebar {
      display: flex;
      flex-direction: column;
      gap: 24px;
      position: sticky;
      top: 100px;
    }

    .cs-widget {
      background: #ffffff;
      border: 1px solid #e2e8f0;
      border-radius: 20px;
      padding: 26px 24px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
    }

    .cs-widget-title {
      font-size: 16px;
      font-weight: 800;
      color: var(--text-primary);
      margin-bottom: 18px;
      padding-bottom: 12px;
      border-bottom: 1px solid #f1f5f9;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .cs-info-table {
      width: 100%;
      border-collapse: collapse;
      font-size: 13.5px;
    }

    .cs-info-table tr {
      border-bottom: 1px solid #f8fafc;
    }

    .cs-info-table tr:last-child {
      border-bottom: none;
    }

    .cs-info-table th {
      text-align: left;
      padding: 10px 0;
      color: #64748b;
      font-weight: 600;
      width: 40%;
    }

    .cs-info-table td {
      text-align: right;
      padding: 10px 0;
      color: var(--text-primary);
      font-weight: 700;
    }

    .cs-info-table a {
      color: var(--primary);
      text-decoration: none;
      word-break: break-all;
    }

    .cs-info-table a:hover {
      color: var(--secondary);
    }

    /* Live Site Preview Banner Widget */
    .cs-live-card {
      background: linear-gradient(135deg, #0868A0 0%, #054e78 100%);
      color: #fff;
      border-radius: 20px;
      padding: 26px 22px;
      text-align: center;
    }

    .cs-live-card h4 {
      font-size: 17px;
      font-weight: 800;
      margin-bottom: 8px;
    }

    .cs-live-card p {
      font-size: 13px;
      color: rgba(255, 255, 255, 0.85);
      margin-bottom: 18px;
      line-height: 1.5;
    }

    .cs-btn-visit-full {
      background: #ffffff;
      color: var(--primary);
      padding: 10px 20px;
      border-radius: 50px;
      font-size: 13.5px;
      font-weight: 800;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 7px;
      transition: all 0.3s;
      width: 100%;
      justify-content: center;
    }

    .cs-btn-visit-full:hover {
      background: var(--secondary);
      color: #fff;
      transform: translateY(-2px);
    }

    /* Related Case Studies Widget */
    .cs-related-item {
      display: flex;
      flex-direction: column;
      gap: 4px;
      padding: 12px 0;
      border-bottom: 1px solid #f1f5f9;
      text-decoration: none;
      transition: all 0.2s;
    }

    .cs-related-item:last-child {
      border-bottom: none;
      padding-bottom: 0;
    }

    .cs-related-item:hover .cs-related-title {
      color: var(--primary);
    }

    .cs-related-industry {
      font-size: 11px;
      font-weight: 700;
      color: var(--secondary);
      text-transform: uppercase;
    }

    .cs-related-title {
      font-size: 14px;
      font-weight: 800;
      color: var(--text-primary);
      transition: color 0.2s;
    }

    .cs-related-metric {
      font-size: 12px;
      color: #64748b;
      font-weight: 600;
    }

    /* ─── BOTTOM CTA BANNER ─── */
    .cs-cta-section {
      background: linear-gradient(135deg, #071e33 0%, #0868A0 100%);
      padding: 75px 0;
      color: #fff;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .cs-cta-section::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image: radial-gradient(circle, rgba(255, 255, 255, 0.06) 1px, transparent 1px);
      background-size: 28px 28px;
    }

    .cs-cta-section h2 {
      font-size: clamp(26px, 4vw, 38px);
      font-weight: 900;
      margin-bottom: 14px;
      position: relative;
      z-index: 2;
    }

    .cs-cta-section p {
      font-size: 16.5px;
      color: rgba(255, 255, 255, 0.88);
      max-width: 650px;
      margin: 0 auto 30px;
      line-height: 1.6;
      position: relative;
      z-index: 2;
    }

    .cs-cta-btns {
      display: flex;
      justify-content: center;
      gap: 16px;
      flex-wrap: wrap;
      position: relative;
      z-index: 2;
    }

    .btn-cs-white {
      background: #ffffff;
      color: var(--primary);
      padding: 13px 32px;
      border-radius: 50px;
      font-weight: 800;
      font-size: 14.5px;
      text-decoration: none;
      transition: all 0.3s;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }

    .btn-cs-white:hover {
      background: #f8fafc;
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
    }

    .btn-cs-wa {
      background: #25D366;
      color: #ffffff;
      padding: 13px 30px;
      border-radius: 50px;
      font-weight: 800;
      font-size: 14.5px;
      text-decoration: none;
      transition: all 0.3s;
      box-shadow: 0 4px 16px rgba(37, 211, 102, 0.25);
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }

    .btn-cs-wa:hover {
      background: #1eb855;
      transform: translateY(-2px);
      color: #fff;
    }

    /* ─── RESPONSIVE ─── */
    @media (max-width: 1024px) {
      .cs-layout-grid {
        grid-template-columns: 1fr;
      }
      .cs-sidebar {
        position: static;
      }
      .cs-metrics-grid {
        grid-template-columns: repeat(2, 1fr);
      }
      .cs-metric-card:nth-child(2) {
        border-right: none;
      }
      .cs-metric-card:nth-child(3) {
        border-top: 1px solid #f1f5f9;
      }
      .cs-metric-card:nth-child(4) {
        border-top: 1px solid #f1f5f9;
        border-right: none;
      }
    }

    @media (max-width: 768px) {
      .cs-hero {
        padding: 50px 0 65px;
      }
      .cs-steps-grid {
        grid-template-columns: 1fr;
      }
      .cs-milestones-grid {
        grid-template-columns: repeat(2, 1fr);
      }
      .cs-main-body {
        padding: 28px 20px;
      }
      .cs-metrics-grid {
        grid-template-columns: 1fr;
        padding: 18px 20px;
      }
      .cs-metric-card {
        border-right: none !important;
        border-bottom: 1px solid #f1f5f9;
        padding: 12px 0;
      }
      .cs-metric-card:last-child {
        border-bottom: none;
      }
    }
  </style>
</head>

<body>

  <?php include 'header.php'; ?>

  <!-- ═══════════════════════════════════════════
     BREADCRUMB NAVIGATION
═══════════════════════════════════════════ -->
  <nav class="cs-breadcrumb-bar" aria-label="Breadcrumb">
    <div class="container">
      <ul class="cs-breadcrumb-list">
        <li><a href="index.php"><i class="fa-solid fa-house"></i> Home</a> <i class="fa-solid fa-chevron-right" style="font-size:10px;"></i></li>
        <li><a href="portfolio.php">Portfolio</a> <i class="fa-solid fa-chevron-right" style="font-size:10px;"></i></li>
        <li class="active"><?php echo htmlspecialchars($p['title']); ?></li>
      </ul>
    </div>
  </nav>

  <!-- ═══════════════════════════════════════════
     HERO SECTION
═══════════════════════════════════════════ -->
  <section class="cs-hero">
    <div class="container">
      <div class="cs-hero-inner">
        
        <div class="cs-badge-group">
          <span class="cs-pill-badge green"><i class="fa-solid fa-circle-check"></i> <?php echo htmlspecialchars($p['badge_text']); ?></span>
          <span class="cs-pill-badge"><i class="fa-solid fa-tag"></i> <?php echo htmlspecialchars($p['industry']); ?></span>
          <span class="cs-pill-badge"><i class="fa-solid fa-calendar"></i> <?php echo htmlspecialchars($p['timeline']); ?></span>
        </div>

        <h1><?php echo htmlspecialchars($p['title']); ?>: Client Case Study</h1>
        <p class="cs-hero-tagline"><?php echo htmlspecialchars($p['tagline']); ?></p>

        <div class="cs-hero-actions">
          <a href="<?php echo htmlspecialchars($p['url']); ?>" target="_blank" rel="noopener noreferrer" class="cs-btn-live">
            <i class="fa-solid fa-arrow-up-right-from-square"></i> Visit Live Website: <?php echo htmlspecialchars($p['display_url']); ?>
          </a>
          <a href="contact.php" class="cs-btn-audit">
            <i class="fa-solid fa-bolt"></i> Request Similar Growth Strategy
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
     EXECUTIVE METRIC HIGHLIGHTS STRIP
═══════════════════════════════════════════ -->
  <section class="cs-metrics-section">
    <div class="container">
      <div class="cs-metrics-grid">
        <div class="cs-metric-card">
          <div class="cs-metric-number <?php echo $p['metric1_green'] ? 'green' : ''; ?>"><?php echo htmlspecialchars($p['metric1_num']); ?></div>
          <div class="cs-metric-label"><?php echo htmlspecialchars($p['metric1_label']); ?></div>
        </div>
        <div class="cs-metric-card">
          <div class="cs-metric-number <?php echo $p['metric2_green'] ? 'green' : ''; ?>"><?php echo htmlspecialchars($p['metric2_num']); ?></div>
          <div class="cs-metric-label"><?php echo htmlspecialchars($p['metric2_label']); ?></div>
        </div>
        <div class="cs-metric-card">
          <div class="cs-metric-number green"><?php echo htmlspecialchars($p['metric3_num']); ?></div>
          <div class="cs-metric-label"><?php echo htmlspecialchars($p['metric3_label']); ?></div>
        </div>
        <div class="cs-metric-card">
          <div class="cs-metric-number"><?php echo htmlspecialchars($p['metric4_num']); ?></div>
          <div class="cs-metric-label"><?php echo htmlspecialchars($p['metric4_label']); ?></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
     MAIN CASE STUDY BODY & SIDEBAR
═══════════════════════════════════════════ -->
  <section class="cs-content-section">
    <div class="container">
      <div class="cs-layout-grid">
        
        <!-- LEFT COLUMN: DEEP CASE STUDY STORY -->
        <main class="cs-main-body">
          
          <!-- 1. Client Overview -->
          <div class="cs-section-block">
            <h2 class="cs-block-title">
              <span class="cs-block-title-icon"><i class="fa-solid fa-building"></i></span>
              Executive Summary &amp; Client Overview
            </h2>
            <p class="cs-block-text">
              <?php echo htmlspecialchars($p['about_client']); ?>
            </p>
            <p class="cs-block-text">
              <?php echo htmlspecialchars($p['summary']); ?>
            </p>
          </div>

          <!-- 2. The Challenge -->
          <div class="cs-section-block">
            <h2 class="cs-block-title">
              <span class="cs-block-title-icon"><i class="fa-solid fa-triangle-exclamation" style="color:#e53e3e;"></i></span>
              The Challenge: <?php echo htmlspecialchars($p['challenge_title']); ?>
            </h2>
            <p class="cs-block-text">
              <?php echo htmlspecialchars($p['challenge']); ?>
            </p>
            
            <ul class="cs-points-list">
              <?php foreach ($p['challenge_points'] as $point): ?>
                <li class="cs-point-item">
                  <i class="fa-solid fa-circle-xmark"></i>
                  <span><?php echo htmlspecialchars($point); ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>

          <!-- 3. The Solution -->
          <div class="cs-section-block">
            <h2 class="cs-block-title">
              <span class="cs-block-title-icon"><i class="fa-solid fa-lightbulb" style="color:#6BAB44;"></i></span>
              The Rankmator Solution: <?php echo htmlspecialchars($p['solution_title']); ?>
            </h2>
            <p class="cs-block-text">
              <?php echo htmlspecialchars($p['solution']); ?>
            </p>

            <div class="cs-steps-grid">
              <?php foreach ($p['solution_steps'] as $step): ?>
                <div class="cs-step-card">
                  <div class="cs-step-header">
                    <span class="cs-step-num">Step <?php echo htmlspecialchars($step['step_num']); ?></span>
                    <i class="fa-solid <?php echo htmlspecialchars($step['icon']); ?> cs-step-icon"></i>
                  </div>
                  <h4><?php echo htmlspecialchars($step['title']); ?></h4>
                  <p><?php echo htmlspecialchars($step['description']); ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- 4. Deliverables & Tools -->
          <div class="cs-section-block">
            <h2 class="cs-block-title">
              <span class="cs-block-title-icon"><i class="fa-solid fa-layer-group"></i></span>
              Key Deliverables &amp; Technology Stack
            </h2>
            <p class="cs-block-text">
              Our engineering and growth team deployed the following strategic deliverables and technologies to ensure scalable performance:
            </p>

            <div style="margin-bottom:18px;">
              <strong style="font-size:14px;color:var(--text-primary);display:block;margin-bottom:8px;">Scope of Services Delivered:</strong>
              <div class="cs-tags-wrapper">
                <?php foreach ($p['services_provided'] as $srv): ?>
                  <span class="cs-tool-tag"><i class="fa-solid fa-check"></i> <?php echo htmlspecialchars($srv); ?></span>
                <?php endforeach; ?>
              </div>
            </div>

            <div>
              <strong style="font-size:14px;color:var(--text-primary);display:block;margin-bottom:8px;">Stack, Tools &amp; Frameworks:</strong>
              <div class="cs-tags-wrapper">
                <?php foreach ($p['tech_stack'] as $tech): ?>
                  <span class="cs-tool-tag"><i class="fa-solid fa-microchip"></i> <?php echo htmlspecialchars($tech); ?></span>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

          <!-- 5. Measurable Results -->
          <div class="cs-section-block">
            <h2 class="cs-block-title">
              <span class="cs-block-title-icon"><i class="fa-solid fa-chart-line" style="color:#059669;"></i></span>
              Measurable Results &amp; Business Impact
            </h2>
            <p class="cs-block-text">
              The project yielded immediate and sustained business impact, establishing scalable market authority and exponential return on investment:
            </p>

            <ul class="cs-results-list">
              <?php foreach ($p['results'] as $res): ?>
                <li class="cs-result-item">
                  <i class="fa-solid fa-circle-check"></i>
                  <span><?php echo htmlspecialchars($res); ?></span>
                </li>
              <?php endforeach; ?>
            </ul>

            <div class="cs-milestones-grid">
              <?php foreach ($p['results_stats'] as $st): ?>
                <div class="cs-milestone-card">
                  <div class="cs-milestone-val"><?php echo htmlspecialchars($st['stat']); ?></div>
                  <div class="cs-milestone-label"><?php echo htmlspecialchars($st['label']); ?></div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- 6. Client Testimonial -->
          <div class="cs-testimonial-box">
            <div class="cs-stars-row">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <p class="cs-quote-text">
              "<?php echo htmlspecialchars($p['quote']); ?>"
            </p>
            <div class="cs-quote-meta">
              <div>
                <div class="cs-quote-author-name"><?php echo htmlspecialchars($p['quote_author']); ?></div>
                <div class="cs-quote-author-role"><?php echo htmlspecialchars($p['quote_role']); ?></div>
              </div>
            </div>
          </div>

        </main>

        <!-- RIGHT COLUMN: SIDEBAR WIDGETS -->
        <aside class="cs-sidebar">
          
          <!-- Quick Specs Widget -->
          <div class="cs-widget">
            <h3 class="cs-widget-title"><i class="fa-solid fa-circle-info" style="color:var(--primary);"></i> Project Overview</h3>
            <table class="cs-info-table">
              <tr>
                <th>Client:</th>
                <td><?php echo htmlspecialchars($p['title']); ?></td>
              </tr>
              <tr>
                <th>Industry:</th>
                <td><?php echo htmlspecialchars($p['industry']); ?></td>
              </tr>
              <tr>
                <th>Service Category:</th>
                <td><?php echo htmlspecialchars($p['service_category']); ?></td>
              </tr>
              <tr>
                <th>Timeline:</th>
                <td><?php echo htmlspecialchars($p['timeline']); ?></td>
              </tr>
              <tr>
                <th>Live Domain:</th>
                <td><a href="<?php echo htmlspecialchars($p['url']); ?>" target="_blank" rel="noopener noreferrer"><?php echo htmlspecialchars($p['display_url']); ?> <i class="fa-solid fa-arrow-up-right-from-square" style="font-size:11px;"></i></a></td>
              </tr>
              <tr>
                <th>Verification:</th>
                <td><span style="color:#059669;"><i class="fa-solid fa-shield-check"></i> <?php echo htmlspecialchars($p['verified']); ?></span></td>
              </tr>
            </table>
          </div>

          <!-- Live Website Link Widget -->
          <div class="cs-live-card">
            <h4>Inspect Live Deployment</h4>
            <p>Experience the live user interface, ranking authority, and mobile speed directly on the production website.</p>
            <a href="<?php echo htmlspecialchars($p['url']); ?>" target="_blank" rel="noopener noreferrer" class="cs-btn-visit-full">
              <i class="fa-solid fa-arrow-up-right-from-square"></i> Visit <?php echo htmlspecialchars($p['display_url']); ?>
            </a>
          </div>

          <!-- Free Strategy Audit Widget -->
          <div class="cs-widget" style="background: #f0fdf4; border-color: #bbf7d0;">
            <h3 class="cs-widget-title" style="color:#166534; border-color:#dcfce7;">
              <i class="fa-solid fa-bolt" style="color:var(--secondary);"></i> Free Growth Audit
            </h3>
            <p style="font-size:13px;color:#166534;line-height:1.6;margin-bottom:16px;">
              Want our technical team to analyze your website, competitor keyword gaps, and conversion funnel?
            </p>
            <a href="contact.php" class="btn-primary" style="display:block;text-align:center;padding:11px 16px;border-radius:50px;font-size:13.5px;text-decoration:none;">
              Get Free 48-Hour Audit
            </a>
          </div>

          <!-- Related Case Studies Widget -->
          <?php if (!empty($p['related_ids'])): ?>
            <div class="cs-widget">
              <h3 class="cs-widget-title"><i class="fa-solid fa-folder-open" style="color:var(--primary);"></i> Related Case Studies</h3>
              <div>
                <?php foreach ($p['related_ids'] as $rel_id): ?>
                  <?php if (isset($projects[$rel_id])): $rp = $projects[$rel_id]; ?>
                    <a href="<?php echo htmlspecialchars($rp['file']); ?>" class="cs-related-item">
                      <span class="cs-related-industry"><?php echo htmlspecialchars($rp['industry']); ?></span>
                      <span class="cs-related-title"><?php echo htmlspecialchars($rp['title']); ?> &rarr;</span>
                      <span class="cs-related-metric"><i class="fa-solid fa-chart-line" style="color:var(--secondary);"></i> <?php echo htmlspecialchars($rp['metric1_num'] . ' ' . $rp['metric1_label']); ?></span>
                    </a>
                  <?php endif; ?>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endif; ?>

        </aside>

      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
     GLOBAL BOTTOM CTA SECTION
═══════════════════════════════════════════ -->
  <section class="cs-cta-section">
    <div class="container">
      <h2>Ready to Build Your Next Digital Dominance Story?</h2>
      <p>Whether you need #1 organic search rankings, a high-converting website redesign, or an end-to-end performance growth system — our team is ready to deliver.</p>
      <div class="cs-cta-btns">
        <a href="contact.php" class="btn-cs-white">
          <i class="fa-solid fa-bolt"></i> Get Free Growth Audit
        </a>
        <a href="https://wa.me/919560864432" target="_blank" rel="noopener noreferrer" class="btn-cs-wa">
          <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
        </a>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>

</body>

</html>
