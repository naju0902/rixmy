// Hace funcionar el sidebar con la interaccion del #btne

function sidebar() {
  jQuery(document).ready(function($){
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".navsidebar");
    btn.onclick = function() {
      sidebar.classList.toggle("active");
      if(btn.classList.contains("bx-menu")){
        btn.classList.replace("bx-menu", "bx-menu-alt-right");
      }
      else {
       btn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    }
    $(document).ready(function() {
      $(document).on("click", "#btn", function() {
        $(".nav-btn").toggleClass("on");
        $(".overlay").toggleClass("open-overlay");
      });
      $(document).on("click", ".overlay", function() {
        $(".navsidebar").removeClass("active");
        $(".overlay").removeClass("open-overlay");
      $(".nav-btn").removeClass("on");
      });
    });
  });
}

// Slider team

function sliderTeam() {
  (function($) {
    "use strict";
    /* Image Slider - Swiper */
    var imageSlider = new Swiper('.image-slider', {
      autoplay: {
        delay: 3000,
        disableOnInteraction: false
      },
      loop: false,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      spaceBetween: 30,
      slidesPerView: 5,
      breakpoints: {
        // when window is <= 516px
        516: {
          slidesPerView: 1,
          spaceBetween: 10
        },
        // when window is <= 767px
        767: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        // when window is <= 991px
        991: {
          slidesPerView: 3,
          spaceBetween: 30
        },
        // when window is <= 1199px
        1199: {
          slidesPerView: 4,
          spaceBetween: 30
        },
      }
    });
  })(jQuery);
}