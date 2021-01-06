<?php
include('includes/db.php');
if(!isset($_SESSION['attempt']))  $_SESSION['attempt'] = 0;
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
</head>
<body>

<!-- Login attempt-->
<?php
 $_SESSION['attempt'].' on ';
if ($_SESSION['attempt']>=3) {
  echo "--";
  echo $currentTime = date("Y-m-d H:i:s");
  $diff = strtotime($currentTime)-strtotime($_SESSION['Login_last_attempt']);
  if($diff<=(3*60)){
    die('<h1>Login Blocked</h1>');
}
else {
    unset($_SESSION['attempt']);
}
}
?>

<?php
if(isset($_GET['msg'])&&$_GET['msg']=='error') {
    ?>
    <div >
        <p class="text-center">Invalid Username / Password<p>
    </div>
    <?php
}
  ?>

<!-- Login Form-->
<div class="page-wrapper bg-gradiant-ab padding-t-L" style="padding-bottom:200px;">
    <div class="wrapper wrapper--L">
        <div class="card ">
            <div class="card-body">
                <h2 class="title text-center font-weight-bold">Login Form</h2>
                <form method="post" action="loginaction.php">
                    <div class="row row-space">
                        <div class="col-12">
                            <div class="input-group">
                                <input class="input--style-L" type="email" required="required" name="username" placeholder="Email" autofocus required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group">
                                <input class="input--style-L" type="password" required="required" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="button-panel-L">
                            <input type="submit" class="button" title="Login" name="login" value="Login"></input>
                        </div>
                        <div class="reminder--L">
                              <p class="pl-5">Don't Have account? <a href="SignUp.php">Sign Up</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Login Form-->

<?php
require('Cookie.php');
?>

<!-- Footer -->
<footer class="page-footer font-small" >
    <div class="footer-copyright text-center text-light py-1">Lulworth Cove Drama Club © 2019 Copyright</div>
</footer>
<!-- Footer -->

<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
</body>
</html>
