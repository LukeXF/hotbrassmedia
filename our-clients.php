<?php
	include("assets/header.php");
	include("assets/navbar.php");
?>

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
				<p>
					For a number of years we have been trusted with managing social media, product photography and advertising for our  vast range of clients that we work with. Now there's no secret to why so many big name brands stick with out expertise time and time again. Isn't it time you joined the list? 
				</p>

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
				<li><a href="about-us">Projects</a></li>
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
