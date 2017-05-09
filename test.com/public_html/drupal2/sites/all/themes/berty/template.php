<?php
global $base_url;

function berty_preprocess_html(&$variables) {	
	drupal_add_js('https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;libraries=places&amp;ver=4.2.2', array('type' => 'external', 'scope' => 'header'));
}


// Add css skin
$setting_skin = theme_get_setting('built_in_skins', 'berty');
if(!empty($setting_skin)){
	$skin_color = '/css/color-scheme/'.$setting_skin;
}else{
	$skin_color = '/css/color-scheme/default.css';
}
$css_skin = array(
	'#tag' => 'link', // The #tag is the html tag - <link />
	'#attributes' => array( // Set up an array of attributes inside the tag
	'href' => $base_url.'/'.path_to_theme().$skin_color,
	'rel' => 'stylesheet',
	'type' => 'text/css',
	'id' => 'skin',
	'data-baseurl'=>$base_url.'/'.path_to_theme()
	),
	'#weight' => 1,
);
drupal_add_html_head($css_skin,'skin');

// Remove superfish css files.
function berty_css_alter(&$css) {
	unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
	unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);
	//unset($css[drupal_get_path('module', 'system') . '/system.base.css']);
}


function berty_form_alter(&$form, &$form_state, $form_id) {
	if ($form_id == 'search_block_form') {
		$form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
		$form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield
		$form['search_block_form']['#attributes']['id'] = array("mod-search-searchword");
		//disabled submit button
		//unset($form['actions']['submit']);
		unset($form['search_block_form']['#title']);
		$form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
		$form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
		
	}
}

function hook_preprocess_page(&$variables) {	
	if (arg(0) == 'node' && is_numeric($nid)) {
    	if (isset($variables['page']['content']['system_main']['nodes'][$nid])) {
      		$variables['node_content'] =& $variables['page']['content']['system_main']['nodes'][$nid];
      		if (empty($variables['node_content']['field_show_page_title'])) {
        		$variables['node_content']['field_show_page_title'] = NULL;
      		}
    	}
  	}
	
  if (arg(0) == 'taxonomy' && arg(1) == 'term' )
  {
    $term = taxonomy_term_load(arg(2));
    $vocabulary = taxonomy_vocabulary_load($term->vid);
    $variables['theme_hook_suggestions'][] = 'page__taxonomy_vocabulary_' . $vocabulary->machine_name;
  }
}

function berty_preprocess_page(&$vars){

	if (isset($vars['node'])) {
		$vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
	}

	if (isset($vars['node'])) {
		$vars['theme_hook_suggestions'][] = 'page__node__'. $vars['node']->nid;
	}
	
	//404 page
	$status = drupal_get_http_header("status");
	if($status == "404 Not Found") {
		$vars['theme_hook_suggestions'][] = 'page__404';
	}


	if (isset($vars['node'])) :
		//print $vars['node']->type;
        if($vars['node']->type == 'page'):
            $node = node_load($vars['node']->nid);
            $output = field_view_field('node', $node, 'field_show_page_title', array('label' => 'hidden'));
            $vars['field_show_page_title'] = $output;
			//sidebar
			$output = field_view_field('node', $node, 'field_sidebar', array('label' => 'hidden'));
            $vars['field_sidebar'] = $output;
        endif;
    endif;
}



//custom main menu
function berty_menu_tree__main_menu(array $variables) {
		return '<ul class="sub-menu">' . $variables['tree'] . '</ul>';
}
//custom footer menu
function berty_menu_tree__menu_footer_menu(array $variables) {
		return '<ul class="sub-menu">' . $variables['tree'] . '</ul>';
}

//relate post
function getRelatedPosts($ntype,$nid){
	$nids = db_query("SELECT n.nid, title FROM {node} n WHERE n.status = 1 AND n.type = :type AND n.nid <> :nid ORDER BY RAND() LIMIT 0,4", array(':type' => $ntype, ':nid' => $nid))->fetchCol();
	$nodes = node_load_multiple($nids);
	$return_string = '';
	$return_string .= '<ul class="row block">' ;
	if (!empty($nodes)):
		foreach ($nodes as $node) :
			$return_string .= '<li class="col-xs-3 post"><div class="block-top">';
			$return_string .= '<a href="'.file_create_url($node->field_image['und'][0]['uri']).'" class="popup">';
			$return_string .= '<img src="'.file_create_url($node->field_image['und'][0]['uri']).'" alt="'.$node->title.'" width="220" height="170">';
			$return_string .= '<div class="overlay">';
			if (!empty($node->field_image['und'][1]['uri']) && $node->field_gallery_format['und'][0]['value'] == '0'){
				$return_string .= '<i class="fa fa-th"></i>';
			} elseif (!empty($node->field_image['und'][1]['uri']) && $node->field_gallery_format['und'][0]['value'] == '1'){
				$return_string .= '<i class="fa fa-picture-o"></i>';
			} else {
				$return_string .= '<i class="fa fa-pencil"></i>';
			}
			if($node->field_video_url):
				$return_string .= '<i class="fa fa-play-circle"></i>';
			endif;
			if($node->field_audio_url):
				$return_string .= '<i class="fa fa-volume-up"></i>';
			endif;		
			$return_string .= '</div></a></div>';
			$return_string .= '<div class="block-content"><h4 class="block-heading">';
			$return_string .= '<a href="'.url("node/" . $node->nid).'">'.$node->title.'</a>';
			$return_string .= '</h4></div></li>';
		endforeach;
	endif;
	$return_string .= '</ul>';
	return $return_string;
}

//next and prev
function berty_prev_next($nid = null, $ntype = null, $op = 'p') {
	if ($op == 'p') {
		$sql_op = '<';
		$order = 'DESC';
	} else{
		$sql_op = '>';
		$order = 'ASC';
	}
	$return_string = '' ;
	$nids = db_query("SELECT n.nid FROM {node} n 
				   WHERE n.nid $sql_op :nid 
				   AND n.status = 1
				   AND n.type = :type
				   ORDER BY n.nid $order
				   LIMIT 1",array(':nid' => $nid, ':type' => $ntype))->fetchCol();
	$nodes = node_load_multiple($nids);
	if (!empty($nodes)):
		foreach ($nodes as $node) :
			$return_string .= '<a href="'.url("node/" . $node->nid).'">'.$node->title.'</a>';
		endforeach;
	endif;
	return $return_string;
	
}


function berty_breadcrumb($variables) {
	$crumbs ='';
	$breadcrumb = $variables['breadcrumb'];
	if (!empty($breadcrumb)) {
		$crumbs .= '';
		foreach($breadcrumb as $value) {

			$crumbs .= $value.'<i class="fa fa-angle-right"></i>';
		}
		$crumbs .= '<span>'.drupal_get_title().'</span>';
		return $crumbs;
	}else{
		return NULL;
	}
}