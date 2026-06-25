<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Uss | Rankmator — Digital Marketing Agency</title>
  <meta name="description"
    content="Get in touch with Rankmator's digital marketing experts. We're here to help you grow your business with SEO, Google Ads, Social Media, and Performance Marketing services." />
  <?php include 'links.php'; ?>
  <style>
    /* ── Contact Page Styles ── */
    .contact-hero {
      background: var(--gradient-hero);
      padding: 80px 0 100px;
      position: relative;
      overflow: hidden;
      text-align: center;
    }

    .contact-hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');
      opacity: 0.1;
    }

    .contact-hero-badge {
      background: rgba(107, 171, 68, 0.12);
      border: 1px solid rgba(107, 171, 68, 0.35);
      color: var(--secondary);
      padding: 8px 20px;
      border-radius: 50px;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 14px;
      font-weight: 600;
      margin-bottom: 24px;
    }

    .contact-hero-dot {
      width: 8px;
      height: 8px;
      background: var(--secondary);
      border-radius: 50%;
      box-shadow: 0 0 10px var(--secondary);
      animation: pulse 2s infinite;
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

    .contact-hero h1 {
      font-size: clamp(36px, 5vw, 62px);
      font-weight: 900;
      color: #fff;
      margin-bottom: 20px;
      line-height: 1.15;
    }

    .contact-hero p {
      font-size: 20px;
      color: rgba(255, 255, 255, 0.85);
      max-width: 650px;
      margin: 0 auto 40px;
      line-height: 1.7;
    }

    /* ── Quick Contact Pillars ── */
    .contact-pillars {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 24px;
      margin-top: -60px;
      position: relative;
      z-index: 10;
      margin-bottom: 60px;
    }

    .pillar-card {
      background: #fff;
      border-radius: 20px;
      padding: 36px 28px;
      text-align: center;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
      border: 1px solid #f0f0f0;
      transition: all 0.3s;
    }

    .pillar-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 50px rgba(107, 171, 68, 0.12);
      border-color: var(--secondary);
    }

    .pillar-icon {
      width: 64px;
      height: 64px;
      background: linear-gradient(135deg, var(--primary), var(--primary-dark));
      border-radius: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 26px;
      color: #fff;
      margin: 0 auto 20px;
    }

    .pillar-card h3 {
      font-size: 16px;
      font-weight: 700;
      color: #64748b;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      margin-bottom: 8px;
    }

    .pillar-card a,
    .pillar-card p {
      font-size: 17px;
      font-weight: 600;
      color: var(--text-primary);
      text-decoration: none;
      display: block;
      margin: 4px 0;
    }

    .pillar-card a:hover {
      color: var(--secondary);
    }

    /* ── Main Contact Layout ── */
    .main-contact-layout {
      display: grid;
      grid-template-columns: 1fr 1.5fr;
      gap: 50px;
      align-items: start;
    }

    @media (max-width: 900px) {
      .main-contact-layout {
        grid-template-columns: 1fr;
      }
    }

    /* ── Left Info Panel ── */
    .contact-left-panel {
      display: flex;
      flex-direction: column;
      gap: 28px;
    }

    .info-panel-card {
      background: #fff;
      border-radius: 20px;
      padding: 32px;
      border: 1px solid #e2e8f0;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
    }

    .info-panel-card h3 {
      font-size: 20px;
      font-weight: 800;
      color: var(--text-primary);
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .info-panel-card h3 i {
      color: var(--secondary);
    }

    .info-row {
      display: flex;
      align-items: flex-start;
      gap: 14px;
      margin-bottom: 16px;
    }

    .info-row:last-child {
      margin-bottom: 0;
    }

    .info-row-icon {
      width: 42px;
      height: 42px;
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 16px;
      color: var(--primary);
      flex-shrink: 0;
    }

    .info-row-text {
      flex: 1;
    }

    .info-row-text span {
      display: block;
      font-size: 12px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      color: #94a3b8;
      margin-bottom: 3px;
    }

    .info-row-text a,
    .info-row-text p {
      font-size: 15px;
      font-weight: 600;
      color: var(--text-primary);
      text-decoration: none;
      margin: 0;
      line-height: 1.5;
    }

    .info-row-text a:hover {
      color: var(--secondary);
    }

    /* Social Links */
    .social-follow {
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
    }

    .social-btn {
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 10px 20px;
      border-radius: 50px;
      font-size: 14px;
      font-weight: 700;
      text-decoration: none;
      transition: all 0.3s;
      border: 1px solid transparent;
    }

    .social-btn.fb {
      background: #1877F2;
      color: #fff;
    }

    .social-btn.fb:hover {
      background: #0d65d8;
    }

    .social-btn.ln {
      background: #0A66C2;
      color: #fff;
    }

    .social-btn.ln:hover {
      background: #0558a9;
    }

    .social-btn.ig {
      background: linear-gradient(135deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
      color: #fff;
    }

    .social-btn.yt {
      background: #FF0000;
      color: #fff;
    }

    .social-btn.yt:hover {
      background: #cc0000;
    }

    /* Working Hours */
    .hours-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 8px;
    }

    .hours-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 16px;
      background: #f8fafc;
      border-radius: 10px;
      font-size: 14px;
    }

    .hours-row .day {
      font-weight: 600;
      color: var(--text-primary);
    }

    .hours-row .time {
      color: #64748b;
      font-weight: 500;
    }

    .hours-row.open .time {
      color: #22c55e;
      font-weight: 700;
    }

    /* ── Right Form Panel ── */
    .contact-form-panel {
      background: #fff;
      border-radius: 30px;
      padding: 50px;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.07);
      border: 1px solid #e2e8f0;
      position: sticky;
      top: 100px;
    }

    .contact-form-panel h2 {
      font-size: 32px;
      font-weight: 900;
      color: var(--text-primary);
      margin-bottom: 8px;
    }

    .contact-form-panel>p {
      font-size: 16px;
      color: #64748b;
      margin-bottom: 36px;
    }

    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
    }

    @media (max-width: 600px) {
      .form-row {
        grid-template-columns: 1fr;
      }
    }

    .form-group-contact {
      margin-bottom: 18px;
    }

    .form-label {
      display: block;
      font-size: 13px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      color: #64748b;
      margin-bottom: 8px;
    }

    .form-input {
      width: 100%;
      padding: 14px 18px;
      border: 2px solid #e2e8f0;
      border-radius: 12px;
      font-size: 15px;
      font-family: inherit;
      transition: border-color 0.3s, box-shadow 0.3s;
      background: #fcfcfc;
      color: var(--text-primary);
      box-sizing: border-box;
    }

    .form-input:focus {
      outline: none;
      border-color: var(--secondary);
      box-shadow: 0 0 0 4px rgba(107, 171, 68, 0.1);
      background: #fff;
    }

    .form-input::placeholder {
      color: #94a3b8;
    }

    .form-submit-btn {
      width: 100%;
      padding: 18px;
      background: var(--secondary);
      color: #fff;
      border: none;
      border-radius: 14px;
      font-size: 17px;
      font-weight: 800;
      cursor: pointer;
      transition: all 0.3s;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      margin-top: 8px;
    }

    .form-submit-btn:hover {
      background: #5da83a;
      transform: translateY(-2px);
      box-shadow: 0 10px 30px rgba(107, 171, 68, 0.3);
    }

    /* ── Map Section ── */
    .map-section {
      background: #f8fafc;
      border-radius: 30px;
      overflow: hidden;
      border: 1px solid #e2e8f0;
      margin-top: 60px;
    }

    .map-header {
      padding: 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .map-placeholder {
      width: 100%;
      height: 400px;
      background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      gap: 16px;
      color: #fff;
    }

    .map-placeholder i {
      font-size: 60px;
      opacity: 0.6;
    }

    .map-placeholder p {
      font-size: 18px;
      font-weight: 600;
      opacity: 0.8;
      text-align: center;
    }

    .map-placeholder a {
      color: var(--secondary);
      font-weight: 700;
      font-size: 16px;
      text-decoration: none;
      padding: 12px 30px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50px;
      border: 1px solid rgba(255, 255, 255, 0.3);
      transition: all 0.3s;
    }

    .map-placeholder a:hover {
      background: var(--secondary);
      color: #fff;
    }

    /* ── Trust Strip (Stats Boxes) ── */
    .trust-strip {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      margin: 60px 0;
    }

    @media (max-width: 900px) {
      .trust-strip {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 500px) {
      .trust-strip {
        grid-template-columns: 1fr;
      }
    }

    .trust-strip-item {
      background: #065A8A;
      border-radius: 12px;
      padding: 30px 20px;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .trust-strip-val {
      font-size: 36px;
      font-weight: 800;
      color: #ffffff;
      margin-bottom: 8px;
      line-height: 1;
    }

    .trust-strip-label {
      font-size: 14px;
      color: #fff;
      font-weight: 500;
      line-height: 1.4;
    }
  </style>
</head>

<body>

  <?php include 'header.php'; ?>

  <!-- HERO -->
  <section class="contact-hero">
    <div class="hero-orbs">
      <div class="orb orb-1"></div>
      <div class="orb orb-2"></div>
    </div>
    <div class="container" style="position:relative;z-index:2;">
      <div class="contact-hero-badge">
        <div class="contact-hero-dot"></div>
        We Reply Within 24 Hours
      </div>
      <h1>Let's Build Something<br /><span class="highlight">Worth Ranking For.</span></h1>
      <p>Tell us what's broken in your marketing. We will act surprised, then fix it anyway.<br />Whether your traffic
        has gone quiet, your ad spend is vanishing into nothing or your entire digital presence needs a rebuild, that is
        exactly the kind of mess a digital marketing agency like us exists to fix.</p>
      <a href="#main-form" class="btn btn-green"
        style="display:inline-flex;align-items:center;gap:10px;font-size:17px;padding:16px 40px;">
        <i class="fa-solid fa-paper-plane"></i> Send Us a Message
      </a>
    </div>
  </section>

  <!-- QUICK CONTACT PILLARS -->
  <section style="background:#f8fafc;padding:0 0 40px;">
    <div class="container">
      <div class="contact-pillars">
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fa-solid fa-phone"></i></div>
          <h3>Call Us</h3>
          <a href="tel:+919560864432">+91 9560864432</a>
        </div>
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fa-solid fa-envelope"></i></div>
          <h3>Email Us</h3>
          <a href="mailto:rankmator@gmail.com">rankmator@gmail.com</a>
        </div>
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fa-brands fa-whatsapp"></i></div>
          <h3>WhatsApp</h3>
          <a href="https://api.whatsapp.com/send?phone=919560864432&text=Hi Rankmator!" target="_blank">Chat on
            WhatsApp</a>
        </div>
      </div>
    </div>
  </section>

  <!-- TRUST STRIP -->
  <section style="background:#fff;">
    <div class="container">
      <div class="trust-strip">
        <div class="trust-strip-item">
          <div class="trust-strip-val">4x</div>
          <div class="trust-strip-label">avg roas delivered</div>
        </div>
        <div class="trust-strip-item">
          <div class="trust-strip-val">300%</div>
          <div class="trust-strip-label">avg traffic growth</div>
        </div>
        <div class="trust-strip-item">
          <div class="trust-strip-val">&lt;24hr</div>
          <div class="trust-strip-label">response guarantee</div>
        </div>
        <div class="trust-strip-item">
          <div class="trust-strip-val">100%</div>
          <div class="trust-strip-label">transparent reporting</div>
        </div>
      </div>
    </div>
  </section>

  <!-- MAIN CONTACT SECTION -->
  <section id="main-form" class="section-pad" style="background:#f8fafc;">
    <div class="container">
      <div class="main-contact-layout">

        <!-- LEFT: Info -->
        <div class="contact-left-panel">
          <!-- Corporate Office -->
          <div class="info-panel-card">
            <h3><i class="fa-solid fa-building"></i> Contact Info</h3>
            <p style="color:#64748b;font-size:15px;margin-bottom:20px;"><strong>(Where we work
                from):</strong><br />Officially, we're a digital marketing agency based out of Delhi NCR. Practically,
              wherever there is good chai and a strong internet connection.</p>
            <div class="info-row">
              <div class="info-row-icon"><i class="fa-solid fa-envelope"></i></div>
              <div class="info-row-text">
                <span>Email</span>
                <a href="mailto:rankmator@gmail.com">rankmator@gmail.com</a>
              </div>
            </div>
            <div class="info-row">
              <div class="info-row-icon"><i class="fa-solid fa-phone"></i></div>
              <div class="info-row-text">
                <span>Marketing</span>
                <a href="tel:+919560864432">+91 9560864432</a>
              </div>
            </div>
            <div class="info-row">
              <div class="info-row-icon"><i class="fa-brands fa-whatsapp"></i></div>
              <div class="info-row-text">
                <span>WhatsApp</span>
                <a href="https://api.whatsapp.com/send?phone=919560864432&text=Hi Rankmator!" target="_blank">Chat
                  Now</a>
              </div>
            </div>
          </div>

          <!-- Working Hours -->
          <div class="info-panel-card">
            <h3><i class="fa-solid fa-clock"></i> Working Hours</h3>
            <div class="hours-grid">
              <div class="hours-row open"><span class="day">Monday</span><span class="time">9 AM – 7 PM</span></div>
              <div class="hours-row open"><span class="day">Tuesday</span><span class="time">9 AM – 7 PM</span></div>
              <div class="hours-row open"><span class="day">Wednesday</span><span class="time">9 AM – 7 PM</span></div>
              <div class="hours-row open"><span class="day">Thursday</span><span class="time">9 AM – 7 PM</span></div>
              <div class="hours-row open"><span class="day">Friday</span><span class="time">9 AM – 7 PM</span></div>
              <div class="hours-row open"><span class="day">Saturday</span><span class="time">10 AM – 5 PM</span></div>
              <div class="hours-row"><span class="day">Sunday</span><span class="time"
                  style="color:#ef4444;">Closed</span></div>
            </div>
          </div>

          <!-- Follow Us -->
          <div class="info-panel-card">
            <h3><i class="fa-solid fa-share-nodes"></i> Follow Us</h3>
            <p style="color:#64748b;font-size:15px;margin-bottom:20px;">Stay connected for the latest digital marketing
              insights, case studies, and industry news.</p>
            <div class="social-follow">
              <a href="https://www.facebook.com/profile.php?id=61587617454050" target="_blank" class="social-btn fb"><i
                  class="fa-brands fa-facebook-f"></i> Facebook</a>
              <a href="#" class="social-btn ln"><i class="fa-brands fa-linkedin-in"></i> LinkedIn</a>
              <a href="https://www.instagram.com/rankmator/" target="_blank" class="social-btn ig"><i
                  class="fa-brands fa-instagram"></i> Instagram</a>
              <a href="#" class="social-btn yt"><i class="fa-brands fa-youtube"></i> YouTube</a>
            </div>
          </div>
        </div>

        <!-- RIGHT: Form -->
        <div class="contact-form-panel">
          <h2>Send Us a Message</h2>
          <p>Fill in the form below and one of our digital growth experts will get back to you within 24 hours — usually
            much sooner.</p>

          <form action="mail.php" method="POST">
            <div class="form-row">
              <div class="form-group-contact">
                <label class="form-label" for="contact-name">Your Name *</label>
                <input type="text" name="name" id="contact-name" class="form-input" placeholder="e.g. Rahul Kapoor"
                  required />
              </div>
              <div class="form-group-contact">
                <label class="form-label" for="contact-email">Email Address *</label>
                <input type="email" name="email" id="contact-email" class="form-input" placeholder="you@company.com"
                  required />
              </div>
            </div>
            <div class="form-row">
              <div class="form-group-contact">
                <label class="form-label" for="contact-phone">Phone Number *</label>
                <input type="tel" name="phone" id="contact-phone" class="form-input" placeholder="+91 98765 43210"
                  required />
              </div>
            </div>
            <div class="form-group-contact">
              <label class="form-label" for="contact-message">Your Message</label>
              <textarea name="message" id="contact-message" class="form-input" rows="5"
                placeholder="Tell us about your business, goals, and any specific challenges you're facing..."></textarea>
            </div>
            <button type="submit" class="form-submit-btn">
              <i class="fa-solid fa-paper-plane"></i>
              Send My Message
            </button>
          </form>
        </div>

      </div>


    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="section-pad" style="background:var(--primary-dark);color:#fff;">
    <div class="container">
      <div class="section-header">
        <div class="section-tag" style="color:var(--secondary);">Before You Reach Out</div>
        <h2 class="section-title" style="color:#fff;">Frequently Asked Questions</h2>
        <p class="section-subtitle" style="color:rgba(255,255,255,0.8);">Questions You're Probably Already Thinking.
          Answered.</p>
      </div>
      <div class="faq-container">
        <div class="faq-item">
          <div class="faq-question">
            <h4>How fast do you actually reply?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Within 24 hours, usually sooner. If we're slow, something has genuinely gone wrong, not just "swamped
              with clients."</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>What happens right after I submit the form?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>We go through what you've shared, look up your brand properly and book a short call to understand the
              actual problem before suggesting anything.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>Do you only work with big brands?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>No. We work with anyone serious about growing, whether that's SEO, paid ads or a full digital marketing
              overhaul. A small business with a clear goal matters more to us than a big logo with no direction.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>Do you have an office I can visit?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>No, we're remote first. It keeps our costs down, which means better pricing for you. All meetings happen
              over a call, fully prepared, no excuses.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>Will I actually be talking to the people doing my work?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Yes. No account manager nodding along and forwarding your emails. You talk to whoever is actually running
              your campaign.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>How do you decide what strategy fits us?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>We look at your goals, your audience and what's currently working or not, then build from there. Nothing
              copy pasted from another client's plan.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>What if I don't like the first strategy you propose?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>Tell us. We'd rather revise it twice than deliver something you're not convinced about.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h4>How involved do I need to be once we start?</h4><i class="fa-solid fa-plus faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p>As much or as little as you want. We'll keep you updated regularly either way, you won't have to chase us
              for status.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    // Inline FAQ test
    console.log('Inline FAQ script loaded');
    document.querySelectorAll('.faq-item').forEach(item => {
      const q = item.querySelector('.faq-question');
      if (q) {
        q.addEventListener('click', () => {
          console.log('FAQ clicked:', item);
          item.classList.toggle('active');
        });
      }
    });
  </script>

  <!-- FOOTER -->
  <?php include 'footer.php'; ?>
</body>

</html>