<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Meet Our Team | Rankmator — Digital Marketing & Growth Specialists</title>
  <meta name="description"
    content="Meet the powerhouse team behind Rankmator. Experienced brand strategists, SEO specialists, paid media experts, and full-stack AI developers driving transformational growth for 300+ brands." />
  <?php include 'links.php'; ?>

  <style>
    /* ─── TEAM PAGE CUSTOM STYLING ─── */
    .team-hero {
      background: var(--gradient-hero);
      padding: 90px 0 110px;
      position: relative;
      overflow: hidden;
      text-align: center;
      color: #fff;
    }

    .team-hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image: radial-gradient(circle, rgba(255, 255, 255, 0.06) 1px, transparent 1px);
      background-size: 32px 32px;
      pointer-events: none;
    }

    .team-hero-badge {
      background: rgba(107, 171, 68, 0.15);
      border: 1px solid rgba(107, 171, 68, 0.4);
      color: #a3d977;
      padding: 8px 22px;
      border-radius: 50px;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      font-size: 14px;
      font-weight: 700;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      margin-bottom: 24px;
    }

    .team-hero-dot {
      width: 8px;
      height: 8px;
      background: #6BAB44;
      border-radius: 50%;
      box-shadow: 0 0 10px #6BAB44;
      animation: pulse 2s infinite;
    }

    .team-hero h1 {
      font-size: clamp(32px, 5vw, 56px);
      font-weight: 900;
      line-height: 1.2;
      margin-bottom: 22px;
    }

    .team-hero h1 span {
      background: linear-gradient(135deg, #a3d977 0%, #6BAB44 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .team-hero p {
      font-size: 18px;
      color: rgba(255, 255, 255, 0.88);
      max-width: 720px;
      margin: 0 auto 36px;
      line-height: 1.7;
    }

    .team-hero-stats {
      display: inline-flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 16px;
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.15);
      padding: 12px 28px;
      border-radius: 100px;
      backdrop-filter: blur(10px);
    }

    .hero-stat-chip {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 14px;
      font-weight: 600;
      color: #fff;
    }

    .hero-stat-chip i {
      color: var(--secondary);
    }

    .hero-stat-divider {
      width: 1px;
      height: 18px;
      background: rgba(255, 255, 255, 0.25);
    }

    /* ─── TEAM GRID SECTION ─── */
    .team-section {
      padding: 90px 0;
      background: #f8fafc;
      position: relative;
    }

    .team-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 36px;
      margin-top: 50px;
      max-width: 1100px;
      margin-left: auto;
      margin-right: auto;
    }

    .team-card {
      background: #ffffff;
      border-radius: 24px;
      overflow: hidden;
      border: 1px solid #e2e8f0;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
      display: flex;
      flex-direction: column;
      position: relative;
    }

    .team-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 50px rgba(8, 104, 160, 0.12);
      border-color: rgba(8, 104, 160, 0.3);
    }

    .team-card-header {
      background: linear-gradient(135deg, #0868A0 0%, #054e78 100%);
      padding: 36px 24px 28px;
      text-align: center;
      position: relative;
      color: #fff;
      overflow: hidden;
    }

    .team-card-header.accent-2 {
      background: linear-gradient(135deg, #054e78 0%, #033653 100%);
    }

    .team-card-header.accent-3 {
      background: linear-gradient(135deg, #0868A0 0%, #6BAB44 100%);
    }

    .team-card-header.accent-4 {
      background: linear-gradient(135deg, #043d5e 0%, #0868A0 100%);
    }

    .team-card-header::after {
      content: '';
      position: absolute;
      bottom: -20px;
      left: 0;
      right: 0;
      height: 40px;
      background: #ffffff;
      border-radius: 30px 30px 0 0;
    }

    .team-avatar-box {
      width: 96px;
      height: 96px;
      border-radius: 50%;
      margin: 0 auto 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(255, 255, 255, 0.15);
      border: 3px solid rgba(255, 255, 255, 0.6);
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
      font-size: 34px;
      font-weight: 900;
      color: #fff;
      position: relative;
      z-index: 2;
    }

    .team-avatar-icon {
      position: absolute;
      bottom: -4px;
      right: -4px;
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: var(--secondary);
      border: 2px solid #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
      color: #fff;
    }

    .team-badge {
      display: inline-block;
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.8px;
      padding: 4px 12px;
      border-radius: 50px;
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
      position: relative;
      z-index: 2;
    }

    .team-card-body {
      padding: 10px 28px 28px;
      flex: 1;
      display: flex;
      flex-direction: column;
      text-align: center;
      background: #fff;
      position: relative;
      z-index: 1;
    }

    .team-name {
      font-size: 22px;
      font-weight: 800;
      color: var(--text-primary);
      margin-bottom: 4px;
    }

    .team-role {
      font-size: 14px;
      font-weight: 700;
      color: var(--primary);
      margin-bottom: 16px;
      display: block;
    }

    .team-bio {
      font-size: 13.5px;
      color: var(--text-secondary);
      line-height: 1.65;
      margin-bottom: 22px;
      text-align: left;
    }

    .team-skills-title {
      font-size: 11px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      color: #94a3b8;
      text-align: left;
      margin-bottom: 8px;
      display: block;
    }

    .team-skills {
      display: flex;
      flex-wrap: wrap;
      gap: 6px;
      margin-bottom: 24px;
    }

    .skill-tag {
      font-size: 11.5px;
      font-weight: 600;
      background: #f1f5f9;
      color: #334155;
      padding: 4px 10px;
      border-radius: 6px;
      border: 1px solid #e2e8f0;
      transition: all 0.2s ease;
    }

    .team-card:hover .skill-tag {
      background: var(--bg-blue-light);
      border-color: rgba(8, 104, 160, 0.2);
      color: var(--primary);
    }

    .team-card-footer {
      margin-top: auto;
      padding-top: 16px;
      border-top: 1px solid #f1f5f9;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .team-socials {
      display: flex;
      gap: 10px;
    }

    .team-social-link {
      width: 34px;
      height: 34px;
      border-radius: 8px;
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #64748b;
      font-size: 14px;
      text-decoration: none;
      transition: all 0.2s ease;
    }

    .team-social-link:hover {
      background: var(--primary);
      color: #fff;
      border-color: var(--primary);
    }

    .team-contact-btn {
      font-size: 12.5px;
      font-weight: 700;
      color: var(--primary);
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      transition: gap 0.2s;
    }

    .team-contact-btn:hover {
      color: var(--secondary);
      gap: 10px;
    }

    /* ─── CULTURE & VALUES ─── */
    .culture-section {
      padding: 90px 0;
      background: #ffffff;
    }

    .culture-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 28px;
      margin-top: 48px;
    }

    .culture-card {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 20px;
      padding: 32px 26px;
      transition: all 0.3s ease;
    }

    .culture-card:hover {
      background: #fff;
      transform: translateY(-6px);
      box-shadow: 0 16px 36px rgba(0, 0, 0, 0.06);
      border-color: var(--secondary);
    }

    .culture-icon {
      width: 56px;
      height: 56px;
      border-radius: 14px;
      background: var(--bg-blue-light);
      color: var(--primary);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      margin-bottom: 20px;
      transition: all 0.3s;
    }

    .culture-card:hover .culture-icon {
      background: var(--secondary);
      color: #fff;
    }

    .culture-card h3 {
      font-size: 19px;
      font-weight: 800;
      color: var(--text-primary);
      margin-bottom: 10px;
    }

    .culture-card p {
      font-size: 14px;
      color: var(--text-secondary);
      line-height: 1.6;
    }

    /* ─── RESPONSIVE OVERRIDES ─── */
    @media (max-width: 768px) {
      .team-hero {
        padding: 50px 0 70px;
      }

      .team-hero-stats {
        border-radius: 16px;
        padding: 12px 18px;
        gap: 10px;
      }

      .hero-stat-divider {
        display: none;
      }

      .team-section {
        padding: 50px 0;
      }

      .team-grid {
        grid-template-columns: 1fr;
        gap: 24px;
      }

      .culture-section {
        padding: 50px 0;
      }

      .culture-grid {
        grid-template-columns: 1fr;
        gap: 20px;
      }
    }
  </style>
</head>

<body>

  <?php include 'header.php'; ?>

  <!-- ═══════════════════════════════════════════
     HERO SECTION
═══════════════════════════════════════════ -->
  <section class="team-hero">
    <div class="hero-orbs">
      <div class="orb orb-1"></div>
      <div class="orb orb-2"></div>
      <div class="orb orb-3"></div>
    </div>
    <div class="container" style="position:relative;z-index:2;">
      <div class="team-hero-badge">
        <div class="team-hero-dot"></div>
        The Growth Architects
      </div>
      <h1>Meet the Minds Behind Your<br /><span>Digital Dominance.</span></h1>
      <p>A specialized squad of brand strategists, technical SEO masters, paid acquisition specialists, and full-stack AI developers focused on one singular mission: your exponential revenue growth.</p>
      
      <div class="team-hero-stats">
        <div class="hero-stat-chip">
          <i class="fa-solid fa-chart-line"></i> 300+ Brands Scaled
        </div>
        <div class="hero-stat-divider"></div>
        <div class="hero-stat-chip">
          <i class="fa-solid fa-trophy"></i> 5+ Years of Results
        </div>
        <div class="hero-stat-divider"></div>
        <div class="hero-stat-chip">
          <i class="fa-solid fa-bolt"></i> 4x Avg. ROAS
        </div>
        <div class="hero-stat-divider"></div>
        <div class="hero-stat-chip">
          <i class="fa-solid fa-users"></i> 100% In-House Team
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
     TEAM MEMBERS SECTION
═══════════════════════════════════════════ -->
  <section class="team-section">
    <div class="container">
      <div class="section-header fade-in">
        <div class="section-tag">Our Core Team</div>
        <h2 class="section-title">Passionate Experts. Measurable Impact.</h2>
        <p class="section-subtitle">No account managers reading scripts or outsourced guesswork. You collaborate directly with practitioners who strategize, build, execute, and deliver results.</p>
      </div>

      <div class="team-grid">

        <!-- 1. Noor Ansari -->
        <div class="team-card fade-in">
          <div class="team-card-header">
            <div class="team-avatar-box">
              NA
              <div class="team-avatar-icon"><i class="fa-solid fa-palette"></i></div>
            </div>
            <span class="team-badge">Brand Strategist</span>
          </div>
          <div class="team-card-body">
            <h3 class="team-name">Noor Ansari</h3>
            <span class="team-role">Brand Specialist &amp; Creative Strategist</span>
            <p class="team-bio">
              Specializing in high-impact brand identities, conversion narratives, and market positioning strategies that make brands stand out in crowded industries and convert attention into brand loyalty.
            </p>
            <span class="team-skills-title">Core Competencies</span>
            <div class="team-skills">
              <span class="skill-tag">Brand Identity</span>
              <span class="skill-tag">Creative Strategy</span>
              <span class="skill-tag">Brand Positioning</span>
              <span class="skill-tag">Content Direction</span>
            </div>
            <div class="team-card-footer">
              <div class="team-socials">
                <a href="https://api.whatsapp.com/send?phone=919560864432&text=Hi%20Noor!" target="_blank" class="team-social-link" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="mailto:rankmator@gmail.com" class="team-social-link" title="Email"><i class="fa-solid fa-envelope"></i></a>
                <a href="tel:+919560864432" class="team-social-link" title="Call"><i class="fa-solid fa-phone"></i></a>
              </div>
              <a href="contact.php" class="team-contact-btn">Connect <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <!-- 2. Saurabh Gupta -->
        <div class="team-card fade-in fade-in-delay-1">
          <div class="team-card-header accent-2">
            <div class="team-avatar-box">
              SG
              <div class="team-avatar-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
            </div>
            <span class="team-badge">SEO Lead</span>
          </div>
          <div class="team-card-body">
            <h3 class="team-name">Saurabh Gupta</h3>
            <span class="team-role">SEO Executive &amp; Search Strategist</span>
            <p class="team-bio">
              Data-driven organic search specialist mastering deep technical SEO audits, high-intent keyword mapping, link velocity frameworks, and enterprise crawl optimization to achieve sustainable #1 rankings.
            </p>
            <span class="team-skills-title">Core Competencies</span>
            <div class="team-skills">
              <span class="skill-tag">Technical SEO</span>
              <span class="skill-tag">Keyword Strategy</span>
              <span class="skill-tag">Link Building</span>
              <span class="skill-tag">Google Algorithms</span>
            </div>
            <div class="team-card-footer">
              <div class="team-socials">
                <a href="https://api.whatsapp.com/send?phone=919560864432&text=Hi%20Saurabh!" target="_blank" class="team-social-link" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="mailto:rankmator@gmail.com" class="team-social-link" title="Email"><i class="fa-solid fa-envelope"></i></a>
                <a href="tel:+919560864432" class="team-social-link" title="Call"><i class="fa-solid fa-phone"></i></a>
              </div>
              <a href="contact.php" class="team-contact-btn">Connect <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <!-- 3. Pooja Thakur -->
        <div class="team-card fade-in fade-in-delay-2">
          <div class="team-card-header accent-3">
            <div class="team-avatar-box">
              PT
              <div class="team-avatar-icon"><i class="fa-solid fa-bullhorn"></i></div>
            </div>
            <span class="team-badge">Paid Media</span>
          </div>
          <div class="team-card-body">
            <h3 class="team-name">Pooja Thakur</h3>
            <span class="team-role">Social &amp; Paid Marketer</span>
            <p class="team-bio">
              Performance marketing architect executing precision Meta Ads, Google PPC, and social campaign funnels engineered to lower customer acquisition costs (CAC) and scale return on ad spend (ROAS).
            </p>
            <span class="team-skills-title">Core Competencies</span>
            <div class="team-skills">
              <span class="skill-tag">Meta Ads</span>
              <span class="skill-tag">Google Ads</span>
              <span class="skill-tag">Social Growth</span>
              <span class="skill-tag">Funnel Optimization</span>
            </div>
            <div class="team-card-footer">
              <div class="team-socials">
                <a href="https://www.linkedin.com/in/pooja-thakur-b69b6418b/" target="_blank" class="team-social-link" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://api.whatsapp.com/send?phone=919560864432&text=Hi%20Pooja!" target="_blank" class="team-social-link" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="mailto:rankmator@gmail.com" class="team-social-link" title="Email"><i class="fa-solid fa-envelope"></i></a>
                <a href="tel:+919560864432" class="team-social-link" title="Call"><i class="fa-solid fa-phone"></i></a>
              </div>
              <a href="contact.php" class="team-contact-btn">Connect <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <!-- 4. Manish Kushwaha -->
        <div class="team-card fade-in fade-in-delay-3">
          <div class="team-card-header accent-4">
            <div class="team-avatar-box">
              MK
              <div class="team-avatar-icon"><i class="fa-solid fa-code"></i></div>
            </div>
            <span class="team-badge">Tech &amp; AI</span>
          </div>
          <div class="team-card-body">
            <h3 class="team-name">Manish Kushwaha</h3>
            <span class="team-role">Developer &amp; AI Automation Specialist</span>
            <p class="team-bio">
              Full-stack engineer and automation builder crafting ultra-fast web experiences, custom marketing technology integrations, automated lead workflows, and state-of-the-art AI marketing pipelines.
            </p>
            <span class="team-skills-title">Core Competencies</span>
            <div class="team-skills">
              <span class="skill-tag">Full-Stack Dev</span>
              <span class="skill-tag">AI Automation</span>
              <span class="skill-tag">MarTech Pipelines</span>
              <span class="skill-tag">Speed &amp; CRO</span>
            </div>
            <div class="team-card-footer">
              <div class="team-socials">
                <a href="https://www.linkedin.com/in/manish-kushwahaa/" target="_blank" class="team-social-link" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://api.whatsapp.com/send?phone=919560864432&text=Hi%20Manish!" target="_blank" class="team-social-link" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="mailto:rankmator@gmail.com" class="team-social-link" title="Email"><i class="fa-solid fa-envelope"></i></a>
                <a href="tel:+919560864432" class="team-social-link" title="Call"><i class="fa-solid fa-phone"></i></a>
              </div>
              <a href="contact.php" class="team-contact-btn">Connect <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
     OUR VALUES & CULTURE
═══════════════════════════════════════════ -->
  <section class="culture-section">
    <div class="container">
      <div class="section-header fade-in">
        <div class="section-tag">Why Work With Us</div>
        <h2 class="section-title">The Principles Driving Our Results</h2>
        <p class="section-subtitle">We believe digital marketing should be transparent, scientific, and relentless about generating revenue.</p>
      </div>

      <div class="culture-grid">
        <div class="culture-card fade-in">
          <div class="culture-icon"><i class="fa-solid fa-bullseye"></i></div>
          <h3>Zero Fluff, 100% Impact</h3>
          <p>We don't sell vanity metrics or empty retainers. Every campaign we launch has clear ROI benchmarks attached.</p>
        </div>

        <div class="culture-card fade-in fade-in-delay-1">
          <div class="culture-icon"><i class="fa-solid fa-chart-pie"></i></div>
          <h3>Data-First Execution</h3>
          <p>Decisions are backed by rigorous data analysis, search patterns, and behavioral analytics — never guesswork.</p>
        </div>

        <div class="culture-card fade-in fade-in-delay-2">
          <div class="culture-icon"><i class="fa-solid fa-microchip"></i></div>
          <h3>AI &amp; Automation Edge</h3>
          <p>We integrate intelligent AI tools and custom automation to execute faster, analyze deeper, and scale effortlessly.</p>
        </div>

        <div class="culture-card fade-in fade-in-delay-3">
          <div class="culture-icon"><i class="fa-solid fa-handshake"></i></div>
          <h3>True Growth Partners</h3>
          <p>We treat your business like our own. Continuous communication, weekly insights, and agile strategy pivoting.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
     FOOTER
═══════════════════════════════════════════ -->
  <?php include 'footer.php'; ?>

</body>

</html>
