<?php
include ('header.php');
?>
<div class="nav-content">
      
    </div>
  </nav>
  <br><br>  

  <style type="text/css">
  #postcontent{
          width: 90%;
          margin-top: 5%;
           z-index: 999;
        }

  #input2{
      
   border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;

  }
  #textarea{

    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;

  }

  #btnsub{
       margin-top: 2%;
       z-index: 3;
  }
</style>

  <div id="drugsReview" class="col s12">
  <div class="container" style="margin-top:25px">
    <div class="row">
      <div class="col s12">
          <div class="card-panel blue lighten-5 center">
            <h5><b>Post your Topic</b></h5>             
               
         </div>
      </div>

    <div class="col s12">
        <div class="card-panel ">
          <div class="col-sm-6">
                                      <div class="form-group ">
                                       
                                        <input id="input2" name="topic" type="text" placeholder="topic">
                                 </div>
                              </div>
                            </div>   
         <div class="card-panel">        
                                      <div class="col-sm-6">
                                      <div class="form-group blue lighten-5">
                                        <textarea id="textarea" name="content" type="text" class="materializeextarea" placeholder="content" value="content" hight="500px" width="150px"></textarea>
                                         <script type="text/javascript">
                                          
                                          CKEDITOR.replace('content');

                                        </script>
                                      </div>
                                      <div class="center">
                                      <input id="btnsub" type='submit' class="waves-effect blue waves-light btn " name='post' value='Post' />
                                      </div>
                                    </div>
                                  </div>
                                     
           

       </div>   
    </div>

  </div>
</div>

</div>

<?php include('footer.php'); ?>
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