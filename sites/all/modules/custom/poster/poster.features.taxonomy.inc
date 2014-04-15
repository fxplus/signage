<?php
/**
 * @file
 * poster.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function poster_taxonomy_default_vocabularies() {
  return array(
    'display_options' => array(
      'name' => 'Display options',
      'machine_name' => 'display_options',
      'description' => 'choose colours and layout for a poster',
      'hierarchy' => 0,
      'module' => 'taxonomy',
      'weight' => 0,
    ),
  );
}
