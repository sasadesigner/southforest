<?php
//bootstrap link

function wpbootstrap_enqueue_styles() {
wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' );
}
add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles');

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'font-awesome','simple-line-icons','oceanwp-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION
function clickable_excerpt( $excerpt ) {
	return '<a href="'. get_the_permalink() .'">'. preg_replace( '|</?a.*?>|i', '', $excerpt ) .'</a>';
}
add_filter( 'get_the_excerpt', 'clickable_excerpt' );


// related post 

function example_cats_related_post() {

    $post_id = get_the_ID();
    $cat_ids = array();
    $categories = get_the_category( $post_id );

    if(!empty($categories) && !is_wp_error($categories)):
        foreach ($categories as $category):
            array_push($cat_ids, $category->term_id);
        endforeach;
    endif;

    $current_post_type = get_post_type($post_id);

    $query_args = array( 
        'category__in'   => $cat_ids,
        'post_type'      => $current_post_type,
        'post__not_in'    => array($post_id),
        'posts_per_page'  => '2',
     );

    $related_cats_post = new WP_Query( $query_args );

    if($related_cats_post->have_posts()):
         while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
		
		<div class="col-md-6" id="cblog-post-box">
		<div class="card-group">
		  <div class="card tile">
		 <?php
			//foreach((get_the_category()) as $category) { 
				//echo $category->cat_name . ' '; 
			//} 
			?>
			<div class="postImageThumbnail">
				<?php if ( has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
				<?php endif; ?>
			</div>
			<div class="card-body" id="relatedPostBox">
			 
			  <a href="<?php echo the_permalink();?>"><p class="card-text"><b><?php the_title(); ?></b></p></a>
			  <p class="card-text"><?php the_excerpt(); ?></p> 
			  
			</div>
		   <div class="postReadMorebtn">
			  <a href="<?php the_permalink(); ?>"><p class="read-more">
          read more
			  </p></a>
			  </div>
		  </div>
		</div>
		</div>
			
        <?php endwhile;

        // Restore original Post Data
        wp_reset_postdata();
     endif;

}
//Post category shortcode 

/*
 * Create a shortcode that lists all cpt's ordered by taxonomy term
 */
 
function faq_postsbycategory() {
// the query
$the_query = new WP_Query( array(
    'category_name' => 'faq',
    'posts_per_page' => 10,
	'order' => 'ASC',
	'orderby' => 'link'
) ); 
  
// The Loop
if ( $the_query->have_posts() ) {
    $string .= '<div class="postsbycategory widget_recent_entries">';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
            if ( has_post_thumbnail() ) {
            $string .= '<p>';
            $string .= '<b><a href="' . get_the_permalink() . '"rel="bookmark">' . get_the_post_thumbnail($post_id, array( 200, 100) ) . get_the_title() . '</a></b><br><h7>Posted: ' . get_the_date() . '</h7><br>' . get_the_excerpt() . '</p>';
            }
		else {
            // if no featured image is found ADD EXCERPT CODING
            // $string .= '<p><a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_title() . '</a><br><h7>Posted: ' . get_the_date() . '</h7><br>' . get_the_excerpt() . '</p>';
            }
            }
    } else {
    // no posts found
}
$string .= '</div>';

return $string;

/* Restore original Post Data */
wp_reset_postdata();
}
// Add a shortcode
add_shortcode('faq-posts', 'faq_postsbycategory');