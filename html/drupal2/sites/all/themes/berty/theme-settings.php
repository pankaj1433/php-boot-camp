<?php

function berty_form_system_theme_settings_alter(&$form, $form_state) {
	$theme_path = drupal_get_path('theme', 'berty');
  	$form['settings'] = array(
      '#type' =>'vertical_tabs',
      '#title' => t('Theme settings'),
      '#weight' => 2,
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
	  '#attached' => array(
					'css' => array(drupal_get_path('theme', 'berty') . '/css/drupalet_base/admin.css'),
					'js' => array(
						drupal_get_path('theme', 'berty') . '/js/drupalet_admin/admin.js',
					),
			),
  	);
	
	
	$form['settings']['general_setting'] = array(
      '#type' => 'fieldset',
      '#title' => t('General Settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );
  $form['settings']['general_setting']['general_setting_tracking_code'] = array(
      '#type' => 'textarea',
      '#title' => t('Tracking Code'),
      '#default_value' => theme_get_setting('general_setting_tracking_code', 'berty'),
  );
  
  
  
	$form['settings']['custom_css'] = array(
		  '#type' => 'fieldset',
		  '#title' => t('Custom CSS'),
		  '#collapsible' => TRUE,
		  '#collapsed' => FALSE,
	  );
	$form['settings']['custom_css']['custom_css'] = array(
		  '#type' => 'textarea',
		  '#title' => t('Custom CSS'),
		  '#default_value' => theme_get_setting('custom_css', 'berty'),
		  '#description'  => t('<strong>Example:</strong><br/>h1 { font-family: \'Metrophobic\', Arial, serif; font-weight: 400; }')
	  );
	
	
	
	
	$form['settings']['header'] = array(
      '#type' => 'fieldset',
      '#title' => t('Header Settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  	);
	$form['settings']['header']['breaking_news'] = array(
      '#type' => 'select',
      '#title' => t('Breaking News'),
	  '#options' => array('1' => t('On'), '0' => t('Off')),
	  '#default_value' => theme_get_setting('breaking_news', 'berty'),
  	);
	
	
	
	$form['settings']['set_body'] = array(
      '#type' => 'fieldset',
      '#title' => t('Body Settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  	);
	$form['settings']['set_body']['boxed'] = array(
      '#type' => 'select',
      '#title' => t('Boxed'),
	  '#options' => array('0' => t('Off'), '1' => t('On')),
	  '#default_value' => theme_get_setting('boxed', 'berty'),
  	);
	$form['settings']['set_body']['mini'] = array(
      '#type' => 'select',
      '#title' => t('Mini Sidebar'),
	  '#options' => array('1' => t('Right'), '0' => t('Left')),
	  '#default_value' => theme_get_setting('mini', 'berty'),
  	);
	$form['settings']['set_body']['fw'] = array(
      '#type' => 'select',
      '#title' => t('Fullwidth'),
	  '#options' => array('0' => t('Off'), '1' => t('On')),
	  '#default_value' => theme_get_setting('fw', 'berty'),
  	);
	
	
	
	
	$form['settings']['footer'] = array(
      '#type' => 'fieldset',
      '#title' => t('Footer settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  	);
	$form['settings']['footer']['footer_copyright_message'] = array(
      '#type' => 'textarea',
      '#title' => t('Copyright message'),
      '#default_value' => theme_get_setting('footer_copyright_message','berty'),
  	);
	$form['settings']['footer']['fmenu'] = array(
      '#type' => 'select',
      '#title' => t('Footer Menu'),
	  '#options' => array('1' => t('On'), '0' => t('Off')),
	  '#default_value' => theme_get_setting('fmenu', 'berty'),
  	);
	
	
	
	
	$form['settings']['blog_style'] = array(
      '#type' => 'fieldset',
      '#title' => t('Blog Style'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  	);
	$form['settings']['blog_style']['style'] = array(
      '#type' => 'select',
      '#title' => t('Blog Style'),
	  '#options' => array('0' => t('Blog Large'),
						  '1' => t('Blog Small'), 
						  '2' => t('Grid 2 Cols Sidebar'),
						  '3' => t('Grid 2 Cols'),
						  '4' => t('Grid 3 Cols'),
						  '5' => t('Grid 4 Cols'),
						  '6' => t('Masonry 2 Cols'),
						  '7' => t('Masonry 3 Cols'),
						  '8' => t('Masonry 4 Cols'),
						  ),
	  '#default_value' => theme_get_setting('style', 'berty'),
  	);
	$form['settings']['blog_style']['extended'] = array(
      '#type' => 'select',
      '#title' => t('Display Read More Button'),
	  '#options' => array('0' => t('Off'), '1' => t('On')),
	  '#default_value' => theme_get_setting('extended', 'berty'),
  	);
	$form['settings']['blog_style']['simple'] = array(
      '#type' => 'select',
      '#title' => t('Display Category Field'),
	  '#options' => array('1' => t('On'), '0' => t('Off')),
	  '#default_value' => theme_get_setting('simple', 'berty'),
  	);
	$form['settings']['blog_style']['sidebar'] = array(
      '#type' => 'select',
      '#title' => t('Left or Right Sidebar'),
	  '#options' => array('1' => t('Right'), '0' => t('Left')),
	  '#default_value' => theme_get_setting('sidebar', 'berty'),
  	);
	
	
	$form['settings']['skin'] = array(

        '#type' => 'fieldset',

        '#title' => t('Switcher Style'),

        '#collapsible' => TRUE,

        '#collapsed' => FALSE,

    );

  //Disable Switcher style;

  $form['settings']['skin']['active_disable_switch'] = array(

      '#title' => t('Switcher style'),

      '#type' => 'select',

      '#options' => array('on' => t('ON'), 'off' => t('OFF')),

      '#default_value' => theme_get_setting('active_disable_switch', 'berty'),

  );
  $form['settings']['skin']['built_in_skins'] = array(
      '#type' => 'radios',
    '#title' => t('Built-in Skins'),
    '#options' => array(
        'default.css' => t('Default'),
        'lightblue.css' => t('Lightblue'),
        'red.css' => t('Red'),
        'dodgerblue.css' => t('Dodgerblue'),
        'darkblue.css' => t('Darkblue'),
        'limegreen.css' => t('Limegreen'),
        'bluemarguerite.css' => t('Bluemarguerite'),
        'silvertree.css' => t('Silvertree'),
        'orange.css' => t('Orange'),
        'lightgreen.css' => t('Lightgreen'),
        'pink.css' => t('Pink'),
        'purple.css' => t('Purple'),
        'springgreen.css' => t('Springgreen'),
		'violet.css' => t('Violet'),
		'laurel.css' => t('Laurel'),
		'turquoise.css' => t('Turquoise'),
		'silverlime.css' => t('Silverlime'),
		'wetasphal.css' => t('Wetasphal'),
		'greensmoke.css' => t('Greensmoke'),
		'amethyst.css' => t('Amethyst'),
		'concrete.css' => t('Concrete'),
		'alizarin.css' => t('Alizarin'),
		'burntsienna.css' => t('Burntsienna'),
		'belizehole.css' => t('Belizehole'),
		'midnightblue.css' => t('Midnightblue'),
		'greensea.css' => t('Greensea'),
		'mediumpurple.css' => t('Mediumpurple'),
		'deepblush.css' => t('Deepblush'),

    ),


    '#default_value' => theme_get_setting('built_in_skins','berty')
  );
	
}