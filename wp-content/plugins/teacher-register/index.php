<?php
/*
Plugin Name: Teacher Registeration
 
Description:Teacher Registeration
Author: shailendra sharma
 
*/


add_action('admin_menu', 'mt_add_pages_teacher_register');
function mt_add_pages_teacher_register() {
    add_menu_page(__('Teacher Registeration','menu-test'), __('Teacher Registeration','menu-test'), 'manage_options', 'mt-top-level-handle-teacher-register', 'mt_toplevel_page_teacher_register' ,'dashicons-edit' );
 }
 
 
function mt_toplevel_page_teacher_register() {
include("teacher-list.php");
}

 