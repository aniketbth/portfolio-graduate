  <?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Unique - Responsive vCard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Unique - Responsive vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Unique, portfolio" />
    <meta name="author" content="lmtheme" />
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/transition-animations.css" type="text/css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/main-red.css" type="text/css">

    <!-- This styles needs for demo -->
    <link rel="stylesheet" href="preview/lmpixels-demo-panel.css" type="text/css">
    <!-- /This styles needs for demo -->
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-96534204-1', 'auto');
      ga('send', 'pageview');
    
    </script>

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
  </head>

  <body>
    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="dot1"></div>
        <div class="dot2"></div>
      </div>
    </div>
    <!-- /Loading animation -->
    


    <?php 

 $fetch = mysqli_query($config,"SELECT * FROM admin_info");
 while($row = mysqli_fetch_assoc($fetch))
{
   $Aname = $row['name'];
   $pass = $row['password'];
   $Email = $row['email'];
   $pic = $row['admin_pic'];
   $info = $row['description'];
}
?>


    <div id="page" class="page template-style-dark">
      <!-- Header -->
      <header id="site_header" class="header mobile-menu-hide header-color-dark">
        <div class="my-photo tilt-effect">
          <img style="height:50px;width: 50px;" src="<?php echo $pic;?>" alt="image">
        </div>

        <div class="site-title-block">
          <h1 class="site-title"><input  style="background-color: transparent; " readonly type="text" b value="<?php echo $Aname;?>"></h1>
        </div>

        <!-- Navigation -->
        <div class="site-nav">
          <!-- Main menu -->
          <ul id="nav" class="site-main-menu">
            <li>
              <a class="pt-trigger" href="#home" data-animation="21"><i class="menu-icon pe-7s-icon pe-7s-home"></i>Home</a><!-- href value = data-id without # of .pt-page. -->
            </li>
            <li>
              <a class="pt-trigger" href="#about_me" data-animation="17"><i class="menu-icon pe-7s-icon pe-7s-user"></i>About me</a>
            </li>
            <li>
              <a class="pt-trigger" href="#resume" data-animation="18"><i class="menu-icon pe-7s-icon pe-7s-id"></i>Resume</a>
            </li>
            <li>
              <a class="pt-trigger" href="#portfolio" data-animation="19"><i class="menu-icon pe-7s-icon pe-7s-portfolio"></i>Portfolio</a>
            </li>
            <li>
              <a class="pt-trigger" href="#contact" data-animation="20"><i class="menu-icon pe-7s-icon pe-7s-mail"></i>Contact</a>
            </li>


         
             <li class="copyright" style="margin-top: 250px;">
              <p>chandan</p>
              <p>Copyright  &copy; <?php echo date('Y'); ?></p>
              </li>
          </ul>
          <!-- /Main menu -->
        </div>
        <!-- Navigation -->
        <ol type="" style="margin-top:5px;color: transparent;margin-left: 20px;">
          <li>
          <a href="dashboard/pages/examples/login.php" style="color: transparent;" ><i class="menu-icon pe-7s-icon pe-7s-login"></i>login</a>
        </li>
        </ol>
        
      </header>
      <!-- /Header -->

      <!-- Mobile Header -->
      <div class="mobile-header mobile-visible">
        <div class="mobile-logo-container">
          <div class="mobile-site-title"><input type="text" style="background-color: transparent; " readonly  value="<?php echo $Aname;?>"> </div>
        </div>

        <a class="menu-toggle mobile-visible">
          <i class="fa fa-bars"></i>
        </a>
      </div>
      <!-- /Mobile Header -->

      <!-- Main Content -->
      <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper" style="background-image: url(images/main_bg_light.jpg);">
          <!-- Subpages -->
          <div class="subpages">

            <!-- Home Subpage -->
            <section class="pt-page pt-page-1 section-without-bg section-paddings-0 table" data-id="home">
              <div class="section-inner">
                <div class="home-page-block">
                  <h2><input type="text" style="background-color: transparent; text-align:center;border-color:transparent; " readonly  value="<?php echo $Aname;?>"></h2>
                  <div class="owl-carousel text-rotation">                                    
                    <div class="item">
                      <p class="home-page-description">Web Designer</p>
                    </div>
                    <div class="item">
                      <p class="home-page-description">Full Stack Developer</p>
                    </div>
                  </div>
                </div>
                <p style="color: black; font-size: 26px; width:800px;text-align: center;margin-left: 160px; text-align:justify ;"><?php echo $info ;?></p>
                 
              </div>
            </section>
            <!-- End of Home Subpage -->

            <!-- About Me Subpage -->
            <?php

