<?php
@session_start();
if(@$_SESSION["username"]){
include ('header.php');
?>

<div class="nav-content">
      <ul >
        <li ><a class="active" href="#myaccount"></a></li>
        
      </ul>
    </div>
    </nav>
</br></br>  
<style type="text/css">
  #myaccount{
          width: 90%;
          margin-top: 10%;
           z-index: 1;
        }
 
  #profImg{
    margin-left: 15%;
     margin-right: 5%;
      margin-top: 10%;

  }
    #ImgCont{
       margin-left: 5%;
       
    }
    #aboutme{
      margin-top: -2%;
      z-index: -1;
        width: 50%;
      
    }
    #Pateintid,#eml,#addrss,#phn{
       margin-left: 15%;
        margin-right: 5%;
    }
    #side{
      margin-left: -12%;

    }
    #about_content{
      margin-left: -10%;
      margin-right: 55%;
      width:30%;
    }
    #btnchange{
       margin-top: 5%;
    }
    #btnprof{
      margin-top: 5%;
    }
    #redcontent{
        width: 450%;
        margin-left: 12%;
         margin-right: 12%;
          margin-top: 10%;
    }
    #change_picture{
       margin-left: -80%;
       width: 35%;
    }
    #btnprof{
       margin-left: -3%;
       width:105%;
         margin-right: 2%;
          margin-top: 1%;
    }
    #btnpass{
      width:105%;
       margin-left: -3%;
         margin-right: 2%;
          margin-top: 2%;
    }
    
  #input2,#emailinput,#addressinput,#phoneinput,#current_password,
  #new_password,#retype_password{
      
   border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;

  }
</style>
<?php

  require('connection.php');
  $sql="SELECT * FROM $table WHERE username='".$_SESSION['username']."'";
  $check =mysqli_query($con,$sql);
  

  if(mysqli_num_rows($check) !=0){
    while($row =mysqli_fetch_assoc($check)){
     
      $profile= $row['profile_pic'];
      $email=$row['email'];
      $address=$row['address'];
      $phone=$row['phone'];
 
    }
}


?>
  

<div id="myaccount" class="col s12">
<div class="container" id="ImgCont" >
    <div class="row">
       <div class="col s6" id="side">
          <div id="profImg" class="card-panel blue lighten-5">
          <center>  <img class=" responsive-img" src="<?php echo $profile;?>" height="200px" width="190px"></center>

              <div class="card-panel">
              <div class="center">
                  <a href="edit_profile.php?action=ci"><input id="btnprof" type='submit' class="waves-effect blue waves-light btn "  name='btnprof' value='Change Profile' /></a></div>
              <div class="center">
                  <a href="edit_profile.php?action=cp"><input id="btnpass" type='submit' class="waves-effect blue waves-light btn "  name='btnpass' value='Change Password' /></a></div>
              </div>
         </div>
      </div>
      
        
<div class="col s6" id="aboutme">
  <div class="col-6">
  
  <div class="container" id="about_content" >
    <div class="row">
      <div class="col s6" id="redcontent">
        <div class="card-panel blue lighten-5">
          
                            <div class="header ">
                                <h4 class="title  blue lighten-4 center">Edit Details</h4>
                            </div>

          <div class="row">
          <form action="edit_profile.php?action=edit" method="POST">
          <div class="form-group ">
                       Email :
                    <input id="emailinput" name="email" type="text" value="<?php echo $email?>">
                       Address :
                    <input id="addressinput" name="address" type="text" value="<?php echo $address?>">
                       phone Number :
                    <input id="phoneinput" name="phone" type="text" value="<?php echo $phone?>">
                    
         </div>
          <div class="form-group center">
              <input id="btnchange" type='submit' class="waves-effect blue waves-light btn " name='btnprof' value='Change' />
            </div>
        </form>       
          </div>
          
        
        </div>
    </div>
    </div>
    </div>  
    
