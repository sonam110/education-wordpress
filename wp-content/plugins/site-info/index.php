<?php
/*
Plugin Name: Site Information
 
Description:Site Information
Author: shailendra sharma
 
*/


add_action('admin_menu', 'mt_add_pages_site_info');
function mt_add_pages_site_info() {
    add_menu_page(__('Site Information','menu-test'), __('Site Information','menu-test'), 'manage_options', 'mt-top-level-handle-site-info', 'mt_toplevel_page_site_info' ,'dashicons-edit' );
 }
 
 
function mt_toplevel_page_site_info() {
include("list.php");
}

 