<?php 
global $base_url;

if(!empty($_REQUEST["brkNews"])){
	$brkNews = $_REQUEST["brkNews"];
} else {
	$brkNews = theme_get_setting('breaking_news','berty'); 
}
if(empty($brkNews)) $brkNews = '0';

?>
<div id="wrapper">
	<?php  if($page['top_header']):?>
		<div class="header-banner-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php print render($page['top_header']); ?>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if($brkNews == '1' && $page['top_2_header_left']):?>
		<div class="header-line">
			<div class="container">
				<div class="row">
					<?php  if($page['top_2_header_right']) { ?>
						<div class="col-md-6 breaking-news">
							<div class="title"><?php print t('Breaking News')?></div>
							<div class="news-ticker-line">
								<div class="str1 str_wrap news-ticker">
									<?php print render($page['top_2_header_left']); ?>
								</div>
							</div>
						</div>
						<div class="col-md-6 text-center">
							<?php print render($page['top_2_header_right']); ?>
						</div>
					<?php } else { ?>
						<div class="col-md-12 breaking-news">
							<div class="title"><?php print t('Breaking News')?></div>
							<div class="news-ticker-line">
								<?php print render($page['top_2_header_left']); ?>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<header class="header-row">
		<div class="container">
			<div class="col-md-12 no-padding header-container">
				<div class="col-md-4 no-padding logo-wrapper">
					<?php if($logo):?>
						<h1 id="logo">
							<a href="<?php print $base_url ?>" rel="home">
								<img src="<?php print $logo; ?>" alt="logo"/>
							</a>
						</h1>
					<?php endif; ?>
				</div>
				<div class="col-md-8 floatright text-right header-link-menu">
					<?php  if($page['mid_header']):?>
						<?php print render($page['mid_header']); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</header>
	<div class="skin light">
		<div class="container">
			<?php  if($page['bot_header']):?>
				<?php print render($page['bot_header']); ?>
			<?php endif; ?>
			<nav id="mainnav">
				<a href="#search_box" id="header-main-search"><i class="fa fa-search"></i></a>
				<?php  if($page['main_menu']):?>
					<?php print render($page['main_menu']); ?>
				<?php endif; ?>
			</nav>
			<?php  if($page['bot_2_header']):?>
				<?php print render($page['bot_2_header']); ?>
			<?php endif; ?>
