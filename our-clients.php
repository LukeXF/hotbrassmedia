<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Hot Brass Media, photography, guns, military, weapons, blackwolf, gunsdaily, blackwolf_inc">
	<meta name="author" content="Luke Brown, me@luke.sx">

	<title>Hot Brass Media - Our Clients</title>

	<link rel="stylesheet" 	type="text/css"  	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel='stylesheet' 	type='text/css' 	href='http://fonts.googleapis.com/css?family=Raleway:100,400,700,300'>
	<link rel="stylesheet"  type='text/css'		href="assets/css/black-tie.min.css">
	<link rel="stylesheet" 	type="text/css" 	href="assets/css/style.css">
	<link rel="icon" 		type="image/png" 	href="assets/img/logo.png">

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="//use.typekit.net/eoe6bhb.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

</head>


<script>
var p = $( ".lol" );
$(function() {
    $('body').on("mousewheel", function() {
		// $( ".lol" ).text( "Hot Brass Media Gayness level: " + $(document).scrollTop() + "%" );
		if ( $(document).scrollTop() < 30) {
			$lol =  "1)" + $(document).scrollTop();
		} else if ( $(document).scrollTop() < 235 ) {
			$lol = $(document).scrollTop() / 3
		} else {
			$lol = 8;
		}
		$( ".navbar" ).css( "background", "rgba(34, 34, 34, 0." + $lol  + ")");
    });
});
</script>

<body>
	<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://dev.nuuke.com:60">Hot Brass Media</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse nav-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="our-photos">Our Photos</a></li>
					<li><a href="our-services">Our Services</a></li>
					<li><a href="our-projects">Our Projects</a></li>
					<li><a class="current" href="our-clients">Our Clients</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

	<div class="bg bg-5 hbm-bg-small">

		<div class="container">
			<h1>The Clients</h1>
		</div>

	</div>



	<div class="hbm-photos-intro">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">

					<b class="hbm-uppercase"></b>
					<h1>Why people work with us</h1>
					<p>.<br>.<br>.<br>.</p>

				</div>
			</div>
		</div>
	</div>




	<div class="hbm-clients">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">


					<?php

	$clients = array(
		"http://warsport-us.com" => "warsport",
		"http://www.refactortactical.com/" => "refactor",
		"http://www.quartermasterknives.com/" => "qtrmstr",
		"http://Tacticalholsters.com/" => "gcode",
		"http://www.kriss-arms.com/" => "kriss",
		"http://www.violentlittle.com/" => "violent_little_machine_shop",
		"http://www.salientarms.com/" => "salientarms",
		"https://www.axtsweapons.com/" => "axts",
		"http://hk-usa.com/" => "heckler_koch",
		"http://gunmagwarehouse.com/" => "gunmag_warehouse",
		"http://www.cantubrunerdesigns.com/" => "cantu_bruner",
		"https://strongsideholsters.com/" => "strong_side_holsters",
		"http://www.sipdark.com/" => "sip_dark",
		"http://www.greyfoxinc.com/" => "greyfox",
		"http://1776united.com/" => "1776_untied",
		"http://www.tacpack.com/" => "tac_pack",
		"http://www.bearontapparel.com/" => "bearont",
		"https://www.rsrsteeltargets.com/" => "rsr",
		"http://www.bitethebullet.co/" => "bite_the_bullet",
		"http://www.section1776.com/" => "section_1776",
		"http://www.stripgunclub.com" => "strip-gun-club",
		"http://technaclip.com/" => "techna_clip",
		"http://shop.customgunrails.com" => "custom_gun_rails",
		"http://agilitegear.com/" => "agilite",
		"https://www.tegraarms.com/" => "tegra",
		"http://www.keybar.us/" => "key_bar",
		"http://www.fenixlight.com/" => "fenix",
		"http://www.valhalla-clothing.com/" => "valhalla_clothing",
		"http://www.grip-key.com/" => "grip_key",
		"http://www.tyrantcnc.com/" => "tyrant_designs",
		"http://www.griffinarmament.com/" => "griffin_armament",
		"https://shop.tacticalshit.com/" => "tactical_shit",
		"http://stevereichert.com/" => "sr",
		"http://www.fourguysguns.com/" => "four_guys_guns"
	);

						foreach($clients as $website => $image) {
							echo '
							<div class="col-md-2 col-xs-6"><a href="' . $website . '" target="_blank">
								<div class="client"><img src="/assets/img/logo/' . $image . '.png" class="img-responsive"></div>
							</a></div>
							';
						}

					?>

				</div>
			</div>
		</div>
	</div>















	<div class="hbm-footer">
		<div class="container">
			<div class="col-md-2 col-xs-offset-2 col-md-offset-0 col-xs-8">
				<img src="assets/img/logo.png" class="img-responsive">
			</div>
			<div class="col-md-2 col-md-offset-1 col-xs-6">
				<h5>Quick Links</h5>
				<ul>
					<li><a href="our-services">Services</a></li>
					<li><a href="our-projects">Projects</a></li>
					<li><a href="contact-us">Contact Us</a></li>
				</ul>
			</div>
			<div class="col-md-2 col-xs-6">
				<h5>Connect</h5>
				<ul>
					<li><a href="https://instagram.com/hotbrassmedia" target="_blank">Instagram</a></li>
					<li><a href="https://www.facebook.com/pages/Hot-Brass-Media-LLC/324099477774851?fref=ts" target="_blank">Facebook</a></li>
					<li><a href="https://twitter.com/hotbrassmedia" target="_blank">Twitter</a></li>
				</ul>
			</div>
			<div class="col-md-5 col-xs-12">
				<h5>Mission</h5>
				<p>We created the Hot Brass Media group to develop a stable portfolio that companies could rely on to boost their public image with their product and our marketing experience.</p>
			</div>
		</div>
	</div>

	<div class="hbm-footer-bottom">
		<div class="container">
			<div class="col-md-4">
				Developed by <a href="http://elementsoftworks.co.uk" target="_blank">Element Softworks</a>
			</div>
			<div class="col-md-4 col-md-offset-4" align="right">
				Hot Brass Media LLC. 2014 - 2015 &copy;
			</div>
		</div>
	</div>



    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    </body>
</html>
