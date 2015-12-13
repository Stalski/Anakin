<?php

/**
 * @file
 * Generic preprocessors for the pages rendered with Anakin.
 */

// include helper functions.
include "template_helpers.php";

/**
 * Implements hook_library().
 */
function anakin_library() {
  $libraries = array();

  // Check if we need to include the minified files.
  $minifed = theme_get_setting('minified');
  if ($minifed) {
    $min_extension = '.min.js';
  }
  else {
    $min_extension = '.js';
  }

  /**
   * Modernizr tells you what HTML, CSS and JavaScript features the user’s
   * browser has to offer.
   *
   * @see http://modernizr.com/
   */
  $libraries['modernizr'] = array(
    'title' => 'Modernizr',
    'website' => 'http://modernizr.com/',
    'version' => 'v3.2.0',
    'js' => array(
      drupal_get_path('theme', 'anakin') . "/dist/js/vendor/modernizr$min_extension" => array(),
    ),
  );

  /**
   * Underscore is a JavaScript library that provides lots of useful functional
   * programming helpers without extending any built-in objects.
   * E.G. map, filter, invoke, ...
   *
   * @see http://underscorejs.org/
   */
  $libraries['underscore'] = array(
    'title' => 'Underscore',
    'website' => 'http://underscorejs.org/',
    'version' => '1.8.3',
    'js' => array(
      drupal_get_path('theme', 'anakin') . "/bower_components/underscore/underscore-min.js" => array(),
    ),
  );

  /**
   * A fast & lightweight polyfill for min/max-width CSS3 Media Queries
   * (for IE 6-8, and more)
   *
   * @see https://github.com/scottjehl/Respond
   */
  $libraries['respond'] = array(
    'title' => 'Respond',
    'website' => 'https://github.com/scottjehl/Respond',
    'version' => '1.4.2',
    'js' => array(
      drupal_get_path('theme', 'anakin') . "/bower_components/respond/respond$min_extension" => array(),
    ),
  );

  return $libraries;
}

/**
 * Implements hook_preprocess_html().
 * @param type $variables
 */
function anakin_preprocess_html(&$variables) {
  $variables['favicons'] = _anakin_render_favicons();
}
