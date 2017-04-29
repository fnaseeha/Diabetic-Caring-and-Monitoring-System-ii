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
<div class="image-container set-full-height" style="background-image: url('assets/img/wizard-city.jpg')">
    <!--   Creative Tim Branding   -->
    <a href="http://creative-tim.com">
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
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">

                <div class="card wizard-card" data-color="blue" id="wizardProfile">
                    <form action="" method="">
                <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                      <div class="wizard-header">
                          <h3>
                             <b>Diabetic  Caring and Monitoring</b> System <br>
                             <small>BUILD</b> YOUR PROFILE <br></small>
                          </h3>
                      </div>

            <div class="wizard-navigation">
              <ul>
                              <li><a href="#about" data-toggle="tab">Login</a></li>
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
                                              <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                              <input type="file" id="wizard-picture">
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
                                        <input name="confirm password" type="password" class="form-control" placeholder="">
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
                                         <div class="form-group">
                                            <!--label>Country</label><br>
                                             <select name="country" class="form-control">
                                                <option value="Afghanistan"> Afghanistan </option>
                                                <option value="Albania"> Albania </option>
                                                <option value="Algeria"> Algeria </option>
                                                <option value="American Samoa"> American Samoa </option>
                                                <option value="Andorra"> Andorra </option>
                                                <option value="Angola"> Angola </option>
                                                <option value="Anguilla"> Anguilla </option>
                                                <option value="Antarctica"> Antarctica </option>
                                                <option value="...">...</option>
                                            </select-->
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' />

                            </div>

                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                            </div>
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
