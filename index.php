

<!DOCTYPE html>
<html lang="zxx">
<head>
<title> Maharashtra Primary School </title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

#map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: navy;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 50px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}


#textboxid
{
    height:200px;
    width: 270px;
    font-size:14pt;
} 

.cbb
            {
                border: 2px solid tomato;
            }
</style>

  <script>
            know = {
                 "hello" : "hi,welcome to Maharashtra Primary School!",
                "how are you?" : "good",
                "ok" : ":)",
                "hi":"hello Welcome to Maharashtra Primary school,How can i help you?",
                "hii":"hello Welcome to Maharashtra Primary school,How can i help you?",
                "hiii":"hello Welcome to Maharashtra Primary school,How can i help you?",
                "hiiii":"hello Welcome to Maharashtra Primary school,How can i help you?",
                "where are you from":"Akola"
            };
            function talk() {
                var user = document.getElementById("userBox").value;
                document.getElementById("userBox").value = "";
                document.getElementById("chatLog").innerHTML += user+"<br>";
                if (user in know) {
                    document.getElementById("chatLog").innerHTML += know[user]+"<br>";
                } else {
                    document.getElementById("chatLog").innerHTML += "I don't understand...<br>";
                }
            } 
        </script>




<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Scholarly web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/swipebox.css">
<link rel="stylesheet" href="css/jquery-ui.css" />
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body>
<!-- banner -->
<div class="main_section_agile" id="home">
	<div class="agileits_w3layouts_banner_nav">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<h1><a class="navbar-brand" href="index.html"><i class="fa fa-leanpub" aria-hidden="true"></i>महाराष्ट्र प्राथमिक विद्यालय , शिशु मंदिर </a></h1>

			</div>
			<div class="w3layouts_header_right">
			    
			</div>
			<br><br>
			<ul class="agile_forms">
				<li><a class="active" href="http://localhost/sms1/index1.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In now</a> </li>
 			<li><a class="active" href="studresultviewer.php"><i class="fa fa-sign-in" aria-hidden="true"></i> View Results</a> </li>
 			<li><a class="active" href="http://localhost/sms1/noticeboard/studnb.php"><i class="fa fa-sign-in" aria-hidden="true"></i> NoticeBoard</a> </li>
			</ul>
			
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.html" class="effect-3">Home</a></li>
						<li><a href="#about" class="effect-3 scroll">About Us</a></li>
						<li><a href="#services" class="effect-3 scroll">Services</a></li>
						<li><a href="#team" class="effect-3 scroll">Our motivation</a></li>
						<li><a href="#mail" class="effect-3 scroll">Mail Us</a></li>
					</ul>
				</nav>

			</div>
		</nav>	
		<div class="clearfix"> </div> 
	</div>
</div>
<!-- banner -->
<div class="about-bottom">
	<div class="col-md-6 w3l_about_bottom_left">
		<div class="video-grid-single-page-agileits">
			<div data-video="oQjERCPLfuo" id="video"> <img src="images/banner2.jpg" alt="" class="img-responsive" /> </div>
		</div>
		<div class="w3l_about_bottom_left_video">
			<h4>watch our video</h4>
		</div>
	</div>

	<div class="modal-fade">
 	<div class="col-md-6 w3l_about_bottom_right">
 		<div style="border: 2px solid tomato;background: Lightgreen; padding: 10px;">
 			<div align="center" style="border: 3px solid tomato;font-size: 22px;padding: 10px;background: navy;"><a href="http://localhost/sms1/CB/chatbot.php" style="border: 2px solid black; background: yellow;border-radius: 10px;">  || Any subject related Doubts ?? || </a>  </div>
 			<br><br>
 			<div align="center">
 			<button style="background: gray;border: 3px solid navy; font-size: 30px;border-radius: 20px;" onclick="window.location.href='http://localhost/sms1/CB/chatbot.php';" >Chat with Experts</button>
 			</div>
 			<br>
 			<div align="center"> <img src="images\cbicon.jpg" height="100" width="100" style="border: 6px solid yellow; border-radius: 20px;" onclick="window.location.href='http://localhost/sms1/CB/chatbot.php';" > </div>
 		<a style="font-size: 21px; font-family:consolas ; text-align: right; color: black;" href="http://localhost/sms1/CB/chatbot.php"> Solve Your subject related queries from expert faculty <u> click here </u> </a>
 	</div>
 	</div>
	</div>
	
