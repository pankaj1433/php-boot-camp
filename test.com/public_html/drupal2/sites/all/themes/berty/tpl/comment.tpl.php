<?php 
global $base_url;
?>

<li class="comment even thread-even depth-1">
	<article class="comment">
		<a class="comment-avatar" href="#">
			<?php
				if(render($content['picture'])){
				  print render($content['picture']);
				}  else {
				  print '<img src="'.$base_url.'/sites/all/themes/berty/images/bertymag-custom-gravatar.jpg'.'" alt="Default User Picture" class="avatar avatar-70wp-user-avatar wp-user-avatar-70 alignnone photo avatar-default" width="70" height="70" />';
				}
			 ?>
		 </a>
		 <div class="comment-content">
		 	<footer>
				<span class="fn">
					<?php print theme('username', array('account' => $content['comment_body']['#object'], 'attributes' => array('class' => 'url'))) ?>
				</span>
				<a href="?p=90#comment-5">
					<time pubdate datetime="2015-04-10T19:51:30+00:00">
						<?php print format_date($node->created, 'custom', 'M j, Y'); ?>
					</time>
				</a>
			</footer>
			<p>
				<?php print render($content['comment_body']);?>
			</p>
			<?php print render($content['links']);?>
		 </div>
	</article>
</li>