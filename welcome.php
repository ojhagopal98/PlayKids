<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index1.css">
<link rel="stylesheet" href="index2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
    </style>
</head>
<body id="mypage">
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <!-- Navbar -->
<div class="w3-top">

  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Developers</a>
 <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Games<i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="maths.php" class="w3-bar-item w3-button">Maths Multplication Game</a>
      <a href="fruits/fruitsSlice.php" class="w3-bar-item w3-button">Fruits Slicing Game</a>
        
   
    </div>
  </div>
  
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
   
  </div>
 
 

 

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="pictures/games.png" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
 
</div>


<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>OUR DEVELOPERS</h2>
<p>Meet the Developers</p>

<div class="w3-row"><br>
<div class="w3-quarter">
  <img src="pictures/aman.jpeg" alt="Aman" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Amam Nailwal </h3>
  <p>Front End Developer</p>
</div>
<div class="w3-quarter">
  <img src="pictures/gopal.jpeg" alt="Gopal" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Gopal Ojha</h3>
  <p>Back End Developer,Support</p>
</div>



<div class="w3-quarter">
  <img src="pictures/umang.jpeg" alt="Umang" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Umang Mishra</h3>
  <p>Front End Developer</p>
</div>



</div>
</div>





<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
     
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i> ojhagopal.98@gmail.com</p>
        <p>amannailwal1@gmail.com</p>
        <p>umangdmishra1@gmail.com</p>
    </div>
    
  </div>
</div>

    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    <!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
 
  
 
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
 
  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>
</body>
</html>