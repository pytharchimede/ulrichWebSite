// main.js

document.addEventListener("DOMContentLoaded", function () {
  // Gestion des événements pour le bouton "Demander un devis"
  const quoteButton = document.querySelector(
    'button.hero-button'
  );
  if (quoteButton) {
    quoteButton.addEventListener("click", function () {
      alert(
        "Merci de votre demande de devis ! Nous vous contacterons bientôt."
      );
    });
  }

  // Gestion des événements pour le formulaire de contact
  const contactForm = document.querySelector("form");
  if (contactForm) {
    contactForm.addEventListener("submit", function (event) {
      event.preventDefault(); // Empêche l'envoi du formulaire
      const firstName = contactForm.querySelector('input[type="text"]').value;
      // const email = contactForm.querySelector('input[type="email"]').value;
      // const message = contactForm.querySelector("textarea").value;

      // Affiche un message de confirmation
      alert(`Merci ${firstName} ! Votre message a été envoyé.`);
      contactForm.reset(); // Réinitialise le formulaire
    });
  }

  // Gestion du menu responsive
  const menuToggle = document.querySelector(".menu-toggle");
  const nav = document.querySelector("header nav");

  if (menuToggle && nav) {
    menuToggle.addEventListener("click", function () {
      nav.classList.toggle("active");
    });

    // Ferme le menu quand on clique sur un lien (en mobile)
    nav.querySelectorAll("a").forEach(link => {
      link.addEventListener("click", function () {
        if (window.innerWidth <= 800) {
          nav.classList.remove("active");
        }
      });
    });

    // Ferme le menu si on repasse en desktop
    window.addEventListener("resize", function () {
      if (window.innerWidth > 800) {
        nav.classList.remove("active");
      }
    });
  }
});
