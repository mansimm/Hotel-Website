<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Hotel Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css_file.css">
  <script src="myScript.js"></script> 
  <script type= "text/javascript" src="countries.js"></script>

<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">-->
  <style>

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">  Logo
	<!--<img src="imgs/BlueLotusMassageLogo.png" alt="logo" style="width:100%; height:100%;">-->
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">OVERVIEW</a></li>
        <li><a href="#food">RESTAURANTS & BAR</a></li>
        <li><a href="#rooms">ROOMS</a></li>
        <li><a href="#meetings">MEETINGS & EVENTS</a></li>
        <!--<li><a href="#pricing">PRICING</a></li>-->
        <li><a href="#reviews">REVIEWS</a></li>
        <li><a href="#contact">CONTACT</a></li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Portflio</a></li>
            <li><a href="#attractions">Nearby Attractions</a></li>
            <li><a href="#">Help</a></li> 
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#login-modal" data-toggle="modal" data-target="#login-modal"> Login Here</a></li>
            <li><a href="#signup-modal" data-toggle="modal" data-target="#signup-modal"> Sign Up Here</a></li>
            <li><a href="#"> <div id="login"><button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#login-modal"style="margin:10px">Login Here</button></div></a></li>
            <li><a href="#"><div id="signup"><button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#signup-modal"style="margin:10px">Sign Up Here</button></div></a></li>
          </ul>
        </li>

        <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>-->
      </ul>
    </div>
  </div>
</nav>
<!--
<div class="jumbotron text-center">
  <h1>Minakshi Palace</h1> 
  <p>We specialize in blablabla</p> 
  <center>
  <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
  <center>
</div>
-->

<!-- new created -- Container home-->
<div class="">
<div class="container1">
  <img src="imgs/pexels-alexy-almond-3756523.jpg" alt="Notebook" style="width:100%; height:100%; allign:center">
  <div class="row">
  <div class="content1">
	  <center>
		  <h1>Minakshi Palace</h1>
		  <p>We specialize in blablabla</p> 
		  
		  <form id="subscribe" action="subscribe.php" method="post">
		    <div class="input-group">
		      <input type="email" class="form-control" size="50" placeholder="Search" required>
		      <div class="input-group-btn">
			<button type="submit" class="btn btn-danger" ><span class="glyphicon glyphicon-search"></span> Search</button>
		      </div>
		    </div>
		  </form></br>

		  <!--
		  <div id="login"><button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#login-modal"style="margin:10px">Login Here</button></div>
                  <div id="signup"><button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#signup-modal"style="margin:10px">Sign Up Here</button></div>
                  -->
	  </center>

	  
  <!--  Login  -->
<div id="login-modal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3>Welcome to Minakshi Palace</h3>
			</div>
			<form id="loginForm" name="login" role="form">
				<div class="modal-body">
					<p>Sign in to your account</p>				
					<div class="form-group">
						<label for="email"><span class="glyphicon glyphicon-user"></span> Email</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label for="name"><span class="glyphicon glyphicon-lock"></span> Password</label>
						<input type="password" name="pass" class="form-control">
					</div>	
				        <input type="checkbox" id="vehicle1" name="vehicle1" value="rememberme">
					<label for="vehicle1"> Remember me</label><br>
				</div>
				<div class="modal-footer">		
				    <input type="submit" class="btn btn-success pull-left"id="submit"value="Login">			
				    <button type="button" class="btn btn-danger btn-default pull-left" data-dismiss="modal">Close</button>
		                    <p><a href="#">Forgot password?</a><br>
				    <p style="color:black" data-toggle="modal" data-target="#signup-modal" style="margin:10px" data-dismiss="modal">  
    				    <a href="#">Sign Up?</a></p>				
				</div>
			</form>
		</div>
	</div>
</div>
  <!-- login  end-->

  <!----signup start-->
