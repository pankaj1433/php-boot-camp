<?php print render($title_prefix); ?>
<h2 class="widgettitle">
	<?php print t('Short News');?>
		
	
	
	<!--<span><?php //print t('Short News');?>
		<div class="owl-shortnews-nav"></div>
	</span>-->
</h2>
<div class="owl-shortnews">
	<div class="item">
		<?php if ($rows): ?>
			<?php print $rows; ?>
		<?php endif; ?>
	</div>
	<div class="item">
		<?php if ($attachment_before): ?>
			<?php print $attachment_before; ?>
		<?php endif; ?>
	</div>
</div>

