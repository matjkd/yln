<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<head>

		<?= $this -> load -> view('template/' . $this -> config_theme . '/header') ?>
	</head>

	<body>
		<input type="hidden" id="baseurl" value="<?= base_url() ?>"/>
		<?php $this -> datestring = "%l %j%S %M  %Y %G:%i:%s"; ?>

		<div id="menucontainer">
			<div  class="sixteen columns container">
				<div id="menutop" >

					<?= $this -> load -> view('global/' . $this -> config_theme . '/menu') ?>
				</div>
			</div>

		</div>

		<div id="logocontainer">
			<div id="header" class="sixteen columns container">
				<img id="mainLogo" src="<?=base_url() ?>css/<?=$this -> config_theme ?>/images/logo2.png"/>
			</div>
		</div>
		<div id="mainContainer" class="container">

			<?php if(isset($structure)) {
			?>
			<div itemscope itemtype="http://data-vocabulary.org/<?=$structure ?>" id="container" >
				<?php } else { ?>
				<div   class="mobilehide" >
					<?php } ?>
					<?= $this -> load -> view('slideshow/slideshow') ?>
				</div>

				<div id="container" >
					<?php
						$col1 = "eight";
						$col2 = "eight";
						if (isset($column1) && $column1 != NULL)
						{
							$col1 = $column1;
						}

						if (isset($column2) && $column2 != NULL)
						{
							$col2 = $column2;
						}
						if (!isset($sidebox) || $sidebox == NULL)
						{
							$col1 = 'twelve';
							$col2 = 'four';
						}
					?>

					<div class="<?=$col1 ?> columns">

						<?= $this -> load -> view('global/alert') ?>
						<?= $this -> load -> view($main_content) ?>
					</div>

					<div class="<?=$col2 ?> columns" >
er
						<?php if(isset($sidebox) && $sidebox != NULL) {
						?>
						<?=$this -> load -> view('sidebox/' . $sidebox) ?>
						<? } ?>
					</div>

				</div>

			</div>

			<div  id="section2">
				<div class="container">

					<div class="eight columns">
						<h2>YLN News</h2>
						<?=$this -> load -> view('extra/latestNews') ?>
					</div>

					<div class="four columns">
						<h2>Business News</h2>
						<?=$this -> load -> view('extra/newsFeed') ?>
					</div>

					<div class="four columns">
						<h2>Upcoming Events</h2>
						<?=$this -> load -> view('extra/eventsList') ?>
					</div>
				</div>
			</div>

			<div  id="bottomfooter">
				<div class="container">
					<?= $this -> load -> view('global/' . $this -> config_theme . '/footer_menu') ?>
				</div>
			</div>

			<div class="bottom_menu" >
				<div class="container">
					<div class="footermenu" >
						<?= $this -> load -> view('global/' . $this -> config_theme . '/bottomnav') ?>
					</div>
				</div>

			</div>
			<!--! end of #container -->
			<?= $this -> load -> view('global/footer') ?>
	</body>
</html>