<?php require_once(drupal_get_path('theme','berty').'/tpl/header.tpl.php'); 

global $base_url;


if(!empty($_REQUEST["mini"])){
	$mini = $_REQUEST["mini"];
} else {
	$mini = theme_get_setting('mini', 'berty'); 
}
if(empty($mini)) $mini = '0';

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

<?php  if($page['top_content']): ?>
	<?php print render($page['top_content']); ?>
<?php endif; ?>
	
<?php  if($page['top_2_content']): ?>
	<?php print render($page['top_2_content']); ?>
<?php endif; ?>
<main>
	<div class="row">
	<?php if($fw == '0') { ?>
		<div id="content" class="content-builder col-md-8">
			<?php  if($page['mini_sidebar']): ?>
				
				<?php  if($mini == '1'){ ?>
					<div class="col-md-4 small-sidebar  floatright ">
						<?php print render($page['mini_sidebar']); ?>
					</div>
				<?php } else { ?>
					<div class="col-md-4 small-sidebar  floatleft ">
						<?php print render($page['mini_sidebar']); ?>
					</div>
				<?php } ?>
				
			<?php endif; ?>
			<?php  if($page['content']): ?>
				<?php print render($page['content']); ?>
			<?php endif; ?>
		</div>
		<?php  if($page['right_sidebar']): ?>
			<div id="sidebar" class="rs col-md-4">
				<?php print render($page['right_sidebar']); ?>
			</div>
		<?php endif; ?>
	<?php } else { ?>
		<?php  if($page['mini_sidebar']): ?>
			<?php  if($mini == '1'){ ?>
				<div class="col-md-4 small-sidebar  floatright ">
					<?php print render($page['mini_sidebar']); ?>
				</div>
			<?php } else { ?>
				<div class="col-md-4 small-sidebar  floatleft ">
					<?php print render($page['mini_sidebar']); ?>
				</div>
			<?php } ?>
			
		<?php endif; ?>
		<?php  if($page['content']): ?>
			<?php print render($page['content']); ?>
		<?php endif; ?>
	<?php } ?>
	</div>
</main>
<?php require_once(drupal_get_path('theme','berty').'/tpl/footer.tpl.php'); ?>