<div id="signup-modal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3>Join Minakshi Palace</h3>
                                <div id="msg"></div>
			</div>
			<form id="signupForm" name="signup" role="form">
				<div class="modal-body">
				    <div class="form-group">
				      <label for="fname"><span class="glyphicon glyphicon-user"></span> First Name</label>
				      <input type="fname" class="form-control" id="name" placeholder="Enter First Name">
				    </div>
				    <div class="form-group">
				      <label for="lname"><span class="glyphicon glyphicon-user"></span> Last Name</label>
				      <input type="lname" class="form-control" id="name" placeholder="Enter Last Name">
				    </div>	
					<div class="form-group">
					    <label for="checkin">Country/Region</label><br>
					    <select class="form-control" id="country" name="country"></select>
					</div>	
					<div class="form-group">
					    <label for="checkin">State</label><br>
                                            <select class="form-control" name="state" id="state"></select>
					</div>
				    <div class="form-group">
				      <label for="zipcode"><span class="glyphicon glyphicon-user"></span> Zip/Postal Code</label>
				      <input type="zipcode" class="form-control" id="zipcode" placeholder="Enter Zip/Postal Code">
				    </div>		
					<div class="form-group">
						<label for="email"><span class="glyphicon glyphicon-envelope"></span> Email</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label for="pass"><span class="glyphicon glyphicon-lock"></span> Password</label>
						<input type="password" name="pass" class="form-control">
					</div>	
					<div class="form-group">
						<label for="con_pass"><span class="glyphicon glyphicon-lock"></span> Confirm Password</label>
						<input type="password" name="pass" class="form-control">
					</div>
 					
					<input type="checkbox" id="vehicle1" name="vehicle1" value="rememberme">
					<label for="vehicle1"> Remember me</label><br>
					<input type="checkbox" id="vehicle1" name="vehicle1" value="rememberme">
					<label for="vehicle1"> I would like to receive account updates, program news & offers via email and direct mail.</label><br>
					<input type="checkbox" id="vehicle1" name="vehicle1" value="rememberme">
					<label for="vehicle1"> I would like to receive exclusive offers from select third parties.</label><br>
				        <input type="checkbox" id="vehicle1" name="vehicle1" value="rememberme">
					<label for="vehicle1"> By signing up, I agree to Minakshi Palace's Terms of Use and Minakshi Palace Terms and Conditions. I also acknowledge Minakshi Palace's Privacy Statement located in the Privacy Center.</label><br>

				</div>
				<div class="modal-footer">		
				    <input type="submit" class="btn btn-success pull-left"id="signupsubmit"value="Join Now">			
				    <button type="button" class="btn btn-danger btn-default pull-left" data-dismiss="modal">Cancel</button>
                                    <p style="color:black" data-toggle="modal" data-target="#login-modal" style="margin:10px" data-dismiss="modal">Already have account  <a href="#">Sign In?</a>			
				</div>
			</form>
		</div>
	</div>
</div>
  <!--signup end-->

















	<center>
		  <h1>Welcome</h1>
		  <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>

  <div class="container bg-2">
     <div class="row">
        <h3>Check Availability</h3>
     </div>
     <form>
     <div class="row">
     <div class="col-sm-3"> 
		<div class="form-group">
		    <label for="checkin">Check-in:</label>
		    <input type="date" class="form-control" id="checkin">
		</div>
     </div>
     <div class="col-sm-3"> 
		<div class="form-group">
		    <label for="checkout">Check-out:</label>
		    <input type="date" class="form-control" id="checkout">
		</div>
     </div>
     <div class="col-sm-2"> 
		<div class="form-group">
		    <label for="checkin">Occupacy</label>
		    <input type="number" class="form-control" id="checkin">
		</div>
     </div>
     <div class="col-sm-2"> 
		<div class="form-group">
		    <label for="checkin">Special Rates:</label>
		    <select class="form-control" name="rates" id="rates">
			  <option value="Low Rate">Low Rate</option>
			  <option value="Medium Rate">Medium Rate</option>
			  <option value="High Rate">High Rate</option>

		   </select>
		</div>
     </div>
     <div class="col-sm-2"> 
		<div class="form-group">
		    <label for="checkin">  </label></br>
		    <input type="button" value="Check Availability" class="btn btn-danger" id="checkin">
		</div>
      </div>
      </div>
      </form>
  </div>
  <center>



  </div><!--end of content on img --></div>
