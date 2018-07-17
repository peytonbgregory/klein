<?php
/**
 *The Idea Center
 */


 
if (!isset($content_width)) $content_width = 770;

/**
 * upbootwp_setup function.
 * 
 * @access public
 * @return void
 */
function upbootwp_setup() {

	require 'inc/general/class-Upbootwp_Walker_Nav_Menu.php';

	load_theme_textdomain('upbootwp', get_template_directory().'/languages');

	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	
	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'upbootwp_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	)));
	
	
}

add_action( 'after_setup_theme', 'upbootwp_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function upbootwp_widgets_init() {
	register_sidebar(array(
		'name'          => __('Sidebar','upbootwp'),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	));
	
	register_sidebar(array(
		'name'          => __('Google Map','upbootwp'),
		'id'            => 'google-map',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	));
	
	register_sidebar(array(
		'name'          => __('Contact Page Sidebar','upbootwp'),
		'id'            => 'contact-form',
		'before_widget' => '<aside id="%1$s" class="widget contact-form %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));
	
	register_sidebar(array(
		'name'          => __('Slideshow','upbootwp'),
		'id'            => 'slideshow',
		'before_widget' => '<aside id="%1$s" class="widget slideshow-widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '',
		'after_title'   => '',
	));
	register_sidebar(array(
		'name'          => __('Affiliations Footer','upbootwp'),
		'id'            => 'affiliations',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));
	register_sidebar(array(
		'name'          => __('Social Media Footer','upbootwp'),
		'id'            => 'social-media',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));
	register_sidebar(array(
		'name'          => __('Contact Us Footer','upbootwp'),
		'id'            => 'contact-us',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));
}
add_action( 'widgets_init', 'upbootwp_widgets_init' );

function upbootwp_scripts() {
	wp_enqueue_style( 'upbootwp-css', get_template_directory_uri().'/css/upbootwp.min.css', array(), '1.1');
	wp_enqueue_script( 'upbootwp-basefile', get_template_directory_uri().'/js/bootstrap.min.js',array(),'1.1',true);
}
add_action( 'wp_enqueue_scripts', 'upbootwp_scripts' );


/**
 * upbootwp_less function.
 * Load less for development or even on the running website. If you want to use less just enable this function
 * @access public
 * @return void
 */
function upbootwp_less() {
	printf('<link rel="stylesheet" type="text/less" href="%s" />', get_template_directory_uri().'/less/bootstrap.less?ver=1.1'); // raus machen :) 
	printf('<script type="text/javascript" src="%s"></script>', get_template_directory_uri().'/js/less.js?ver=1.6.1');
}
// Enable this when you want to work with less
//add_action('wp_head', 'upbootwp_less');



/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory().'/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory().'/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory().'/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory().'/inc/jetpack.php';


/**
 * upbootwp_breadcrumbs function.
 * Edit the standart breadcrumbs to fit the bootstrap style without producing more css
 * @access public
 * @return void
 */
function upbootwp_breadcrumbs() {

	$delimiter = '&raquo;';
	$home = 'Home';
	$before = '<li class="active">';
	$after = '</li>';

	if (!is_home() && !is_front_page() || is_paged()) {

		echo '<ol class="breadcrumb">';

		global $post;
		$homeLink = get_bloginfo('url');
		echo '<li><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . '</li> ';

		if (is_category()) {
			global $wp_query;
			$cat_obj = $wp_query->get_queried_object();
			$thisCat = $cat_obj->term_id;
			$thisCat = get_category($thisCat);
			$parentCat = get_category($thisCat->parent);
			if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
			echo $before . single_cat_title('', false) . $after;

		} elseif (is_day()) {
			echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
			echo '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a></li> ' . $delimiter . ' ';
			echo $before . get_the_time('d') . $after;

		} elseif (is_month()) {
			echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
			echo $before . get_the_time('F') . $after;

		} elseif (is_year()) {
			echo $before . get_the_time('Y') . $after;

		} elseif (is_single() && !is_attachment()) {
			if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li> ' . $delimiter . ' ';
				echo $before . get_the_title() . $after;
			} else {
				$cat = get_the_category(); $cat = $cat[0];
				echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
				echo $before . get_the_title() . $after;
			}

		} elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
			$post_type = get_post_type_object(get_post_type());
			echo $before . $post_type->labels->singular_name . $after;

		} elseif (is_attachment()) {
			$parent = get_post($post->post_parent);
			$cat = get_the_category($parent->ID); $cat = $cat[0];
			echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
			echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li> ' . $delimiter . ' ';
			echo $before . get_the_title() . $after;

		} elseif ( is_page() && !$post->post_parent ) {
			echo $before . get_the_title() . $after;

		} elseif ( is_page() && $post->post_parent ) {
			$parent_id  = $post->post_parent;
			$breadcrumbs = array();
			while ($parent_id) {
				$page = get_page($parent_id);
				$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
				$parent_id  = $page->post_parent;
			}
			$breadcrumbs = array_reverse($breadcrumbs);
			foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
			echo $before . get_the_title() . $after;

		} elseif ( is_search() ) {
			echo $before . 'Search results for "' . get_search_query() . '"' . $after;

		} elseif ( is_tag() ) {
			echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;

		} elseif ( is_author() ) {
			global $author;
			$userdata = get_userdata($author);
			echo $before . 'Articles posted by ' . $userdata->display_name . $after;

		} elseif ( is_404() ) {
			echo $before . 'Error 404' . $after;
		}

		if ( get_query_var('paged') ) {
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
			echo ': ' . __('Page') . ' ' . get_query_var('paged');
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
		}

		echo '</ol>';

	}
}

