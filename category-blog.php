<?php get_header(); ?>
</div>
<?php if (have_posts()) : ?>
<section class="insidemarging">

<div class="titufondotitle">
<h2 class="tituinside">
	   <?php /* If this is a category */ if (is_category()) { ?>
		<?php _e('', 'blank'); ?> <?php single_cat_title(); ?>
 	
      <?php /* If this is a tag */ } elseif( is_tag() ) { ?>
		<?php _e('', 'blank'); ?> <?php single_tag_title(); ?>
 	  
	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<?php _e('Noticias de ', 'blank'); ?> <?php the_time('F jS, Y'); ?>
 	 
      <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<?php _e('Noticias de ', 'blank'); ?> <?php the_time('F, Y'); ?>
 	 
      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		  <?php _e('Noticias de ', 'blank'); ?> <?php the_time('Y'); ?>
	
      <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		 <?php _e('', 'blank'); ?>
    
      <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		 <?php _e('', 'blank'); ?>
 	  <?php } ?>
	</h2></div>
<div class="articleinside">    
<div class="listablog">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $loopcounter++; ?> 
<article class="listablogpost">
<div class="imgpost"><a href="<?php the_permalink() ?>"  title="<?php the_title(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a></div>
<div class="fechapost"><?php the_time('l, j F, Y') ?></div>
<h2 class="titlebloghome"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="autorpost">By: <strong><?php the_field('authorpost'); ?></strong></div>
<div style="clear:both"></div>
<div class="descrippost"><?php the_excerpt(); ?></div>
<span class="queflipas2"><a href="<?php the_permalink() ?>" class="readmoreblog2"  title="<?php the_title(); ?>">Read More</a></span></article>
<?php endwhile; endif; ?>
</div>
<div style="clear:both"></div>

<!-- Se agrega la paginación ANDRES-->
<div class="center core_navi">
  <?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
</div>

</div>
<?php else : ?>
		<h2 class="titulo">Nothing Here</h2>
		<div class="search-404">
        <a href="#">Go home!</a></div>
	<?php endif; ?>   
<div style="clear:both"></div>
</section><div class="wrapper">
<script type="text/javascript">
jQuery( document ).ready( function( $ ) {
$( '.listablog' ).masonry({ isFitWidth: true });
} );
</script>
<?php get_footer(); ?>    