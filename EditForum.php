<?php
include('includes/db.php');
include('includes/functions.php');
checkLogin();
checkadmin();
$id = $_GET['id'];

$query = "SELECT * FROM tbl_forums WHERE post_id = '$id'";

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

  <div class="page-wrapper pt-2">
      <div class="wrapper wrapper--ab">
          <div class="card-4">
              <div class="card-body">
                  <h2 class="title text-center font-weight-bold">Edit Event</h2>
                  <form method="post" name="edit" id="edit" action="EditForum_operation.php">
                    <input type="hidden" name="id" value="<?php echo $row['post_id']?>">
                      <div class="row row-space">
                          <div class="col-12">
                              <div class="input-group">
                                <label class="label">Title</label>
                                <input class="input--style-ad" type="text" required="required" name="Title" value="<?php echo $row['Title']?>" autofocus required>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="input-group">
                                <label class="label">Content</label>
                                  <textarea class="textarea--style-ad" required="required" name="Content" required><?php echo $row['Content']?></textarea>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="input-group">
                                  <label class="label">Date</label>
                                  <input class="input--style-ad" type="date" required="required" name="Date" value="<?php echo $row['posted_date']?>" required>
                              </div>
                          </div>
                          <div class="button--panel-ad">
                              <input type="submit" class="button" title="EditForum" name="EditForum" value="EditForum"></input>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>

</body>
</html>
