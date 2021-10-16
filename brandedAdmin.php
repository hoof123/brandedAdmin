<?php
/*
* Plugin Name: branded admin
* Description: brands the default WordPress dashboard.
* Version: 3.0
* Author: Jake Price | JP Creative Media
* Author URI: https://jpcreative.ca/
* License: GPLv2
*/

// hooks
add_action( 'admin_enqueue_scripts', 'dashboardLogo' );
add_action( 'admin_enqueue_scripts', 'dashboardFooter' );

// logo
function dashboardLogo() {

	// stylesheets
	wp_register_style('dashboardLogo-CSS-style', plugin_dir_url( __FILE__ ) . 'brandedAdmin/css/dashboardLogo-style.css', 1.0, false);
	wp_enqueue_style('dashboardLogo-CSS-style');
}

// footer
new newDashboardFooter();

class newDashboardFooter {

   function dashboard_footer() {

      echo '<p id="text">powered by <a href="https://jpcreativemedia.ca/" target="_blank">JP Creative Media</a></p><img id="jpcreativemedia-logo" src="/wp-content/mu-plugins/brandedAdmin/assets/jpcreativemedia-logo.png">';
   }

   function __construct(){

      add_filter( 'admin_footer_text', array( $this, 'dashboard_footer' ) );
   }
}

function dashboardFooter() {

   // stylesheets
   wp_register_style('dashboardFooter-CSS-style', plugin_dir_url( __FILE__ ) . 'brandedAdmin/css/dashboardFooter-style.css', 1.0, false);
   wp_enqueue_style('dashboardFooter-CSS-style');
}
?>