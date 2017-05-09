<!DOCTYPE html>
<html lang="<?php print $language->language; ?>">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php print $head_title; ?></title>
<?php print $styles; ?><?php print $head; ?>
<?php
	//Tracking code
	$tracking_code = theme_get_setting('general_setting_tracking_code', 'berty');
	print $tracking_code;
	//Custom css
	$custom_css = theme_get_setting('custom_css', 'berty');
	if(!empty($custom_css)):
?>
<style type="text/css" media="all">
<?php print $custom_css;?>
</style>
<?php
	endif;
?>
</head>

<?php 
if(!empty($_REQUEST["boxed"])){
	$boxed = $_REQUEST["boxed"];
} else {
	$boxed = theme_get_setting('boxed', 'berty'); 
}
if(empty($boxed)) $boxed = '0';if(!empty($_REQUEST["active_disable_switch"])){	$active_disable_switch = $_REQUEST["active_disable_switch"];} else {	$active_disable_switch = theme_get_setting('active_disable_switch', 'berty'); }if(empty($active_disable_switch)) $active_disable_switch = 'on';
?>

<?php if($boxed == '1'){ ?>
<body class="home page page-template page-template-page-builder page-template-page-builder-php custom-background boxed stretched <?php print $classes;?>"  <?php print $attributes;?> >
<?php } else { ?>
<body class="home page page-template page-template-page-builder page-template-page-builder-php custom-background stretched <?php print $classes;?>"  <?php print $attributes;?> >
<?php } ?>
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
	<?php print $page_top; ?><?php print $page; ?><?php print $page_bottom; ?>
<?php print $scripts; ?><?php if($active_disable_switch == 'on'):?>
<?php require_once(drupal_get_path('theme','berty').'/tpl/switcher.tpl.php'); ?><?php endif; ?>
</body>
</html>