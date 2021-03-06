<?php

/**
* Theme library for custom functions
*
* This is the default theme library for customising Wordpress
* from within a theme. All functions required to bring more or
* custom functions to the Pistole theme, will go in here.
*
* @package    Wordpress
* @subpackage Bretterwelten
*/

// Theme setup
if (!function_exists('bw_setup')) {

  /**
  * Pistole theme setup
  *
  * Sets the default configuration and default actions when
  * the theme setup runs.
  *
  * @return void
  */
  function bw_setup()
  {

    // Remove unwanted stuff
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_resource_hints');
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('wp_head', 'wp_oembed_add_discovery_links');

    // Remove default cookie settings
    remove_action('set_comment_cookies', 'wp_set_comment_cookies');

    // Remove emoji stuff
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('emoji_svg_url', '__return_false');

    // remove extended embed stuff
    remove_action('rest_api_init', 'wp_oembed_register_route');
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');

    // Start custom menu usage
    register_nav_menu('primary', 'Hauptnavigation');
    register_nav_menu('standards', 'Standards');

    // Apply formats to theme
    if (function_exists('add_theme_support')) {
      add_theme_support('automatic-feed-links');
      add_theme_support('post-thumbnails');
      add_theme_support('html5', 'search-form', 'comment-form', 'comment-list', 'caption');
      add_theme_support('post-formats', array('gallery', 'quote', 'link', 'status'));
    }
    add_filter( 'pre_option_link_manager_enabled', '__return_true' );

  }

  // Apply setup to theme handler
  add_action('after_setup_theme', 'bw_setup');

} // end if !function_exists bw_setup

// Open Graph stuff
if (!function_exists('bw_open_graph')) {

  /**
  * Bretterwelten Open Graph
  *
  * A simple function to add open graph elements to the
  * head of each page.
  *
  * @return void
  */
  function bw_open_graph()
  {
    // As ugly as it is: Get actual post
    global $post;

    // Set default values
    $url = get_bloginfo('url');
    $title = esc_attr(get_bloginfo('name'));
    $description = 'Ein Blog &uuml;ber Brettspiele, Spielregeln, Spieleabende, die Brettspielbranche und alles, was dazugeh&ouml;rt';
    $type = 'website';
    $image = 'https://bretterwelten.de/wp-content/uploads/2016/10/29811861810_dedde9d745_o.jpg';

    if (is_singular()) {

      $url = get_permalink();
      $title = esc_attr(get_the_title());
      $description = esc_attr(get_the_excerpt());
      $type = 'article';

      // check for thumbnail
      if (has_post_thumbnail($post->ID)) {
        $kb_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
        $image = esc_attr($kb_thumbnail[0]);
      }

    }

    // Now generate output
    $output = <<<opengraph

  <!-- open graph data -->
  <meta name="twitter:card" value="summary">
  <meta property="og:type" content="{$type}">
  <meta property="og:url" content="{$url}">
  <meta property="og:title" content="{$title}">
  <meta property="og:image" content="{$image}">
  <meta property="og:description" content="{$description}">

opengraph;

    echo $output;

  }

  // Apply open graph to head
  add_action('wp_head', 'bw_open_graph');

} // end if !function_exists bw_open_graph

// Content page navigation
if (!function_exists('bw_content_nav')) {

  /**
   * Content navigation / pager
   *
   * Simple content page navigation left (older) and right (younger).
   *
   * @return void
   */
   function bw_content_nav()
   {
     global $wp_query;
     $next = get_next_posts_link('&#9668;');
     $previous = get_previous_posts_link('&#9658;');
     if ($wp_query->max_num_pages > 1) {
         $output = <<<html
<!-- PAGE NAVIGATION -->
<section class="navbar clearfix">
 <nav class="nav-page content">
     <div class="nav-previous">{$previous}</div>
     <div class="nav-next">{$next}</div>
 </nav>
</section>
html;
        echo $output;
      }
   }
}
