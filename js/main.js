/* FoodMealCraft - Main Interactive JavaScript */
document.addEventListener('DOMContentLoaded', () => {
  // Mobile menu toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navLinks = document.querySelector('.nav-links');

  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      mobileToggle.setAttribute('aria-expanded', navLinks.classList.contains('active'));
    });
  }

  // Sticky Navbar shadow on scroll
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }
  });

  // Animated metric counters
  const counters = document.querySelectorAll('.metric-number');
  if (counters.length > 0) {
    const observerOptions = { threshold: 0.5 };
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const target = +entry.target.getAttribute('data-target');
          let count = 0;
          const speed = target / 50;
          const updateCount = () => {
            count += speed;
            if (count < target) {
              entry.target.innerText = Math.ceil(count);
              setTimeout(updateCount, 25);
            } else {
              entry.target.innerText = target;
            }
          };
          updateCount();
          obs.unobserve(entry.target);
        }
      });
    }, observerOptions);

    counters.forEach(counter => observer.observe(counter));
  }

  // Interactive Batch Cooking & Macro Balance Selector
  const macroButtons = document.querySelectorAll('.macro-btn');
  const macroDisplay = document.getElementById('macro-detail');

  if (macroButtons.length > 0 && macroDisplay) {
    macroButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        macroButtons.forEach(b => b.classList.remove('active-macro'));
        this.classList.add('active-macro');
        const prepName = this.getAttribute('data-prep');
        const description = this.getAttribute('data-desc');
        const shelfLife = this.getAttribute('data-shelf');

        macroDisplay.innerHTML = `
          <div class="prep-card" style="border-left: 4px solid var(--accent-saffron); margin-top: 1.5rem;">
            <h3 style="color: var(--accent-saffron); font-size: 1.5rem; margin-bottom: 0.5rem;">${prepName} Batch Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">${description}</p>
            <strong style="color: var(--accent-olive); font-size: 0.95rem;">Optimal Storage & Shelf Life: ${shelfLife}</strong>
          </div>
        `;
      });
    });
  }

  // Meal Prep Style Diagnostic Quiz
  const prepQuizButtons = document.querySelectorAll('.prep-quiz-btn');
  const prepQuizResult = document.getElementById('prep-quiz-result');

  if (prepQuizButtons.length > 0 && prepQuizResult) {
    prepQuizButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        prepQuizButtons.forEach(b => b.style.opacity = '0.7');
        this.style.opacity = '1';
        const recommendation = this.getAttribute('data-rec');
        prepQuizResult.innerHTML = `
          <div class="prep-card" style="background: var(--bg-secondary); margin-top: 1rem; border-color: var(--accent-saffron);">
            <h4 style="color: var(--accent-saffron); margin-bottom: 0.5rem;">Your Curated Batch Prep Blueprint</h4>
            <p style="color: var(--text-primary); font-weight: 600;">${recommendation}</p>
          </div>
        `;
      });
    });
  }
});
