<?php get_header(); ?>
</div>
<section class="insidemarging">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article>
<div class="titufondotitle">
<h1 class="tituinside"><?php the_title(); ?></h1></div>
<div class="insidearticle">
<?php the_content(); ?>
</div>
</article>    
<?php endwhile; endif; ?>    
    </section>
<div class="wrapper">
<script type="text/javascript">
jQuery( document ).ready( function( $ ) {
$( '.listapeople' ).masonry({ isFitWidth: true });
} );
</script>
<?php get_footer(); ?>    