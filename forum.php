<?php include('header.php');?>
<div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a class="active" href="#discussion">Discussion</a></li>
         <li class="tab"><a  href="#drugsReview">Drugs Review</a></li>
      </ul>
    </div>
    </nav>
</br></br>  
<style type="text/css">
  #discussion{
          width: 90%;
          margin-top: 10%;
           z-index: -1;
        }
  #drugsReview{
    width: 90%;
          margin-top: 10%;
           z-index: -1;
  }
  #forumContent{
    z-index:-1;
  }


</style>

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
          <div class="col-sm-6" id="forumContent">
           <ul  class="collection">
   
    
    <li class="collection-item avatar">
     <img src="images/prof.jpg" alt="" class="circle">
      <span class="title">Question</span>
       <p>Creator <t>Date
        </t>
      </p>
        <p>First Line Second Line Second Line Second Line
           Second Line Second Line Second Line Second Line Second Second Line
        </p>
       
    </li>
     
     <li class="collection-item avatar">
     <img src="images/prof.jpg" alt="" class="circle">
      <span class="title">Reply</span>
       <p>Creator <t>Date
        </t>
      </p>
        <p>First Line Second Line Second Line Second Line
           Second Line Second Line Second Line Second Line Second Second Line
        </p>
       
    </li>
     <li class="collection-item avatar">
      
        <p><a href="#!" >5</a> Views <t> 5 <a href="#!"> Like</a>
        </p>
        
    </li>
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
                <!DOCTYPE html>
