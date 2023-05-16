//----------------- VIDEO OFF SUR MOBILE ----------------- 

// Sélectionner la vidéo et la balise source
var video = document.querySelector('.banner-video');
var source = video.querySelector('source');

// Vérifier la largeur de l'écran
if (window.innerWidth <= 700) {
  // Supprimer la source vidéo
  source.removeAttribute('src');
  // Arrêter la vidéo
  video.pause();
}

//----------------- PARALLAX AVEC SKROLLR ----------------- 

var s = skrollr.init();

if (s.isMobile()) {
    s.destroy();
}

//----------------- APPARITION TITRES ----------------- 

window.addEventListener("scroll", function() {
  var story = document.querySelector(".title-story");
  var studio = document.querySelector(".title-studio");
  var koukaki = document.querySelector(".title-koukaki");

  var positionStory = story.getBoundingClientRect();
  var positionStudio = studio.getBoundingClientRect();
  var positionKoukaki = koukaki.getBoundingClientRect();

  // Si le haut de l'image de fond est visible
  if (positionStory.top >= 0 && positionStory.bottom <= window.innerHeight) {
    story.classList.add("title-visible");
  } else {
    story.classList.remove("title-visible");
  }

  if (positionStudio.top >= 0 && positionStudio.bottom <= window.innerHeight) {
    studio.classList.add("title-visible");
  } else {
    studio.classList.remove("title-visible");
  }

  if (positionKoukaki.top >= 0 && positionKoukaki.bottom <= window.innerHeight) {
    koukaki.classList.add("title-visible");
  } else {
    koukaki.classList.remove("title-visible");
  }

});

//----------------- SWIPER ----------------- 

const swiper = new Swiper('.mySwiper', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: '.swiper-pagination',
    },
    on: {
      init: function() {
        /* Définir une marge gauche négative pour centrer la première diapositive */
        const activeSlide = this.slides[this.activeIndex];
        const marginLeft = -activeSlide.offsetWidth / 2;
        this.wrapperEl.style.marginLeft = marginLeft + 'px';
        
        /* Supprimer la marge négative si la largeur de l'écran est inférieure à un certain seuil */
        if (window.innerWidth < 768) {
          this.wrapperEl.style.marginLeft = 0;
        }
      },
    },
});

//----------------- MENU DE NAVIGATION ----------------- (fermeture au click sur les liens)

const menuLinks = document.querySelectorAll('.menu-lnk');
const menu = document.querySelector('.main-navigation');

function closeMenu() {
  menu.classList.remove('toggled')
}

menuLinks.forEach(link => {
  link.addEventListener('click', closeMenu);
});