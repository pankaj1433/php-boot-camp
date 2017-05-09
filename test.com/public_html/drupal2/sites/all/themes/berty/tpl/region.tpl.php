<?php
$out = '';

if($region == 'bot_header' || $region == 'bot_2_header'){
	$out .= '<div class="'.$classes.'">';
	$out .= $content;
	$out .= '</div>';
} else {
	$out .= $content;
}

print $out;
?>


