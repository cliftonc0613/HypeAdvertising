<?php
/**
 * This makes the child theme work. If you need any
 * additional features or let's say menus, do it here.
 *
 * @return void
 */
function required_starter_themesetup() {

	load_child_theme_textdomain( 'requiredstarter', get_stylesheet_directory() . '/languages' );

	// Register an additional Menu Location
	register_nav_menus( array(
		'meta' => __( 'Meta Menu', 'requiredstarter' )
	) );

	// Add support for custom backgrounds and overwrite the parent backgorund color
	add_theme_support( 'custom-background', array( 'default-color' => 'f7f7f7' ) );

}
add_action( 'after_setup_theme', 'required_starter_themesetup' );


/**
 * With the following function you can disable theme features
 * used by the parent theme without breaking anything. Read the
 * comments on each and follow the link, if you happen to not
 * know what the function is for. Remove the // in front of the
 * remove_theme_support('...'); calls to make them execute.
 *
 * @return void
 */
function required_starter_after_parent_theme_setup() {

	/**
	 * Hack added: 2012-10-04, Silvan Hagen
	 *
	 * This is a hack, to calm down PHP Notice, since
	 * I'm not sure if it's a bug in WordPress or my
	 * bad I'll leave it here: http://wordpress.org/support/topic/undefined-index-custom_image_header-in-after_setup_theme-of-child-theme
	 */
	if ( ! isset( $GLOBALS['custom_image_header'] ) )
		$GLOBALS['custom_image_header'] = array();

	if ( ! isset( $GLOBALS['custom_background'] ) )
		$GLOBALS['custom_background'] = array();

	// Remove custom header support: http://codex.wordpress.org/Custom_Headers
	//remove_theme_support( 'custom-header' );

	// Remove support for post formats: http://codex.wordpress.org/Post_Formats
	//remove_theme_support( 'post-formats' );

	// Remove featured images support: http://codex.wordpress.org/Post_Thumbnails
	//remove_theme_support( 'post-thumbnails' );

	// Remove custom background support: http://codex.wordpress.org/Custom_Backgrounds
	//remove_theme_support( 'custom-background' );

	// Remove automatic feed links support: http://codex.wordpress.org/Automatic_Feed_Links
	//remove_theme_support( 'automatic-feed-links' );

	// Remove editor styles: http://codex.wordpress.org/Editor_Style
	//remove_editor_styles();

	// Remove a menu from the theme: http://codex.wordpress.org/Navigation_Menus
	//unregister_nav_menu( 'secondary' );

}
add_action( 'after_setup_theme', 'required_starter_after_parent_theme_setup', 11 );



/**
 * Add our theme specific js file and some Google Fonts
 * @return void
 */
function required_starter_scripts() {

	/**
	 * Registers the child-theme.js
	 *
	 * Remove if you don't need this file,
	 * it's empty by default.
	 */
	wp_enqueue_script(
		'child-theme-js',
		get_stylesheet_directory_uri() . '/javascripts/child-theme.js',
		array( 'theme-js' ),
		required_get_theme_version( false ),
		true
	);



	/**
	 * Registers the app.css
	 *
	 * If you don't need it, remove it.
	 * The file is empty by default.
	 */
	wp_register_style(
        'app-css', //handle
        get_stylesheet_directory_uri() . '/stylesheets/app.css',
        array( 'foundation-css' ),	// needs foundation
        required_get_theme_version( false ) //version
  	);
  	wp_enqueue_style( 'app-css' );

	/**
	 * Adding google fonts
	 *
	 * This is the proper code to add google fonts
	 * as seen in TwentyTwelve
	 */
	$protocol = is_ssl() ? 'https' : 'http';
	$query_args = array( 'family' => 'Open+Sans:300,600' );
	wp_enqueue_style(
		'open-sans',
		add_query_arg( $query_args, "$protocol://fonts.googleapis.com/css" ),
		array(),
		null
	);
}
add_action('wp_enqueue_scripts', 'required_starter_scripts');

/**
 * Overwrite the default continue reading link
 *
 * This function is an example on how to overwrite
 * the parent theme function to create continue reading
 * links.
 *
 * @return string HTML link with text and permalink to the post/page/cpt
 */
