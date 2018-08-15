<?php
session_start();      
require_once('db.php');
      date_default_timezone_set('Asia/Kolkata');
        if ($connection->connect_errno) {
        printf("Connect failed: %s\n", $conn->connect_error);
        exit();
      }
      if(isset($_POST)){

          if(isset($_POST['press'])) {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $message = $_POST['message'];
          $subject = $_POST['subject'];
          $date = date('m/d/Y h:i:s a', time());
           
          $query = "INSERT INTO contact (name, subject, email, message,date)
          VALUES ('".$name."','".$subject."','".$email."','".$message."','".$date."')";
          $result = $connection->query($query) ;
          if($result){
            $_SESSION['query'] = "done" ;
          }
          if(!$result){
            echo "bug";
          }
          }
          }

?>  

<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <title>Distinct tribe</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Personal branding services,Personal branding services in Delhi, Influencer marketing services,Digital marketing services in delhi,Boutique marketing agency in Delhi" name="keywords">
  <meta content="Get Influencer marketing , Personal Branding services in Delhi" name="description">
  <meta content="https://distincttribe.com/" name="author">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="https://www.facebook.com/distincttribe/">
  <meta property="og:site_name" content="https://distincttribe.com/">
  <meta property="og:description" content="Advertising/marketing in New Delhi">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- popup -->
  <link rel="stylesheet" href="https://www.jacklmoore.com/colorbox/example1/colorbox.css" />

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="img/Favicon.png" type="image/png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/social.css">

</head>

  <!--==========================
  Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="img/logo.png" alt="Imperial">
        </div>

        <!-- <h1>Welcome to Imperial studios</h1> -->
        <h2 style="color:white">Being <span class="text"></span> is Better</h2>
        <div><h2 style="color:white;margin-top:-25px;">than Being Better</h2></div>
        <div class="actions">
        <!-- <h2>We are under Maintenance , Sorry for the inconvenience caused.</h2> -->
          <a href="#about" class="btn-get-started">Get Started</a>
          <a href="#services" class="btn-services">Our Services</a>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/navlogo2.png" alt="" title="" /></a>
        <a href="#hero"><img src="img/navlogo.png" style="width:150px;height:200px;margin-left:-30px;"  alt="" title="" /></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php#hero">Home</a></li>
          <li><a href="index.php#about">About</a></li>
          <li><a href="index.php#services">Services</a></li>
          <!-- <li><a href="#portfolio">Social</a></li> -->
          <!-- <li><a href="#testimonials">Online PR</a></li> -->
          <li><a href="index.php#team">Team</a></li>
          <li><a href="blog.php">Blogs</a></li>
          <!-- <li class="menu-has-children"><a href="">Blogging</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <li><a href="index.php#contact">Contact Us</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->
<body>
  <!-- Contact button -->
  <a href="#contact" class="float">
    <i class="fa fa-envelope my-float"></i>
    </a>
    <div class="label-container">
    <div class="label-text">Contact Us</div>
    <i class="fa fa-play label-arrow"></i>
    </div>
