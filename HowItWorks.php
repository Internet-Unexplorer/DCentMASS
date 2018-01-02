<?php
/*
Author name: Nadeem;
E-mail ID:  nadeem566sourceus@gmail.com
Date:        14/12/17
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
        <img src="images/dcentmass_png.png" class="img-fluid">
      </div>
      <ul>
      <!-- User class="activeLink" to make links active -->
      <li><a href="#"><i class="material-icons">home</i><span class="menuText">Home</span></a></li>
      <li class="activeLink"><a href="#"><i class="material-icons">language</i><span class="menuText">DCent MASS</span></a></li>
      <li><a href="#"><i class="material-icons">settings_applications</i><span class="menuText">Our Services</span></a></li>
      <li><a href="#"><i class="material-icons">group_work</i><span class="menuText">Student Hub</span></a></li>
      <li><a href="#"><i class="material-icons">library_books</i><span class="menuText">Courses</span></a></li>
      <li><a href="#"><i class="material-icons">event</i><span class="menuText">Events</span></a></li>
      <li><a href="#"><i class="material-icons">perm_media</i><span class="menuText">Media</span></a></li>
      <!-- <li><a href="#">Forum</a></li> -->
      <li><a href="#"><i class="material-icons">contacts</i><span class="menuText">Contact Us</span></a></li>
      <!-- <li style="border-bottom:  2px solid #06f;"><a href="#"></a></li> -->
      <!-- <li style="border-bottom: 2px solid #06f;"><a href="#">FAQs</a></li> -->
    </ul>
     </div>
     <!-- Left bar ends -->
<!-- Mobile bar starts here -->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
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

<span id="openNavID" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<!-- Mobile bar ends here -->
     <!-- Right bar starts -->
     <div class="right-bars">
     	<div class="righ-col-1">
       <a href="#"><div class="rightMenuBlocks"><span class="linkText">About Us</span></div></a>
       <a href="#"><div class="rightMenuBlocks  activeLink"><span class="linkText">How It Works</span></div></a>
       <a href="#"><div class="rightMenuBlocks"><span class="linkText">Out Team</span></div></a>
       <a href="#"><div class="rightMenuBlocks"><span class="linkText">Testimonials</span></div></a>
       <a href="#"><div class="rightMenuBlocks"><span class="linkText">Partners</span></div></a>
       <a href="#"><div class="rightMenuBlocks"><span class="linkText">Trainers Profiles</span></div></a>
       <a href="#"><div class="rightMenuBlocks"><span class="linkText">Branches</span></div></a>
       <a href="#"><div class="rightMenuBlocks"><span class="linkText">Gallery</span></div></a>
     	</div>
     	<div class="righ-col-2">
       <a href="#"><div class="rightMenuBlocks"><span class="linkText">Contact Us</span></div></a>
       <a href="#"><div class="rightMenuBlocks"><span class="linkText"></span></div></a>
       <a href="#"><div class="rightMenuBlocks"><span class="linkText"></span></div></a>
       <a href="#"><div class="rightMenuBlocks"><span class="linkText"></span></div></a>
       <a href="#"><div class="rightMenuBlocks"><span class="linkText"></span></div></a>
       <a href="#"><div class="rightMenuBlocks"><span class="linkText"></span></div></a>
       <a href="#"><div class="rightMenuBlocks"><span class="linkText"></span></div></a>
       <a href="#"><div class="rightMenuBlocks"><span class="linkText"></span></div></a>
     	</div>
     </div>

<div class="mainContainer" id="mainContainer">  <!-- DO NOT REMOVE THIS -->
  <div class="container-fluid">
<!-- MAIN CONTENT STARTS -->

<span class="bgtext">How It Works </span>
<!-- WRITE MAIN CONTENT HERE -->
<div class="row" id="box-search">
<div class="nad-thumbnail text-center">
    <!-- <img src="images/bghiw.jpeg" alt="image HIW" class="nad-bgimg1 img-fluid"> -->
    <!-- <div class="nad-caption">
        <h1>How It Works</h1>
    </div> -->
</div>
</div>
<div class="row">
<div class="col-md-12">
<span class="main-heading">How It Works</span>
<hr>
<img src="images/workflow.png" class="wfimg img-fluid"><br><hr>

<div class="container-fluid">

<div class="row">
<div class="col-md-6">
<div class="row">
<div class="col-md-4">
<img src="images/h1.png" class="img-fluid">
</div>
<div class="col-md-8">
<span class="para-heading">Your Learning Manager Gets in Touch with You</span>
<span class="para">Share your learning objectives and get oriented with our web and mobile platform. Talk to your personal learning 
manager to clarify your doubts.</span>
</div>
</div>
</div>
<div class="col-md-6">
<div class="row">
<div class="col-md-4">
<img src="images/h2.png" class="img-fluid">
</div>
<div class="col-md-8">
<span class="para-heading">Live Interactive Online Session with Your Instructor</span>
<span class="para">Live screensharing, step-by-step live demonstrations and live Q&A led by industry experts. 
Missed a class? Not an issue. We record the classes and upload them to your LMS.</span>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="row">
<div class="col-md-8">
<span class="para-heading">Access our Extensive Learning Repository</span>
<span class="para">We have pre-populated your learning platform with previous class recordings and presentations. 
You will have life time access to Edureka's Learning Repository.</span>
</div>
<div class="col-md-4">
<img src="images/h3.png" class="img-fluid">
</div>
</div>
</div>
<div class="col-md-6">
<div class="row">
<div class="col-md-8">
<span class="para-heading">It’s Not Just about the Classes, We Make Sure You Practice</span>
<span class="para">Quizzes & Assignments help you understand the concepts and solve problems Weekly Assignments & Quizzes are pre-loaded 
in your learning platform.</span>
</div>
<div class="col-md-4">
<img src="images/h4.png" class="img-fluid">
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="row">
<div class="col-md-4">
<img src="images/h5.png" class="img-fluid">
</div>
<div class="col-md-8">
<span class="para-heading">Have a problem? Our Support Ninjas Are There to Help You 24 X 7</span>
<span class="para">We have in-house expert Teaching Assistants to resolve all your queries. 
Reach out to us by raising a ticket from your learning platform. Edureka provides life time learning assistance.</span>
</div>
</div>
</div>
<div class="col-md-6">
<div class="row">
<div class="col-md-4">
<img src="images/h6.png" class="img-fluid">
</div>
<div class="col-md-8">
<span class="para-heading">Solve an Industry Live Use Case</span>
<span class="para">Projects developed by industry experts gives you a experience 
of the real-world problems you will be solving in the corporate world</span>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="row">
<div class="col-md-8">
<span class="para-heading">Engage & Interact within Edureka's Learner Community</span>
<span class="para">Your learning portal has a discussion forum for a lively interaction among learners across batches. 
Get life time access to the Learner communtiy and make the most out it</span>
</div>
<div class="col-md-4">
<img src="images/h7.png" class="img-fluid">
</div>
</div>
</div>
<div class="col-md-6">
<div class="row">
<div class="col-md-8">
<span class="para-heading">Get Certified and Fast Track Your Career Growth</span>
<span class="para">Earn a valued certificate. 
Get help in creation of a professionally written CV & Guidance for interview preparation & questions</span>
</div>
<div class="col-md-4">
<img src="images/h8.png" class="img-fluid">
</div>
</div>
</div>
</div>

</div>


<div class="row">
<div class="col-md-4">
<div class="jumbotron nadj">
<span class="para-heading">Step 1</span>
<span class="para">What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has  of Lorem Ipsum.
</span>
</div>
</div>
<div class="col-md-4">
<div class="jumbotron nadj">
<span class="para-heading">Step 2</span>
<span class="para">What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has  of Lorem Ipsum.
</span>
</div>
</div>
<div class="col-md-4">
<div class="jumbotron nadj">
<span class="para-heading">Step 3</span>
<span class="para">What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has  of Lorem Ipsum.
</span>
</div>
</div>
</div>
</div>
<hr>
<div class="col-md-12">
<span class="sub-heading">Documentation</span>
<span class="para">
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius culpa, nisi officia laboriosam quis aperiam quod odio delectus dolores ab doloribus quasi impedit perspiciatis dolorum. Tenetur esse architecto officiis explicabo.
  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam ex quam asperiores vitae, libero repellendus incidunt debitis quasi tempore similique, suscipit sunt possimus esse quia totam ullam odio delectus officiis!
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae minima reiciendis placeat officiis voluptatem ullam quisquam, voluptatibus sapiente omnis possimus? Porro repellat minima nostrum, facere quo esse at tenetur consequuntur?
</span><br/>
  <span class="para"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea sit nesciunt, veritatis, deleniti adipisci iusto corrupti dicta ratione inventore dolorem eveniet quisquam eum eligendi dignissimos enim, blanditiis saepe
     eaque cupiditate.
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis voluptates qui dolorum quis nemo ratione eius praesentium, magni odio, est provident, veritatis enim nulla. Alias amet eaque quas repellat obcaecati!
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima optio illo, nisi blanditiis placeat iste? Maxime hic nemo doloribus accusantium, aspernatur magni soluta, fugit, quis mollitia expedita culpa nisi ab. 
</span>
<hr>
</div>

<div class="container-fluid">
<center><span class="para-heading">The SUCO Advantage</span></center>
<div class="row">

<div class="col-md-4">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="images/advantage1.jpg" alt="Card image cap">
  <div class="card-body">
    <span class="para-heading">Card title</span>
    <span class="para">Some quick example text to build on the card title and make up the bulk of the card's content.</span>
  </div>
</div>
</div>

<div class="col-md-4">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="images/advantage1.jpg" alt="Card image cap">
  <div class="card-body">
    <span class="para-heading">Card title</span>
    <span class="para">Some quick example text to build on the card title and make up the bulk of the card's content.</span>
  </div>
</div>
</div>

<div class="col-md-4">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="images/advantage1.jpg" alt="Card image cap">
  <div class="card-body">
    <span class="para-heading">Card title</span>
    <span class="para">Some quick example text to build on the card title and make up the bulk of the card's content.</span>
  </div>
</div>
</div>


</div>

<div class="row">

<div class="col-md-4">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="images/advantage1.jpg" alt="Card image cap">
  <div class="card-body">
    <span class="para-heading">Card title</span>
    <span class="para">Some quick example text to build on the card title and make up the bulk of the card's content.
    </span>
  </div>
</div>
</div>

<div class="col-md-4">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="images/advantage1.jpg" alt="Card image cap">
  <div class="card-body">
    <span class="para-heading">Card title</span>
    <span class="para">Some quick example text to build on the card title and make up the bulk of the card's content.
    </span>
  </div>
</div>
</div>

<div class="col-md-4">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="images/advantage1.jpg" alt="Card image cap">
  <div class="card-body">
    <span class="para-heading">Card title</span>
    <span class="para">Some quick example text to build on the card title and make up the bulk of the card's content.
    </span>
  </div>
</div>
</div>


</div>
<hr>
</div>       
<!-- MAIN CONTENT ENDS -->
	
  </div>

</div>



<?php include_once("script.php"); ?>
</body>
</html>
