<?php
/*
Plugin Name: Student Registeration
 
Description:Student Registeration
Author: shailendra sharma
 
*/


add_action('admin_menu', 'mt_add_pages_index_slider');
function mt_add_pages_index_slider() {
    add_menu_page(__('Student Registration','menu-test'), __('Student Registration','menu-test'), 'manage_options', 'mt-top-level-handle-index-slider', 'mt_toplevel_page_index_slider' ,'dashicons-edit' );
 }
 
 
function mt_toplevel_page_index_slider() {
include("list.php");
}

 