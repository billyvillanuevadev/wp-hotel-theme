<?php
/** 
 * Add Custom Post types
 */

/** 
 * Rooms CPT
 */
function post_type_rooms() {
  $supports = array(
    'title', // post title
    'editor',
    'revisions', // post revisions
    'page-attributes',
  );
  $labels = array(
    'name' => _x('Rooms', 'plural'),
    'singular_name' => _x('Room', 'singular'),
    'menu_name' => _x('Rooms', 'admin menu'),
    'name_admin_bar' => _x('Rooms', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Rooms'),
    'new_item' => __('New Rooms'),
    'edit_item' => __('Edit Rooms'),
    'view_item' => __('View Rooms'),
    'all_items' => __('All Rooms'),
    'search_items' => __('Search Rooms'),
    'not_found' => __('No Rooms found.'),
  );
  $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'menu_icon' => 'dashicons-store',
    'public' => true,
    'publicly_queryable'  => false,
    'query_var' => true,
    'rewrite' => array('slug' => 'rooms'),
    'has_archive' => false,
    'hierarchical' => false,
  );
  register_post_type('rooms', $args);
}
add_action('init', 'post_type_rooms');