</div>
</div>
<!-- home end-->

 





<!--

<div class="container1">
  <img src="pexels-alexy-almond-3756523.jpg" alt="Notebook" style="width:100%; height:10%; allign:center">
  <div class="content1">
    <h1>Heading</h1>
    <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
<p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p><p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
  </div>
</div>
-->

<!-- ##################################################   About   ###################################------------>
<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8 slideanim">
      <h2>Overview </h2><br>
      <h4> Relax at our serene resort hotel near Cavelossim Beach</h4><br>
      <p>Located 45 minutes from Goa International Airport (GOI) and featuring brightly colored architecture and lush gardens, the Radisson Blu Resort Goa Cavelossim Beach creates an atmosphere that invites relaxation. Just a 10-minute walk from the Arabian Sea, our hotel makes your Cavelossim Beach getaway a breeze.</p>
</p>Our resort offers plenty of on-site water fun with two sparkling pools, including one just for kids. For more personalized attention while you unwind, take advantage of wellness treatments at Sohum Spa. After a day in the water, refuel at our three on-site restaurants or bar before heading to one of our 132 rooms and suites for the night. With nearly 4,000 square meters of meeting space, our hotel is also ideal for hosting an exotic destination wedding or an international conference.</p>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <div class="row">
        <!--<span class="glyphicon glyphicon-signal logo"></span>-->
        <img src="imgs/hotel.jpeg" alt="Chicago" style="width:100%; height:50%; margine:10px; padding:10px">
      </div>
<!--
      <div class="row">
        <img src="pexels-alexy-almond-3756523.jpg" alt="Chicago" style="width:100%; height:50%; margine:10px; padding:10px">
      </div>-->
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8 slideanim">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>



<!-- ########### added ###################   Restourant   ###################################------------>
<!-- Carousal added -->
<div id="food" class="container-fluid">
  <h2 style="text-align:center">RESTAURANTS AND BAR</h2>
  <p>Treat yourself to delicious international and Indian cuisine at any of our three on-site restaurants, Upper Deck, Lucio, and Sagres. Enjoy an abundance of buffets and à la carte specialties that feature traditional Portuguese-inspired dishes. In the evening, enjoy live music and handcrafted cocktails at our resort’s casual bar.</p>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
        <center><img src="imgs/rest4.jpeg" alt="Los Angeles" style="width:50%; height:50%"></center>
        <div class="carousel-caption">
          <h3>Restourant</h3>
          <p>Delicious international and Indian cuisine!</p>
        </div>
      </div>

      <div class="item">
        <center><img src="imgs/bar1.jpeg" alt="Chicago" style="width:50%; height:50%"></center>
        <div class="carousel-caption">
          <h3>Bar</h3>
          <p>Enjoy live music and handcrafted cocktails!</p>
        </div>
      </div>
    
      <div class="item">
        <center><img src="imgs/bar2.jpeg" alt="New York" style="width:50%; height:50%"></center>
        <div class="carousel-caption">
          <h3>Aesthetic ambience</h3>
          <p>Enjoy Yourself!</p>
        </div>
      </div>
 
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>






