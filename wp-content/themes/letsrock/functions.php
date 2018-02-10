<?php
/**
 * Let`s Rock functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Let`s_Rock
 */

if (!function_exists('lets_rock_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function lets_rock_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Let`s Rock, use a find and replace
         * to change 'lets-rock' to the name of your theme in all the template files.
         */
        load_theme_textdomain('lets-rock', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'gallery',
            'chat',
            'link',
            'audio',
            'status',
            'quote',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('lets_rock_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 76,
            'width' => 121,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'lets_rock_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lets_rock_content_width()
{
    $GLOBALS['content_width'] = apply_filters('lets_rock_content_width', 640);
}

add_action('after_setup_theme', 'lets_rock_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lets_rock_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'lets-rock'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'lets-rock'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'lets_rock_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function lets_rock_scripts()
{

    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_script('jquery');
    wp_enqueue_style('flexslider-css', get_template_directory_uri() . '/flexslider/flexslider.css');
    wp_enqueue_script('flexslider-min-js', get_template_directory_uri() . '/flexslider/jquery.flexslider-min.js');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js');

}

add_action('wp_enqueue_scripts', 'lets_rock_scripts');

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
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

function wbp_custom_new_menu()
{
    register_nav_menus(array(
            'header-nav-menu' => _('Header nav menu'),
            'header-socials-menu' => _('Header social links'),
            'footer-nav-menu' => _('Footer nav menu'),
        )
    );
}

add_action('init', 'wbp_custom_new_menu');

function enqueue_font_awesome()
{
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css');
}

add_action('wp_enqueue_scripts', 'enqueue_font_awesome');

function letsrock_customize_register($wp_customize)
{
    /*footer*/
    $wp_customize->add_section('copyright_section', array(
        'title' => __('Copyright settings', 'lets_rock'),
        'priority' => 35,
    ));
    $wp_customize->add_setting('footer_copy', array(
        'default' => __('Copyright &copy; 2009-2016 <span id="cantus-link">cantus</span> their respective owners. Shipped from Salem, Mass. USA.', 'lets_rock'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('footer_copy', array(
        'label' => __('Copyright info in footer', 'lets_rock'),
        'section' => 'copyright_section',
        'settings' => 'footer_copy',
        'type' => 'textarea',
    ));

    /*main background/H1*/
    $wp_customize->add_section('header_image_section', array(
        'title' => __('Header image settings', 'lets_rock'),
        'priority' => 31,
    ));
    $wp_customize->add_setting('header_heading', array(
        'default' => __('Main heading', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('header_subheading', array(
        'default' => __('Subheading', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('header_button', array(
        'default' => __('Button', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('header_url', array(
        'default' => __('Button url', 'lets_rock'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('header_heading', array(
        'label' => __('Main heading in header', 'lets_rock'),
        'section' => 'header_image_section',
        'settings' => 'header_heading',
        'type' => 'text',
    ));
    $wp_customize->add_control('header_subheading', array(
        'label' => __('Subheading in header', 'lets_rock'),
        'section' => 'header_image_section',
        'settings' => 'header_subheading',
        'type' => 'text',
    ));
    $wp_customize->add_control('header_button', array(
        'label' => __('Button name', 'lets_rock'),
        'section' => 'header_image_section',
        'settings' => 'header_button',
        'type' => 'text',
    ));
    $wp_customize->add_control('header_url', array(
        'label' => __('Url', 'lets_rock'),
        'section' => 'header_image_section',
        'settings' => 'header_url',
        'type' => 'text',
    ));

    /*social media*/
    $wp_customize->add_section('header_socials', array(
        'title' => __('Header social icons', 'lets_rock'),
        'priority' => 31,
    ));
    $wp_customize->add_setting('social_facebook', array(
        'default' => __('url', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('social_twitter', array(
        'default' => __('url', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('social_googleplus', array(
        'default' => __('url', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('facebook_likes', array(
        'default' => __('Quantity', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('twitter_likes', array(
        'default' => __('Quantity', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('googleplus_likes', array(
        'default' => __('Quantity', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('header_button_name', array(
        'default' => __('Title', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('header_button_url', array(
        'default' => __('Url', 'lets_rock'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('social_facebook', array(
        'label' => __('Facebook site url', 'lets_rock'),
        'section' => 'header_socials',
        'settings' => 'social_facebook',
        'type' => 'text',
    ));
    $wp_customize->add_control('social_twitter', array(
        'label' => __('Twitter site url', 'lets_rock'),
        'section' => 'header_socials',
        'settings' => 'social_twitter',
        'type' => 'text',
    ));
    $wp_customize->add_control('social_googleplus', array(
        'label' => __('Google-plus site url', 'lets_rock'),
        'section' => 'header_socials',
        'settings' => 'social_googleplus',
        'type' => 'text',
    ));
    $wp_customize->add_control('facebook_likes', array(
        'label' => __('Number of Facebook likes', 'lets_rock'),
        'section' => 'header_socials',
        'settings' => 'facebook_likes',
        'type' => 'text',
    ));
    $wp_customize->add_control('twitter_likes', array(
        'label' => __('Number of Twitter likes', 'lets_rock'),
        'section' => 'header_socials',
        'settings' => 'twitter_likes',
        'type' => 'text',
    ));
    $wp_customize->add_control('googleplus_likes', array(
        'label' => __('Number of Google+ likes', 'lets_rock'),
        'section' => 'header_socials',
        'settings' => 'googleplus_likes',
        'type' => 'text',
    ));
    $wp_customize->add_control('header_button_name', array(
        'label' => __('Purchase button', 'lets_rock'),
        'section' => 'header_socials',
        'settings' => 'header_button_name',
        'type' => 'text',
    ));
    $wp_customize->add_control('header_button_url', array(
        'label' => __('Purchase button url', 'lets_rock'),
        'section' => 'header_socials',
        'settings' => 'header_button_url',
        'type' => 'text',
    ));

    /*founder section*/
    $wp_customize->add_section('founder_section', array(
        'title' => __('Founder section', 'lets_rock'),
        'priority' => 31,
    ));
    $wp_customize->add_setting('founder_heading', array(
        'default' => __('Enter h1', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('founder_desc', array(
        'default' => __('Enter description', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('founder_popup_button', array(
        'default' => __('Discover more', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('founder_popup_url', array(
        'default' => __('url', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('founder_image', array(
        'default' => __('', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('popup_heading', array(
        'default' => __('Enter h5', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('popup_desc', array(
        'default' => __('Enter description', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('close_popup', array(
        'default' => __('Close window', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('close_popup_url', array(
        'default' => __('url', 'lets_rock'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('founder_heading', array(
        'label' => __('Main heading of the section', 'lets_rock'),
        'section' => 'founder_section',
        'settings' => 'founder_heading',
        'type' => 'text',
    ));
    $wp_customize->add_control('founder_desc', array(
        'label' => __('Description of the section', 'lets_rock'),
        'section' => 'founder_section',
        'settings' => 'founder_desc',
        'type' => 'textarea',
    ));
    $wp_customize->add_control('founder_popup_button', array(
        'label' => __('Popup button', 'lets_rock'),
        'section' => 'founder_section',
        'settings' => 'founder_popup_button',
        'type' => 'text',
    ));
    $wp_customize->add_control('founder_popup_url', array(
        'label' => __('Popup button url', 'lets_rock'),
        'section' => 'founder_section',
        'settings' => 'founder_popup_url',
        'type' => 'text',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'founder_image',
            array(
                'label'      => __( 'Upload an image', 'lets_rock' ),
                'width' => 1170,
                'height' => 370,
                'section'    => 'founder_section',
                'settings'   => 'founder_image',
            )
        )
    );
    $wp_customize->add_control('popup_heading', array(
        'label' => __('Main heading of the popup', 'lets_rock'),
        'section' => 'founder_section',
        'settings' => 'popup_heading',
        'type' => 'text',
    ));
    $wp_customize->add_control('popup_desc', array(
        'label' => __('Description of the popup', 'lets_rock'),
        'section' => 'founder_section',
        'settings' => 'popup_desc',
        'type' => 'textarea',
    ));
    $wp_customize->add_control('close_popup', array(
        'label' => __('Close popup button', 'lets_rock'),
        'section' => 'founder_section',
        'settings' => 'close_popup',
        'type' => 'text',
    ));
    $wp_customize->add_control('close_popup_url', array(
        'label' => __('Close popup button url', 'lets_rock'),
        'section' => 'founder_section',
        'settings' => 'close_popup_url',
        'type' => 'text',
    ));

    /*members section*/
    $wp_customize->add_section('members_section', array(
        'title' => __('Members section', 'lets_rock'),
        'priority' => 31,
    ));
    $wp_customize->add_setting('members_heading', array(
        'default' => __('Introducing', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('members_subheading', array(
        'default' => __(' our members', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('members_url', array(
        'default' => __('url', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('members_heading', array(
        'label' => __('Main heading of the members section', 'lets_rock'),
        'section' => 'members_section',
        'settings' => 'members_heading',
        'type' => 'text',
    ));
    $wp_customize->add_control('members_subheading', array(
        'label' => __('Main subheading of the members section', 'lets_rock'),
        'section' => 'members_section',
        'settings' => 'members_subheading',
        'type' => 'text',
    ));
    $wp_customize->add_control('members_url', array(
        'label' => __('Members url', 'lets_rock'),
        'section' => 'members_section',
        'settings' => 'members_url',
        'type' => 'text',
    ));

    /*concerts section*/
    $wp_customize->add_section('concerts_section', array(
        'title' => __('Concerts section', 'lets_rock'),
        'priority' => 31,
    ));
    $wp_customize->add_setting('concerts_heading', array(
        'default' => __('UPCOMING', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('concerts_subheading', array(
        'default' => __('Concert', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('concerts_url', array(
        'default' => __('url', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('concerts_heading', array(
        'label' => __('Main heading of the concerts section', 'lets_rock'),
        'section' => 'concerts_section',
        'settings' => 'concerts_heading',
        'type' => 'text',
    ));
    $wp_customize->add_control('concerts_subheading', array(
        'label' => __('Main subheading of the concerts section', 'lets_rock'),
        'section' => 'concerts_section',
        'settings' => 'concerts_subheading',
        'type' => 'text',
    ));
    $wp_customize->add_control('concerts_url', array(
        'label' => __('Concerts url', 'lets_rock'),
        'section' => 'concerts_section',
        'settings' => 'concerts_url',
        'type' => 'text',
    ));

    /*videos section*/
    $wp_customize->add_section('videos_section', array(
        'title' => __('Videos section', 'lets_rock'),
        'priority' => 31,
    ));
    $wp_customize->add_setting('videos_heading', array(
        'default' => __('LATEST', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('videos_subheading', array(
        'default' => __('Video', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('videos_url', array(
        'default' => __('url', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('videos_heading', array(
        'label' => __('Main heading of the videos section', 'lets_rock'),
        'section' => 'videos_section',
        'settings' => 'videos_heading',
        'type' => 'text',
    ));
    $wp_customize->add_control('videos_subheading', array(
        'label' => __('Main subheading of the videos section', 'lets_rock'),
        'section' => 'videos_section',
        'settings' => 'videos_subheading',
        'type' => 'text',
    ));
    $wp_customize->add_control('videos_url', array(
        'label' => __('Videos url', 'lets_rock'),
        'section' => 'videos_section',
        'settings' => 'videos_url',
        'type' => 'text',
    ));

}

add_action( 'customize_register', 'letsrock_customize_register');






