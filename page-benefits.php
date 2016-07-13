<?php
/*
Template Name: Benefits
*/

?>
<?php get_template_part('parts/header'); ?>
<div id="slide-panel">
    <a href="#" class="btn" id="opener">Events <i class="fa fa-angle-up"></i></a>
    <div class="panel-content"><h1><?php echo CFS()->get('event_title', 10); ?></h1>
    <p><?php echo CFS()->get('event_text', 10); ?></p>
    <a class="btn" href="<?php echo CFS()->get('event_link', 10); ?>">Read more</a>
    </div>
 </div>

<div id="slide-panel-forms">
    <a href="#" class="btn" id="opener-forms">Forms <i class="fa fa-angle-up"></i></a>
    <div class="panel-content-forms"><h1>Forms</h1>
    <p><ul>
	    <li><a href="<?php echo CFS()->get('form_link_1', 10); ?>"><i class="fa fa-file-pdf-o"></i> <?php echo CFS()->get('form_title_1', 10); ?></a></li>
	     <li><a href="<?php echo CFS()->get('form_link_2', 10); ?>"><i class="fa fa-file-pdf-o"></i> <?php echo CFS()->get('form_title_2', 10); ?></a></li>
	      <li><a href="<?php echo CFS()->get('form_link_3', 10); ?>"><i class="fa fa-file-pdf-o"></i> <?php echo CFS()->get('form_title_3', 10); ?></a></li>
    </ul></p>
    <a class="btn" href="http://www5.njit.edu/humanresources/services/forms/">All Forms</a>
    </div>
 </div>