<!-- ##################################################   menue   ###################################------------>
<!-- Container -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">Menue Card</h3>
    <p1 class="text-center">Remember to book your tables!<br> Our speciality</p1>
    <ul class="list-group">
      <li class="list-group-item">1. Goan Cuisine  <span class="label label-danger">Available Everyday!</span><span class="badge">starting from 500/-</span></li>
      <li class="list-group-item">2. Seafoods  <span class="label label-danger">Our Speciality!</span><span class="badge">starting from 300/-</span></li> 
      <li class="list-group-item">3. Vegan Cuisine  <span class="label label-danger">Only Monday to Friday</span><span class="badge">starting from 300/-</span></li> 
      <li class="list-group-item">4. South Indian Cuisine  <span class="label label-danger">Only Monday to Friday</span><span class="badge">starting from 300/-</span></li> 
      <li class="list-group-item">5. North Indian Cuisine <span class="badge">starting from 300/-</span></li> 
      <li class="list-group-item">6. Italian Indian Cuisine <span class="badge">starting from 300/-</span></li> 
      <li class="list-group-item">7. Mexican Indian Cuisine <span class="badge">starting from 300/-</span></li> 
      <li class="list-group-item">8. Chinese Cuisine <span class="badge">starting from 300/-</span></li> 
    </ul>
    
    <div class="row text-center">

      <div class="col-sm-4">
        <div class="thumbnail slideanim">
          <img src="imgs/eggdish.jpeg" alt="Paris" width="400" height="300">
          <p><strong>Starters</strong></p>
          <p>Friday 27 November 2015</p>
          <button class="btn1" data-toggle="modal" data-target="#myModal">View</button>
        </div>
      </div>

      <div class="col-sm-4 ">
        <div class="thumbnail slideanim">
          <img src="imgs/main2.jpeg" alt="New York" width="400" height="300">
          <p><strong>Main Course</strong></p>
          <p>Saturday 28 November 2015</p>
          <button class="btn1" data-toggle="modal" data-target="#myModal">View</button>
        </div>
      </div>

      <div class="col-sm-4 ">
        <div class="thumbnail slideanim">
          <img src="imgs/cake2.jpeg" alt="San Francisco" width="400" height="300">
          <p><strong>Desserts</strong></p>
          <p>Sunday 29 November 2015</p>
          <button class="btn1" data-toggle="modal" data-target="#myModal">View</button>
        </div>
      </div>

    </div>
        <!--Book table-->
	<center><button class="btn btn-danger btn-alert" style="margin:20px" data-toggle="modal" data-target="#myModal" ><h1>Book Table</h1></button></center>

  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="h41"><span class="glyphicon glyphicon-lock"></span> Table Booking</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-user"></span> Number of Guests</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-envelope"></span> Send To</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="number"><span class="glyphicon glyphicon-phone"></span> Mobile Number</label>
              <input type="number" class="form-control" id="number" placeholder="Enter Mobile Number">
            </div>
              <button type="submit" class="btn btn-block btn-success">Book Table 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>




	




<!-- Container (Portfolio Section) -->
<!-- ##################################################   room cards   ###################################------------>

<div id="rooms" class="container-fluid text-center">
<hr class="">
	<div class="row">
    <h2 class="text-center">Rooms</h2>
	<h3> Our Cavelossim Beach hotel rooms overlook the gardens and pool</h3>
	<p>Each of the 132 colorful hotel rooms and suites at the Minakshi Palace Resort Goa Cavelossim Beach features serene views of our manicured gardens and sparkling pool. After a day at the beach, you can wash away the sand and salt under the rain shower in your modern bathroom, and then relax on a plush mattress while enjoying a meal from room service. Watch your favorite shows on the flat-screen TV or upload photos using free Wi-Fi. Upgrade to a suite and enjoy the extra space in your separate living room, ideal for entertaining friends.
