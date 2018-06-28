<?php
$accommodo_redux_demo = get_option('redux_demo');
//Custom fields:
require_once get_template_directory() . '/framework/widget/recent-post.php';

require_once get_template_directory() . '/framework/widget/widget.php';
require_once get_template_directory() . '/framework/wp_bootstrap_navwalker.php';
//Define Text Doimain

$lang = get_template_directory_uri() . '/languages';
load_theme_textdomain('accommodo', $lang);

// Add action to do after comment is submitted


//Theme Set up:
function accommodo_theme_setup() {
    /*
     * This theme uses a custom image size for featured images, displayed on
     * "standard" posts and pages.
     */
	add_theme_support( 'custom-header' ); 
	add_theme_support( 'custom-background' );
	
    add_theme_support( 'post-thumbnails' );
    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );
    // Switches default core markup for search form, comment form, and comments
    // to output valid HTML5.
    add_theme_support( "title-tag" );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
    //Post formats

    add_post_type_support( 'post', 'post-formats', array( 'audio',  'gallery', 'image', 'video' ) );
    add_post_type_support( 'portfolio', 'post-formats', array( 'gallery', 'image' ) );
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' =>  esc_html__( 'Primary Navigation Menu: Chosen menu in Home page, single, blog, pages ...', 'accommodo' ),
        'other' => esc_html__('Other Menu', 'accommodo'),
        'left' => esc_html__('Left sidebar Menu With Page Sidebar', 'accommodo'),
        'footer' => esc_html__('Footer Menu ', 'accommodo'),
	) );
    // This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );
}
add_action( 'after_setup_theme', 'accommodo_theme_setup' );
if ( ! isset( $content_width ) ) $content_width = 900;

function accommodo_fonts_url() {
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'accommodo' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Lato:400,300,700,900,400italic&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function accommodo_theme_scripts_styles() {
	$accommodo_redux_demo = get_option('redux_demo');;
	$protocol = is_ssl() ? 'https' : 'http';

        wp_enqueue_style( 'accommodo-total1', get_template_directory_uri().'/assets/total1.css');
        wp_enqueue_style( 'accommodo-fonts', accommodo_fonts_url(), array(), '1.0.0' );
        wp_enqueue_style( 'accommodo-total2', get_template_directory_uri().'/assets/total2.css');
        wp_enqueue_style( 'accommodo-style', get_template_directory_uri().'/assets/css/style.css');

        wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '2016-02-29' );
    

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );
	//Javascript 

    wp_enqueue_script("accommodo-total", get_template_directory_uri()."/assets/js/total.js",array(),false,true);
    if(is_page_template('page-templates/template-home.php')){
    wp_enqueue_script("migrate", get_template_directory_uri()."/assets/js/jquery-migrate-1.2.1.min.js",array(),false,true);
    wp_enqueue_script("maps",$protocol."://maps.google.com/maps/api/js",array(),false,true);
    wp_enqueue_script("infobox", get_template_directory_uri()."/assets/js/infobox.js",array(),false,true);
    wp_enqueue_script("markerclusterer", get_template_directory_uri()."/assets/js/markerclusterer_packed.js",array(),false,true);
    wp_enqueue_script("richmarker-compiled", get_template_directory_uri()."/assets/js/richmarker-compiled.js",array(),false,true);
    wp_enqueue_script("markerwithlabel", get_template_directory_uri()."/assets/js/markerwithlabel_packed.js",array(),false,true);
    wp_enqueue_script("bootstrap", get_template_directory_uri()."/assets/bootstrap/js/bootstrap.min.js",array(),false,true);
    wp_enqueue_script("validate", get_template_directory_uri()."/assets/js/jquery.validate.min.js",array(),false,true);
    wp_enqueue_script("bootstrap-datepicker", get_template_directory_uri()."/assets/js/bootstrap-datepicker.js",array(),false,true);
    wp_enqueue_script("icheck", get_template_directory_uri()."/assets/js/icheck.min.js",array(),false,true);
    wp_enqueue_script("owl.carousel", get_template_directory_uri()."/assets/js/owl.carousel.js",array(),false,true);
    wp_enqueue_script("masonry.pkgd", get_template_directory_uri()."/assets/js/masonry.pkgd.min.js",array(),false,true);
    wp_enqueue_script("simpleWeather", get_template_directory_uri()."/assets/js/jquery.simpleWeather.min.js",array(),false,true);
    wp_enqueue_script("accommodo-maps", get_template_directory_uri()."/assets/js/maps.js",array(),false,true);
    wp_enqueue_script("accommodo-custom", get_template_directory_uri()."/assets/js/custom.js",array(),false,true);
    }
}
add_action( 'wp_enqueue_scripts', 'accommodo_theme_scripts_styles' );

