<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
				<form action='change_pic.php' method='POST' enctype="multipart/form-data">
				<p>
				Available file extension : <b> .PNG .JPG .JPEG</b></p><br>
				<div><input type="file" name="image"></div><br>
				<div><input type="submit" name="change_pic" value="change"></div>


					

				</form>
			</center>
</body>


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
            
            





?>