</p>
</div>
	<div id="" class="container-fluid bg-1">
		<div class="MultiCarousel" data-items="1,3,3,3" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
			    <div class="row text-center slideanim">

			     <div class="col-sm-4 item">
				<div class="thumbnail">
				  <img src="imgs/bed1.webp" alt="Paris" width="400" height="300">
				  <p><strong>Superior Room</strong></p>
				  <p><span class="glyphicon glyphicon-move" aria-hidden="true"></span>size: 344 ft² max. | 
				     <span class="glyphicon glyphicon-user" aria-hidden="true"></span>guests: 3 adults</p>

				     <div class="row">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
					</br></br>
				      </div>
				  <button class="btn1" data-toggle="modal" data-target="#myModal">Check Rates</button>
				</div>
			      </div>

			     <div class="col-sm-4 item">
				<div class="thumbnail">
				  <img src="imgs/bed2.jpeg" alt="Paris" width="400" height="300">
				  <p><strong>Deluxe Room</strong></p>
				  <p><span class="glyphicon glyphicon-move" aria-hidden="true"></span>size: 367 ft² max. | 
				     <span class="glyphicon glyphicon-user" aria-hidden="true"></span>guests: 3 adults</p>

				     <div class="row">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
					</br></br>
				      </div>

				  <button class="btn1" data-toggle="modal" data-target="#myModal">Check Rates</button>
				</div>
			      </div>

			     <div class="col-sm-4 item">
				<div class="thumbnail">
				  <img src="imgs/bed3.webp" alt="Paris" width="400" height="300">
				  <p><strong>Business Class Room</strong></p>
				  <p><span class="glyphicon glyphicon-move" aria-hidden="true"></span>size: 367 ft² max. | 
				     <span class="glyphicon glyphicon-user" aria-hidden="true"></span>guests: 3 adults</p>

				     <div class="row">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
					</br></br>
				      </div>
				  <button class="btn1" data-toggle="modal" data-target="#myModal">Check Rates</button>
				</div>
			      </div>

			     <div class="col-sm-4 item">
				<div class="thumbnail">
				  <img src="imgs/bed6.webp" alt="Paris" width="400" height="300">
				  <p><strong>Suite</strong></p>
				  <p><span class="glyphicon glyphicon-move" aria-hidden="true"></span>size: 656 ft² max. | 
				     <span class="glyphicon glyphicon-user" aria-hidden="true"></span>guests: 3 adults</p>

				     <div class="row">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
					</br></br>
				      </div>
				  <button class="btn1" data-toggle="modal" data-target="#myModal">Check Rates</button>
				</div>
			      </div>

			     <div class="col-sm-4 item">
				<div class="thumbnail">
				  <img src="imgs/bed5.webp" alt="Paris" width="400" height="300">
				  <p><strong>One-bedroom Suite</strong></p>
				  <p><span class="glyphicon glyphicon-move" aria-hidden="true"></span>size: 742 ft² max. | 
				     <span class="glyphicon glyphicon-user" aria-hidden="true"></span>guests: 3 adults</p>

				     <div class="row">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
					</br></br>
				      </div>
				  <button class="btn1" data-toggle="modal" data-target="#myModal">Check Rates</button>
				</div>
			      </div>

			     

				<!--
				<div class="item">
				    <div class="pad15">
				        <p class="lead">Multi Item Carousel</p>
				        <p>₹ 1</p>
				        <p>₹ 6000</p>
				        <p>50% off</p>
				    </div>
				</div>
				
				  -->
				</div>
				
            </div>

            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
	               
        </div>
	<!--Book now-->
	<center><button class="btn btn-danger btn-alert"data-toggle="modal" data-target="#bookroom"><h1>Book Now</h1></button></center>
	</div>
</div>
	<!-- Modal -->
	  <div class="modal fade" id="bookroom" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">×</button>
			  <h4 class="h41"><span class="glyphicon glyphicon-lock"></span> Room Booking</h4>
			</div>
			<div class="modal-body">
			  <form role="form">
			    <div class="form-group">
			      <label for="psw"><span class="glyphicon glyphicon-user"></span> Number of Rooms</label>
			      <input type="number" class="form-control" id="psw" placeholder="How many?">
			    </div>
			    <div class="form-group">
			      <label for="psw"><span class="glyphicon glyphicon-user"></span> Type of Rooms</label>
			      <select class="form-control" name="rates" id="rates">
				  <option value="Low Rate">Superior Room</option>
				  <option value="Medium Rate">Deluxe Room</option>
				  <option value="High Rate">Business Class Room</option>
				  <option value="High Rate">Suite</option>
				  <option value="High Rate">One-bedroom Suite</option>
			      </select>
			    </div>
			    <div class="form-group">
			      <label for="usrname"><span class="glyphicon glyphicon-envelope"></span> Send To</label>
			      <input type="text" class="form-control" id="usrname" placeholder="Enter email">
			    </div>
			    <div class="form-group">
			      <label for="number"><span class="glyphicon glyphicon-phone"></span> Mobile Number</label>
			      <input type="text" class="form-control" id="number" placeholder="Enter Mobile Number">
			    </div>
			      <button type="submit" class="btn btn-block btn-success">Book Room 
				<span class="glyphicon glyphicon-ok"></span>
			      </button>
			  </form>
			</div>
			<div class="modal-footer">
			  <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
			    <span class="glyphicon glyphicon-remove"></span> Cancel
			  </button>
			  <p>Need <a href="#">help?</a></p>
			</div>
	      </div>
	    </div>
	  </div>



