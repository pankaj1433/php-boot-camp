<?php 
global $base_url;

if(!empty($_REQUEST["fmenu"])){
	$fmenu = $_REQUEST["fmenu"];
} else {
	$fmenu = theme_get_setting('fmenu', 'berty'); 
}
if(empty($fmenu)) $fmenu = '0';
?>
		</div>
	</div>
	<div id="footer-area" class="dark">
		<?php  if($page['footer_menu'] && $fmenu == '1' ):?>
		<div class="footer-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="footer-menu-container" class="menu-main-menu-container">
							<?php print render($page['footer_menu']); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<div id="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<?php  if($page['footer_widget_1']):?>
							<?php print render($page['footer_widget_1']); ?>
						<?php endif; ?>
					</div>
					<div class="col-md-4">
						<?php  if($page['footer_widget_2']):?>
							<?php print render($page['footer_widget_2']); ?>
						<?php endif; ?>
					</div>
					<div class="col-md-4">
						<?php  if($page['footer_widget_3']):?>
							<?php print render($page['footer_widget_3']); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<footer id="bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-6 footer">
						<?php $copy = theme_get_setting('footer_copyright_message','berty'); ?>
						<?php if(!empty($copy )) { ?>
							<?php print $copy; ?>
						<?php } ?>	 
					</div>
					<div class="col-md-6 text-center">
						<?php  if($page['footer_bot_right']):?>
							<?php print render($page['footer_bot_right']); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</footer>
	</div>
</div>