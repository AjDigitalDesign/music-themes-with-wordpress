<?php
/**
 * Ducor Media functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Ducor_Media
 */

if ( ! function_exists( 'ducormedia_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ducormedia_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Ducor Media, use a find and replace
		 * to change 'ducormedia' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ducormedia', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'ducormedia' ),
            'footer-menu' => esc_html__( 'secondary', 'ducormedia' ),


        ) );

		//class for adding Bootstrap 4 navigation Menu
        add_filter('nav_menu_css_class', 'add_classes_on_li', 1, 3);
        function add_classes_on_li($classes, $item, $args)
        {
            $classes[] = 'nav-item';

            return $classes;
        }

        add_filter('wp_nav_menu', 'add_classes_on_a');
        function add_classes_on_a($ulclass)
        {
            return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
        }


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
		add_theme_support( 'custom-background', apply_filters( 'ducormedia_custom_background_args', array(
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
			'height'      => 70,
			'width'       => 168,
			'flex-width'  => true,
			'flex-height' => false,
		) );


        // Custom Images sizes
        add_image_size( 'main-slider', 1920, 850 );
        add_image_size( 'about_section-img', 1017, 710 );
        add_image_size( 'teammate_bg', 364, 488 );
        add_image_size( 'teammate_headshot', 162, 162 );
        add_image_size( 'projects_img', 354, 354 );
        add_image_size( 'blog_page', 376, 345, true );
        add_image_size( 'Services-bg', 331, 306, true );
        add_image_size( 'Services-single', 1170, 486, true );
        add_image_size( 'blog_post_img', 763, 342 );

	}
endif;
add_action( 'after_setup_theme', 'ducormedia_setup' );



