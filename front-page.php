<?php get_template_part('parts/header'); ?>
 <div id="slide-panel">
    <a href="#" class="btn" id="opener">Events <i class="fa fa-angle-up"></i></a>
    <div class="panel-content"><h1><?php echo CFS()->get('event_title'); ?></h1>
    <p><?php echo CFS()->get('event_text'); ?></p>
    <a class="btn" href="<?php echo CFS()->get('event_link'); ?>">Read more</a>
    </div>
 </div>

<div id="slide-panel-forms">
    <a href="#" class="btn" id="opener-forms">Forms <i class="fa fa-angle-up"></i></a>
    <div class="panel-content-forms"><h1>Forms</h1>
    <p><ul>
	    <li><a href="#"><i class="fa fa-file-pdf-o"></i> Form 1</a><br />
	    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	    </li>
	    <li><a href="#"><i class="fa fa-file-pdf-o"></i> Form 2</a>
	    <br />
	    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	    </li>
	    <li><a href="#"><i class="fa fa-file-pdf-o"></i> Form 3</a>
	    <br />
	    Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
    </ul></p>
    <a class="btn" href="<?php echo CFS()->get('event_link'); ?>">All Forms</a>
    </div>
 </div>



<div id="mycarousel" class="carousel slide carousel-fade" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1"></li>
    <li data-target="#mycarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item">
        <img src="<?php bloginfo('template_directory') ?>/img/slide1.jpg" alt="First Image">
        <div class="carousel-caption">
        </div>
    </div>
    <div class="item">
        <img src="<?php bloginfo('template_directory') ?>/img/slide2.jpg" alt="Second Image">
        <div class="carousel-caption">
            
        </div>
    </div>
    <div class="item">
        <img src="<?php bloginfo('template_directory') ?>/img/slide3.jpg" alt="Third Image">
        <div class="carousel-caption">
        </div>
    </div>

     </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="fp-sub-menu">
<div class="container">
  <div class="row">
	  
 <div class="col-md-4">
	 <a class="item" href="#">
		 <h2>Benefits</h2>
	 </a>
 </div><!-- /col-md-4 -->
<div class="col-md-4">
	 <a class="item" href="#">
		 <h2>HR Services</h2>
	 </a>
</div><!-- /col-md-4 -->
<div class="col-md-4">
	 <a class="item" href="#">
		 <h2>Supervisor's Toolkit</h2>
	 </a>
</div><!-- /col-md-4 -->

</div><!-- /row -->
</div><!-- /container -->
</div><!-- /fp-sub-menu -->






	<div class="home-content">
		
				<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="video-background">
	<a href="#" data-toggle="modal" data-target="#myModal" id="play-video">
		 <img style="width:100%" src="<?php bloginfo('template_directory') ?>/img/home-video.png" />
	</a><!-- /home-video -->
		 		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	     <div class="modal-header">
        <button type="button" class="close" id="close-video" data-dismiss="modal" aria-label="Close"><span class="close-full" aria-hidden="true">&times;</span></button>
        
      </div>

        <div class="modal-body">
       <video id="video">
	<source src="<?php bloginfo('template_directory') ?>/video/hr-video.mp4" type="video/mp4">
	<source src="<?php bloginfo('template_directory') ?>/video/home-video.webm" type="video/webm">
</video>
	      

<div id="video-controls">
	<button type="button" id="play-pause"><i class="fa fa-pause fa-2x"></i></button>
	<button type="button" id="mute"><i class="fa fa-microphone-slash fa-2x"></i></button>
  </div><!-- Video Controls -->
      </div>
        </div>
  </div>
</div>
					</div><!-- /video-background -->
			</div><!-- /col-md-12 -->
							
							<div class="mobileonly">
							<div class="col-md-4 col-sm-12">
								<div class="home-careers">
									<h1>CAREER OPPORTUNITIES</h1>
									<a class="career-single" href="<?php echo CFS()->get('career_link_one'); ?>">
										<h2><?php echo CFS()->get('career_title_one'); ?></h2>
										<p><?php echo CFS()->get('career_des_one'); ?></p>
									</a><!-- /career-single -->
									
									<a class="career-single" href="<?php echo CFS()->get('career_link_two'); ?>">
										<h2><?php echo CFS()->get('career_title_two'); ?></h2>
										<p><?php echo CFS()->get('career_des_two'); ?></p>
									</a><!-- /career-single -->
									
									<a class="career-single" href="<?php echo CFS()->get('career_link_three'); ?>">
										<h2><?php echo CFS()->get('career_title_three'); ?></h2>
										<p><?php echo CFS()->get('career_des_three'); ?></p>
									</a><!-- /career-single -->
									
									<a class="btn" href="#">View All</a>
									
								</div><!-- /home-careers -->
	
				</div><!-- /col-md-4 -->
							</div><!-- /mobileonly -->

		</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /home-content -->


<div class="mobileonly">
<div class="fp-forms">
<div class="container">
	
  <div class="row">
	  <div class="col-md-12"><h1>REQUESTED FORMS</h1>
	  </div>
	  
  </div><!-- /row -->
  <div class="row">
<?php
$fields = CFS()->get('fp_forms');
  foreach ($fields as $field) { ?>
    <?php echo '<div class="col-md-4">
	    <h3><a href="'.$field['fp_form_link'].'">
	        '.$field['fp_form_title'].'	<br />
	        <i class="fa fa-file-pdf-o"></i>  
	        </a></h3>
	        <p>'.$field['form_description'].'</p>     
	       <p><a href="'.$field['fp_form_link'].'">Download <i class="fa fa-angle-down"></i></a></p>
	       </div>'  ?>               
			<?php   }  ?>

</div><!-- /row -->
	
  <div class="row">
	  <div class="col-md-12">
<a href="#" class="btn">View All Forms</a>
</div>
  </div>
</div><!-- /container -->
 </div><!-- /fp-forms -->
</div><!-- /mobileonly -->

<div class="fp-mission">
<div class="container">
  <div class="row">
 <div class="col-md-4">
	 <h3>HR's Vision</h3>
	 <p>To assist in building a stronger educational community by providing focused, high-quality, and value-driven people management processes that will serve as a stimulus for continuous improvement.</p>
 </div><!-- /col-md-4 -->
<div class="col-md-4">
	<h3>HR's Mission</h3>
	<p>To provide prioritized, “best practice” processes focused on results and growth of positive relationships.</p>
</div><!-- /col-md-4 -->
<div class="col-md-4">
	<h3>HR's Promise</h3>
	<p>To provide professional and responsive HR partnerships, every day, in every way.
</p>
</div><!-- /col-md-4 -->
</div><!-- /row -->
</div><!-- /container -->
</div><!-- /fp-mission -->



<?php get_template_part('parts/footer'); ?>