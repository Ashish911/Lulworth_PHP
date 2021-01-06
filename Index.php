<?php
require('includes/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lulworth Cove Drama Club</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Links -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/CustomStyle.css">
  <link rel="stylesheet" href="slick/slick.css"/>
  <link rel="stylesheet" href="slick/slick-theme.css"/>

  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c2dcf9582491369baa04d18/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</head>
<body>

<!-- Navbar -->
<div class="mynav">
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="Index.php">LCDC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="Index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="AboutUs.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Blog.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ContactUs.php">ContactUs</a>
        </li>
      </ul>
      <?php
        if (isset($_SESSION['login'])!='yes')
         {
          ?>
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="Login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="SignUp.php">Register</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
            </form>

        <?php
      }
      else
      {
         ?>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false" style="cursor:pointer;">
          Welcome <?php echo $_SESSION['login_username']?>
        </a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="UserProfile.php?id=<?php echo $_SESSION['login_Id']?>">Profile</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
      </form>
      <?php
    }
      ?>
    </div>
  </nav>
</div>
<!-- Navbar -->

<!-- Carousel -->
<div id="MainCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#MainCarousel" data-slide-to="0" class="active"> </li >
		<li data-target="#MainCarousel" data-slide-to="1"> </li>
		<li data-target ="#MainCarousel" data-slide-to="2"> </li>
	</ol >

	<div class="carousel-inner" role="listbox">
		<?php
		$findeventquery = "SELECT * FROM tbl_events ORDER BY Event_Id ASC LIMIT 3";
		$result = $connection->query($findeventquery);
		$i=1;
		while($row = $result->fetch_array()){
		?>
		<div class="carousel-item <?php if ($c!=1){ echo "active"; } ?>" >
		<?php if ($i==1) { echo '<img  src="Img\ballet.jpg" width="100%"  height="900px" alt="singing photo">'; }
			else if($i==2) { echo '<img  src="Img\Sing.jpg" width="100%"  height="900px" alt="dancing photo">'; }
			else if($i==3) { echo '<img  src="Img\Drama.jpg" width="100%"  height="900px" alt="drama photo">'; }
		?>
			<div class="carousel-caption">
				<div style="margin-bottom:30%;">
					<h2 class="mt-5 text-responsive"><?php echo $row['Event_Name']?></h2>
					<h4 class=""><?php echo $row['Event_Description']?></h4>

					<p>
					<i class="fa fa-calendar-o mr-2"></i><?php echo $row['Event_Date']?>
          </p>
          <p>To book go down to event booking section</p>
				</div>
			</div>
			<?php $c=1; ?>
		</div>

		<?php
		$i++;}
		?>

	</div>


	<a class="carousel-control-prev" href="#MainCarousel" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon"> </span>
	</a>
	<a class="carousel-control-next" href="#MainCarousel" role="button" data-slide="next">
		<span class="carousel-control-next-icon"> </span>
	</a>

</div>
 <!--Carousel -->
    <!-- About Us -->
  <div class="container py-5 ">
    <div class="row font-weight-bold text-center my-5">
      <div class="col-md-12">
        <h1 class="wow fadeIn delay-0s"> About Us</h1>
      </div>
    </div>
      <div class="row mt-5 wow fadeInLeft delay-0s">
        <div class="col-md-6"><img src="Img/AboutUS.jpg" alt="AvoutUs" class="img-fluid "></div>
        <div class="col-md-6">
          <p>Our mission is what drives us to do everything possible to expand human talent. We do that by giving fascinating classes to our students and sharpening their talent. </p>
          <p>He have been doing this since 2001. Its already been 18 years and we are countinuing our legacy and creating great talents....</p>
          <a class="btn btn-success btn-rounded" href="AboutUs.php">Read More</a>
        </div>
      </div>
  </div>
    <!-- About Us -->

<!-- Call to Action -->
  <section id="call-to-action" class="py-5">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3 class="display-4 font-weight-bold text-light mb-0 pt-md-5 pt-5 wow fadeInUp">Our Classes are Ready</h1>
            <h5 class="text-light pt-md-5 pt-sm-2 pt-5 pb-md-5 pb-sm-3 pb-5 wow fadeInUp" data-wow-delay="0.2s">It comes
              with a lot videos and images for references. There is a short description of our classes below. For more information check it out now!</h5>
              <?php
                if (isset($_SESSION['login'])!='yes')
                 {
                  ?>
            <div class="wow fadeInUp" data-wow-delay="0.4s">
              <a class="btn btn-success btn-rounded" href="SignUp.php">Sign up Now!</a>
              <a class="btn btn-success btn-rounded" href="AboutUs.php">Learn more</a>
            </div>

                    <?php
                  }
                  else
                  {
                     ?>
                     <div class="wow fadeInUp" data-wow-delay="0.4s">
                       <a class="btn btn-success btn-rounded" href="AboutUs.php">Learn more</a>
                     </div>
                     <?php
                   }
                   ?>
          </div>
        </div>
      </div>
    </section>
<!-- Call to Action -->

<!-- Classes -->
    <div class="container wow fadeIn py-5">
        <div class="row font-weight-bold text-center my-5">
           <div class="col-md-12">
             <h1 class="wow fadeIn delay-0s">Classes</h1>
           </div>
           <div class="row">
             <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
               <div class="box">
                 <h4 class="title">Singing Class</h4>
                 <p class="description">This is our singing class where we teach singing. We teach from classical singing to rock and roll.</p>
                 <div class="wow fadeInUp" data-wow-delay="0.4s">
                   <a class="btn btn-success btn-rounded mb-3" href="AboutUs.php">Read More</a>
                   <iframe height="200" src="https://www.youtube.com/embed/UokL7H39PvA"></iframe>
                 </div>
               </div>
             </div>
             <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
               <div class="box">
                 <h4 class="title">Dance Class</h4>
                 <p class="description">This is our dancing class where we teach dancing. We teach from folk dances to hipop dances from all around the world.</p>
                 <div class="wow fadeInUp" data-wow-delay="0.4s">
                   <a class="btn btn-success btn-rounded mb-3" href="AboutUs.php">Read More</a>
                   <iframe height="200" src="https://www.youtube.com/embed/hx8K9drDKrU"></iframe>
                 </div>
               </div>
             </div>
             <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
               <div class="box">
                 <h4 class="title">Drama Class</h4>
                 <p class="description">This is our drama class where we teach drama. We teach students starting with basics of film and theatre.</p>
                 <div class="wow fadeInUp" data-wow-delay="0.4s">
                   <a class="btn btn-success btn-rounded mb-3" href="AboutUs.php">Read More</a>
                   <iframe height="200" src="https://www.youtube.com/embed/fRgNLEPGeG0"></iframe>
                 </div>
               </div>
             </div>
           </div>
     </div>
   </div>
<!-- Classes -->

<!-- Newsletter -->
<section id="Newssubscribe">
  <div class="container wow fadeInUp">
    <div class="section-header text-center">
      <h2>Newsletter</h2>
      <p>Here you can subscribe to our newsletter. By doing so you will get news and updates from us.</p>
    </div>
    <form method="post" action="NewsletterAction.php">
      <div class="form-row justify-content-center">
        <div class="col-auto">
          <input type="email" class="form-control" name="Email" placeholder="Enter your Email" required>
        </div>
        <div class="col-auto">
          <input type="submit" class="btn btn-rounded bg-success text-light" title="subscribe" name="subscribe" value="subscribe"/>
        </div>
      </div>
    </form>
  </div>
</section>
<!-- Newsletter -->

<!-- Upcoming Events -->
<div class="Upcoming-Events">
 <div class="container-fluid bg-light">
  <div class="container">
    <h2 class="h1-responsive font-weight-bold text-center my-5 wow fadeIn">Upcoming Events and Blog</h2>
    <div class="row wow fadeInRight">
    <?php
    $query = "SELECT * FROM tbl_Blog LIMIT 2";

    $result = $connection->query($query);
    while ($row = $result->fetch_array()) {
     ?>
      <div class="col-lg-6 col-md-6">
        <div class="Thumbnail mb-3">
          <img class="img-fluid" src="Img/Coachella.jpg" alt="Coachella">
        </div>
        <div class="blog-column1">
        <h5 class="font-weight-bold text-center mb-3"><?php echo $row['Blog_Title']?></h3>
        <p class="dark-grey-text text-center"><?php echo $row['Blog_Description'] ?> </p>
        <a class="btn btn-success text-light btn-md mb-3 ml--btn-I" href="Blog.php">Read more</a>
      </div>
    </div>
    <hr class="my-5">
    <?php } ?>
    </div>
  </div>
 </div>
</div>
<!-- Upcoming Events -->

<div class="container">
<table width="100%" cellspacing="1">
  <thead>
    <tr>
        <th>S.No</th>
        <th>Event Name</th>
        <th>Event Description</th>
        <th>Event Date</th>
        <th>Booking</th>
    </tr>
  </thead>
  <tbody>
        <?php

        $query = "SELECT * FROM tbl_events";

        $result = $connection->query($query);
        $i=1;
        while($row = $result->fetch_array()){
        ?>
    <tr>
        <td><?php echo $i?></td>
        <td><?php echo $row['Event_Name']?></td>
        <td><?php echo $row['Event_Description']?></td>
        <td><?php echo $row['Event_Date']?></td>
        <?php
          if (isset($_SESSION['login'])!='yes')
          {
          ?>
                  <td><a href="Login.php" class="btn btn-success">Book Now</a></td>
          <?php
        }
        else
        {
           ?>
                  <td><form method="post" action="bookaction.php">
                    <input type="hidden" name="event" value="<?php echo $row['Event_Id']?>">
                    <input type="submit" class="btn btn-success w-50" name="Book" value="Book Now">
                  </form>
                  </td>
           <?php
         }
         ?>
    </tr>
        <?php
        $i++;}
        ?>
</tbody>
</table>
</div>

<!-- Testimonials -->
<div id="TestimonialsI">
<div class="container-fluid">
<div class="row">
  <div class="col-sm-12 wow fadeInUp">
    <h2 class="pt-2 text-center text-light font-weight-bold">Testimonials</h2>
      <div class="thing" id="wrapper">
        <?php
          $query = "SELECT Username,Comment FROM tbl_contactus LIMIT 3";

          $result = $connection->query($query);
            while ($row = $result->fetch_array()) {
              ?>
              <div class="h5 font-weight-normal one-slide mx-auto">
                <div class="testimonial w-100 text-center text-light justify-content-center flex-wrap align-items-center">
                  <div class="message text-center blockquote w-100"><?php echo $row['Comment']?></div>
                  <div class="blockquote-footer text-light w-100"><?php echo $row['Username']?></div>
                </div>
              </div>
            <?php
            }
        ?>
      </div>
  </div>
</div>
</div>
</div>

<?php
require('Cookie.php');
?>

<!-- Footer -->
<footer class="page-footer font-small pt-4 wow fadeInUp delay-0s" >
    <div class="container text-center text-white text-md-left">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">LCDC</h5>
          <p>We help to create great talents and enlighten your talent.</p>
        </div>
        <hr class="clearfix w-100 d-md-none">
        <div class="col-md-3 mx-auto">
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
          <ul class="list-unstyled">
            <li>
              <a href="AboutUs.php">AboutUs</a>
            </li>
            <li>
              <a href="Blog.php">Blog</a>
            </li>
            <li>
              <a href="ContactUs.php">ContactUs</a>
            </li>
            <li>
              <a href="Login.php">Login</a>
            </li>
          </ul>
        </div>
        <hr class="clearfix w-100 d-md-none">
        <div class="col-md-3 mx-auto">
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact</h5>
          <ul class="list-unstyled">
            <p>
            <i class="fa fa-home mr-3"></i> Lulworth Cove, LC 10012, UK</p>
          <p>
            <i class="fa fa-envelope mr-3"></i> info@gmail.com</p>
          <p>
            <i class="fa fa-phone mr-3"></i> + 44 234 567 88</p>
          </ul>
        </div>
      </div>
    </div>
    <div class="Social">
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <h5 class="mb-1 text-light"> Follow Us On</h5>
        <a href="https://www.facebook.com" class="btn fa fa-facebook"></a>
        <a href="https://twitter.com" class="btn fa fa-twitter"></a>
        <a href="https://plus.google.com" class="btn fa fa-google"></a>
        <a href="https://www.instagram.com" class="btn fa fa-instagram"></a>
      </li>
    </ul>
  </div>
    <div class="footer-copyright text-center text-light py-1">Lulworth Cove Drama Club © 2019 Copyright</div>
</footer>
<!-- Footer -->

<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="slick/slick.min.js"></script>
<script>
var wow = new WOW(
  {
    boxClass:     'wow',
    animateClass: 'animated',
    offset:       0,
    mobile:       true,
    live:         true,
    callback:     function(box) {
    },
    scrollContainer: null,
    resetAnimation: true,
  }
);
wow.init();
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.thing').slick({
      dots: true,
      arrows: false,
      autoplay: true,
      autoplaySpeed:2000
    });
  });
</script>

</body>
</html>
