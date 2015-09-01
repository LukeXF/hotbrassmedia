<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Blackwolf Inc, photography, guns, military, weapons, blackwolf, blackwolf inc., blackwolf_inc">
	<meta name="author" content="Luke Brown, me@luke.sx">
			
	<title>Blackwolf Inc, social advertising</title>

	<link rel="stylesheet" 	type="text/css"  	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel='stylesheet' 	type='text/css' 	href='http://fonts.googleapis.com/css?family=Raleway:100,400,700,300'>
	<link rel="stylesheet" 	type="text/css" 	href="assets/css/style.css">
	<link rel="icon" 		type="image/png" 	href="http://blackwolfinc.co/assets/img/logo.png">

  	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>



</head>


<body>

<div class="bg" data-ibg-bg="assets/img/bg.png">
	<div clas="row no-margin">

		<div class="col-md-4 col-md-offset-4 header-logo">
			<img src="assets/img/logo.png" class="img-responsive">
		</div>

	</div>
	<div class="row no-margin">
		<div class="col-md-12 no-padding">

			<nav class="navbar navbar-default" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li><a href="/">Home</a></li>
						<li><a href="about">About</a></li>
						<li><a href="photos">Photos</a></li>
						<li><a class="active" href="contact">Contact</a></li>							
					</ul>
				</div><!-- /.navbar-collapse -->
			</nav>

		</div>
	</div>
</div>

<div class="row no-margin">


	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<p class="bw-text">
					We are available for contact using the contact form below, or if you prefer to use reach us at <a href="mailto:blackwolf_inc@yahoo.com" target="_blank">blackwolf_inc@yahoo.com</a>. Please keep email strictly business related and we will aim to reply to your message within 48 hours. We look forward from hearing from you.
				</p>
			</div>
		</div>
	</div>	

	<div class="bw-contact">
		<div class="title">Contact Us</div>
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
	<div class="bw-footer">
		<div class="container">
			<div class="col-md-2 col-xs-offset-2 col-md-offset-0 col-xs-8">
				<img src="assets/img/logo.png" class="img-responsive">
			</div>
			<div class="col-md-2 col-md-offset-1 col-xs-6">
				<h5>Quick Links</h5>
				<ul>
					<li><a href="about">About</a></li>
					<li><a href="photos">Photos</a></li>
					<li><a href="contact">Contact</a></li>
				</ul>
			</div>
			<div class="col-md-2 col-xs-6">
				<h5>Connect</h5>
				<ul>
					<li><a href="https://instagram.com/blackwolf_inc" target="_blank">Instagram</a></li>
					<li><a href="https://www.facebook.com/pages/Blackwolf_inc/270175746503340?fref=ts" target="_blank">Facebook</a></li>
				</ul>
			</div>
			<div class="col-md-5 col-xs-12">
				<h5>Mission</h5>
				<p>Blackwolf_inc was created to provide bad ass content for military enthusiasts around the world. We're here to educate<span>.</span></p>
			</div>
		</div>
	</div>
	<div class="bw-footer-bottom">
		<div class="container">
			<div class="col-md-4">
				Developed by <a href="http://elementsoftworks.co.uk" target="_blank">Element Softworks</a>
			</div>
			<div class="col-md-4 col-md-offset-4" align="right">
			 	Blackwolf Inc. 2012 - 2015 &copy;
			</div>
		</div>
	</div>



	<div class="container no-padding">

	</div>
</div>

		<!-- jQuery -->
		<script src="assets/js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- Scrolling Nav JavaScript -->
		<script src="assets/js/jquery.easing.min.js"></script>
		<script src="assets/js/scrolling-nav.js"></script>


		<script type="text/javascript">
		jQuery(function($)  
		{
		    $("#contact_form").submit(function()
		    {
		        var email = $("#email").val(); // get email field value
		        var name = $("#name").val(); // get name field value
		        var msg = $("#msg").val(); // get message field value
		        $.ajax(
		        {
		            type: "POST",
		            url: "https://mandrillapp.com/api/1.0/messages/send.json",
		            data: {
		                'key': 'f3aumBm_dMe6Inv3vTWD7w',
		                'message': {
		                    'from_email': email,
		                    'from_name': name,
		                    'headers': {
		                        'Reply-To': email
		                    },
		                    'subject': 'Website Contact Form Submission',
		                    'text': msg,
		                    'to': [
		                    {
		                        'email': 'blackwolf_inc@yahoo.com',
		                        'name': 'Black Wolf Inc',
		                        'type': 'to'
		                    }]
		                }
		            }
		        })
		        .done(function(response) {
		            document.getElementById('submit').innerHTML = 'Message Sent!';
		            document.getElementById('submit').className += '';
		            document.getElementById('submit').className += ' btn-success';

		            $("#name").val(''); // reset field after successful submission
		            $("#email").val(''); // reset field after successful submission
		            $("#msg").val(''); // reset field after successful submission
		        })
		        .fail(function(response) {
		            document.getElementById('submit').innerHTML = 'Error :(';
		            document.getElementById('submit').className += '';
		            document.getElementById('submit').className += ' btn-danger';
		        });
		        return false; // prevent page refresh
		    });
		});

		</script>

		<script type="text/javascript">
		function fetchJSONFile(path, callback) {
		    var httpRequest = new XMLHttpRequest();
		    httpRequest.onreadystatechange = function() {
		        if (httpRequest.readyState === 4) {
		            if (httpRequest.status === 200) {
		                var data = JSON.parse(httpRequest.responseText);
		                if (callback) callback(data);
		            }
		        }
		    };
		    httpRequest.open('GET', path);
		    httpRequest.send(); 
		}

		// this requests the file and executes a callback with the parsed result once
		//   it is available
		fetchJSONFile('instagram.php', function(data){
		    // do something with your data
		    console.log(data);
		    $( ".bw-footer span" ).html(', and with ' + Number(data).toLocaleString('en')  + ' followers and growing, isn\'t it time you joined us?');
		});

		</script>

	</body>
</html>
