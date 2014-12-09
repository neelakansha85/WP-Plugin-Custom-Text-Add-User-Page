<?php
/*
Plugin Name: Add User's Page Custom Text
Description: Add's custom text to Add User's Page
Plugin URI: http://wp.nyu.edu
Author: Neel Shah <shah.neel@nyu.edu>
Author URI: http://neelshah.info
License: GPL2
Version: 0.1
*/

if( !class_exists( 'Skip_Activation_Email_NSD' ) ) {
    class Skip_Activation_Email_NSD {

        /* Construct the plugin object  */
        public function __construct() {
            add_action( 'user_new_form', array( $this , 'custom_fields_below_add_new_user' ) );
        }
        public function custom_fields_below_add_new_user() {
            echo '<h3 style="font-weight:bold">Note:</h3>';
            echo '<ul style="font-weight:bold; font-size:14px; list-style:disc; margin-left:16px">';
                echo '<li>Usernames are always netID@nyu.edu.</li>';
                echo '<li>For adding more than 1 user at a time we recommend using our Bulk Import Users plugin. Instructions for adding bulk users can be found here - <a href="http://www.nyu.edu/servicelink/KB0012244" target="_blank">http://www.nyu.edu/servicelink/KB0012244</a></li>';
                echo '<li>If you receive a message indicating that the user already exists and you are unable to add them as an existing user, please try adding them via Bulk Import Users plugin.</li>';
            echo '</ul>';
        }        

    }
}

if( class_exists( 'Skip_Activation_Email_NSD' ) ) {
    // instantiate the plugin class
    $skip_activation_email_nsd = new Skip_Activation_Email_NSD();
}

?>