<?php
/*
Plugin Name: KL Shortcodes in Custom HTML Widgets
Plugin URI: https://github.com/educate-sysadmin/kl-shortcodes-in-custom-html-widgets
Description: Allows shortcodes in custom html widgets
Version: 0.1
Author: b.cunningham@ucl.ac.uk
Author URI: https://educate.london
License: GPL2
*/
/* thanks http://www.wpbeginner.com/wp-tutorials/how-to-use-shortcodes-in-your-wordpress-sidebar-widgets/ */
add_filter( 'widget_text', 'do_shortcode' );