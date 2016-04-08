<?php get_template_part('parts/header'); ?>

<div class="container">
  <div class="row">
    
    <div class="col-md-8">
      <div id="content" role="main">
                  <h1><?php the_title()?></h1>
            <h4>
              <em>
                <span class="text-muted" class="author">By <?php the_author() ?>,</span>
                <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
              </em>
            </h4>
            <p class="text-muted" style="margin-bottom: 30px;">
              <i class="glyphicon glyphicon-folder-open"></i>&nbsp; Filed under: <?php _e(''); ?> <?php the_category(', ') ?><br/>
              <i class="glyphicon glyphicon-comment"></i>&nbsp; Comments: <?php comments_popup_link('None', '1', '%'); ?>
            </p>
         
          <?php the_post_thumbnail(); ?>
          <?php the_content()?>
        
        <?php comments_template('/parts/comments.php'); ?>
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

<?php get_template_part('parts/footer'); ?>
