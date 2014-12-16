<?php
/*
Plugin Name: Add User Page Custom Text
Description: Add's custom text to Add User Page
Plugin URI: http://wp.nyu.edu
Author: Neel Shah <shah.neel@nyu.edu>
Author URI: http://neelshah.info
Network: true
Version: 0.1
*/

/*
Copyright NS Designers (http://nsdesigners.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License (Version 2 - GPLv2) as published by
the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
*/

if( !class_exists( 'Add_User_Page_Custom_Text_NSD' ) ) {
    class Add_User_Page_Custom_Text_NSD {

        /* Construct the plugin object  */
        public function __construct() {
            add_action( 'user_new_form', array( $this , 'custom_fields_below_add_new_user' ) );
        }
        public function custom_fields_below_add_new_user() {
            echo '<h3 style="font-weight:bold">Note:</h3>';
            echo '<ul style="font-weight:bold; font-size:14px; list-style:disc; margin-left:16px">';
                echo '<li>Enter netID@nyu.edu as the username.</li>';
                echo '<li>For adding more than 1 user at a time we recommend using our Bulk Import Users plugin. Instructions for adding bulk users can be found here - <a href="http://www.nyu.edu/servicelink/KB0012244" target="_blank">http://www.nyu.edu/servicelink/KB0012244</a></li>';
                echo '<li>If you receive a message indicating that the user already exists and you are unable to add them as an existing user, please try adding them via Bulk Import Users plugin.</li>';
            echo '</ul>';
        }        

    }
}

if( class_exists( 'Add_User_Page_Custom_Text_NSD' ) ) {
    // instantiate the plugin class
    $add_user_page_custom_text_nsd = new Add_User_Page_Custom_Text_NSD();
}

?>