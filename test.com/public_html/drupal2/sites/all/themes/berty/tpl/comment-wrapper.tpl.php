<?php
	if ($content['#node']->comment and !($content['#node']->comment == 1 and $content['#node']->comment_count)) { ?>


<h2 id="comments-title"><?php print $content['#node']->comment_count.' '.t('Comments')?></h2>
<ul class="commentlist">
	<?php print render($content['comments']); ?>
</ul>
<div id="respond" class="comment-respond">
	<h3 id="reply-title" class="comment-reply-title"><?php print t('Leave a Reply ');?><small></small></h3>
	<?php print render($content['comment_form'])?>
</div>

<?php
	}
?>
