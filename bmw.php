<?php

    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BookMyCar | Home  </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
	<link rel="stylesheet" href="css/fa.css" />
	<link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script>
	
	    <?php 
	    
	        if(isset($_GET['login'])) {
	        
	            echo "alert('Login failed! ')";   
	        }
	        
	        if(isset($_GET['username'])) {
	        
	            // "alert('Login successfull')";
	        }
	        
	   ?>     
	
	
	
    function validateForm() {
	if( document.forms["myForm"]["un"].value == "" )
   {
     alert( "Please provide your name!" );
     document.forms["myForm"]["un"].focus() ;
     return false;
   }
   if( document.forms["myForm"]["ea"].value == "" )
   {
     alert( "Please provide your Email!" );
     document.forms["myForm"]["ea"].focus() ;
	 
     return false;
   }
   
      if( document.forms["myForm"]["pw"].value == "" )
   {
     alert( "Please provide your Password!" );
     document.forms["myForm"]["pw"].focus() ;
	 
     return false;
   }
   
      if( document.forms["myForm"]["cpw"].value == "" )
   {
     alert( "Please confirm your Password!" );
     document.forms["myForm"]["cpw"].focus() ;
	 
     return false;
   }
   <!-- password validation -->
	var a = document.forms["myForm"]["pw"].value;
	var b = document.forms["myForm"]["cpw"].value;	
	if(a!=b){
	alert("Password do not match!");
        return false;
		}
   
      if((document.forms["myForm"]["pn"].value == "" ) || (document.forms["myForm"]["pn"].value.length != 10 ))
   {
     alert( "Mobile number invalid!" );
     document.forms["myForm"]["pn"].focus() ;
	 
     return false;
   }
	
   if( document.forms["myForm"]["city"].value == "" )
   {
     alert( "Please provide your city!" );
	 document.forms["myForm"]["city"].focus() ;
     return false;
   }
	<!-- email validation -->
    var x = document.forms["myForm"]["ea"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
		}
}
</script>
</head>

<body style="background-color: black;">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				 <a href="index.php"><img src="img/c.jpg" height="70" width="200" margin-left=2px margin right=2px>            </a>
			<!-- <a class="navbar-brand" href="#">Start Bootstrap</a>--> 
			 
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav" >
                   <li>
                        <a href="aboutus.php">About</a>
                    </li>
                    
                    <li>
                        <a href="contactus.php">Contact</a>
                    </li>
					<li style="margin-left: 540px;">
                        <?php 
                            if(isset($_SESSION['username'])) {
                                
                                echo "<a>Hi, " . $_SESSION['username'] . "</a>";
                            }else {

                                echo '<a id="modal_trigger" href="#modal">Login | Register</a>';
                            }
                        ?>                        
                        
                    </li>
                    
                        <?php 
                            if(isset($_SESSION['username'])) {
                        ?>
                                <li>
                                    <a href="logout.php" >| Logout</a>
                                </li>     
                        <?php     }
                        ?>				    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead"><b> Category:</b></p>
                <div class="list-group">
                    <a href="sedan.php" class="list-group-item">Sedan</a>
                    <a href="coupe.php" class="list-group-item">Coupe</a>
                    <a href="sportscar.php" class="list-group-item">Sports Car</a>
					<a href="luxurycar.php" class="list-group-item">Luxury Car</a>
                </div>
            </div>

            <div class="col-md-9">

         <!--     <div class="row carousel-holder" style="box-shadow: 0px 0px 20px #fff;">     -->
			    <div class="row" >
                
                    <img src="img/Lamborghini Aventador.jpg" style="width: 100%" />
                    
                    <br/><br/>
                    <p class="well well-lg">
                    The BMW X1 is a luxury compact crossover automobile produced by the German manufacturer BMW since 2009 and marketed worldwide in rear-wheel-drive (sDrive) and all-wheel-drive (xDrive) configurations. Production followed the debut of a concept version at the 2008 Paris Motor Show.[5] with series manufacture beginning at the BMW Leipzig plant in October 2009 — followed by production in Chennai, India (from knock-down kits (CDK)), Shenyang, China, (by BMW-Brilliance Automotive Ltd) and Kaliningrad, Russia (CDK,with local partner Avtotor).[6]

                    The X1 shares a similar platform with the BMW X3, based on the platform of the BMW 3 Series (E91) Touring (wagon). The EPA classifies the vehicle under the Midsize Cars category.  
                                      
                    </p>
                    
                    <p>
                     <strong>Engine :</strong> 450cc
                    </p>
                    
                    <br/>
                    
                    <button id="book" class="btn btn-primary" style="background-color: #428bca;">Book</button>
                </div>

                
            </div>

        </div>

    </div>
	<!-- login div -->
<div id="modal" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			<span class="header_title">Login</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
		<section class="popupBody">
			<!-- Social Login -->
			<div class="social_login">
				<div class="">
					<a href="http://www.facebook.com" class="social_box fb">
						<span class="icon"><i class="fa fa-facebook"></i></span>
						<span class="icon_title">Connect with Facebook</span>
						
					</a>

					<a href="https://www.plus.google.com" class="social_box google">
						<span class="icon"><i class="fa fa-google-plus"></i></span>
						<span class="icon_title">Connect with Google</span>
					</a>
				</div>

				<div class="centeredText">
					<span>Or use your Email address</span>
				</div>

				<div class="action_btns">
					<div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
					<div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
				</div>
			</div>

			<!-- Username & Password Login form -->
			<div class="user_login">
				<form method="POST" action="login.php">
					<label>Email / Username</label>
					<input type="text" name="username" required/>
					<br />

					<label>Password</label>
					<input type="password" name="password" required/>
					<br />

				

					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
						<div class="one_half last"><input type="submit" class="btn btn_red" value="Login"></div>
					</div>
				</form>

				<!--<a href="#" class="forgot_password">Forgot password?</a>-->
			</div>

			<!-- Register Form -->
			<div class="user_register">
				<form method="POST" name="myForm" onsubmit="return validateForm();" action="register.php">
					<label>User Name</label>
					<input type="text" name="un" />
					<br />

					<label>Email Address</label>
					<input type="email" name="ea" />
					<br />

					<label>Password</label>
					<input type="password" name="pw"/>
					<br />
					
					<label>Confirm Password</label>
					<input type="password" name="cpw" />
					<br />
					
					<label>Mobile no.</label>
					<input type="text" name="pn" />
					<br />
					
					<label>City </label>
					<input type="text" name="city" />
					<br />
					
					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
						<div class="one_half last"><input type="submit" class="btn btn_red" value="Sign up"></div>
					</div>
				</form>
			</div>
		</section>
	</div>	
	<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 10, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

        
        $('#book').on('click', function() {
        
            <?php 
            
                if(isset($_SESSION['username'])) {
                
                    echo "alert('Your order has been sent ! We will contact you shortly')";
                }else {
                
                    echo "alert('You must be logged in to book a car')";
                
                }
                
            ?>
        });
	})
</script>

    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