<?php if(@$_GET['action']=="ci"){
      ?>
<div class="container " id="change_picture" >
    <div class="row">
      <div class="col s6" id="redcontent">
        <div class="card-panel blue lighten-5">
          
                            <div class="header">
                                <h4 class="title  blue lighten-4 center">Change Image</h4>
                            </div>

          <div class="row">
          
            <p><center>Available file extension : <b> .PNG .JPG .JPEG</b></center></p><br>

            <form action='edit_profile.php?action=ci' method='POST' enctype="multipart/form-data">

            <div class="form-group ">
              
               <input id="btnfile" type='file' class="waves-effect  waves-light btn " name='image' value='Choose File' />
              
            </div>
            <div class="center">
              <input id="btnchange" type='submit' class="waves-effect blue waves-light btn " name='change_pic' value='Change' />
            </div>

            </form>
                     
          </div>
        
        </div>
    </div>


    </div>
</div>
//stat
<?php


  if(isset($_POST['change_pic'])){

      $errors=array();
      $allowed_e=array('png','jpg','jpeg');

      $file_name=$_FILES['image']['name'];
      $file_e=strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
      $file_s=$_FILES['image']['size'];
      $file_tmp=$_FILES['image']['tmp_name'];

      if(in_array($file_e,$allowed_e)===false){
        $errors[]='This file extension is not allowed';
      }
      if($file_s>2097152){
        $errors[]='File must be under 2MB';
      }
      if(empty($errors)){
        move_uploaded_file($file_tmp, 'images/'.$file_name);
        $image_up='images/'.$file_name;

        require('connection.php');
        $sql4="SELECT * FROM $table WHERE username='".$_SESSION['username']."'";
        
        $check4 =mysqli_query($con,$sql4);
        $rows4= mysqli_num_rows($check4);
        echo $image_up;
        
        $sql5="UPDATE $table SET profile_pic ='".$image_up."' WHERE  username='".$_SESSION['username']."'";
        $check5=mysqli_query($con,$sql5);

        if($check5){
          echo 'Your profile image has changed';
        }



      }else{
        foreach ($errors as $error) {
          echo $error.'<br>';
        }
      }

    }

}
?>
//End
   
 </div>
 <?php
 if(@$_GET['action']=="cp"){
      //echo 'change password';
      ?>
       <div class="container" id="about_content" >
    <div class="row">
      <div class="col s6" id="redcontent">
        <div class="card-panel blue lighten-5">
          
                            <div class="header ">
                                <h4 class="title  blue lighten-4 center">Edit Password</h4>
                            </div>

          <div class="row">
          <form>
          <div class="form-group ">
                       Current Password :
                    <input id="current_password" name="current_password" type="password">
                        New Password :
                    <input id="new_password" name="new_password" type="password">
                       Retype Password :
                    <input id="retype_password" name="retype_password" type="password">
                    
         </div>
          <div class="form-group center">
              <input id="btnprof" type='submit' class="waves-effect blue waves-light btn " name='change_pass' value='Change' />
            </div>
        </form>       
          </div>
          
        
        </div>
    </div>
    </div>
    </div>  
 <?php
      

      if(isset($_POST['change_pass'])){

      $curr_pass=$_POST['current_password'];
      $new_pass=$_POST['new_password'];
      $retype_pass=$_POST['retype_password'];
      require('connection.php');

        $sql2="SELECT * FROM $table WHERE username='".$_SESSION['username']."'";
        
      $check2 =mysqli_query($con,$sql2);
      $rows2= mysqli_num_rows($check2);


      while($row=mysqli_fetch_assoc($check2)){
        $get_pass= $row['password'];
      }
      if(sha1($curr_pass)==$get_pass){
        if(strlen($new_pass)>6){
          if($new_pass==$retype_pass){
            echo 'Success';
            $sql3="UPDATE $table SET password ='".sha1($new_pass)."' WHERE username='".$_SESSION['username']."'";
            $check3 =mysqli_query($con,$sql3);

            if($check3){
              echo 'Password changed Successfully';

            }else{
              echo 'Password did not update';
            }
          }else{
          echo 'New password do not match';
        } 
        }else{
          echo 'New password must be longer than 6 characters';
        }
      
      }else{
        echo 'Your current password do not match with your real password';
      }


    }else{
      echo 'Not Filled';
    }

  }
?>
//end                      
                                      
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
<?php
}
?>
    