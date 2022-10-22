<?php
/**
 * wp_starter_kit functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp_starter_kit
 */

if ( ! function_exists( 'wp_starter_kit_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wp_starter_kit_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on wp_starter_kit, use a find and replace
		 * to change 'wp_starter_kit' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wp_starter_kit', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'wp_starter_kit' ),
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
		add_theme_support( 'custom-background', apply_filters( 'wp_starter_kit_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'wp_starter_kit_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_starter_kit_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'wp_starter_kit_content_width', 640 );
}
add_action( 'after_setup_theme', 'wp_starter_kit_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_starter_kit_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wp_starter_kit' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp_starter_kit' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'wp_starter_kit' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Add widgets here.', 'wp_starter_kit' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wp_starter_kit_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wp_starter_kit_scripts() {
	wp_enqueue_style( 'wp_starter_kit-style', get_stylesheet_uri() );

	wp_enqueue_script( 'wp_starter_kit-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'wp_starter_kit-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_starter_kit_scripts' );

function bootstrapstarter_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies ); 
}

function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri(). '/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.7', false );
}
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );

// stylesheet
function nav_css_styles() {
	wp_enqueue_style( 'wp_starter_kit-style', get_stylesheet_uri() ); 
    wp_enqueue_style( 'nav-style', get_template_directory_uri() . '/css/nav.css' ); 
}
add_action( 'wp_enqueue_scripts', 'nav_css_styles' );

function front_page_css_styles() {
	wp_enqueue_style( 'wp_starter_kit-style', get_stylesheet_uri() ); 
    wp_enqueue_style( 'front-page-style', get_template_directory_uri() . '/css/front-page.css' ); // our stylesheet
}
add_action( 'wp_enqueue_scripts', 'front_page_css_styles' );

function bio_page_css_styles() {
	wp_enqueue_style( 'wp_starter_kit-style', get_stylesheet_uri() ); 
    wp_enqueue_style( 'bio-page-style', get_template_directory_uri() . '/css/bio-page.css' ); // our stylesheet
}
add_action( 'wp_enqueue_scripts', 'bio_page_css_styles' );

function books_page_css_styles() {
	wp_enqueue_style( 'wp_starter_kit-style', get_stylesheet_uri() ); 
    wp_enqueue_style( 'books-page-style', get_template_directory_uri() . '/css/books-page.css' ); // our stylesheet
}
add_action( 'wp_enqueue_scripts', 'books_page_css_styles' );

function blog_page_css_styles() {
	wp_enqueue_style( 'wp_starter_kit-style', get_stylesheet_uri() ); 
    wp_enqueue_style( 'blog-page-style', get_template_directory_uri() . '/css/blog-page.css' ); // our stylesheet
}
add_action( 'wp_enqueue_scripts', 'blog_page_css_styles' );

function links_page_css_styles() {
	wp_enqueue_style( 'wp_starter_kit-style', get_stylesheet_uri() ); 
    wp_enqueue_style( 'links-page-style', get_template_directory_uri() . '/css/links-page.css' ); // our stylesheet
}
add_action( 'wp_enqueue_scripts', 'links_page_css_styles' );

function slick_css_styles() {
	wp_enqueue_style( 'wp_starter_kit-style', get_stylesheet_uri() ); 
    wp_enqueue_style( 'slick-css-style', get_template_directory_uri() . '/css/slick.css' ); // our stylesheet
}
add_action( 'wp_enqueue_scripts', 'slick_css_styles' );

function mq_css_styles() {
	wp_enqueue_style( 'wp_starter_kit-style', get_stylesheet_uri() ); 
    wp_enqueue_style( 'mq-css-style', get_template_directory_uri() . '/css/mq.css' ); // our stylesheet
}
add_action( 'wp_enqueue_scripts', 'mq_css_styles' );

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'dropdown-menu' => __( 'Dropdown Menu' ),
      'mbj-dropdown-menu' => __( 'MBJ Dropdown Menu' ),
      'mbj-top-menu' => __( 'MBJ Top Menu' ),
      'mbj-sub-menu' => __( 'MBJ Sub Menu' ),
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

class AWP_Menu_Walker extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
		$output .= "<li>";
 
		if ($item->url && $item->url != '#') {
			$output .= '<a href="' . $item->url . '">';
		} else {
			$output .= '<span>';
		}
 
		$output .= $item->title;
 
		if ($item->url && $item->url != '#') {
			$output .= '</a>';
		} else {
			$output .= '</span>';
		}
	}
}

/* Custom script with no dependencies, enqueued in the footer */
function enqueue_jquery_validate() {
    wp_enqueue_script('jquery-validate', get_stylesheet_directory_uri().'/js/jquery.validate.min.js', 
    array(), false, true);
}
add_action('wp_enqueue_scripts', 'enqueue_jquery_validate');

function enqueue_index_js() {
    wp_enqueue_script('index', get_stylesheet_directory_uri().'/js/index.js', 
    array(), false, true);
}
add_action('wp_enqueue_scripts', 'enqueue_index_js');

function enqueue_jquery_slick() {
    wp_enqueue_script('jquery-slick', get_stylesheet_directory_uri().'/js/slick.min.js', 
    array(), false, true);
}
add_action('wp_enqueue_scripts', 'enqueue_jquery_slick');

function enqueue_signup_scripts() {
    wp_enqueue_script('signup-script', get_template_directory_uri() . '/js/signup.js', 
    	array(), false, true);
}
add_action('wp_enqueue_scripts', 'enqueue_signup_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function remove_jquery_migrate_notice() {
    $m= $GLOBALS['wp_scripts']->registered['jquery-migrate'];
    $m->extra['before'][]='temp_jm_logconsole = window.console.log; window.console.log=null;';
    $m->extra['after'][]='window.console.log=temp_jm_logconsole;';
}
add_action( 'init', 'remove_jquery_migrate_notice', 5 );

/*
function signup_user_scripts() {
    // Enqueue script

    wp_register_script('signup_reg_script', null, null, null, false);
    wp_enqueue_script('signup_reg_script');

    wp_localize_script( 'signup_reg_script', 'signup_reg_vars', array(
       'signup_ajax_url' => admin_url( 'admin-ajax.php' ),
       )
    );
}
add_action('wp_enqueue_scripts', 'signup_user_scripts', 100);

/*
 * New User registration
 *


function ajax_signup() {
  
    // Post values
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
  
    $error = '';

    if(empty($name)) {
       $error = 'first name is required';
    }

    if(empty($email)) {
       $error = 'email is required';
    }

    if(empty($error)) {
        // get the blog administrator's email address
        $emailTo = get_option('tz_email');
    	
		if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = get_option('admin_email');
		}

        $subject = 'New user subscription';
        //$headers = 'From: '.$fn.' <'.$to.'>' . "\r\n" . 'Reply-To: ' . $email;

        $message = "Name: $fn \n\nEmail: $email \n\nSubject: $subject";
		$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

        // If email has been process for sending, display a success message
        if(!wp_mail($email, $subject, $message, $headers)) {
            echo json_encode(array('signup'=>false, 'message'=>__('Sign up error, please try again')));
		} else {
            echo json_encode(array('signup'=>true, 'message'=>__('Thanks for contacting us, expect a response soon')));
		}
	} else {
		echo json_encode(array('signup'=>false, 'message'=>__($error)));
	}


  die();
}
 
add_action('wp_ajax_signup', 'ajax_signup');
add_action('wp_ajax_nopriv_signup', 'ajax_signup');
*/
