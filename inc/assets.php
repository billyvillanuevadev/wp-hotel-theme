<?php
/**
 * Enqueue scripts and styles and Add custom image sizes.
 */

/**
 * Enqueue styles
 */
function xbv_styles() {
  // Fonts
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Open+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap', array(), null );
  wp_enqueue_style( 'font-awesome-5', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css', array(), null );

  // CSS
  wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), null );
  wp_enqueue_style( 'lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css', array(), null );
  wp_enqueue_style( 'slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', array(), null );
  wp_enqueue_style( 'slick-carousel-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', array(), null );
  wp_enqueue_style( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), null );

  // main css
  wp_enqueue_style( 'main', get_theme_file_uri('assets/styles/main.css'), array(), rand(10,1000) );  

  // style.css for theme info
	wp_enqueue_style( 'xbv-style', get_stylesheet_uri(), array(), null );
	wp_style_add_data( 'xbv-style', 'rtl', 'replace' );
}
add_action( 'wp_enqueue_scripts', 'xbv_styles' );

/**
 * Add integrity and crossorigin properties to cdn stylesheets
 */
function add_style_attributes( $html, $handle ) {
  $cdns = array(
    'font-awesome-5' => 'sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==',
    'bootstrap' => 'sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z',
    'lightbox' => 'sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==',
    'slick-carousel' => 'sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==',
    'slick-carousel-theme' => 'sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=='
  );

  if ( isset($cdns[$handle]) && !empty($cdns[$handle]) ) {
    return str_replace( "media='all'", "media='all' integrity='".$cdns[$handle]."' crossorigin='anonymous'", $html );
  }

  return $html;
}
add_filter( 'style_loader_tag', 'add_style_attributes', 10, 2 );

/**
 * Enqueue scripts
 */
function xbv_scripts() {
  // JS libraries
  wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), null );
  wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array(), null );
  wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array(), null );
  wp_enqueue_script( 'lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js', array(), null );
  wp_enqueue_script( 'slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), null );
  wp_enqueue_script( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null );

  // Main JS File
  wp_enqueue_script( 'main', get_theme_file_uri('assets/scripts/main.js'), array(), rand(10,1000) );  
}
add_action( 'wp_enqueue_scripts', 'xbv_scripts' );

/**
 * Add integrity and crossorigin properties to cdn scripts
 */
function add_script_attributes( $html, $handle ) {
  $cdns = array(
    'jquery' => 'sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==',
    'popper' => 'sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN',
    'bootstrap' => 'sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV',
    'lightbox' => 'sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==',
    'slick-carousel' => 'sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==',
  );

  if ( isset($cdns[$handle]) && !empty($cdns[$handle]) ) {
    return str_replace( "id", "integrity='".$cdns[$handle]."' crossorigin='anonymous' id", $html );
  }

  return $html;
}
add_filter( 'script_loader_tag', 'add_script_attributes', 10, 2 );

/**
 * Add Custom Image sizes
 */
add_image_size( 'thumbnail-common', 768, 432, true );
add_image_size( 'thumbnail-square', 450, 450, true );