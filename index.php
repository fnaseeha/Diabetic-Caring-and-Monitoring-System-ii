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
                    <form action="index2.php" method="POST">
                <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                      <div class="wizard-header">
                          <h3>
                             <b>Diabetic  Caring and Monitoring</b> System <br>
                             <small>BUILD</b> YOUR PROFILE <br></small>
                          </h3>
                      </div>

            <div class="wizard-navigation">
              <ul>
                              <li><a href="#about" data-toggle="tab">Registration</a></li>
                              <li><a href="#account" data-toggle="tab">Account</a></li>
                              
                          </ul>

            </div>

                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                              <div class="row">
                                  <h4 class="info-text"> Let's start with the basic information</h4>
                                  <div class="col-sm-4 col-sm-offset-1">
                                     <div class="picture-container">
                                          <div class="picture">
                                              <img src="assets/img/default-avatar.png" class="picture-src" id="profile_pic" title=""/>
                                              <input type="file" id="picture">
                                          </div>
                                          <h6>Choose Picture</h6>
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                        <label>First Name <small>(required)</small></label>
                                        <input name="firstname" type="text" class="form-control" placeholder="Andrew...">
                                      </div>
                                      <div class="form-group">
                                        <label>Last Name <small>(required)</small></label>
                                        <input name="lastname" type="text" class="form-control" placeholder="Smith...">
                                      </div>
                                  </div>
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Email <small>(required)</small></label>
                                          <input name="email" type="email" class="form-control" placeholder="andrew@gmail.com">
                                      </div>
                                       <div class="form-group">
                                        <label>Username <small>(required)</small></label>
                                        <input name="username" type="text" class="form-control" placeholder="nasee">
                                      </div>
                                      <div class="form-group">
                                        <label>Password <small>(required)</small></label>
                                        <input name="password" type="password" class="form-control" placeholder="">
                                      </div>
                                      <div class="form-group">
                                        <label>Confirm password <small>(required)</small></label>
                                        <input name="confirm_password" type="password" class="form-control" placeholder="">
                                      </div>
                                  </div>
                              </div>

                            </div>
                            <div class="tab-pane" id="account">
                                <h4 class="info-text"> </h4>
                                <div class="row">

                                 <div class="col-sm-6 col-sm-offset-1">
                                     
                                    </div>
                                    <!--div class="col-sm-6"-->
                                      <div class="col-sm-6 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>Phone Number<small>(required)</small></label>
                                        <input name="phone" type="text" class="form-control" placeholder="0771234567">
                                      </div>
                                    
                                      <div class="form-group">
                                        <label>Date of Birth <small>(required)</small></label>
                                        <input name="date_of_birth" type="text" class="form-control" placeholder="1993-02-29">
                                      </div>
                                  </div>
                                  <div class="col-sm-6 col-sm-offset-1">
                                  <div class="form-group">
                                     <div>

                                     <label for="gender">Gender</label><br/></div>
                                    
                                    <input name="gender" type="radio" id="male" />
                                    <label for="male">Male</label>
                            
                                    <input name="gender" type="radio" id="female" />
                                    <label for="female">Female</label>
                                 
                                </div>

                                <div class="form-group">
                                        <label>Language <small>(required)</small></label>
                                        <input name="language" type="text" class="form-control" placeholder="Sinhala">
                                      </div>

                                <div class="form-group">
                                        <label>Address <small>(required)</small></label>
                                        <input name="address" type="text" class="form-control" placeholder="3A,pilimithalawa , Kandy">
                                      </div>
                              </div>

                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-checkbox">
                                                
                                                
                                               
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-checkbox">
                                                
                                            </div>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-checkbox">
                                               
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="">
                                <div class="row">
                                    <div class="col-sm-12">
                                        
                                    </div>
                                    <div class="col-sm-7 col-sm-offset-1">
                                         <div class="form-group">
                                           
                                          </div>
                                    </div>
                                    <div class="col-sm-3">
                                         <div class="form-group">
                                            
                                          </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                         
                                    </div>
                                    <div class="col-sm-5">
                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-primary btn-wd btn-sm' name='next' value='Next' />
                                <input type='submit' class='btn btn-finish btn-fill btn-primary btn-wd btn-sm' name='finish' value='Finish' />
                            </div>

                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                            </div>
                             <center>Already have an account <i><a href="login2.php">Login</a></i></center>
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
$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$username =$_POST['username'];
$password1 =$_POST['password'];
$password2 =$_POST['confirm_password'];
$en_password=sha1($password1);
$phone=$_POST['phone'];
$joined_date=date("Y~m~d");
$date_of_birth=$_POST['date_of_birth'];
$address =$_POST['address'];
$language =$_POST['language'];
//$picture =$_POST['profile_pic'];
$gender=$_POST['gender'];
$email=$_POST['email'];



//if(isset($_POST['submit'])){


  
if(isset($firstname) && !empty($firstname)&&isset($username) && !empty($username) && isset($phone)&& !empty($phone)&& !empty($password1) &&isset($password1) &&!empty($password2) &&isset($password2) &&!empty($lastname) &&isset($lastname) &&!empty($date_of_birth) &&isset($date_of_birth) &&!empty($address) &&isset($address) &&!empty($language) &&isset($language) &&!empty($email) &&isset($email)){

echo $firstname.
$lastname.
$username.
$password1.
$password2.
$en_password.
$phone.
$joined_date.
$date_of_birth.
$address.
$language;
$gender;

$con=mysqli_connect("localhost","root","mysql","hospital")or die("couldn't connect to database");

/*
      $errors=array();
      $allowed_e=array('png','jpg','jpeg');

      $file_name=$_FILES['profile_pic']['name'];
      $file_e=strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
      $file_s=$_FILES['profile_pic']['size'];
      $file_tmp=$_FILES['profile_pic']['tmp_name'];

      if(in_array($file_e,$allowed_e)===false){
        $errors[]='This file extension is not allowed';
      }
      if($file_s>2097152){
        $errors[]='File must be under 2MB';
      }
      if(empty($errors)){
        move_uploaded_file($file_tmp, 'images/'.$file_name);
        $image_up='images/'.$file_name;
        
        $sql5="UPDATE register SET profile_pic ='".$image_up."' WHERE  username='".$username."'";
        $check5=mysqli_query($con,$sql5);

        if($check5){
          echo 'Your profile image has changed';
        }
      }

      */


 


  //echo 'ok';
  $sql="INSERT INTO register(firstname,lastname,username,password,joined_date,email_address,address,phone_number,date_of_birth,gender,language) VALUES('$firstname','$lastname','$username','$en_password','$joined_date','$email',$address,$phone,'$date_of_birth',$gender,$language)";

 //VALUES('','$name','$password1','$nic')";
  //echo 'query ok <br/>';
  //*mysqli_query($con,$sql)or die("couldn't insert to table");
 // echo $date;
  echo '<h1>Successfully registered Now Login to the page</h1>';// 'connection ok <br/>';
/*
  ?>
  
  <script type="text/javascript">
  window.location="http://localhost/Hospital/Forum2/login.php";
  </script>
  
  <html>
    <input type="button" name="login" value="login" onclick="login()">
  </html>
  
  
  <script type="text/javascript">
    function login(){
      window.location="http://localhost/Hospital/Forum2/index.php";
    }</script>

  <?php
  mysqli_close($con);
*/
 
 //   }else{
 //     echo 'Please Fill all fields';//not empty
 //   }

}//submit

}//post


?>