$fetchabout = mysqli_query($config,"SELECT * FROM admin_about");
while ($row = mysqli_fetch_assoc($fetchabout))
{

  $title = $row['title'];
  $detail = $row['detail'];
  

}


?>
            <section class="pt-page pt-page-2" data-id="about_me">
              <div class="border-block-top-110"></div>
              <div class="section-inner">
                <div class="section-title-block">
                  <div class="section-title-wrapper clearfix">
                    <h2 class="section-title">About Me</h2>
                    <h5 class="section-description"><?php echo $title ;?></h5>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-4 subpage-block">
                    <div class="my-photo-block tilt-effect">
                      <img style="height:400px;" src="<?php echo $pic ;?>" alt="">
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-6 col-lg-4">
                    <h3><?php echo $detail; ?></h3>
                    <p style="color:whitesmoke;">As an aspiring Full Stack Developer Apprentice, I am deeply engaged in honing my skills within the dynamic realm of web development. My journey so far has led me to specialize in the LAMP stack, a powerful combination of Linux, Apache, MySQL, and PHP, which lays the foundation for robust back-end development. Alongside this, I have cultivated extensive expertise in front-end development, with a particular focus on creating responsive and interactive user interfaces using React. This dual focus equips me with a comprehensive understanding of both the server-side and client-side aspects of web applications.

My technical</p> 
                  </div>
<?php

$fetchabout = mysqli_query($config,"SELECT * FROM admin_about");
while ($row = mysqli_fetch_assoc($fetchabout))
{
  $age = $row['age'];
  $residence = $row['residence'];
  $address = $row['address'];
  $mail = $row['email'];
  $phone = $row['phone'];
  $skype = $row['skype'];
  $title = $row['title'];
  $freelance = $row['freelance'];
  $insta = $row['instagram_acc'];
  $facebook = $row['facebook_acc'];
  $pic = $row['about_img'];

}


