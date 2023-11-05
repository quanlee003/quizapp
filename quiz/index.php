<?php
session_start();
if(isset($_SESSION['username']) && (!isset($_SESSION['key']))){
   header('location:account.php?q=1');
}
else if(isset($_SESSION['username']) && isset($_SESSION['key']) && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39'){
   header('location:dash.php?q=0');
}
else{}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BUV Learning Management System</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <?php
    if (@$_GET['w']) {
        echo '<script>alert("' . @$_GET['w'] . '");</script>';
    }
    ?>
    <script>
        function validateForm() {
            var y = document.forms["form"]["name"].value; 
            if (y == null || y == "") {
                document.getElementById("errormsg").innerHTML="Name must be filled out.";
                return false;
            }
            var br = document.forms["form"]["branch"].value;
            if (br == "") {
                document.getElementById("errormsg").innerHTML="Please select your branch";
                return false;
            }
            if (m.length < 10) {
                document.getElementById("errormsg").innerHTML="Password must be 12 digits long";
                return false;
            }
            var g = document.forms["form"]["gender"].value;
            if (g=="") {
                document.getElementById("errormsg").innerHTML="Please select your gender";
                return false;
            }
            var x = document.forms["form"]["username"].value;
            if (x.length == 0) {
                document.getElementById("errormsg").innerHTML="Please enter a valid username";
                return false;
            }
            if (x.length < 4) {
                document.getElementById("errormsg").innerHTML="Username must be at least 4 characters long";
                return false;
            }
            var m = document.forms["form"]["phno"].value;
            if (m.length != 10) {
                document.getElementById("errormsg").innerHTML="Phone number must be 10 digits long";
                return false;
            }
            var a = document.forms["form"]["password"].value;
            if(a == null || a == ""){
                document.getElementById("errormsg").innerHTML="Password must be filled out";
                return false;
            }
            if(a.length<4 || a.length>15){
                document.getElementById("errormsg").innerHTML="Passwords must be 4 to 15 characters long.";
                return false;
            }
            var b = document.forms["form"]["cpassword"].value;
            if (a!=b){
                document.getElementById("errormsg").innerHTML="Passwords must match.";
                return false;
            }
        }
    </script>
</head>
<body>
  <div class="content">
    <div class="boxbox">
      <img src="image/logo.png" title="Logo BUV">
      <h2 class="title-first">Welcome to BUV Learning Management System!</h2>
      <h3 class="title-second">Please select your user type:</h3>
      <div class="buttonbox">
        <p>

          <a href="#" class="pure-button pure-button-primary" data-toggle="modal" data-target="#myModal">
              BUV Student
          </a>

          <!-- Login Student Modal -->
            <div class="modal fade" id="myModal">
              <div class="modal-dialog">
                  <div class="modal-content title1">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          <h4 class="modal-title title1">
                              <span style="color:darkblue;font-size:12px;font-weight: bold">Login to your Account</span>
                          </h4>
                      </div>
                      <div class="modal-body">
                          <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                              <fieldset>
                                  <div class="form-group">
                                      <label class="col-md-3 control-label" for="username"></label>  
                                      <div class="col-md-6">
                                          <input id="username" name="username" placeholder="Username" class="form-control input-md" type="username">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-md-3 control-label" for="password"></label>
                                      <div class="col-md-6">
                                          <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
                                      </div>
                                  </div>
                              </fieldset>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Log in</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
        </p>
          <!-- End Login Student modal -->




          <!-- Staff/Faculty Login modal -->
          <p>
            <a href="#" class="pure-button pure-button-primary" data-toggle="modal" data-target="#login" style="color:lightyellow">BUV Faculty/Staff</a>
          

            <div class="modal fade" id="login">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <h4 class="modal-title">
                                <span style="color:black;font-size:12px;font-weight: bold">Login to Server</span>
                            </h4>
                        </div>
                        <div class="modal-body title1">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <form role="form" method="post" action="admin.php?q=index.php">
                                        <div class="form-group">
                                            <input type="text" name="uname" maxlength="20" placeholder="Username" class="form-control"/> 
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" maxlength="30" placeholder="Password" class="form-control"/>
                                        </div>
                                        <div class="form-group" align="center">
                                            <input type="submit" name="login" value="Login" class="pure-button pure-button-primary" />
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </p>
<!-- End Staff/Faculty Login modal -->
      </div>
    </div>
  </div>
</body>
</html>
