<?php 
/*
Plugin Name: Simple Admin Disabler
Plugin URI: https://enderkus.com.tr
Description: Admin harici giriş yapan kullanıcılar için admin bar gizleyici.
Version: 1.0
Author: Ender KUŞ
Author URI: https://enderkus.com.tr
License: GNU
*/


add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}

?>