?>
                  <div class="col-sm-6 col-md-6 col-lg-4 subpage-block">
                    <ul class="info-list">
                      <li><span class="title">Age</span><span class="value"><?php echo $age;?></span></li>
                      <li><span class="title">Residence</span><span class="value"><?php echo $residence;?></span></li>
                      <li><span class="title">Address</span><span class="value"><?php echo $address;?></span></li>
                      <li><span class="title">e-mail</span><span class="value"><?php echo $mail;?></span></li>
                      <li><span class="title">Phone</span><span class="value"><?php echo $phone;?></span></li>
                      <li><span class="title">Skype</span><span class="value"><?php echo $skype;?></span></li>
                      <li><span class="title">Freelance</span><span class="value available"><?php echo $freelance;?></span></li>
                    </ul>

                    <ul class="social-links">
                      <li><a class="tip social-button" href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li> <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
                      <li><a class="tip social-button" href="<?php echo $facebook;?>" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                      <li><a class="tip social-button" href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                      <li><a class="tip social-button" href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                      <li><a class="tip social-button" href="#" title="<?php echo $insta;?>"><i class="fa fa-instagram"></i></a></li>
                      <!--<li><a class="tip social-button" href="#" title="last.fm"><i class="fa fa-lastfm"></i></a></li>-->
                      <!--<li><a class="tip social-button" href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>-->
                    </ul>
                  </div>
                </div>

               <!-- Services block -->
              <?php 
 $fetch = mysqli_query($config,"SELECT * FROM admin_about ");
 while($row = mysqli_fetch_assoc($fetch))
{
   $web = $row['web_design'];
   $photo = $row['photography'];
   $crate = $row['creativity'];
   $designing = $row['desiging'];
   $Hclients = $row['happy_clients'];
   $Whours = $row['working_hours'];
   $Awon = $row['awards_won'];
   $Cconsumed = $row['coffee_consumed'];
}
  ?>


                <div class="block-title">
                  <h3>Services</h3>
                </div>

                <div class="row">
                  <div class="col-sm-6 col-md-3 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
                        <img src="images/service/web_design_icon.png" alt="Responsive Design">
                        <h4>Web Design</h4>
                        <p><?php echo $web; ?></p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-3 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
                        <img src="images/service/photography_icon.png" alt="Photography">
                        <h4>Photography</h4>
                        <p><?php echo $photo ;?>.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-3 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
                        <img src="images/service/creativity_icon.png" alt="Creativity">
                        <h4>Creativity</h4>
                        <p><?php echo $crate; ?></p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-3 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
                        <img src="images/service/advetising_icon.png" alt="Advetising">
                        <h4>Advertising</h4>
                        <p><?php echo $designing; ?></p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End of Services block -->

                <!-- Clients block -->
                <div class="block-title">
                  <h3>Clients</h3>
                </div>

                <div class="row">
                  <div class="col-sm-4 col-md-2 subpage-block">
                    <div class="client-block">
                      <a href="#" target="_blank"><img src="images/clients/client_1.png" alt="image"></a>
                    </div>
                  </div>

                  <div class="col-sm-4 col-md-2 subpage-block">
                    <div class="client-block">
                      <a href="#" target="_blank"><img src="images/clients/client_2.png" alt="image"></a>
                    </div>
                  </div>

                  <div class="col-sm-4 col-md-2 subpage-block">
                    <div class="client-block">
                      <a href="#" target="_blank"><img src="images/clients/client_3.png" alt="image"></a>
                    </div>
                  </div>

                  <div class="col-sm-4 col-md-2 subpage-block">
                    <div class="client-block">
                      <a href="#" target="_blank"><img src="images/clients/client_4.png" alt="image"></a>
                    </div>
                  </div>

                  <div class="col-sm-4 col-md-2 subpage-block">
                    <div class="client-block">
                      <a href="#" target="_blank"><img src="images/clients/client_5.png" alt="image"></a>
                    </div>
                  </div>

                  <div class="col-sm-4 col-md-2 subpage-block">
                    <div class="client-block">
                      <a href="#" target="_blank"><img src="images/clients/client_6.png" alt="image"></a>
                    </div>
                  </div>
                </div>
                <!-- End of Clients block -->

                <div class="row">
                  <div class="col-sm-12 col-md-12 subpage-block">
                    <div class="block-title">
                      <h3>Testimonials</h3>
                    </div>
                    <div class="testimonials owl-carousel">
                      <!-- Testimonial 1 -->
                      <div class="testimonial-item">
                        <!-- Testimonial Content -->
                        <div class="testimonial-content">
                          <div class="testimonial-text">
                            <p>"Phasellus eu nunc tincidunt, ultricies elit vitae, pretium eros. Sed sed ipsum sed massa."</p>
                          </div>
                        </div>            
                        <!-- /Testimonial Content -->  
                        <!-- Testimonial Author -->
                        <div class="testimonial-credits">
                          <!-- Picture -->
                          <div class="testimonial-picture">
                            <img src="images/testimonials/testimonial_photo_1.jpg" alt="">
                          </div>              
                          <!-- /Picture -->
                          <!-- Testimonial author information -->
                          <div class="testimonial-author-info">
                            <p class="testimonial-author">Maria Richardson</p>
                            <p class="testimonial-firm">Lindsley's Lumber</p>
                          </div>
                        </div>
                        <!-- /Testimonial author information -->               
                      </div>
                      <!-- End of Testimonial 1 -->

                      <!-- Testimonial 2 -->
                      <div class="testimonial-item">
                        <!-- Testimonial Content -->
                        <div class="testimonial-content">
                          <div class="testimonial-text">
                            <p>"Vivamus porta dapibus tristique. Suspendisse et arcu eget nisi convallis eleifend nec ac lorem."</p>
                          </div>
                        </div>            
                        <!-- /Testimonial Content -->  
                        <!-- Testimonial Author -->
                        <div class="testimonial-credits">
                          <!-- Picture -->
                          <div class="testimonial-picture">
                            <img src="images/testimonials/testimonial_photo_2.jpg" alt="">
                          </div>              
                          <!-- /Picture -->
                          <!-- Testimonial author information -->
                          <div class="testimonial-author-info">
                            <p class="testimonial-author">John Doe</p>
                            <p class="testimonial-firm">Apple Inc.</p>
                          </div>
                        </div>
                        <!-- /Testimonial author information -->               
                      </div>
                      <!-- End of Testimonial 2 -->

                      <!-- Testimonial 3 -->
                      <div class="testimonial-item">
                        <!-- Testimonial Content -->
                        <div class="testimonial-content">
                          <div class="testimonial-text">
                            <p>"Aliquam congue auctor lectus sed fermentum. Nulla ultricies tellus quis sapien lacinia egestas."</p>
                          </div>
                        </div>            
                        <!-- /Testimonial Content -->  
                        <!-- Testimonial Author -->
                        <div class="testimonial-credits">
                          <!-- Picture -->
                          <div class="testimonial-picture">
                            <img src="images/testimonials/testimonial_photo_3.jpg" alt="">
                          </div>              
                          <!-- /Picture -->
                          <!-- Testimonial author information -->
                          <div class="testimonial-author-info">
                            <p class="testimonial-author">George McQueen</p>
                            <p class="testimonial-firm">Harmony House</p>
                          </div>
                        </div>
                        <!-- /Testimonial author information -->               
                      </div>
                      <!-- End of Testimonial 3 -->
                    </div>
                  </div>
                </div>

                <!-- Fun facts block -->
                <div class="block-title">
                  <h3>Fun Facts</h3>
                </div>

                <div class="row">
                  <div class="col-sm-6 col-md-3 subpage-block">
                    <div class="fun-fact-block gray-bg tilt-effect">
                      <i class="pe-7s-icon pe-7s-smile"></i>
                      <h4>Happy Clients</h4>
                      <span class="fun-value"><?php echo $Hclients; ?></span>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-3 subpage-block tilt-effect">
                    <div class="fun-fact-block">
                      <i class="pe-7s-icon pe-7s-alarm"></i>
                      <h4>Working Hours</h4>
                      <span class="fun-value"><?php echo $Whours; ?></span>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-3 subpage-block tilt-effect">
                    <div class="fun-fact-block gray-bg">
                      <i class="pe-7s-icon pe-7s-medal"></i>
                      <h4>Awards Won</h4>
                      <span class="fun-value"><?php echo $Awon; ?></span>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-3 subpage-block tilt-effect">
                    <div class="fun-fact-block">
                      <i class="pe-7s-icon pe-7s-coffee"></i>
                      <h4>Coffee Consumed</h4>
                      <span class="fun-value"><?php echo $Cconsumed; ?></span>
                    </div>
                  </div>
                </div>
                <!-- End of Fun fucts block -->
              </div>
            </section>
            <!-- End of About Me Subpage -->

            <!-- Resume Subpage -->
            <section class="pt-page pt-page-3" data-id="resume">
              <div class="border-block-top-110"></div>
              <div class="section-inner">
                <div class="section-title-block">
                  <div class="section-title-wrapper">
                    <h2 class="section-title">Resume</h2>
                    <h5 class="section-description">6 Years of Experience</h5>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6 col-md-4 subpage-block">
                    <div class="block-title">
                      <h3>Education</h3>
                    </div>
                    <div class="timeline">
                      <!-- Single event -->
                      <div class="timeline-event te-primary">
                        <h5 class="event-date">2010</h5>
                        <h4 class="event-name">Specialization Course</h4>
                        <span class="event-description">University of Studies</span>
                        <p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p>
                      </div>
                      <!-- Single event -->
                      <div class="timeline-event te-primary">
                        <h5 class="event-date">2009</h5>
                        <h4 class="event-name">Specialization Course</h4>
                        <span class="event-description">University of Studies</span>
                        <p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p>
                      </div>
                      <!-- Single event -->
                      <div class="timeline-event te-primary">
                        <h5 class="event-date">2008</h5>
                        <h4 class="event-name">Specialization Course</h4>
                        <span class="event-description">University of Studies</span>
                        <p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-4 subpage-block">
                    <div class="block-title">
                      <h3>Experience</h3>
                    </div>
                    <div class="timeline">
                      <!-- Single event -->
                      <div class="timeline-event te-primary">
                        <h5 class="event-date">Dec 2012 - Current</h5>
                        <h4 class="event-name">Frontend-developer</h4>
                        <span class="event-description">Web Agency</span>
                        <p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p>
                      </div>
                      <!-- Single event -->
                      <div class="timeline-event te-primary">
                        <h5 class="event-date">Dec 2011 - Nov 2012</h5>
                        <h4 class="event-name">Web Designer</h4>
                        <span class="event-description">Apple Inc.</span>
                        <p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p>
                      </div>
                      <!-- Single event -->
                      <div class="timeline-event te-primary">
                        <h5 class="event-date">Jan 2010 - Dec 2011</h5>
                        <h4 class="event-name">Graphic Designer</h4>
                        <span class="event-description">Web Agency</span>
                        <p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-4 subpage-block">
                    <div class="block-title">
                      <h3>Design Skills</h3>
                    </div>
                    <div class="skills-info">
                      <h4>Web Design</h4>                               
                      <div class="skill-container">
                        <div class="skill-percentage skill-1"></div>
                      </div>

                      <h4>Graphic Design</h4>
                      <div class="skill-container">
                        <div class="skill-percentage skill-2"></div>
                      </div>

                      <h4>Print Design</h4>
                      <div class="skill-container">
                        <div class="skill-percentage skill-3"></div>
                      </div> 
                    </div>

                    <div class="block-title">
                      <h3>Coding Skills</h3>
                    </div>
                    <div class="skills-info">
                      <h4>HML5</h4>                               
                      <div class="skill-container">
                        <div class="skill-percentage skill-4"></div>
                      </div>

                      <h4>CSS3</h4>
                      <div class="skill-container">
                        <div class="skill-percentage skill-5"></div>
                      </div>

                      <h4>jQuery</h4>
                      <div class="skill-container">
                        <div class="skill-percentage skill-6"></div>
                      </div>

                      <h4>Wordpress</h4>
                      <div class="skill-container">
                        <div class="skill-percentage skill-7"></div>
                      </div>

                      <h4>PHP</h4>
                      <div class="skill-container">
                        <div class="skill-percentage skill-8"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-12">
                    <div class="download-cv-block">
                      <a class="button" target="_blank" href="#">Download CV</a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- End Resume Subpage -->


            <!-- Portfolio Subpage -->
            <section class="pt-page pt-page-4" data-id="portfolio">
              <div class="border-block-top-110"></div>
              <div class="section-inner">
                <div class="section-title-block">
                  <div class="section-title-wrapper">
                    <h2 class="section-title">Portfolio</h2>
                    <h5 class="section-description">My Best Works</h5>
                  </div>
                </div>

                <!-- Portfolio Content -->
                <div class="portfolio-content">
                              
                  <!-- Portfolio filter -->
                  <ul id="portfolio_filters" class="portfolio-filters">
                    <li class="active">
                      <a class="filter btn btn-sm btn-link active" data-group="all">All</a>
                    </li>
                    <li>
                      <a class="filter btn btn-sm btn-link" data-group="media">Media</a>
                    </li>
                    <li>
                      <a class="filter btn btn-sm btn-link" data-group="illustration">Illustration</a>
                    </li>
                    <li>
                      <a class="filter btn btn-sm btn-link" data-group="video">Video</a>
                    </li>
                  </ul>
                  <!-- End of Portfolio filter -->

                  <!-- Portfolio Grid -->
                  <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">

                    <!-- Portfolio Item 1 -->
                    <figure class="item" data-groups='["all", "media"]'>
                      <a class="ajax-page-load" href="portfolio-1.html">
                        <img src="images/portfolio/1.jpg" alt="">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Media</small>
                          <i class="pe-7s-icon pe-7s-display2"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 1 -->

                    <!-- Portfolio Item 2 -->
                    <figure class="item" data-groups='["all", "video"]'>
                      <a href="https://player.vimeo.com/video/97102654?autoplay=1" title="Praesent Dolor Ex" class="lightbox mfp-iframe">
                        <img src="images/portfolio/2.jpg" alt="">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Video</small>
                          <i class="pe-7s-icon pe-7s-video"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 2 -->

                    <!-- Portfolio Item 3 -->
                    <figure class="item" data-groups='["all","illustration"]'>
                      <a href="images/portfolio/full/3.jpg" class="lightbox" title="Duis Eu Eros Viverra">
                        <img src="images/portfolio/3.jpg" alt="">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Illustration</small>
                          <i class="pe-7s-icon pe-7s-photo"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 3 -->

                    <!-- Portfolio Item 4 -->
                    <figure class="item" data-groups='["all", "media"]'>
                      <a class="ajax-page-load" href="portfolio-2.html">
                        <img src="images/portfolio/4.jpg" alt="">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Media</small>
                          <i class="pe-7s-icon pe-7s-display2"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 4 -->

                    <!-- Portfolio Item 5 -->
                    <figure class="item" data-groups='["all", "illustration"]'>
                      <a href="images/portfolio/full/5.jpg" class="lightbox" title="Aliquam Condimentum Magna Rhoncus">
                        <img src="images/portfolio/5.jpg" alt="">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Illustration</small>
                          <i class="pe-7s-icon pe-7s-photo"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 5 -->

                    <!-- Portfolio Item 6 -->
                    <figure class="item" data-groups='["all", "media"]'>
                      <a class="ajax-page-load" href="portfolio-3.html">
                        <img src="images/portfolio/6.jpg" alt="">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Media</small>
                          <i class="pe-7s-icon pe-7s-display2"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 6 -->

                    <!-- Portfolio Item 7 -->
                    <figure class="item" data-groups='["all", "video"]'>
                      <a href="https://player.vimeo.com/video/97102654?autoplay=1" title="Nulla Facilisi" class="lightbox mfp-iframe">
                        <img src="images/portfolio/7.jpg" alt="">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Video</small>
                          <i class="pe-7s-icon pe-7s-video"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 7 -->

                    <!-- Portfolio Item 8 -->
                    <figure class="item" data-groups='["all",  "media"]'>
                      <a class="ajax-page-load" href="portfolio-4.html">
                        <img src="images/portfolio/8.jpg" alt="">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Media</small>
                          <i class="pe-7s-icon pe-7s-display2"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 8 -->

                    <!-- Portfolio Item 9 -->
                    <figure class="item" data-groups='["all","illustration"]'>
                      <a href="images/portfolio/full/9.jpg" class="lightbox" title="Mauris Neque Dolor">
                        <img src="images/portfolio/9.jpg" alt="">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Illustration</small>
                          <i class="pe-7s-icon pe-7s-photo"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 9 -->

                    <!-- Portfolio Item 10 -->
                    <figure class="item" data-groups='["all", "video"]'>
                      <a href="https://player.vimeo.com/video/97102654?autoplay=1" title="Donec Lectus Arcu" class="lightbox mfp-iframe">
                        <img src="images/portfolio/10.jpg" alt="">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Video</small>
                          <i class="pe-7s-icon pe-7s-video"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 10 -->

                    <!-- Portfolio Item 11 -->
                    <figure class="item" data-groups='["all","illustration"]'>
                      <a href="images/portfolio/full/11.jpg" class="lightbox" title="Duis Eu Eros Viverra">
                        <img src="images/portfolio/11.jpg" alt="">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Illustration</small>
                          <i class="pe-7s-icon pe-7s-photo"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 11 -->

                    <!-- Portfolio Item 12 -->
                    <figure class="item" data-groups='["all","media"]'>
                      <a class="ajax-page-load" href="portfolio-5.html">
                        <img src="images/portfolio/12.jpg" alt="">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Media</small>
                          <i class="pe-7s-icon pe-7s-display2"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 12 -->
                  </div>
                  <!-- /Portfolio Grid -->

                </div>
                <!-- /Portfolio Content -->
              </div>
            </section>
            <!-- /Portfolio Subpage -->

            <!-- Contact Subpage -->
            <?php 
            $fetch = mysqli_query($config,"SELECT * FROM contact_admin");
            while($row = mysqli_fetch_assoc($fetch))
            {
              $address = $row['address'];
              $mail = $row['email'];
              $pnumbar = $row['phone_number'];
              $free = $row['freelance'];
            }
            ?>
            <section class="pt-page pt-page-5" data-id="contact">
              <div class="border-block-top-110"></div>
              <div class="section-inner">
                <div class="section-title-block">
                  <div class="section-title-wrapper">
                    <h2 class="section-title">Contact</h2>
                    <h5 class="section-description">Get in Touch</h5>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6 col-md-6 subpage-block">
                    <div class="block-title">
                      <h3>Get in Touch</h3>
                    </div>
                    <p>Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras pretium rutrum egestas. Integer ultrices libero sed justo vehicula, eget tincidunt tortor tempus.</p>
                    <div class="contact-info-block">
                      <div class="ci-icon">
                        <i class="pe-7s-icon pe-7s-map-marker"></i>
                      </div>
                      <div class="ci-text">
                        <h5><?php echo $address; ?></h5>
                      </div>
                    </div>
                    <div class="contact-info-block">
                      <div class="ci-icon">
                        <i class="pe-7s-icon pe-7s-mail"></i>
                      </div>
                      <div class="ci-text">
                        <h5><a href="/cdn-cgi/l/email-protection"><?php echo $mail; ?></a></h5>
                      </div>
                    </div>
                    <div class="contact-info-block">
                      <div class="ci-icon">
                        <i class="pe-7s-icon pe-7s-call"></i>
                      </div>
                      <div class="ci-text">
                        <h5><?php echo $pnumbar; ?></h5>
                      </div>
                    </div>
                    <div class="contact-info-block">
                      <div class="ci-icon">
                        <i class="pe-7s-icon pe-7s-check"></i>
                      </div>
                      <div class="ci-text">
                        <h5><?php echo $free; ?></h5>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-6 subpage-block">
                    <div class="block-title">
                      <h3>Contact Form</h3>
                    </div>
                    <form id="contact-form" method="post" action="contact_form/contact_form.php">

                      <div class="messages"></div>

                      <div class="controls">
                        <div class="form-group">
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                            <div class="form-control-border"></div>
                            <i class="form-control-icon pe-7s-user"></i>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                            <div class="form-control-border"></div>
                            <i class="form-control-icon pe-7s-mail"></i>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <textarea id="form_message" name="message" class="form-control" placeholder="Message for Me" rows="4" required="required" data-error="Please, leave me a message."></textarea>
                            <div class="form-control-border"></div>
                            <i class="form-control-icon pe-7s-comment"></i>
                            <div class="help-block with-errors"></div>
                        </div>

                        <input type="submit" class="button btn-send" value="Send message">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </section>
            <!-- End Contact Subpage -->

             <!-- login Subpage -->
            <section class="pt-page pt-page-5" data-id="login">
              <div class="border-block-top-110"></div>
              <div class="section-inner">
                <div class="section-title-block">
                  <div class="section-title-wrapper">
                    <h2 class="section-title">login</h2>
                    <h5 class="section-description">Modify Your Card Here</h5>
                  </div>
                </div>
               

               <div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Notification</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">New Admin Registration Portal</p>

      <form method="POST">

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <?php 

        $length = 6;
        $generateString  = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $generatedSSN = substr(str_shuffle($generateString),1,$length);

        ?>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="User SSN" name="userSSN" value="<?php echo $generatedSSN; ?>" readonly="" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-shield-alt"></span>
            </div>
          </div>
        </div>


        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="email" name="mail" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>


        <div class="row">
           <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-warning btn-block form-control" name="registerAdmin">Register Admin</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <?php
      $admin = $_POST['username'];
      $code = $_POST['userSSN'];
      $pass = $_POST['password'];
      $mail = $_POST['mail'];
      $admin_pic = 'test';
      $description = 'description';

    if(isset($_POST['registerAdmin']))
      {
        $insertdata = mysqli_query($config,"INSERT INTO admin_info(name,password,userssn,email,admin_pic,description) VALUES('$admin','$pass','$code','$mail','$admin_pic','$description')");

      if($insertdata)
      {
        session_start();
        $_SESSION['loggedInUser'] = $username;
        echo "<script>alert('data inserted');window.location.href='login.php'</script>";
      }
      else
      {
        echo "<script>alert'nothing inserted'</script>";
      }
    }

       ?>

       <div class="social-auth-links text-center mb-3">
         <p>- OR -</p>
       </div>
        <div class="col-12">
            <a href="<?php echo $base_address; ?>" type="submit" class="btn btn-secondary btn-block form-control" name="registerAdmin"><i class="fas fa-home"></i> Back to Home</a>
          </div>
       <div class="text-center mb-3">Already have an account? <span><a href="dashboard/pages/examples/login.php">Login Here</a></span></div>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
                <div class="row">
                  <div class="col-sm-6 col-md-6 subpage-block">
                    <div class="block-title">
                      <h3>Modify Your Card Here</h3>
                    </div>
                    
                    <div class="contact-info-block">
                      <div class="ci-icon">
                        <i class="pe-7s-icon pe-7s-map-marker"></i>
                      </div>
                      
                    </form>
                  </div>
                </div>
              </div>
            </section>
            <!-- End Contact Subpage -->

          </div>
        </div>
        <!-- /Page changer wrapper -->
      </div>
      <!-- /Main Content -->
    </div>

    
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/bootstrap.min.js"></script>
    <script src="js/pages-switcher.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/validator.js"></script>
    <script src="js/jquery.shuffle.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/jquery.hoverdir.js"></script>
    <script src="js/main.js"></script>

    <!-- Demo Color changer Script -->
    <script src="preview/lmpixels-demo-panel.js"></script>
    <!-- /Demo Color changer Script -->
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"855612bf5f0a6562","r":1,"version":"2024.2.0","token":"94b99c0576dc45bf9d669fb5e9256829"}' crossorigin="anonymous"></script>
</body>
</html>
