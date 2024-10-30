<?php
/*
Plugin Name: Careers Job
Plugin URI: http://probytes.in/
Description: Careers Job is plugin for collecting the live job vacancies from particular institution and shows on careers page of site. Use the  shortcode <code>[careersjob_list]</code> to display the list of job. First admin must have to enter/configure the institution id in admin panel of careers job plugin. And from there admin can customise the color of job listing table as per theme design / color.
Version: 1.0
Author: Probytes Software
License: GPLv2 or later
*/

/*  Copyright @   Probytes Software  (email : info@probytes.in)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

global $wpdb;

/** Define constants */
define('CAREERSJOB_VERSION', '1.0');
define('CAREERSJOB__MINIMUM_WP_VERSION', '3.1' );
define('CAREERSJOB__PLUGIN_URL', plugin_dir_url( __FILE__ ));
define('CAREERSJOB__PLUGIN_DIR', plugin_dir_path( __FILE__ ));
define('CAREERSJOB_DB', $wpdb->base_prefix . 'CAREERSJOB');
define('CAREERSJOB_PATH', WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)));

function include_jsfiles(){
    if(is_admin()){

        //wp_register_script( 'call_js_file', get_bloginfo('template_url'). '/assets/js/custom.js');

        wp_register_script( 'custom_js', CAREERSJOB_PATH.'assets/js/custom.js' );
        wp_enqueue_script('custom_js');

        wp_register_script( 'color_js', CAREERSJOB_PATH.'assets/jscolor/jscolor.js' );
        wp_enqueue_script('color_js');

    }   
}
add_action( 'admin_enqueue_scripts', 'include_jsfiles');


/*
add_action('init','ava_test_init');

function ava_test_init() {
    wp_enqueue_script( 'ava-test-js', plugins_url( '/assets/js/custom.js', __FILE__ ));
}
*/

/** Includes install script */
require_once 'careersjob_install.php';

/** Includes admin pages */
require_once 'careersjob_admin.php';

/** Includes shortcodes page */
require_once 'careersjob_shortcodes.php';


/** Hook for plugin installation */
register_activation_hook( __FILE__ , 'careersjob_activate' );
function careersjob_activate(){
	careersjob_install();
}