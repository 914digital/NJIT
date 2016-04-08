<div class="footer-top">
<div class="container">
  <div class="row">
<div class="col-md-3 col-sm-3">
                <ul>
                                <li><strong>Prospective Employees</strong></li>
                                <li><a href="#">Career Opportunities</a></li>
                                <li><a href="#">Why NJIT</a></li>
                                <li><a href="#">How To Apply</a></li>
                                <li><a href="#">Benefits</a></li>
                                <li><a href="#">Location</a></li>
                </ul>
                <ul>
                                <li><strong>Student Employees</strong></li>
                                <li><a href="#">Campus Job Openings</a></li>
                </ul>
</div><!-- /col-md-3 -->
<div class="col-md-3 col-sm-3">
                <ul>
                                <li><strong>Current Employees</strong></li>
                                <li><a href="#">Benefits</a></li>
                                <li><a href="#">Parking</a></li>
                                <li><a href="#">Payroll</a></li>
                                <li><a href="#">Compensation &amp; Classification</a></li>
                                <li><a href="#">Resolving Workplace Matters</a></li>
                                <li><a href="#">Resources for Unionized Employees</a></li>
                                <li><a href="#">Retirement Plans</a></li>
                </ul>
</div><!-- /col-md-3 -->
<div class="col-md-3 col-sm-3">
                <ul>
                <li><strong>Supervisor</strong></li>
                <li><a href="#">Benefits</a></li>
                                <li><a href="#">Recruitment</a></li>
                                <li><a href="#">Performance Management</a></li>
                                <li><a href="#">Progressive Discipline</a></li>
                                <li><a href="#">Performance Evaluation</a></li>
                                <li><a href="#">Labor &amp; Employee Relationships</a></li>
                                <li><a href="#">PAF/E-PAF Processing</a></li>
                                <li><a href="#">Employee Separations</a></li>
                                <li><a href="#">Compensation &amp; Classification</a></li>
                                <li><a href="#">Additional Compensation</a></li>
                </ul>
</div><!-- /col-md-3 -->
<div class="col-md-3 col-sm-3">
                <ul>
                                <li><strong>Retired Employees</strong></li>
                                <li><a href="#">Retirement Plans</a></li>
                                <li><a href="#">Retirement Benefits</a></li>
                                <li><a href="#">Retirement Network</a></li>
                </ul>
               
                <div class="divide30"></div><!-- //divide30 -->
                <ul>
                                <li><a href="#"><strong>MISSION</strong></a></li>
                                <li><a href="#"><strong>Forms &amp; Policies</strong></a></li>
                                <li><a href="#"><strong>HR Staff</strong></a></li>
                                <li><a href="#"><strong>Contact Us</strong></a></li>
                </ul>
 
               
</div><!-- /col-md-3 -->
</div><!-- /row -->
</div><!-- /container -->
</div><!-- /footer-top -->

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
		<a href="http://www.njit.edu/about/key-contacts.php">Contact Us</a> | <a href="http://www.njit.edu/about/visit/gettingtonjit.php">Maps & Directions</a> | <a href="http://www.njit.edu/atoz/">A To Z</a>
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
			
</body>
</html>

 