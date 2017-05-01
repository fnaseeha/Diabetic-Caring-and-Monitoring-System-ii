<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title></title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

  <!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

  <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/css/demo.css" rel="stylesheet" />
<style>
  #btn_submit{
    margin-left: -13%;
  }
  </style>
</head>

<body>
<div class="image-container set-full-height" style="background-image: url('images/hbg_bg.jpg')">
    <!--   Creative Tim Branding   -->
    <a href="">
         <div class="logo-container">
            <div class="logo">
                <img src="assets/img/new_logo.png">
            </div>
            <div class="brand">
                DCM System
            </div>
        </div>
    </a>

  <!--  Made With Get Shit Done Kit  -->
   

    <!--   Big container   -->
    <br><br><br>
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">

                <div class="card wizard-card" data-color="blue" id="wizardProfile">
                   
                
                      <div class="wizard-header">
                          <h3>
                             <b>Diabetic  Caring and Monitoring</b> System <br>
                             <small>BUILD</b> YOUR PROFILE <br></small>
                          </h3>
                      </div>
                      <div class="wizard-navigation center">
                            <ul>
                             <li><a href="#about" data-toggle="tab">Registration</a></li>     
                            </ul>
                      </div>
                       <form action="register.php" method="POST">
                      <div class="tab-content">
                            <div class="tab-pane" id="about">
                              <div class="row">
                                  <h4 class="info-text"> Let's start with the basic information</h4>
                                  <div class="col-sm-4 col-sm-offset-1">
                                     <div class="picture-container">
                                          <div class="picture">
                                              <img src="assets/img/default-avatar.png" class="picture-src" id="profile_pic" title=""/>
                                             
                                          </div>
                                          
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                        <label>Name <small>(required)</small></label>
                                        <input name="name" type="text" class="form-control" placeholder="Andrew...">
                                      </div>
                                      <div class="form-group">
                                        <label>Username<small>(required)</small></label>
                                        <input name="username" type="text" class="form-control" placeholder="Smith...">
                                      </div>
                                  </div>
                                  <div class="col-sm-10 col-sm-offset-1">
                                     
                                      <div class="form-group">
                                        <label>Password <small>(required)</small></label>
                                        <input name="password" type="password" class="form-control" placeholder="">
                                      
                                        <label>Confirm password <small>(required)</small></label>
                                        <input name="confirm_password" type="password" class="form-control" placeholder="">
                                      
                                          <label>Email <small>(required)</small></label>
                                          <input name="email" type="email" class="form-control" placeholder="andrew@gmail.com">
                                      
                                        <label> Phone<small>(required)</small></label>
                                        <input name="phone" type="text" class="form-control" placeholder="0771231231234">
                                     
                                        <label> NIC<small>(required)</small></label>
                                        <input name="nic" type="text" class="form-control" placeholder="">
                                      
                                        <label> Address<small>(required)</small></label>
                                        <input name="address" type="text" class="form-control" placeholder="">
                                    
                                        <label> Language<small>(required)</small></label>
                                        <input name="language" type="text" class="form-control" placeholder="Sinhala">
                                      </div>
                                  </div>
                              </div>

                            </div>
                            
                            
                        </div>
                        <div class="wizard-footer height-wizard">
                            <div id ="btn_submit" class="pull-right">
                            
                                <input type='submit' class='btn btn-finish btn-fill btn-primary btn-wd btn-sm' name='submit' value='Register' />
                            </div>

                           
                             <center>Already have an account <i><a href="index.php">Login</a></i></center>
                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->

    <div class="footer">
        <div class="container">
            
        </div>
    </div>

</div>

</body>

  <!--   Core JS Files   -->
  <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

  <!--  Plugin for the Wizard -->
  <script src="assets/js/gsdk-bootstrap-wizard.js"></script>

  <!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
  <script src="assets/js/jquery.validate.min.js"></script>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name =$_POST['name'];
$username =$_POST['username'];
$password1 =$_POST['password'];
$password2 =$_POST['confirm_password'];
$en_password=sha1($password1);
$phone=$_POST['phone'];
$joined_date=date("Y~m~d");
$address =$_POST['address'];
$language =$_POST['language'];
$email=$_POST['email'];
$nic=$_POST['nic'];


if(isset($_POST['submit'])){

if(isset($name) && !empty($name)&&isset($username) && !empty($username) && isset($phone)&& !empty($phone)&& !empty($password1) &&isset($password1) &&!empty($password2) &&isset($password2) &&!empty($phone) &&isset($phone) &&!empty($language) &&isset($language) &&!empty($address) &&isset($address) &&!empty($nic) &&isset($nic) &&!empty($email) &&isset($email)){

  require('connection.php');
  echo $name.$username.$password1.$password2.$en_password.$phone.$joined_date.$address.$language.$email.$nic; 

  $sql="INSERT INTO $table(name,username,password,address,email,joined_date,phone,language,nic) VALUES('$name','$username','$en_password','$address','$email','$joined_date','$phone','$language','$nic')";


  if(mysqli_query($con,$sql)){ 
  echo '<h1>Successfully registered Now Login to the page</h1>';// 
 
  mysqli_close($con);
 }else{
  mysql_error();
 } 
}
}//submit

}//post


?>