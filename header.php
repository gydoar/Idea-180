<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<meta name='viewport' content='width=device-width, initial-scale=1' /> 
<title>
  <?php
      global $page, $paged; 
      wp_title( '|', true, 'right' ); 
      bloginfo( 'name' ); 
      $site_description = get_bloginfo( 'description', 'display' ); 
        if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description"; 
        if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'nakeme' ), max( $paged, $page ) ); 
    ?>
</title>
<meta name="description" content="<?php bloginfo('description' ); ?>">

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" type="image/png" />
<?php wp_head(); //leave for plugins ?> 

</head>
<body>
  <header>
  <div class="wrapper">
    	<div class="logo"><a href="<?php echo get_option('home'); ?>" class="mlprx" data-effect="animated fadeInLeft" data-delay="300"><?php bloginfo('name'); ?></a></div>
        <p class="slogan"><?php bloginfo('description'); ?></p>
        <div class="language"><a href="http://www.idea180.com/es/">CLICK PARA ESPAÑOL</a></div>

    <nav id="menuheader" class="mlprx" data-effect="animated fadeInRight" data-delay="600">
        	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      </nav>
        </div>
</header>

<?php if(!is_home()){ ?>

<div style="clear:both;"></div>
  <div class="quicontact insidequick">
    <div class="wrapper">
      <?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(8) ) : ?>               
          <?php endif;  ?>

    </div>

  </div>

<?php } ?>

<div class="wrapper">