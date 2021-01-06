<?php
require('includes/db.php');
include('includes/functions.php');
checkLogin();
checkadmin();
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
      <a class="navbar-brand" href="#">LCDC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="adminpanel.php">AdminPanel</a>
          </li>
        </ul>
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
      </div>
    </nav>
  </div>

  <!-- User Info -->

<div class="container mt-5 pt-5 pl-5 pr-5 ">
  <div class="card-body text-center w-10">
  <h2 class="font-weight-bold pb-3"> Admin Information</h2>
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
  <label class="col-3">Comment:</label>
  <label class="col-3"><?php  echo $row['Comment']?>
  </div>
</div>
<div style="margin-left:40%;">
<a class="btn btn-rounded btn-success" href="EditAdmin.php?id=<?php echo $_SESSION['login_Id']?>">Edit Admin</a>
<a class="btn btn-rounded btn-success" href="EditAdminPassword.php?id=<?php echo $_SESSION['login_Id']?>">Change Password</a>
</div>
<div style="margin-left:45%;" class="mt-2">
<a class="btn btn-rounded btn-success" href="adminpanel.php">Dashboard</a>
</div>
</div>
  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  </body>
  </html>
