
<?php 
    /*********************
Cargamos archivo CSS y JS ANDRES
*********************/
// loading modernizr and jquery, and reply script
function bones_scripts_and_styles() {
  global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

      
        // register main stylesheet
        wp_register_style( 'style', get_stylesheet_directory_uri() . '/css/style.css', array(), '', 'all' );

        // Menu responsive
        wp_register_style( 'meanmenu', get_stylesheet_directory_uri() . '/css/meanmenu.css', array(), '', 'all' );


        // Agregando Ajax
        wp_register_script( 'js-ajax', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array( 'jquery' ), '', true );

        

        //adding scripts file in the footer
        wp_register_script( 'js-meanmenu', get_stylesheet_directory_uri() . '/js/jquery.meanmenu.js', array( 'jquery' ), '', true );


        wp_enqueue_style( 'style' );
        wp_enqueue_style( 'meanmenu' );



        /*
        I recommend using a plugin to call jQuery
        using the google cdn. That way it stays cached
        and your site will load faster.
        */
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'js-ajax' );
        wp_enqueue_script( 'js-meanmenu' );

}

add_action( 'wp_enqueue_scripts', 'bones_scripts_and_styles' );

 ?>


<?php load_theme_textdomain('blank'); ?>
<?php
if ( function_exists('register_sidebars') )
	register_sidebars(11, array(
		'name'=>'Sidebar %d',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));
?>
<?php function custom_comment($comment, $args, $depth) {
       $GLOBALS['comment'] = $comment; ?>
<li <?php comment_class(); ?> id="comment-<?php comment_ID( ); ?>">
<?php comment_author_link() ?> <?php _e('says', 'blank'); ?>:

<?php if ($comment->comment_approved == '0') : //message if comment is held for moderation ?>
<em><?php _e('Your comment is awaiting moderation', 'blank'); ?>.</em>
<?php endif; ?>
<br />
<small class="commentmetadata">
<?php comment_date('l, j F, Y') ?> <?php _e('at', 'blank'); ?> <?php comment_date('G:i') ?><?php edit_comment_link( __('Edit', 'blank'),' &nbsp;|&nbsp; ',''); ?></small>
<br />
	<?php comment_text() ?>
 <div class="reply">
<?php echo comment_reply_link(array('reply_text' => __('Reply', 'blank'), 'depth' => $depth, 'max_depth' => $args['max_depth']));  ?>
</div>
<?php } ?>
<?php function custom_pings($comment, $args, $depth) {
       $GLOBALS['comment'] = $comment; ?>
<li <?php comment_class(); ?> id="comment-<?php comment_ID( ); ?>">
     <?php _e('Trackback from', 'blank'); ?> <em><?php comment_author_link() ?></em>
     <br /><small><?php comment_date('l, j F, Y') ?></small>
     <br /><?php comment_text() ?>
     <?php edit_comment_link( __('Edit', 'blank'),'<br /> &nbsp;|&nbsp; ',''); ?>
<?php } ?>
<?php
add_filter('get_comments_number', 'comment_count', 0);
function comment_count( $count ) {
	global $id;
	$comments_by_type = &separate_comments(get_comments('post_id=' . $id));
	return count($comments_by_type['comment']);
}
// navigation menu
if (function_exists('register_nav_menu')) {
register_nav_menu('primary', __('Menu'));
}
add_theme_support('post-thumbnails'); 
?>
<?php
// add masonery
function mason_script() {
wp_enqueue_script( 'jquery-masonry' );
}
add_action( 'wp_enqueue_scripts', 'mason_script' );

add_filter ( 'post_class' , 'my_post_class' );
global $current_class;
$current_class = 'odd';









/*
Custom imagen size ANDRES
*/

add_image_size( 'posts-relacionados', 155, 110, true);
add_image_size( 'out-work', 300, 350, true);
add_image_size( 'category-blog', 280, 166, true);

/*
Creamos la funcion para procesar la páginación ANDRES
*/
function wp_corenavi() {
    global $wp_query, $wp_rewrite;
    $pages = " ";
    $max = $wp_query->max_num_pages;
        if (!$current = get_query_var('paged')) $current = 1;
        $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
        $a['total'] = $max;
        $a['current'] = $current;
    $total = 1; //1 – muestra el texto “Página N de N”, 0 – para no mostrar nada
    $a['mid_size'] = 5; //cuantos enlaces a mostrar a izquierda y derecha del actual
    $a['end_size'] = 1; //cuantos enlaces mostrar al comienzo y al fin
    $a['prev_text'] = '&laquo;'; //texto para el enlace “Página siguiente”
    $a['next_text'] = '&raquo;'; //texto para el enlace “Página anterior”
        if ($max > 1) echo '<div class="navigation">';
        if ($total == 1 && $max > 1) $pages = '<span class="pages">Página ' . $current . ' de ' . $max . '</span>'."\r\n";
        echo $pages . paginate_links($a);
        if ($max > 1) echo '</div>';
}



/*********************
RANDOM CLEANUP ITEMS
*********************/

// remove the p from around imgs (http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/)
function bones_filter_ptags_on_images($content){
    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

function excerpt($num) {
    $limit = $num+1;
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt)."...";
    echo $excerpt;
}


function footer_enqueue_scripts() {
 remove_action('wp_head', 'wp_print_scripts');
 remove_action('wp_head', 'wp_print_head_scripts', 9);
 remove_action('wp_head', 'wp_enqueue_scripts', 1);
 add_action('wp_footer', 'wp_print_scripts', 5);
 add_action('wp_footer', 'wp_enqueue_scripts', 5);
 add_action('wp_footer', 'wp_print_head_scripts', 5);
}
add_action('after_setup_theme', 'footer_enqueue_scripts');
?>