function register_my_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'Primary Menu', 'Bootstrap WP Primary' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails' ); 


// Enable shortcodes in widgets
add_filter('widget_text', 'do_shortcode');


//register settings
function theme_settings_init(){
    register_setting( 'theme_settings', 'theme_settings' );
}

//add settings page to menu
function add_settings_page() {
add_menu_page( __( 'Theme Settings' ), __( 'Theme Settings' ), 'manage_options', 'theme-settings', 'theme_settings_page');
}

//add actions
add_action( 'admin_init', 'theme_settings_init' );
add_action( 'admin_menu', 'add_settings_page' );

//define your variables
$color_scheme = array('default','blue','green',);

//start settings page
function theme_settings_page() {

if ( ! isset( $_REQUEST['updated'] ) )
$_REQUEST['updated'] = false;

//get variables outside scope
global $color_scheme;
?>

<div>

<div id="icon-options-general"></div>
<h2><?php _e( 'Theme Settings' ) //your admin panel title ?></h2>

<?php
//show saved options message
if ( false !== $_REQUEST['updated'] ) : ?>
<div><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
<?php endif; ?>

<form method="post" action="options.php">

<?php settings_fields( 'theme_settings' ); ?>
<?php $options = get_option( 'theme_settings' ); ?>


<table>

<!-- Option 1: Custom Logo -->

<tr valign="top">
<th scope="row"><?php _e( 'Main Logo' ); ?></th>
<td><input id="theme_settings[main_logo]" type="text" size="36" name="theme_settings[main_logo]" value="<?php esc_attr_e( $options['main_logo'] ); ?>" />
<label for="theme_settings[main_logo]"></label></td>
</tr>

<tr valign="top">
<th scope="row"><?php _e( 'Phone Number' ); ?></th>
<td><input id="theme_settings[phone_number]" type="text" size="36" name="theme_settings[phone_number]" value="<?php esc_attr_e( $options['phone_number'] ); ?>" />
<label for="theme_settings[phone_number]"></label></td>
</tr>

<tr valign="top">
<th scope="row"><?php _e( 'Phone Number URL' ); ?></th>
<td><input id="theme_settings[phone_number_url]" type="text" size="36" name="theme_settings[phone_number_url]" value="<?php esc_attr_e( $options['phone_number_url'] ); ?>" />
<label for="theme_settings[phone_number_url]"></label></td>
</tr>

<tr valign="top">
<th scope="row"><?php _e( 'Facebook URL' ); ?></th>
<td><input id="theme_settings[facebook_url]" type="text" size="36" name="theme_settings[facebook_url]" value="<?php esc_attr_e( $options['facebook_url'] ); ?>" />
<label for="theme_settings[facebook_url]"></label></td>
</tr>

<tr valign="top">
<th scope="row"><?php _e( 'YouTube URL' ); ?></th>
<td><input id="theme_settings[youtube_url]" type="text" size="36" name="theme_settings[youtube_url]" value="<?php esc_attr_e( $options['youtube_url'] ); ?>" />
<label for="theme_settings[youtube_url]"></label></td>
</tr>


<tr valign="top">
<th scope="row"><?php _e( 'Twitter URL' ); ?></th>
<td><input id="theme_settings[twitter_url]" type="text" size="36" name="theme_settings[twitter_url]" value="<?php esc_attr_e( $options['twitter_url'] ); ?>" />
<label for="theme_settings[twitter_url]"></label></td>
</tr>

<tr valign="top">
<th scope="row"><?php _e( 'Linkedin URL' ); ?></th>
<td><input id="theme_settings[linkedin_url]" type="text" size="36" name="theme_settings[linkedin_url]" value="<?php esc_attr_e( $options['linkedin_url'] ); ?>" />
<label for="theme_settings[linkedin_url]"></label></td>
</tr>

<tr valign="top">
<th scope="row"><?php _e( 'Google Plus URL' ); ?></th>
<td><input id="theme_settings[google_plus_url]" type="text" size="36" name="theme_settings[google_plus_url]" value="<?php esc_attr_e( $options['google_plus_url'] ); ?>" />
<label for="theme_settings[google_plus_url]"></label></td>
</tr>

<tr valign="top">
<th scope="row"><?php _e( 'Pinterest URL' ); ?></th>
<td><input id="theme_settings[pinterest_url]" type="text" size="36" name="theme_settings[pinterest_url]" value="<?php esc_attr_e( $options['pinterest_url'] ); ?>" />
<label for="theme_settings[pinterest_url]"></label></td>
</tr>

</table>

<p><input name="submit" id="submit" value="Save Changes" type="submit"></p>
</form>

</div><!-- END wrap -->

<?php
}
//sanitize and validate
function options_validate( $input ) {
    global $select_options, $radio_options;
    if ( ! isset( $input['option1'] ) )
        $input['option1'] = null;
    $input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );
    $input['sometext'] = wp_filter_nohtml_kses( $input['sometext'] );
    if ( ! isset( $input['radioinput'] ) )
        $input['radioinput'] = null;
    if ( ! array_key_exists( $input['radioinput'], $radio_options ) )
        $input['radioinput'] = null;
    $input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );
    return $input;
}
?>