<?php get_header(); ?></div>


<!-- Slider -->
<div class="slider__header center">

  <div class="youtube__header">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/_SL-CqLFaqk?controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
  </div>

  <h2>INTERNET MARKETING <span>&middot;</span> WEB DESIGN</h2>

  <h3>LAUNCH YOUR IDEA IN THE CLOUD</h3>
 
</div>

<div class="quicontact mlprx" data-effect="animated fadeInLeft" data-delay="10">

  <div class="wrapper">
  	
    <?php	 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(8) ) : ?> <?php endif; ?>

  </div>

</div>

<div class="wrapper">

  <section class="callshome">

  			<div class="mlprx" data-effect="animated fadeInLeft" data-delay="500">

  			   <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?> <?php endif; ?>
        
        </div>
        
        <div class="mlprx" data-effect="animated fadeIn" data-delay="900">

           <?php	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?> <?php endif; ?>

        </div>

        <div class="mlprx" data-effect="animated fadeInRight" data-delay="500">

           <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(3) ) : ?> <?php endif; ?>
        
        </div>

  </section>

</div>


<!-- slider -->


<div class="wrapper">
  <section class="callshome2">
    <nav class="serviceshome">
    <h3 class="mlprx" data-effect="animated fadeIn" data-delay="2000"><a href="<?php echo get_option('home'); ?>/services">Digital<br />Services</a></h3>
    	<ul>
    		<li class="itemservice01 mlprx" data-effect="animated fadeInDown" data-delay="900"><a href="<?php echo get_option('home'); ?>/services/#service01">Email Marketing</a><span class="tail01"></span></li>
            <li class="itemservice02 mlprx" data-effect="animated fadeInDown" data-delay="1300">
              <a href="<?php echo get_option('home'); ?>/services/#service02">Web Design</a>

              <span class="tail02"></span>
            </li>

            <li class="itemservice03 mlprx" data-effect="animated fadeInLeft" data-delay="1500"><a href="<?php echo get_option('home'); ?>/services/#service08">CRM Integration</a><span class="tail03"></span></li>
            <li class="itemservice04 mlprx" data-effect="animated fadeInLeft" data-delay="1700"><a href="<?php echo get_option('home'); ?>/services/#service04">Social Media</a><span class="tail04"></span></li>
            <li class="itemservice05 mlprx" data-effect="animated fadeInUp" data-delay="1900"><a href="<?php echo get_option('home'); ?>/services/#service05">Lead Generation</a><span class="tail05"></span></li>
            <li class="itemservice06 mlprx" data-effect="animated fadeInUp" data-delay="1100"><a href="<?php echo get_option('home'); ?>/services/#service06">Pay Per Click</a><span class="tail06"></span></li>
            <li class="itemservice07 mlprx" data-effect="animated fadeInRight" data-delay="700"><a href="<?php echo get_option('home'); ?>/services/#service07">SEO</a><span class="tail07"></span></li>
            <li class="itemservice08 mlprx" data-effect="animated fadeInRight" data-delay="500"><a href="<?php echo get_option('home'); ?>/services/#service03">Video Marketing</a><span class="tail08"></span></li>
    	</ul>
    </nav>
  </section>
</div>

<!-- slider -->

<div class="testimonial">
  <div class="wrapper_100">
    <?php echo do_shortcode( '[gs_testimonial transition="carousel" theme="gs_style1" img="gs_square_shadow"]' ); ?>
  </div>
</div>






