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
    <title>Title</title>
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
        <li class="activeLink"><a href="#"><i class="material-icons">home</i><span class="menuText">Home</span></a></li>
        <li><a href="#"><i class="material-icons">language</i><span class="menuText">DCent MASS</span></a></li>
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
  <ul> <!-- User class="activeLink" to make links active -->
        <li><a href="#">Home</a></li>
        <li><a href="#">DCent MASS</a></li>
        <li><a href="#">Our Services</a></li>
        <li><a href="#">Student Hub</a></li>
        <li><a href="#">Courses</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Media</a></li>
        <!-- <li><a href="#">Forum</a></li> -->
        <li style="border-bottom:  2px solid #06f;"><a href="#">Contact Us</a></li>
        <!-- <li style="border-bottom:  2px solid #06f;"><a href="#">FAQs</a></li> -->
  </ul>
</div>

<span id="openNavID" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<!-- Mobile bar ends here -->
     <!-- Right bar starts -->
     <div class="right-bars">
     	<div class="righ-col-1"> <!-- User class="activeLink" to make links active -->
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 1</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 2</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 3</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 4</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 5</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 6</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 7</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 8</span></div></a>
         
      </div>
     	<div class="righ-col-2"> <!-- User class="activeLink" to make links active -->
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 9</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 10</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 11</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 12</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 13</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 14</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 15</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 16</span></div></a>
     	</div>
     </div>
     
<div class="mainContainer" id="mainContainer">  <!-- DO NOT REMOVE THIS -->
	<div class="container-fluid">
<!-- MAIN CONTENT STARTS -->
<span class="bgtext"> MARKET TRENDS </span>


<!-- page heading -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="pageheading">
      MARKET TRENDS
      </div>
    </div>
  </div>
