<!DOCTYPE html>
<html>
<head>
   <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>


  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

       <nav class="nav-extended blue darken-2">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="home.php">Home</a></li>
        <li><a href="forum.php">Forum</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="home.php">Home</a></li>
        <li><a href="forum.php">Forum</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
    <div class="nav-content">
      
    </div>
  </nav>
  <br><br>     
 <div class="slider">
    <ul class="slides">
      <li>
        <img src="images/11.png"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="images/12.png"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="images/13.png"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="images/10.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
      

  <div class="container" style="margin-top:25px">

  <div class="row">

    
<div class="col s12">
    <div class="card-panel">
      <h2>Welcome</h2>
           <p>
           Our main objective of the project is to provide a methodology for the diabetic patients to
monitor their medical condition not only through drugs but also by other means. So that
we plan to implement the system in a way such that the system will provide detailed
descriptions, advices progress charts about healthy food habits ,exercise routines,
meditational activities, yoga trainings and indigenous medical practices that each patients
should follow to maintain a healthy lifestyle in addition to the medications they have
been prescribed by the doctors
          </p>
    </div>
   
    
         </div>

      





<script type="text/javascript">

    $(document).ready(function(){
      $('.slider').slider();
    });


</script>



<script type="text/javascript"  src="http://code.jquery.com/jquery-2.1.1.min.js"></script>

<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>