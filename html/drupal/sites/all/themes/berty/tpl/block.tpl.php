<?php 
global $base_url;

$out = '';
if($block->region == 'content'){
	$out .= '<div class="'.$block->css_class.' contextual-links-region">';
	$out .= render($title_suffix);
	$out .= '<div class="col-lg-12">';
	if ($block->subject):
		$out .= '<header>';
		if ($block->subject){
			$out .= '<h2 class="block-title">'.$block->subject.'<a href="#" title="View all posts in this Category" class="block-more cat-link" data-url="'.$base_url.'"><span>Read More</span><i class="fa fa-chevron-right"></i></a></h2>';
		}
		$out .= '</header>';
	endif;
	$out .= $content;
	$out .= '</div>';
	$out .= '</div>';
	
} elseif($block->region == 'right_sidebar'){
	$out .= '<div class="'.$block->css_class.' contextual-links-region">';
	$out .= render($title_suffix);
	if ($block->subject):
		if ($block->subject){
			$out .= '<h2 class="widgettitle"><span>'.$block->subject.'</span></h2>';
		}
	endif;
	$out .= $content;
	$out .= '</div>';

} elseif($block->region == 'footer_widget_1'){
	$out .= '<div class="'.$block->css_class.' contextual-links-region">';
	$out .= render($title_suffix);
	if ($block->subject):
		if ($block->subject){
			$out .= '<h2 class="widgettitle"><span>'.$block->subject.'</span></h2>';
		}
	endif;
	$out .= $content;
	$out .= '</div>';

} elseif($block->region == 'footer_widget_2'){
	$out .= '<div class="'.$block->css_class.' contextual-links-region">';
	$out .= render($title_suffix);
	if ($block->subject):
		if ($block->subject){
			$out .= '<h2 class="widgettitle"><span>'.$block->subject.'</span></h2>';
		}
	endif;
	$out .= $content;
	$out .= '</div>';
	
} elseif($block->region == 'footer_widget_3'){
	$out .= '<div class="'.$block->css_class.' contextual-links-region">';
	$out .= render($title_suffix);
	if ($block->subject):
		if ($block->subject){
			$out .= '<h2 class="widgettitle"><span>'.$block->subject.'</span></h2>';
		}
	endif;
	$out .= $content;
	$out .= '</div>';
	
} elseif($block->region == 'main_menu' || $block->region == 'bot_2_header' || $block->region == 'footer_menu'){
	$out .= $content;

} else {
	$out .= '<div class="'.$block->css_class.' contextual-links-region">';
	$out .= render($title_suffix);
	$out .= $content;
	$out .= '</div>';
}

print $out;

?>