//Custom Excerpt Function
function accommodo_do_shortcode($content) {
    global $shortcode_tags;
    if (empty($shortcode_tags) || !is_array($shortcode_tags))
        return $content;
    $pattern = get_shortcode_regex();
    return preg_replace_callback( "/$pattern/s", 'do_shortcode_tag', $content );
}
// Widget Sidebar
function accommodo_widgets_init() {
	register_sidebar( array(
        'name'          => esc_html__( 'Primary Sidebar', 'accommodo' ),
        'id'            => 'sidebar-1',        
		'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'accommodo' ),        
		'before_widget' => '<div id="%1$s" class="sidebar  %2$s">',        
		'after_widget'  => '</div>',        
		'before_title'  => '<h2>',        
		'after_title'   => '</h2><ul class="links">'
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar Other', 'accommodo' ),
        'id'            => 'sidebar-other',        
        'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'accommodo' ),        
        'before_widget' => '<div id="%1$s" class="sidebar widget-recent-post search-widget  %2$s">',        
        'after_widget'  => '</div>',        
        'before_title'  => '<h2>',        
        'after_title'   => '</h2>'
    ) );

	
}
add_action( 'widgets_init', 'accommodo_widgets_init' );
function accommodo_add_class_previous($format){
  $format = str_replace('href=', 'class="icon-left-open-big" href=', $format);
  return $format;
}
function accommodo_add_class_next($format){
  $format = str_replace('href=', 'class="icon-right-open-big" href=', $format);
  return $format;
}
add_filter('next_post_link', 'accommodo_add_class_next');
add_filter('previous_post_link', 'accommodo_add_class_previous');
//function tag widgets
function accommodo_tag_cloud_widget($args) {
	$args['number'] = 0; //adding a 0 will display all tags
	$args['largest'] = 18; //largest tag
	$args['smallest'] = 11; //smallest tag
	$args['unit'] = 'px'; //tag font unit
	$args['format'] = 'list'; //ul with a class of wp-tag-cloud
	$args['exclude'] = array(20, 80, 92); //exclude tags by ID
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'accommodo_tag_cloud_widget' );
function accommodo_excerpt() {
  $accommodo_redux_demo = get_option('redux_demo');;
  if(isset($accommodo_redux_demo['blog_excerpt'])){
    $limit = $accommodo_redux_demo['blog_excerpt'];
  }else{
    $limit = 20;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
function accommodo_home_excerpt() {
    $limit = 20;
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}


//pagination
function accommodo_pagination($prev = '<i class="arrow_left"></i>', $next = '<i class="arrow_right"></i>', $pages='') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    if($pages==''){
        global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
    }
    $pagination = array(
        'base'          => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
        'format'        => '',
        'current'       => max( 1, get_query_var('paged') ),
        'total'         => $pages,
        'prev_text' => $prev,
        'next_text' => $next,       
        'type'          => 'list',
        'end_size'      => 5,
        'mid_size'      => 5
);
    $return =  paginate_links( $pagination );
    echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination">', $return );
}
//Get thumbnail url
function accommodo_thumbnail_url($size){
    global $post;
    //$url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()),$size );
    if($size==''){
        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
         return $url;
    }else{
        $url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), $size);
         return $url[0];
    }
}

function accommodo_search_form( $form ) {
    $form = '
        <form role="search" method="get" id="searchform" class="labels-uppercase" action="' . esc_url(home_url('/')) . '" >
            <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">

                                        <input type="search" class="form-control" name="search" placeholder="'.esc_html__( 'Enter Search Keyword', 'accommodo' ).'" value="' . get_search_query() . '" name="s" id="s" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary ">'.esc_html__( 'Search', 'accommodo' ).'</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </form>
    ';
    return $form;
}
add_filter( 'get_search_form', 'accommodo_search_form' );

