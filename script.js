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
   Services Cards Animation
========================= */
const serviceCards = document.querySelectorAll('.service-card');

if (serviceCards.length) {
  const serviceObserver = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate-show');
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.2 }
  );

  serviceCards.forEach(card => {
    card.classList.add('animate-hidden');
    serviceObserver.observe(card);
  });
}



document.addEventListener('DOMContentLoaded', function () {
  const items = document.querySelectorAll('.contact-animate');

  if (!items.length) return;

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
          entry.target.style.transitionDelay = `${index * 0.15}s`;
          entry.target.classList.add('animate-show');
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.2 }
  );

  items.forEach(el => {
    el.classList.add('animate-hidden');
    observer.observe(el);
  });
});