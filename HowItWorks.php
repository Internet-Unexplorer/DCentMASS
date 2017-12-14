<?php
/*
Author name: <Your name>;
E-mail ID:   <Your E-mail ID>
Date:        <dd-mm-yyyy>
*/
/////////////////////////////////////////////////////////
//include_once("variables.php");
//include_once("checkLoginStatus.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>How It Works</title>
    <?php include_once("stylesAndFont.php"); ?>
</head>
<body>
  	<!-- Left bar starts -->
     <div class="left-bar">
      <div class="image1">
        <img src="images/DM Logo - PNG.png" class="img-responsive">
      </div>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">DCent MASS</a></li>
        <li><a href="#">Our Services</a></li>
        <li><a href="#">Student Hub</a></li>
        <li><a href="#">Courses</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Media</a></li>
        <li><a href="#">Forum</a></li>
        <li><a href="#">Contact Us</a></li>
        <li style="border-bottom:  2px solid #06f;"><a href="#">FAQs</a></li>
      </ul>
     </div>
     <!-- Left bar ends -->
<!-- Mobile bar starts here -->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#" class="active">DCent MASS</a></li>
        <li><a href="#">Our Services</a></li>
        <li><a href="#">Student Hub</a></li>
        <li><a href="#">Courses</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Media</a></li>
        <li><a href="#">Forum</a></li>
        <li><a href="#">Contact Us</a></li>
        <li style="border-bottom:  2px solid #06f;"><a href="#">FAQs</a></li>
</div>

<span id="openNavID" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<!-- Mobile bar ends here -->
     <!-- Right bar starts -->
     <div class="right-bars">
     	<div class="righ-col-1">
     		<div class="rightMenuBlocks">Gallery</div>
     		<div class="rightMenuBlocks">Contact us</div>
     		<div class="rightMenuBlocks"></div>
     		<div class="rightMenuBlocks"></div>
     		<div class="rightMenuBlocks"></div>
     		<div class="rightMenuBlocks"></div>
     		<div class="rightMenuBlocks"></div>
     		<div class="rightMenuBlocks"></div>
     	</div>
     	<div class="righ-col-2">
     		<div class="rightMenuBlocks">About Us</div>
     		<div class="rightMenuBlocks active  ">How It Works</div>
     		<div class="rightMenuBlocks">Out team</div>
     		<div class="rightMenuBlocks">Why us?</div>
     		<div class="rightMenuBlocks">testimonials</div>
     		<div class="rightMenuBlocks">Partners</div>
     		<div class="rightMenuBlocks">Trainers profiles</div>
     		<div class="rightMenuBlocks">Branches</div>
     	</div>
     </div>
     
<div class="mainContainer">  <!-- DO NOT REMOVE THIS -->
  <div class="container-fluid">
<!-- MAIN CONTENT STARTS -->


<!-- WRITE MAIN CONTENT HERE -->

<div class="row">
<div class="col-md-12">

<h1> How It Works </h1>
</div>
</div>
       
<!-- MAIN CONTENT ENDS -->
	
  </div>
</div>


<?php include_once("script.php"); ?>
</body>
</html>
