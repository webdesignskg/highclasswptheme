<?php

function et_excerpt_length($length) {
	return 30;
}
add_filter('excerpt_length', 'et_excerpt_length');

function newbstemplate_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap_min', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );
    wp_enqueue_script('slidepanel', get_template_directory_uri().'/js/slidepanel.js', array('jquery'), '20160909', true );
} 

function newbstemplate_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'newbstemplate-style', get_stylesheet_uri(), $dependencies ); 
}
 
add_action( 'wp_enqueue_scripts', 'newbstemplate_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'newbstemplate_enqueue_scripts' );

function newbstemplate_wp_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'newbstemplate_wp_setup' );

function newbstemplate_register_menu() {
    register_nav_menu('header-menu', __( 'Header Menu' ));
}
add_action( 'init', 'newbstemplate_register_menu' );

function newbstemplate_post_thumbnails() {
add_theme_support('post-thumbnails');

add_image_size('slides', 960, 400, true);

}
add_action( 'after_setup_theme', 'newbstemplate_post_thumbnails' );


function themename_custom_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


function newbstemplate_widgets_init() {

    register_sidebar( array(
        'name'          => 'Blog Sidebar',
        'id'            => 'blog-sidebar',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => 'Homepage - About',
        'id'            => 'homepage-about',
        'before_widget' => '<div class="homepage-about">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

   register_sidebar( array(
        'name'          => 'Homepage Services Title',
        'id'            => 'homepage-services-title',
        'before_widget' => '<div class="homepage-services-title">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => 'Homepage About Box 1',
        'id'            => 'homepage-about-box-1',
        'before_widget' => '<div class="homepage-services-1">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Homepage About Box 2',
        'id'            => 'homepage-about-box-2',
        'before_widget' => '<div class="homepage-services-2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Homepage About Box 3',
        'id'            => 'homepage-about-box-3',
        'before_widget' => '<div class="homepage-services-3">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
	
	register_sidebar( array(
        'name'          => 'Homepage - Project Heading Text',
        'id'            => 'homepage-project-text',
        'before_widget' => '<div class="project-heading">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => 'Homepage Project Box 1',
        'id'            => 'project-box-1',
        'before_widget' => '<div class="project-box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
	
	register_sidebar( array(
        'name'          => 'Homepage Project Box 2',
        'id'            => 'project-box-2',
        'before_widget' => '<div class="project-box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
	
	register_sidebar( array(
        'name'          => 'Homepage Project Box 3',
        'id'            => 'project-box-3',
        'before_widget' => '<div class="project-box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
	
	register_sidebar( array(
        'name'          => 'Homepage Project Box 4',
        'id'            => 'project-box-4',
        'before_widget' => '<div class="project-box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

	register_sidebar( array(
        'name'          => 'Homepage - Full Width Call To Action 1',
        'id'            => 'homepage-full-width-cta-1',
        'before_widget' => '<div class="homepage-cta-color">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => 'Homepage Contact',
        'id'            => 'homepage-contact',
        'before_widget' => '<div class="homepage-contact">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer - Copyright Text',
        'id'            => 'footer-copyright-text',
        'before_widget' => '<div class="footer_copyright_text">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    
    register_sidebar( array(
        'name'          => 'Right Sidebar',
        'id'            => 'sidebar-top',
        'before_widget' => '<div class="blog-sidebar sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
	
	 register_sidebar( array(
        'name'          => 'Left Sidebar',
        'id'            => 'left-sidebar',
        'before_widget' => '<div class="col-sm-3 col-sm-offset-right-1 blog-sidebar"><div class="sidebar-module">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
	
	register_sidebar( array(
        'name'          => 'Homepage - Full Width Call To Action 2',
        'id'            => 'homepage-full-width-cta-2',
        'before_widget' => '<div class="homepage-full-width-cta">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );


    register_sidebar( array(
        'name'          => 'Footer 1',
        'id'            => 'homepage-footer-1',
        'before_widget' => '<div class="homepage-footer-1">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer 2',
        'id'            => 'homepage-footer-2',
        'before_widget' => '<div class="homepage-footer-2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer 3',
        'id'            => 'homepage-footer-3',
        'before_widget' => '<div class="homepage-footer-3">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
	
	register_sidebar( array(
        'name'          => 'Single Pages - Full Width Above Content',
        'id'            => 'full-width-above-content',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => 'Single Pages - Row Box',
        'id'            => 'row-box',
        'before_widget' => '<div class="box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Single Pages - Full Width Below Content',
        'id'            => 'below-content-full-width',
        'before_widget' => '<div class="below-content-full-width">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
	
	    register_sidebar( array(
        'name'          => 'About Full Width',
        'id'            => 'about-full-width',
        'before_widget' => '<div class="about-full-width-cta">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
	
		register_sidebar( array(
        'name'          => 'About Us Top Left',
        'id'            => 'about-us-top-left',
        'before_widget' => '<div class="about-us-top-left">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
	
		register_sidebar( array(
        'name'          => 'About Us Top Right',
        'id'            => 'about-us-top-right',
        'before_widget' => '<div class="about-us-top-right">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
	
		register_sidebar( array(
        'name'          => 'About Us Stats',
        'id'            => 'about-us-stats',
        'before_widget' => '<div class="about-us-stats">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
	
	    register_sidebar( array(
        'name'          => 'About 2 Clients',
        'id'            => 'about2-clients',
        'before_widget' => '<div class="about2-clients-full-width-cta">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

	    register_sidebar( array(
        'name'          => 'Portfolio Full Width',
        'id'            => 'portfolio-full-width',
        'before_widget' => '<div class="portfolio-full-width-cta">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
	
		register_sidebar( array(
        'name'          => 'Portfolio Pages Sidebar',
        'id'            => 'portfolio-sidebar',
        'before_widget' => '<div class="sidebar-module sidebar-module-top">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
	
		register_sidebar( array(
        'name'          => 'Services Content Image',
        'id'            => 'services-content-image',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

	    register_sidebar( array(
        'name'          => 'Services Widget 1',
        'id'            => 'service-widget-one',
        'before_widget' => '<div class="service-widget-one-cta">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
	
	    register_sidebar( array(
        'name'          => 'Services Widget 2',
        'id'            => 'service-widget-two',
        'before_widget' => '<div class="service-widget-two-cta">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
	
		register_sidebar( array(
        'name'          => 'Service Pages Sidebar',
        'id'            => 'services-sidebar',
        'before_widget' => '<div class="sidebar-module sidebar-module-top">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
	
		register_sidebar( array(
        'name'          => 'Service Testimonials',
        'id'            => 'services-testimonials',
        'before_widget' => '<div class="services-testimonials">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
	
	    register_sidebar( array(
        'name'          => 'Services Full Width',
        'id'            => 'service-full-width',
        'before_widget' => '<div class="service-full-width-cta">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

		register_sidebar( array(
        'name'          => 'Team Pages Sidebar',
        'id'            => 'team-sidebar',
        'before_widget' => '<div class="sidebar-module sidebar-module-top">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

		register_sidebar( array(
        'name'          => 'Contact Map Iframe',
        'id'            => 'contact-map-code',
        'before_widget' => '<div class="contact-map">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
	
		register_sidebar( array(
        'name'          => 'Contact Sidebar',
        'id'            => 'contact-sidebar',
        'before_widget' => '<div class="col-sm-4 blog-sidebar col-sm-offset-1"><div class="contact-sidebar sidebar-module">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );


add_action( 'init', 'custom_bootstrap_slider' );
/**
 * Register a Custom post type for.
 */
function custom_bootstrap_slider() {
	$labels = array(
		'name'               => _x( 'Slider', 'post type general name'),
		'singular_name'      => _x( 'Slide', 'post type singular name'),
		'menu_name'          => _x( 'Slider', 'admin menu'),
		'name_admin_bar'     => _x( 'Slides', 'add new on admin bar'),
		'add_new'            => _x( 'Add New', 'Slide'),
		'add_new_item'       => __( 'Name'),
		'new_item'           => __( 'New Slide'),
		'edit_item'          => __( 'Edit Slide'),
		'view_item'          => __( 'View Slide'),
		'all_items'          => __( 'All Slides'),
		'featured_image'     => __( 'Featured Image', 'text_domain' ),
		'search_items'       => __( 'Search Slide'),
		'parent_item_colon'  => __( 'Parent Slide:'),
		'not_found'          => __( 'No Slide found.'),
		'not_found_in_trash' => __( 'No Slide found in Trash.'),
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon'	     => 'dashicons-images-alt2',
    	'description'        => __( 'A Bootstrap Slider.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail')
	);

	register_post_type( 'slider', $args );
}
}
add_action( 'widgets_init', 'newbstemplate_widgets_init' );

/*Custom Post type Team start*/
function cw_post_type_team() {
$supports = array(
'title', // post title
'editor', // post content
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'post-formats', // post formats
);
$labels = array(
'name' => _x('Team Members', 'plural'),
'singular_name' => _x('Team Member', 'singular'),
'menu_name' => _x('Team', 'admin menu'),
'name_admin_bar' => _x('Team', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Team Member'),
'new_item' => __('New Team Member'),
'edit_item' => __('Edit Team Member'),
'view_item' => __('View Team Member'),
'all_items' => __('All Team Members'),
'search_items' => __('Search Team Members'),
'not_found' => __('No team members found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'menu_icon' => 'dashicons-businessman',
'public' => true,
'rewrite' => array('slug' => 'team'),
'capability_type' => 'page',
'supports' => array('title','editor','thumbnail','custom-fields','post-formats','my-meta-box-id', 'teamtitle_meta_box','excerpt','register_meta_box_cb'),
'hierarchical' => false,
'has_archive' => false,
'show_in_rest' => true,
'register_meta_box_cb' => 'teamtitle_meta_box', 
);

function teamtitle_meta_box(WP_Post $post) {
add_meta_box('teamtitle_meta', 'Team Member Title',  function() {

    });
}

 
function teamtitle_save_meta_box( $post_id ) {
}
add_action( 'save_post', 'teamtitle_save_meta_box' );
	

	

	
	
	

register_post_type('team', $args);
}
	
add_action('init', 'cw_post_type_team');
/*Custom Post type end*/

/*Custom Post type Services start*/
function cw_post_type_services() {
$supports = array(
'title', // post title
'editor', // post content
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'post-formats', // post formats
);
$labels = array(
'name' => _x('Services', 'plural'),
'singular_name' => _x('Service', 'singular'),
'menu_name' => _x('Services', 'admin menu'),
'name_admin_bar' => _x('Services', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Service'),
'new_item' => __('New Service'),
'edit_item' => __('Edit Service'),
'view_item' => __('View Services'),
'all_items' => __('All Services'),
'search_items' => __('Search Services'),
'not_found' => __('No Service found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'menu_icon'	     => 'dashicons-hammer',
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'services'),
'has_archive' => true,
'hierarchical' => true,
);
register_post_type('services', $args);
}
add_action('init', 'cw_post_type_services');
/*Custom Post type end*/

/*Custom Post type Portfolio start*/
function cw_post_type_portfolio() {
$supports = array(
'title', // post title
'editor', // post content
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'post-formats', // post formats
);
$labels = array(
'name' => _x('Portfolio', 'plural'),
'singular_name' => _x('Portfolio', 'singular'),
'menu_name' => _x('Portfolio', 'admin menu'),
'name_admin_bar' => _x('Portfolio', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Portfolio Item'),
'new_item' => __('New Portfolio Item'),
'edit_item' => __('Edit Portfolio Item'),
'view_item' => __('View Portfolio Item'),
'all_items' => __('All Portfolio Items'),
'search_items' => __('Search Portfolio'),
'not_found' => __('No Portfolio Items found.'),
);
$args = array(
'show_in_rest' => true,
'supports' => array('editor'),
'labels' => $labels,
'menu_icon'	=> 'dashicons-screenoptions',
'public' => true,
'query_var' => true,
'supports' => array('title','editor','thumbnail','custom-fields','post-formats','my-meta-box-id', 'teamtitle_meta_box','excerpt','register_meta_box_cb'),
'rewrite' => array('slug' => 'portfolio'),
'has_archive' => false,
'hierarchical' => false,
'register_meta_box_cb' => 'client_name_metaboxes',
);
register_post_type('portfolio', $args);
}
add_action('init', 'cw_post_type_portfolio');

// add_action( 'add_meta_boxes', 'client_name_metaboxes' );
add_action('admin_init', 'client_name_metaboxes');

function client_name_metaboxes() {
	add_meta_box(
		'client_name',
		'Client Name',
		'client_name',
		'portfolio',
		'side',
		'default'
	);
}

function client_name() {
global $post;

	wp_nonce_field( basename( __FILE__ ), 'client_name' );

  	$client_name = get_post_meta( $post->ID, 'client_name', true );

 	echo '<input type="text" name="client_name" value="' . esc_textarea( $client_name )  . '" class="widefat">';

 }

function save_client_name_meta( $post_id, $post ) {

	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}

	if ( ! isset( $_POST['client_name'] ) || ! wp_verify_nonce( $_POST['client_name'], basename(__FILE__) ) ) {
		return $post_id;
	}

	$client_name['client_name'] = esc_textarea( $_POST['client_name'] );

	foreach ( $client_name as $key => $value ) :

		if ( 'revision' === $post->post_type ) {
			return;
		}

		if ( get_post_meta( $post_id, $key, false ) ) {
			update_post_meta( $post_id, $key, $value );
		} else {
			add_post_meta( $post_id, $key, $value);
		}

		if ( ! $value ) {
			delete_post_meta( $post_id, $key );
		}

	endforeach;

}
add_action( 'save_post', 'save_client_name_meta', 1, 2 );

/*Custom Post type end*/
	
function new_excerpt_more($more) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more', 21 );

function the_excerpt_more_link( $excerpt ){
    $post = get_post();
    $excerpt .= '<a class="readmore" href="'. get_permalink($post->ID) . '">Continue Reading</a>';
    return $excerpt;
}
add_filter( 'the_excerpt', 'the_excerpt_more_link', 21 );



function team_excerpt_more($more) {
    return '';
}
add_filter('excerpt_more', 'team_excerpt_more', 22 );

function team_excerpt_more_link( $excerpt ){
    $post = get_post();
    $excerpt .= '<a class="readmore" href="'. get_permalink($post->ID) . '">Read Bio</a>';
    return $excerpt;
}
add_filter( 'team_excerpt', 'the_team_excerpt_more_link', 22 );




// Breadcrumbs
function custom_breadcrumbs() {
       
    // Settings
    $separator          = '&gt;';
    $breadcrums_id      = 'breadcrumbs';
    $breadcrums_class   = 'breadcrumbs';
    $home_title         = 'Homepage';
    $custom_taxonomy    = 'product_cat';
       
    // Get the query & post information
    global $post,$wp_query;
       
    // Do not display on the homepage
    if ( !is_front_page() ) {
       
        // Build the breadcrums
        echo '<div id="breadcrumbs-bar" class="row"><div class="container"><ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';
           
        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        echo '<li class="separator separator-home"> ' . $separator . ' </li>';
           
        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {
              
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title(false) . '</strong></li>';
              
        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
              
            }
              
            $custom_tax_name = get_queried_object()->name;
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';
              
        } else if ( is_single() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
              
            }
              

              
            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
                   
                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;
               
            }
              
            // Check if the post is in a category
            if(!empty($last_category)) {
                echo $cat_display;
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {
                  
                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
              
            } else {
                  
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            }
              
        } else if ( is_category() ) {
               
            // Category page
            echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';
               
        } else if ( is_page() ) {
               
            // Standard page
            if( $post->post_parent ){
                   
                // If child page, get parents 
                $anc = get_post_ancestors( $post->ID );
                   
                // Get parents in the right order
                $anc = array_reverse($anc);
                   
                // Parent page loop
                if ( !isset( $parents ) ) $parents = null;
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }
                   
                // Display parent pages
                echo $parents;
                   
                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
                   
            } else {
                   
                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
                   
            }
               
        } else if ( is_tag() ) {
               
            // Tag page
               
            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;
               
            // Display the tag name
            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
           
        } elseif ( is_day() ) {
               
            // Day archive
               
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
               
            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
               
            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
               
        } else if ( is_month() ) {
               
            // Month Archive
               
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
               
            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
               
        } else if ( is_year() ) {
               
            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
               
        } else if ( is_author() ) {
               
            // Auhor archive
               
            // Get the author information
            global $author;
            $userdata = get_userdata( $author );
               
            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
           
        } else if ( get_query_var('paged') ) {
               
            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';
               
        } else if ( is_search() ) {
           
            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
           
        } elseif ( is_404() ) {
               
            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }
       
        echo '</ul></div></div>';
           
    }
       
}

?>