</div>





    <main>
        
        <!--MDB Cards-->
        <div class="container mt-4">

            <div class="text-center darken-grey-text mb-4">
                <h1 class="font-bold mt-4 mb-3 h5">Latest Technology in market</h1>
               
            </div>

            <!-- Grid row -->
            <div class="row">
            
                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-4">
                    
                    <!--Card-->
                    <div class="card">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="images/trend1.jpg" class="img-fluid" alt="photo">
                            <a href="#!">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Platform Architecture</h4>
                            <!--Text-->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur sunt elit. Impedit iste perspiciatis earum voluptatem ad possimus itaque, eum aspernatur, nostrum dignissimos beatae id in illum accusantium adipisicing suscipit sunt doloremque.</p>
                            <a href="#" class="btn btn-deep-orange btn-md">Read more</a>
                        </div>

                    </div>
                    <!--/.Card-->
            
                </div>
                <!-- Grid column -->
            
                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-4">
            
                    <!--Card-->
                    <div class="card">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="images/trend2.jpg" class="img-fluid" alt="photo">
                            <a href="#!">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body text-center">
                            <!--Title-->
                            <h4 class="card-title indigo-text"><strong>Social Platform</strong></h4>
                            <!--Text-->
                            <p class="card-text">Sed ut perspiciatis unde omnis iste natus error volosit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab eum illo inventore veritatis quasi architecto beatae vitae dicta explicabo.</p>
                            <a href="#" class="btn btn-indigo btn-md">Learn more</a>
                        </div>

                    </div>
                    <!--/.Card-->
            
                </div>
                <!-- Grid column -->
            
                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-4">
            
                    <!--Card-->
                    <div class="card">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="images/trend7.jpg" class="img-fluid" alt="photo">
                            <a href="#!">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body text-center">
                            <!--Title-->
                            <h4 class="card-title font-up brown-text">Cloud Computing</h4>
                            <!--Text-->
                            <p class="card-text black-text">Nemo enim ipsam voluptatem, consectetur sunt elit. Impedit iste perspiciatis earum voluptatem ad possimus itaque, eum aspernatur, nostrum dignissimos beatae id in illum accusantium adipisicing suscipit sunt doloremque.</p>
                            <a href="#" class="btn btn-brown btn-md">More content</a>
                        </div>

                    </div>
                    <!--/.Card-->
            
                </div>
                <!-- Grid column -->
            
            </div>
            <!-- Grid row -->
            <!-- Grid row -->
            <div class="row">
            
                <!-- Grid column -->
                <div class="col-md-6 mb-4">
            
                    <!--Card-->
                    <div class="card">
                        
                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="images/trend10.jpg" class="img-fluid" alt="photo">
                            <a href="#!">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Web Developers(UI/UX)</h4>
                            <!--Text-->
                            <p class="card-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores est quas molestias excepturi sint occaecati cupiditate non provident similique.</p>
                            <a href="#!" class="btn btn-outline-primary waves-effect">Read more</a>
                        </div>

                    </div>
                    <!--/.Card-->
                                    
                </div>
                <!-- Grid column -->
            
                <!-- Grid column -->
                <div class="col-md-6 mb-4">
            
                    <!--Card-->
                    <div class="card">
                        
                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="images/trend11.jpg" class="img-fluid" alt="photo">
                            <a href="#!">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Adroids gives beauty to your phone</h4>
                            <!--Text-->
                            <p class="card-text">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
                            <a href="#!" class="btn btn-outline-warning waves-effect">Read more</a>
                        </div>

                    </div>
                    <!--/.Card-->
                                    
                </div>
                <!-- Grid column -->
            
            </div>
            <!-- Grid row -->
            <!-- Grid row -->
            <div class="row">
            
                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-4">
                    
                    <!--Card-->
                    <div class="card elegant-color">
                        
                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="images/trend4.jpg" class="img-fluid" alt="Card image cap">
                            <a href="#!">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body text-center">
                            <!--Title-->
                            <h4 class="card-title white-text py-3">Data Security</h4>
                            <!--Text-->
                            <p class="card-text white-text">Sed ut perspiciatis unde omnis iste natus error volosit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab eum illo inventore veritatis quasi architecto beatae vitae dicta explicabo.</p>
                            <a href="#" class="btn btn-info my-3">Read more</a>
                        </div>

                    </div>
                    <!--/.Card-->
            
                </div>
                <!-- Grid column -->
            
                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-4">
            
                    <!--Card-->
                    <div class="card light-blue">
                        
                        <!--Card image-->
                        <div class="view overlay hm-blue-slight">
                            <img src="images/trend9.jpg" class="img-fluid" alt="Card image cap">
                            <a href="#!">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title white-text py-3">Analytics</h4>
                            <!--Text-->
                            <p class="card-text white-text">Lorem ipsum dolor sit amet, consectetur sunt elit. Impedit iste perspiciatis earum voluptatem ad possimus itaque, eum aspernatur, nostrum dignissimos beatae id in illum accusantium adipisicing suscipit sunt doloremque.</p>
                            <a href="#" class="btn btn-warning my-3">Read more</a>
                        </div>

                    </div>
                    <!--/.Card-->
            
                </div>
                <!-- Grid column -->
            
                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-4">
            
                    <!--Card-->
                    <div class="card red">

                        <!--Card image-->
                        <div class="view overlay hm-red-slight">
                            <img src="images/trend6.jpg" class="img-fluid" alt="Card image cap">
                            <a href="#!">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title white-text py-3">Architecture</h4>
                            <!--Text-->
                            <p class="card-text white-text">Nemo enim ipsam voluptatem, consectetur sunt elit. Impedit iste perspiciatis earum voluptatem ad possimus itaque, eum aspernatur, nostrum dignissimos beatae id in illum accusantium adipisicing suscipit sunt doloremque.</p>
                            <a href="#" class="btn btn-success my-3">Read more</a>
                        </div>

                    </div>
                    <!--/.Card-->
            
                </div>
                <!-- Grid column -->
            
            </div>
            <!-- Grid row -->
          
           
        <!--MDB Cards-->
        
         <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
      
    </main>
  






<!-- WRITE MAIN CONTENT HERE -->



<!-- NOTE: Please keep your code clean + readable and add comments -->










<!-- MAIN CONTENT ENDS -->
	</div>
</div>
<?php include_once("script.php"); ?>
</body>
</html>
