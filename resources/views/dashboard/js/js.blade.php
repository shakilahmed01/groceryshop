<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('Dashboard/assets/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('Dashboard/assets/js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->

<!-- js -->
<script src="{{asset('Dashboard/assets/js/jquery-1.11.1.min.js')}}"></script>
<!-- //js -->

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->

<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop();
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });

	});
	</script>
<!-- //script-for sticky-nav -->


<!-- flexSlider -->

  <script defer src="{{asset('Dashboard/assets/js/jquery.flexslider.js')}}"></script>
  <script type="text/javascript">
  $(window).load(function(){
    $('.flexslider').flexslider({
    animation: "slide",
    start: function(slider){
      $('body').removeClass('loading');
    }
    });
  });
  </script>
<!-- //flexSlider -->


<!-- //here ends scrolling icon -->
<script src="{{asset('Dashboard/assets/js/minicart.js')}}"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>


  <!-- Bootstrap Core JavaScript -->
  <script src="{{asset('Dashboard/assets/js/bootstrap.min.js')}}"></script>
  <script>
  $(document).ready(function(){
      $(".dropdown").hover(
          function() {
              $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
              $(this).toggleClass('open');
          },
          function() {
              $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
              $(this).toggleClass('open');
          }
      );
  });
  </script>
  <!-- here stars scrolling icon -->
  	<script type="text/javascript">
  		$(document).ready(function() {
  			/*
  				var defaults = {
  				containerID: 'toTop', // fading element id
  				containerHoverID: 'toTopHover', // fading element hover id
  				scrollSpeed: 1200,
  				easingType: 'linear'
  				};
  			*/

  			$().UItoTop({ easingType: 'easeOutQuart' });

  			});
  	</script>

		<!-- js -->
		<script src="{{asset('Dashboard/assets/js/jquery-1.11.1.min.js')}}"></script>
		<!-- //js -->
		 <script src="{{asset('Dashboard/assets/js/okzoom.js')}}"></script>
		  <script>
		    $(function(){
		      $('#example').okzoom({
		        width: 150,
		        height: 150,
		        border: "1px solid black",
		        shadow: "0 0 5px #000"
		      });
		    });
		  </script>