<div class="page-content">
<div class="container">
  <div class="row">
	   <div class="col-md-1">
    
    </div><!-- /col-md-1 -->

    <div class="col-md-10">
      <div id="content" role="main">
	       <h1><?php the_title()?></h1>
        <?php if(have_posts()): while(have_posts()): the_post();?>
           
            <div id="contact-top">
          <?php the_content()?>
            </div>
        <?php endwhile; ?> 
        <?php else: ?>
        <?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
        <?php endif;?>
        
        		<div class="benefits">
	        		<div class="row">
	       	            <?php $fields = CFS()->get('benefits');
	                             foreach ($fields as $field) { ?>
	                             <?php echo '<div class="col-md-3">' ?>
	 <?php echo  '<a id="box" href="#'.$field['benefits_id'].'" style="background-image:url('.$field['benefits_image'].');" aria-controls="'.$field['benefits_id'].'" role="tab" data-toggle="tab">' ?> 
	                             <?php echo '<h2>'.$field['benefits_header'].'</h2>' ?>
		                         <?php echo '<div id="overlay">' ?>
									 
									  <?php echo '</div>' ?>
									  <?php echo '</a>' ?>
	                                <?php echo '</div>' ?>
	                                <?php $counter++;
	                                       if ($counter % 4 == 0) {
	                                       echo '</div><div class="divide30"></div><div class="row">';
	                                          } ?>
		                          <?php   }  ?>
	        		</div><!-- /row -->
        </div><!-- /benefits -->
        
        <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="health">
	    <h3>Health, Dental & Vision Care</h3>
	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet sagittis diam. Phasellus id velit diam. Proin quis placerat metus. Aenean pharetra, metus at tempor pulvinar, lorem enim ornare lectus, quis tempus nunc diam in mauris. Praesent gravida magna vel nulla interdum, vitae pulvinar massa consequat. Integer ut arcu ullamcorper, facilisis velit vitae, dapibus elit.</p>
	    
	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet sagittis diam. Phasellus id velit diam. Proin quis placerat metus. Aenean pharetra, metus at tempor pulvinar, lorem enim ornare lectus, quis tempus nunc diam in mauris. Praesent gravida magna vel nulla interdum, vitae pulvinar massa consequat. Integer ut arcu ullamcorper, facilisis velit vitae, dapibus elit.</p>
	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet sagittis diam. Phasellus id velit diam. Proin quis placerat metus. Aenean pharetra, metus at tempor pulvinar, lorem enim ornare lectus, quis tempus nunc diam in mauris. Praesent gravida magna vel nulla interdum, vitae pulvinar massa consequat. Integer ut arcu ullamcorper, facilisis velit vitae, dapibus elit.</p>
	    
	        </div>
    <div role="tabpanel" class="tab-pane" id="retire">
	     <h3>Retirement Plans</h3>
	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet sagittis diam. Phasellus id velit diam. Proin quis placerat metus. Aenean pharetra, metus at tempor pulvinar, lorem enim ornare lectus, quis tempus nunc diam in mauris. Praesent gravida magna vel nulla interdum, vitae pulvinar massa consequat. Integer ut arcu ullamcorper, facilisis velit vitae, dapibus elit.</p>
	    
	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet sagittis diam. Phasellus id velit diam. Proin quis placerat metus. Aenean pharetra, metus at tempor pulvinar, lorem enim ornare lectus, quis tempus nunc diam in mauris. Praesent gravida magna vel nulla interdum, vitae pulvinar massa consequat. Integer ut arcu ullamcorper, facilisis velit vitae, dapibus elit.</p>
	    
	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet sagittis diam. Phasellus id velit diam. Proin quis placerat metus. Aenean pharetra, metus at tempor pulvinar, lorem enim ornare lectus, quis tempus nunc diam in mauris. Praesent gravida magna vel nulla interdum, vitae pulvinar massa consequat. Integer ut arcu ullamcorper, facilisis velit vitae, dapibus elit.</p>
	    
	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet sagittis diam. Phasellus id velit diam. Proin quis placerat metus. Aenean pharetra, metus at tempor pulvinar, lorem enim ornare lectus, quis tempus nunc diam in mauris. Praesent gravida magna vel nulla interdum, vitae pulvinar massa consequat. Integer ut arcu ullamcorper, facilisis velit vitae, dapibus elit.</p>
    </div>
    <div role="tabpanel" class="tab-pane" id="other">
	     <h3>Other University Leaves</h3>
	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet sagittis diam. Phasellus id velit diam. Proin quis placerat metus. Aenean pharetra, metus at tempor pulvinar, lorem enim ornare lectus, quis tempus nunc diam in mauris. Praesent gravida magna vel nulla interdum, vitae pulvinar massa consequat. Integer ut arcu ullamcorper, facilisis velit vitae, dapibus elit.</p>
	    
	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet sagittis diam. Phasellus id velit diam. Proin quis placerat metus. Aenean pharetra, metus at tempor pulvinar, lorem enim ornare lectus, quis tempus nunc diam in mauris. Praesent gravida magna vel nulla interdum, vitae pulvinar massa consequat. Integer ut arcu ullamcorper, facilisis velit vitae, dapibus elit.</p>
    </div>
    <div role="tabpanel" class="tab-pane" id="fsip">
	     <h3>FSIP</h3>
	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet sagittis diam. Phasellus id velit diam. Proin quis placerat metus. Aenean pharetra, metus at tempor pulvinar, lorem enim ornare lectus, quis tempus nunc diam in mauris. Praesent gravida magna vel nulla interdum, vitae pulvinar massa consequat. Integer ut arcu ullamcorper, facilisis velit vitae, dapibus elit.</p>
	    
	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet sagittis diam. Phasellus id velit diam. Proin quis placerat metus. Aenean pharetra, metus at tempor pulvinar, lorem enim ornare lectus, quis tempus nunc diam in mauris. Praesent gravida magna vel nulla interdum, vitae pulvinar massa consequat. Integer ut arcu ullamcorper, facilisis velit vitae, dapibus elit.</p>
	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet sagittis diam. Phasellus id velit diam. Proin quis placerat metus. Aenean pharetra, metus at tempor pulvinar, lorem enim ornare lectus, quis tempus nunc diam in mauris. Praesent gravida magna vel nulla interdum, vitae pulvinar massa consequat. Integer ut arcu ullamcorper, facilisis velit vitae, dapibus elit.</p>
	   
    </div>
  </div>
      
      
            
      </div><!-- /#content -->
    </div><!-- /col-md-8 -->
    
    <div class="col-md-1">
    
    </div><!-- /col-md-1 -->
    
  </div><!-- /.row -->
</div><!-- /.container -->
</div><!-- /page-content -->

<?php get_template_part('parts/footer'); ?>