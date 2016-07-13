<?php
/*
Template Name: Benefits B
*/

?>
<?php get_template_part('parts/header'); ?>
<div class="page-content">
<div class="container">
  <div class="row">

    <div class="col-md-8">
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
	        		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Health, Dental, & Vision Care Plans
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Retirement Plans
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Other University Leaves
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
          FSIP
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>        </div><!-- /benefits -->
      
      
            
      </div><!-- /#content -->
    </div><!-- /col-md-8 -->
    
    <div class="col-md-4" id="sidebar" role="navigation">
      <div class="sidebar-forms"><h1>Popular Forms</h1>
    <p><ul>
	    <li><a href="<?php echo CFS()->get('form_link_1', 10); ?>"><i class="fa fa-file-pdf-o"></i> <?php echo CFS()->get('form_title_1', 10); ?></a></li>
	     <li><a href="<?php echo CFS()->get('form_link_2', 10); ?>"><i class="fa fa-file-pdf-o"></i> <?php echo CFS()->get('form_title_2', 10); ?></a></li>
	      <li><a href="<?php echo CFS()->get('form_link_3', 10); ?>"><i class="fa fa-file-pdf-o"></i> <?php echo CFS()->get('form_title_3', 10); ?></a></li>
    </ul></p>
    <a class="btn" href="http://www5.njit.edu/humanresources/services/forms/">All Forms</a>
    </div><!-- /sidebar-forms -->
    
     <div class="sidebar-forms"><h1>Upcoming Events</h1>
    
    <h2><?php echo CFS()->get('event_title', 10); ?></h2>
    <p><?php echo CFS()->get('event_text', 10); ?></p>
    <a class="btn" href="<?php echo CFS()->get('event_link', 10); ?>">Read more</a>
    </div><!-- /sidebar-forms -->

    </div><!-- /col-md-4 -->
    
  </div><!-- /.row -->
</div><!-- /.container -->
</div><!-- /page-content -->

<?php get_template_part('parts/footer'); ?>