function accommodo_theme_comment($comment, $args, $depth) {
    //echo 's';
   $GLOBALS['comment'] = $comment; ?>
    <li class="comment">
        <figure>
            <div class="image">
                <?php echo get_avatar($comment,$size='70' ); ?>
            </div>
        </figure>
        <div class="comment-wrapper">
            <div class="name pull-left"><?php printf(__('%s','accommodo'), get_comment_author_link()) ?></div>
            <span class="date pull-right"><span class="fa fa-calendar"></span><?php the_time(get_option( 'date_format' ));?></span>
            <?php comment_text(); ?>
            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            <hr>
        </div>
    </li>

<?php
}


add_action( 'wp_login_form', 'accommodo_my_form_login' );
function accommodo_my_form_login( $args = array() ) {
$defaults = array(
        'echo' => true,
        'redirect' => site_url( '/wp-admin' ), 
        'form_id' => 'loginform',
        'label_username' => esc_html__( 'Username' , 'accommodo'),
        'label_password' => esc_html__( 'Password', 'accommodo' ),
        'label_remember' => esc_html__( 'Remember Me', 'accommodo' ),
        'label_log_in' => esc_html__( 'Sign in' , 'accommodo'),
        'id_username' => 'user_login',
        'id_password' => 'user_pass',
        'id_email'    => 'email',
        'id_remember' => 'rememberme',
        'id_submit' => 'wp-submit',
        'remember' => true,
        'value_username' => '',
        'value_remember' => false,
);
$args = wp_parse_args( $args, apply_filters( 'login_form_defaults', $defaults ) );

$form = '<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-popup">
                <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
                <form name="' . $args['form_id'] . '" id="'.$args['form_id'].'" action="' . esc_url( site_url( 'wp-login.php', 'login_post' ) ) . '" method="post" class="popup-form">
                    <input type="text" name="log" class="form-control form-white" placeholder="Username" id="'.esc_attr( $args['id_email'] ).'" value="' . esc_attr( $args['value_username'] ) . '">
                    <input type="text" name="pwd" class="form-control form-white" placeholder="Password" id="' . esc_attr( $args['id_password'] ) . '">
                    ' . apply_filters( 'login_form_middle', '', $args ) . '
                    <div class="checkbox-holder text-left">
                        <div class="checkbox">
                            <input type="checkbox" value="accept_1" id="check_1" name="check_1" />
                            <label for="check_1"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                        </div>
                    </div>
                    <button name="wp-submit" id="' . esc_attr( $args['id_submit'] ) . '" type="submit" class="btn btn-submit">Submit</button>
                    ' . apply_filters( 'login_form_bottom', '', $args ) . '
                </form>
            </div>
        </div>
    </div> ';

if ( $args['echo'] )
        echo $form;
else
        return $form;
    }
    



//Code Visual Composer

function accommodo_custom_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
    if($tag=='vc_row' || $tag=='vc_row_inner') {
        $class_string = str_replace('vc_row-fluid', '', $class_string);
    }
    if($tag=='vc_column' || $tag=='vc_column_inner') {
    $class_string = preg_replace('/vc_col-sm-12/', 'col-md-12', $class_string);
    $class_string = preg_replace('/vc_col-sm-6/', 'col-md-6', $class_string);
    $class_string = preg_replace('/vc_col-sm-4/', 'col-md-4', $class_string);
    $class_string = preg_replace('/vc_col-sm-3/', 'col-md-3', $class_string);
    $class_string = preg_replace('/vc_col-sm-5/', 'col-md-5', $class_string);
    $class_string = preg_replace('/vc_col-sm-7/', 'col-md-7', $class_string);
    $class_string = preg_replace('/vc_col-sm-8/', 'col-md-8', $class_string);
    $class_string = preg_replace('/vc_col-sm-9/', 'col-md-9', $class_string);
    $class_string = preg_replace('/vc_col-sm-10/', 'col-md-10', $class_string);
    $class_string = preg_replace('/vc_col-sm-11/', 'col-md-11', $class_string);
    $class_string = preg_replace('/vc_col-sm-1/', 'col-md-1', $class_string);
    $class_string = preg_replace('/vc_col-sm-2/', 'col-md-2', $class_string);
    }
    return $class_string;
}
// Filter to Replace default css class for vc_row shortcode and vc_column
add_filter('vc_shortcodes_css_class', 'accommodo_custom_css_classes_for_vc_row_and_vc_column', 10, 2); 
// Add new Param in Row
if(function_exists('vc_add_param')){

vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Title', 'accommodo'),
                              "param_name" => "ses_title",
                              "value" => "",
                              "description" => esc_html__("Title of Section, Leave a blank do not show frontend.", "accommodo"),   
    )); 

