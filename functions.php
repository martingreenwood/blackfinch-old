<?php
/**
 * Blackfinch functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blackfinch
 */

if ( ! function_exists( 'blackfinch_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function blackfinch_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Blackfinch, use a find and replace
	 * to change 'blackfinch' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'blackfinch', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'blackfinch' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'blackfinch_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'blackfinch_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function blackfinch_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blackfinch_content_width', 640 );
}
add_action( 'after_setup_theme', 'blackfinch_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function blackfinch_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'blackfinch' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'blackfinch' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'blackfinch_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function blackfinch_scripts() {
	wp_enqueue_style( 'blackfinch-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bf-slickcss', get_template_directory_uri() . '/slick/slick.css' );
	wp_enqueue_style( 'bf-slickthemecss', get_template_directory_uri() . '/slick/slick-theme.css' );

	wp_enqueue_script( 'jQuery' );
	wp_enqueue_script( 'bf-slickjs', get_template_directory_uri() . '/slick/slick.min.js', array(), '20151215', true );
	wp_enqueue_script( 'blackfinch-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'blackfinch-app', get_template_directory_uri() . '/js/app.js', array(), '20151215', true );

	wp_enqueue_script( 'blackfinch-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blackfinch_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


function bf_custom_post_types() {
	register_post_type( 'event',
		array(
			'labels' => array(
				'name' => __( 'Events' ),
				'singular_name' => __( 'Event' )
			),
			'public' => true,
			'has_archive' => true,
			'menu_icon'   => 'dashicons-tickets-alt',
        	'supports'    => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		)
	);

	register_post_type( 'case-study',
		array(
			'labels' => array(
				'name' => __( 'Case Studies' ),
				'singular_name' => __( 'Case Study' )
			),
			'public' => true,
			'taxonomies'  => array( 'category' ),
			'has_archive' => true,
			'menu_icon'   => 'dashicons-format-status',
        	'supports'    => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		)
	);


}
add_action( 'init', 'bf_custom_post_types' );


function add_first_and_last($items) {
    $items[1]->classes[] = 'firstItem';
    $items[count($items)]->classes[] = 'lastItem';
    return $items;
}
add_filter('wp_nav_menu_objects', 'add_first_and_last');

function get_adapt(){
	ob_start();
	
	$args = array(
		'post_parent' => 8,
		'post_type'   => 'any', 
		'numberposts' => -1,
		'post_status' => 'publish' 
	);
	$posts = get_children( $args );
	
	echo '<div class="vc_column-inner vc_custom_149492969375723432 adaptHover">';
		echo '<div class="adaptOverlay">';
			
			echo '<div class="subPages">';
				foreach ($posts as $post){
					if (strpos($post->post_name, 'adapt') !== false) {
						echo '<a class="underline" href="'.get_the_permalink($post->ID).'">'.$post->post_title.'</a>';
					}
				}
			echo '</div>';
			
				
		echo '</div>';

		echo'<div class="wpb_wrapper">
				<div class="wpb_single_image wpb_content_element vc_align_center">
					<figure class="wpb_wrapper vc_figure">
						<div class="vc_single_image-wrapper vc_box_border_grey">
							<img width="200" height="200" src="'.get_field( 'adapt_icon', 'options' ).'" class="vc_single_image-img attachment-full" alt="" >
							</div>
					</figure>
				</div>
				<div class="wpb_text_column wpb_content_element ">
					<div class="wpb_wrapper">
						<h1 class="adaptgreen">Adapt</h1>
						<h4>'.get_field( 'adapt_strapline', 'options' ).'</h4></h4>
						<a class="underline adaptMore">More</a>
					</div>
				</div>
			</div>
		</div>';
	return ob_get_clean();
}

add_shortcode( 'get_adapt', 'get_adapt' );

function get_thrive(){
	ob_start();
	
	$args = array(
		'post_parent' => 8,
		'post_type'   => 'any', 
		'numberposts' => -1,
		'post_status' => 'publish' 
	);
	$posts = get_children( $args );
	
	echo '<div class="vc_column-inner vc_custom_149492969375723432 thriveHover">';
		echo '<div class="thriveOverlay">';
			
			echo '<div class="subPages">';
				foreach ($posts as $post){
					if (strpos($post->post_name, 'thrive') !== false) {
						echo '<a class="underline" href="'.get_the_permalink($post->ID).'">'.$post->post_title.'</a>';
					}
				}
			echo '</div>';
			
				
		echo '</div>';

		echo'<div class="wpb_wrapper">
				<div class="wpb_single_image wpb_content_element vc_align_center">
					<figure class="wpb_wrapper vc_figure">
						<div class="vc_single_image-wrapper vc_box_border_grey">
							<img width="200" height="200" src="'.get_field( 'thrive_icon', 'options' ).'" class="vc_single_image-img attachment-full" alt="">
						</div>
					</figure>
				</div>
				<div class="wpb_text_column wpb_content_element ">
					<div class="wpb_wrapper">
						<h1 class="thriveorange">Thrive</h1>
						<h4>'.get_field( 'thrive_strapline', 'options' ).'</h4>
						<a class="underline thriveMore">More</a>
					</div>
				</div>
			</div>
		</div>';
	return ob_get_clean();
}

add_shortcode( 'get_thrive', 'get_thrive' );

function get_evolve(){
	ob_start();
	
	$args = array(
		'post_parent' => 8,
		'post_type'   => 'any', 
		'numberposts' => -1,
		'post_status' => 'publish' 
	);
	$posts = get_children( $args );
	
	echo '
		<div class="vc_column-inner vc_custom_149492969375723432 evolveHover">';
			echo '<div class="evolveOverlay">';
			
			echo '<div class="subPages">';
				foreach ($posts as $post){
					if (strpos($post->post_name, 'evolve') !== false) {
						echo '<a class="underline" href="'.get_the_permalink($post->ID).'">'.$post->post_title.'</a>';
					}
				}
			echo '</div>';
			
				
		echo '</div>';

		echo '<div class="wpb_wrapper">
				<div class="wpb_single_image wpb_content_element vc_align_center">
					<figure class="wpb_wrapper vc_figure">
						<div class="vc_single_image-wrapper vc_box_border_grey">
							<img width="200" height="200" src="'.get_field( 'evolve_icon', 'options' ).'" class="vc_single_image-img attachment-full" alt="">
						</div>
					</figure>
				</div>
				<div class="wpb_text_column wpb_content_element ">
					<div class="wpb_wrapper">
						<h1 class="evolvepurple">Evolve</h1>
						<h4>'.get_field( 'evolve_strapline', 'options' ).'</h4></h4>
						<a class="underline evolveMore">More</a>
					</div>
				</div>
			</div>
		</div>';
	return ob_get_clean();
}

add_shortcode( 'get_evolve', 'get_evolve' );


function get_news(){
	ob_start();
	
	global $post;
	$args = array( 'posts_per_page' => 6,  );
	
	$myposts = get_posts( $args );
	
	
	echo '<div class="singlePostMain">';
	
	foreach ( $myposts as $post ) : setup_postdata( $post );
		if (has_post_thumbnail(  )) {
			$img = get_the_post_thumbnail_url();
		} else {
			$img = get_template_directory_uri() . "/img/blog-hold.jpg";
		}
	
		echo '<div class="wpb_column vc_column_container vc_col-sm-4 singlePostContain">
			<div class="vc_column-inner ">
				<div class="wpb_wrapper">
					<div class="wpb_single_image wpb_content_element vc_align_center singlePostImage">
						<figure class="wpb_wrapper vc_figure">
							<div class="vc_single_image-wrapper vc_box_border_grey">
								<a href="'.get_the_permalink($post->ID).'"><img width="213" height="213" src="'.$img.'" class="vc_single_image-img attachment-full" alt="" srcset="'.$img.' 213w, '.$img.' 150w" sizes="(max-width: 213px) 100vw, 213px"></a>
							</div>
						</figure>
					</div>

					<div class="wpb_text_column wpb_content_element singlePostTitle">
						<div class="wpb_wrapper">
							<h4><a href="'.get_the_permalink($post->ID).'">'.$post->post_title.'<span>'.get_the_author_meta('display_name', $author_id).'</span></a></h4>
						</div>
					</div>
				</div></div></div>';
	 ?>

	<?php endforeach; 
	wp_reset_postdata();
	
	echo '</div>';


	
	return ob_get_clean();
}

add_shortcode( 'get_news', 'get_news' );

function get_casestudies(){
	ob_start();
	
	global $post;
	$args = array( 
		'post_type' 		=> 'case-study', 
		'posts_per_page' 	=> 6,
	);
	
	$myposts = get_posts( $args );
	
	
	echo '<div class="singlePostMain">';
	
	foreach ( $myposts as $post ) : setup_postdata( $post );
		if (has_post_thumbnail(  )) {
			$img = get_the_post_thumbnail_url();
		} else {
			$img = get_template_directory_uri() . "/img/blog-hold.jpg";
		}
	
		echo '<div class="wpb_column vc_column_container vc_col-sm-4 singlePostContain">
			<div class="vc_column-inner ">
				<div class="wpb_wrapper">
					<div class="wpb_single_image wpb_content_element vc_align_center singlePostImage">
						<figure class="wpb_wrapper vc_figure">
							<div class="vc_single_image-wrapper vc_box_border_grey">
								<a href="'.get_the_permalink($post->ID).'"><img width="213" height="213" src="'.$img.'" class="vc_single_image-img attachment-full" alt="" srcset="'.$img.' 213w, '.$img.' 150w" sizes="(max-width: 213px) 100vw, 213px"></a>
							</div>
						</figure>
					</div>

	<div class="wpb_text_column wpb_content_element singlePostTitle">
		<div class="wpb_wrapper">
			<h4><a href="'.get_the_permalink($post->ID).'">'.$post->post_title.'<span>'.get_field('sector', $post->ID).'</span></a></h4>

		</div>
	</div>
</div></div></div>';
	
	
	
		
	
	 ?>

	<?php endforeach; 
	wp_reset_postdata();
	
	echo '</div>';


	
	return ob_get_clean();
}

add_shortcode( 'get_casestudies', 'get_casestudies' );

function get_events(){
	ob_start();
	
	global $post;
	$args = array( 
		'post_type' 		=> 'event', 
		'posts_per_page' 	=> 6,
		'meta_key'			=> 'event_date',
		'orderby'			=> 'meta_value',
		'order'				=> 'ASC'
	);
	
	$myposts = get_posts( $args );
	
	
	echo '<div class="singlePostMain">';
	
	foreach ( $myposts as $post ) : setup_postdata( $post );
		if (has_post_thumbnail(  )) {
			$img = get_the_post_thumbnail_url();
		} else {
			$img = get_template_directory_uri() . "/img/blog-hold.jpg";
		}
	
		echo '<div class="wpb_column vc_column_container vc_col-sm-4 singlePostContain">
			<div class="vc_column-inner ">
				<div class="wpb_wrapper">
					<div class="wpb_single_image wpb_content_element vc_align_center singlePostImage">
						<figure class="wpb_wrapper vc_figure">
							<div class="vc_single_image-wrapper vc_box_border_grey">
								<a href="'.get_the_permalink($post->ID).'"><img width="213" height="213" src="'.$img.'" class="vc_single_image-img attachment-full" alt="" srcset="'.$img.' 213w, '.$img.' 150w" sizes="(max-width: 213px) 100vw, 213px"></a>
							</div>
						</figure>
					</div>

	<div class="wpb_text_column wpb_content_element singlePostTitle">
		<div class="wpb_wrapper">
			<h4><a href="'.get_the_permalink($post->ID).'">'.$post->post_title.'<span>'. date( "dS F Y", strtotime(get_field( 'event_date', $post->ID ))).'</span></a></h4>

		</div>
	</div>
</div></div></div>';
	
	
	
		
	
	 ?>

	<?php endforeach; 
	wp_reset_postdata();
	
	echo '</div>';


	
	return ob_get_clean();
}

add_shortcode( 'get_events', 'get_events' );



function custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


function get_excerpt($limit, $source = null){

    if($source == "content" ? ($excerpt = get_the_content()) : ($excerpt = get_the_excerpt()));
    $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $limit);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    $excerpt = $excerpt.'... <a href="'.get_permalink($post->ID).'">more</a>';
    return $excerpt;
}


function get_home_news(){
	ob_start();
	
	global $post;
	$args = array( 'posts_per_page' => 2,  );
	
	$myposts = get_posts( $args );
	

	echo '<div class="homeNews">';
	foreach ( $myposts as $post ) : setup_postdata( $post );
		
	
		echo '<h2><a href="'.get_the_permalink($post->ID).'">'.$post->post_title.'</a></h2>';
		$excerpt = get_the_content();
		$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
    	$excerpt = strip_shortcodes($excerpt);
		$excerpt = strip_tags($excerpt);
		
		echo '<p class="contained">'.substr($excerpt, 0, 100).'</p>';
		
		echo '<a class="underline" href="'.get_the_permalink($post->ID).'">Read</a>';

	
	 ?>

	<?php endforeach; 
	wp_reset_postdata();
	
	echo '</div>';
	



	
	return ob_get_clean();
}

add_shortcode( 'get_home_news', 'get_home_news' );