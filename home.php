
<?php
session_start();
 if($_SESSION['status']!="Active")
{
    header("location:../login.php");
}

 
include 'dbconn.php';
$id =$_SESSION["id"];

	
$sql="select * from police where pid=$id"; //echo $sql;
		$result=mysql_query($sql);
		$r=mysql_fetch_array($result);
		

	?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>SPC</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="High Edu Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="../css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
    <!-- //Fonts -->

</head>

<body>

    <!-- mian-content -->
    <div class="banner-content" id="home">
        <!-- header -->
        <header class="header">
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                <nav class="py-4">
                    <div id="logo">
                        <h1> <a href="home.php"><span>S</span>PC</a></h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2">
                    <li><a href="home.php">Home</a></li>
                    
                    
                    <li><a href="notificationAdd.php">notifications</a></li>
                        <li><a href="changepassword.php"> Password</a></li>
                    <li><a href="studentList.php">Reports</a></li>
                    <li><a href="viewFeedbacks.php">Feedback</a></li>



                       <li>                          
                          <a href="#">Student <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                          <input type="checkbox" id="drop-2" />
                          <ul>
                          <li><a href="../Registration_student.php">Add Student</a></li>
                          <li><a href="student_list.php">Student List</a></li>
                          <li><a href="studentList.php">Report</a></li>
                              
                          </ul>
                        </li>
                       <li>                          
                          <a href="#">Police <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                          <input type="checkbox" id="drop-2" />
                          <ul>
                          <li><a href="police_List.php">Police_Request</a></li>
                          <li><a href="police_Listactive.php">Police List</a></li>
                              
                          </ul>
                        </li>

                        <li>
                            <a href="#">Faculty <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                            <li><a href="Registration_Faculty.php">AddFaculty </a></li>
                            <li><a href="faculty_list.php">View Faculty </a></li>
                                
                            </ul>
                        </li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->

        <!--/banner-->
        <div class="banner-info-w3pvt">
		<h3 style="color:white;">WELCOME ADMIN <?php  echo $r["name"]; ?></h2>
            
        </div>
        <!--// banner-inner -->
    </div>
    <!-- //header -->
    <!--// mian-content -->
    <!-- /hand-crafted -->
    <section class="hand-crafted bg-light py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="row banner-grids">
                <div class="col-md-6 banner-image">
                    <div class="effect-w3">
                        <img src="../images/img.jpg" alt="" class="img-fluid image1">

                    </div>

                </div>
                <div class="col-md-6 last-img pl-lg-5 p-3">
                    <h3 class="tittle my-lg-5 my-3"><span class="sub-tittle"> Now You can get </span>The Best Education for Bright Future</h3>
                    <p class="mb-4"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
                    <p class="mb-4">Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
                    <div class="ban-buttons">
                        <a href="single.html" class="btn">Read More</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //hand-crafted -->

    <!--/ab -->
    <section class="about py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5 py-3">
                <h3 class="tittle text-center mb-lg-5 mb-3"><span class="sub-tittle">About.</span> Our awesome course categories</h3>
                <div class="feature-grids row mb-lg-5 my-3">
                    <div class="col-md-4 p-0">
                        <div class="bottom-gd p-lg-5 p-4">
                            <span class="fa fa-crosshairs" aria-hidden="true"></span>
                            <h3 class="my-3"> Academic</h3>
                            <p>Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
                        </div>
                    </div>
                    <div class="col-md-4 p-0">
                        <div class="bottom-gd2-active p-lg-5 p-4">
                            <span class="fa fa-clone" aria-hidden="true"></span>
                            <h3 class="my-3"> Diploma</h3>
                            <p>Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
                        </div>
                    </div>
                    <div class="col-md-4 p-0">
                        <div class="bottom-gd p-lg-5 p-4">
                            <span class="fa fa-laptop" aria-hidden="true"></span>
                            <h3 class="my-3"> Graducation</h3>
                            <p>Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
                        </div>
                    </div>

                </div>
                <!-- services -->
                <div class="fetured-info pt-lg-5 pt-3 mt-4">
                    <h3 class="tittle text-center my-lg-5 my-3"><span class="sub-tittle">What we do</span> Our Featured courses</h3>
                    <div class="row fetured-sec mt-lg-5">

                        <div class="col-lg-6 serv_bottom">
                            <div class="featured-left text-center row">
                                <div class="col-lg-6">
                                    <div class="bottom-gd fea">
                                        <span class="fa fa-eye" aria-hidden="true"></span>
                                        <h3 class="my-3">Fashion Design</h3>
                                        <p class="px-lg-3">Integer sit amet mattis quam, sit amet ultricies velit...</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="bottom-gd fea active">
                                        <span class="fa fa-laptop" aria-hidden="true"></span>
                                        <h3 class="my-3"> Interface design</h3>
                                        <p class="px-lg-3">Integer sit amet mattis quam, sit amet ultricies velit...</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="bottom-gd fea">
                                        <span class="fa fa-camera-retro" aria-hidden="true"></span>
                                        <h3 class="my-3">Photography</h3>
                                        <p class="px-lg-3">Integer sit amet mattis quam, sit amet ultricies velit...</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="bottom-gd fea">
                                        <span class="fa fa-paint-brush" aria-hidden="true"></span>
                                        <h3 class="my-3">Art & Design</h3>
                                        <p class="px-lg-3">Integer sit amet mattis quam, sit amet ultricies velit...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="../images/img1.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <!-- //services -->
            </div>
        </div>
    </section>
    <!-- //ab -->
    <!--/counter-->
    <section class="stats py-lg-5 py-4">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <div class="counter">
                        <h3 class="timer count-title count-number">1500</h3>
                        <p class="count-text ">Support</p>
                    </div>
                </div>
                <div class="col">
                    <div class="counter">
                        <h3 class="timer count-title count-number">1700</h3>
                        <p class="count-text ">Happy Hours</p>
                    </div>
                </div>
                <div class="col">
                    <div class="counter">
                        <h3 class="timer count-title count-number">11900</h3>
                        <p class="count-text ">Project Complete</p>
                    </div>
                </div>
                <div class="col">
                    <div class="counter">
                        <h3 class="timer count-title count-number">157</h3>
                        <p class="count-text ">Cups of Coffee</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//counter-->
    <!-- middle section -->
    <section class="apply-main py-5" id="apply">
        <div class="container">
            <div class="row py-lg-5">
                <div class="col-lg-7 apply-info px-lg-5">
                    <h3 class="tittle text-white mb-lg-5 mb-3"><span class="sub-tittle">It’s limited seating! Hurry up.</span> Get the Coaching Training for Free</h3>
                    <p class="mt-3 text-white">Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam, Praesent ullamcorper dui turpis.</p>

                </div>
                <div class="login p-md-5 p-4 mx-auto bg-white mw-100 col-lg-5">
                    <h5 class="text-center mb-4">Apply Now</h5>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label>First name</label>

                            <input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label>Last name</label>
                            <input type="text" class="form-control" id="validationDefault02" placeholder="" required="">
                        </div>

                        <div class="form-group mb-4">
                            <label class="mb-2">Password</label>
                            <input type="password" class="form-control" id="password1" placeholder="" required="">
                        </div>

                        <button type="submit" class="btn btn-primary submit mb-4">Register</button>

                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- //middle section -->

    <!--//team -->
    <section class="banner-bottom py-lg-5 py-4">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5 py-4">
                <h3 class="tittle text-center my-lg-5 my-3"><span class="sub-tittle">Amazing People</span> Our Great Professors</h3>
                <div class="row mt-lg-5 mt-4">
                    <div class="col-md-4 team-gd text-center">
                        <div class="team-img mb-4">
                            <img src="../images/team.jpg" class="img-fluid rounded-circle" alt="user-image">
                        </div>
                        <div class="team-info">
                            <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">Professor</span> Jason Donoghue</h3>
                            <p>Lorem Ipsum has been the industry's standard since the 1500s.</p>
                            <ul class="social_section_1info mt-md-4 mt-3">
                                <li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook mr-1"></span>facebook</a></li>
                                <li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter mr-1"></span>twitter</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 team-gd second text-center">
                        <div class="team-img mb-4">
                            <img src="../images/team1.jpg" class="img-fluid rounded-circle" alt="user-image">
                        </div>
                        <div class="team-info">
                            <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">Professor</span> Mariana Noe</h3>
                            <p>Lorem Ipsum has been the industry's standard since the 1500s.</p>
                            <ul class="social_section_1info mt-md-4 mt-3">
                                <li class="mb-2 google"><a href="#"><span class="fa fa-google-plus mr-1"></span>google</a></li>
                                <li class="mb-2 linkedin"><a href="#"><span class="fa fa-linkedin mr-1"></span>linkedin</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 team-gd text-center">
                        <div class="team-img mb-4">
                            <img src="../images/team2.jpg" class="img-fluid rounded-circle" alt="user-image">
                        </div>
                        <div class="team-info">
                            <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">Professor</span> Daniel Doe</h3>
                            <p>Lorem Ipsum has been the industry's standard since the 1500s.</p>
                            <ul class="social_section_1info mt-md-4 mt-3">
                                <li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook mr-1"></span>facebook</a></li>
                                <li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter mr-1"></span>twitter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--//team -->
    <!-- middle section -->
    <div class="middle-tem-insidel pt-lg-5">
        <div class="progress-info">
            <div class="right-side-img-tem-inside">
            </div>
            <div class="left-build-main-temps">
                <h3 class="tittle text-left my-lg-5 my-3"><span class="sub-tittle">WOrk Abilities</span> Our Skills</h3>
                <div class="progress-one my-lg-5">
                    <h4 class="progress-tittle">Web Design --------------- 86%</h4>

                </div>
                <div class="progress-one my-lg-5">
                    <h4 class="progress-tittle">Branding --------------- 78%</h4>

                </div>
                <div class="progress-one my-lg-5">
                    <h4 class="progress-tittle">PHP Development --------------- 90%</h4>

                </div>
                <div class="progress-one my-lg-5">
                    <h4 class="progress-tittle">Marketing --------------- 95%</h4>

                </div>


            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //middle section -->
    <!-- portfolio -->
    <section class="py-lg-5 portfolio-flyer py-4" id="gallery">
        <div class="container py-lg-5">
            <h3 class="tittle text-center my-lg-5 my-3"><span class="sub-tittle"> Recent Pics </span>Our Gallery</h3>

            <div class="row news-grids pb-lg-5 mt-3 text-center">
                <div class="col-md-4 gal-img">
                    <a href="#gal1"><img src="../images/n1.jpg" alt="High Edu" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal2"><img src="../images/g2.jpg" alt="High Edu" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal3"><img src="../images/g3.jpg" alt="High Edu" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img mt-lg-4">
                    <a href="#gal4"><img src="../images/g4.jpg" alt="High Edu" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img mt-lg-4">
                    <a href="#gal5"><img src="../images/n9.jpg" alt="High Edu" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img mt-lg-4">
                    <a href="#gal6"><img src="../images/g5.jpg" alt="High Edu" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img mt-lg-4">
                    <a href="#gal7"><img src="../images/n7.jpg" alt="High Edu" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img mt-lg-4">
                    <a href="#gal8"><img src="../images/g1.jpg" alt="High Edu" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img mt-lg-4">
                    <a href="#gal9"><img src="../images/n6.jpg" alt="High Edu" class="img-fluid"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- popup-->
    <div id="gal1" class="pop-overlay">
        <div class="popup">
            <img src="../images/n1.jpg" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal2" class="pop-overlay">
        <div class="popup">
            <img src="../images/g2.jpg" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal3" class="pop-overlay">
        <div class="popup">
            <img src="../images/g3.jpg" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup3 -->
    <!-- popup-->
    <div id="gal4" class="pop-overlay">
        <div class="popup">
            <img src="../images/g4.jpg" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal5" class="pop-overlay">
        <div class="popup">
            <img src="../images/n9.jpg" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal6" class="pop-overlay">
        <div class="popup">
            <img src="../images/g5.jpg" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal7" class="pop-overlay">
        <div class="popup">
            <img src="../images/n7.jpg" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
            <a class="close" href="#">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal8" class="pop-overlay">
        <div class="popup">
            <img src="../images/g1.jpg" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal9" class="pop-overlay">
        <div class="popup">
            <img src="../images/n6.jpg" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!--//portfolio-->
    <!-- /hand-crafted -->
    <section class="hand-crafted py-lg-4 py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="row banner-grids">
                <div class="col-md-6 banner-image">
                    <div class="effect-w3">
                        <img src="../images/img2.jpg" alt="" class="img-fluid image1">
                    </div>
                </div>
                <div class="col-md-6 last-img pl-lg-5 p-3">
                    <h3 class="tittle text-white my-lg-5 my-3"><span class="sub-tittle"> Now You can get </span>The Best Education for Bright Future</h3>
                    <p class="mb-4"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
                    <p class="mb-4">Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
                    <div class="ban-buttons">
                        <a href="single.html" class="btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //hand-crafted -->
    <!-- testimonials -->
    <section class="testimonials py-5" id="testi">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle text-center mb-lg-5 mb-3"><span class="sub-tittle">See what people are saying</span> Testimonials</h3>
            <div class="row">
                <div class="col-lg-6 testimonials_grid">
                    <div class="bg-white rounded p-lg-5 p-3">
                        <p class="sub-test"><span class="fa fa-quote-left" aria-hidden="true"></span> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod possimus, omnis voluptas.
                        </p>
                        <div class="row mt-4">
                            <div class="col-3 testi-img-res">
                                <img src="../images/te1.jpg" alt=" " class="img-fluid" />
                            </div>
                            <div class="col-9 testi_grid mt-xl-3 mt-lg-2 mt-md-4 mt-2">
                                <h5 class="mb-2">Thomas Carl</h5>
                                <p>Add Some Description</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 testimonials_grid mt-lg-0 mt-4">
                    <div class="bg-white rounded p-lg-5 p-3">
                        <p class="sub-test"><span class="fa fa-quote-left" aria-hidden="true"></span> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod possimus, omnis voluptas.
                        </p>
                        <div class="row mt-4">
                            <div class="col-3 testi-img-res">
                                <img src="../images/te2.jpg" alt=" " class="img-fluid" />
                            </div>
                            <div class="col-9 testi_grid  mt-xl-3 mt-lg-2 mt-md-4 mt-2">
                                <h5 class="mb-2">Adam Ster</h5>
                                <p>Add Some Description</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- //testimonials -->
    <!--/newsletter -->
    <section class="subscribe-main-w3pvt py-lg-5 py-4">
        <div class="container">
            <div class="newsletter-info text-center p-md-5 p-3">
                <form action="#" method="post" class="d-flex">
                    <input type="email" name="email" placeholder="Enter your Email..." required="">
                    <button type="submit" class="btn submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <!--//newsletter-->
    <!--footer -->
    <footer>
        <section class="footer footer_1its py-5">
            <div class="container py-md-4">
                <div class="row footer-top mb-md-5 mb-4">
                    <div class="col-lg-4 col-md-6 footer-grid_section_1its">
                        <div class="footer-title-w3ls">
                            <h3>Address</h3>
                        </div>
                        <div class="footer-text">
                            <p>Address : 1234 lock, Charlotte, North Carolina, United States</p>
                            <p>Phone : +12 534894364</p>
                            <p>Email : <a href="mailto:info@example.com">info@example.com</a></p>
                            <p>Fax : +12 534894364</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4 footer-grid_section_1its">
                        <div class="footer-title-w3ls">
                            <h3>Quick Links</h3>
                        </div>
                        <div class="row">
                            <ul class="col-6 links">
                                <li><a href="index.html">Home </a></li>
                                <li><a href="about.html">About </a></li>
                                <li><a href="events.html">Events</a></li>
                                <li><a href="courses.html">Courses</a></li>
                                <li><a href="contact.html">Contact </a></li>
                            </ul>
                            <ul class="col-6 links">
                                <li><a href="#">Privacy Policy </a></li>
                                <li><a href="#">General Terms </a></li>
                                <li><a href="#faq">Faq's </a></li>
                                <li><a href="#">Knowledge </a></li>
                                <li><a href="#">Forum </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mt-lg-0 mt-4 col-sm-12 footer-grid_section_1its">
                        <div class="footer-title-w3ls">
                            <h3>Newsletter</h3>
                        </div>
                        <div class="footer-text">
                            <p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
                            <form action="#" method="post">
                                <input type="email" name="Email" placeholder="Enter your email..." required="">
                                <button class="btn1 btn"><span class="fa fa-paper-plane-o" aria-hidden="true"></span></button>
                                <div class="clearfix"> </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="footer-grid_section text-center">
                    <div class="footer-title-w3ls mb-3">
                        <a href="index.html"><span>H</span>igh Edu</a>
                    </div>
                    <div class="footer-text">
                        <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ipnut libero malesuada feugiat. Lorem ipsum dolor sit amet, consectetur elit.</p>
                    </div>
                    <ul class="social_section_1info">
                        <li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook mr-1"></span>facebook</a></li>
                        <li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter mr-1"></span>twitter</a></li>
                        <li class="google"><a href="#"><span class="fa fa-google-plus mr-1"></span>google</a></li>
                        <li class="linkedin"><a href="#"><span class="fa fa-linkedin mr-1"></span>linkedin</a></li>
                    </ul>
                </div>
                <div class="move-top-w3layouts text-center mt-3">
                    <a href="#home" class="move-top"> <span class="fa fa-angle-up  mb-3" aria-hidden="true"></span></a>
                </div>

            </div>
        </section>
    </footer>
    <!-- //footer -->

    <!-- copyright -->
    <div class="cpy-right text-center py-3">
        <p class="">© 2019 High Edu. All rights reserved | Design by
            <a href="http://w3layouts.com"> W3layouts.</a>
        </p>
    </div>
    <!-- //copyright -->

</body>

</html>


  