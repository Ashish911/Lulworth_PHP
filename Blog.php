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
        <li class="nav-item active">
          <a class="nav-link" href="Blog.php">Blog<span class="sr-only">(current)</span></a>
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
        <button class="btn btn-success my-2 my-sm-0 " type="submit"><i class="fa fa-search"></i></button>
      </form>
      <?php
    }
      ?>
    </div>
  </nav>
</div>
<!-- Navbar -->

<!-- Upcoming Events -->
<div class="Upcoming-Events pt-5">
 <div class="container-fluid bg-light">
  <div class="container ">
    <h2 class="h1-responsive font-weight-bold text-center my-5 wow fadeIn">Upcoming Events and Blog</h2>
    <h4 class="text-center dark-grey-text w-responsive mx-auto mb-5 wow fadeIn">Here are all the blogs .</h4>
    <div class="row wow fadeInRight">
      <div class="col-lg-5 col-xl-4">
        <div class="mb-3">
          <img class="img-fluid" src="Img/Coachella.jpg" alt="Coachella">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
      </div>
      <div class="col-lg-7 col-xl-8">
        <h3 class="font-weight-bold mb-3"><strong>Coachella</strong></h3>
        <p class="dark-grey-text"><strong>Coachella</strong> Valley Music and Arts Festival is an annual music and arts festival held at the Empire Polo Club in Indio, California, located in the Inland Empire's Coachella Valley in the Colorado Desert. The event features musical artists from many genres of music, including rock, indie, hip hop, and electronic dance music, as well as art installations and sculptures.This year its gonna happen in April 12-14 2019 and April 19-21 2019.It will include lots of artists such as DJ snake, Zedd, Khalid, Ariana Grande, BlackPink, Diplo, J Balvin, Billie Eilish and many more. </p>
        <p>by <a class="font-weight-bold">Ashish Dongol</a>, 05/01/2019</p>
      </div>
    </div>
    <hr class="my-5">
    <div class="row wow fadeInRight">
      <div class="col-lg-5 col-xl-4">
        <div class="mb-3">
          <img class="img-fluid" src="Img/RedBull.jpg" alt="RedBullBCOne">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
      </div>
      <div class="col-lg-7 col-xl-8">
        <h3 class="font-weight-bold mb-3"><strong>Title of the news</strong></h3>
        <p class="dark-grey-text"><strong>Red Bull BC One</strong> is an annual international B-Boy competition organized by the energy drink company Red Bull. It is an individual B-Boy competition, notable for being the only one of the major international breaking championships to not include a crew event. The main event is a knockout tournament featuring sixteen B-Boys, chosen for exceptional skills in the dance and good character, competing in one-on-one battles decided by a panel of five judges. Regional Finals are held for North America, Eastern Europe, Western Europe, Latin America, Asia Pacific, and Middle East & Africa. The winners of each region go on and participate in the World Finals. The inaugural BC One was held in Biel, Switzerland in 2004.</p>
          <p>by <a class="font-weight-bold">Ashish Dongol</a>, 05/01/2019</p>
      </div>
    </div>
    <hr class="my-5">
  </div>
 </div>
</div>

  <h4 class="text-center dark-grey-text w-responsive mx-auto mb-5 wow fadeIn">These are all the upcoming events.</h4>

<div class="container wow fadeIn">
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
<!-- Upcoming Events -->

  <div class="container-fluid bg-light py-5">
  	<h1 class="text-center wow fadeIn">Forum</h1>
  	<?php
  	$findforumquery = "SELECT * FROM tbl_forums ORDER BY posted_date DESC";
  	$result = $connection->query($findforumquery);
  	$i=1;
  	while($row = $result->fetch_array()){
  	?>

  	<div class="container col-lg-8 col-sm-9 col-xs-10 my-5 wow fadeInUp delay-0.5s">
  		<h1 class="font-weight-bold"><?php echo $row['Title']?></h1>
  		<div class="text-justify"><p><?php echo $row['Content']?></p>

  		<div>
            <p style="text-transform:capitalize;">
              <i class="fa fa-calendar mr-2"></i><?php echo $row['posted_date']?>
              <?php
              $findusernamequery = "SELECT * FROM registerusers WHERE U_id ='{$row['U_id']}'";
              $resultusername = $connection->query($findusernamequery);
              $uname = $resultusername->fetch_array()
              ?>
                    <i class="fa fa-user mr-2 ml-5"></i><?php echo $uname['Parent_Name'] ?></p>
          </div>
  			<p class="btn btn-rounded  btn-outline-success">Comments</p>
  			<?php
  			$findcommentquery = "SELECT * FROM tbl_comments WHERE post_id = '{$row['post_id']}' ORDER BY comment_date DESC";
  			$resultcmt = $connection->query($findcommentquery);
  			$c=1;
  			while($cmt = $resultcmt->fetch_array()){

  				$findcmtusernamequery = "SELECT * FROM registerusers WHERE U_id = '{$cmt['U_id']}'";
  				$cmtusername = $connection->query($findcmtusernamequery);
  				$cmtuname = $cmtusername->fetch_array()
  				?>
  				<div class="bg-secondary pl-2 rounded">
  					<p class="text-light">" <?php echo $cmt['comment'] ?> " <i class="fa fa-user mr-2 ml-5"></i><?php echo $cmtuname['Parent_Name'] ?> </p>
  				</div>
  			<?php
  			$c++;}
  			?>

  		<form class="form-addcomment" method="post" name="addcomment" id="addcommet" action="addcomment.php">
  		  <div class="form-group">
  			<textarea class="form-control" id="post_comment" rows="2" name="post_comment" placeholder="<?php if (empty($_SESSION['login_username'])) { echo "You need to be logged in to reply."; } else{echo "Comment on this post."; } ?>" required></textarea>
  		  </div>
  		  <input type="hidden" value="<?php echo $row['post_id'] ?>" name="post_id" id="post_id" />

  		  <div class="form-group row">
  			  <div class="col-md-6">
  				<button type="submit" class="btn btn-success btn-rounded" <?php if (empty($_SESSION['login_username'])) { echo "disabled"; } ?> >Submit</button>
  			  </div>
  		  </div>
  		</form>

  		</div>
  		</div>

  	<?php
  	$i++;}
  	?>

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
              <a href="Home.php">Home</a>
            </li>
            <li>
              <a href="AboutUs.php">AboutUs</a>
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
