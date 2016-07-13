<?php
/*
Template Name: Contact Us
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
      
      
      <div class="hr-staff">
	      <h2>HR Staff Directory</h2>
	    
		     
	          <?php
	            $fields = CFS()->get('staff');
	              foreach ($fields as $field) { ?>
	              
	            <div class="staff-member">
	              <div class="row">
		              <div class="col-md-3">
			              <?php echo '<img src="'.$field['staff_image'].'">' ?>
		              </div>
		              <div class="col-md-9">
	                 <?php echo '<h3>'.$field['name'].', <span class="staff-title">'.$field['title'].'</span></h3>' ?>
	                
		             
		               
	                 <?php echo '<p><strong><i class="fa fa-phone" aria-hidden="true"></i> Phone: </strong>'.$field['phone'].' <span class="spacer">|</span> ' ?>
	                 <?php echo '<strong><i class="fa fa-envelope" aria-hidden="true"></i> Email: </strong><a href="'.$field['email'].'">'.$field['email'].'</a></p>' ?>
		               	              	<?php if(!empty($field['primary_focus'])) { ?> 
	              	<div class="divide30"></div>
	              	 <h5>Primary Focus</h5>
	                  <?php echo '<p>'.$field['primary_focus'].'</p>' ?>
	                   <?php } ?>
	             
	              <?php if(!empty($field['biography'])) { ?>
	                 <h5>Biography</h5>
	                  <?php echo '<p>'.$field['biography'].'</p>' ?>
	                   <?php } ?>
	                    <?php echo '</div>' ?>
	                    </div>
	              </div>

	              
	                        <?php   }  ?>
	                        
	     		                        
	      
      </div><!-- /hr-staff -->
      
      </div><!-- /#content -->
    </div>
    
    <div class="col-md-1">
    
    </div><!-- /col-md-1 -->
    
  </div><!-- /.row -->
</div><!-- /.container -->
</div><!-- /page-content -->

<?php get_template_part('parts/footer'); ?>