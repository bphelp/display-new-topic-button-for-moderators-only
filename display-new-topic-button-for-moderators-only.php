<?php
/*
Plugin Name: Display New Topic Button For Moderators Only
Plugin URI: http://www.my-dev.com/
Description: Display new topic button for moderators or better user role capability
Version: 1.0
Author: Ben Jones
Author URI: http://www.my-dev.com/
License: GPL2
*/


function bphelp_hide_new_topic_button() {
	if ( ! current_user_can( 'edit_others_topics' ) ) {
?>
		<style type="text/css">
			a#new-topic-button {
				display: none !important;
        }
     
    </style>
<?php
	}
 }
add_action ('bp_head', 'bphelp_hide_new_topic_button');
?>