vc_add_param('vc_row',array(
                             'type' => 'dropdown',
                             'heading' => esc_html__( 'Chosen type row', 'accommodo' ),
                             'param_name' => 'type_row',
                             'value' => array(
                                esc_html__( 'None Section', 'accommodo' ) => 'type2',
                               
                                esc_html__( 'Block Row', 'accommodo' ) => 'block',
                                esc_html__( 'Our Picks', 'accommodo' ) => 'our_picks',
                                esc_html__( 'Destinations', 'accommodo' ) => 'destinations',
                                esc_html__( 'Reviews', 'accommodo' ) => 'reviews',
                                esc_html__( 'Our Team', 'accommodo' ) => 'our_team',
                             ),
                             'description' => esc_html__( 'Select type row', 'accommodo' )
      )); 
vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Sub Title', 'accommodo'),
                              "param_name" => "ses_sub_title",
                              "value" => "",
                              "description" => esc_html__("Section Sub Title, Leave a blank do not show frontend.", "accommodo"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textarea_html",
                              "heading" => esc_html__('Section Content', 'accommodo'),
                              "param_name" => "ses_content",
                              "value" => "",
                              "description" => esc_html__("Section Content, Leave a blank do not show frontend.", "accommodo"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Text', 'accommodo'),
                              "param_name" => "ses_text",
                              "value" => "",
                              "description" => esc_html__("Text button with block: focus", "accommodo"),   
    )); 
vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Link', 'accommodo'),
                              "param_name" => "ses_link",
                              "value" => "",
                              "description" => esc_html__("Link button with block: focus", "accommodo"),   
    )); 
vc_add_param('vc_row',array(
                             'type' => 'attach_image',
                             'heading' => esc_html__( 'Image Background', 'accommodo' ),
                             'param_name' => 'ses_image',
                             'value' => '',
                             'description' => esc_html__( 'Select image from media library to do your signature.', 'accommodo' )
      )); 
// Add new Param in Column  

}

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.4.0
 * @author     Thomas Griffin <thomasgriffinmedia.com>
 * @author     Gary Jones <gamajo.com>
 * @copyright  Copyright (c) 2016, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'accommodo_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
 
 
function accommodo_theme_register_required_plugins() {
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
             // This is an example of how to include a plugin from a private repo in your theme.
        array(
            'name'               => esc_html__( 'WPBakery Visual Composer', 'accommodo' ), // The plugin name.
            'slug'               => esc_html__( 'visualcomposer', 'accommodo' ), // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/framework/plugins/js_composer.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),      
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        
        array(
            'name'      => esc_html__( 'Contact Form 7', 'accommodo' ),
            'slug'      => esc_html__( 'contact-form-7', 'accommodo' ),
            'required'  => true,
        ),
        array(
            'name'                     => esc_html__( 'accommodo Common', 'accommodo' ),
            'slug'                     => esc_html__( 'accommodo-common', 'accommodo' ),
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/accommodo-common.zip',
        )
    );
    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => esc_html__( 'Install Required Plugins', 'accommodo' ),
            'menu_title'                      => esc_html__( 'Install Plugins', 'accommodo' ),
            'installing'                      => esc_html__( 'Installing Plugin: %s', 'accommodo' ), // %s = plugin name.
            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'accommodo' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'accommodo' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'accommodo' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'accommodo' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'accommodo' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'accommodo' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'accommodo' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'accommodo' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'accommodo' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'accommodo' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'accommodo' ),
            'return'                          => esc_html__( 'Return to Required Plugins Installer', 'accommodo' ),
            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'accommodo' ),
            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'accommodo' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
    tgmpa( $plugins, $config );
}
?>