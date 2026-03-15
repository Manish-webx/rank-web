/* =====================================================
   RANKMATOR REVAMP — Interactive Scripts
   ===================================================== */

(function () {
  'use strict';

  /* ─── Sticky Navbar ─────────────────────────────── */
  const navbar = document.getElementById('navbar');
  const scrollTopBtn = document.getElementById('scroll-top');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 60) {
      navbar.classList.add('scrolled');
      scrollTopBtn.classList.add('visible');
    } else {
      navbar.classList.remove('scrolled');
      scrollTopBtn.classList.remove('visible');
    }
  });

  scrollTopBtn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  /* ─── Hamburger / Mobile Nav ─────────────────────── */
  const hamburger = document.getElementById('hamburger');
  const navLinks = document.querySelector('.nav-links');
  const navActions = document.querySelector('.nav-actions');
  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navLinks.classList.toggle('active');
    if (navActions) navActions.classList.toggle('active');
  });

  /* ─── Services Tab Switching (main section) ──────── */
  const tabBtns = document.querySelectorAll('#services-tabs-nav .tab-btn');
  const tabPanels = document.querySelectorAll('.tab-panel');

  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const target = btn.dataset.tab;

      tabBtns.forEach(b => b.classList.remove('active'));
      tabPanels.forEach(p => p.classList.remove('active'));

      btn.classList.add('active');
      const panel = document.getElementById('panel-' + target);
      if (panel) panel.classList.add('active');
    });
  });

  /* ─── Services Quick Bar Highlighting ───────────── */
  const sbarItems = document.querySelectorAll('.sbar-item');
  sbarItems.forEach(item => {
    item.addEventListener('click', () => {
      sbarItems.forEach(s => s.classList.remove('active'));
      item.classList.add('active');

      // Also switch the services tab if matching
      const tab = item.dataset.tab;
      if (tab) {
        const matchBtn = document.querySelector(`#services-tabs-nav [data-tab="${tab}"]`);
        if (matchBtn) {
          matchBtn.click();
          document.getElementById('services').scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      }
    });
  });

  /* ─── Animated Number Counters ───────────────────── */
  function animateCounter(el, target, duration) {
    let start = 0;
    const step = target / (duration / 16);
    const timer = setInterval(() => {
      start += step;
      if (start >= target) {
        el.textContent = target;
        clearInterval(timer);
      } else {
        el.textContent = Math.floor(start);
      }
    }, 16);
  }

  const counterEls = document.querySelectorAll('.counter');
  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !entry.target.dataset.animated) {
        entry.target.dataset.animated = '1';
        const target = parseInt(entry.target.dataset.target, 10);
        animateCounter(entry.target, target, 1800);
      }
    });
  }, { threshold: 0.4 });

  counterEls.forEach(el => counterObserver.observe(el));

  /* ─── Scroll Fade-In Animations ─────────────────── */
  const fadeEls = document.querySelectorAll('.fade-in');
  const fadeObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        fadeObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  fadeEls.forEach(el => fadeObserver.observe(el));

  /* ─── Testimonials Carousel (Infinite Loop) ──────── */
  const track = document.getElementById('testi-track');
  const prevBtn = document.getElementById('testi-prev');
  const nextBtn = document.getElementById('testi-next');
  const dotsContainer = document.getElementById('testi-dots');

  if (track && prevBtn && nextBtn) {
    let cards = Array.from(track.querySelectorAll('.testi-card'));
    let cardsPerView = window.innerWidth <= 768 ? 1 : window.innerWidth <= 1024 ? 2 : 3;
    let currentIndex = cardsPerView; // Start at the first original card
    let isTransitioning = false;

    // Clone cards for infinite loop
    function setupClones() {
      // Remove existing clones if any
      track.querySelectorAll('.testi-clone').forEach(c => c.remove());
      
      const firstClones = cards.slice(0, cardsPerView);
      const lastClones = cards.slice(-cardsPerView);

      firstClones.forEach(card => {
        const clone = card.cloneNode(true);
        clone.classList.add('testi-clone');
        track.appendChild(clone);
      });

      lastClones.reverse().forEach(card => {
        const clone = card.cloneNode(true);
        clone.classList.add('testi-clone');
        track.insertBefore(clone, track.firstChild);
      });
    }

    function buildDots() {
      if (!dotsContainer) return;
      const totalOriginalSlides = Math.ceil(cards.length / cardsPerView);
      dotsContainer.innerHTML = '';
      for (let i = 0; i < totalOriginalSlides; i++) {
        const dot = document.createElement('div');
        dot.className = 'testi-dot' + (i === 0 ? ' active' : '');
        dot.addEventListener('click', () => {
          if (isTransitioning) return;
          currentIndex = i * cardsPerView + cardsPerView;
          updateCarousel(true);
        });
        dotsContainer.appendChild(dot);
      }
    }

    function updateDots() {
      if (!dotsContainer) return;
      const dots = dotsContainer.querySelectorAll('.testi-dot');
      const totalOriginalSlides = Math.ceil(cards.length / cardsPerView);
      // Map current index back to 0-based slide index
      let activeDot = Math.floor((currentIndex - cardsPerView) / cardsPerView);
      if (activeDot < 0) activeDot = totalOriginalSlides - 1;
      if (activeDot >= totalOriginalSlides) activeDot = 0;
      
      dots.forEach((d, i) => d.classList.toggle('active', i === activeDot));
    }

    function updateCarousel(animate = true) {
      if (animate) isTransitioning = true;
      const firstCard = track.querySelector('.testi-card');
      if (!firstCard) return;
      const cardWidth = firstCard.offsetWidth + 24; // gap = 24px
      track.style.transition = animate ? 'transform 0.5s cubic-bezier(0.4, 0, 0.2, 1)' : 'none';
      track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
      updateDots();
    }

    track.addEventListener('transitionend', () => {
      isTransitioning = false;
      const totalCards = cards.length;
      
      // Jump from clones back to original
      if (currentIndex >= totalCards + cardsPerView) {
        currentIndex = cardsPerView;
        updateCarousel(false);
      } else if (currentIndex < cardsPerView) {
        currentIndex = totalCards;
        updateCarousel(false);
      }
    });

    setupClones();
    buildDots();
    updateCarousel(false);

    prevBtn.addEventListener('click', () => {
      if (isTransitioning) return;
      currentIndex--;
      updateCarousel(true);
    });

    nextBtn.addEventListener('click', () => {
      if (isTransitioning) return;
      currentIndex++;
      updateCarousel(true);
    });

    // Auto-play
    let autoPlay = setInterval(() => {
      if (!isTransitioning) {
        currentIndex++;
        updateCarousel(true);
      }
    }, 5000);

    const pausePlay = () => clearInterval(autoPlay);
    const resumePlay = () => {
      pausePlay();
      autoPlay = setInterval(() => {
        if (!isTransitioning) {
          currentIndex++;
          updateCarousel(true);
        }
      }, 5000);
    };

    track.addEventListener('mouseenter', pausePlay);
    track.addEventListener('mouseleave', resumePlay);

    // Recalculate on resize
    window.addEventListener('resize', () => {
      const newCPV = window.innerWidth <= 768 ? 1 : window.innerWidth <= 1024 ? 2 : 3;
      if (newCPV !== cardsPerView) {
        cardsPerView = newCPV;
        currentIndex = cardsPerView;
        setupClones();
        buildDots();
        updateCarousel(false);
      }
    });
  }

  /* ─── Smooth Active Nav Link Highlighting ────────── */
  const sections = document.querySelectorAll('section[id]');
  const navLinkEls = document.querySelectorAll('.nav-link');

  function updateActiveNav() {
    let current = '';
    sections.forEach(s => {
      const top = s.offsetTop - 100;
      if (window.scrollY >= top) current = s.id;
    });
    navLinkEls.forEach(a => {
      a.classList.remove('active');
      if (a.getAttribute('href') === '#' + current) a.classList.add('active');
    });
  }
  window.addEventListener('scroll', updateActiveNav);

  /* ─── CTA Form micro-interaction ────────────────── */
  const ctaForm = document.querySelector('.cta-form');
  if (ctaForm) {
    const input = ctaForm.querySelector('.cta-input');
    input.addEventListener('focus', () => {
      ctaForm.style.borderColor = 'rgba(240,165,0,0.5)';
      ctaForm.style.boxShadow = '0 0 30px rgba(240,165,0,0.15)';
    });
    input.addEventListener('blur', () => {
      ctaForm.style.borderColor = 'rgba(255,255,255,0.15)';
      ctaForm.style.boxShadow = 'none';
    });
  }

  // ─── FAQ ACCORDION ────────────────────────────────
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    question.addEventListener('click', () => {
      const isActive = item.classList.contains('active');
      
      // Close all other items
      faqItems.forEach(faq => faq.classList.remove('active'));
      
      // Toggle current item
      if (!isActive) {
        item.classList.add('active');
      }
    });
  });

  console.log('%c RANKMATOR REVAMP 🚀 ', 'background:#0868A0;color:#fff;font-size:16px;font-weight:bold;padding:8px 16px;border-radius:6px;');
  console.log('%c Modern Light Rebrand — Blue + Green + White ', 'color:#6BAB44;font-size:13px;');

})();
