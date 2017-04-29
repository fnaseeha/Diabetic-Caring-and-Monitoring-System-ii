<?php
/*
session_start();

  echo '<h1>Welcome</h1>';

  if(@$_SESSION["username"]){
    echo "welcome ".$_SESSION['username'];
    echo '</br> Hello Naseeha';

*/

?>

<!DOCTYPE html>
<html>
<head>

<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

<script src="https://use.fontawesome.com/710c522def.js"></script>
<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
	 <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
        #hnav{
          position: fixed;
          margin-top: -0%;
        }
        #sld{
          width: 90%;
          margin-left: 5%;
           z-index: -1;
        }

        #tbl{
          z-index: -1;
        }

        #intro{
          width: 90%;
         margin-right: -1%;
           z-index: -1;
        }
      </style>
</head>
<body>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

       <nav id="hnav" class="nav-extended blue lighten-2 waves-light">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo"><img src="LOGO.png"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="home.php"> <i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
         <li><a href="profile.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Profile</a></li>
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
    </nav>
</br></br>  