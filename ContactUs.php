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
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="Index.php">LCDC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="Index.php">Home </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="AboutUs.php">About Us</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="Blog.php">Blog</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="ContactUs.php">ContactUs<span class="sr-only">(current)</span></a>
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

<div class="container">
<div class="row mt-3 pt-5">
<div class="col-12">
  <iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=lulworth%20cove%2C%20dorset+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" width="100%" height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-6">
  <div class="page-wrapper padding-t-C padding-b-C ">
      <div class="wrapper wrapper--C">
          <div class="card ">
              <div class="card-body">
                  <h2 class="title text-center font-weight-bold">Contact Form</h2>
                  <form method="post" action="ContactUsAction.php">
                      <div class="row row-space">
                          <div class="input-group px-3">
                              <input class="input--style-C" type="text" required="required" name="username" placeholder="Your Name" required>
                          </div>
                          <div class="input-group px-3">
                              <input class="input--style-C" type="email" required="required" name="Email" placeholder="Your Email" required>
                          </div>
                      </div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="textarea--style-C" required="required" name="Comment" placeholder="Comment" required></textarea>
                            </div>
                        </div>
                      <div class="button--panel-C">
                          <input type="submit" class="button" title="Submit" name="Submit" value="Submit"></input>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-3">
<div class="container">
    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact Info</h5>
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
</div>

<!-- ContactUs Form -->

<?php
require('Cookie.php');
?>

<!-- Footer -->
<footer class="page-footer font-small mt-2 pt-2 fixed-bottom" >
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
    <div class="footer-copyright text-center text-light ">Lulworth Cove Drama Club © 2019 Copyright</div>
</footer>
<!-- Footer -->

<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
</body>
</html>
