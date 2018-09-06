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

    <title>BookMyCar || LuxuryCar  </title>

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

                                echo '<a id="modal_trigger" href="index.php">Login | Register</a>';
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
                                    <img class="slide-image" src="img/luxury1.jpg" alt="Lamborghini Aventador 2014 Edition">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/luxury2.jpg" alt="Mercedes">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/luxury3.jpg" alt="Dodge Challenger RT Redline">
                                </div>
								 <div class="item">
                                    <img class="slide-image" src="img/luxury4.jpg" alt="Lamborghini Gallardo">
                                </div>
								 <div class="item">
                                    <img class="slide-image" src="img/luxury5.jpg" alt="Mercedes Benz SL">
                                </div>
								 <div class="item">
                                    <img class="slide-image" src="img/luxury6.jpg" alt="Porsche Cayman ABS">
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
	
	
	<!--Luxurycar content-->
	
	
	<div class=box style="margin-left:100px;margin-right:100px" >
	
		<text align="justify">	<center><h2>Luxury Car - The luxury of your life in a car</h2></center>
			<br>
			<p>Luxury vehicle is a marketing term for a vehicle that provides luxury — pleasant or desirable features beyond strict necessity — at increased expense (see luxury goods).
			<p>The term suggests a vehicle with higher quality equipment, better performance, more precise construction, comfort, higher design, technologically innovative modern, or features that convey an image, brand, status, or prestige, or any other 'discretionary' feature or combination of them. The term is also broad, highly variable and relative. It is a perceptual, conditional and subjective attribute that may be understood differently by different people; "what may be luxury for one may be premium for another."
			<p>In contemporary usage, the term may be applied to any vehicle type— including sedan, coupe, hatchback, station wagon, and convertible body styles, as well as to minivans, crossovers, or sport utility vehicles and to any size vehicle, from small to large—in any price range. Moreover, there is a convergence in the markets and a resulting confusion of luxury with high price: where there may have been a clear difference in price between luxury and others, there is no longer an absolute separation between premium and luxury, with what may be premium brands now more expensive than the equivalent so-called luxury ones.
			<p><h3><b>Luxury market segments</h3></b>
			
			<b><h4><p>Premium compact segment</h4></b>
			<p>The premium compact class is relatively new, having been initiated by several European brands in the mid-2000s, and have displaced their compact executive cars to constitute the least expensive offerings in their lineups. The classification varies, for instance Consumer Guide Automotive in the U.S. considers the Audi A3 and Audi A4 as part of the premium compact segment due to similar size and MSRP, though these are known in Europe as a small family car and a compact executive car, respectively. Adding to some confusion, General Motors has positioned Buick as a "premium" nameplate to compete with Lincoln and front-wheel drive Acura and Lexus models, while Cadillac is aimed at the "luxury" segment which generally encompasses the performance-oriented BMW and Mercedes-Benz marques.
			<p>The premium compact segment is targeted at a niche market of consumers who found the existing entry-level luxury offerings (mostly consisting of compact executive cars - see below) to be too expensive. By offering a smaller, lighter, more fuel-efficient, and less expensive vehicle, premium compacts introduces younger buyers to the luxury marque, in hopes of retaining the coveted customer loyalty. This includes the Audi A3, BMW 1 Series, Lexus CT, Mercedes-Benz B-Class, Aston Martin Cygnet, and the Volvo V40. Premium compacts compete with well-equipped midsize (non-luxury) cars, and with options they overlap much with compact executive cars (entry-level luxury cars).
			<p>Premium compacts may share components with mass market cars from the marque's parent company (the Audi A3 for example, shares much of its engineering with the cheaper Volkswagen Golf), and/or have less sophisticated platforms compared to upmarket vehicles in the lineup (such as the Mercedes-Benz B-Class which is front-wheel drive compared to the other marque's more expensive cars that are rear-wheel drive). However, the BMW 1 Series retains the front-engine longitudinal-engine rear-wheel drive configuration of more expensive BMWs.
			<p>The body style tends to be a hatchback or compact wagon, previously associated with economy cars but regaining popularity in the United States for its afforded utility. As of 2013 there are small luxury sedans such as the Acura ILX, Audi A3, and Mercedes-Benz CLA-Class. The luxury branding and style, high-quality interior materials, wide range of convenience features, and performance powertrains are key to distinguishing them from mass market equivalents (one mistake made by the Cadillac Cimarron) and making these appeal to consumers.
			
			<b><h4><p>Entry-level luxury/compact executive cars</h4></b>
			<p>This category is known as the compact executive car in Britain where it specifies both the price range and vehicle dimensions. In the U.S., there is a broader category called entry-level luxury, which includes the bottom vehicles in the line-up of luxury brands as well as the top-of-the-line models of some non-luxury brands.
			<p>Dimensionally, compact executive cars are smaller than Mid-size cars and sometimes even smaller than compact/Small family cars. Mass market compact cars typically use the economical front wheel drive transverse engine layout, well suited to the inline-4 engine, which also maximizes interior room. Most compact executive cars are rear-wheel drive with longitudinal engines, for improved stability and handling, and in order to accommodate the larger size of higher-performance engines (straight-6, V6, rarely V8), with four-wheel drive often being available. Compact executive cars also tend to have more complicated independent suspensions, sportier transmissions, and high revolution engines that may require premium gasoline. The more complex powertrain and mechanical layouts of compact executive cars comes at increased cost and reduced interior passenger and trunk space.
			<p>Compact executive cars include the Acura ILX, Alfa Romeo 159, Volvo S60, Lexus IS, Infiniti G/Q50, Saab 9-3, BMW 2 Series, BMW 3 Series, Audi A4, Cadillac ATS, Mercedes-Benz CLA-Class and Mercedes-Benz C-Class which particularly emphasize sporty handling. In the United States and Canada these vehicles are known as entry-level luxury cars.
			<p>The American and Canadian classification of entry-level luxury includes is a broad category which includes not only compact executive cars, but also midsize cars such as the Lexus ES, Acura TL, Buick LaCrosse, being similar in price to the BMW 3 Series and Mercedes-Benz C-Class. However, the ES, TL, and LaCrosse do not fall under the European luxury classification of compact executive car nor are they sold in Europe. The ES and TL actually began as badge engineered versions of the mid-size Toyota Camry and Honda Accord, respectively, retaining the front wheel drive transverse engine layout, whereas Toyota's current Lexus IS does not share a platform with mass market Toyota cars. The ES and TL are not considered executive cars either (that slot is filled by the Lexus GS and Acura RL, respectively), despite similar dimensions, since executive cars usually emphasize higher performance, often being rear-wheel drive with longitudinal engines. The present iterations of the ES and LaCrosse emphasize "comfortable, reasonably priced luxury", while the TL has recently been targeted at the entry-level luxury sport market due to its SH-AWD.
			<p>Recently, the entry-level luxury has been very competitive, and there has been price-overlapping with well-equipped non-luxury cars. The bestselling vehicles of the marque are frequently compact executive cars, such as the BMW 3 Series that makes up 40% of the vehicles that BMW sells worldwide.
			
			<b><h4><p>Mid-luxury/executive cars</h4></b>
			<p>The mid-luxury segment is commonly referred to as executive cars in Britain, Obere Mittelklasse in German, and Grandes Routières in French. Examples of models in this category include Acura TL, Audi A6, Volvo S80, BMW 5 Series, Mercedes-Benz E-Class, Jaguar XF, Cadillac CTS, Lexus GS, and Infiniti M. Although Maserati vehicles have traditionally been priced as ultra-luxury cars, the new Maserati Ghibli III is intended to compete with high-spec executive cars, such as the Audi S6/S7, BMW 550i and Mercedes-Benz E550/CLS550.
			<p>Although having similar dimensions to mid-size cars and large family cars, executive cars are engineered and positioned as premium vehicles with better performance and technology amenities. There are also higher development and production costs, as many well-known mid-luxury cars use the longitudinal (usually front engine rear wheel drive layout) engine mounting which affords space for powerful engines such as a V8, instead of the more economical transverse engine layout of mass market cars which are restricted to inline-4 or V6. Executive cars usually have lower sales and production volumes compared to mid-size cars, as base trims with less equipment and smaller engines are not sold in U.S. and Canadian markets. Also due to the problem of steep depreciation, especially concerning cars from less prestigious brands, most executive cars are produced by marques that specialize in larger/more expensive vehicles. Particularly in the United States, the mid-luxury segment is dominated by Mercedes-Benz and BMW, as executive cars from lesser-known manufacturers such as Citroën and Infiniti have not had much success.
			<p>Vehicles in this segment include the mid-range models of several luxury car manufacturers. Executive cars such as the BMW 5 Series are crucial to a luxury automaker's bottom line, and although not the highest-selling model, they generate a significant amount of profits due to the lucrative technology options.

			<b><h4><p>High-end luxury/full-size luxury cars</h4></b>
			<p>Also known as full-size luxury cars, grand saloons, or premium large cars, while "Oberklasse" is used in Germany. Many of these are the marque's showcases for the newest automotive technology. Several nameplates also offer long-wheelbase versions that offer additional rear legroom and amenities. Full-size luxury cars sold in Canada and the U.S. typically have mid-displacement V8 engines, though recently some marques have offered six cylinder powerplants but without much success.
			<p>Vehicles in this category include some of the models from the flagship lines of luxury car brands. In Europe it include the Audi A8, BMW 7 Series, Porsche Panamera, Volkswagen Phaeton, Mercedes-Benz S-Class, Jaguar XJ, in Japan: Lexus LS, Infiniti Q45, Acura RL, in the US: Lincoln MKS, Chrysler 300, and Cadillac XTS. In the United States in 2004, the bestselling full-size luxury nameplates were the Lexus LS, Mercedes-Benz S-Class, and BMW 7 Series. There were also full-size luxury cars in the Soviet Union since 1930s until the 1990s, from the GAZ and ZiL (before 1956 - ZiS) factories, such as ZIS-101, ZIS-110, GAZ 12, GAZ 13 Gull, ZIL-114, ZIL-117, ZIL-4104, ZIL-41047.

			<b><h4><p>Ultra-luxury cars</h4></b>
			<p>R.L. Polk and Company, a global automotive information and marketing firm that provides services to automotive and related industries, has defined the term "super luxury" segment for luxury cars costing more than US$100,000.
			<p>This bracket includes the lineup of Rolls Royce and Bentley, as these marques do not offer lower-priced offerings in the entry-level luxury or mid-luxury segments like more mainstream luxury brands like Audi, Porsche, BMW, and Mercedes-Benz. As of late 2011, super luxury automakers have been "pledging higher sales and offering ever sexier models" despite the economic uncertainty.
			<p>Bentley and Rolls Royce have recently moved into more affordable price brackets with new models priced considerably lower than their traditional offerings (Bentley Mulsanne and Rolls Royce Phantom and Maserati Quattroporte). These new cars, the Bentley Flying Spur and Continental GT sister cars and Rolls Royce Ghost, created what Car and Driver described as the "entry-opulent segment". Bentley, Maybach, and Rolls-Royce vehicles share platforms and derivatives of engines with other luxury brands from their parent auto company, however Rolls-Royce and Bentley are assembled in England (separate from the rest of BMW and Volkswagen Group's production plants) and this 'exclusivity' has helped to make these British marques a sales success. By comparison, Maybachs were built alongside the Mercedes-Benz S-Class which partly explains why they have not fared well in the market and were discontinued in 2012. Furthermore the Maybach's brand pedigree was virtually unknown outside of Germany unlike its British rivals which have long enjoyed fame worldwide. A Bentley executive was quoted as saying "that the brand’s exclusivity, history and obsessive luxury help to convince customers that a Bentley is worth the price" which is at least twice that of a flagship luxury car from BMW or Mercedes-Benz. Although Rolls-Royce and Bentley have traditionally been considered "as a purveyor of boxy British land yachts", newer offerings such as the Bentley Continental Flying Spur and Bentley Continental GT have "upended the super-premium auto segment, making Bentley for the first time a plausible choice for younger Hollywood and music stars".
			<p>Maserati vehicles such as the Maserati Quattroporte have traditionally been priced as ultra-luxury cars, although the new Maserati Ghibli III is intended to compete with high-spec executive cars, such as the Audi S6/S7, BMW 550i and Mercedes-Benz E550/CLS550.
			<p>The most expensive variants of flagship cars from Audi, BMW, and Mercedes-Benz are often included here as well. They often feature a longer wheelbase and have V12 engines for great refinement and smoothness, even though contemporary V8 engines can make similar output while being less expensive. While BMW sells far fewer V12-engined 7-Series vehicles than V8 versions, the V12 retains popularity in the US, China, and Russia, as well as maintaining the marque's prestige in the luxury vehicle market segment. These trims also feature standard luxury and technology features that would be considered optional on their V8 siblings.
			<p>There are ultra-high performance cars from "exotic brands" that also exceed US$100,000, but would not necessarily be categorized as luxury automobiles, such as the sports cars from Ferrari, Lamborghini, and Porsche, although the Porsche Panamera does compete in the high-end luxury/full-size luxury category.
			
			<b><h4><p>Luxury SUV/Crossover</h4></b>
			<p>Although only becoming popular in the 1990s, this category has been said to be created with Kaiser Jeep's 1966 Super Wagoneer as the first true luxury four-wheel drive (4x4) vehicle. It was the first serious off-road SUV to offer a V8 engine, automatic transmission, and luxury car trim and equipment. The Super Wagoneer was "a pioneer that blazed a trail for today's luxury SUVs". It came with long list of standard equipment that included bucket seating with center console, air conditioning, seven-position tilt steering wheel, a vinyl roof, as well as "Antique Gold" trim panels on the body sides and tailgate. After American Motors Corporation (AMC) purchased Jeep, the vehicles were upgraded and refined, including features such as an optional electric sliding steel sun roof, "possibly the first offered on an SUV".The late-1970s Jeep Wagoneer Limited "set the sport-utility market on its ear ... was the most luxurious four-wheeler anyone had ever seen."
			<p>The venerable Grand Wagoneer was still the leader in the luxury SUV market in 1986, and continued to be produced virtually unchanged through 1991, long after Chrysler bought out American Motors Corporation (AMC) in 1987. The SUV market soon expanded with new entrants. By the mid-1990s, the U.S. Big Three automakers, "especially with Ford's Explorer and Jeep's Grand Cherokee, dominate[d] the market for the red-hot sport/utilities." The fastest growing sector of this market was for the so-called luxury SUVs, which included the Jeep Grand Cherokee ... the Grand Cherokee's allure: "This vehicle is proof you can have a true off-road vehicle without giving up luxuries and amenities" with the Jeep providing a crucial new intangible factor for buyers — image.
			<p>The SUV models generated higher-profit-margins than ordinary automobiles, and automakers introduced new luxury models during the late 1990s. For some manufacturers such as Porsche and BMW, luxury SUVs were the first SUV models they produced. Luxury SUVs catered particularly to the U.S. market where station wagons were unpopular, often being produced in North America (such as BMW Spartanburg) instead of the luxury marque's home country. Some of these models were not traditional SUVs based on light trucks, rather they are classified as crossovers using unibody constructions. SUVs from non-luxury brands had experienced a surge in popularity through early 2000s, causing the traditional luxury marques to follow.[not in citation given]
			<p>SUVs from the luxury marques grew at almost 40 percent to more than 430,000 vehicles, excluding SUV-only brands like Hummer and Land Rover, while luxury car sales in the U.S. during 2003 suffered a 1% decline, and non-luxury SUV sales were flat. By 2004, 30 percent of major luxury brands' U.S. sales are now SUVs. Luxury brands in particular led the development of crossover SUVs (as opposed to body-on-frame SUVs), making it one of the fastest growing segments in the market, as the forecast for 2002 was approximately 240,000 vehicles and that could double by 2006. Research data showed luxury SUV buyers are compared those vehicles to SUVs of mass market brands, and not shopping around luxury cars, thus the SUV is becoming the key to bringing new customers to the luxury dealerships.
			<p>Certain luxury SUVs use body-on-frame underpinnings, often being badge-engineered versions of their non-luxury counterparts, and retaining the rugged off-road and towing capabilities. Examples include the Lexus LX and Lincoln Navigator, which are the premium versions of the Toyota Land Cruiser (which is considered as a luxury SUV itself) and Ford Expedition, respectively.
			<p>Other luxury SUVs are crossovers using unibody construction, often sharing the platform with compact executive and executive cars. For example, the Infiniti FX is based upon the Nissan FM platform that also underpins other Infiniti cars. Audi and BMW developed crossovers to compete in the SUV segment as they did not have an existing body-on-frame vehicle in their lineup. The Lexus RX was the earliest luxury crossover on the market, and it has since been the best-selling luxury vehicle in the US, so it has inspired similar competitors from rival marques.[83] While early luxury crossovers released in the late 1990s have resembled traditional boxy SUVs, recent offerings have prioritized sportiness over utility — such as the Infiniti FX and BMW X6.
		</text>
	
	</div>
	
	<!-- Luxurycar content -->
	
	
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
