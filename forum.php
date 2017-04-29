<!DOCTYPE html>
<html>
<head>
	 <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <style>
        #frmnav{
          position: fixed;
          margin-top: -0%;
        }
        /*
        #sld{
          width: 90%;
          margin-left: 5%;
           z-index: -1;
        }
*/

        #discussion{
            margin-top: -4%;
          z-index: -1;
        }
      </style>
</head>
<body>


  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

       <nav id="frmnav" class="nav-extended blue lighten-2 ">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo"><img src="images/LOGO.png" width="120px"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="home.php">Home</a></li>
         <li><a href="profile.php">Profile</a></li>
        <li><a href="forum.php">Forum</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="home.php">Home</a></li>
         <li><a href="profile.php">Profile</a></li>
        <li><a href="forum.php">Forum</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#discussion">Discussion</a></li>
         <li class="tab"><a class="active" href="#drugsReview">Drugs Review</a></li>
         
      </ul>
    </div>
  </nav>

  <br><br><br><br>
  
  


<div id="discussion" class="col s12">
  <div class="container" >
    <div class="row">
      <div class="col s12">
        	<div class="card-panel blue lighten-5">
        		<h4>Welcome To Forum</h4>    	      	
                <a id="pstTpc" class="waves-effect blue waves-light btn " href="post.php">New topic</a>
         </div>
      </div>

    <div class="col s12">
        <div class="card-panel blue lighten-5">
          <div class="col-sm-6">
                                      <div class="form-group ">
                                       
                                        <input name="topic" type="text" value="Diabetic" readonly>
                                      </div>
                                      <div class="form-group purple lighten-5">
                                        
                                        <input name="creator" type="text" class="form-control" value="" readonly>Perera<br>
                                         <input name="date" type="text" class="form-control" value="" readonly>2017-04-06<br>
                                         <textarea id="content" class="materialize-textarea" value="" readonly>Bittergourd is good for diabetic?</textarea><br>
                                      </div>
                                      
       </div>   
    </div>

  </div>
</div>

</div>

<?php include('footer.php'); ?>
</div>

<div id="drugsReview" class="col s12">
  <div class="container" style="margin-top:25px">
    <div class="row">
      <div class="col s12">
          <div class="card-panel blue lighten-5">
            <h4>Welcome To Drug Review</h4>             
                <a id="drug_cmnt" class="waves-effect blue waves-light btn " href="post.php">New Drug review</a>
         </div>
      </div>

    <div class="col s12">
        <div class="card-panel blue lighten-5">
          <div class="col-sm-6">
                                      <div class="form-group blue lighten-5">
                                       
                                        <input name="topic" type="text" value="topic" readonly>
                                      </div>
                                      <div class="form-group purple  lighten-5">
                                        
                                        <input name="creator" type="text" class="form-control" value="creator" readonly><br>
                                         <input name="date" type="text" class="form-control" value="date" readonly><br>
                                         <textarea id="content" class="materialize-textarea" value="content" readonly></textarea><br>
                                      </div>
                                      
       </div>   
    </div>

  </div>
</div>

</div>

<?php include('footer.php'); ?>
</div>


<script type="text/javascript"  src="http://code.jquery.com/jquery-2.1.1.min.js"></script>

<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>