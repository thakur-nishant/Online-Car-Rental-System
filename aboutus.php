<!DOCTYPE html>
<?php

    session_start();
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BookMyCar || AboutUs </title>

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
	
<body>

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
	
		<center><h2>About BookMyCar</h2></center>
		
<p><h4><b>Welcome to BookMyCar, India's most popular auto portal.</b></h4>
<p>Hello and welcome to BookMyCar, a website that goes way beyond the boundaries of facts and figures in its exploration of the glamorous and exotic world of cars, providing complete freedom to the car-fanatics of India to watch, know and understand the deepest passion of their lives in much greater detail and from a wide variety of viewpoints. Stringing together a comprehensive set of pages, each of which presents a new window into the automotive universe, this auto-portal talks about every existing car-breed ranging from hatchbacks, which are the smallest and yet the smartest members of the automobile community, to the electrifying super cars, which reign over the fantasies of car-enthusiasts across the globe.
<p><b>A little about the past..</b>
<p>It was back in March 2008 when the foundation stone for BookMyCar was laid by a team of four individuals as an initiative towards providing quality information in a quality environment on one of the biggest assets that a person owns in his lifetime. An offspring of Girnar Software Pvt. Ltd., which is a subsidiary of country's leading IT Company, Girnar Software, BookMyCar today is a member of an extended family constituted by several other similar ventures including BookMyBike,BookMyShow and more.Right from its very onset, this auto-portal has striven to serve the aspiring buyers, the proud owners, the die-hard fans and the dealers of cars across the nation in every possible way, always trying to be of assistance and support to them as they sought solutions to their many problems related to cars. What has kept us going and growing through all these years is the recognition that our efforts have received on the public platform. From time to time, awards and accolades have been bestowed upon this dedicated venture, inspiring us to do better every time. Starting from the prestigious 'Best Automotive Website of 2009', BookMyCar has been presented with various tokens of appreciation by a number of esteemed institutions, including the awards for the 'Best Car Website 2012', 'Most Popular Website 2012' and 'Website of the Year India' given twice in a row - in 2011 and 2012.While these popular recognitions have no doubt been a tremendous morale booster for the BookMyCar team, nothing could parallel the feeling of accomplishment and satisfaction that was stimulated when the site's traffic meter crossed the staggering figure of 3 crore. As per the analytics data, BookMyCar served as many as 3.4 crore unique visitors over the first 4 years of its lifetime, which in itself is a record, however, what really made us feel confident about our approach and efforts was the towering figure of 2.5 crore visitors that the site crossed within the single year of 2012, nearly matching its traffic of the past 4 years.
<p><b>A little about the present..</b>
<p>After that short trip through all the major milestones that BookMyCar has passed by over all these years, let us have a look at where exactly the portal stands in the present day. And we start with the News section, which is easily the most happening segment of the website. Sensational spy pictures, thrilling scoops and exclusive event coverage on a regular basis - that's what the atmosphere is like here, leaving no activity unreported, no information unrevealed.In conjunction with the News segment, the site offers a Reviews & Stories section as well. Composed of a wide streak of review categories, the segment enables the visitors to know their favorite rides in much better light, observing them from a number of different outlooks that range from those of automotive experts to those of the users who actually drive them every day. Apart from that, there are a whole lot of advisory stories, featured articles and guides made available here that are always there to add to the knowledge bank of car-lovers.Talking about knowledge, for those who wish to gather details on the innumerable car brands in the country and their countless models, BookMyCar offers an exceptionally interactive interface, coupled to an easy cruising mechanism and a pretty comprehensive database. On this website, you can conduct a search for car models in every possible category, ranging from new launches to upcoming ones, from brand names to body types, from price brackets to popular choices - it depends purely on your preferences how you choose to surf the site.While this vast pool of information is one of the major highlights of BookMyCar, it is not all that the website is about. The portal not only introduces you to all the alluring options that the car industry has to offer but also acts as an easy and effective route that would actually take you to the ride that is meant for you. Sections like Used Cars, Sell Cars, Loan, Insurance and Dealers together constitute an extensive network of individual buyers and sellers, dealers, and insurance and loan providers, assembling every element of car trade at one place to make the entire process unbelievably simple.Moving on to check out the latest members of the BookMyCar family. Inaugurated at the very beginning of 2013, BookMyCar Awards 2013 marks the maiden journey of the portal in the realms of award events. With India's common man acting as the supreme jury, this event is a means of identifying those cars that the people who ride them everyday consider to be the best. Speaking of people, another new addition to the group that has been introduced just recently is the BookMyCar Forum, a platform absolutely open for the public to hold query sessions, chats, discussions and any other possible forms of talks on every topic imaginable, aiming specifically at providing an opportunity to car-enthusiasts across the country to come together and talk about the one passion that they all share - cars.
	
</body>
</html>