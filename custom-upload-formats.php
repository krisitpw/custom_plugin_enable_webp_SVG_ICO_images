<?php
/*
Plugin Name: Enable SVG, WebP & ICO Upload
Description: This plugin enables SVG, WebP, and ICO image upload support in WordPress.
Version: 1.0
Plugin URI: https://thegoodlifemoneycoach.com/
Author: Krishna Singh
Author URI:   https://github.com/krisitpw
*/

// Plugin code will go here

// Enable SVG, WebP, and ICO uploads
if(!defined('ABSPATH'))
 {
  header("Location: /lagetonwpsite");
  die('');
 }
function custom_upload_mimes($existing_mimes) {
    // Add SVG support
    $existing_mimes['svg'] = 'image/svg+xml';
    $existing_mimes['svgz'] = 'image/svg+xml';

    // Add WebP support
    $existing_mimes['webp'] = 'image/webp';

    // Add ICO support
    $existing_mimes['ico'] = 'image/x-icon';

    return $existing_mimes;
}
add_filter('upload_mimes', 'custom_upload_mimes');
