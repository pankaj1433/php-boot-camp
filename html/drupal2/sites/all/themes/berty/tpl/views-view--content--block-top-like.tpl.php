<?php print render($title_prefix); ?>

<h3 class="title-wrapper"><span class="title"><?php print t('Liked Posts');?></span></h3>
<aside>
	<div>
	<?php if ($rows): ?>
		<?php print $rows; ?>
	<?php endif; ?>
	</div>
</aside>

