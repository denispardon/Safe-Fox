// Modal windows
window.onscroll = function showHeader() {
    let header = document.querySelector ('.header');
    if(window.pageYOffset > 200) {
        header.classList.add('header__fixed');
    } else {
        header.classList.remove('header__fixed');
    }
}

// animation page
  $(document).ready(function() {    
    $("body").css("opacity", "1");
  });

  // animation
  AOS.init({
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
    
  
    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 800, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
  
  });

// btn-up
const btnUp = {
  el: document.querySelector('.btn-up'),
  scrolling: false,
  show() {
    if (this.el.classList.contains('btn-up_hide') && !this.el.classList.contains('btn-up_hiding')) {
      this.el.classList.remove('btn-up_hide');
      this.el.classList.add('btn-up_hiding');
      window.setTimeout(() => {
        this.el.classList.remove('btn-up_hiding');
      }, 300);
    }
  },
  hide() {
    if (!this.el.classList.contains('btn-up_hide') && !this.el.classList.contains('btn-up_hiding')) {
      this.el.classList.add('btn-up_hiding');
      window.setTimeout(() => {
        this.el.classList.add('btn-up_hide');
        this.el.classList.remove('btn-up_hiding');
      }, 300);
    }
  },
  addEventListener() {
    // при прокрутке окна (window)
    window.addEventListener('scroll', () => {
      const scrollY = window.scrollY || document.documentElement.scrollTop;
      if (this.scrolling && scrollY > 0) {
        return;
      }
      this.scrolling = false;
      // если пользователь прокрутил страницу более чем на 200px
      if (scrollY > 400) {
        // сделаем кнопку .btn-up видимой
        this.show();
      } else {
        // иначе скроем кнопку .btn-up
        this.hide();
      }
    });
    // при нажатии на кнопку .btn-up
    document.querySelector('.btn-up').onclick = () => {
      this.scrolling = true;
      this.hide();
      // переместиться в верхнюю часть страницы
      window.scrollTo({
        top: 0,
        left: 0,
        behavior: 'smooth'
      });
    }
  }
}

btnUp.addEventListener();

// Scroll
jQuery(document).ready(function() {
  jQuery("a.info__link, a.footer__link").click(function () {
  elementClick = jQuery(this).attr("href")
  destination = jQuery(elementClick).offset().top;
  jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 1100);
  return false;
  });
  });