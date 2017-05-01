<?php
@session_start();
if(@$_SESSION["username"]){
   
include ('header.php');


?>

<div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a class="active" href="#myaccount">My Account</a></li>
         <li class="tab"><a  href="#Progresslevel">Progress Levels</a></li>
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
  #Drugdetails{
    width: 90%;
          margin-top: 10%;
           z-index: 1;
  }
  #profImg{
    margin-left: 15%;
     margin-right: 5%;

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
      margin-left: -15%;
    }
    #about_content{
      margin-left: -15%;

    }
    #redcontent{
        width: 450%;
        margin-left: 12%;
         margin-right: 12%;
          margin-top: 10%;
    }

  #progress{
    margin-top: 1%;
     z-index: -1;
  }
  #progressImg{
    width: 150%;
    margin-top: 2%;
      z-index: -1;
    margin-left: 15%;
         margin-right: 15%;
  }
  #Progresslevel{
   width: 90%;
          margin-top: 10%;
           z-index: -1;
  }
  #progressAllcontent{

         
  }
</style>

<div id="myaccount" class="col s12">
<div class="container" id="ImgCont" >
    <div class="row">
       <div class="col s6" id="side">
          <div id="profImg" class="card-panel blue lighten-5">
          
<?php

  require('connection.php');
  $sql="SELECT * FROM $table WHERE username='".$_SESSION['username']."'";
  $check =mysqli_query($con,$sql);
  

  if(mysqli_num_rows($check) !=0){
    while($row =mysqli_fetch_assoc($check)){
      $id=$row['id'];
      $profile= $row['profile_pic'];
      $email=$row['email'];
      $address=$row['address'];
      $phone=$row['phone'];
 
    }
}


?>
                <center>  <img class="circle responsive-img" src="<?php echo $profile;?>" height="150px" width="150px"></center>
                
             
              <div class="card-panel">

              <form>
                  <div id="Pateintid" class="row">
                    <h8>Pateint ID:<b> <?php echo $id;?></b></h8>
                  </div>
                  <div id="eml" class="row">
                    <h8>Email Address: <b><?php echo $email;?></b></h8>
                  </div>
                   <div class="row" id="addrss">
                     <h8>Address:<b> <?php echo $address;?></b></h8>
                  </div>
                  <div class="row" id="phn">
                      <h8>Phone Number:<b> (+94)<?php echo $phone;?></b></h8>
                  </div>         
             </form>

                
              <a class="waves-effect blue waves-light btn center" href="edit_profile.php"><i class="fa fa-pencil-square-o" aria-hidden="true"> <small>Edit profile</small></i></a>

              
                


          
             </div>
         </div>
      </div>
      
        
<div class="col s12" id="aboutme">
  <div class="col-12">
  <div class="container" id="about_content" >
    <div class="row">
      <div class="col s12" id="redcontent">
        <div class="card-panel blue lighten-5">
          
                            <div class="header">
                                <h4 class="title  blue lighten-4">Drug Details</h4>
                               
                            </div>

          <div class="row">
                     <div  id="tbl" class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                          <thead  class="green lighten-4">
                            <tr>
                                <th>Brand Name</th>
                                <th>Generic Name</th>
                                <th>Manufactured Country</th>
                                <th>Side Effect</th>
                                 <th>Type</th>
                                  
                            </tr>
                          </thead>

                          <tbody>
                            <tr>
                              <td>Metformin</td>
                              <td>Glucophage</td>
                              <td>France and US</td>
                               <td>
                                  <ul>
                                     <li>
                                       Diarrhea
                                     </li>
                                     <li>
                                       nausea
                                     </li>
                                     <li>
                                       abdominal pain
                                     </li>
                                      <li>
                                       Low risk of developing low blood sugar.
                                     </li>
                               </ul>
                            </td>
                            <td>Type 2</td>
                            </tr>
                          </tbody>                        
                    </table>  
              </div>
          </div>
        
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

<div id="Progresslevel" class="col s12">
  <div id="progress" class="container" >
    <div class="col s12">
        <div class="card-panel blue lighten-5">
          <div class="col-sm-6">
             <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div id="progressAllcontent" class="card blue lighten-5">
                            
                           
                              <div id="progressImg2" class="center">
                                <img class="responsive-img"  src="images/progress.png" height="200px" width="350px">
                          <div class="card-panel">
                            <form>
                             <div class="row" id="bloodcomment">
                                 <p>Blood comment</p>
                                      </div>
                                </form>
                        </div>
                     </div>
                            <div id="progressImg3" class="center">
                                <img class="responsive-img"  src="images/progress.png" height="200px" width="350px">
                              <div class="card-panel">
                            <form>
                             <div class="row" id="bloodcomment">
                                 <p>Blood comment</p>
                                      </div>
                                </form>
                        </div>
                              </div>
                               <div id="progressImg3" class="center">
                                <img class="responsive-img"  src="images/progress.png" height="200px" width="350px">
                              </div>
                              <div class="card-panel">
                            <form>
                             <div class="row" id="bloodcomment">
                                 <p>Blood comment</p>
                                      </div>
                                </form>
                        </div>
                           
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



<script type="text/javascript"  src="http://code.jquery.com/jquery-2.1.1.min.js"></script>

<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>
<?php

}







?>    