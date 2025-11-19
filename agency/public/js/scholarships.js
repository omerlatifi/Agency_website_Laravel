// Jump to Topic
document.addEventListener("DOMContentLoaded", () => {
  const jumpBox = document.querySelector(".jump-box");
  const toggle = document.getElementById("jumpToggle");

  // open/close dropdown
  toggle.addEventListener("click", () => {
    jumpBox.classList.toggle("open");
  });

  // smooth scroll when clicking items
  const links = document.querySelectorAll(".jump-list a");
  links.forEach(link => {
    link.addEventListener("click", e => {
      e.preventDefault();
      const target = document.querySelector(link.getAttribute("href"));
      if (target) {
        const offset = 120; // adjust if header fixed
        const top = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top, behavior: "smooth" });
        jumpBox.classList.remove("open"); // close dropdown after click
      }
    });
  });
});



//  FAQ             FAQ                 FAQ
document.addEventListener('DOMContentLoaded', function () {
    try {
      const container = document.querySelector('.faq-container') || document;
      const faqs = container.querySelectorAll('.faq-card');
  
      if (!faqs || faqs.length === 0) {
        // Nothing to do (no FAQ cards found)
        return;
      }
  
      faqs.forEach(card => {
        const question = card.querySelector('.faq-question');
        const answer = card.querySelector('.faq-answer');
  
        // Skip cards that don't have the expected structure
        if (!question || !answer) return;
  
        // accessibility attributes
        question.setAttribute('tabindex', '0');
        question.setAttribute('role', 'button');
        question.setAttribute('aria-expanded', 'false');
        answer.setAttribute('aria-hidden', 'true');
  
        // click handler
        const toggle = () => {
          // Close all other cards
          faqs.forEach(other => {
            if (other !== card) {
              other.classList.remove('active');
              const oq = other.querySelector('.faq-question');
              const oa = other.querySelector('.faq-answer');
              if (oq) oq.setAttribute('aria-expanded', 'false');
              if (oa) oa.setAttribute('aria-hidden', 'true');
            }
          });
  
          // Toggle this card
          const isActive = card.classList.toggle('active');
          question.setAttribute('aria-expanded', isActive ? 'true' : 'false');
          answer.setAttribute('aria-hidden', isActive ? 'false' : 'true');
        };
  
        question.addEventListener('click', toggle);
  
        // keyboard support (Enter or Space)
        question.addEventListener('keydown', function (e) {
          if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            toggle();
          }
        });
      });
    } catch (err) {
      console.error('FAQ accordion script error:', err);
    }
  });
  