function required_continue_reading_link() {
	return ' <a class="read-more" href="'. esc_url( get_permalink() ) . '">' . __( ' Read on! &rarr;', 'requiredstarter' ) . '</a>';
}

/**
 * Overwrite the defaults of the Orbit shortcode script
 *
 * Accepts all the parameters from http://foundation.zurb.com/docs/orbit.php#optCode
 * to customize the options for the orbit shortcode plugin.
 *
 * @param  array $args default args
 * @return array       your args
 */
function required_orbit_script_args( $defaults ) {
	$args = array(
		'animation' 	=> 'fade',
		'advanceSpeed' 	=> 8000,
     'bullets' => true,			 // true or false to activate the bullet navigation
	);
	return wp_parse_args( $args, $defaults );
}
add_filter( 'req_orbit_script_args', 'required_orbit_script_args' );

/**
 * Add some love to the footer, of course you can replace that:
 * <code>
 * remove_action( 'required_credits', 'required_sample_credits' );
 * </code>
 */
add_action( 'hype_credits', 'hype_sample_credits' );

function hype_sample_credits() {
	_e( '<a href="http://hypeadvertising.com/" title="Hype Advertising">HypeAdvertising.com</a>', 'requiredfoundation' );
}

/**
 * The following code creates a Porfolio
 */

/* Setting up the Custom Post Type
--------------------------------------*/
add_action( 'init', 'register_cpt_portfolio' );

function register_cpt_portfolio() {

$labels = array(
'name' => _x( 'Portfolio', 'portfolio' ),
'singular_name' => _x( 'Portfolio', 'portfolio' ),
'add_new' => _x( 'Add New', 'portfolio' ),
'add_new_item' => _x( 'Add New Entry', 'portfolio' ),
'edit_item' => _x( 'Edit Portfolio Entry', 'portfolio' ),
'new_item' => _x( 'New Portfolio Entry', 'portfolio' ),
'view_item' => _x( 'View Portfolio', 'portfolio' ),
'search_items' => _x( 'Search Portfolio Entries', 'portfolio' ),
'not_found' => _x( 'No entries found', 'portfolio' ),
'not_found_in_trash' => _x( 'No entries found in Trash', 'portfolio' ),
'parent_item_colon' => _x( 'Parent Portfolio:', 'portfolio' ),
'menu_name' => _x( 'Portfolio', 'portfolio' ),
);

$args = array(
'labels' => $labels,
'hierarchical' => false,
'description' => 'Portfolio post type generated for studionashvegas.',
'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ),

'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'menu_position' => 5,

'show_in_nav_menus' => true,
'publicly_queryable' => true,
'exclude_from_search' => false,
'has_archive' => true,
'query_var' => true,
'can_export' => true,
'rewrite' => true, 
'capability_type' => 'post'
);

register_post_type( 'portfolio', $args );
}

/* Setting up the Taxonomies
-------------------------------------*/
add_action( 'init', 'register_taxonomy_work_done' );

function register_taxonomy_work_done() {

$labels = array(
'name' => _x( 'Work Done', 'work done' ),
'singular_name' => _x( 'Work Done', 'work done' ),
'search_items' => _x( 'Search Work Done', 'work done' ),
'popular_items' => _x( 'Popular Work Done', 'work done' ),
'all_items' => _x( 'All Work Done', 'work done' ),
'parent_item' => _x( 'Parent Work Done', 'work done' ),
'parent_item_colon' => _x( 'Parent Work Done:', 'work done' ),
'edit_item' => _x( 'Edit Work Done', 'work done' ),
'update_item' => _x( 'Update Work Done', 'work done' ),
'add_new_item' => _x( 'Add New Work Done', 'work done' ),
'new_item_name' => _x( 'New Work Done Name', 'work done' ),
'separate_items_with_commas' => _x( 'Separate work done with commas', 'work done' ),
'add_or_remove_items' => _x( 'Add or remove work done', 'work done' ),
'choose_from_most_used' => _x( 'Choose from the most used work done', 'work done' ),
'menu_name' => _x( 'Work Done', 'work done' ),
);

$args = array(
'labels' => $labels,
'public' => true,
'show_in_nav_menus' => true,
'show_ui' => true,
'show_tagcloud' => true,
'hierarchical' => true,

'rewrite' => true,
'query_var' => true
);

register_taxonomy( 'work_done', array('portfolio'), $args );
}

