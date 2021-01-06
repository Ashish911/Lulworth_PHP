<?php
include('includes/db.php');
include('includes/functions.php');
checkLogin();
checkadmin();
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
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          Welcome <?php echo $_SESSION['login_username']?>
        </a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="AdminProfile.php?id=<?php echo $_SESSION['login_Id']?>">Profile</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
      </ul>
      </div>
    </nav>
  </div>

<div class="Class-U--UI">
<div class="container mt-5 pt-5">
<div class="font-weight-bold text-uppercase text-center">
<h1> Current Forum Information</h1>
</div>
<div>
<a class="btn btn-rounded btn-success" href="AddForum.php">Add New Forum</a>
</div>
<div class="Class-UI--UI">
<table class="mt-3 table--UI" >
  <thead>
    <tr>
      <th>S.no</th>
      <th>Title</th>
      <th>Content</th>
      <th>Posted Date</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
        <?php

        $query = "SELECT * FROM  tbl_forums";

        $result = $connection->query($query);
        $i=1;
        while($row = $result->fetch_array()){
        ?>
    <tr>
        <td><?php echo $i?></td>
        <td><?php echo $row['Title']?></td>
        <td><?php echo $row['Content']?></td>
        <td><?php echo $row['posted_date']?></td>
        <td><a class="btn btn-rounded btn-success" href="EditForum.php?id=<?php echo $row['post_id']?>">Edit</a>  <a class="btn btn-rounded btn-success" href="DeleteForum.php?id=<?php echo $row['post_id']?>" onclick="Javascript: return confirm('Are you sure you want to delete?');">Delete</a></td>
    </tr>
        <?php
        $i++;}
        ?>
</tbody>
</table>
</div>
<div class="text-center mt-3">
  <a class="btn btn-success btn-rounded" href="adminpanel.php">Back to Dashboard </a>
</div>
</div>
</div>


  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
</body>
</html>
