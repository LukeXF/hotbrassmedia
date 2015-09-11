<?php
	include("assets/header.php");
	include("assets/navbar.php");
?>


<div class="bg bg-5 hbm-bg-small">

	<div class="container">
		<h1>Get in touch</h1>
	</div>

</div>


<div class="hbm-contact" style="padding: 40px 0;">
	<div class="container">
		<form class="form-horizontal" id="contact_form">
				<fieldset>
						<div class="col-md-8 col-md-offset-2">
							<input id="name" name="name" type="text" placeholder="Enter your full name here" class=" input-md" required="">
							<input id="email" name="email" type="text" placeholder="Enter your email address here" class=" input-md" required="">
							<textarea class="" id="msg" placeholder="Enter your message here" name="msg" cols="6" rows="6"></textarea>
							<button id="submit" name="submit" class="btn btn-primary">Send Message</button>
						</div>
					</div>
				</fieldset>
			</form>

	</div>
</div>


<?php
	include("assets/footer.php");
?>
