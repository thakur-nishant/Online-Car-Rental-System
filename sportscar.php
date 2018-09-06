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

    <title>BookMyCar || SportsCar  </title>

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

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead"><b>. . . Book My Car . . .</b></p>
                <div class="list-group">
                    <a href="sedan.php" class="list-group-item">Sedan</a>
                    <a href="coupe.php" class="list-group-item">Coupe</a>
                    <a href="sportscar.php" class="list-group-item">Sports Car</a>
					<a href="luxurycar.php" class="list-group-item">Luxury Car</a>
                </div>
            </div>

            <div class="col-md-9">

         <!--       <div class="row carousel-holder" style="box-shadow: 0px 0px 20px #fff;">     -->
			    <div class="row carousel-holder" >

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
								<li data-target="#carousel-example-generic" data-slide-to="3"></li>
								<li data-target="#carousel-example-generic" data-slide-to="4"></li>
								<li data-target="#carousel-example-generic" data-slide-to="5"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img/sportscar1.jpg" alt="Lamborghini Aventador 2014 Edition">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/sportscar2.jpg" alt="Mercedes">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/sportscar3.jpg" alt="Dodge Challenger RT Redline">
                                </div>
								 <div class="item">
                                    <img class="slide-image" src="img/sportscar4.jpg" alt="Lamborghini Gallardo">
                                </div>
								 <div class="item">
                                    <img class="slide-image" src="img/sportscar5.jpg" alt="Mercedes Benz SL">
                                </div>
								 <div class="item">
                                    <img class="slide-image" src="img/sportscar6.jpg" alt="Porsche Cayman ABS">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
			</div>
		</div>
	</div>
	
	
	<!--Sportscar content-->
	
	
	<div class=box style="margin-left:100px;margin-right:100px" >
	
		<text align="justify">	<center><h2>Sports Car - The thrill of the speed with car</h2></center>
			<br>
			<p>A sports car (sportscar) is a small, usually two seater, two door automobile designed for spirited performance and nimble handling. Sports cars may be spartan or luxurious but high maneuverability and minimum weight are requisite.
			<br>
			<p><h3><b>Early history</h3></b>
			<p>The basis for the sports car is traced to the early 20th century touring cars and roadsters. These raced in early rallys, such as the Herkomer Cup, Prinz Heinrich Fahrt, and Monte Carlo.
			<p>Though the term sports car would not be coined until after World War One, the first sports cars are considered to be the 3 litre 1910 Prince Henry (Prinz Heinrich) Vauxhall 20 hp (tax rating) and the 27/80PS Austro-Daimler designed by Ferdinand Porsche.
			<p>These would shortly be joined by the French DFP (which became sporters after tuning by H.M. and W. O. Bentley) and the Rolls-Royce Silver Ghost. In the U.S., where the type was variously called roadster, speedster, runabout, or raceabout, there was Apperson, Kissel, Marion, Midland, National, Overland, Stoddard-Dayton, and Thomas among small models, while Chadwick, Mercer, Stutz, and Simplex were among large models.
			<p>In 1921, Ballot premiered its 2LS, with a remarkable 75 hp (56 kW) DOHC two liter, designed by Ernest Henry (formerly of Peugeot's Grand Prix program), capable of 150 km/h (93 mph); at most, one hundred were built in four years. This was followed by the SOHC 2LT and 2LTS. The same year, Benz built a supercharged 28/95PS four for the Coppa Florio; Max Sailer won.
			<p>Simson in 1924 offered a Paul Henze-designed 60 hp (45 kW) DOHC 2 liter four, the Simson Supra Type S, in a long-wheelbase 120 km/h (75 mph) tourer and 115 km/h (71 mph) twin-carburettor sporter; only thirty were sold, against around three hundred of the SOHC model and 750 of the pushrod-six Type R. Duerkopp's Zoller-blown two liter in 1924, as well.
			<p>There was a clear cleavage by 1925. As four-seaters were more profitable, two-seaters increasingly turned over to specialist manufacturers, led by Alvis, Aston-Martin, and Frazer-Nash, with shoestring budgets, fanatic followers, and limited sales (today exemplified by Aston and Morgan): between 1921 and 1939, 350 Astons were built; 323 Frazer-Nashes in the period 1924–39.
			<p>By the end of the 1920s, AC produced a 2 liter six, the 3.5 liter Nazzaro had a three-valve OHC (until 1922), while French makers Amilcar, Bignan, Hispano-Suiza, and Samson had the typical small four-cylinder sporters and Delage, Hotchkiss, and Chenard-Walcker the large tourers. Benz introduced the powerful SS and SSK, and Alfa Romeo, the Vittorio Jano-designed 6C.
			<p>Two companies would offer the first really reliable sports cars: Austin with the Seven and Morris Garages (MG) with the Midget.[citation needed] The Seven would quickly be "rodded" by numerous companies (as the Type 1 would be a generation later), including Bassett and Dingle (Hammersmith, London); in 1928, a Cozette blower was fitted to the Seven Super Sports, while Cecil Kimber fitted an 847 cc Minor engine, and sold more Midgets in the first year than MG's entire previous production.
			
			<p><h3><b>Seating</h3></b>
			<p>Some sports cars have small back seats that are really only suitable for luggage or small children. Such a configuration is often referred to as a 2+2 (two full seats + two "occasional" seats). The more typical seating arrangement is two-seats.
			<p>Over the years, some manufacturers of sports cars have sought to increase the practicality of their vehicles by increasing the seating room. One method is to place the driver's seat in the center of the car, which allows two full-sized passenger seats on each side and slightly behind the driver. The arrangement was originally considered for the Lamborghini Miura, but abandoned as impractical because of the difficulty for the driver to enter/exit the vehicle. McLaren used the design in their F1.
			<p>Another British manufacturer, TVR, took a different approach in their Cerbera model. The interior was designed in such a way that the dashboard on the passenger side swept toward the front of the car, which allowed the passenger to sit farther forward than the driver. This gave the rear seat passenger extra room and made the arrangement suitable for three adult passengers and one child seated behind the driver. The arrangement has been referred to by the company as a 3+1.[citation needed] Some Matra sports cars even had three seats squeezed next to each other.
		</text>
	
	</div>
	
	<!-- Sportscar content -->
	
	
<!-- /.container -->

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

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
