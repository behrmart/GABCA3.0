// GABCA.com.mx js scripts


// Keep AOS aligned with the final layout after images and responsive rules settle.
(function() {
  'use strict';

  var revealScheduled = false;

  function elementIsVisible(element) {
    var rect = element.getBoundingClientRect();
    var viewportHeight = window.innerHeight || document.documentElement.clientHeight;
    var viewportWidth = window.innerWidth || document.documentElement.clientWidth;

    return rect.bottom > 0 &&
      rect.right > 0 &&
      rect.top < viewportHeight &&
      rect.left < viewportWidth;
  }

  function revealVisibleAnimatedElements() {
    var animatedElements = document.querySelectorAll('[data-aos]');

    Array.prototype.forEach.call(animatedElements, function(element) {
      if (elementIsVisible(element)) {
        element.classList.add('aos-animate');
      }
    });
  }

  function scheduleReveal() {
    if (revealScheduled) {
      return;
    }

    revealScheduled = true;
    window.requestAnimationFrame(function() {
      revealScheduled = false;
      revealVisibleAnimatedElements();
    });
  }

  function showAnimatedElementsWithoutAos() {
    var animatedElements = document.querySelectorAll('[data-aos]');

    Array.prototype.forEach.call(animatedElements, function(element) {
      element.classList.add('aos-animate');
    });
  }

  function refreshAos() {
    if (!window.AOS || typeof window.AOS.refreshHard !== 'function') {
      return;
    }

    window.AOS.refreshHard();
    window.setTimeout(revealVisibleAnimatedElements, 80);
  }

  function initializeAos() {
    if (!window.AOS || typeof window.AOS.init !== 'function') {
      showAnimatedElementsWithoutAos();
      return;
    }

    window.AOS.init({
      once: false,
      mirror: false
    });

    refreshAos();
  }

  initializeAos();

  window.addEventListener('load', function() {
    refreshAos();
    window.setTimeout(refreshAos, 250);
    window.setTimeout(refreshAos, 750);
  });

  window.addEventListener('hashchange', refreshAos);
  window.addEventListener('resize', refreshAos);
  window.addEventListener('scroll', scheduleReveal, { passive: true });
})();


// Mosaico gallery flip animation, independent from AOS so the grid never blanks.
(function() {
  'use strict';

  function elementIsVisible(element) {
    var rect = element.getBoundingClientRect();
    var viewportHeight = window.innerHeight || document.documentElement.clientHeight;
    var viewportWidth = window.innerWidth || document.documentElement.clientWidth;

    return rect.bottom > 0 &&
      rect.right > 0 &&
      rect.top < viewportHeight &&
      rect.left < viewportWidth;
  }

  function revealTile(tile) {
    tile.classList.add('mosaic-visible');
  }

  function initializeMosaicAnimations() {
    var tiles = document.querySelectorAll('.mosaico .containerimg[data-mosaic]');

    if (!tiles.length) {
      return;
    }

    document.body.classList.add('mosaic-animations-ready');

    if ('IntersectionObserver' in window) {
      var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            revealTile(entry.target);
            observer.unobserve(entry.target);
          }
        });
      }, {
        rootMargin: '0px 0px -8% 0px',
        threshold: 0.12
      });

      Array.prototype.forEach.call(tiles, function(tile) {
        observer.observe(tile);
      });
    } else {
      Array.prototype.forEach.call(tiles, revealTile);
    }

    window.addEventListener('load', function() {
      window.setTimeout(function() {
        Array.prototype.forEach.call(tiles, function(tile) {
          if (elementIsVisible(tile)) {
            revealTile(tile);
          }
        });
      }, 150);
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializeMosaicAnimations);
  } else {
    initializeMosaicAnimations();
  }
})();



// EMAIL form Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