<html>
    <head>

        <title>Drug comments</title>

        <style>

                        .totaltxt {
                position: absolute;
                width: 80px;
                right: 345px;
                top:25px;
            }
            .totalno {
                position: absolute;
                right: 320px;
                top:25px;
            }
            .next,.previous {

                background-color: rgb(106,184,42);
                color: white;

                border: none;
                cursor: pointer;
                border-radius: 6px;
            }

            .addorder {
                width: 100px;
                height: autopx;
                position: absolute;
                right:5px; top:0px;
                background-color: rgb(106,184,42);
                color: white;
                padding: 10px 10px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                border-radius: 6px;

            }
            .addorder:hover {
                background-color:rgb(152, 214, 72);

            }
            .drugTable
            {
                width: 750px;
                height: 200px;
                padding-right: 30px;
                padding-bottom: -100px;
                background-color: white;

            }

            .drugTable tr th, .drugTable tr td
            {
                text-align: left;
                padding: 0px 5px 0 5px;
            }

            .drug img
            {
                padding: 0px 10px 10px 10px;
                height: 150px;
                width: 150px;
                -moz-border-radius: 50px;
                -webkit-border-radius: 50px;
                border-radius: 50px;
            }
            .cancel {
                cursor:pointer;
            }
            #noti_Button {
                cursor:pointer;
            }
            #noti_Counter {
                display:block;
                position:absolute;

                right:30px;
                background:#E1141E;
                color:#FFF;
                font-size:12px;
                font-weight:normal;
                padding:1px 3px;
                margin:-8px 0 0 25px;
                border-radius:2px;
                -moz-border-radius:2px; 
                -webkit-border-radius:2px;
                z-index:1;
            }

            /* THE NOTIFICAIONS WINDOW. THIS REMAINS HIDDEN WHEN THE PAGE LOADS. */
            #notifications {
                display:none;
                width:430px;
                position:absolute;
                top:60px;
                right:5px;
                background:#FFF;
                border:solid 1px rgba(100, 100, 100, .20);
                -webkit-box-shadow:0 3px 8px rgba(0, 0, 0, .20);
                z-index: 0;
                border-radius: 6px;
            }
            /* AN ARROW LIKE STRUCTURE JUST OVER THE NOTIFICATIONS WINDOW */
            #notifications:before {         
                content: '';
                display:block;
                width:0;
                height:0;
                color:transparent;
                border:10px solid #CCC;
                border-color:transparent transparent #FFF;
                margin-top:-20px;
                margin-left:80%;
            }
            #inner_noti {
                border-bottom:solid 1px rgba(100, 100, 100, .30);
                background-color: #caf7a3;

            }
            #bbc {
                color: #0066cc;

            }
            .container-1{
                width: 300px;
                vertical-align: middle;
                white-space: nowrap;
                position: relative;

            }
            .container-1 input#search{
                width: 300px;
                height: 35px;
                background: #d1e0e0;
                border: none;
                font-size: 10pt;
                float: left;
                color: #63717f;
                padding-left: 45px;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
            }
            .container-1 .icon{
                position: absolute;
                top: 50%;
                margin-left: 13px;
                margin-top: 5px;
                z-index: 1;
                color: #4f5b66;
            }
            .container-1 input#search::-webkit-input-placeholder {
                color: #65737e;
            }

            .container-1 input#search:-moz-placeholder { /* Firefox 18- */
                color: #65737e;  
            }

            .container-1 input#search::-moz-placeholder {  /* Firefox 19+ */
                color: #65737e;  
            }

            .container-1 input#search:-ms-input-placeholder {  
                color: #65737e;  
            }
            .container-1 input#search:hover, .container-1 input#search:focus, .container-1 input#search:active{
                outline:none;
                background: #c2d6d6;
            }
            .to {
                color: #777777;
                position: relative;
                top: 10px;
            }
            .myButton {
                position: relative; 
                left: 125px; 

                -moz-box-shadow: 0px 1px 0px 0px #fff6af;
                -webkit-box-shadow: 0px 1px 0px 0px #fff6af;
                box-shadow: 0px 1px 0px 0px #fff6af;
                background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffec64), color-stop(1, #ffab23));
                background:-moz-linear-gradient(top, #ffec64 5%, #ffab23 100%);
                background:-webkit-linear-gradient(top, #ffec64 5%, #ffab23 100%);
                background:-o-linear-gradient(top, #ffec64 5%, #ffab23 100%);
                background:-ms-linear-gradient(top, #ffec64 5%, #ffab23 100%);
                background:linear-gradient(to bottom, #ffec64 5%, #ffab23 100%);
                filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffec64', endColorstr='#ffab23',GradientType=0);
                background-color:#ffec64;
                -moz-border-radius:19px;
                -webkit-border-radius:19px;
                border-radius:19px;
                border:2px solid #ffaa22;
                display:inline-block;
                cursor:pointer;
                color:#333333;
                font-family:Trebuchet MS;
                font-size:16px;
                font-weight:bold;
                padding:7px 16px;
                text-decoration:none;
                text-shadow:0px 1px 0px #ffee66;
            }
            .myButton:hover {
                background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffab23), color-stop(1, #ffec64));
                background:-moz-linear-gradient(top, #ffab23 5%, #ffec64 100%);
                background:-webkit-linear-gradient(top, #ffab23 5%, #ffec64 100%);
                background:-o-linear-gradient(top, #ffab23 5%, #ffec64 100%);
                background:-ms-linear-gradient(top, #ffab23 5%, #ffec64 100%);
                background:linear-gradient(to bottom, #ffab23 5%, #ffec64 100%);
                filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffab23', endColorstr='#ffec64',GradientType=0);
                background-color:#ffab23;
            }

            .mdh {
                text-align:center; 
                color: green; 
                font-family: SourceSansPro;
                font-size: 2.4em;
                line-height: 1em;
                font-weight: normal;
                margin: 0  0 50px 0;
            }
        </style>
    </head>
<body>

    <h1></h1>
        <div class="content">
            <article>
                <a href="catbrows.php" id="bbc"><p>Browse by category</p></a>
                <hr>
                <table>
                    <td>
                        <h2 class="to">Search for a medicine:</h2>
                    </td>
                    <td>
                        <form action="drugcomment.php">
                            <div class="container-1">
                                <span class="icon"><i class="fa fa-search"></i></span>
                                <input type="search" placeholder="Search..." id="search" />
                            </div>
                        </form>
                    </td>
                </table>
                <div id="contentProduct">
                    <table class = 'drugTable'>
                        <tr>
                            <th>Metformin</th>
                        </tr>
                        <tr>
                            <th width = '75px' ><img src="images/metformin2.jpg"></th>
                            <td>Metformin is an oral antidiabetic drug for the treatment of diabetes. 
                                Created by Bristol-Myers Squibb Company, Metformin is approved in the US and the UK as a treatment for type 2 diabetes.</p>
                                It is sometimes used in combination with insulin or other medications, but this medicine is not for treating type 1 diabetes.
                            </td>
                        </tr>
                    </table>
                </div> 
                <p> Comments </p>
                <form action="drugcomment.php" method="post">
                    <div>
                    <input type="text" name="usrname" placeholder="Name">
                    </div>
                    <div>
                    <textarea name="comment" id="comment" placeholder="Enter your comment here" style="font-family:sans-serif;font-size:1.2em;">
                    </textarea>
                    </div>
                    <br>
                    <input type="submit" value="Comment">
                </form>
        </div>

</body>
</html>

<?php 

                if($_SERVER["REQUEST_METHOD"] == "POST") {
                $server = 'localhost';
                $username = 'root';
                $password = '';
                $database = 'comment';

                //create connection
                $conn = mysqli_connect($server, $username, $password, $database);

                //check connection
                if (!$conn){
                    die("Connection faied: ".mysqli_connect_error());
                }

                //echo "connected successfully";
                
                $usrname = $_POST['usrname'];
                $comment = $_POST['comment'];

                $sql = "INSERT INTO drugcomment (usrname,comment) VALUES ('$usrname', '$comment')";

                if (mysqli_query($conn, $sql)) {
//                    echo "insert successful";
				} else {
//                    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
                }

            


                $query1="SELECT comment, usrname FROM drugcomment";
                $results1 = mysqli_query($conn, $query1);

                while ($row1 = mysqli_fetch_assoc($results1)) {

                echo nl2br("\n");
                echo $row1['usrname'];
                echo nl2br("  said:\n");
                echo $row1['comment'];
                echo nl2br(" \n");  
                echo nl2br(" \n");      
                }
            }
?>
</div>


  <div id="doctorReview" class="col s12">
<!DOCTYPE html>
<html>
<head>
    <title>doctor comments</title>
</head>
<body>
    <h1></h1>
        <div class="content">
            <hr>
            <table>
                <td>
                    <h2 class="to">Search for a Doctor:</h2>
                </td>
                <td>
                    <form action="doctorcomment.php">
                        <div class="container-1">
                            <span class="icon"><i class="fa fa-search"></i></span>
                            <input type="search" placeholder="Search..." id="search" />
                        </div>
                    </form>
                </td>
            </table>
<p>Dr. W. D. Perera</p>
<br><br>
<aside>
<img src="images/doctor3.jpg">
</aside>
<br><br>
<p> Comments </p>
<form action="doctorcomment.php" method="post">
<div>
<input type="text" name="usrname" placeholder="Name">
</div>
<div>
<textarea name="comment" id="comment" placeholder="Enter your comment here" style="font-family:sans-serif;font-size:1.0em;">
</textarea>
</div>
<br>
<input type="submit" value="Comment">
</form>
</div>
</body>
</html>

<?php 

                if($_SERVER["REQUEST_METHOD"] == "POST") {
                $server = 'localhost';
                $username = 'root';
                $password = '';
                $database = 'comment';

                //create connection
                $conn = mysqli_connect($server, $username, $password, $database);

                //check connection
                if (!$conn){
                    die("Connection faied: ".mysqli_connect_error());
                }

                //echo "connected successfully";
                
                $usrname = $_POST['usrname'];
                $comment = $_POST['comment'];
                //echo $usrname.'and '.$comment;

                $sql = "INSERT INTO doctorcomment (doctorname,comment,usrname) VALUES ('hhh', '$comment','$usrname')";

                if (mysqli_query($conn, $sql)) {
//                    echo "insert successful";
				} else {
//                    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
                }


                $query1="SELECT comment, usrname FROM doctorcomment";
                $results1 = mysqli_query($conn, $query1);

                while ($row1 = mysqli_fetch_assoc($results1)) {

                echo nl2br("\n");
                echo $row1['usrname'];
                echo nl2br("  said:\n");
                echo $row1['comment'];
                echo nl2br("\n");
                echo nl2br("\n");

                }
                
            }
?>
</div>


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