<?php get_header(); ?>
</div>
<section class="insidemarging">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article>
<div class="cabecerpost">
<h1 class="titupost"><?php the_title(); ?></h1>
<div class="fechapostsingle"><?php the_time('l, j F, Y') ?></div>
</div>
<div class="insidearticle postcontents">
<div class="autorpostsingle">
<img src="<?php the_field('authorphoto'); ?>" width="80" height="80" class="photoautor"/>
By: <strong><?php the_field('authorpost'); ?></strong></div>

<div class="socialeshare">Share the Goods!<br /><?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?></div>

</div>
<div class="insidearticle postcontents">
<div class="imgpostsingle"><?php the_post_thumbnail( 'large' ); ?></div>
<?php the_content(); ?>
<div style="clear:both;"></div>	
</div>        
</article>    
<?php endwhile; endif; ?>    
    </section>
<div class="navegandoposts">

<h4>YOU MUST READ THESE TOO!</h4>

	<ul>
						<?php
							$tags = wp_get_post_tags($post->ID );
							if ($tags) {
								$first_tag = $tags[0] -> term_id;
								$args = array(
									'tag__in' => array($first_tag),
									'post__not_in' => array($post->ID),
									'posts_per_page' => 4,
									'caller_get_posts' => 1
									);
								$my_query = new wp_query($args);
								if($my_query -> have_posts()){
						while ($my_query -> have_posts()):$my_query -> the_post(); ?>
						
						<li>
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('posts-relacionados' ); ?>
								<h3><?php if (strlen($post->post_title) > 40) { echo substr(the_title($before = '', $after = '', FALSE), 0, 40) . '...'; } else { the_title(); } ?></h3>
								
							</a>					
						</li>

						<?php endwhile; ?>
						
						<?php } ?>
						<?php } ?>
						
					</ul>

		</div>    

<div class="wrapper">
<?php get_footer(); ?>    