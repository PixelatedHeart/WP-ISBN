<?php 
/*
Plugin Name: WP ISBN
Plugin URI: http://wordpress.org/extend/plugins/wp-isbn/
Description: Allows you use ISBN shortcode and maintain a personal library in your WordPress.
Author: bi0xid, pixelatedheart
Author URI: http://bi0xid.es/
Version: 0.1
Text Domain: wp-isbn
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

/***** First version - shortcode ******/

// [isbn 1234567890123]
function isbn_shortcode( $atts ) {
    if ( $atts ) {
      $isbn = $atts[0];

      // Looking for the ISBN - we use isbnsearch.org
      $url = 'http://www.isbnsearch.org/isbn/' . $isbn;
      $data = file_get_contents($url);
      
      // Get thumbanil
      preg_match("/<div[^>]*class=\"thumbnail\">(.*?)<\\/div>/si", $data, $match);
      $thumbnail = $match[1]; 
      
      // Get name of the book
      preg_match('#<h2>(.*?)</h2>#is', $data, $match);
      $title = $match[1];

      $return = '<div class="isbn-block"><a href="http://www.amazon.es/s/field-keywords=' . $isbn . '" target="_new"><div class="isbn-image">' . $thumbnail . '</div><div class="isbn-title">' . $title . '</div></a></div>';

    } else {
      // if there is no ISBN, we show a message
      $return = 'ISBN missing';

    }

    return $return;
}
add_shortcode( 'isbn', 'isbn_shortcode' );


function isbn_style() {
 $css = '
 div.isbn-block {
  text-align: center;
 }

 .isbn-image img {
  max-width: 200%;
  margin-left: 150%;
 }';

 return $css;

}

/**
 * Proper way to enqueue scripts and styles
 */
function isbn_scripts() {
  wp_enqueue_style( 'isbn_style', isbn_style() );
}

add_action( 'wp_enqueue_scripts', 'isbn_scripts' );
