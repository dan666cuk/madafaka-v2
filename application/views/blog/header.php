<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Rezki Tanjung</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url().'assets/detail/css/style.css';?>" rel="stylesheet" type="text/css" media="all" />
<!--  jquery plguin -->
<script type="text/javascript" src="<?php echo base_url().'assets/detail/js/jquery.min.js';?>"></script>
<!-- start gallery -->
<script type="text/javascript" src="<?php echo base_url().'assets/detail/js/jquery.easing.min.js';?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/detail/js/jquery.mixitup.min.js';?>"></script>
<script type="text/javascript">
$(function () {
	var filterList = {
		init: function () {
			$('#portfoliolist').mixitup({
				targetSelector: '.portfolio',
				filterSelector: '.filter',
				effects: ['fade'],
				easing: 'snap',
				onMixEnd: filterList.hoverEffect()
			});
		},
		hoverEffect: function () {
			$('#portfoliolist .portfolio').hover(
				function () {
					$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
					$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
				},
				function () {
					$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
					$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
				}
			);
		}
	};
	filterList.init();
});
</script>
<!-- Add fancyBox main JS and CSS files -->
<link href="<?php echo base_url().'assets/detail/css/magnific-popup.css';?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url().'assets/detail/js/jquery.magnific-popup.js';?>" type="text/javascript"></script>
<script>
	$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
	});
});
</script>
</head>

<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<h1><a href="<?php echo base_url();?>"><img src="<?php echo base_url().'assets/detail/images/logo.png';?>"/></a></h1>
		</div>
		<div class="h_right">
			<ul class="menu">
				<li><a href="<?php echo base_url();?>">Home</a></li>
				<li><a href="<?php echo base_url()."blog";?>">Blog</a></li>
				<li><a href="<?php echo base_url()."about";?>">About</a></li>
				<li><a href="<?php echo base_url()."contact";?>">Contact</a></li>
			</ul>
			<!-- start smart_nav * -->
	        <nav class="nav">
	            <ul class="nav-list">
	                <li class="nav-item"><a href="<?php echo base_url();?>">Home</a></li>
	                <li class="nav-item"><a href="<?php echo base_url()."blog";?>">Blog</a></li>
	                <li class="nav-item"><a href="<?php echo base_url()."about";?>">About</a></li>
	                <li class="nav-item"><a href="<?php echo base_url()."contact";?>">Contact</a></li>
	                <div class="clear"></div>
	            </ul>
	        </nav>
	        <script type="text/javascript" src="<?php echo base_url().'assets/detail/js/responsive.menu.js';?>"></script>
			<!-- end smart_nav * -->
		</div>
		<div class="clear"></div>
	</div>
	<div class="header_btm">
		<div class="h_left">
			<h2>CERO_ai Development Blog.</h2>
			<h3>lets create AI for better future</h3>
		</div>
		<div class="soc_icons">
			<h2>find me online </h2>
			<ul>
				<li><a class="icon1" href="//fb.com/rizkisimen"></a></li>
				<li><a class="icon2" href="//twitter.com/rizkitanjung1"></a></li>
				<li><a class="icon3" href=""></a></li>
				<li><a class="icon4" href="#"></a></li>
				<li><a class="icon5" href="#"></a></li>
				<div class="clear"></div>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
