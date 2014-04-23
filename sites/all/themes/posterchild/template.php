<?php
/*
  Preprocess
*/

/*
function posterchild_preprocess_html(&$vars) {
  //  kpr($vars['content']);
}
*/
/*
function posterchild_preprocess_page(&$vars,$hook) {
  //typekit
  //drupal_add_js('http://use.typekit.com/XXX.js', 'external');
  //drupal_add_js('try{Typekit.load();}catch(e){}', array('type' => 'inline'));

  //webfont
  //drupal_add_css('http://cloud.webtype.com/css/CXXXX.css','external');
  
  //googlefont 
  //  drupal_add_css('http://fonts.googleapis.com/css?family=Bree+Serif','external');
 
}
*/
/*
function posterchild_preprocess_region(&$vars,$hook) {
  //  kpr($vars['content']);
}
*/
/*
function posterchild_preprocess_block(&$vars, $hook) {
  //  kpr($vars['content']);

  //lets look for unique block in a region $region-$blockcreator-$delta
   $block =  
   $vars['elements']['#block']->region .'-'. 
   $vars['elements']['#block']->module .'-'. 
   $vars['elements']['#block']->delta;
   
  // print $block .' ';
   switch ($block) {
     case 'header-menu_block-2':
       $vars['classes_array'][] = '';
       break;
     case 'sidebar-system-navigation':
       $vars['classes_array'][] = '';
       break;
    default:
    
    break;

   }


  switch ($vars['elements']['#block']->region) {
    case 'header':
      $vars['classes_array'][] = '';
      break;
    case 'sidebar':
      $vars['classes_array'][] = '';
      $vars['classes_array'][] = '';
      break;
    default:

      break;
  }

}
*/

function posterchild_preprocess_node(&$vars,$hook) {
  
  // add classes to posters according to 'displaystyle' taxonomy term
  if (count($vars['field_displaystyle'])) {
    foreach ($vars['field_displaystyle']['und'] as $style) {
      $display_style = taxonomy_term_load($style['tid']);
      $style_name = 'poster-'.str_replace( ' ', '-', strtolower($display_style->name));
      $display_styles[] = $style_name;//'poster-'.$style['taxonomy_term']->field_css_class['und'][0]['value'];
      //dpm($style);
    }
    $vars['classes_array'] = array_merge($vars['classes_array'], $display_styles);
  }
  if (count($vars['field_illustration'])) {
    foreach ($vars['field_illustration']['und'] as $ill) {
      $illustration = taxonomy_term_load($ill['tid']);
      $ill_name = 'ill-'.str_replace( ' ', '-', strtolower($illustration->name));
      $illustrations[] = $ill_name;
    }
    $vars['classes_array'] = array_merge($vars['classes_array'], $illustrations);
  }
}

/*
function posterchild_preprocess_comment(&$vars,$hook) {
  //  kpr($vars['content']);
}
*/
/*
function posterchild_preprocess_field(&$vars,$hook) {
  //  kpr($vars['content']);
  //add class to a specific field
  switch ($vars['element']['#field_name']) {
    case 'field_ROCK':
      $vars['classes_array'][] = 'classname1';
    case 'field_ROLL':
      $vars['classes_array'][] = 'classname1';
      $vars['classes_array'][] = 'classname2';
      $vars['classes_array'][] = 'classname1';
    case 'field_FOO':
      $vars['classes_array'][] = 'classname1';
    case 'field_BAR':
      $vars['classes_array'][] = 'classname1';    
    default:
      break;
  }

}
*/
/*
function posterchild_preprocess_maintenance_page(){
  //  kpr($vars['content']);
}
*/
/*
function posterchild_form_alter(&$form, &$form_state, $form_id) {
  //if ($form_id == '') {
  //....
  //}
}
*/