<!-- ##################################################   Services   ###################################------------>
<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-off logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="Welcome to Bar!">
      <img src="imgs/icons8-bar-100.png" style="height:15%; width:15%;">
      </a>
      <h4>BAR</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-heart logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="BREAKFAST BUFFET">
      <img src="imgs/icons8-service-bell-100.png" style="height:15%; width:15%;">
      </a>
      <h4>BREAKFAST BUFFET</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-lock logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="COST AVAILABLE">
      <img src="imgs/icons8-cost-100.png" style="height:15%; width:15%;">
      </a>
      <h4>COST AVAILABLE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-leaf logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="DRY CLEANING">
      <img src="imgs/icons8-dry-100.png" style="height:15%; width:15%;">
      </a>
      <h4>DRY CLEANING</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-certificate logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="FITNESS CENTER">
      <img src="imgs/icons8-ez-curl-bar-100.png" style="height:15%; width:15%;">
      </a>
      <h4>FITNESS CENTER</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-wrench logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="EXPRESS CHECK-OUT">
      <img src="imgs/icons8-hotel-check-out-100.png" style="height:15%; width:15%;">
      </a>
      <h4 style="color:#303030;">EXPRESS CHECK-OUT</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div>




<!-- ##################################################  MEETINGS AND EVENTS    ###################################------------>
<!-- Container (About Section) --><!--
<div id="meetings" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>MEETINGS AND EVENTS </h2><br>
      <h4> Host a destination wedding at our Cavelossim Beach event venues</h4><br>
      <p>Located only 45 minutes from the GOI airport and a short walk from splendid local beaches, the Radisson Blu Resort Goa Cavelossim Beach offers a unique setting against the backdrop of Goan-Portuguese architecture. <span id="dots">...</span><span id="more">Ideal for elegant weddings and special occasions, our 850-square-meter covered banquet halls can be decorated to match your theme and color scheme, and our extensive lawns are able to accommodate up to 750 attendees. For a memorable event, coordinate with our skilled catering staff to create a personalized menu featuring cuisine from across the globe. If you're planning a multimedia presentation, our venue offers a range of audiovisual solutions.</p>
<a id ="myBtn" onclick="viewmoreFunction()"  >Read more</a>

      <br><button class="btn btn-default btn-lg">Request a Proposal</button>
      <h4>Meetings</h4><br>
      <p>Combining custom catering with elegant banquet halls and expansive outdoor space, our hotel is the perfect spot for hosting meetings and events in Goa.Our professional staff can assist you in planning the details—from guest arrivals and room bookings to a departure brunch—you can be confident that your gathering will be just as you envisioned.</p>

	<h4>Venue Options</h4>
	<ul>
		<li>850 square meters of covered banquet halls</li>
		<li>3,000 square meters of open lawn space, able to accommodate up to 750 guests</li>
		<li>Executive boardroom with 10 seats</li>
		<li>Mini-conference area</li>
		<li>Pre-function area</li>
	</ul>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <div class="row">
        <img src="pexels-alexy-almond-3756523.jpg" alt="Chicago" style="width:100%; height:50%; margine:10px; padding:10px">
      </div>
      <div class="row">
        <img src="pexels-alexy-almond-3756523.jpg" alt="Chicago" style="width:100%; height:50%; margine:10px; padding:10px">
      </div>
      <div class="row">
        <img src="pexels-alexy-almond-3756523.jpg" alt="Chicago" style="width:100%; height:50%; margine:10px; padding:10px">
      </div>
    </div>
  </div>
</div>-->

