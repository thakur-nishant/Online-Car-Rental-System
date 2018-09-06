<?php

    session_start();
?>
<p><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BookMyCar || Terms and Conditions </title>

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
	
		<text align="justify">	<center><h2> BookMyCar - Terms and Conditions</h2></center>
			<br>
		
				<p><h4><b>Terms and Conditions</b></h4>
				<p>You are welcome at BookMyCar.com for doing your car search. Thank You for using our services. We hope you have a great experience using out site and find it meaninful use of your precious time. By using the website you agree to following terms and conditions in the agreement. Please note that in event of change in this agreement we will publish it online at the website. We encourage you to review the site periodically for such changes. This is a legal and binding document between you and Girnar Software Pvt. Ltd. (http://www.girnarSoft.com). BookMyCar.com is fully owned by Girnar Software Pvt. Ltd.

<p><strong><b>Important</b></strong>
<p>The information provided on this web site includes, but is not limited to, the services provided by Girnar Software Pvt. Ltd. ("BookMyCar"), and does not render any advice, certifications, guarantees or warranties on the Content (as defined below) relating to the services, which BookMyCar makes available on this Site. Girnar Software Pvt. Ltd. will be referred to as BookMyCar in the rest of the document.
<p><b>Terms of Use</b>
<p>The use of this Site and the Content contained herein are governed by these Terms of Use ("Agreement"). When you use this Site you acknowledge that you have read this Agreement and that you accept and will be bound by the terms hereof as such terms may be modified from time to time.
<p><b>1. Purpose</b>
<p>1.1 As stated above, the contents provided on or through this Site are solely for information purposes and do not substitute for specific advice whether investment, legal, taxation or otherwise and are not intended to provide you with any nature of certification, guarantee or warranty. By accessing, browsing and using this Site, you agree and acknowledge that you understand this limited and restricted use and agree that you would not rely on the information and materials contained in this Site for any purposes except as BookMyCar intended or specified under this Agreement. You further agree that in all actual matters, you are ultimately responsible for determining your specific requirements and consequences thereof. BookMyCar disclaims all liability for damages caused by use of Content on the Site. You agree that you are providing BookMyCar with personal details regarding your mobile phone, address. You also agree that BookMyCar may use the information for automated analysis. You further agree that BookMyCar, to increase the value and benefit of this service to you, may provide your name and contact information to a third party service provider.
<p>1.2 BookMyCar will provide services to research cars, prices, technical specifications and other car attributes. The services can include listing of your used cars online or browsing through the list of used cars listed by users of BookMyCar. BookMyCar makes no claims that the data is accurate or applicability of the information to any specific situation.
<p>1.3 BookMyCar may also provide the user the ability to send SMS to the userÃƒÂ¢Ã¢Â‚Â¬Ã¢Â„Â¢s top callers or send an email to the users friends letting them know about the service.
<p>1.3 BookMyCar may also provide the user the ability to send SMS to the userÃƒÂ¢Ã¢Â‚Â¬Ã¢Â„Â¢s top callers or send an email to the users friends letting them know about the service.
<p>1.4 The Site may provide certain Features ("Site" and "Features" as defined under Section 2) that enable sending/receiving invites/solicitation messages/reminders to your contacts whose details, as required under the specific Features, are submitted and specifically permitted by you to be so used. Once such a Feature is selected and consented by you, you specifically agree that the Feature shall enable sending one instant message and a maximum of 3 reminders.
<p><b>2. Definitions</b>
<p>2.1 "Contents" or "Content" shall mean any and all information, data, text, software, music, sound, photographs, graphics, video, messages, materials, news, notices, articles, contracts, forms, documents or other materials and information which may be viewed or downloaded on or through this Site. Contents shall also include any e-mail, messages, e-cards or any other information furnished by a user to be displayed on the Site by BookMyCar.
<p>2.2 "Feature" or "Features": A "Feature" may include any interactive, value addition service or other additional feature, introduced on the Site.
<p>2.3 "Site" shall mean the internet site identified generally by the URL www.BookMyCar.com and all pages linked to that URL which pages are posted and operated by BookMyCar or its agents.
<p><b>3. REPRESENTATIONS AND WARRANTIES</b>
<p>3.1 BookMyCar or any of its affiliates or associates or employees shall not be in any way responsible for any loss or damage that may arise to any person from any inadvertent error in the information contained in this Site. The information from or through this Site is provided "as is" and all warranties express or implied of any kind, regarding any matter pertaining to the Site or the Content including, without limitation, the implied warranties of merchantability, fitness for a particular purpose, and non-infringement are disclaimed.
<p>3.2 BookMyCar and its affiliates and associates shall not be liable, at any time, for any failure of performance, error, omission, interruption, deletion, defect, delay in operation or transmission, computer virus, communications line failure, theft or destruction or unauthorized access to, alteration of, or use of information contained on the Site. No representations, warranties or guarantees whatsoever are made as to the accuracy, adequacy, reliability, completeness, suitability or applicability of the information to a particular situation.
<p><b>4. Your Conduct</b>
<p>4.1 You may post your reviews or comments; and submit suggestions, ideas, questions, or other information, so long as the Contents are not illegal, obscene, threatening, defamatory, invasive of privacy, infringing of intellectual property rights, or otherwise injurious to third parties or objectionable and do not consist of or contain software viruses, political campaigning, commercial solicitation, chain letters, mass mailings, or any form of "spam". You shall not use a false e-mail address, impersonate any person or entity, or otherwise mislead as to the origin of the Contents. However, you acknowledge that BookMyCar does not pre-screen the Content, but that BookMyCar and its designees shall have the right (but not the obligation) in their sole discretion to accept, refuse, move, or remove any Contents that are available via the Site.
<p>4.2 You understand that all Contents, whether publicly posted or privately transmitted, are the sole responsibility of the person from which such Content originated. This means that you, and not BookMyCar, are entirely responsible for all Content that you have provided BookMyCar with in order to upload, post, transmit or otherwise make available via the Site.
<p>4.3 You expressly agree not to use the Site to: (i) harm any user in any manner either directly or indirectly; (ii) forge headers or otherwise manipulate identifiers in order to disguise the origin of any Contents transmitted through the Site; (iii) disrupt the normal flow of dialogue, cause a screen to "scroll" faster than other users of the Site are able to type, or otherwise act in a manner that negatively affects other users' ability to engage in real time exchanges or "stalk" or in any other manner harass another user; (iv) interfere with or disrupt the Site or servers or networks connected to the Site, or disobey any requirements, procedures, policies or regulations of networks connected to the Site; (v) upload or transmit any material that is deemed derogatory with respect to the name, services or Contents relating to or provided by BookMyCar; (vi) intentionally or unintentionally violate any applicable local, state, national or international laws;
<p>4.4 You expressly represent and warrant that: (i) you are capable to use this Site in accordance with all terms and conditions herein in relation to the access and use of this Site and the services provided therein; and (ii) all information supplied by you in any correspondences or any other documentation to BookMyCar is true, current complete and accurate. You expressly agree that this clause shall survive any termination of this Agreement.
<p><b>5. Links to Other Websites</b>
<p>This Site may contain hyperlinks to websites operated by parties other than BookMyCar. The inclusion of hyperlinks to such websites does not imply BookMyCar's certification or endorsement of such websites nor any association with their operators. BookMyCar or its affiliates or associates or its employees do not provide any judgment or warranty in respect of the authenticity or correctness of the content of such other services or sites to which links are provided. A link to another service or site is not an endorsement of any products or services on such site or the Site. You shall be solely responsible for any or all the consequences that arise out of your use of such hyperlinks to websites.
<p><b>6. Websites Intellectual Property</b>
<p>All text, graphics, audio, design and other works on the Site are the copyrighted works of BookMyCar unless otherwise indicated. Content on the Site is for personal use only. Any alteration of the material or use of the material contained in the Site for any commercial purpose is a violation of the copyright of BookMyCar and/or its affiliates or associates or of its third-party information providers. The Content available on the Site shall not be copied, reproduced, republished, uploaded, posted, transmitted or distributed in any way without obtaining the prior permission from BookMyCar. All responsibility and liability for any damages caused by downloading of any data is disclaimed.
<p><b>7. License and Site Access</b>
<p>7.1 BookMyCar grants you a "limited non-exclusive license" to access and make personal (non commercial) use of this Site for informational purposes and not to modify either the whole or any portion of the Site.
<p>7.2 The license shall not include: (i) any resale or commercial use of this Site or its Contents; or (ii) any derivative use of this Site or its Contents;
<p>7.3 You, your partners, your employees, your agents or any other person associated with you personally or professionally, may not, with or without compensation, prepare any derivative works from, or sell, lease, license, e-mail, reproduce, duplicate, copy, resell, republish, transmit or distribute or otherwise exploit for any commercial purpose via any media, now known or unknown, any Contents from this Site to any other entity or individual. No Contents or information on the Site may be reproduced in any form or incorporated into any internet web-site or any other information retrieval system, either electronic or mechanical. It is a condition of your use of this Site that you do not restrict or inhibit any other user from using this Site.
<p>7.4 You shall not frame or utilize framing techniques to enclose any trademark, logo, or other proprietary information (including images, text, page layout, or form) of BookMyCar and/or our affiliates without the express written consent of BookMyCar. You may not use any meta tags or any other "hidden text" utilizing BookMyCarÃƒÂ¢Ã¢Â‚Â¬Ã¢Â„Â¢s name or trademarks without the express written consent of BookMyCar. Any unauthorized use terminates the permission and the license granted by BookMyCar under this Agreement to you.
<p><b>8. Modifications on the Site</b>
<p>8.1 BookMyCar reserves the right to modify, suspend/cancel, or discontinue any or all sections, or service at any time without notice. BookMyCar reserves the right to make modifications and alterations in the information contained on the Site without notice. You agree that BookMyCar shall not be liable to you or to any third party for any modification, suspension or discontinuance of the Site.
<p>8.2 You expressly agree that any information provided on the Site shall be used by you at your risk. You are advised to hereby make proper enquiries and use the information provided on the Site.
<p>8.3 From time to time BookMyCar may supplement its terms of use with additional terms pertaining to specific content (additional terms). Such additional terms are hereby incorporated by reference into these Terms of Use.
<p><b>9. Buying</b>
<p>BookMyCar.com strongly advises you not to test the site with false purchases request, as it will put you at substantial personal legal risk. It is a crime to use a false name, other false personal information to buy. Willfully entering erroneous or fictitious purchase request may result in prosecution by BookMyCar.com. Please be aware that even if you do not give BookMyCar.com your real name, your Web browser transmits a unique address to us, which can be used by law enforcement officials to identify you. As a seller you certify that all information provided by you against your listed car is true. Individual seller can list one car at a time and needs to make BookMyCar.com aware of its timely status.
<p><b>10. Selling</b>
<p>As a registered member, you may list car for sale on the Site. You must be legally able to sell the car(s) you list for sale on our Site. Listings may only include text descriptions, graphics and pictures that describe your car for sale. All listed cars must be listed in an appropriate category on the Site. Soliciting business offline or outside of the Site, by indicating your contact details (e.g. contact phone number, address or e-mail ID) in the car listing or elsewhere on the Site other than in the Sell Car Form is expressly prohibited and would be considered as a breach of the User Agreement. All listed cars must be kept in stock for successful fulfillment of sales. The listing description of the car must not be misleading and must describe actual condition of the product. If the car description does not match the actual condition of the car, you agree to refund any amounts that you may have received from the buyer.
<p><b>11. Login Options</b>
<p>The BookMyCar Members login (if any) is for the reference of only registered BookMyCar's Member. BookMyCar reserves the right to discontinue the member Login on account of violation of this Agreement or any "Code of Conduct" set by BookMyCar. BookMyCar reserves the right to take all measures necessary to prevent access to any Content or portion of the Site or terminate access to the site if the terms of use are not complied with or are contravened or there is any violation of copyright, trademark or other proprietary right.
<p><b>12. Disclaimer</b>
<p>BookMyCar makes no warranties or representations as to the contents of this site and BookMyCar assumes no liability or responsibility for any errors or omissions in the content on the site. The contents are provided "as is" and without warranty of any kind, either express or implied, including, but not limited to, the implied warranties of merchantability, fitness for a particular purpose, or non-infringement.
<p>BookMyCar further makes no representation or warranty that any files, links or pointers available through this site will be free of viruses or other codes that contain contaminating or destructive properties. To the fullest extent permissible pursuant to the applicable law, BookMyCar disclaims all warranties, express or implied.BookMyCar makes no warranty that
<p>(i) The information will meet your requirements
<p>(ii) The site will be uninterrupted, timely, secure, or error-free,
<p>(iii) The results that may be obtained from the use of the site will be accurate or reliable
<p>(iv) The quality of any information obtained by you through the site will meet your expectations
<p>(v) Any errors in the software will be corrected.
<p>Any material, contents or information downloaded or otherwise obtained from the site is subject to this agreement and done at your own discretion and risk and that you will be solely responsible for any damage to your computer system or loss of data that results from the download of any such material.
<p>BookMyCar is not liable on the authenticity of such data. Without limiting the foregoing, under no circumstances shall BookMyCar be held liable for any delay or failure in performance resulting directly or indirectly from acts of nature, forces, or causes beyond its reasonable control, including, without limitation, Internet failures, computer equipment failures, telecommunication equipment failures, other equipment failures, electrical power failures, strikes, labor disputes, riots, insurrections, civil disturbances, shortages of labor or materials, fires, floods, storms, explosions, acts of God, war, governmental actions, orders of domestic or foreign courts or tribunals, non-performance of third parties, or loss of or fluctuations in heat, light, or air conditioning.
<p><b>13. Limitation of Liability</b>
<p>Neither BookMyCar nor its affiliates, employees, agents or consultants shall in any event be liable for any indirect, incidental or consequential damages such as, but not limited to, loss of business information, loss of goodwill, business interruption or loss of anticipated profits or benefits resulting from use of the site or any part or whole of the content or arising out of any breach of warranty even if BookMyCar or its affiliates, employees, agents or consultants have been advised of the possibility of such damages. Such limitation of liability shall apply whether the damages arise from use or misuse of or reliance on BookMyCar information, from inability to use BookMyCar information, or from the interruption, suspension, or termination of access to the content or site (including such damages incurred by third parties). This limitation shall also apply, without limitation, to the costs of procurement of substitute content, loss of goodwill, loss of profits, or loss of data. Such limitation shall further apply with respect to the performance or non-performance of BookMyCar or any information that appears on, or is linked or related in any way to, the site provided thereunder. Such limitation shall apply notwithstanding any failure of essential purpose of any limited remedy and to the fullest extent permitted by law.
<p><b>14. Indemnity</b>
<p>You agree to indemnify and hold BookMyCar and its subsidiaries, affiliates, officers, agents, and employees, harmless from any claim or demand, including reasonable attorneys' fees, made by any third party due to or arising out of the Contents you submit, e-mail, transmit or make available through the Site, your use of the Site, your connection to the Site, your violation of this Agreement, or your violation of any rights of another user of this Site.
<p><b>15. Acknowledgment</b>
<p>The disclaimer and limited liability of BookMyCar as set out in this Agreement are fundamental elements of the basis of the bargain for the Content and access to the Site. You agree that BookMyCar would not otherwise be able to offer the Content or the Site on its present basis without such limitations. This clause shall survive any termination of this Agreement.
<p><b>16. Special Admonitions For Interational Use</b>
<p>Recognizing the global nature of the Internet, you agree to comply with all local rules regarding online conduct. Specifically, you agree to comply with all applicable laws regarding the transmission of technical data exported from the country in which you reside.
<p><b>17. Severability</b>
<p>Any provision of this Agreement which is invalid, prohibited or unenforceable in any jurisdiction shall:
<p>(i) be ineffective in that jurisdiction to the extent of the invalidity, prohibition or unenforceability
<p>(ii) be ineffective in that jurisdiction to the extent of the invalidity, prohibition or unenforceability
<p>(iii) not affect the validity of that provision in any other jurisdiction.
<p>18. Governing Law and Arbitration
<p>All legal proceedings shall be subject to the jurisdiction of the courts in Bangalore, India and shall be governed by and construed in accordance with the laws of India and you agree to resolve the disputes under the Arbitration and Conciliation Act 1996. The venue for such arbitration shall be at Bangalore, India.
<p><b>18. Relationship</b>
<p>This Agreement or your use of this Site does not constitute any joint venture, partnership, employment or agency relationship between you and BookMyCar.
<p><b>19. Customer Registration</b>
<p>In preview of the Telecom Regulatory Authority of India (TRAI) guidelines, I/We hereby authorize Girnar Software Pvt. Ltd. (www.BookMyCar.com) and its affiliates / partners / registered dealers, manufacturers or any other related player in automobiles or otherwise who are accessing the data by virtue of their association with BookMyCar to communicate with me/us through telephone/mobile, Email, SMS or other modes of communication even if my/our number/numbers(s) is/are registered in the National Do Not Call Registry (NDNC) or www.nccptrai.gov.in
				
				
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