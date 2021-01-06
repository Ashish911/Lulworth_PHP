<?php
include('includes/db.php');
include('includes/functions.php');
checkLogin();

$id = $_GET['id'];

$query = "SELECT * FROM registerusers WHERE U_id = '$id'";

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

  <div class="page-wrapper padding-t-a padding-b-a">
      <div class="wrapper wrapper--a">
          <div class="card-4">
              <div class="card-body">
                  <h2 class="title text-center font-weight-bold">Change Password</h2>
                  <form method="post" name="edit" id="edit" action="ChangePassword_operation.php">
                    <input type="hidden" name="id" value="<?php echo $row['U_id']?>">
                      <div class="row row-space">
                          <div class="col-lg-6 col-md-12">
                              <div class="input-group">
                                  <label class="label">Old Password</label>
                                  <input class="input--style-a" type="password" required="required" name="OldPassword" required>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-12">
                              <div class="input-group">
                                  <label class="label">New Password</label>
                                  <input class="input--style-a" type="password" required="required" name="NewPassword" required>
                              </div>
                          </div>
                      </div>
                      <div class=" col-12">
                        <div class="input-group">
                          <label class="label">Confirm Password</label>
                          <input class="input--style-a" type="password" required="required" name="ConfirmPassword" required>
                        </div>
                      </div>
                      <div class="button--panel-2">
                          <input type="submit" class="button" title="EditUser" name="EditUser" value="Change Password"></input>
                      </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>

</body>
</html>
