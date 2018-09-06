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

    <title>BookMyCar || Contact </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
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
	</script>
</head>
	
<body style="background-color:black">

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
				 <a href="index.php"><img src="img/c.jpg" height="60" width="200">            </a>
			<!-- <a class="navbar-brand" href="#">Start Bootstrap</a>--> 
			 
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav">
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
	
	
	<div class=box style="margin-left:100px;margin-right:100px" >
	
		<text align="justify">	<center><h2> BookMyCar - Contact us</h2></center>
			<br>
		
				<p><h4><b>Contact Us</b></h4>
				
				<p><b>Business with Us</b>
				<p>If you wish to approach BookMyCar for ansy business tie-up, please contact us through mail or phone.
				<br>
				<br>
				<p>For queries related to the following, you can also call us
				<p><b>New Car Dealers:</b> &nbsp + 91 8562001919 &nbsp &nbsp newcarleads@bookmycar.com
				<p><b>Used Car Dealers:</b> &nbsp + 91 9001466777 &nbsp &nbsp usedcars@bookmycar.com
				<p><b>Car Loans (in NCR):</b> &nbsp + 91 9001833444 &nbsp &nbspcarloans@bookmycar.com
				<p><b>Car Loans (rest of India):</b> &nbsp + 91 9001833444 &nbsp &nbsp carloans@bookmycar.com
				<p><b>Car Accessories:</b> &nbsp + 91 9001913333 &nbsp &nbsp customercare@bookmycar.com
				<p><b>Listing of Used Car:</b> &nbsp+ 91 8952991919 &nbsp &nbsp BookMyCar.premiumlisting@bookmycar.com
				<br>
				<br>
				<p>For doing business with BookMyCar
				<p><b>Tie-ups:</b> &nbsp + 91 9001466999 &nbsp &nbsp sales@bookmycar.com
				<p><b>Online Advertising:</b> &nbsp + 91 9001866999 &nbsp &nbsp business@bookmycar.com
				<p><b>Media sales-North:</b> &nbsp + 91 8963003535, +91 9999916244
				<p><b>Media sales-West & South:</b> &nbsp + 91 9820295866, +91 9833155866
				<br>
				<br>
				<p><b>Feedback</b>
				<p>Your feedback is valuable in improving our services further. Please let us know how we could make this service better and more valuable to you.
				<p><b>Mail us at:</b>contact@bookmycar.com Please mention your contact number to enable a prompt reply.
				<p><b>Jaipur Office:</b> :Girnar Software Pvt. Ltd. ,207, Adarsh Nagar,Sardar Bhag Singh Ka Chauraha, Jaipur 302004. INDIA 
				<p><b>Gurgaon Office:</b> :Suit No. 7-11, Ground Floor, VR1 & U&I, SCO-83, City centre, Sector 29, Gurgaon 122001, India (landmark near Bikanerwala)
				<p><b>Hyderabad Office:</b> :4th Floor, 406, 13, 13/1, 11, SBR Gateway, Opp Cyber Gateway, Hitech City, Madhapur, Hyderabad, 500081, India
				
		</text>
	
	</div>
	 <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; <a href="home.html">BookMyCar.com 2014  </a> | The name for Top Quality Branded Cars | <a href="privacy.html">Privacy Policy</a> | <a href="aboutus.html">About Us</a> | support@bookmycar.com | <a href="tnc.html">Terms and Conditions</a></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
</body>
</html>