<!-- //banner -->
<!-- Modal1 
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
	<div class="modal-dialog">
	
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				
				<div class="signin-form profile">
					<h3 class="agileinfo_sign">Sign In</h3>	
					<div class="login-form">
						<form  method="post">
							<input type="text" name="st_username" placeholder="Enter Your Username" required="">
							<input type="password" name="st_password" placeholder="Password" >
							<div class="tp">
								<input type="submit" value="Sign In" name="student_signin">
							</div>
						</form>
					</div>
					<div class="login-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
					<p><a href="#" data-toggle="modal" data-target="#myModal3" > Don't have an account?</a></p>
				</div>
				
			</div>
		</div>
	</div>
</div>
//Modal1 -->	
	
	
<!-- Modal2 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			<!--
				<div class="signin-form profile">
					<h3 class="agileinfo_sign">Sign Up</h3>	
					<div class="login-form">
						<form method="post" >
						   <input type="text" name="username" placeholder="Username" required="">
							<input type="email" name="email" placeholder="Email" required="">
							<input type="password" name="password" placeholder="Password" required="">
							<select class="form-control" name="grade" required="">
							
								<option class="select_grade">
								Select Class
								</option>
							
								
								
							</select>
							<input type="submit" value="Sign Up" name="student_signup">
						</form>
					</div>
					<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
				</div>
				-->
			</div>
		</div>
	</div>
</div>
<div class="clearfix"> </div> 
<!-- //Modal2 -->	
<!-- about -->
<div class="about-top" id="about">
	<div class="container">
		<h3 class="w3l-title">About Us</h3>
		<div class="w3layouts_header">
			<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
		</div>
		<div class="col-md-7 wthree-services-bottom-grids">
			<div class="wthree-services-left">
				<img src="images/ab1.jpg" alt="">
			</div>
			<div class="wthree-services-right">
				<img src="images/Maharashtra primary school.png" width="500" height="500">
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="col-md-5 wthree-about-grids">
			<h4>Welcome to Maharashtra Primary School. </h4>
			<a href="#" class="trend-w3l" data-toggle="modal" data-target="#myModal"><span>Read More</span></a>
			<a href="#mail" class="trend-w3l scroll"><span>Get In Touch</span></a>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>


<!-- modal -->
<div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div> 
			<div class="modal-body">
				<img src="images/Maharashtra primary school campus1.png" alt=""> 
				<p>व्यक्तिमत्व घडविणे व बुद्धिमत्ता वाढविणे हे ध्येय समोर ठेउन विद्यार्थ्यांची सर्वांगीण प्रगती साधणे, त्यांच्या अंगी असलेल्या कलागुणांना यथोचित वाव देऊन शैक्षणिक दृष्ट्या त्यांची प्रगती साधणे, भविष्यात तो एक जबाबदार, परिपूर्ण आणि अनुकरणीय नागरिक होईल या करिता सतत प्रयत्नशील राहणे. </p>
			</div> 
		</div>
	</div>
</div>
<!-- //modal --> 
<!-- //about -->
<!--stats-->
<!--
<div class="stats" id="stats">
	<div class="container">
		<div class="stats-info">
			<div class="col-md-3 col-xs-3 stats-grid slideanim">
				<i class="fa fa-users" aria-hidden="true"></i>
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='12760' data-delay='.5' data-increment="1">12760</div>
				
				<h4 class="stats-info">FOREIGN FOLLOWERS</h4>
			</div>
			<div class="col-md-3 col-xs-3 stats-grid slideanim">
				<i class="fa fa-book" aria-hidden="true"></i>
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='31000' data-delay='.5' data-increment="1">31000</div>
				
				<h4 class="stats-info">CLASSES COMPLETE</h4>
			</div>
			<div class="col-md-3 col-xs-3 stats-grid slideanim">
				<i class="fa fa-trophy" aria-hidden="true"></i>
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='79000' data-delay='.5' data-increment="10">79000</div>
				
				<h4 class="stats-info">STUDENTS ENROLLED</h4>
			</div>
			<div class="col-md-3 col-xs-3 stats-grid slideanim">
					<i class="fa fa-user" aria-hidden="true"></i>
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='600' data-delay='.5' data-increment="1">600</div>
			
				<h4 class="stats-info">CERTIFIED TEACHERS</h4>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
