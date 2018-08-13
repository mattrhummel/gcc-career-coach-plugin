<?php

/*
 * Plugin Name: GCC Career Coach (EMSI) Shortcodes
 * Version: 1.0.0
 * Description: Custom shortcodes to output EMSI Career Coach Plugin to Pathway Pages.
 * Author: Germanna Marketing
 * Author URI: http://www.germanna.edu/
 * Tested up to: 4.9.8
 * Text Domain: gcc-wp-2018
 *
 * @package WordPress
 * @author Germanna
 * @since 1.0.0
 */
//hooks
//ccwidget shortcodes
add_action( 'init', 'gcc_wp_2018_ccwidget_shortcodes');

//defer emsi plugin scripts to help with page load
//add async to js
function add_defer_cc_attribute($tag, $handle) {
   // add script handles to the array below
   $scripts_to_defer = array('ccwidget-script');

   foreach($scripts_to_defer as $defer_script) {
      if ($defer_script === $handle) {
         return str_replace(' src', ' defer src', $tag);
      }
   }
   return $tag;
}
add_filter('script_loader_tag', 'add_defer_cc_attribute', 10, 2);

//function that creates the shortcodes for the page
require_once "inc/shortcodes.php";

//pathway schortcode functions for outputs
require_once "pathways/business-pathways.php";
require_once "pathways/health-pathways.php";
require_once "pathways/humanities-pathways.php";
require_once "pathways/it-pathways.php";
?>
