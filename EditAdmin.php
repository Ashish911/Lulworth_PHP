<?php
include('includes/db.php');
include('includes/functions.php');
checkLogin();
checkadmin();

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
                  <h2 class="title text-center font-weight-bold">Edit Admin</h2>
                  <form method="post" name="edit" id="edit" action="EditAdmin_operation.php">
                    <input type="hidden" name="id" value="<?php echo $row['U_id']?>">
                      <div class="row row-space">
                          <div class="col-lg-6 col-md-12">
                              <div class="input-group">
                                  <label class="label">Parent Name</label>
                                  <input class="input--style-a" type="text" required="required" name="ParentName" value="<?php echo $row['Parent_Name']?>" required>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-12">
                              <div class="input-group">
                                  <label class="label">Child Name</label>
                                  <input class="input--style-a" type="text" required="required" name="ChildName" value="<?php echo $row['Child_Name']?>" required>
                              </div>
                          </div>
                      </div>
                      <div class="row row-space">
                          <div class="col-lg-6 col-md-12">
                              <div class="input-group">
                                  <label class="label">Child DOB</label>
                                  <div class="input-group-icon">
                                  <input class="input--style-a" type="date" required="required" name="ChildDOB" value="<?php echo $row['Child_DOB']?>" required>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-12">
                              <div class="input-group">
                                  <label class="label">Parent Email</label>
                                  <input class="input--style-a" type="text" required="required" name="ParentEmail" value="<?php echo $row['Parent_Email']?>" required>
                              </div>
                          </div>
                      </div>
                      <div class="row row-space">
                          <div class="col-lg-6 col-md-12">
                              <div class="input-group">
                                  <label class="label">Phone Number</label>
                                  <input class="input--style-a" type="text" required="required" name="PhoneNo" value="<?php echo $row['Phone_No']?>" required>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-12">
                              <div class="input-group">
                                  <label class="label">Address</label>
                                  <input class="input--style-a" type="text" required="required" name="Address" value="<?php echo $row['Address']?>" required>
                              </div>
                          </div>
                      </div>
                      <div class="name">Comment</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="textarea--style-a" required="required" name="Comment" required><?php echo $row['Comment']?></textarea>
                            </div>
                        </div>
                      <div class="button--panel-2">
                          <input type="submit" class="button" title="EditAdmin" name="EditAdmin" value="Edit Admin"></input>
                      </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>

</body>
</html>
