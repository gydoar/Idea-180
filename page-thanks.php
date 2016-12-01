<?php
/*
Template Name: Thanks
*/
?>
<?php get_header('home'); ?>
</div>
<section class="insidemarging insidequick">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article>
<div class="titufondotitle">
<h1 class="tituinside"><?php the_title(); ?></h1></div>
<div class="insidearticle">
<?php the_content(); ?>
</div>
</article>    
<?php endwhile; endif; ?>   
<div class="topblogs">
<?php
$featuredPosts = new WP_Query();
$featuredPosts->query('showposts=6&cat=1');
while ($featuredPosts->have_posts()) : $featuredPosts->the_post(); ?>
<article class="listablogpost">
<div class="imgpost"><a href="<?php the_permalink() ?>"  title="<?php the_title(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a></div>
<div class="fechapost"><?php the_time('l, j F, Y') ?></div>
<h2 class="titlebloghome"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="autorpost">By: <strong><?php the_field('authorpost'); ?></strong></div>
</article>
<?php endwhile; ?>
</div> 
    </section>
<div class="wrapper">
<script type="text/javascript">
jQuery( document ).ready( function( $ ) {
$( '.listapeople' ).masonry({ isFitWidth: true });
} );
</script>
<?php get_footer(); ?>    