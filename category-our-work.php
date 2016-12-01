<?php get_header(); ?>
</div>
<?php if (have_posts()) : ?>
<section class="insidemarging">

<div class="titufondotitle">
<h2 class="tituinside"><?php single_cat_title(); ?></h2></div>
<article class="articleinside">    
<ul class="listaporta" id="portafoliowall">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $loopcounter++; ?> 
<li class="<?php echo (++$j % 2 == 0) ? 'evenpost' : 'oddpost'; ?>">
<h4 class="titleportahome"><?php the_title(); ?></h4>
<?php the_post_thumbnail( 'out-work' ); ?>
<div class="descriporta"><?php the_content(); ?></div>

<?php if ( has_excerpt() ) {?>
<span class="queflipas2"><a href="<?php
  $myExcerpt = get_the_excerpt();
  $tags = array("<p>", "</p>");
  $myExcerpt = str_replace($tags, "", $myExcerpt);
  echo $myExcerpt;
  ?>" target="_blank" class="visitporta">Visit Website</a></span>
  <?php } ?> 
  </li>
<?php endwhile; endif; ?>
</ul>
<div style="clear:both"></div>

<!-- Se agrega la paginación ANDRES-->
<div class="center core_navi">
  <?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
</div>


</article>
<?php else : ?>
		<h2 class="titulo">Nothing Here</h2>
		<div class="search-404">
        <a href="#">Go home!</a></div>
	<?php endif; ?>   
<div style="clear:both"></div>
</section><div class="wrapper">
<script type="text/javascript">
jQuery( document ).ready( function( $ ) {
$('#portafoliowall').masonry({
  itemSelector: '#portafoliowall li',
  isFitWidth: true
});
});
</script>
<?php get_footer(); ?>    