-->
<!--//stats-->
<!-- services -->
<div class="services" id="services" >
	<div class="container">  
		<h3 class="w3l-title">Our Services</h3>
		<div class="w3layouts_header">
			<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
		</div>
		<div class="services-w3ls-row">
			<div class="col-xs-4 services-grid agileits-w3layouts">
				<span class="fa fa-graduation-cap" aria-hidden="true"></span>
				<h6>01</h6>
				<h5>Scholarship Facility</h5>
				<p></p>
			</div>
			<div class="col-xs-4 services-grid agileits-w3layouts">
				<h6>02</h6>
				<h5>Skilled Lecturers</h5>
				<p></p>
				<span class="fa fa-user-o grid-w3l-ser" aria-hidden="true"></span>
			</div>
			<div class="col-xs-4 services-grid agileits-w3layouts">
				<span class="fa fa-book" aria-hidden="true"></span>
				<h6>03</h6>
				<h5>Mega Book Library</h5>
				<p></p>
			</div> 

			<div class="clearfix"> </div>
		</div>  
	</div>
</div>
<!-- //services -->

<!-- team -->
<div class="team-w3l" id="team">
	<div class="container">
		<h3 class="w3l-title">Our Founders & Mentors </h3>
		<div class="w3layouts_header">
			<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
		</div>
		<div class="team-w3l-grid">
			<div class="col-md-4 col-xs-4 about-poleft t1">
				<div class="about_img"><img src="images/Dr-Keshav-Baliram-Hedgewar.jpg" alt="">
				  <h5>Dr. K.B. Hedgewar</h5>
				  <div class="about_opa">
					<p>Founder</p>
					<ul class="fb_icons2 text-center">
						<li>क्रांतिकारी </li>
					</ul>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 about-poleft t2">
				<div class="about_img"><img src="images/mohan bhagwat.jpg" alt="">
				  <h5>Mohan Bhagwat</h5>
				  <div class="about_opa">
					<p>Mentor & Motivator</p>
					<ul class="fb_icons2 text-center">
						<li>सरसंघचालक</li>
					</ul>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 about-poleft t3">
				<div class="about_img"><img src="images/nitin-gadkari1.jpg" alt="">
				  <h5>Nitin Gadkari</h5>
				  <div class="about_opa">
					<p>Mentor & Motivator</p>
					<ul class="fb_icons2 text-center">
						<li>मंत्री,भूपृष्ठ वाहतूक व जहाज मंत्रालय,भारत सरकार</li>
					</ul>
				  </div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //team -->
