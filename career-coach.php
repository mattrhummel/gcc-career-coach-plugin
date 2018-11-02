<?php

/*
 * Plugin Name: GCC Career Coach (EMSI) Shortcodes
 * Version: 1.0.0
 * Description: Custom shortcodes to output EMSI Career Coach Plugin to Pathway Pages.
 * Author: Germanna Marketing
 * Author URI: http://www.germanna.edu/
 * Tested up to: 4.9.9
 * Text Domain: gcc-wp-2018
 *
 * @package WordPress
 * @author Germanna Marketing
 * @since 1.0.0
 */
//hooks
//ccwidget shortcodes
add_action( 'init', 'gcc_wp_2018_ccwidget_shortcodes');

//function that creates the shortcodes for the page
require_once "inc/shortcodes.php";

//pathway schortcode functions for outputs
require_once "pathways/business-pathways.php";
require_once "pathways/health-pathways.php";
require_once "pathways/humanities-pathways.php";
require_once "pathways/it-pathways.php";
require_once "pathways/public-service.php";
require_once "pathways/science-engineering.php";
require_once "pathways/social-science-education.php";
?>
