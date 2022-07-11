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