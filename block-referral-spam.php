<?php
/*
 * Plugin Name: Block Referral Spam
 * Plugin URI: https://wpdeveloper.net/free-plugin/block-referral-spam/
 * Description: This plugins blocks the most number of Referral Spams. Now no more notice from Google and no more weird report in Google Analytics.
 * Version: 1.2.1
 * Author: WP Developer
 * Author URI: https://wpdeveloper.net
 * License: GPLv2+
 * Text Domain: block-referral-spam
 * Min WP Version: 2.5.0
 * Max WP Version: 4.8
 */


define("BRS_PLUGIN_SLUG",'block-referral-spam');
define("BRS_PLUGIN_URL",plugins_url("",__FILE__ ));#without trailing slash (/)
define("BRS_PLUGIN_PATH",plugin_dir_path(__FILE__)); #with trailing slash (/)

function block_referral_spam()
{
include_once(BRS_PLUGIN_PATH.'blocker.php');
}#end block_referral_spam()


add_action('wp_head','block_referral_spam');


/* Display a notice that can be dismissed */

add_action('admin_notices', 'brs_admin_notice');

function BRS_admin_notice() {
if ( current_user_can( 'install_plugins' ) )
   {
     global $current_user ;
        $user_id = $current_user->ID;
        /* Check that the user hasn't already clicked to ignore the message */
     if ( ! get_user_meta($user_id, 'brs_ignore_notice121') ) {
        echo '<div class="updated"><p>';
        printf(__('<b>[Update]</b> Thanks for using. Please keep sending us feedback <a href="https://wpdeveloper.net/go/BRS-UO" target="_blank">here</a>. You could review us <a href="https://wpdeveloper.net/go/BRS-Review" target="_blank">here</a> if you feel this plugin helped you! <a href="%1$s">[Hide Notice]</a>'), '?brs_nag_ignore=0');
        echo "</p></div>";
     }
    }
}

add_action('admin_init', 'brs_nag_ignore');

function brs_nag_ignore() {
     global $current_user;
        $user_id = $current_user->ID;
        /* If user clicks to ignore the notice, add that to their user meta */
        if ( isset($_GET['brs_nag_ignore']) && '0' == $_GET['brs_nag_ignore'] ) {
             add_user_meta($user_id, 'brs_ignore_notice121', 'true', true);
     }
}
?>