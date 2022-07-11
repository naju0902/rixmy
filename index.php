<!doctype html>
<html lang="es">

<head>
  <title>Rixmy</title>
  <?php include "includes/head.php"; ?> 
</head>

<body>
  <?php include "includes/nav.php"; ?> 
  <header id="myCarousel" class="carousel1 carousel slide">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <div class="fill" style="background-image:url('img/slider1.png');"></div>
        <div class="carousel-caption">
          <h2>Somos <span class="text">Rixmy</span></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p>
          <a class="btn" href="#">Lorem ipsum</a>
        </div>
      </div>
      <div class="item">
        <div class="fill" style="background-image:url('img/slider2.png');"></div>
        <div class="carousel-caption">
          <h2>2</h2>
          <p>2</p>
          <a class="btn" href="#">2</a>
        </div>
      </div>
      <div class="item">
        <div class="fill" style="background-image:url('img/slider3.png');"></div>
        <div class="carousel-caption">
          <h2>3</h2>
          <p>3</p>
          <a class="btn" href="#">3</a>
        </div>
      </div>
      <div class="item">
        <div class="fill" style="background-image:url('img/slider3.png');"></div>
        <div class="carousel-caption">
          <h2>4</h2>
          <p>4</p>
          <a class="btn" href="#">4</a>
        </div>
      </div>
      <div class="item">
        <div class="fill" style="background-image:url('img/slider3.png');"></div>
        <div class="carousel-caption">
          <h2>5</h2>
          <p>5</p>
          <a class="btn" href="#">5</a>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="icon-prev"></span></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="icon-next"></span></a>
  </header>
  <!-- /slider -->

  <script type="text/javascript">
    const words = ["Rixmy", "Rixmy", "Rixmy", "Rixmy"],
    text = document.querySelector(".text");
    // Generator (iterate from 0-3)
    function* generator() {
      var index = 0;
      while (true) {
        yield index++;
        if (index > 3) {
          index = 0;
        }
      }
    }

    // Printing effect
    function printChar(word) {
      let i = 0;
      text.innerHTML = "";
      let id = setInterval(() => {
        if (i >= word.length) {
          deleteChar();
          clearInterval(id);
        } else {
          text.innerHTML += word[i];
          i++;
        }
      }, 500);
    }

    // Deleting effect
    function deleteChar() {
      let word = text.innerHTML;
      let i = word.length - 1;
      let id = setInterval(() => {
        if (i >= 0) {
          text.innerHTML = text.innerHTML.substring(0, text.innerHTML.length - 1);
      i--;
        } else {
          printChar(words[gen.next().value]);
          clearInterval(id);
        }
      }, 100);
    }

    // Initializing generator
    let gen = generator();

    printChar(words[gen.next().value]);
  </script>

  <div class="divider">
    <h2>Nuestros servicios</h2>
  </div>

  <main id="servicios">
    <article>
      <a href="">
        <h3>Lorem</h3>
        <i class="fa-solid fa-envelope"></i>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </a>
    </article>
    <article>
      <a href="">
        <h3>Lorem</h3>
        <i class="fa-solid fa-envelope"></i>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </a>
    </article>
    <article>
      <a href="">
        <h3>Lorem</h3>
        <i class="fa-solid fa-envelope"></i>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </a>
    </article>
  </main>

  <br><br>

  <article class="tab1">
    <div id="tab-1">
      <ul role="tablist">
        <div class="slider"></div>
        <li class="nav-tabs active">
          <a class="cargar" id="1-tab" data-toggle="tab" href="#1" role="tab" aria-controls="1" aria-selected="true"><i class="fas fa-home"></i> Mision</a>
        </li>
        <li class="nav-tabs">
          <a id="2-tab" data-toggle="tab" href="#2" role="tab" aria-controls="2" aria-selected="false"><i class="fas fa-id-card"></i> Vision</a>
        </li>
        <li class="nav-tabs">
          <a id="3-tab" data-toggle="tab" href="#3" role="tab" aria-controls="3" aria-selected="false"><i class="fas fa-map-signs"></i> Nuestra historia</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active in" id="1" role="tabpanel" aria-labelledby="1-tab">Nuestra mision</div>
        <div class="tab-pane fade" id="2" role="tabpanel" aria-labelledby="2-tab">Nuestra vision</div>
        <div class="tab-pane fade" id="3" role="tabpanel" aria-labelledby="3-tab">Nuestra historia</div>
      </div>
    </div>
    <img src="img/slider1.png">
  </article>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.cargar').click();
    });
    $(".nav-tabs a").click(function() {
      var position = $(this).parent().position();
      var width = $(this).parent().width();
      $(".slider").css({"left":+ position.left,"width":width});
    });
    var actWidth = $(".nav-tabs").find(".active").parent("li").width();
    var actPosition = $(".nav-tabs .active").position();
    $(".slider").css({"left":+ actPosition.left,"width": actWidth});
  </script>

  <main id="form-contact">
    <aside>
      <h2>Lorem</h2>
      <p>Lorem</p>
    </aside>
    <section>
      <article>
        <form>
          <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name">
          </div>
          <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
          </div>
          <div class="textarea">
            <label for="contents">Contenido</label>
            <textarea id="contents"></textarea>
          </div>
          <button id="send-email" type="submit" class="btn2"><i class="fa-solid fa-envelope"></i>&nbsp;Enviar</button>
        </form>
      </article>
    </section>
  </main>

  <div class="divider">
    <h2>Nuestro team</h2>
  </div>

  <section id="team" class="slider">
    <article class="indicadors">
      <span class="swiper-button-next"><i class="fa-solid fa-circle-arrow-right"></i></span>
      <span class="swiper-button-prev"><i class="fa-solid fa-circle-arrow-left"></i></span>
    </article>
    <div class="swiper-container image-slider">
      <div class="swiper-wrapper">

        <article class="swiper-slide our-team">
          <div class="picture">
            <img class="img-fluid" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png">
          </div>
          <h3>Nombre y Apellido</h3>
          <h4>Rol</h4>
          <ul class="social">
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
          </ul>
        </article>

        <article class="swiper-slide our-team">
          <div class="picture">
            <img class="img-fluid" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png">
          </div>
          <h3>Nombre y Apellido</h3>
          <h4>Rol</h4>
          <ul class="social">
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
          </ul>
        </article>

        <article class="swiper-slide our-team">
          <div class="picture">
            <img class="img-fluid" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png">
          </div>
          <h3>Nombre y Apellido</h3>
          <h4>Rol</h4>
          <ul class="social">
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
          </ul>
        </article>

        <article class="swiper-slide our-team">
          <div class="picture">
            <img class="img-fluid" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png">
          </div>
          <h3>Nombre y Apellido</h3>
          <h4>Rol</h4>
          <ul class="social">
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
          </ul>
        </article>

        <article class="swiper-slide our-team">
          <div class="picture">
            <img class="img-fluid" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png">
          </div>
          <h3>Nombre y Apellido</h3>
          <h4>Rol</h4>
          <ul class="social">
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
          </ul>
        </article>

        <article class="swiper-slide our-team">
          <div class="picture">
            <img class="img-fluid" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png">
          </div>
          <h3>Nombre y Apellido</h3>
          <h4>Rol</h4>
          <ul class="social">
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
          </ul>
        </article>

        <article class="swiper-slide our-team">
          <div class="picture">
            <img class="img-fluid" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png">
          </div>
          <h3>Nombre y Apellido</h3>
          <h4>Rol</h4>
          <ul class="social">
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
          </ul>
        </article>

        <article class="swiper-slide our-team">
          <div class="picture">
            <img class="img-fluid" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png">
          </div>
          <h3>Nombre y Apellido</h3>
          <h4>Rol</h4>
          <ul class="social">
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="#" aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
          </ul>
        </article>

      </div>
    </div>
  </section>

  <br><br><br>
  <?php require "includes/footer.php"; ?><!-- Scripts -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script type="text/javascript">

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

</script>
</body>
</html>						