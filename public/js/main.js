/**
 * ECO+HOLDING - JavaScript Principal
 * Gestion des interactions et animations
 */

// ==================== NAVIGATION STICKY ====================
const navbar = document.querySelector('.navbar');
function gerer_scroll_navbar() {
  if (window.scrollY > 50) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
}
window.addEventListener('scroll', gerer_scroll_navbar);

// ==================== MENU MOBILE — OFF-CANVAS DRAWER ====================
const navbarToggle = document.querySelector('.navbar-toggle');
const navbarMenu   = document.querySelector('.navbar-menu');

// 1. Backdrop injecté dans le body
const navBackdrop = document.createElement('div');
navBackdrop.id = 'nav-backdrop';
document.body.appendChild(navBackdrop);

// 2. En-tête du drawer : logo + bouton fermer
(function() {
  var logoEl = document.querySelector('.navbar-logo');
  if (!navbarMenu || !logoEl) return;
  var li = document.createElement('li');
  li.className = 'drawer-header-item';
  li.innerHTML =
    '<div class="drawer-header">' +
      '<a href="' + logoEl.getAttribute('href') + '" class="drawer-logo">' + logoEl.innerHTML + '</a>' +
      '<button class="drawer-close" aria-label="Fermer le menu"><i class="fas fa-times"></i></button>' +
    '</div>';
  navbarMenu.insertBefore(li, navbarMenu.firstChild);
  li.querySelector('.drawer-close').addEventListener('click', closeDrawer);
})();

// 3. Chevrons dans les liens dropdown
document.querySelectorAll('.navbar-menu .dropdown > a').forEach(function(link) {
  var ch = document.createElement('i');
  ch.className = 'fas fa-chevron-down mobile-chevron';
  link.appendChild(ch);
});

// 4. Ouvrir / Fermer
function openDrawer() {
  if (!navbarMenu) return;
  navbarMenu.classList.add('active');
  navBackdrop.classList.add('active');
  document.body.style.overflow = 'hidden';
  if (navbarToggle) {
    navbarToggle.setAttribute('aria-expanded', 'true');
    var s = navbarToggle.querySelectorAll('span');
    s[0].style.transform = 'rotate(45deg) translateY(8px)';
    s[1].style.opacity   = '0';
    s[2].style.transform = 'rotate(-45deg) translateY(-8px)';
  }
}

function closeDrawer() {
  if (!navbarMenu) return;
  navbarMenu.classList.remove('active');
  navBackdrop.classList.remove('active');
  document.body.style.overflow = '';
  if (navbarToggle) {
    navbarToggle.setAttribute('aria-expanded', 'false');
    navbarToggle.querySelectorAll('span').forEach(function(s) {
      s.style.transform = 'none';
      s.style.opacity   = '1';
    });
  }
  document.querySelectorAll('.navbar-menu .dropdown.open').forEach(function(d) {
    d.classList.remove('open');
  });
}

// 5. Bouton hamburger
if (navbarToggle) {
  navbarToggle.addEventListener('click', function() {
    navbarMenu.classList.contains('active') ? closeDrawer() : openDrawer();
  });
}

// 6. Fermer au clic sur le backdrop
navBackdrop.addEventListener('click', closeDrawer);

// 7. Fermer à la touche Échap
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') closeDrawer();
});

// 8. Toggle dropdown (mobile uniquement)
document.querySelectorAll('.navbar-menu .dropdown > a').forEach(function(link) {
  link.addEventListener('click', function(e) {
    if (window.innerWidth > 768) return;
    e.preventDefault();
    var dropdown = this.parentElement;
    var isOpen   = dropdown.classList.contains('open');
    document.querySelectorAll('.navbar-menu .dropdown').forEach(function(d) { d.classList.remove('open'); });
    if (!isOpen) dropdown.classList.add('open');
  });
});

// 9. Fermer le drawer au clic sur un lien final (non parent dropdown)
document.querySelectorAll('.navbar-menu a').forEach(function(link) {
  link.addEventListener('click', function() {
    if (window.innerWidth > 768) return;
    var isDropdownParent = this.parentElement.classList.contains('dropdown') &&
                           !this.closest('.dropdown-menu');
    if (!isDropdownParent) closeDrawer();
  });
});

// 10. Reset complet au resize desktop
window.addEventListener('resize', function() {
  if (window.innerWidth > 768) closeDrawer();
});

