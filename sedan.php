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

    <title>BookMyCar || Sedan  </title>

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
                                    <img class="slide-image" src="img/sedan1.jpg" alt="Lamborghini Aventador 2014 Edition">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/sedan2.jpg" alt="Mercedes">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/sedan3.jpg" alt="Dodge Challenger RT Redline">
                                </div>
								 <div class="item">
                                    <img class="slide-image" src="img/sedan4.jpg" alt="Lamborghini Gallardo">
                                </div>
								 <div class="item">
                                    <img class="slide-image" src="img/sedan5.jpg" alt="Mercedes Benz SL">
                                </div>
								 <div class="item">
                                    <img class="slide-image" src="img/sedan6.jpg" alt="Porsche Cayman ABS">
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
	
	<!--sedan content-->
	
	
	<div class=box style="margin-left:100px;margin-right:100px" >
	
		<text align="justify">	<center><h2>Sedan - A Passenger Car, class apart from normal ones</h2></center>
			<br>
			<p>A sedan /sɨˈdæn/ (American, Canadian, Australian and New Zealand English) or saloon (British and Irish English) is a passenger car in a three-box configuration with A, B & C-pillars and principal volumes articulated in separate compartments for engine, passenger and cargo.[1] The passenger compartment features two rows of seats and adequate passenger space in the rear compartment for adult passengers. The cargo compartment is typically in the rear, with the exception of some rear-engined models, such as the Renault Dauphine, Tatra T613, Volkswagen Type 3 and Chevrolet Corvair. It is one of the most common car body styles.
			<b><h3><p>Types of sedans</p></h3></b>
			<br>
			<p>Several versions of the body style exist, including four-door, two-door and fastback variants of both.
			<p>A sedan seats four or more people and has a fixed roof that is full-height up to the rear window. The roof structure will typically have a fixed B-pillar on sedan models. Most commonly it is a four-door; two-door models are rare, but they do occur (more so historically). In the U.S., the term sedan has been used to denote a car with fixed window frames, as opposed to the hardtop style without a "B" pillar and where the sash, if any, winds down with the glass. However, true hardtops have become increasingly rare.
			<p>Four-door sedans can have either two or three side windows: One in each door (vent windows not counted), and the possible third integrated in the "C"-pillar.
			<b><p><h4>Notchback sedans</h4></b>
			<p>A notchback sedan is a three-box sedan, where the passenger volume is clearly distinct from the trunk volume of the vehicle (when seen from the side). The roof is on one plane, generally parallel to the ground, the rear window at a sharp angle to the roof, and the trunk lid is also parallel to the ground.

			<b><p><h4>Fastback sedans</h4></b>
			<p>A fastback sedan is a two-box sedan, with continuous slope from the roof to the base of the decklid, but excludes the hatchback feature. Marketing terminology is often misleading in this area - for example, Daimler AG calls the Mercedes-Benz CLS-Class sedan a four-door coupé because its semi-fastback design tries to give the impression of a coupé.[citation needed] Certain sedans are edging close[weasel words] to being one-box vehicles, where the windshield is steeply raked from the hood/bonnet and the rear window slopes toward almost the end of the car, leaving just a short rear deck that is part of the trunk lid — the 2006 4-door JDM Honda Civic is an example of this.[citation needed] They are not fastbacks because their bodyline changes from the roof to the rear deck. Their steeply raked rear windows end with a decklid that does not continue down to the bumper. Instead, their rear ends are tall — sometimes in a Kammback style — to increase trunk space.
			<p>Typically this design is chosen for its aerodynamic advantages. Automakers can no longer afford the penalty in fuel consumption produced by the traditional notchback three box form.[citation needed]

			<b><p><h4>Hardtop sedans</h4></b>
			<p>In historic terminology, a sedan will have a frame around the door windows, while the hardtop has frameless door glass. A true hardtop sedan design also has no center or "B" pillar for roof support behind the front doors).[2] This pillarless body style offers greater visibility.[3] However, it requires extra underbody strengthening for structural rigidity. The hardtop design can be considered separately (i.e., a vehicle can be simply called a four-door hardtop), or it can be called a hardtop sedan. During the 1960s and 1970s, hardtop sedans were often sold as sport sedans by several American manufacturers and they were among the top selling body styles. During the 1980s, automakers in the U.S. focused on removing weight and increasing strength, and their new four-door sedans with B-pillars were called pillared hardtops or pillared sedans. The sport sedan term has since been appropriated for other uses. In Japan the hardtop design was used for several luxury-type sedans during the 1990s.

			<b><p><h4>Hatchback sedans</h4></b>
			<p>Hatchback (a.k.a. liftback) sedans typically have the fastback profile, but instead of a trunk lid, the entire back of the vehicle lifts up (using a liftgate or hatch). A vehicle with four passenger doors and a liftgate at the rear can be called a four-door hatchback, four-door hatchback sedan, or five-door sedan. An example of such is the Chevrolet Malibu Maxx and Audi A5 Sportback. There can also be two-door hatchback sedans (three-door sedans), by the same technical explanation for two-door sedans. Examples of this design are the Volkswagen Golf, and Chevrolet Chevette.
			
			<b><p><h4>Chauffeured sedans</h4></b>
			<p>The Lincoln Town Car is often used as a chauffeured car in the U.S.
			<p>Strictly speaking limousine sedans have a separate compartment for the driver and the passenger compartment is long enough to contain at least two comfortable, forward-facing bench seats. Vehicles used for these means are usually Lincoln Town Car, Cadillac, Mercedes, or Rolls-Royce or Maybach for the more wealthy. The term limousine can refer to a large sedan, especially if hired from a service. Chauffeured limousines are primarily used by individuals for weddings, businesses for meetings, as well as for airport and sightseeing transportation. Chauffeurs are professional drivers, usually with experience in the transportation industry or tourism industry. Chauffeured sedans are owned either by private owners, livery services, or corporations. Large corporations as well as governments commonly provide luxury sedans to top executives, as well as VIP guests. Chauffeured sedans, such as the Lincoln Town Car, may also be stretched into limousines that are capable of seating up to twenty people.
	</text>
	
	</div>
	
	<!-- sedan content -->
	
	
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
