<?php

// $Id$
/**
 * @file
 * template.php!
 */
/**
 * Override or insert variables into the html template.
 */

function tvema_html_head_alter(&$head_elements) {
  unset($head_elements['system_meta_generator']);
}

function tvema_preprocess_page(&$variables, $hook) {
   //some other stuff
	if (isset($variables['node'])) {  
    $variables['theme_hook_suggestions'][] = 'page__node_type_'. $variables['node']->type;
	}
   //taxonomy
    if (arg(0) == 'taxonomy' && arg(1) == 'term' && is_numeric(arg(2))) {
    $tid = arg(2);
    $vid = db_query("SELECT vid FROM {taxonomy_term_data} WHERE tid = :tid", array(':tid' => $tid))->fetchField();
	$variables['theme_hook_suggestions'][] = 'page__vocabulary__'.$vid;
	}
}

function tvema_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#attributes']['placeholder'] = t('Поиск...');
  }
}