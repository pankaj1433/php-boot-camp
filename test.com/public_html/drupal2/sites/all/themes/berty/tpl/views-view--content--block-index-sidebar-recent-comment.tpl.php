<?php print render($title_prefix); ?>


<ul id="recentcomments">
<?php if ($rows): ?>
	<?php print $rows; ?>
<?php endif; ?>
</ul>
