<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/clipboard.min.js"></script>
<script src="/js/project.js"></script>
<script src="/js/jquery.filterizr.min.js"></script>
<script src="/js/jarallax.min.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/js/contact_me.js"></script>
<script src="/js/jqBootstrapValidation.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD28d0FNPBTHJoGbc-a86x7VzFwafsVDxs&callback=initMap"></script>

<!-- Script para el mapa -->
<script>
      function initMap() {
        var uluru = {lat: -34.600898, lng: -58.372897};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          icon: 'img/map-marker-foster.png'
        });
      }
    </script>


<script type="text/javascript">
	//Script de Bootstrap
	$(function () {
	  $("[data-toggle='tooltip']").tooltip();
	});
	$(function () {
  	$('[data-toggle="popover"]').popover()
  })
</script>

<!-- Se inicializa el WOW.js -->
<script>
  new WOW().init();
</script>


<!-- Script para que carousel se pueda pasar de slide haciendo swipe en mobile -->
<script>
  $(document).ready(function(){
    $(".carousel").on("touchstart", function(event){
      var xClick = event.originalEvent.touches[0].pageX;
      $(this).one("touchmove", function(event){
        var xMove = event.originalEvent.touches[0].pageX;
        if( Math.floor(xClick - xMove) > 5 ){
          $(this).carousel('next');
        }
        else if( Math.floor(xClick - xMove) < -5 ){
          $(this).carousel('prev');
        }
      });
      $(".carousel").on("touchend", function(){
        $(this).off("touchmove");
      });
    });        
  });
</script>


<!-- Script Form Material Design -->
<script>
  $(".form-material .form-control").focus(function() {
    $(this).closest('.form-group').addClass("is-focused");
  }).blur(function(){
    $(this).closest('.form-group').removeClass('is-focused');
  });

  $('.form-control').blur(function(){
    if( $(this).val().length === 0 ) {
        $(this).closest('.form-group').addClass('is-empty');
        $(this).closest('.form-group').removeClass('is-fixed');
    }
    else{
      $(this).closest('.form-group').removeClass('is-empty');
      $(this).closest('.form-group').addClass('is-fixed');
    }
  });
</script>

<!-- Script para el navbar -->
<script>
  $(document).ready(function(){
    $(window).scroll(function() {
      if ($(window).scrollTop() >= 100) {
        $('.navbar-animation-top').addClass('scroll');
      }
      else{
        $('.navbar-animation-top').removeClass('scroll');
      }
    });    
  });
</script>


<!-- Script para ir a explanation al hacer click en flecha -->
<script>
  $(document).on('click', '#more', function(){
    $("html, body").animate({ scrollTop: $(".explanation").offset().top }, 1000);
  });    
</script>

<!-- Script para ocultar el navbar y mostrarlo en fade in al scrollear -->

<script>
  $('.navbar').hide();
  $(document).ready(function() {
    $(window).scroll(function() {
      if ($(document).scrollTop() > 100) {
        $('.navbar').fadeIn('slow').addClass('navbar-fixed-top');
      }
      else {
        $('.navbar').fadeOut('slow');
      }
    });
  })
</script>