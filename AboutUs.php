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
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top ">
    <a class="navbar-brand" href="Index.php">LCDC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="Index.php">Home </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="AboutUs.php">About Us<span class="sr-only">(current)</span></a>
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

    <!-- About Us -->
  <div class="container py-5 ">
    <div class="row font-weight-bold text-center my-5">
      <div class="col-md-12">
        <h1 class="wow fadeIn delay-0s"> About Us</h1>
      </div>
    </div>
      <div class="row mt-5 wow fadeInLeft delay-0s">
        <div class="col-md-6"><img src="Img/AboutUs.jpg" alt="Ballet" class="img-fluid "></div>
        <div class="col-md-6">
          <p>We first started doing these classes back in 2001 when there were only limited places to learn from. Its already been 18 years since we started and many of our students have become globally renown. </p>
          <p>Our mission is what drives us to do everything possible to expand human talent. We do that by giving fascinating classes to our students and sharpening their talent.
          Here in LCDC we have many teachers for our different classes which have a lot of experience and give quality sessions to our students. We give our best to help our students.</p>
        </div>
      </div>
  </div>
    <!-- About Us -->

<!-- Classes -->
<div class="Classes">
 <div class="container-fluid bg-light">
  <div class="container">
    <h2 class="h1-responsive font-weight-bold text-center my-5 wow fadeIn delay-0s">Classes</h2>
    <div class="row wow fadeInLeft ">
      <div class="col-lg-5 col-xl-4 wow ">
        <div class="mb-3">
          <img class="img-fluid" src="Img/Dance-Class.jpg" alt="Coachella">
        </div>
      </div>
      <div class="col-lg-7 col-xl-8 ">
        <h3 class="font-weight-bold mb-3"><strong>Dance Class</strong></h3>
        <p class="dark-grey-text"> This institute that exposes the grooving talent hidden inside you. All we do is transform all your moves into dance steps. Express through your body what your words cannot. Whether it’s Kathak or Ballet, Bharat Natyam or Contemporary, Classical or Modern or any other forms, just roll in and live your desire.</p>
        <p> Come be a part of LCDC and explore yourself and your abilities to move your body to the beats of music. We believe Dance is the hidden language of the soul and is the visible form of Music. So enroll to communicate in this divine language.</p>
        <?php
          if (isset($_SESSION['login'])!='yes')
          {
          ?>
          <a class="btn btn-success text-light btn-md" href="SignUp.php" >Enroll Now</a>
          <?php
        }
        else
        {
           ?>

           <?php
         }
         ?>
      </div>
    </div>
    <hr class="my-5">
    <div class="row wow fadeInRight">
      <div class="col-lg-7 col-xl-8">
        <h3 class="font-weight-bold mb-3"><strong>Drama Class</strong></h3>
        <p class="dark-grey-text">Basic drama classes introduce students to the fundamental skills of the physical and emotional craft of acting through the study of specific acting methods and exercises. Drama students practice character analysis and learn how to create a dramatic character.</p>
        <p> Students may learn by performing the works of classic playwrights, such as Stanislavsky, Meisner and Chekhov. Acting skills are developed through improvisations, scene work, focused theater exercises, group work and monologues. A fundamentals class is usually taken at the beginning of a program</p>
          <?php
            if (isset($_SESSION['login'])!='yes')
            {
            ?>
            <a class="btn btn-success text-light btn-md" href="SignUp.php" >Enroll Now</a>
            <?php
          }
          else
          {
             ?>

             <?php
           }
           ?>
      </div>
      <div class="col-lg-5 col-xl-4 ">
        <div class="mb-3">
          <img class="img-fluid" src="Img/Drama-Class.jpg" alt="Sample image">
        </div>
      </div>
    </div>
    <hr class="my-5">
    <div class="row wow fadeInLeft">
      <div class="col-lg-5 col-xl-4">
        <div class="mb-3">
          <img class="img-fluid" src="Img/Singing-Class.jpg" alt="Sample image">
        </div>
      </div>
      <div class="col-lg-7 col-xl-8">
        <h3 class="font-weight-bold mb-3"><strong>Singing Class</strong></h3>
        <p class="dark-grey-text">Our classes are fun, welcoming and celebrate the joy of singing. Our professional singing tutors specialise in a range of techniques with a focus all singing types from rock and roll to fully high pitched classical stuff.</p>
        <p> We provide an excellent foundation for absolute beginners, as well as for those who have had some basic vocal training but want to develop their singing technique and vocal skills.Don’t worry if you’re a little nervous - this course focuses on singing as a group and building your confidence. And it doesn't matter if you don't get it right first time round; it's all about practising and enjoying singing! </p>
          <?php
            if (isset($_SESSION['login'])!='yes')
            {
            ?>
            <a class="btn btn-success text-light btn-md mb-2" href="SignUp.php">Enroll Now</a>
            <?php
          }
          else
          {
             ?>

             <?php
           }
           ?>
      </div>
    </div>
  </div>
 </div>
</div>
<!-- Classes -->

<section id="Teacher">
      <div class="container fello--12 wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title text-center">Our Teachers</h3>
        </div>
        <div class="row hello--123">
      <?php

        $query = "SELECT * FROM tbl_teachers";

        $result = $connection->query($query);
        while ($row = $result->fetch_array()) {
        ?>

          <div class="col-lg-4 egpg">
            <div class="member py-3">
              <img src="Img/taylor.jpg" alt="" style="width:100%;">
              <h4 class="text-center mt-2"><?php echo $row['Teacher_Name']?></h4>
            </div>
          </div>
        <?php
      }
        ?>

      </div>
    </section>

    <?php
    require('Cookie.php');
    ?>

    <section class="container my-5">
    	<h1 class="text-center wow fadeInUp delay-0.5s">Book Class</h1>
    	<div class="col-8 mx-auto">
    	<form class="form-register text-center" method="post" name="register" id="register" action="classbookaction.php">
    		<p>Here you can now book class:</p>
    		<div class="form-group row">
    		<div class="col-6">
    				<select class="form-control" id="classes" name="classtype">
    				  <option value="acting">acting</option>
    				  <option value="singing">singing</option>
    				  <option value="dancing">dancing</option>
    				</select>
    		</div>
    		<div class="col-6">
    				<select class="form-control" id="classes" name="scheduletype">
    				  <option value="morning">morning</option>
    				  <option value="day">day</option>
    				  <option value="evening">evening</option>
    				</select>
    		</div>
    		</div>
        <?php
        if (isset($_SESSION['login'])!='yes')
         {
         ?>
    		<button type="submit" class="btn btn-success btn-md" disabled>Submit</button>
        <?php
      }
      else
      {
         ?>
         <button type="submit" class="btn btn-success btn-md" >Submit</button>
         <?php
       }
       ?>
    	</form>
    	</div>

    </section>
<!-- Footer -->
<footer class="page-footer font-small mt-4 pt-4 wow fadeInUp delay-0s" >
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
              <a href="Index.php">Home</a>
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

</body>
</html>