// ==================== SCROLL FLUIDE ====================
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    const href = this.getAttribute('href');
    if (href === '#') return;
    e.preventDefault();
    const target = document.querySelector(href);
    if (target) {
      const offsetTop = target.offsetTop - 80;
      window.scrollTo({ top: offsetTop, behavior: 'smooth' });
    }
  });
});

// ==================== FORMULAIRE DE CONTACT ====================
const contactForm = document.getElementById('contact-form');
const formMessage = document.getElementById('form-message');

if (contactForm) {
  contactForm.addEventListener('submit', async function(e) {
    e.preventDefault();

    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    submitBtn.disabled = true;
    submitBtn.textContent = 'Envoi en cours...';

    // Reset errors
    document.querySelectorAll('.form-error').forEach(error => error.classList.remove('visible'));
    document.querySelectorAll('.form-control').forEach(control => control.classList.remove('error'));

    const formData = new FormData(this);

    try {
      const response = await fetch(this.action, {
        method: 'POST',
        body: formData,
        headers: {
          'X-Requested-With': 'XMLHttpRequest',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        }
      });

      const data = await response.json();

      if (data.success) {
        if (window.EcoNotify) {
          EcoNotify.success(data.message || 'Votre demande a été envoyée avec succès !');
        }
        contactForm.reset();
      } else {
        if (data.errors) {
          Object.keys(data.errors).forEach(field => {
            const input = document.getElementById(field);
            const errorDiv = document.getElementById(field + '-error');
            if (input && errorDiv) {
              input.classList.add('error');
              errorDiv.textContent = Array.isArray(data.errors[field])
                ? data.errors[field][0]
                : data.errors[field];
              errorDiv.classList.add('visible');
            }
          });
        }
        if (window.EcoNotify) {
          EcoNotify.error(data.message || 'Veuillez corriger les erreurs dans le formulaire.');
        }
      }
    } catch (error) {
      if (window.EcoNotify) {
        EcoNotify.error("Une erreur s'est produite. Veuillez réessayer.");
      }
    } finally {
      submitBtn.disabled = false;
      submitBtn.textContent = originalText;
    }
  });
}

function afficher_message(message, type) {
  if (!formMessage) return;
  formMessage.textContent = message;
  formMessage.className = 'alert alert-' + type;
  formMessage.style.display = 'block';
  formMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  setTimeout(() => { formMessage.style.display = 'none'; }, 5000);
}

// ==================== STATISTIQUES ANIMEES ====================
function animer_compteurs() {
  const compteurs = document.querySelectorAll('.stat-number[data-count]');
  compteurs.forEach(compteur => {
    const cible = parseInt(compteur.dataset.count);
    const duree = 2000;
    const increment = cible / (duree / 16);
    let actuel = 0;

    const timer = setInterval(() => {
      actuel += increment;
      if (actuel >= cible) {
        compteur.textContent = cible + '+';
        clearInterval(timer);
      } else {
        compteur.textContent = Math.floor(actuel);
      }
    }, 16);
  });
}

const statsSection = document.querySelector('.stats-section');
if (statsSection) {
  const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animer_compteurs();
        statsObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });
  statsObserver.observe(statsSection);
}

// ==================== VALIDATION TEMPS REEL ====================
document.addEventListener('DOMContentLoaded', function() {
  document.body.classList.add('loaded');

  const inputs = document.querySelectorAll('.form-control');
  inputs.forEach(input => {
    input.addEventListener('blur', function() {
      valider_champ(this);
    });
    input.addEventListener('input', function() {
      if (this.classList.contains('error')) {
        this.classList.remove('error');
        const errorDiv = document.getElementById(this.id + '-error');
        if (errorDiv) errorDiv.classList.remove('visible');
      }
    });
  });
});

function valider_champ(champ) {
  const errorDiv = document.getElementById(champ.id + '-error');
  let message = '';

  if (champ.hasAttribute('required') && !champ.value.trim()) {
    message = 'Ce champ est requis';
  } else if (champ.type === 'email' && champ.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(champ.value)) {
    message = "Format d'email invalide";
  } else if (champ.type === 'tel' && champ.value && champ.value.length < 8) {
    message = 'Numéro de téléphone invalide';
  }

  if (message && errorDiv) {
    champ.classList.add('error');
    errorDiv.textContent = message;
    errorDiv.classList.add('visible');
  } else if (errorDiv) {
    champ.classList.remove('error');
    errorDiv.classList.remove('visible');
  }
}
