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

    <title>BookMyCar || Privacy Policy </title>

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
				 <a href="home.html"><img src="img/c.jpg" height="60" width="200">            </a>
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
	
		<text align="justify">	<center><h2> BookMyCar - Privacy Policy</h2></center>
			<br>
		
				<p><h4><b>Welcome to BookMyCar Privacy policy.</b></h4>
				<p><b>BookMyCar Privacy & Safeguards Notice</b>
				<p>At BookMyCar, we value our customers and are committed to protecting your privacy, as well as safeguarding the information we receive and maintain about you. We do not sell information about you to others. We only share it as expressly allowed by law. Consequently, you do not need to notify us not to share information about you, because we have chosen to limit this for you. This Notice will help you understand what information we collect, how we use it, and the ways we maintain your privacy and the security of personal information about you.
				
				<p><b>Information we Collect</b>
				<p>We collect and use information about you from various sources. The amount and nature of the information collected and used varies from transaction to transaction as : Information from you - Information you provide to us on applications, other forms, and by other means, such as your name, e-mail ID, and contact numbers.
				<p><b>Sharing Information with affiliated Companies</b>
				<p>We may disclose to our affiliated companies all of the information we collect about you as described above. Our affiliated companies can be promotional activities, financial service providers such as leasing companies, insurance companies and payment processing companies and non-financial companies such as automotive repair facilities and data processing companies. This sharing permits us to give you superior service, make a wider range of products available, and operate our business more effectively. We do not share information with non-affiliated third parties. Where they apply, we reserve limits and restrictions set by law as to sharing certain kinds of information with our affiliates.
				<p><b>Google, as a third party vendor, uses cookies to serve ads on your site.</b>
				<p>Google's use of the DART cookie enables it to serve ads to your users based on their visit to your sites and other sites on the Internet.
				<p>Users may opt out of the use of the DART cookie by visiting the <a href="http://www.google.com/policies/technologies/ads/">Google ad and content network privacy policy.</a>
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