<html>
    <head>
    	<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="description" content="Hot Brass Media, photography, guns, military, weapons, blackwolf, gunsdaily, blackwolf_inc">
    	<meta name="author" content="Luke Brown, me@luke.sx">

    	<title>Hot Brass Media</title>

    	<link rel="stylesheet" 	type="text/css"  	href="assets/css/bootstrap.min.css">
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


    <?php
    	function navbar($denavbar){
    		global $activeTab;
    		$i = 0;
    		foreach($denavbar as $x => $x_value) {
    			if (!empty($x_value["active"])) { $class = $x_value["active"]; } else { $class = ""; }
    			if (!empty($x_value["url"])) { $url = $x_value["url"]; } else { $url = $x; }
    			if ($x == $activeTab) { $class = "current"; }
    			if (!empty($x_value["submenu"])) {
    				echo "<li class='dropdown animate" . $class . "'>";
    					echo "	<a href='#' class='dropdown-toggle animate' data-toggle='dropdown' role='button' aria-expanded='false'>" . $x . " 		<i class='fa fa-caret-down'></i>
    							</a>
    							<ul class='dropdown-menu' role='menu'><li>";
    							foreach ($x_value['submenu'] as $key => $value) {
    								echo "<a href='$value'>$key</a>";
    							}

    						//echo "<li><a href='#''>Action</a></li>";
    					echo "</li></ul>";
    				echo "</li>";

    			} else {
    				echo "<li class='" . $class . "'><a class='animate' href='$url'>";
    				echo $x;
    				echo "</a></li>";
    			}
    		$i++;
    		}
    	}

		$navbar = array(
            "About Us" => array( "active" => "", "url" => "about-us"	, "submenu" => array() ),
			"Our Photos" 	=> array( "active" => "", "url" => "our-photos" , "submenu" => array() ),
			"Our Services" 	=> array( "active" => "", "url" => "our-services" , "submenu" => array() ),
			"Our Clients" => array( "active" => "", "url" => "our-clients"	, "submenu" => array() )
		);

     ?>
