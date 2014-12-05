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
            echo '<p>Test Field</p>';
            echo '<label for="noconfirmation"><input type="checkbox" name="noconfirmation" id="noconfirmation" value="1" /> Add the user without sending an email that requires their confirmation.</label>';
        }        

    }
}

if( class_exists( 'Skip_Activation_Email_NSD' ) ) {
    // instantiate the plugin class
    $skip_activation_email_nsd = new Skip_Activation_Email_NSD();
}

?>