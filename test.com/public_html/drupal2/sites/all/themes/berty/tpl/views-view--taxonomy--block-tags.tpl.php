<?php print render($title_prefix); ?>

<h2 class="widgettitle"><span><?php print t('Tags Cloud');?></span></h2>
<div class="tag-cloud-widget">
	<?php if ($rows): ?>
	<?php print $rows; ?>
	<?php endif; ?>
</div>
