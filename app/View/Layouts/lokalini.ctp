<?php
$lokaliniDescription = __d ( 'cake_dev', 'Lokalini: Für Jäger und Sammler!' );
$lokaliniVersion = __d ( 'cake_dev', 'CakePHP %s', Configure::version () )?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- <meta charset="utf-8"> -->
	<?php echo $this->Html->charset(); ?> <!-- from usermgmt -->
<title><?php echo $lokaliniDescription;?></title>
<link rel="shortcut icon" href="favicon.ico">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- <title>Cakephp 2.x User Management Premium Plugin with Twitter Bootstrap | Ektanjali Softwares</title> -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
<script>var urlForJs="<?php echo SITE_URL ?>";</script>
	<?php
	echo $this->Html->meta ( 'icon' );
	/*
	 * cakephp default layout -> later change by lokalini layout.
	 * Neccessary to avoid the message url-rewriting from home-page
	 */
	
	// CakePHP
	//echo $this->Html->css ( 'cake.generic' );
	
	// frexy (css)
	echo $this->Html->css ( 'http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' );
	echo $this->Html->css ( '/js/bxslider/jquery.bxslider.css' );
	echo $this->Html->css ( '/js/flexslider/flexslider.css' );
	echo $this->Html->css ( '/js/radial-progress/style.css' );
	echo $this->Html->css ( '/css/animate.css' );
	echo $this->Html->css ( '/css/bootstrap.min.css' );
	echo $this->Html->css ( '/js/bootstrap-progressbar/bootstrap-progressbar-3.2.0.min.css' );
	echo $this->Html->css ( '/js/jqueryui/jquery-ui.css' );
	echo $this->Html->css ( '/js/jqueryui/jquery-ui.structure.css' );
	echo $this->Html->css ( '/js/fancybox/jquery.fancybox.css' );
	echo $this->Html->css ( '/fonts/fonts.css' );
	echo $this->Html->css ( 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext' );
	echo $this->Html->css ( 'http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' );
	echo $this->Html->css ( '/css/main-blue.css' );
	echo $this->Html->css ( '/js/rs-plugin/css/settings.css' );
	echo $this->Html->css ( '/js/rs-plugin/css/settings-custom.css' );
	echo $this->Html->css ( '/js/rs-plugin/videojs/video-js.css' );
	// usermgmt (css)
	echo $this->Html->css ( 'bootstrap.css?q=' . QRDN );
	echo $this->Html->css ( '/usermgmt/css/umstyle.css?q=' . QRDN );
	echo $this->Html->css ( '/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css?q=' . QRDN );
	echo $this->Html->css ( '/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css?q=' . QRDN );
	echo $this->Html->css ( '/plugins/chosen/chosen.min.css?q=' . QRDN );
	
	// usermgmt (js)
	echo $this->Html->script ( 'jquery-1.11.3.min.js' );
	// echo $this->Html->script('bootstrap.js?q='.QRDN, ['once' => false]);
	echo $this->Html->script ( '/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js?q=' . QRDN );
	echo $this->Html->script ( '/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js?q=' . QRDN );
	echo $this->Html->script ( '/plugins/bootstrap-ajax-typeahead/js/bootstrap-typeahead.min.js?q=' . QRDN );
	echo $this->Html->script ( '/plugins/chosen/chosen.jquery.min.js?q=' . QRDN );
	echo $this->Html->script ( '/usermgmt/js/umscript.js?q=' . QRDN );
	echo $this->Html->script ( '/usermgmt/js/ajaxValidation.js?q=' . QRDN );
	echo $this->Html->script ( '/usermgmt/js/chosen/chosen.ajaxaddition.jquery.js?q=' . QRDN );
	
	// frexy (js)
	echo $this->Html->script ( '/js/breakpoints.js' );
	// echo $this->Html->script('/js/jquery/jquery-1.11.1.min.js');
	echo $this->Html->script ( '/js/scrollspy.js' );
	echo $this->Html->script ( '/js/bootstrap-progressbar/bootstrap-progressbar.js' );
	echo $this->Html->script ( '/js/bootstrap.min.js' );
	echo $this->Html->script ( '/js/masonry.pkgd.min.js' );
	echo $this->Html->script ( '/js/imagesloaded.pkgd.min.js' );
	echo $this->Html->script ( '/js/bxslider/jquery.bxslider.min.js' );
	echo $this->Html->script ( '/js/flexslider/jquery.flexslider.js' );
	echo $this->Html->script ( '/js/smooth-scroll/SmoothScroll.js' );
	echo $this->Html->script ( '/js/jquery.carouFredSel-6.2.1-packed.js' );
	echo $this->Html->script ( '/js/rs-plugin/js/jquery.themepunch.plugins.min.js' );
	echo $this->Html->script ( '/js/rs-plugin/js/jquery.themepunch.revolution.min.js' );
	echo $this->Html->script ( '/js/rs-plugin/videojs/video.js' );
	echo $this->Html->script ( '/js/jqueryui/jquery-ui.js' );
	echo $this->Html->script ( 'http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyCfVS1-Dv9bQNOIXsQhTSvj7jaDX7Oocvs' );
	echo $this->Html->script ( '/js/modules/sliders.js' );
	echo $this->Html->script ( '/js/modules/ui.js' );
	echo $this->Html->script ( '/js/modules/retina.js' );
	echo $this->Html->script ( '/js/modules/animate-numbers.js' );
	echo $this->Html->script ( '/js/modules/parallax-effect.js' );
	echo $this->Html->script ( '/js/modules/settings.js' );
	echo $this->Html->script ( '/js/modules/maps-google.js' );
	echo $this->Html->script ( '/js/modules/color-themes.js' );
	echo $this->Html->script ( '/js/audioplayer/js/jquery.jplayer.min.js' );
	echo $this->Html->script ( '/js/audioplayer/js/jplayer.playlist.min.js' );
	echo $this->Html->script ( '/js/audioplayer.js' );
	echo $this->Html->script ( '/js/radial-progress/jquery.easing.1.3.js' );
	echo $this->Html->script ( 'http://cdnjs.cloudflare.com/ajax/libs/d3/3.4.13/d3.min.js' );
	echo $this->Html->script ( '/js/radial-progress/radialProgress.js' );
	echo $this->Html->script ( '/js/progressbars.js' );
	echo $this->Html->script ( "https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}" );
	echo $this->Html->script ( '/js/google-chart.js' );
	echo $this->Html->script ( '/js/j.placeholder.js' );
	echo $this->Html->script ( '/js/fancybox/jquery.fancybox.pack.js' );
	echo $this->Html->script ( '/js/fancybox/jquery.mousewheel.pack.js' );
	echo $this->Html->script ( '/js/fancybox/jquery.fancybox.custom.js' );
	echo $this->Html->script ( '/js/user.js' );
	echo $this->Html->script ( '/js/timeline.js' );
	echo $this->Html->script ( '/js/fontawesome-markers.js' );
	echo $this->Html->script ( '/js/markerwithlabel.js' );
	echo $this->Html->script ( '/js/cookie.js' );
	echo $this->Html->script ( '/js/loader.js' );
	echo $this->Html->script ( '/js/scrollIt/scrollIt.min.js' );
	echo $this->Html->script ( '/js/modules/navigation-slide.js' );
	
	echo $this->fetch ( 'meta' );
	echo $this->fetch ( 'css' );
	echo $this->fetch ( 'script' );
	?>
</head>
<body>
	<div class="mask-l" style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left: 0; z-index: 9999999;"></div>
	<!-- header -->
	<?php echo $this->element('b_header');?>
	<div class="j-menu-container"></div>

	<?php echo $this->element('b_inner_page_header');?>
	<div class="l-main-container">
			<?php if ($this->UserAuth->isLogged ()) {
					echo $this->element ( 'Usermgmt.dashboard' );
				}?>
			<?php echo $this->element('Usermgmt.message'); ?>
			<?php echo $this->element('Usermgmt.message_validation'); ?>
			<?php echo $this->fetch('content'); ?>
		<!-- b-slidercontainer -->
		<!-- b-bg-full-primary -->
		<!-- b-infoblock -->
		<!-- b-bg-block -->
		<!-- b-infoblock2 -->
		<!-- b-about-container -->
		<!-- b-infoblock -->
		<!-- b-info-container -->

	</div>

	<!-- footer -->
	<?php //echo $this->element('b_footer_primary');?>
	<?php if(class_exists('JsHelper') && method_exists($this->Js, 'writeBuffer')) { echo $this->Js->writeBuffer(); } ?>

</body>
</html>