
<div class="footer-bot">
<div class="container">
  <div class="row">
 <div class="col-md-6">
	 <p>New Jersey Institute of Technology<br />
University Heights Newark, New Jersey 07102</p>
 </div><!-- /col-md-6 -->
<div class="col-md-6">
	<div class="footer-right">
	<p>
		<a href="http://www5.njit.edu/financialaid/typesofaid/studentemployment">Student Employment</a> | <a href="http://www.njit.edu/about/visit/gettingtonjit.php">Maps & Directions</a>
	</p>
	<div class="social-bot">
		<a target="_blank" href="http://www.facebook.com/pages/Newark-NJ/NJIT/7185471825"><i class="fa fa-facebook-square"></i></a> <a target="_blank" href="http://twitter.com/njit"><i class="fa fa-twitter-square"></i></a> <a target="_blank" href="http://youtube.com/njit"><i class="fa fa-youtube-square"></i></a> <a target="_blank" href="http://www.flickr.com/photos/njit"><i class="fa fa-flickr"></i></a>
	</div><!-- /social-bot -->
	</div><!-- /footer-right -->
</div><!-- /col-md-6 -->
</div><!-- /row -->
</div><!-- /container -->
</div><!-- /footer-bot -->


<?php wp_footer(); ?>
<script>
	$('#opener').on('click', function() {		
		var panel = $('#slide-panel');
		$('.fa-angle-up').toggleClass('rotate-open');
		if (panel.hasClass('visible')) {
			panel.removeClass('visible').animate({'right':'-300px'});
		} else {
			
			panel.addClass('visible').animate({'right':'0px'});

		}
		return false;	
	});
	</script>
	
	<script>
	$('#opener-forms').on('click', function() {		
		var panel = $('#slide-panel-forms');
		$('#slide-panel-forms .fa-angle-up').toggleClass('rotate-open-forms');
		if (panel.hasClass('visible')) {
			panel.removeClass('visible').animate({'right':'-300px'});
		} else {
			
			panel.addClass('visible').animate({'right':'0px'});

		}
		return false;	
	});
	</script>
	
	<script>
		var $item = $('.carousel .item'); 
var $wHeight = $(window).height();
$item.eq(0).addClass('active');
$item.height($wHeight); 
$item.addClass('full-screen');

$('.carousel img').each(function() {
  var $src = $(this).attr('src');
  var $color = $(this).attr('data-color');
  $(this).parent().css({
    'background-image' : 'url(' + $src + ')',
    'background-color' : $color
  });
  $(this).remove();
});

$(window).on('resize', function (){
  $wHeight = $(window).height();
  $item.height($wHeight);
});

$('.carousel').carousel({
  interval: 6000,
  pause: "false"
});
</script>
<script>
    smoothScroll.init(); ({
	    speed: 5000,
	    easing: 'easeInOutCubic'
    });
</script>
</body>
</html>

 