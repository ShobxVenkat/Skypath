/* =========================
   Reveal on Scroll (All Pages)
========================= */

// Elements that may exist across pages
const revealSelectors = [
  '.hero-section h1',
  '.hero-section p',
  '.hero-section img',
  '.page-header h1',
  '.page-header p',
  '.section-title',
  '.card',
  '.accordion',
  'iframe',
  '.cta-section'
];

// Collect existing elements only
const revealElements = revealSelectors
  .flatMap(selector => Array.from(document.querySelectorAll(selector)));

const revealObserver = new IntersectionObserver(
  (entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-show');
        observer.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.15 }
);

revealElements.forEach(el => {
  el.classList.add('animate-hidden');
  revealObserver.observe(el);
});

/* =========================
   Navbar Shadow on Scroll
========================= */
const navbar = document.querySelector('.navbar');

if (navbar) {
  window.addEventListener('scroll', () => {
    navbar.classList.toggle('shadow', window.scrollY > 20);
  });
}

/* =========================
   Smooth Anchor Scroll
========================= */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    const target = document.querySelector(this.getAttribute('href'));
    if (!target) return;

    e.preventDefault();
    target.scrollIntoView({ behavior: 'smooth' });
  });
});

/* =========================
   Contact Form UX (Safe)
========================= */
const form = document.getElementById('contactForm');

if (form) {
  form.addEventListener('submit', () => {
    const btn = form.querySelector('button');
    if (!btn) return;

    btn.innerText = 'Sending...';
    btn.disabled = true;

    setTimeout(() => {
      btn.innerText = 'Send Message';
      btn.disabled = false;
    }, 1200);
  });
}
