<!doctype html>

<html lang="en">

<head>

<meta charset="utf-8">

<title>Flur</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<meta name="description" content="" />

<meta name="author" content="" />

<!-- styles -->

<link rel="stylesheet" href="assets/css/fancybox/jquery.fancybox.css">

<link href="assets/css/bootstrap.css" rel="stylesheet" />

<link href="assets/css/bootstrap-theme.css" rel="stylesheet" />

<link rel="stylesheet" href="assets/css/slippry.css">

<link href="assets/css/style.css" rel="stylesheet" />

<link rel="stylesheet" href="assets/color/default.css">



<LINK REL="SHORTCUT ICON"

       HREF="images/favicon.ico">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->

<!--[if lt IE 9]>

      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

    <![endif]-->

<script src="assets/js/modernizr.custom.js"></script>

</head>

<body>

<header>

	<style>

body {

    background-image: url("assets/img/slide/4.jpg");

	background-repeat: no-repeat;

	 background-position: center;

	

}

.form-container{

border:0px solid #fff;

padding:50px 60px;

margin-top:20vh;

-webkit-box-shadow:-1px 4px 26px 11px rgba(0,0,0,0.75);

-moz-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);

box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);

}





#exampleInputName{

	border: 2px solid #ccc;

	border-radius: 8px;



}

#exampleInputPhoneNumber{

	border: 2px solid #ccc;

	border-radius: 8px;



}

#exampleInputEmail{

	border: 2px solid #ccc;

	border-radius: 8px;



}

#exampleInputDeliveryZipCode{

	border: 2px solid #ccc;

	border-radius: 8px;



}
#exampleInputInvitationCode{

	border: 2px solid #ccc;

	border-radius: 8px;



}




.container-signin{

	font-size:20px;

	font-weight: bold;

}







h1{

color:#fff;

text-align: center;

font-family: 'kalam';



}

.btn-btn-success-btn-block{

background-color: #008CBA;

width: 100%;



color: black; 

border: 2px solid #008CBA;

border-radius: 8px



}

.btn-btn-success-btn-block:hover {

    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

}





</style>



<div id="navigation" class="navbar navbar-inverse navbar-fixed-top default" role="navigation">

  <div class="container">



    <!-- Brand and toggle get grouped for better mobile display -->

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

      </button>

      <a class="navbar-brand" href="index.html"><img src="images/02-Logo Transparency.png" style="width:20%"></a>

    </div>





	<div class="navigation">

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><nav>

      <ul class="nav navbar-nav navbar-right">

        <li class="current"><a href="index.html">Home</a></li>

		<li><a href="login.html">Login</a></li>

		<!--<li><a href="register.php">Become a member</a></li> -->

		<!--<li><a href="#contact">Contact</a></li> -->

      </ul></nav>

    </div><!-- /.navbar-collapse -->

	</div>



  </div>

</div>



</header>

<!-- section intro -->

