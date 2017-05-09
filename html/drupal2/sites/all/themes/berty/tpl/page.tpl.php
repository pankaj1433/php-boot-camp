<?php require_once(drupal_get_path('theme','berty').'/tpl/header.tpl.php'); 

global $base_url;

if(!empty($_REQUEST["sidebar"])){
	$sidebar = $_REQUEST["sidebar"];
} else {
	$sidebar = theme_get_setting('sidebar', 'berty'); 
}
if(empty($sidebar)) $sidebar = '0';

if(!empty($_REQUEST["fw"])){
	$fw = $_REQUEST["fw"];
} else {
	$fw = theme_get_setting('fw', 'berty'); 
}
if(empty($fw)) $fw = '0';
	
?>
<?php
	if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
		print render($tabs);
	endif;
	print $messages;
	unset($page['content']['system_main']['default_message']);
?>
<main>
	<div class="row">
		<?php if($fw == '0') { ?>
			<?php  if($sidebar == '0'){ ?>
				<div id="content" class="col-md-8 col-md-push-4">
						<?php  if($page['content']):?>
							<?php print render($page['content']) ?>
						<?php endif; ?>
				</div>
				<?php  if($page['right_sidebar']):?>
					<div id="sidebar" class="ls col-md-4 col-md-pull-8">
						<?php print render($page['right_sidebar']); ?>
					</div>
				<?php endif; ?>
			<?php } else { ?>
				<div id="content" class="col-md-8">
					<?php  if($page['content']):?>
						<?php print render($page['content']) ?>
					<?php endif; ?>
				</div>
				<?php  if($page['right_sidebar']):?>
					<div id="sidebar" class="rs col-md-4">
						<?php print render($page['right_sidebar']); ?>
					</div>
				<?php endif; ?>
			<?php } ?>
			
		<?php } else { ?>
			<?php  if($page['content']):?>
				<?php print render($page['content']) ?>
			<?php endif; ?>
		<?php } ?>
	</div>
</main>
<?php require_once(drupal_get_path('theme','berty').'/tpl/footer.tpl.php'); ?>

