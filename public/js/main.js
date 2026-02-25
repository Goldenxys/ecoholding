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

// ==================== MENU MOBILE ====================
const navbarToggle = document.querySelector('.navbar-toggle');
const navbarMenu = document.querySelector('.navbar-menu');

function toggleMobileMenu(open) {
  if (!navbarToggle || !navbarMenu) return;
  const isActive = typeof open === 'boolean' ? open : !navbarMenu.classList.contains('active');
  navbarMenu.classList.toggle('active', isActive);
  document.body.style.overflow = isActive ? 'hidden' : '';
  const spans = navbarToggle.querySelectorAll('span');
  if (isActive) {
    spans[0].style.transform = 'rotate(45deg) translateY(8px)';
    spans[1].style.opacity = '0';
    spans[2].style.transform = 'rotate(-45deg) translateY(-8px)';
  } else {
    spans.forEach(span => { span.style.transform = 'none'; span.style.opacity = '1'; });
  }
}

if (navbarToggle) {
  navbarToggle.addEventListener('click', function() { toggleMobileMenu(); });
}

// Chevrons injectés dans les liens parents de dropdown
document.querySelectorAll('.navbar-menu .dropdown > a').forEach(function(link) {
  var chevron = document.createElement('i');
  chevron.className = 'fas fa-chevron-down mobile-chevron';
  link.appendChild(chevron);
});

// Toggle dropdown au clic (mobile uniquement)
document.querySelectorAll('.navbar-menu .dropdown > a').forEach(function(link) {
  link.addEventListener('click', function(e) {
    if (window.innerWidth > 768) return;
    e.preventDefault();
    var dropdown = this.parentElement;
    var isOpen = dropdown.classList.contains('open');
    document.querySelectorAll('.navbar-menu .dropdown').forEach(function(d) {
      d.classList.remove('open');
    });
    if (!isOpen) dropdown.classList.add('open');
  });
});

// Fermer tout au clic sur un sous-lien
document.querySelectorAll('.navbar-menu .dropdown-menu a').forEach(function(link) {
  link.addEventListener('click', function() {
    if (window.innerWidth > 768) return;
    var dropdown = this.closest('.dropdown');
    if (dropdown) dropdown.classList.remove('open');
    toggleMobileMenu(false);
  });
});

// Fermer au clic sur un lien direct (non dropdown)
document.querySelectorAll('.navbar-menu > li:not(.dropdown) > a').forEach(function(link) {
  link.addEventListener('click', function() {
    if (window.innerWidth <= 768) toggleMobileMenu(false);
  });
});

// Fermer menu et dropdowns au resize
window.addEventListener('resize', function() {
  if (window.innerWidth > 768) {
    if (navbarMenu && navbarMenu.classList.contains('active')) toggleMobileMenu(false);
    document.querySelectorAll('.navbar-menu .dropdown').forEach(function(d) {
      d.classList.remove('open');
    });
  }
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