@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ducormedia_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ducormedia_content_width', 640 );
}
add_action( 'after_setup_theme', 'ducormedia_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ducormedia_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ducormedia' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ducormedia' ),
		'before_widget' => '<div id="%1$s" class="ducoremedia-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="sec-title-four">',
		'after_title'   => '</h6>',
	) );

    register_sidebar( array(
        'name'          => esc_html__( 'Header-Address', 'ducormedia' ),
        'id'            => 'header-1',
        'description'   => esc_html__( 'Add widgets here.', 'ducormedia' ),
        'before_widget' => '<div id="%1$s" class="info-text %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Header-Phone', 'ducormedia' ),
        'id'            => 'header-2',
        'description'   => esc_html__( 'Add widgets here.', 'ducormedia' ),
        'before_widget' => '<div id="%1$s" class="info-text %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Header-Email', 'ducormedia' ),
        'id'            => 'header-3',
        'description'   => esc_html__( 'Add widgets here.', 'ducormedia' ),
        'before_widget' => '<div id="%1$s" class="info-text %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );


    register_sidebar( array(
        'name'          => esc_html__( 'Foot_left', 'ducormedia' ),
        'id'            => 'footer-logo',
        'description'   => esc_html__( 'Add widgets here.', 'ducormedia' ),
        'before_widget' => '<div id="%1$s" class="footer-logo %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Foot_left_Bottom', 'ducormedia' ),
        'id'            => 'footer-content',
        'description'   => esc_html__( 'Add widgets here.', 'ducormedia' ),
        'before_widget' => '<div id="%1$s" class="footer-logo %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Foot_center', 'ducormedia' ),
        'id'            => 'footer-center',
        'description'   => esc_html__( 'Add widgets here.', 'ducormedia' ),
        'before_widget' => '<div id="%1$s" class="news-item-one %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="sec-title-three">',
        'after_title'   => '</h6>',
    ) );




}
add_action( 'widgets_init', 'ducormedia_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ducormedia_scripts() {

	wp_enqueue_style('ducormedia-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array());

	wp_enqueue_style('ducormedia-settingsCss', get_template_directory_uri() . '/assets/plugins/revolution/css/settings.css', array());
	wp_enqueue_style('ducormedia-layersCss', get_template_directory_uri() . '/assets/plugins/revolution/css/layers.css', array());
	wp_enqueue_style('ducormedia-navigationcss', get_template_directory_uri() . '/assets/plugins/revolution/css/navigation.css', array());
    wp_enqueue_style('ducormedia-fontAwesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array());
    wp_enqueue_style('ducormedia-flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array());
    wp_enqueue_style('ducormedia-animate', get_template_directory_uri() . '/assets/css/animate.css', array());
    wp_enqueue_style('ducormedia-elementcss', get_template_directory_uri() . '/assets/css/element.css', array());
    wp_enqueue_style('ducormedia-headercss', get_template_directory_uri() . '/assets/css/header.css', array());
    wp_enqueue_style('ducormedia-jquerycss', get_template_directory_uri() . '/assets/css/jquery-ui.css', array());
    wp_enqueue_style('ducormedia-owlcss', get_template_directory_uri() . '/assets/css/owl.css', array());
    wp_enqueue_style('ducormedia-fancyboxcss', get_template_directory_uri() . '/assets/css/jquery.fancybox.css', array());
    wp_enqueue_style('ducormedia-imagehover', get_template_directory_uri() . '/assets/css/imagehover-extended.css', array());
    wp_enqueue_style('ducormedia-nouislider', get_template_directory_uri() . '/assets/css/nouislider.css', array());
    wp_enqueue_style('ducormedia-touchspin', get_template_directory_uri() . '/assets/css/jquery.bootstrap-touchspin.css', array());
    wp_enqueue_style('ducormedia-magnificCss', get_template_directory_uri() . '/assets/css/magnific-popup.css', array());
    wp_enqueue_style('ducormedia-global', get_template_directory_uri() . '/assets/css/global.css', array());

    //Enqueue Google Fonts
    wp_enqueue_style( 'ducormedia-GoogleFontsSans','https://fonts.googleapis.com/css?family=PT+Sans' );
    //Enqueue Google Fonts
    wp_enqueue_style( 'ducormedia-GoogleFontsPoppins','https://fonts.googleapis.com/css?family=Poppins:300,400,500' );
    //Enqueue Google Fonts
    wp_enqueue_style( 'ducormedia-GoogleFontsUbuntu', 'https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700');


	wp_enqueue_style( 'ducormedia-style', get_stylesheet_uri() );
	wp_enqueue_style('ducormedia-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array());


	wp_enqueue_script('jquery');

	wp_enqueue_script('ducormedia-bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '4.9.8', true);

	wp_enqueue_script('ducormedia-revolutionjs', get_template_directory_uri() . '/assets/plugins/revolution/js/jquery.themepunch.revolution.min.js', array('jquery'), '', true);
	wp_enqueue_script('ducormedia-toolsjs', get_template_directory_uri() . '/assets/plugins/revolution/js/jquery.themepunch.tools.min.js', array('jquery'), '', true);
	wp_enqueue_script('ducormedia-actionsjs', get_template_directory_uri() . '/assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js', array('jquery'), '', true);
	wp_enqueue_script('ducormedia-carouseljs', get_template_directory_uri() . '/assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js', array('jquery'), '', true);
	wp_enqueue_script('ducormedia-kenburn', get_template_directory_uri() . '/assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js', array('jquery'), '', true);
	wp_enqueue_script('ducormedia-layeranimation', get_template_directory_uri() . '/assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js', array('jquery'), '', true);
	wp_enqueue_script('ducormedia-migration', get_template_directory_uri() . '/assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js', array('jquery'), '', true);
	wp_enqueue_script('ducormedia-navigation', get_template_directory_uri() . '/assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js', array('jquery'), '', true);

    wp_enqueue_script('ducormedia-slideanim', get_template_directory_uri() . '/assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js', array('jquery'), '', true);

	wp_enqueue_script('ducormedia-parallax', get_template_directory_uri() . '/assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js', array('jquery'), '', true);
	wp_enqueue_script('ducormedia-video', get_template_directory_uri() . '/assets/plugins/revolution/js/extensions/revolution.extension.video.min.js', array('jquery'), '', true);
	wp_enqueue_script('ducormedia-mainSlider', get_template_directory_uri() . '/assets/js/main-slider-script.js', array('jquery'), '', true);


	wp_enqueue_script('ducormedia-fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.pack.js', array('jquery'), '', true);
	wp_enqueue_script('ducormedia-fancyboxMedia', get_template_directory_uri() . '/assets/js/jquery.fancybox-media.js', array('jquery'), '', true);
	wp_enqueue_script('ducormedia-pluginsJs', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '', true);
	wp_enqueue_script('ducormedia-velocity', get_template_directory_uri() . '/assets/js/velocity.min.js', array('jquery'), '', true);

	wp_enqueue_script('ducormedia-appear', get_template_directory_uri() . '/assets/js/appear.js', array('jquery'), '', true);
	wp_enqueue_script('ducormedia-jquery-ui.', get_template_directory_uri() . '/assets/js/jquery-ui.js', array('jquery'), '', true);
	wp_enqueue_script('ducormedia-validate', get_template_directory_uri() . '/assets/js/validate.js', array('jquery'), '', true);
	wp_enqueue_script('ducormedia-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '', true);

	wp_enqueue_script('ducormedia-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '', true);



	wp_enqueue_script( 'ducormedia-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'ducormedia-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ducormedia_scripts' );


/**
 * Register Custom Navigation Walker
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';


function copyright_date() {
    global $wpdb;
    $copyright_dates = $wpdb->get_results("
SELECT
YEAR(min(post_date_gmt)) AS firstdate,
YEAR(max(post_date_gmt)) AS lastdate
FROM
$wpdb->posts
WHERE
post_status = 'publish'
");
    $output = '';
    if($copyright_dates) {
        $copyright = "&copy; " . $copyright_dates[0]->firstdate;
        if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
            $copyright .= '-' . $copyright_dates[0]->lastdate;
        }
        $output = $copyright;
    }
    return $output;
}

// define the comment_form_submit_button callback
function filter_comment_form_submit_button( $submit_button, $args ) {
    // make filter magic happen here...
    $submit_before = '<div class="form-group bottom">';
    $submit_after = '</div>';
    return $submit_before . $submit_button . $submit_after;
};

// add the filter
add_filter( 'comment_form_submit_button', 'filter_comment_form_submit_button', 10, 2 );



/*
 *
 * Activate HTML% features
 *
 **/
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'comment-reply' ) );


/**
 * Register the Excerpt files
 */
require get_template_directory() . '/inc/excerpt.php';

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