<div class="wrapper">
<section class="callshome3">
<h3 class="tituourwork mlprx" data-effect="animated fadeInLeft" data-delay="500">Some of our Latest Designs</h3>
<ul class="listaportahome">
<?php
$featuredPosts = new WP_Query();
$featuredPosts->query('showposts=1&cat=3&offset=0');
while ($featuredPosts->have_posts()) : $featuredPosts->the_post(); ?>
<li class="mlprx" data-effect="animated zoomIn" data-delay="500"><a href="<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
<?php echo $image[0]; ?>
<?php endif; ?>" rel="lightbox-0" title="<?php the_title(); ?>" class="zoomporta"></a><?php the_post_thumbnail( 'thumbnail' ); ?>
<h4 class="titleportahome"><?php the_title(); ?></h4>
<div class="descriportahome"><?php the_content(); ?></div>
<?php if ( has_excerpt( ) ) {?>
    <span class="queflipas"><a href="<?php
  $myExcerpt = get_the_excerpt();
  $tags = array("<p>", "</p>");
  $myExcerpt = str_replace($tags, "", $myExcerpt);
  echo $myExcerpt;
  ?>" target="_blank" class="visitsite">Visit Website</a></span>
<?php } else { ?> <?php } ?></li>
<?php endwhile; ?>
<?php
$featuredPosts = new WP_Query();
$featuredPosts->query('showposts=1&cat=3&offset=1');
while ($featuredPosts->have_posts()) : $featuredPosts->the_post(); ?>
<li class="mlprx" data-effect="animated zoomIn" data-delay="800"><a href="<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
<?php echo $image[0]; ?>
<?php endif; ?>" rel="lightbox-0" title="<?php the_title(); ?>" class="zoomporta"></a><?php the_post_thumbnail( 'thumbnail' ); ?>
<h4 class="titleportahome"><?php the_title(); ?></h4>
<div class="descriportahome"><?php the_content(); ?></div>
<?php if ( has_excerpt( ) ) {?>
    <span class="queflipas"><a href="<?php
  $myExcerpt = get_the_excerpt();
  $tags = array("<p>", "</p>");
  $myExcerpt = str_replace($tags, "", $myExcerpt);
  echo $myExcerpt;
  ?>" target="_blank" class="visitsite">Visit Website</a></span>
<?php } else { ?> <?php } ?></li>
<?php endwhile; ?>
<?php
$featuredPosts = new WP_Query();
$featuredPosts->query('showposts=1&cat=3&offset=2');
while ($featuredPosts->have_posts()) : $featuredPosts->the_post(); ?>
<li class="mlprx" data-effect="animated zoomIn" data-delay="1100"><a href="<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
<?php echo $image[0]; ?>
<?php endif; ?>" rel="lightbox-0" title="<?php the_title(); ?>" class="zoomporta"></a><?php the_post_thumbnail( 'thumbnail' ); ?>
<h4 class="titleportahome"><?php the_title(); ?></h4>
<div class="descriportahome"><?php the_content(); ?></div>
<?php if ( has_excerpt( ) ) {?>
    <span class="queflipas"><a href="<?php
  $myExcerpt = get_the_excerpt();
  $tags = array("<p>", "</p>");
  $myExcerpt = str_replace($tags, "", $myExcerpt);
  echo $myExcerpt;
  ?>" target="_blank" class="visitsite">Visit Website</a></span>
<?php } else { ?> <?php } ?></li>
<?php endwhile; ?>
<?php
$featuredPosts = new WP_Query();
$featuredPosts->query('showposts=1&cat=3&offset=3');
while ($featuredPosts->have_posts()) : $featuredPosts->the_post(); ?>
<li class="mlprx" data-effect="animated zoomIn" data-delay="1400"><a href="<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
<?php echo $image[0]; ?>
<?php endif; ?>" rel="lightbox-0" title="<?php the_title(); ?>" class="zoomporta"></a><?php the_post_thumbnail( 'thumbnail' ); ?>
<h4 class="titleportahome"><?php the_title(); ?></h4>
<div class="descriportahome"><?php the_content(); ?></div>
<?php if ( has_excerpt( ) ) {?>
    <span class="queflipas"><a href="<?php
  $myExcerpt = get_the_excerpt();
  $tags = array("<p>", "</p>");
  $myExcerpt = str_replace($tags, "", $myExcerpt);
  echo $myExcerpt;
  ?>" target="_blank" class="visitsite">Visit Website</a></span>
<?php } else { ?> <?php } ?>
  </li>
<?php endwhile; ?>
</ul>
</section>

</div>
<div style="clear:both;"></div>
<section class="ml-parallax-bg callshome4 fondoclientes slider04b">
<h3 class="tituourwork mlprx" data-effect="animated fadeInLeft" data-delay="500">Our Clients</h3>

<?php	/* Widgetized sidebar */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(10) ) : ?>    						
			<?php endif; /* End of widgetized sidebar */ ?>

</section>

<section class="callshome4b">
<h3 class="tituourwork mlprx" data-effect="animated fadeInLeft" data-delay="500">Certifications</h3>
<?php	/* Widgetized sidebar */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(11) ) : ?>    						
			<?php endif; /* End of widgetized sidebar */ ?>

</section>

<section class="ml-parallax-bg slider04">
<div class="wrapper">
<h3 class="titublog mlprx" data-effect="animated fadeInLeft" data-delay="500"><a href="<?php echo get_option('home'); ?>/category/blog/"><strong>DIGITAL MARKETING BLOG</strong></a></h3>
<div style="clear:both;"></div>
<?php
    $featuredPosts = new WP_Query();
    $featuredPosts->query('showposts=1&cat=1&offset=0');
    while ($featuredPosts->have_posts()) : $featuredPosts->the_post(); ?>
    <article class="mlprx" data-effect="animated fadeInLeft" data-delay="500">
    <h2 class="titlebloghome"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    <span class="queflipas"><a href="<?php the_permalink() ?>" class="readmoreblog">Read more</a></span></article>
    <?php endwhile; ?>
    
    <?php
    $featuredPosts = new WP_Query();
    $featuredPosts->query('showposts=1&cat=1&offset=1');
    while ($featuredPosts->have_posts()) : $featuredPosts->the_post(); ?>
    <article class="mlprx" data-effect="animated zoomIn" data-delay="1100">
    <h2 class="titlebloghome"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    <span class="queflipas"><a href="<?php the_permalink() ?>" class="readmoreblog">Read more</a></span></article>
    <?php endwhile; ?>
    
    <?php
    $featuredPosts = new WP_Query();
    $featuredPosts->query('showposts=1&cat=1&offset=2');
    while ($featuredPosts->have_posts()) : $featuredPosts->the_post(); ?>
    <article class="mlprx" data-effect="animated fadeInRight" data-delay="800">
    <h2 class="titlebloghome"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    <span class="queflipas"><a href="<?php the_permalink() ?>" class="readmoreblog">Read more</a></span></article>
    <?php endwhile; ?>
    
</div>
</section>
<div class="wrapper">
<?php get_footer(); ?>    