<div id="meetings" class="container-fluid">
    <center><h2>MEETINGS AND EVENTS </h2></center><br>
  <div class="row slideanim">
    <div class="col-sm-8">

      <h4> Host a destination wedding at our Cavelossim Beach event venues</h4><br>
      <p>Located only 45 minutes from the GOI airport and a short walk from splendid local beaches, the Minakshi Palace Resort Goa Cavelossim Beach offers a unique setting against the backdrop of Goan-Portuguese architecture. <span id="dots">...</span><span id="more">Ideal for elegant weddings and special occasions, our 850-square-meter covered banquet halls can be decorated to match your theme and color scheme, and our extensive lawns are able to accommodate up to 750 attendees. For a memorable event, coordinate with our skilled catering staff to create a personalized menu featuring cuisine from across the globe. If you're planning a multimedia presentation, our venue offers a range of audiovisual solutions.</p>
<a id ="myBtn" onclick="viewmoreFunction()"  >Read more</a>

      <br><button class="btn btn-default btn-lg">Request a Proposal</button>
      </div>
    <div class="col-sm-4">
        <img src="imgs/meeting4.jpeg" alt="Chicago" style="width:100%; height:50%; margine:10px; padding:10px">
    </div>
  </div>

<div class="row slideanim">
    <div class="col-sm-4">
              <img src="imgs/meeting2.jpeg" alt="Chicago" style="width:100%; height:50%; margine:10px; padding:10px">
    </div>
    <div class="col-sm-8">

      <h4>Meetings</h4><br>
      <p>Combining custom catering with elegant banquet halls and expansive outdoor space, our hotel is the perfect spot for hosting meetings and events in Goa.Our professional staff can assist you in planning the details—from guest arrivals and room bookings to a departure brunch—you can be confident that your gathering will be just as you envisioned.</p>
      </div>   
  </div>

<div class="row slideanim">
    <div class="col-sm-7">

<h4>Venue Options</h4>
	<ul>
		<li>850 square meters of covered banquet halls</li>
		<li>3,000 square meters of open lawn space, able to accommodate up to 750 guests</li>
		<li>Executive boardroom with 10 seats</li>
		<li>Mini-conference area</li>
		<li>Pre-function area</li>
	</ul>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
      </div>   
    <div class="col-sm-5">
              <img src="imgs/meeting1.jpeg" alt="Chicago" style="width:100%; height:50%; margine:10px; padding:10px">
    </div>
  </div>

<!-- ##################################################   Key Features   ###################################------------>
<!-- Container (Services Section) -->
<div id="features" class="container-fluid text-center">
  <h2>KEY FEATURES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-off logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="3 meeting room">
      <img src="imgs/icons8-meeting-room-100.png" style="height:15%; width:15%;">
      </a>
      <h4>3 meeting room</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-heart logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="750 person max. capacity">
      <img src="imgs/icons8-safety-collection-place-100.png" style="height:15%; width:15%;">
      </a>
      <h4>750 person max. capacity</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-lock logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="Catering service">
      <img src="imgs/icons8-service-bell-100.png" style="height:15%; width:15%;">
      </a>
      <h4>Catering service</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-leaf logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="Free Wi-Fi">
      <img src="imgs/icons8-wi-fi-100.png" style="height:15%; width:15%;">
      </a>
      <h4>Free Wi-Fi</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-certificate logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="Boardroom">
      <img src="imgs/icons8-financial-dynamic-presentation-100.png" style="height:15%; width:15%;">
      </a>
      <h4>Boardroom</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-wrench logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="Reception">
      <img src="imgs/icons8-reception-100.png" style="height:15%; width:15%;">
      </a>
      <h4 style="color:#303030;">Reception</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div>
