<?php
require('includes/db.php');
include('includes/functions.php');
checkLogin();
$id = $_GET['id'];

$query= "SELECT * FROM registerusers WHERE U_id = '$id'";

$result = $connection->query($query);
$row = $result->fetch_array();
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

  <div class="mynav">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
      <a class="navbar-brand" href="Index.php">LCDC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
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
          <a class="nav-link dropdown-toggle active" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false" style="cursor:pointer;">
            Welcome <?php echo $_SESSION['login_username']?>
          </a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
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

  <!-- User Info -->

<div class="container mt-5 pt-5 pl-5 pr-5 ">
  <div class="card-body text-center w-10">
  <h2 class="font-weight-bold pb-3"> User Information</h2>
  <div>
  <label class="col-3">Parent Name:</label>
  <label class="col-3"><?php  echo $row['Parent_Name']?>
  </div>
  <div>
  <label class="col-3">Child Name:</label>
  <label class="col-3"><?php  echo $row['Child_Name']?>
  </div>
  <div>
  <label class="col-3">Child DOB:</label>
  <label class="col-3"><?php  echo $row['Child_DOB']?>
  </div>
  <div>
    <label class="col-3">Age:</label>
    <label class="col-3"><?php $dateOfBirth = $row['Child_DOB'];
              $constantDate = date("Y-9-1");
              $diff = date_diff(date_create($dateOfBirth), date_create($constantDate));
              echo $diff->format('%y');
      ?></label>
  </div>
  <div>
  <label class="col-3">Parent Email:</label>
  <label class="col-3"><?php  echo $row['Parent_Email']?>
  </div>
  <div>
  <label class="col-3">Phone No:</label>
  <label class="col-3"><?php  echo $row['Phone_No']?>
  </div>
  <div>
  <label class="col-3">Address:</label>
  <label class="col-3"><?php  echo $row['Address']?>
  </div>
  <div>
  <label class="col-3">Class:</label>
  <label class="col-3"><?php  echo $row['Class']?>
  </div>
  <div>
  <label class="col-3">Comment:</label>
  <label class="col-3"><?php  echo $row['Comment']?>
  </div>
</div>
<div style="margin-left:41%;">
<a class="btn btn-rounded btn-success" href="EditUser.php?id=<?php echo $_SESSION['login_Id']?>">Edit User</a>
<a class="btn btn-rounded btn-success" href="EditUserPassword.php?id=<?php echo $_SESSION['login_Id']?>">Change Password</a>
</div>
</div>
  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  </body>
  </html>
