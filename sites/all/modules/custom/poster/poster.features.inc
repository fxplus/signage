<?php
/**
 * @file
 * poster.features.inc
 */

/**
 * Implements hook_node_info().
 */
function poster_node_info() {
  $items = array(
    'poster' => array(
      'name' => t('Poster'),
      'base' => 'node_content',
      'description' => t('A poster can be displayed on a digital signage monitor'),
      'has_title' => '1',
      'title_label' => t('Heading'),
      'help' => '',
    ),
  );
  return $items;
}
