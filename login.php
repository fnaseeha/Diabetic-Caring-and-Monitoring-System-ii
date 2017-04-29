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
      



		<nav class="blue darken-2">
    <div class="nav-wrapper container">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="home.php">Home</a></li>
        <li><a href="forum.php">Forum</a></li>
        <li><a href="aboutus.php">About Us</a></li>
       
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="home.php">Home</a></li>
        <li><a href="forum.php">Forum</a></li>
        <li><a href="aboutus.php">About Us</a></li>
       
      </ul>
    </div>

    <script type="text/javascript">
		function login(){
			window.location="http://localhost/Hospital/materialize-edit/profile.php";
		}</script>

<div class="container" style="margin-top:25px">
<div class="col s8">
  	<div class="card-panel">
  		<h2>Login</h2>

  		<div class="card-panel">
  			<img class="materialboxed" width="650" src="images/13.png"> 
    </div>

   

<div class="row">
		    <form class="col s12">
		      <div class="row">
		        <div class="input-field col s6">
		          <input id="username" type="text" class="validate">
		          <label for="username">Username</label>
		        </div>
		      <div class="row">
		        <div class="input-field col s12">
		          <input id="password" type="password" class="validate">
		          <label for="password">Password</label>
		        </div>
		      </div>

		      <div class="row">
		        <div class="input-field col s6">
		           <center><a class="waves-effect waves-light btn" onclick="login()">Login</a></center>
		        </div>
		      </div>
		   </form>
</div>
</div>

</div>


<script type="text/javascript"  src="http://code.jquery.com/jquery-2.1.1.min.js"></script>

<script type="text/javascript" src="js/materialize.min.js"></script>

<script type="text/javascript">
$( document ).ready(function(){

$(".button-collapse").sideNav();

})	


</script>

</body>
</html>