<div class="container-fluid">

	<div class= "rows">

		<div class ="col-md-4 col-sm-4 col-xs-12"></div>

		<div class ="col-md-4 col-sm-4 col-xs-12">

		

		<form class="form-container" action="sendemail.php" method="post" enctype="multipart/form-data">

		<h1> Join Flur  </h1>

		<div align="center" >

			<img src="images/02-Logo Transparency.png" style="width:25%" id="logo"  >

		</div>

		

			<div class="form-group">

				<label for= "exampleInputName"><br>Name</label>

				<input type = "Text" name= "name" class = "form-control" id = "exampleInputName" placeholder ="Name" required>

			</div>

			<div class="form-group">

				<label for= "exampleInputPhoneNumber">Phone Number</label>

				<input type = "number" name="PhoneNumber" class = "form-control" id = "exampleInputPhoneNumber" placeholder ="Phone Number" required>

			</div>

			<div class="form-group">

				<label for= "exampleInputEmail">Email</label>

				<input type = "email" name="email" class = "form-control" id = "exampleInputEmail" placeholder ="Email">

			</div>

			<div class="form-group">

				<label for= "exampleInputDeliveryZipCode">Zip Code</label>

				<input type = "number" name="zipcode" class = "form-control" id = "exampleInputDeliveryZipCode" placeholder ="Delivery Zip Code" required>

			</div>
			
			<div class="form-group">

				<label for= "exampleInputInvitationCode">Invitation Code</label>

				<input type = "number" name="invitationcode" class = "form-control" id = "exampleInputInvitationCode" placeholder ="Invitation code" required>

			</div>

			

			

		<button type ="submit" name="register"  class = "btn-btn-success-btn-block" class="pure-button pure-button-primary" onclick="myFunction()">Register</button><br>

		

		<div class="container-signin">

    <p><br>Already have an account? <a href="login.html">Sign in</a>.</p>

  </div>
	<?php
         if(isset($_GET['Message'])){
            echo $_GET['Message'];
         }
     ?>
		

		</form>

		
</div>

			<div class ="col-md-4 col-sm-4 col-xs-12">

				

			</div>

	

	</div>





</div>

<footer>

<div class="verybottom">

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<div class="aligncenter">

                <ul class="social-network social-circle">

                   <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                    
                    <li><a href="https://www.instagram.com/flurcannabis/" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>

                </ul>	

				</div>				

			</div>

		</div>

		<div class="row">

			<div class="col-md-12">

				<div class="aligncenter">

					<p>

						 

					</p>

                    <!-- 

                        All links in the footer should remain intact. 

                        Licenseing information is available at: http://bootstraptaste.com/license/

                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Groovin

                    -->

				</div>

			</div>

		</div>

	</div>

</div>

</footer>

<a href="#" class="scrollup"><i class="fa fa-angle-up fa-2x"></i></a>

<!-- javascript -->

<script src="assets/js/jquery-1.9.1.min.js"></script>

<script src="assets/js/jquery.easing.js"></script>

<script src="assets/js/classie.js"></script>

<script src="assets/js/bootstrap.js"></script>

<script src="assets/js/slippry.min.js"></script>

<script src="assets/js/nagging-menu.js"></script>

<script src="assets/js/jquery.nav.js"></script>

<script src="assets/js/jquery.scrollTo.js"></script>

<script src="assets/js/jquery.fancybox.pack.js"></script> 

<script src="assets/js/jquery.fancybox-media.js"></script> 

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>

<script src="assets/js/masonry.pkgd.min.js"></script>

<script src="assets/js/imagesloaded.js"></script>

<script src="assets/js/jquery.nicescroll.min.js"></script>

<script src="assets/js/validate.js"></script>	

<script src="assets/js/AnimOnScroll.js"></script>

    <script>

        new AnimOnScroll( document.getElementById( 'grid' ), {

            minDuration : 0.4,

            maxDuration : 0.7,

            viewportFactor : 0.2

        } );

    </script>

<script>

	$(document).ready(function(){

	  $('#slippry-slider').slippry(

		defaults = {

			transition: 'vertical',

			useCSS: true,

			speed: 5000,

			pause: 3000,

			initSingle: false,

			auto: true,

			preload: 'visible',

			pager: false,		

		} 

	  

	  )

	});

</script>

<script>

    function myFunction() {

        var exampleInputPassword = document.getElementById("exampleInputPassword")

  , exampleInputCPassword = document.getElementById("exampleInputCPassword");



function validatePassword(){

  if(exampleInputPassword.value != exampleInputCPassword.value) {

    exampleInputCPassword.setCustomValidity("Passwords Don't Match");

  } else {

    exampleInputCPassword.setCustomValidity('');

  }

}



exampleInputPassword.onchange = validatePassword;

exampleInputCPassword.onkeyup = validatePassword;

    }

</script>





</body>

</html>