<div id="preloader"></div>

      <!--==========================
  About Section
  ============================-->
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">We are</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">A team of dedicated like-minded individuals with a vision to revolutionize the digital marketing scenario of the world by enhancing the content circulating on digital media. We believe that a human mind and consequently behaviour is curated by its observational surroundings which, in this age, comprises mostly of digital media. We want to create an environment where people are encouraged to put better content on digital media, in turn, making the world a better place surrounded by quality food for thoughts.
          </p>
        </div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
      <div class="row">

        <div class="col-lg-6 about-img">
          <img src="img/Aboutus.png" alt="">
        </div>

        <div class="col-md-6 about-content">
        <h2 class="about-title">What We Do</h2>
        <ul type="none">
          <li>
            <p class="about-text">
            <i class="fa fa-check-circle" aria-hidden="true"></i> Creating brand strategies , Content Curation , Website building 
            </p>
          </li>
          <li>
            <p class="about-text">
            <i class="fa fa-check-circle" aria-hidden="true"></i> Graphics Designing , Social Media Marketing , Scaling up SEO
            </p>
          </li>
          <li>
            <p class="about-text">
            <i class="fa fa-check-circle" aria-hidden="true"></i> Public Relation , Online Reputation Management , Online Advertising
            </p>
          </li>
          <li>
            <p class="about-text">
            <i class="fa fa-check-circle" aria-hidden="true"></i> Collaborations , Artist Management
            </p>
          </li>
        </ul>
          <h2 class="about-title">Our approach</h2>
          <ul>
          <li>
            <p class="about-text">
              Market Analyzation and building strategy accordingly.
            </p>
          </li>
          <li>
            <p class="about-text">
              Deciphering your USP and marketing as your strength weaving a story around it.
            </p>
          </li>
          <li>
            <p class="about-text">
              Implementing the measures for your brand optimization and brand building.
            </p>
          </li>
          <li>
            <p class="about-text">
              Boosting your relation with the public through Social Media campaign and outreach along with apt collaborations.
            </p>
          </li>
          <li>
            <p class="about-text">
              Audience engagement through consistent top quality Content.
            </p>
          </li>
          <li>
            <p class="about-text">
              Quantifying and assessing the results.
            </p>
          </li>
        </ul>
        </div>
      </div>
    </div>
  </section>

 
   <!--==========================
  Services Section
  ============================-->
  <section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">our passion lies in</h3>
          <div class="section-title-divider"></div>
          <p class="section-description"></p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 service-item">
          <a href="services.php#login">
          <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
          <h4 class="service-title">Influencer marketing</h4>
          </a>
          <p class="service-description">Using Influencer’s hard-earned credibility for brand’s best interest.
          </p>
        </div>
        <div class="col-md-4 service-item">
          <a href="services.php#personal">
          <div class="service-icon"><i class="fa fa-road"></i></div>
          <h4 class="service-title">Personal Branding</h4>
          </a>
          <p class="service-description">Yes, you are a brand too or could be built into one, if you are distinct from the rest.
          </p>
        </div>
        <div class="col-md-4 service-item">
          <a href="services.php#digital">
          <div class="service-icon"><i class="fa fa-desktop"></i></div>
          <h4 class="service-title">Digital marketing</h4>
          </a>
          <p class="service-description">Digital attraction for driving reactions from your Target Audience  </p>
        </div>

        <!-- <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
          <h4 class="service-title"><a href="">Sed ut perspiciatis</a></h4>
          <p class="service-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
        </div> -->
        <!-- <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-photo"></i></div>
          <h4 class="service-title"><a href="">Magni Dolores</a></h4>
          <p class="service-description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div> -->

        <!-- <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-shopping-bag"></i></div>
          <h4 class="service-title"><a href="">Eiusmod Tempor</a></h4>
          <p class="service-description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
        </div> -->
      </div>
    </div>
  </section>  


    <!-- 
    Team new
   -->

   <section class="main-section team" id="team">
		<!--main-section team-start-->
		<div class="container">
        <div class="row">
            <div class="col-md-12">
              <h3 class="section-title">Our Team</h3>
              <div class="section-title-divider"></div>
              <p class="section-description">Take a closer look at our amazing team. We won't bite.</p>
            </div>
          </div>
			<!-- <h2>team</h2>
			<h6>Take a closer look into our amazing team. We won’t bite.</h6> -->
			<div class="team-leader-block clearfix">
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/Manish.png" alt="">
						<ul>
							<li><a href="https://twitter.com/niche_manish" class="fa fa-twitter"></a></li>
							<li><a href="https://www.facebook.com\manish90s" class="fa fa-facebook"></a></li>
							<li><a href="https://instagram.com/im.a.niche	" class="fa fa-instagram"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-03s">Manish Kumar</h3>
					<span class="wow fadeInDown delay-03s">Founder & CEO</span>
					<!-- <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p> -->
				</div>
				<div class="team-leader-box">
					<div class="team-leader  wow fadeInDown delay-06s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/Pooja.png" alt="">
						<ul>
							<li><a href="https://twitter.com/Being__Bhand" class="fa fa-twitter"></a></li>
							<li><a href="https://www.facebook.com/sharma5252" class="fa fa-facebook"></a></li>
							<li><a href="https://instagram.com/Being_Bhand" class="fa fa-instagram"></a></li>
							<li><a href="https://www.linkedin.com/in/pooja-sharma-a0794baa/" class="fa fa-linkedin"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-06s">Pooja Sharma</h3>
					<span class="wow fadeInDown delay-06s">Sr. Business Manager</span>
					<!-- <p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p> -->
        </div>
        <div class="team-leader-box">
					<div class="team-leader  wow fadeInDown delay-06s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/Anupam.png" alt="">
						<ul>
							<li><a href="https://twitter.com/andyanupam" class="fa fa-twitter"></a></li>
							<li><a href="https://www.linkedin.com/in/anupam-jha-31669a49" class="fa fa-linkedin"></a></li>
              <li><a href="https://www.instagram.com/instandyyy/" class="fa fa-instagram"></a></li>              
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-06s">Anupam Jha</h3>
					<span class="wow fadeInDown delay-06s">Sr Operations and Customer Relationship Manager</span>
					<!-- <p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p> -->
        </div>
			</div>
		</div>
	</section>
  <section class="main-section team team-2" id="team">
		<!--main-section team-start-->
		<div class="container">
			<!-- <h2>team</h2>
			<h6>Take a closer look into our amazing team. We won’t bite.</h6> -->
			<div class="team-leader-block clearfix">
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/Sonika.png" alt="">
						<ul>

              <li><a href="https://instagram.com/tangled__thoughts" class="fa fa-instagram"></a></li>
              
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-03s">Sonika Sharma</h3>
					<span class="wow fadeInDown delay-03s">Sr Content Manager</span>
					<!-- <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p> -->
				</div>
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/Archit.png" alt="">
						<ul>

              <li><a href="https://www.instagram.com/desi_hippie/" class="fa fa-instagram"></a></li>
              <li><a href="https://www.facebook.com/archit.sharma.750" class="fa fa-facebook"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-03s">Archit Sharma</h3>
					<span class="wow fadeInDown delay-03s">Social Media Manager</span>
					<!-- <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p> -->
				</div>
        <div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-09s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/Varsha.png" alt="">
						<ul>
							<li><a href="https://www.facebook.com/varsha.bhatia.77" class="fa fa-facebook"></a></li>
							<li><a href="https://www.instagram.com/madar_bhatu/" class="fa fa-instagram"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-09s">Varsha Bhatia </h3>
					<span class="wow fadeInDown delay-09s">Video production Manager</span>
					<!-- <p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p> -->
				</div>
      </div>
      <div class="team-leader-block clearfix">
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-09s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/Gourav.jpg" alt="">
						<ul>
							<li><a href="https://twitter.com/gourav_agra" class="fa fa-twitter"></a></li>
							<li><a href="https://www.facebook.com/gourav.agrawal.108" class="fa fa-facebook"></a></li>
							<li><a href="https://instagram.com/gourav.21" class="fa fa-instagram"></a></li>
							<li><a href="https://www.linkedin.com/in/gourav-agrawal-528b72bb" class="fa fa-linkedin"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-09s">Gourav Agrawal </h3>
					<span class="wow fadeInDown delay-09s">Sr Financial Manager</span>
					<!-- <p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p> -->
				</div>
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/Pooja2.png" alt="">
						<ul>
              <li><a href="https://www.facebook.com/pooja.gulati.35" class="fa fa-facebook"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-03s">Pooja Gulati</h3>
					<span class="wow fadeInDown delay-03s">HR Manager</span>
					<!-- <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p> -->
				</div>
        
			</div>  
		</div>
  </section>
  

    <!--==========================
  Contact Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">get in touch</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Get a free brand assessment from us
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>139/9,lane no.-8,new Mahavir<br>nagar,Janakpuri East</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>folks@distincttribe.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+919538723583</p>
            </div>

          </div>
        </div>

        <div class="col-md-5 col-md-push-2">
          <div class="form">
            <?php
            if(isset($_SESSION)){ if(isset($_SESSION['query']))  { if($_SESSION['query']=="done") { $_SESSION['query']="ok"; ?> <div class="alert alert-success">your message is sent</div> <?php }}} ?> 
            <div id="errormessage"></div>
            <form action="" method="post" role="form" >
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit" name="press">Send Message</button></div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>



  <!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright All Rights Reserved
          </div>
          <div class="credits">
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>
  <script src="js/jumble.js"></script>

  <script src="contactform/contactform.js"></script>
  <script src="login-modal.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://www.jacklmoore.com/colorbox/jquery.colorbox.js"></script>
  <script>
    function openColorBox(){
      $.colorbox({iframe:true, width:"80%", height:"80%", href: "offer.html"});
    }
    
    function countDown(){
      seconds--
      $("#seconds").text(seconds);
      if (seconds === 0){
        openColorBox();
        clearInterval(i);
      }
    }

    var seconds = 5,
        i = setInterval(countDown, 1000);
  </script>
</body>

</html>
