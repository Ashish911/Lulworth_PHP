<?php
include('includes/db.php');
include('includes/functions.php');
checkLogin();
checkadmin();
$id = $_GET['id'];

$query = "SELECT * FROM tbl_teachers WHERE Teacher_Id = '$id'";

$result = $connection->query($query);

$row = $result->fetch_array();


if($result->num_rows==0){
    die('<h1>Invalid Parameter</h1>');
}


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

  <div class="page-wrapper padding-ab">
      <div class="wrapper wrapper--ab">
          <div class="card-4">
              <div class="card-body">
                  <h2 class="title text-center font-weight-bold">Edit Teacher</h2>
                  <form method="post" name="edit" id="edit" action="EditTeacher_operation.php">
                    <input type="hidden" name="id" value="<?php echo $row['Teacher_Id']?>">
                      <div class="row row-space">
                          <div class="col-12">
                              <div class="input-group">
                                <label class="label">Teacher Name</label>
                                <input class="input--style-ad" type="text" required="required" name="BlogTitle" value="<?php echo $row['Teacher_Name']?>" autofocus required>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="input-group">
                                <label class="label">Teacher Job</label>
                                <input class="input--style-ad" type="text" required="required" name="BlogTitle" value="<?php echo $row['Teacher_Job']?>" autofocus required>
                              </div>
                          </div>
                          <div class="input-group">
                              <label class="label">Teacher Class</label>
                                  <select name="TeacherClass" class="ml-3">
                                      <option
                                      <?php
                                        if ($row["Teacher_Class"]=='Dance Class') {
                                          echo "selected";
                                        }
                                       ?>>Dance Class</option>
                                       <option
                                       <?php
                                         if ($row["Teacher_Class"]=='Singing Class') {
                                           echo "selected";
                                         }
                                        ?> >Singing Class</option>
                                      <option
                                      <?php
                                        if ($row["Teacher_Class"]=='Drama Class') {
                                          echo "selected";
                                        }
                                       ?>>Drama Class</option>
                                  </select>
                                  <div class="select-dropdown"></div>
                          </div>
                          <div class="button--panel-ad">
                              <input type="submit" class="button" title="EditBlog" name="EditBlog" value="EditBlog"></input>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>

</body>
</html>