add_action( 'init', 'register_taxonomy_color_scheme' );

function register_taxonomy_color_scheme() {

$labels = array(
'name' => _x( 'Color Schemes', 'color scheme' ),
'singular_name' => _x( 'Color Scheme', 'color scheme' ),
'search_items' => _x( 'Search Color Schemes', 'color scheme' ),
'popular_items' => _x( 'Popular Color Schemes', 'color scheme' ),
'all_items' => _x( 'All Color Schemes', 'color scheme' ),
'parent_item' => _x( 'Parent Color Scheme', 'color scheme' ),
'parent_item_colon' => _x( 'Parent Color Scheme:', 'color scheme' ),
'edit_item' => _x( 'Edit Color Scheme', 'color scheme' ),
'update_item' => _x( 'Update Color Scheme', 'color scheme' ),
'add_new_item' => _x( 'Add New Color Scheme', 'color scheme' ),
'new_item_name' => _x( 'New Color Scheme Name', 'color scheme' ),
'separate_items_with_commas' => _x( 'Separate color schemes with commas', 'color scheme' ),
'add_or_remove_items' => _x( 'Add or remove color schemes', 'color scheme' ),
'choose_from_most_used' => _x( 'Choose from the most used color schemes', 'color scheme' ),
'menu_name' => _x( 'Color Schemes', 'color scheme' ),
);

$args = array(
'labels' => $labels,
'public' => true,
'show_in_nav_menus' => true,
'show_ui' => true,
'show_tagcloud' => true,
'hierarchical' => false,

'rewrite' => true,
'query_var' => true
);

register_taxonomy( 'color_scheme', array('portfolio'), $args );
}

add_action( 'init', 'register_taxonomy_wordpress_functionality' );

function register_taxonomy_wordpress_functionality() {

$labels = array(
'name' => _x( 'WordPress Functionality', 'wordpress functionality' ),
'singular_name' => _x( 'WordPress Functionality', 'wordpress functionality' ),
'search_items' => _x( 'Search WordPress Functionality', 'wordpress functionality' ),
'popular_items' => _x( 'Popular WordPress Functionality', 'wordpress functionality' ),
'all_items' => _x( 'All WordPress Functionality', 'wordpress functionality' ),
'parent_item' => _x( 'Parent WordPress Functionality', 'wordpress functionality' ),
'parent_item_colon' => _x( 'Parent WordPress Functionality:', 'wordpress functionality' ),
'edit_item' => _x( 'Edit WordPress Functionality', 'wordpress functionality' ),
'update_item' => _x( 'Update WordPress Functionality', 'wordpress functionality' ),
'add_new_item' => _x( 'Add New WordPress Functionality', 'wordpress functionality' ),
'new_item_name' => _x( 'New WordPress Functionality Name', 'wordpress functionality' ),
'separate_items_with_commas' => _x( 'Separate wordpress functionality with commas', 'wordpress functionality' ),
'add_or_remove_items' => _x( 'Add or remove wordpress functionality', 'wordpress functionality' ),
'choose_from_most_used' => _x( 'Choose from the most used wordpress functionality', 'wordpress functionality' ),
'menu_name' => _x( 'WordPress Functionality', 'wordpress functionality' ),
);

$args = array(
'labels' => $labels,
'public' => true,
'show_in_nav_menus' => true,
'show_ui' => true,
'show_tagcloud' => true,
'hierarchical' => true,

'rewrite' => true,
'query_var' => true
);

register_taxonomy( 'wordpress_functionality', array('portfolio'), $args );
}

//Turn taxonomies into a dropdown menu
function get_terms_dropdown($taxonomies, $args){
$myterms = get_terms($taxonomies, $args);
$output ="<select name='wordpress_functionality'>";
$output .="<option value='#'> </option>";
foreach($myterms as $term){
$root_url = get_bloginfo('url');
$term_taxonomy=$term->taxonomy;
$term_slug=$term->slug;
$term_name =$term->name;
$link = $term_slug;
$output .="<option value='".$link."'>".$term_name."</option>";
}
$output .="</select>";
return $output;
}

