<?php
include('includes/db.php');
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


      <div class="page-wrapper bg-gradiant-a padding-t-a padding-b-a ">
          <div class="wrapper wrapper--a">
              <div class="card card-4">
                  <div class="card-body">
                      <h2 class="title text-center font-weight-bold">Registration Form</h2>
                      <form method="post" action="SignUpaction.php">
                          <div class="row row-space">
                              <div class="col-lg-6 col-md-12">
                                  <div class="input-group">
                                      <label class="label">Parent Name</label>
                                      <input class="input--style-a" type="text" required="required" name="ParentName" required>
                                  </div>
                              </div>
                              <div class="col-lg-6 col-md-12">
                                  <div class="input-group">
                                      <label class="label">Child Name</label>
                                      <input class="input--style-a" type="text" required="required" name="ChildName" required>
                                  </div>
                              </div>
                          </div>
                          <div class="row row-space">
                              <div class="col-lg-6 col-md-12">
                                  <div class="input-group">
                                      <label class="label">Child DOB</label>
                                      <div class="input-group-icon">
                                      <input class="input--style-a" type="date" required="required" name="ChildDOB" required>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6 col-md-12">
                                  <div class="input-group">
                                      <label class="label">Parent Email</label>
                                      <input class="input--style-a" type="text" required="required" name="ParentEmail" required>
                                  </div>
                              </div>
                          </div>
                          <div class="row row-space">
                              <div class="col-lg-6 col-md-12">
                                  <div class="input-group">
                                      <label class="label">Phone Number</label>
                                      <input class="input--style-a" type="text" required="required" name="PhoneNo" required>
                                  </div>
                              </div>
                              <div class="col-lg-6 col-md-12">
                                  <div class="input-group">
                                      <label class="label">Address</label>
                                      <input class="input--style-a" type="text" required="required" name="Address" required>
                                  </div>
                              </div>
                          </div>
                          <div class=" col-12">
                            <div class="input-group">
                              <label class="label">Password</label>
                              <input class="input--style-a" type="password" required="required" name="password" required>
                            </div>
                          </div>
                          <div class="input-group">
                              <label class="label">Classes</label>
                              <div class="rs-select--a pl-3">
                                  <select name="Class">
                                      <option selected="selected" required="required" required>Choose a Class</option>
                                      <option>Singing</option>
                                      <option>Dancing</option>
                                      <option>Drama</option>
                                  </select>
                                  <div class="select-dropdown"></div>
                              </div>
                          </div>
                          <div class="name">Comment</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-a" required="required" name="Comment" placeholder="Comment anything you want" required></textarea>
                                </div>
                            </div>
                          <div class="button--panel-2">
                              <input type="submit" class="button" title="SignUp" name="SignUp" value="SignUp"></input>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>

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
