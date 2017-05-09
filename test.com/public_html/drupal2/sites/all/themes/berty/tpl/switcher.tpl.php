<?php
	$disable_switcher = theme_get_setting('berty_disable_switch', 'berty');
	if(empty($disable_switcher))
		$disable_switcher = 'on';
	if(!empty($disable_switcher) && $disable_switcher=='on'){
?>
<?php global $base_url;?>

<div id="style-selector">
	<div class="style-selector-wrapper"><span class="title"><?php print t('Choose Theme Options');?></span>
		<div>
			<br /><br />

			<span class="title-sub2"><?php print t('Predefined Color Skins');?></span>
			<ul class="styles" id="styles_switcher_color">
				<li><a href="#" title="Default" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/default.css'?>"><span class="pre-color-skin1"></span></a></li>
				<li><a href="#" title="Light blue" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/lightblue.css'?>"><span class="pre-color-skin2"></span></a></li>
				<li><a href="#" title="Red" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/red.css'?>"><span class="pre-color-skin3"></span></a></li>
				<li><a href="#" title="Dodger blue" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/dodgerblue.css'?>"><span class="pre-color-skin4"></span></a></li>
				<li><a href="#" title="Dark-blue" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/darkblue.css'?>"><span class="pre-color-skin5"></span></a></li>
				<li><a href="#" title="Lime-green" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/limegreen.css'?>"><span class="pre-color-skin6"></span></a></li>
				<li><a href="#" title="Blue-marguerite" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/bluemarguerite.css'?>"><span class="pre-color-skin7"></span></a></li>
				<li><a href="#" title="Silver-tree" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/silvertree.css'?>"><span class="pre-color-skin8"></span></a></li>
				<li><a href="#" title="Orange" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/orange.css'?>"><span class="pre-color-skin9"></span></a></li>
				<li><a href="#" title="Light-green" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/lightgreen.css'?>"><span class="pre-color-skin10"></span></a></li>
				<li><a href="#" title="Pink" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/pink.css'?>"><span class="pre-color-skin11"></span></a></li>
				<li><a href="#" title="Purple" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/purple.css'?>"><span class="pre-color-skin12"></span></a></li>
				<li><a href="#" title="Spring-green" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/springgreen.css'?>"><span class="pre-color-skin13"></span></a></li>
				<li><a href="#" title="Violet" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/violet.css'?>"><span class="pre-color-skin14"></span></a></li>
				<li><a href="#" title="Laurel" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/laurel.css'?>"><span class="pre-color-skin15"></span></a></li>
				<li><a href="#" title="Turquoise" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/turquoise.css'?>"><span class="pre-color-skin16"></span></a></li>
				<li><a href="#" title="Silver-lime" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/silverlime.css'?>"><span class="pre-color-skin17"></span></a></li>
				<li><a href="#" title="Wet-asphal" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/wetasphal.css'?>"><span class="pre-color-skin18"></span></a></li>
				<li><a href="#" title="Green-smoke" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/greensmoke.css'?>"><span class="pre-color-skin19"></span></a></li>
				<li><a href="#" title="Amethyst" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/amethyst.css'?>"><span class="pre-color-skin20"></span></a></li>
				<li><a href="#" title="Concrete" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/concrete.css'?>"><span class="pre-color-skin21"></span></a></li>
				<li><a href="#" title="Nephritis" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/nephritis.css'?>"><span class="pre-color-skin22"></span></a></li>
				<li><a href="#" title="Alizarin" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/alizarin.css'?>"><span class="pre-color-skin23"></span></a></li>
				<li><a href="#" title="Burnt-sienna" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/burntsienna.css'?>"><span class="pre-color-skin24"></span></a></li>
				<li><a href="#" title="Belize-hole" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/belizehole.css'?>"><span class="pre-color-skin25"></span></a></li>
				<li><a href="#" title="Midnight-blue" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/midnightblue.css'?>"><span class="pre-color-skin26"></span></a></li>
				<li><a href="#" title="Green-sea" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/greensea.css'?>"><span class="pre-color-skin27"></span></a></li>
				<li><a href="#" title="Medium-purple" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/mediumpurple.css'?>"><span class="pre-color-skin28"></span></a></li>
				<li><a href="#" title="Deep-blush" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/deepblush.css'?>"><span class="pre-color-skin29"></span></a></li>
			</ul>
			<!-- end Predefined Color Skins -->
			<a href="#" class="close icon-chevron-right"></a></div>
	</div>
</div>
<!-- end style switcher -->
<script>
(function($) {
	$(document).ready(function(){


		$('ul#styles_switcher_color li a').click(function(){
			var rel = ($(this).attr('rel'));
			$('link[id="skin"]').attr('href',rel);
			return false;
		});


	});

})(this.jQuery);
</script>
<?php
	}
?>
