<?php
/**
 * @file
 * Default theme implementation to display a node.
 */
global $base_root, $base_url;
	//single blog
	if(isset($node->field_image)){
		$img_uri = @$node->field_image['und'][0]['uri'];
		$img_url = file_create_url($img_uri);
		
		$img_uri_1 = @$node->field_image['und'][1]['uri'];
	}
	
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

?>
<?php if($page) { ?>

<?php if($node->field_sticky['und'][0]['value'] == '1'){ ?>
<article class="post sticky" itemscope>	
<?php } else { ?>
<article class="post" itemscope>
<?php } ?>
	<header class="entry-header">
		<div class="entry-image">
			<?php if($node->field_quote){ ?>
				<div class="quote-post">
					<div class="quote-post-overlay">
						<i class="fa fa-quote-left"></i>
						<h1 class="entry-title" itemprop="name">
							<?php print $node->field_quote['und'][0]['value']; ?>
						</h1>
					</div>
					<a href="<?php print $img_url; ?>" class="popup">
						<img src="<?php print $img_url; ?>" alt="<?php print $title; ?>" width="750px" height="350px">
					</a>
				</div>
			<?php } elseif (!empty($img_uri_1) && $node->field_gallery_format['und'][0]['value'] == '0') { ?>
				<div class="post-grid-thumbnails">
					<?php
						foreach($node->field_image['und'] as $key => $value){
							$image_uri = $node->field_image['und'][$key]['uri'];
							$image_url = file_create_url($image_uri);
					 ?>
						<div class="item">
							<a class="popup" href="<?php print $image_url; ?>" title="<?php print $title." - ".$key; ?>"><img width="480px" height="393px" src="<?php print $image_url; ?>" alt="<?php print $title; ?>" /></a>
						</div>
					<?php } ?>
				</div>
				
			<?php } elseif (!empty($img_uri_1) && $node->field_gallery_format['und'][0]['value'] == '1') { ?>
				<div class="owl-slider-gallery-post">
					<?php
						foreach($node->field_image['und'] as $key => $value){
							$image_uri = $node->field_image['und'][$key]['uri'];
							$image_url = file_create_url($image_uri);
					 ?>
						<div class="item">
							<a class="popup" href="<?php print $image_url; ?>" title="<?php print $title." - ".$key; ?>"><img width="750px" height="460px" src="<?php print $image_url; ?>" alt="<?php print $title; ?>" /></a>
						</div>
					<?php } ?>
				</div>
				
			<?php } elseif ($node->field_audio_url) { ?>
				<a href="<?php print $img_url; ?>" class="popup">
					<img src="<?php print $img_url; ?>" alt="<?php print $title; ?>" width="750px" height="350px">
				</a>
				<iframe width="100%" height="166px" scrolling="no" frameborder="no" src="<?php print $node->field_audio_url['und'][0]['value']; ?>"></iframe>
				
			<?php } elseif ($node->field_video_url) { ?>
				<a href="<?php print $img_url; ?>" class="popup">
					<img src="<?php print $img_url; ?>" alt="<?php print $title; ?>" width="750px" height="350px">
				</a>
				<iframe style="width:100%; height:460px;" src="<?php print $node->field_video_url['und'][0]['value']; ?>" frameborder="0"></iframe>
			<?php } else { ?>
				<a href="<?php print $img_url; ?>" class="popup">
					<img src="<?php print $img_url; ?>" alt="<?php print $title; ?>" width="750px" height="350px">
				</a>
			<?php } ?>
		</div>
		<h1 class="entry-title" itemprop="name">
			<?php print $title; ?>
		</h1>
		<div class="entry-meta border-meta">
			<span class="entry-category">
				<i class="fa fa-list-ul"></i>
				<?php print strip_tags(render($content['field_blog_category']),'<a>');?>
			</span>
			<span class="entry-date updated">
				<a href="#">
					<i class="fa fa-clock-o"></i>
					<time datetime="2015-03-02 20:40:22" itemprop="datePublished">
						<?php print format_date($node->created, 'custom', 'M j,Y');?>
					</time>
				</a>
			</span>
			<span class="entry-like">
				<?php print strip_tags($node->rate_like['#markup'],'<a>');?>
			</span>
			<span class="entry-comments">
				<a href="?p=49#comments">
					<i class="fa fa-comments-o"></i>
					<?php print $comment_count; ?>
				</a>
			</span>
			<span class="vcard">
				<a class="url fn" href="<?php print $base_url.'/user/'.$uid; ?>">
					<i class="fa fa-user"></i>
					<span itemprop="author"><?php print $node->name; ?></span>
				</a>
			</span>
			<div class="single-rate">
				<?php print $node->rate_blog['#markup']; ?>
			</div>
		</div>
	</header>
	<div class="entry-content" itemprop="articleBody">
		<p><?php print render($content['body']); ?></p>
	</div>
	<footer class="entry-footer">
		<div class="tags">
			<span><?php print t('Tags: ');?></span>
			<?php print strip_tags(render($content['field_tags']),'<a>');?>
		</div>
		<nav class="next-prev clearfix">
			<div class="nav-previous">
				<div><?php print t('Previous Post');?></div>
				<?php print berty_prev_next($nid,'blog','p'); ?>
			</div>
			<div class="nav-next">
				<div><?php print t('Next Post');?></div>
				<?php print berty_prev_next($nid,'blog','n'); ?>
			</div>
		</nav>
	</footer>
</article>
<div class="author-info">
	
</div>
<div class="related-posts">
	<h3><?php print t('Related Posts');?></h3>
	<?php print getRelatedPosts('blog',$nid); ?>
</div>
<div id="comments">
	<?php print render($content['comments'])?>
</div>


<?php } else {  ?>

<?php  if($style == '0' || $style == '1'){ ?>
	<?php if($node->field_sticky['und'][0]['value'] == '1'){ ?>
		<article class="post sticky">	
	<?php } else { ?>
		<article class="post">
	<?php } ?>
<?php } elseif($style == '2' || $style == '3' || $style == '6') { ?>
	<?php if($node->field_sticky['und'][0]['value'] == '1'){ ?>
		<article class="col-sm-6 post sticky">
	<?php } else { ?>
		<article class="col-sm-6 post">
	<?php } ?>
<?php } elseif($style == '4' || $style == '7') { ?>
	<?php if($node->field_sticky['und'][0]['value'] == '1'){ ?>
		<article class="col-lg-4 col-sm-6  post sticky">
	<?php } else { ?>
		<article class="col-lg-4 col-sm-6  post">
	<?php } ?>
<?php } else { ?>
	<?php if($node->field_sticky['und'][0]['value'] == '1'){ ?>
		<article class="col-lg-3 col-md-4  post sticky">
	<?php } else { ?>
		<article class="col-lg-3 col-md-4  post">
	<?php } ?>
<?php } ?>
	<div class="entry-image">
		<?php if($simple == '1'): ?>
			<div class="entry-category">
				<?php print strip_tags(render($content['field_blog_category']),'<a>');?>
			</div>
		<?php endif; ?>
		<a href="<?php print $img_url; ?>" class="popup" >
			<?php  if($style == '0'){ ?>
				<img src="<?php print $img_url; ?>" alt="<?php print $title; ?>" width="750px" height="340px">
			<?php } elseif($style == '1') { ?>
				<img src="<?php print $img_url; ?>" alt="<?php print $title; ?>" width="420px" height="325px">
			<?php } else { ?>
				<img src="<?php print $img_url; ?>" alt="<?php print $title; ?>" width="500px" height="340px">
			<?php } ?>
			
			<div class="overlay">
				<?php if (!empty($node->field_image['und'][1]['uri']) && $node->field_gallery_format['und'][0]['value'] == '0'){ ?>
					<i class="fa fa-th"></i>
				<?php } elseif (!empty($node->field_image['und'][1]['uri']) && $node->field_gallery_format['und'][0]['value'] == '1'){ ?>
					<i class="fa fa-picture-o"></i>
				<?php } else { ?>
					<i class="fa fa-pencil"></i>
				<?php } ?>
				<?php if($node->field_video_url): ?>
					<i class="fa fa-play-circle"></i>
				<?php endif; ?>
				<?php if($node->field_audio_url): ?>
					<i class="fa fa-volume-up"></i>
				<?php endif; ?>
			</div>
		</a>
	</div>
	<div class="entry-main">
		<h2 class="entry-title">
			<a href="<?php print $node_url; ?>"><?php print $title; ?></a>
		</h2>
		<div class="entry-meta">
			<span class="entry-date updated">
				<a href="#"><i class="fa fa-clock-o"></i>
				<time datetime="2015-03-20 13:29:53"><?php print format_date($node->created, 'custom', 'M j,Y');?></time>
				</a>
			</span>
			<span class="entry-like">
				<?php print strip_tags($node->rate_like['#markup'],'<a>');?>
			</span>
			<span class="entry-comments">
				<a href="#">
					<i class="fa fa-comments-o"></i><?php print $comment_count; ?>
				</a>
			</span>
			<span class="vcard">
				<a class="url fn" href="<?php print $base_url.'/user/'.$uid; ?>">
					<i class="fa fa-user"></i>
					<span itemprop="author"><?php print $node->name; ?></span>
				</a>
			</span>
		</div>
		<div class="entry-content">
			<?php print render($content['body']); ?>
		</div>
		<?php if($extended == '1'): ?>
			<a class="btn readmore" href="<?php print $node_url; ?>"><?php print t('Read More');?></a>
		<?php endif; ?>
	</div>
	<div class="clear"></div>
</article>

<?php } ?>