<?php
include ('header.php');
?>
   <div class="container" style="margin-top:25px">
    <div class="row">
      <div class="col s12">
        	<div class="card-panel grey lighten-3">

        		<center><h5>Post your Topic</h5></center>

  <div class="row">
    <form class="col s12 yellow lighten-5">

    

      <div class="row">
        <div class="input-field col s12 purple lighten-4">
          <input placeholder="Topic" id="topic" type="text" class="validate">
          <label for="topic"></label>
        </div>
        <div class="input-field col s12 red lighten-5">
          <label for="content"></label>
	          <textarea name="content" class="materialize-textarea" placeholder="content" value="content">
	        </textarea>
          <script type="text/javascript">
      
      CKEDITOR.replace('content');

    </script>
	        
          </div >
          <center>
          	 <!--a class="waves-effect blue waves-light btn " href="post.php"> Post</a> </center-->  
               <input type='submit' class="waves-effect blue waves-light btn " name='post' value='Post' />
               </center>
 
        </div>  
          
        <script type="text/javascript">
          
           
  //$('#topic').trigger('autoresize');
        </script>

     </form>
    </div>
</div>
</div>
    </div>


</body>
</html>

<?php

if(isset($_POST['submit'])){
    $t_name=$_POST['topic_name1'];
    $Content=$_POST['Content1'];
    $date=date("y-m-d");

    if(!(is_null($t_name)) && !(is_null($Content))){
  //  echo $t_name.'and '.$Content; 
      
    if( $Content && $t_name ){
      if(strlen($t_name)>=6 && strlen($t_name)<=70){
        if(strlen($Content)>=5 && strlen($Content)<=255){
          $user=$_SESSION["username"];

        
  $sql8="INSERT INTO topics(topic_tittle,date,topic_content,topic_creator)VALUES('".$t_name."','".$date."','".$Content."','".$user."')";
        
      $con=mysqli_connect("localhost","root","mysql","hospital")or die("couldn't connect to database") ;

      $check2 =mysqli_query($con,$sql8);

    $sql_u="UPDATE abc SET topics=topics+1 WHERE username='".$user."'";
        
    $check3 =mysqli_query($con,$sql_u);
//echo 'success';

        }else{
          echo 'Content must be between 5 and 255 characters';
        }
        

      }else{
        echo 'Topic name must be between 6 and 70 characters';
      }

    }else{
      echo 'Please fill all in the fields';
    }

  }else{
      echo 'Please fill all in the fields';
    }
}
  if(@$_GET['action']=="logout"){
    session_destroy();
    //header("Location:../login.php");
    echo "<script type=\"text/javascript\">
  window.location=\"http://localhost/Hospital/materialize-edit/login2.php\";
  </script>";
  }
/*
  }else{
    echo 'You must be logged in';
  }

*/





?>