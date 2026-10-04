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

    /* ─── GOOGLE SEARCH CONSOLE INSIGHTS STYLES ─── */
    .cs-gsc-block {
      background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
      border: 1.5px solid #dbeafe;
      border-radius: 20px;
      padding: 32px 28px;
      margin-bottom: 45px;
      box-shadow: 0 10px 30px rgba(26, 115, 232, 0.06);
      position: relative;
      overflow: hidden;
    }

    .cs-gsc-block::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, #4285F4 0%, #34A853 33%, #FBBC05 66%, #EA4335 100%);
    }

    .cs-gsc-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      flex-wrap: wrap;
      gap: 15px;
      margin-bottom: 8px;
    }

    .cs-gsc-tag {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 12px;
      font-weight: 800;
      color: #1a73e8;
      text-transform: uppercase;
      letter-spacing: 0.6px;
      background: rgba(26, 115, 232, 0.1);
      padding: 4px 14px;
      border-radius: 50px;
      border: 1px solid rgba(26, 115, 232, 0.2);
    }

    .cs-gsc-period {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 13px;
      font-weight: 600;
      color: #64748b;
      margin-top: 4px;
    }

    .cs-gsc-badge-live {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 12px;
      font-weight: 700;
      color: #059669;
      background: #ecfdf5;
      border: 1px solid #a7f3d0;
      padding: 6px 14px;
      border-radius: 50px;
    }

    .cs-gsc-stats-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 14px;
      margin: 22px 0 26px;
    }

    .cs-gsc-stat-card {
      background: #ffffff;
      border: 1px solid #e2e8f0;
      border-radius: 14px;
      padding: 16px 14px;
      text-align: center;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
      transition: all 0.25s;
    }

    .cs-gsc-stat-card:hover {
      border-color: #1a73e8;
      transform: translateY(-2px);
      box-shadow: 0 6px 18px rgba(26, 115, 232, 0.1);
    }

    .cs-gsc-stat-val {
      font-size: 24px;
      font-weight: 900;
      color: #1a73e8;
      line-height: 1.1;
      margin-bottom: 4px;
    }

    .cs-gsc-stat-label {
      font-size: 11px;
      font-weight: 700;
      color: #475569;
      text-transform: uppercase;
      letter-spacing: 0.3px;
    }

    .cs-gsc-stat-sub {
      font-size: 11px;
      font-weight: 600;
      color: #059669;
      margin-top: 5px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 4px;
    }

    .cs-gsc-chart-card {
      background: #ffffff;
      border: 1px solid #cbd5e1;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
    }

    .cs-gsc-chrome {
      background: #f1f5f9;
      padding: 10px 16px;
      border-bottom: 1px solid #e2e8f0;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
    }

    .cs-chrome-dots {
      display: flex;
      gap: 6px;
    }

    .cs-chrome-dots span {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: #cbd5e1;
    }

    .cs-chrome-dots span:nth-child(1) { background: #ff5f56; }
    .cs-chrome-dots span:nth-child(2) { background: #ffbd2e; }
    .cs-chrome-dots span:nth-child(3) { background: #27c93f; }

    .cs-chrome-title {
      font-size: 12.5px;
      font-weight: 700;
      color: #334155;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .cs-gsc-zoom-btn {
      background: #ffffff;
      border: 1px solid #cbd5e1;
      color: #1e293b;
      font-size: 11.5px;
      font-weight: 700;
      padding: 4px 12px;
      border-radius: 6px;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 5px;
      transition: all 0.2s;
    }

    .cs-gsc-zoom-btn:hover {
      background: #1a73e8;
      border-color: #1a73e8;
      color: #fff;
    }

    .cs-gsc-img-wrap {
      position: relative;
      cursor: zoom-in;
      background: #fafafa;
      overflow: hidden;
    }

    .cs-gsc-img {
      width: 100%;
      height: auto;
      display: block;
      transition: transform 0.35s ease;
    }

    .cs-gsc-img-wrap:hover .cs-gsc-img {
      transform: scale(1.02);
    }

    .cs-gsc-overlay-hint {
      position: absolute;
      bottom: 16px;
      right: 16px;
      opacity: 0.9;
      pointer-events: none;
      transition: opacity 0.2s;
    }

    .cs-gsc-img-wrap:hover .cs-gsc-overlay-hint {
      opacity: 1;
    }

    .cs-gsc-hint-badge {
      background: rgba(15, 23, 42, 0.85);
      backdrop-filter: blur(8px);
      color: #fff;
      font-size: 12px;
      font-weight: 700;
      padding: 6px 14px;
      border-radius: 50px;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .cs-gsc-footer-note {
      background: #f8fafc;
      padding: 12px 18px;
      border-top: 1px solid #f1f5f9;
      font-size: 12.5px;
      color: #64748b;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    /* ─── LIVE WEBSITE MOCKUP SHOWCASE ─── */
    .cs-site-preview-block {
      background: #ffffff;
      border: 1.5px solid #e2e8f0;
      border-radius: 20px;
      overflow: hidden;
      margin-bottom: 28px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      padding: 0 !important;
    }

    .cs-browser-chrome {
      background: #0f172a;
      padding: 12px 18px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .cs-browser-dots {
      display: flex;
      gap: 6px;
    }

    .cs-browser-dots span {
      width: 11px;
      height: 11px;
      border-radius: 50%;
      display: inline-block;
    }

    .cs-browser-dots span:nth-child(1) { background: #ef4444; }
    .cs-browser-dots span:nth-child(2) { background: #f59e0b; }
    .cs-browser-dots span:nth-child(3) { background: #10b981; }

    .cs-browser-address-bar {
      flex: 1;
      max-width: 480px;
      background: rgba(255, 255, 255, 0.12);
      border: 1px solid rgba(255, 255, 255, 0.18);
      border-radius: 50px;
      padding: 5px 14px;
      font-size: 12px;
      color: #e2e8f0;
      display: flex;
      align-items: center;
      gap: 8px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .cs-browser-link-btn {
      color: #a3d977;
      font-size: 12px;
      font-weight: 700;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 5px;
      padding: 4px 12px;
      border-radius: 50px;
      background: rgba(107, 171, 68, 0.22);
      border: 1px solid rgba(107, 171, 68, 0.45);
      transition: all 0.2s;
    }

    .cs-browser-link-btn:hover {
      background: var(--secondary);
      color: #fff;
    }

    .cs-browser-viewport {
      background: #f1f5f9;
      position: relative;
      overflow: hidden;
      width: 100%;
    }

    .cs-browser-img {
      width: 100%;
      height: auto;
      display: block;
      transition: transform 0.4s ease;
    }

    .cs-site-preview-block:hover .cs-browser-img {
      transform: scale(1.01);
    }

    .cs-browser-footer {
      background: #f8fafc;
      padding: 12px 20px;
      border-top: 1px solid #f1f5f9;
      font-size: 12.5px;
      color: #64748b;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .cs-live-card-thumb {
      width: 100%;
      border-radius: 12px;
      overflow: hidden;
      margin-bottom: 16px;
      border: 1.5px solid rgba(255, 255, 255, 0.25);
      box-shadow: 0 4px 14px rgba(0, 0, 0, 0.25);
    }

    .cs-live-card-thumb img {
      width: 100%;
      height: 140px;
      object-fit: cover;
      object-position: top center;
      display: block;
      transition: transform 0.3s ease;
    }

    .cs-live-card:hover .cs-live-card-thumb img {
      transform: scale(1.05);
    }

    /* ─── LIGHTBOX MODAL ─── */
    .cs-insight-lightbox {
      position: fixed;
      inset: 0;
      background: rgba(7, 30, 51, 0.92);
      backdrop-filter: blur(10px);
      z-index: 999999;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 30px;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
    }

    .cs-insight-lightbox.active {
      opacity: 1;
      visibility: visible;
    }

    .cs-lightbox-content {
      background: #ffffff;
      border-radius: 20px;
      max-width: 1100px;
      width: 100%;
      max-height: 92vh;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      box-shadow: 0 25px 60px rgba(0, 0, 0, 0.4);
      position: relative;
      transform: scale(0.95);
      transition: transform 0.3s ease;
    }

    .cs-insight-lightbox.active .cs-lightbox-content {
      transform: scale(1);
    }

    .cs-lightbox-header {
      padding: 16px 24px;
      background: #f8fafc;
      border-bottom: 1px solid #e2e8f0;
      font-size: 15px;
      font-weight: 800;
      color: #0f172a;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .cs-lightbox-close {
      position: absolute;
      top: 12px;
      right: 16px;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: #ffffff;
      border: 1px solid #cbd5e1;
      color: #0f172a;
      font-size: 20px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 10;
      transition: all 0.2s;
    }

    .cs-lightbox-close:hover {
      background: #fee2e2;
      color: #dc2626;
      border-color: #fca5a5;
    }

    .cs-lightbox-body {
      padding: 16px;
      overflow: auto;
      max-height: calc(92vh - 60px);
      background: #f1f5f9;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .cs-lightbox-body img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 768px) {
      .cs-gsc-stats-grid {
        grid-template-columns: repeat(2, 1fr);
      }
      .cs-gsc-block {
        padding: 22px 16px;
      }
      .cs-insight-lightbox {
        padding: 12px;
      }
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

          <!-- Google Search Console Performance Insights (If Available) -->
          <?php if (!empty($p['insight_image'])): ?>
            <div class="cs-section-block cs-gsc-block">
              <div class="cs-gsc-header">
                <div>
                  <div class="cs-gsc-tag">
                    <i class="fa-brands fa-google"></i> Verified Google Search Console Data
                  </div>
                  <h2 class="cs-block-title" style="margin-top: 10px; margin-bottom: 4px;">
                    <span class="cs-block-title-icon" style="background: rgba(26, 115, 232, 0.12); color: #1a73e8;">
                      <i class="fa-solid fa-chart-line-up"></i>
                    </span>
                    <?php echo htmlspecialchars($p['insight_title'] ?? 'Google Search Console Growth Performance'); ?>
                  </h2>
                  <span class="cs-gsc-period"><i class="fa-regular fa-calendar-check"></i> <?php echo htmlspecialchars($p['insight_period'] ?? 'Performance Report (Web Search)'); ?></span>
                </div>
                <span class="cs-gsc-badge-live"><i class="fa-solid fa-circle-check"></i> Verified Data</span>
              </div>

              <p class="cs-block-text" style="margin-top: 14px; margin-bottom: 18px;">
                <?php echo htmlspecialchars($p['insight_summary'] ?? 'Live Google Search Console verification demonstrating significant organic clicks, ranking gains, and impressions trajectory.'); ?>
              </p>

              <?php if (!empty($p['insight_stats'])): ?>
                <div class="cs-gsc-stats-grid">
                  <?php foreach ($p['insight_stats'] as $istat): ?>
                    <div class="cs-gsc-stat-card">
                      <div class="cs-gsc-stat-val"><?php echo htmlspecialchars($istat['val']); ?></div>
                      <div class="cs-gsc-stat-label"><?php echo htmlspecialchars($istat['label']); ?></div>
                      <?php if (!empty($istat['sub'])): ?>
                        <div class="cs-gsc-stat-sub"><i class="fa-solid fa-arrow-trend-up"></i> <?php echo htmlspecialchars($istat['sub']); ?></div>
                      <?php endif; ?>
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>

              <div class="cs-gsc-chart-card">
                <div class="cs-gsc-chrome">
                  <div class="cs-chrome-dots">
                    <span></span><span></span><span></span>
                  </div>
                  <div class="cs-chrome-title">
                    <i class="fa-brands fa-google" style="color:#4285F4;"></i> Google Search Console — Performance (Search type: Web)
                  </div>
                  <div class="cs-chrome-action">
                    <button type="button" class="cs-gsc-zoom-btn" onclick="openInsightModal('<?php echo htmlspecialchars($p['insight_image']); ?>', '<?php echo htmlspecialchars(addslashes($p['title'])); ?> — Search Console Performance Report')">
                      <i class="fa-solid fa-expand"></i> Enlarge
                    </button>
                  </div>
                </div>

                <div class="cs-gsc-img-wrap" onclick="openInsightModal('<?php echo htmlspecialchars($p['insight_image']); ?>', '<?php echo htmlspecialchars(addslashes($p['title'])); ?> — Search Console Performance Report')">
                  <img src="<?php echo htmlspecialchars($p['insight_image']); ?>" alt="<?php echo htmlspecialchars($p['title']); ?> Google Search Console Performance Report" class="cs-gsc-img" loading="lazy" />
                  <div class="cs-gsc-overlay-hint">
                    <span class="cs-gsc-hint-badge"><i class="fa-solid fa-magnifying-glass-plus"></i> Click to Enlarge Report</span>
                  </div>
                </div>

                <div class="cs-gsc-footer-note">
                  <i class="fa-solid fa-shield-halved" style="color: #10b981; font-size: 15px;"></i>
                  <span><strong>Rankmator SEO Engine:</strong> Data verified directly from Google Search Console property tracking live search queries, clicks, and ranking impressions.</span>
                </div>
              </div>

            </div>
          <?php endif; ?>
          
          <!-- Live Website Interface Showcase -->
          <?php if (!empty($p['thumb_image'])): ?>
            <div class="cs-section-block cs-site-preview-block">
              <div class="cs-browser-chrome">
                <div class="cs-browser-dots">
                  <span></span><span></span><span></span>
                </div>
                <div class="cs-browser-address-bar">
                  <i class="fa-solid fa-lock" style="color:#10b981;font-size:11px;"></i> https://<?php echo htmlspecialchars($p['display_url']); ?>
                </div>
                <a href="<?php echo htmlspecialchars($p['url']); ?>" target="_blank" rel="noopener noreferrer" class="cs-browser-link-btn" title="Visit live production site in a new tab">
                  <i class="fa-solid fa-arrow-up-right-from-square"></i> Visit Live
                </a>
              </div>
              <div class="cs-browser-viewport">
                <img src="<?php echo htmlspecialchars($p['thumb_image']); ?>" alt="<?php echo htmlspecialchars($p['title']); ?> Live Website Interface Showcase" class="cs-browser-img" loading="lazy" />
              </div>
              <div class="cs-browser-footer">
                <i class="fa-solid fa-laptop-code" style="color:var(--primary);font-size:15px;"></i>
                <span><strong>Live Production Deployment:</strong> Fully responsive UI architecture, Core Web Vitals optimized, and structured search schema.</span>
              </div>
            </div>
          <?php endif; ?>

          <!-- 1. Client Overview -->
          <div class="cs-section-block">
            <h2 class="cs-block-title">
              <span class="cs-block-title-icon"><i class="fa-solid fa-building"></i></span>
              Project Overview &amp; Client Brief
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
              Execution &amp; Strategy: <?php echo htmlspecialchars($p['solution_title']); ?>
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
              Our engineering and design team deployed the following strategic deliverables and technologies to ensure high-speed, reliable performance:
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
              Verified Outcomes &amp; Technical Milestones
            </h2>
            <p class="cs-block-text">
              Key verified deliverables and performance outcomes achieved upon deployment:
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

          <!-- 6. Client Feedback -->
          <?php if (!empty($p['quote'])): ?>
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
          <?php endif; ?>

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
            <?php if (!empty($p['thumb_image'])): ?>
              <div class="cs-live-card-thumb">
                <img src="<?php echo htmlspecialchars($p['thumb_image']); ?>" alt="<?php echo htmlspecialchars($p['title']); ?> Website Preview" loading="lazy" />
              </div>
            <?php endif; ?>
            <h4>Inspect Live Deployment</h4>
            <p>Experience the live user interface, ranking authority, and mobile speed directly on the production website.</p>
            <a href="<?php echo htmlspecialchars($p['url']); ?>" target="_blank" rel="noopener noreferrer" class="cs-btn-visit-full">
              <i class="fa-solid fa-arrow-up-right-from-square"></i> Visit <?php echo htmlspecialchars($p['display_url']); ?>
            </a>
          </div>

          <?php if (!empty($p['insight_image'])): ?>
            <!-- GSC Verified Widget -->
            <div class="cs-widget" style="background: linear-gradient(135deg, #f0f7ff 0%, #e0effe 100%); border-color: #bfdbfe;">
              <h3 class="cs-widget-title" style="color: #1d4ed8; border-color: #dbeafe;">
                <i class="fa-brands fa-google" style="color: #2563eb;"></i> Live GSC Insights
              </h3>
              <p style="font-size: 13px; color: #1e40af; line-height: 1.5; margin-bottom: 12px;">
                Verified Search Console growth report attached for this property.
              </p>
              <button type="button" onclick="openInsightModal('<?php echo htmlspecialchars($p['insight_image']); ?>', '<?php echo htmlspecialchars(addslashes($p['title'])); ?> — Search Performance')" class="cs-btn-visit-full" style="background: #2563eb; color: #fff; border: none; cursor: pointer;">
                <i class="fa-solid fa-chart-line"></i> View GSC Screenshot
              </button>
            </div>
          <?php endif; ?>

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

  <!-- Lightbox Modal for Insights Image -->
  <div id="insightLightbox" class="cs-insight-lightbox" onclick="closeInsightModal(event)">
    <div class="cs-lightbox-content" onclick="event.stopPropagation()">
      <button class="cs-lightbox-close" onclick="closeInsightModal()">&times;</button>
      <div class="cs-lightbox-header" id="lightboxTitle">
        <i class="fa-brands fa-google" style="color:#4285F4;"></i> Google Search Console Performance Report
      </div>
      <div class="cs-lightbox-body">
        <img id="lightboxImg" src="" alt="SEO Insights Report" />
      </div>
    </div>
  </div>

  <script>
    function openInsightModal(src, title) {
      var lightbox = document.getElementById('insightLightbox');
      var img = document.getElementById('lightboxImg');
      var titleEl = document.getElementById('lightboxTitle');
      if (lightbox && img) {
        img.src = src;
        if (title && titleEl) {
          titleEl.innerHTML = '<i class="fa-brands fa-google" style="color:#4285F4;"></i> ' + title;
        }
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
      }
    }

    function closeInsightModal(e) {
      var lightbox = document.getElementById('insightLightbox');
      if (lightbox) {
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
      }
    }

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') {
        closeInsightModal();
      }
    });
  </script>

  <?php include 'footer.php'; ?>

</body>

</html>