<!-- ##################################################   Attractions   ###################################------------>
<!-- Container (Pricing Section) -->
<div id="attractions" class="container-fluid">
  <div class="text-center">
    <h2>Nearby Attractions</h2>
    <h4> From beaches to temples, discover things to do near Cavelossim Beach, Goa</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Colva Beach & Palolem Beach      </h1>
        </div>
        <div class="panel-body">
          <p>Enjoy the white sand and the sea in this idyllic, palm-fringed beach, popular with swimmers and sunbathers. The beach town is also known for street food and pubs.</p>

        </div>
        <div class="panel-footer">
          <h3>Distance</h3>
          <h4>7.6 mi / 12.23 km from the hotel</h4>
          <button class="btn btn-lg">Know More</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basilica of Bom Jesus</h1>
        </div>
        <div class="panel-body">
          <p>Designated a UNESCO World Heritage Site, this Baroque Roman Catholic basilica holds the relics of St. Francis Xavier.It is located in Old Goa, former capital of Portuguese India.</p>
        </div>
        <div class="panel-footer">
          <h3>Distance</h3>
          <h4>22.58 mi / 36.34 km from the hotel</h4>
          <button class="btn btn-lg">Know More</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Shri Mangeshi Temple</h1>
        </div>
        <div class="panel-body">
          <p>Explore this elaborate temple complex and learn about its Portuguese history. The main temple is dedicated to Bhagavan Manguesh, an incarnation of Shiva.</p>
        </div>
        <div class="panel-footer">
          <h3>Distance</h3>
          <h4> 18.67 mi / 30.05 km from the hotel </h4>
          <button class="btn btn-lg">Know More</button>
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- ##################################################   Reviews   ###################################------------>
<div id="reviews" class="container-fluid slideanim">
  <center><h2>What our customers say</h2></center>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>



<!-- ##################################################   Contact   ###################################------------>
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><img src="imgs/icons8-marker-100.png" style="height:4%; width:4%;"> Goa, India</p>
      <p><img src="imgs/icons8-phone-100.png" style="height:4%; width:4%;"> +00 1515151515</p>
      <p><img src="imgs/icons8-email-open-100.png" style="height:4%; width:4%;"> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <p><b>  Write us for any query or feedback</b></p>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Image of location/map -->
<!--<img src="imgs/map.jpg" class="w3-image w3-greyscale-min slideanim" style="width:100%">-->

<!-- footer -->
<footer class="container-fluid text-center bg-2">
  <div class="row">
    <div class="col-sm-4 slideanim">
      <h3>Contact Hotels</h3>
      <p><span class="glyphicon glyphicon-earphone"aria-hidden="true" style="margin:5px;"></span>+00 1515151515</p>
      <p><span class="glyphicon glyphicon-earphone"aria-hidden="true" style="margin:5px;"></span>+00 1515151515</p>
      <p><span class="glyphicon glyphicon-earphone"aria-hidden="true" style="margin:5px;"></span>+00 1515151515</p>
      <!--<p><img src="imgs/icons8-phone-100.png" style="height:4%; width:4%;"> +00 1515151515</p>-->
      <button class="btn btn-danger">Need Help?</button>
    </div>
    <div class="col-sm-4 slideanim">
      <h3>Follow us on social media </h3>
      <div class="row">
          <img src="imgs/twitter.webp"style="width:30px; height:30px; margin:5px;">
        <img src="imgs/linkedin.webp"style="width:30px; height:30px; margin:5px;">
        <img src="imgs/insta.webp"style="width:30px; height:30px; margin:5px;">
        <img src="imgs/facebook.webp"style="width:30px; height:30px; margin:5px;">
        <img src="imgs/whatsapp.webp"style="width:30px; height:30px; margin:5px;"></br></br>
      </div>
    </div>
    <div class="col-sm-4 slideanim">
      <h3>Never miss out on our most popular deals</h3><br>
      <center>
      <form>
            <div class="row">
	    <div class="input-group">
	      <input type="email" class="form-control" size="100%" placeholder="Email Address" style="" required>
	      <div class="input-group-btn">
		<button type="button" class="btn btn-danger">Subscribe</button>
	      </div>
	    </div>
            </div>
     </form>
     <center>
    </div>
  </div>
  <div class="row">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>The Minakshi Palace <a href="" title="Visit us">Welcome</a></p>
  </div>
</footer>

<script language="javascript">
	populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
	populateCountries("country2");
	populateCountries("country2");
</script>

</body>
</html>

