<?php
/******************************************************************************
Plugin Name: Categorize Pages
Description: Add categories to Pages, just as you would do with Posts
Version: 1.0.0
Author: Bjorn Wijers <burobjorn at burobjorn dot nl>
Author URI: https://burobjorn.nl/
License: GPLv2 or later
******************************************************************************/

/*  Copyright 2022
Categorize Pages is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

Categorize Pages is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */


/**
 * Add the 'category' taxonomy, which is the name of the existing taxonomy
 * used for categories to the Post type 'Page'. Normally in WordPress Pages cannot
 * be categorized, but this let's WordPress treat Pages just like Posts
 * and enables the category metabox so you can add categories to a Page.
 * NB: This uses the register_taxonomy_for_object_type() function which is only
 * in WordPress 3 and higher!
 */
if( ! function_exists( 'categorize_pages_register_taxonomy' ) ){
  function categorize_pages_register_taxonomy() {
    register_taxonomy_for_object_type( 'category', 'page' );
  }
  add_action( 'init', 'categorize_pages_register_taxonomy' );
}

/**
 * Display both Post and Page posttypes on the category archive page. 
 * This forces WordPress to show Pages together with Posts on Category archive pages.
 */
if( ! function_exists( 'categorize_pages_display_tagged_pages_archive') ){
  function categorize_pages_display_tagged_pages_archive( &$query ) {
    if ( ! is_admin() && $query->is_archive && $query->is_category ) {
      $q = &$query->query_vars;
      $q['post_type'] = array( 'post', 'page' );
    }
  }
  add_action('pre_get_posts', 'categorize_pages_display_tagged_pages_archive');
}
?>
