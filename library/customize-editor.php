<?php

  // Add Custom Stylesheet to configure backend editor stylesheets
  function editor_custom_stylesheet() {
    add_editor_style( 'sager-editor.css' );
  }
  add_action( 'admin_init', 'editor_custom_stylesheet' );

  function add_style_select_button($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
  }
  add_filter('mce_buttons_2', 'add_style_select_button');
// add custom styles to the WordPress editor

function my_mce_before_init_insert_formats( $init_array ) {

$style_formats = array(
  // These are the custom styles
  array(
  'title' => 'UpperCase Red Title',
  'block' => 'span',
  'classes' => 'red_uppercase_title',
  'exact' => true,
  'wrapper' => true,
  ),
  array(
  'title' => 'Standard Paragraph',
  'block' => 'span',
  'classes' => 'standard_paragraph',
  'exact' => true,
  'wrapper' => true,
  ),
  array(
  'title' => 'Red More Link',
  'inline' => 'span',
  'exact' => true,
  'classes' => 'red_excerpt_link',
  ),
  array(
  'title' => 'Uppercase Accent Text',
  'inline' => 'span',
  'exact' => true,
  'classes' => 'uppercase_accent_text',
  ),
);
// Insert the array, JSON ENCODED, into 'style_formats'
$init_array['style_formats'] = json_encode( $style_formats );

return $init_array;

}
// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );
