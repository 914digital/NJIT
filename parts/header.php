<!DOCTYPE html>
<html>
<head>
	<title><?php is_front_page() ? bloginfo('name') : wp_title('•', true, ''); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->  
 
 <div class="desktoponly">
	 <div class="top-menu">
	 <div class="container">
	   <div class="row">
	 <a class="navbar-brand" href="http://njit.org"><img src="<?php bloginfo('template_directory') ?>/img/njit-logo.png" /></a>  <a class="hr-logo" href="http://hr.njit.edu">
			      <img src="<?php bloginfo('template_directory') ?>/img/hr-logo.png">
		      </a>
		<!-- <div class="top-search">
		   <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" class="search-field"
            placeholder="<?php echo esc_attr_x( 'SEARCH HR', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <input type="submit" class="search-submit fa"
        value="<?php echo esc_attr_x( '&#xf002;', 'submit button' ) ?>" />
</form>
	   </div><!-- /top-search -->
	   <?php wp_nav_menu( array( 'theme_location' => 'upper-bar' ) ); ?>

	 </div><!-- /row -->
	 </div><!-- /container -->
	 </div><!-- /top-menu -->
	 
   <div class="top-nav-load">
<nav class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container">
      <div class="row">
	     <a href="http://www5.njit.edu/humanresources/contact/" class="contact-us">Contact Us</a>
      

	     	     
		    		           <div class="collapse navbar-collapse upper-navbar">    
      <?php				
          $args = array(
            'theme_location' => 'lower-bar',
            'depth' => 0,
            'container'	=> false,
            'fallback_cb' => false,
            'menu_class' => 'nav navbar-nav',
            'walker' => new BootstrapNavMenuWalker()
          );
          wp_nav_menu($args);
      ?>
      
	  </div><!-- /.navbar-collapse -->
	  
	      
	      
      </div><!-- /row -->
      </div><!-- /container -->
</nav>



  </div><!-- /top-menu-load --> 
 </div><!-- /desktoponly -->
<div class="mobileonly">
	<nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="row">
	       
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".upper-navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	     
      <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_directory') ?>/img/njit-logo.png" /></a>
	      
	    
		      <a class="hr-logo" href="#">
			      <img src="<?php bloginfo('template_directory') ?>/img/hr-logo.png">
		      </a>
    <div class="collapse navbar-collapse upper-navbar">    
      <?php				
          $args = array(
            'theme_location' => 'mobile-menu',
            'depth' => 0,
            'container'	=> false,
            'fallback_cb' => false,
            'menu_class' => 'nav navbar-nav',
            'walker' => new BootstrapNavMenuWalker()
          );
          wp_nav_menu($args);
      ?>
         </div>
	</nav>
</div>


