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

    <title>BookMyCar || Coupé  </title>

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
                                    <img class="slide-image" src="img/Coupe1.jpg" alt="Lamborghini Aventador 2014 Edition">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/Coupe2.jpg" alt="Mercedes">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/Coupe3.jpg" alt="Dodge Challenger RT Redline">
                                </div>
								 <div class="item">
                                    <img class="slide-image" src="img/Coupe4.jpg" alt="Lamborghini Gallardo">
                                </div>
								 <div class="item">
                                    <img class="slide-image" src="img/Coupe5.jpg" alt="Mercedes Benz SL">
                                </div>
								 <div class="item">
                                    <img class="slide-image" src="img/Coupe6.jpg" alt="Porsche Cayman ABS">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-le	ft"></span>
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
	
	
	<!--Coupé content-->
	
	
	<div class=box style="margin-left:100px;margin-right:100px" >
	
		<text align="justify">	<center><h2>Coupé - The 2 door closed luxury </h2></center>
			<br>
			<p>A coupé or Coupé (from the French past participle coupé, of the infinitive Coupér, to cut) is a closed two-door car body style with a permanently attached fixed roof, that is shorter than a sedan of the same model, and it often has seating for two persons or with a tight-spaced rear seat. The precise definition of the term varies between manufacturers and over time. The term was first applied to 19th-century carriages, where the rear-facing seats had been eliminated, or cut out.
			<b><h3><p>The Coupé Definition and Description</p></h3></b>
			<br>
			<p>The International Standard ISO 3833-1977 defines a coupé as having a closed body, usually with limited rear volume, a fixed roof of which a portion may be openable, at least two seats in at least one row, two side doors and possibly a rear opening, and at least two side windows.
			<p>For use in styling, the term Coupé refers to a "close-coupled" automobile in that the "couple distance" is the dimension "between the driver's hip joint when seated (which stylists call the "H-point") and the rear axle." Therefore, a "close-coupled car is "one where the front seats are relatively close to the rear wheels, which naturally leaves little or no space for rear-seat passengers."
			<p>Alternatively, a coupé is often distinguished from a two-door sedan by the lack of a B pillar to support the roof. Sedans have an A pillar forward at the windscreen, a B pillar aft of the door, and a C pillar defining the aftermost roof support at the rear window. Thus with all side-windows down, a coupé would appear windowless from the A to the C pillars. These fixed-roof models are described as a hardtop or pillarless coupé. Though, to confuse things even further, there are many hardtop/pillarless two- and four-door sedans. Targa top, or just 'T'-top models are a variation on the convertible design, where the roof center section can be removed, in one or two sections, leaving the rest of the roof in place. Yet another variation on the convertible or drop-head coupé is the fully retractable hardtop. In this form the car has all the advantages of fixed-head vehicle but, at the touch of a button, the entire roof lifts off, folds and stows away in the trunk (boot). Though retractables were tried many years ago by Peugeot, in Europe and Ford, in the US, with the Fairlaine Skyliner, it is only in the 21st century that there has been an explosion in the popularity of this bodystyle.
			<p>Manufacturers have used the term coupé in several varieties, including:
			
			<b><p><h4>Club coupé</h4></b>
			<p>A coupé with a larger rear seat, which would today be called a two-door sedan.

			<b><p><h4>Business coupé</h4></b>
			<p>A coupé with no rear seat or a removable rear seat intended for traveling salespeople and other vendors who would be carrying their wares with them.
			
			<b><p><h4>Opéra coupé</h4></b>
			<p>A coupé de-ville with a high roofed passenger compartment such that the owners could be driven to the opera without the need to remove their large hats. These often had occasional seats that folded for use by children or extra passengers, and allowed easy passage to the rear seats.[18][19] These cars most closely approximated a motorized version of the original horse-drawn coupé. Often, they would have solid rear-quarter panels, with small, circular windows, to enable the occupants to see out without being seen. These opera windows were revived on many U.S. automobiles during the 1970s and early 1980s.[20]

			<b><p><h4>Sports coupé or berlinetta</h4></b>
			<p>A body with a sloping roof, sometimes sloping downward gradually in the rear in the manner known as fastback.

			<b><p><h4>Four-door coupé</h4></b>
			<p>A luxury sedan with classic coupé-like proportions. The low roof design reduces back seat passenger access and headroom.[21] The designation was first applied to a low-roof model of the Rover P5 from 1962 until 1973,[22] but was revived by the 1985 Toyota Carina ED, the 1992 Infiniti J30 and finally by the first model 2005 Mercedes-Benz CLS, which stands in Mercedes hierarchy between the E and S class, and has appearance of a classic Coupé and sedan. The term was also used partly from marketing reasons. German press accepted concept of four-door Coupé and adopted it to similar models from other manufacturers such as 2009 Jaguar XJ.[23][24][25][26] Also, other manufacturers accepted it, producing recent competing models like Volkswagen Passat CC, BMW F06 and even five-door Coupé, Audi A7.[27] The organization ADAC on its website also adopted this concepts.[28] In Germany the definition of the Coupé was finally divided into the classic Coupé and 4-door Coupé. This definition and concept of four-door Coupé (instead of sedan) are evident in Germany, but they are not yet widely known in the rest of the world.

			<b><p><h4>Quad coupé</h4></b>
			<p>Quad coupé is a marketing name for cars with one or two small rear doors with no B pillar.[citation needed]
			
			<b><p><h4>Combi coupé</h4></b>
			<p>Combi coupé is a marketing term used by Saab for a car body similar to the liftback.[29]
			<p>With the growing popularity of the pillarless hardtop during the 1950s some automakers used the term coupé to refer to hardtop (rigid, rather than canvas, automobile roof) models and reserved the term sedan for their models with a B pillar. This definition was by no means universal, and has largely fallen out of use with near-demise of the hardtop. Similarly, a Rover P5 saloon model came in a body style with a lower roof that was called a coupé. Technically, it was cut, as the original definition required, but it was not a shorter car body.[30]
			
	</text>
	
	</div>
	
	<!-- Coupé content -->
	
	
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
