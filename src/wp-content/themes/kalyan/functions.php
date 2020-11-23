<?php
/**
 * kalyan functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kalyan
 */

define('VK_API_VERSION', '5.67');
define('VK_API_ENDPOINT', 'https://api.vk.com/method/');
define('USER_ID', '157619654');
define('TOKEN', '1dfdb31cb808662bd3cb5dba81cb22b4fd80a66e0874ac0c9d5a6b508282df56e7ae73a200492de74ee84');

if (!function_exists('kalyan_setup')) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function kalyan_setup()
  {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on kalyan, use a find and replace
     * to change 'kalyan' to the name of your theme in all the template files.
     */
    load_theme_textdomain('kalyan', get_template_directory() . '/languages');

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

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(array(
        'menu-1' => esc_html__('Primary', 'kalyan'),
    ));

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

    // Set up the WordPress core custom background feature.
    add_theme_support('custom-background', apply_filters('kalyan_custom_background_args', array(
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
        'height' => 250,
        'width' => 250,
        'flex-width' => true,
        'flex-height' => true,
    ));
  }
endif;
add_action('after_setup_theme', 'kalyan_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kalyan_content_width()
{
  // This variable is intended to be overruled from themes.
  // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
  $GLOBALS['content_width'] = apply_filters('kalyan_content_width', 640);
}

add_action('after_setup_theme', 'kalyan_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kalyan_widgets_init()
{
  register_sidebar(array(
      'name' => esc_html__('Sidebar', 'kalyan'),
      'id' => 'sidebar-1',
      'description' => esc_html__('Add widgets here.', 'kalyan'),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget' => '</section>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>',
  ));
}

add_action('widgets_init', 'kalyan_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function kalyan_scripts()
{
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
  wp_enqueue_script( 'jquery' );

  wp_enqueue_style('kalyan-style', get_stylesheet_uri());


  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}

add_action('wp_enqueue_scripts', 'kalyan_scripts');


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


function wpcf7VkMailSent($mail)
{
  $output = wpcf7_mail_replace_tags($mail->mail['body']);
  vkApi_messagesSend($output);
}

function vkApi_messagesSend($message)
{
  global $wpdb;
  $ss = $wpdb->insert(
      'vk_message',
      array(
          'id' => null,
          'message' => $message,
          'date' => time(),
          'status' => 0
      ),
      array('%d', '%s', '%s', '%d')
  );
  return vkApi_call('messages.send', array(
      'user_id' => '61425764',
      'message' => $message,
  ));
}
//add_action('wpcf7_mail_sent', 'wpcf7VkMailSent');