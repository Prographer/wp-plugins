<?php
/*
Plugin Name: IDS BAN
Plugin URI: http://www.raymedical.com
Description: IDS Bounce
Version: 1.1
Author: Prographer J
Author URI: https://github.com/Prographer
License: GPL2
*/
?>

<?php
function ids_ban_plugin() {
    if (is_front_page()) {
        wp_enqueue_style('ids-ban-styles', plugin_dir_url( __FILE__ ) . 'assets/ids_ban.css');
        wp_register_script('bouncejs', plugin_dir_url( __FILE__ ) . 'assets/bounce.min.js',array(),'1.0',true);
        wp_register_script('ids-ban-script', plugin_dir_url( __FILE__ ) . 'assets/ids_ban.js',array('bouncejs'),'1.1',true);
        wp_enqueue_script('ids-ban-script');
    }
}

add_action( 'wp_enqueue_scripts', 'ids_ban_plugin' );
?>