<!-- contact -->
<div id="mail" class="contact">
	<div class="container">
		<h3 class="w3l-title">Mail Us</h3>
		<div class="w3layouts_header">
			<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
		</div>
		<div class="agile_banner_bottom_grids">
			<div class="col-md-4 col-xs-4 w3_agile_contact_grid">
				<div class="agile_contact_grid_left">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
				</div>
				<div class="agile_contact_grid_right agilew3_contact">
					<h4>Address</h4>
					<p>Jatherpeth,</p>
					<p>Akola -444005.</p>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 w3_agile_contact_grid">
				<div class="agile_contact_grid_left agileits_w3layouts_left">
					<i class="fa fa-mobile" aria-hidden="true"></i>
				</div>
				<div class="agile_contact_grid_right agileits_w3layouts_right">
					<h4>Phone</h4>
					<p> +91-8208831065 </p>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 w3_agile_contact_grid">
				<div class="agile_contact_grid_left agileits_w3layouts_left1">
					 <i class="fa fa-envelope-o" aria-hidden="true"></i>
				</div>
				<div class="agile_contact_grid_right agileits_w3layouts_right1">
					<h4>Email</h4>
					<p><a href="mailto:asarkarshreyas@gmail.com">asarkarshreyas@gmail.com</a>
						<span><a href="mailto:asarkarshreyas@gmail.com">asarkarshreyas@gmail.com</a></span></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	<!--
		<div class="w3l-form">
			<h3 class="w3l-title">Get In Touch</h3>
			<div class="contact-grid1">
				<div class="contact-top1">
					<form action="#" method="post">
						<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<label>Name*</label>
							<input type="text" name="Name" placeholder="Name" required="">
							<label>E-mail*</label>
							<input type="email" name="E-mail" placeholder="E-mail" required="">
						</div>
						<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<label>Phone Number*</label>
							<input type="text" name="number" placeholder="Phone Number" required="">
							<label>Subject*</label>
							<input type="text" name="subject" placeholder="Subject" required="">
						</div>
						<div class="form-group">
							<label>Message*</label>
							<textarea placeholder name="Message" required=""></textarea>
						</div>
							<input type="submit" value="Send">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
-->
<!-- <div id="map"></div>-->
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="wthree_footer_grid_left">
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
				<h4>About Us</h4>
				<p>स्वागत …. अखंड ज्ञान यज्ञात
विद्यालय हे एक मंदिर सुंदर प्रयाग जणू हे प्रज्ञेचे !
ज्ञानदिवाळी शोभा उजळी प्रसन्न गृह हे विद्येचे !!</p>
			</div>
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
				<h4>Navigation</h4>
				<ul>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="index.html">Home</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#about" class="scroll">About Us</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#services" class="scroll">Services</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#team" class="scroll">Team</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#gallery" class="scroll">Gallery</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#mail" class="scroll">Mail Us</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1 w3l-3">
				<h4>Others</h4>
				<ul>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Media</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Mobile Apps</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Privacy Policy</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1 wthree_footer_grid_right1">
				<h4>Contact Us</h4>
				<ul>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="asarkarshreyas@gmail.com">asarkarshreyas@gmail.com</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+(91)8208831065</li>
					<li><i class="fa fa-fax" aria-hidden="true"></i>+91-8275729180</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="w3layouts_copy_right">
	<div class="container">
		<p>© 2019 Maharashtra Primary School. All rights reserved | Design by <a href="#">COETA</a></p>
	</div>
</div>
<!-- //footer -->

<!-- js-scripts -->			
<!-- js-files -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js-files -->
<!-- Baneer-js -->
<!--
 Map-JavaScript 
			<div id="map"></div>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: 20.71378, lng: 77.013276};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 20, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_8M43ohV4-oTB_aGB9teCW8KWC0FWN-A &callback=initMap">
    </script>
-->
  </body>
</html>
		<!-- //Map-JavaScript -->

<!-- smooth scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->
<!-- stats -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //stats -->
<!-- moving-top scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //moving-top scrolling -->
<!-- gallery popup -->
<script src="js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
jQuery(function($) {
	$(".swipebox").swipebox();
});
</script>
<!-- //gallery popup -->
<!--/script-->
	<script src="js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
			</script>
<!-- //Baneer-js -->
<!-- Calendar -->
<script src="js/jquery-ui.js"></script>
	<script>
	  $(function() {
		$( "#datepicker" ).datepicker();
	 });
	</script>
<!-- //Calendar -->	

<!-- //js-scripts -->


<button class="open-button" onclick="openForm()"> Chat with us regarding non academics </button>

<div class="chat-popup" id="myForm">
  <form id="chatLog" class="form-container">
    <h1>!!--Chat--!!</h1>

     <div>Message : </div>
     <input id="userBox" type="text" onkeydown="if (event.keyCode == 13) {talk()}"><br>

    
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>



</body>
</html>