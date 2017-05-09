<?php require_once(drupal_get_path('theme','berty').'/tpl/header.tpl.php'); ?>

<?php 
	if(!empty($_REQUEST["style"])){
		$style = $_REQUEST["style"];
	} else {
		$style = theme_get_setting('style', 'berty'); 
	}
	if(empty($style)) $style = '0';
	
	if(!empty($_REQUEST["extended"])){
		$extended = $_REQUEST["extended"];
	} else {
		$extended = theme_get_setting('extended', 'berty'); 
	}
	if(empty($extended)) $extended = '0';
	
	if(!empty($_REQUEST["simple"])){
		$simple = $_REQUEST["simple"];
	} else {
		$simple = theme_get_setting('simple', 'berty'); 
	}
	if(empty($simple)) $simple = '0';
	
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
	<?php if ($breadcrumb): ?>
	<div class="breadcrumb">
		<?php print $breadcrumb; ?>
	</div>
	<h3 class="heading"><span><?php print drupal_get_title(); ?></span></h3>
	<?php endif; ?>
	<?php  if($style == '0' || $style == '1' || $style == '2'){ ?>
	
		<div class="row">
			<?php if($fw == '0') { ?>
				<?php  if($sidebar == '0'){ ?>
					<div id="content" class="col-md-8 col-md-push-4">
					<?php  if($style == '0'){ ?>
						<div class="posts blog-large">
					<?php  } elseif ($style == '1') { ?>
						<div class="posts blog-small">
					<?php  } else { ?>
						<div class="posts blog-grid">
					<?php } ?>
							<?php  if($page['content']):?>
								<?php print render($page['content']) ?>
							<?php endif; ?>
						</div>
					</div>
					<?php  if($page['right_sidebar']): ?>
						<div id="sidebar" class="ls col-md-4 col-md-pull-8">
							<?php print render($page['right_sidebar']); ?>
						</div>
					<?php endif; ?>
				<?php } else { ?>
					<div id="content" class="col-md-8">
					<?php  if($style == '0'){ ?>
						<div class="posts blog-large">
					<?php  } elseif ($style == '1') { ?>
						<div class="posts blog-small">
					<?php  } else { ?>
						<div class="posts blog-grid">
					<?php } ?>
							<?php  if($page['content']):?>
								<?php print render($page['content']) ?>
							<?php endif; ?>
						</div>
					</div>
					<?php  if($page['right_sidebar']): ?>
						<div id="sidebar" class="rs col-md-4">
							<?php print render($page['right_sidebar']); ?>
						</div>
					<?php endif; ?>
				<?php } ?>
			
			<?php } else { ?>
				<?php  if($style == '0'){ ?>
					<div class="posts blog-large">
				<?php  } elseif ($style == '1') { ?>
					<div class="posts blog-small">
				<?php  } else { ?>
					<div class="posts blog-grid">
				<?php } ?>
						<?php  if($page['content']):?>
							<?php print render($page['content']) ?>
						<?php endif; ?>
					</div>
			<?php } ?>
		</div>
		
	<?php } elseif($style == '3' || $style == '4' || $style == '5') { ?>
	
		<div class="row">
			<div class="posts blog-grid">
				<div class="row masonry-container">
					<?php  if($page['content']):?>
						<?php print render($page['content']) ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		
	<?php } else { ?>
	
		<div class="posts blog-masonry">
			<div class="row masonry-container masonry">
				<?php  if($page['content']):?>
					<?php print render($page['content']) ?>
				<?php endif; ?>
			</div>
		</div>
	<?php } ?>
</main>

<?php require_once(drupal_get_path('theme','berty').'/tpl/footer.tpl.php'); ?>