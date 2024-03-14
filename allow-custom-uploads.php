<?php
/*
Plugin Name: Allow Custom Uploads
Description: This plugin allows SVG, WebP, and AVIF uploads by extending the list of allowed file types.
Version: 1.0
Author: Moisés Reis
License: GPL2
*/

/**
 * Allow SVG, WebP, and AVIF Uploads
 *
 * This function adds support for SVG, WebP, and AVIF uploads by extending the list of allowed file types.
 *
 * @param array $mimes Associative array of allowed file types.
 * @return array Updated array with SVG, WebP, and AVIF added to the list of allowed file types.
 */
function sdb_allow_custom_uploads($mimes)
{
    // Add SVG to the list of allowed file types
    $mimes['svg'] = 'image/svg+xml';

    // Add WebP to the list of allowed file types
    $mimes['webp'] = 'image/webp';

    // Add AVIF to the list of allowed file types
    $mimes['avif'] = 'image/avif';

    return $mimes;
}
add_filter('upload_mimes', 'sdb_allow_custom_uploads');
