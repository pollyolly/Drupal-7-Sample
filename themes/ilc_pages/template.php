<?php
//For Cuztomizing Front,Login, Register
//https://www.drupal.org/docs/7/theming/overriding-themable-output/customizing-and-overriding-user-login-page-register-and
//For Password Reset Customization
//https://www.drupal.org/docs/7/theming/overriding-themable-output/how-to-add-a-destinationurl-to-the-request-new-password

function ilc_pages_theme() {
  $items = array();
	$items['user_login'] = array(
    	'render element' => 'form',
    	'path' => drupal_get_path('theme', 'ilc_pages') . '/templates',
    	'template' => 'user-login',
  	);
	$items['user_pass'] = array(
    	'render element' => 'form',
    	'path' => drupal_get_path('theme', 'ilc_pages') . '/templates',
    	'template' => 'user-pass',
    	//'preprocess functions' => array(
      	//	'pages_preprocess_user_pass'
    	//	),
  	);
  return $items;
}
function ilc_pages_preprocess_page(&$vars){
   $header = drupal_get_http_header('status');
   if($header == "404 Not Found"){
     $vars['theme_hook_suggestions'][] = 'page__404';
   }
  elseif($header == "403 Forbidden"){
     $vars['theme_hook_suggestions'][] = 'page__403';
  }
}
