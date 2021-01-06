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
  <div class="page-wrapper pdap">
      <div class="wrapper wrapper--ad">
          <div class="card-4">
              <div class="card-body">
                  <h2 class="title text-center font-weight-bold">Add Event</h2>
                  <form method="post" action="AddEvent_Operation.php">
                      <div class="row row-space">
                          <div class="col-12">
                              <div class="input-group">
                                <label class="label">Event Name</label>
                                <input class="input--style-ad" type="text" required="required" name="EventName" autofocus required>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="input-group">
                                <label class="label">Event Description</label>
                                  <textarea class="textarea--style-ad" required="required" name="EventDescription" required></textarea>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="input-group">
                                  <label class="label">Event Date</label>
                                  <input class="input--style-ad" type="date" required="required" name="EventDate" required>
                              </div>
                          </div>
                          <div class="button--panel-ad">
                              <input type="submit" class="button" title="AddEvent" name="AddEvent" value="AddEvent"></input>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>

</body>
</html>
