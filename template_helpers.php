<?php

/**
 * @file
 * Helper functions for the preprocessing & frontend functionality.
 */


/**
 * Implements hook_preprocess_html().
 */
function _anakin_render_favicons() {
  $favicons = '';

  $theme_path = drupal_get_path('theme', variable_get('theme_default', NULL));
  if (file_exists($theme_path . '/templates/misc/favicons.tpl.php')) {
    $favicons .= "<!-- Favicons -->";
    $favicon_url_prefix = url($theme_path, array("absolute" => true));

    ob_start();
    include_once($theme_path . '/templates/misc/favicons.tpl.php');
    $favicons = ob_get_clean();

    $new_favicons = str_replace('./', $favicon_url_prefix . '/', $favicons);
    $favicons .= $new_favicons;

    $favicons .= "<!-- /Favicons -->";
  }
  else {
   $favicons .= "<!-- Favicons file missing, run 'gulp favicons' to auto generate it -->";
  }

  return $favicons;
}
