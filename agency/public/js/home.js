document.addEventListener('DOMContentLoaded', function() {
  //pc nav
 // Desktop dropdown: robust open/close with delay and immediate switch
document.addEventListener('DOMContentLoaded', function () {
    const dropdowns = Array.from(document.querySelectorAll('.nav-list li.dropdown'));
    const closeTimers = new WeakMap(); // map item -> timeout id
    const CLOSE_DELAY = 3000; // 3000 ms = 3 seconds (change if you want)
  
    function clearCloseTimer(item) {
      const t = closeTimers.get(item);
      if (t) {
        clearTimeout(t);
        closeTimers.delete(item);
      }
    }
  
    function closeItem(item) {
      clearCloseTimer(item);
      item.classList.remove('open');
    }
  
    function openItem(item) {
      // clear this item's timer
      clearCloseTimer(item);
  
      // close all others immediately and clear their timers
      dropdowns.forEach(d => {
        if (d !== item) {
          clearCloseTimer(d);
          d.classList.remove('open');
        }
      });
  
      item.classList.add('open');
    }
  
    function scheduleClose(item, delay = CLOSE_DELAY) {
      clearCloseTimer(item);
      const id = setTimeout(() => {
        item.classList.remove('open');
        closeTimers.delete(item);
      }, delay);
      closeTimers.set(item, id);
    }
  
    dropdowns.forEach(item => {
      const menu = item.querySelector('.dropdown-menu');
  
      // mouse enters parent li (or its area)
      item.addEventListener('mouseenter', () => {
        openItem(item);
      });
  
      // mouse leaves parent li (including submenu area) -> schedule close
      item.addEventListener('mouseleave', () => {
        scheduleClose(item);
      });
  
      // make sure hovering over the submenu cancels any close timer
      if (menu) {
        menu.addEventListener('mouseenter', () => {
          clearCloseTimer(item);
          item.classList.add('open');
        });
        menu.addEventListener('mouseleave', () => {
          scheduleClose(item);
        });
      }
    });
  
    // Optional: close all when clicking outside
    document.addEventListener('click', (e) => {
      if (!e.target.closest('.nav-list')) {
        dropdowns.forEach(d => closeItem(d));
      }
    });
  });
  
  

  
  
    // Mobile nav toggle
  const hamburger = document.getElementById('hamburger');
  const mobileNav = document.getElementById('mobileNav');
  hamburger && hamburger.addEventListener('click', function () {
    mobileNav.style.display = mobileNav.style.display === 'block' ? 'none' : 'block';
  });
// Toggle dropdowns on mobile
document.querySelectorAll(".mobile-nav .dropdown > a").forEach(link => {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      const parent = this.parentElement;
  
      // close all others
      document.querySelectorAll(".mobile-nav .dropdown").forEach(li => {
        if (li !== parent) {
          li.classList.remove("open");
        }
      });
  
      // toggle this one
      parent.classList.toggle("open");
    });
  });
  // Very small carousel controller (left/right buttons)
  function initCarouselButtons() {
    document.querySelectorAll('.carousel-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        const targetId = this.getAttribute('data-target');
        const dir = this.classList.contains('next') ? 1 : -1;
        const wrapper = document.getElementById(targetId);
        if (!wrapper) return;

        const cardWidth = wrapper.querySelector('[class*="card"], .dest-card, .testimonial-card, .award-card')?.offsetWidth || 240;
        wrapper.scrollBy({ left: dir * (cardWidth + 14), behavior: 'smooth' });
      });
    });
  }
  initCarouselButtons();

  // Add simple swipe for mobile on carousels
  function addSwipe(el) {
    let startX = 0;
    let scrollLeft = 0;
    el.addEventListener('touchstart', (e) => {
      startX = e.touches[0].pageX - el.offsetLeft;
      scrollLeft = el.scrollLeft;
    }, {passive:true});
    el.addEventListener('touchmove', (e) => {
      const x = e.touches[0].pageX - el.offsetLeft;
      const walk = (startX - x);
      el.scrollLeft = scrollLeft + walk;
    }, {passive:true});
  }
  document.querySelectorAll('.carousel').forEach(addSwipe);

  // Cookie banner
  const cookieBanner = document.getElementById('cookieBanner');
  const cookieAccept = document.getElementById('cookieAccept');
  if(cookieAccept){
    if(localStorage.getItem('pfec_cookie_accepted')) {
      cookieBanner.style.display = 'none';
    } else {
      cookieBanner.style.display = 'block';
    }
    cookieAccept.addEventListener('click', function(){
      localStorage.setItem('pfec_cookie_accepted', '1');
      cookieBanner.style.display = 'none';
    });
  }

});
// Mobile dropdown toggle logic
document.querySelectorAll('.mobile-nav .dropdown-toggle').forEach(button => {
  button.addEventListener('click', e => {
    e.preventDefault();
    const parent = button.closest('.dropdown');
    parent.classList.toggle('open');
  });
});

