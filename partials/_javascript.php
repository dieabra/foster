<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/clipboard.min.js"></script>
<script src="/js/project.js"></script>




<script type="text/javascript">
	//Script de Bootstrap
	$(function () {
	  $("[data-toggle='tooltip']").tooltip();
	});
	$(function () {
	$('[data-toggle="popover"]').popover()
})
</script>



<!-- Script para animación de navbar fixed -->
<script>

  // get header height (without border)
  var getHeaderHeight = $('.navbar-sticky-animated').outerHeight();

  // init variable for last scroll position
  var lastScrollPosition = 0;

  // set negative top position to create the animated header effect
  $('.navbar-sticky-animated').css('top', '-' + (getHeaderHeight) + 'px');

  $(window).scroll(function() {
    var currentScrollPosition = $(window).scrollTop();

    if ($(window).scrollTop() > 2 * (getHeaderHeight) ) {

	    $('body').addClass('scrollActive').css('padding-top', getHeaderHeight);
        $('.navbar-sticky-animated').css('top', 0);

        if (currentScrollPosition < lastScrollPosition) {
          $('.navbar-sticky-animated').css('top', '-' + (getHeaderHeight) + 'px');
        }
        lastScrollPosition = currentScrollPosition;

      } else {
        $('body').removeClass('scrollActive').css('padding-top', 0);
    }
  });
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