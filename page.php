<?php get_template_part('parts/header'); ?>
<div class="page-content">
<div class="container">
  <div class="row">

    <div class="col-md-8">
      <div id="content" role="main">
        <?php if(have_posts()): while(have_posts()): the_post();?>
            <h1><?php the_title()?></h1>
          <?php the_content()?>
        <?php endwhile; ?> 
        <?php else: ?>
        <?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
        <?php endif;?>
      </div><!-- /#content -->
    </div>
    
    <div class="col-md-4" id="sidebar" role="navigation">
      <?php get_template_part('parts/sidebar'); ?>
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->
</div><!-- /page-content -->

<?php get_template_part('parts/footer'); ?>
