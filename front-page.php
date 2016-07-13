<?php get_template_part('parts/header'); ?>
 <div id="slide-panel" class="hidden-xs hidden-sm">
    <a href="#" class="btn" id="opener">Events <i class="fa fa-angle-up"></i></a>
    <div class="panel-content"><h1><?php echo CFS()->get('event_title'); ?></h1>
    <p><?php echo CFS()->get('event_text'); ?></p>
    <a class="btn" href="<?php echo CFS()->get('event_link'); ?>">Read more</a>
    </div>
 </div>

<div id="slide-panel-forms" class="hidden-xs hidden-sm">
    <a href="#" class="btn" id="opener-forms">Forms <i class="fa fa-angle-up"></i></a>
    <div class="panel-content-forms"><h1>Forms</h1>
    <p><ul>
	    <li><a href="<?php echo CFS()->get('form_link_1'); ?>"><i class="fa fa-file-pdf-o"></i> <?php echo CFS()->get('form_title_1'); ?></a></li>
	     <li><a href="<?php echo CFS()->get('form_link_2'); ?>"><i class="fa fa-file-pdf-o"></i> <?php echo CFS()->get('form_title_2'); ?></a></li>
	      <li><a href="<?php echo CFS()->get('form_link_3'); ?>"><i class="fa fa-file-pdf-o"></i> <?php echo CFS()->get('form_title_3'); ?></a></li>
    </ul></p>
    <a class="btn" href="http://www5.njit.edu/humanresources/services/forms/">All Forms</a>
    </div>
 </div>
 
 

<div id="mycarousel" class="carousel slide carousel-fade" data-ride="carousel">
	
	  <a data-scroll class="view-video-btn hidden-xs hidden-sm" href="#view-video">Learn More <i class="fa fa-angle-down" aria-hidden="true"></i>
	</a>
  
	  <!-- Wrapper for slides -->
  				<div class="carousel-inner" role="listbox">
	     			<?php $fields = CFS()->get('slider');
	                       foreach ($fields as $field) { ?>
	                       <?php echo '<div class="item">' ?>
						   		<?php echo '<img src="'.$field['slide'].'" />' ?>
						   			<?php echo '</div>' ?>
	                       <?php   }  ?>
     					
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
	 <a class="item" href="http://www5.njit.edu/humanresources/benefits/">
		 <h2>Benefits</h2>
	 </a>
 </div><!-- /col-md-4 -->
<div class="col-md-4">
	 <a class="item" href="http://www5.njit.edu/humanresources/services/">
		 <h2>HR Services</h2>
	 </a>
</div><!-- /col-md-4 -->
<div class="col-md-4">
	 <a class="item" href="http://www5.njit.edu/humanresources/supervisors/">
		 <h2>Supervisor's Toolkit</h2>
	 </a>
</div><!-- /col-md-4 -->

</div><!-- /row -->
</div><!-- /container -->
</div><!-- /fp-sub-menu -->





<span id="view-video"></span>
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
       <video id="video" controls>
	<source src="<?php bloginfo('template_directory') ?>/video/njit-eco.mp4" type="video/mp4">
	<source src="<?php bloginfo('template_directory') ?>/video/njit-eco.webm" type="video/webm">
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
							
							

		</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /home-content -->



<div class="fp-forms hidden-md hidden-lg">
<div class="container">
	
  
	
	
  <div class="row">
	  <div class="col-md-12">
<a href="http://www5.njit.edu/humanresources/services/forms/" class="btn">View All Forms</a>
</div>
  </div>
</div><!-- /container -->
 </div><!-- /fp-forms -->


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