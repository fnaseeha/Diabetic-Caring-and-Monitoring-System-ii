<?php
include ('header.php');
?>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        
         <li class="tab"><a  href="#myaccount">My Account</a></li>
         <li class="tab"><a class="active" href="#drug_details">Drug Details</a></li>
         <li class="tab"><a class="active" href="#progress_level">Progress Level</a></li>
      </ul>
    </div>
  </nav>
  <br>
  <br>
  


 
      
 <div id="myaccount" class="blue lighten-4">
    <div class="container" style="margin-top:25px">
      <div class="row">
           <div class="col s3">
                <div>
                  <div class="fixed-action-btn horizontal">
                    <a class="btn-floating btn-large red">
                      <i class="large material-icons">mode_edit</i>
                    </a>
                    <ul>
                      <li><a class="btn-floating red"><i class="material-icons">person_pin</i></a></li>
                      <li><label><b>Edit profile picture</b></label></li>
                      <li><a class="btn-floating yellow darken-1"><i class="material-icons">vpn_key</i></a></li>
                     <li><label><b>Change password</b></label></li>
                    </ul>
                  </div>                     
                </div>
              </div>
        </div>

 <div class="blue lighten-4">
      <div class="row">
        <div class="col s4">
          <div class="card green lighten-5">
            <div class="card-content">
             
             <img src="images/prof.jpg" height="175px" width="175px">
            </div>
           
          </div>
        </div>
        <div class="col s8">
          <div class="card red lighten-5">
            <div class="card-content">
             <center>
              <form>
                  <div class="row">
                    <h8>Pateint ID: D334</h8>
                  </div>
                  <div class="row">
                    <h8>Email Address: Perera@gmail.com</h8>
                  </div>
                   <div class="row">
                     <h8>Address: 3/C,Enasalgolla, Kandy</h8>
                  </div>
                  <div class="row">
                      <h8>Phone Number: +94777888845</h8>
                  </div>         
             </form>
             </center>
            </div>
            <div class="card-action">
             
            </div>
          </div>
        </div>

    </div>
  </div>
</div>
</div>


<div id ="drug details" class="col s8 blue lighten-4">
 <div class="container" style="margin-top:25px">
    <div class="card-panel ">
  
      
          
           <div class="content  green lighten-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card green lighten-5">
                            <div class="header">
                                <h4 class="title  green lighten-4">Drug Details</h4>
                               
                            </div>
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
                             <tr>
                              <td>Tolinase</td>
                              <td>Tolazamide</td>
                              <td>US</td>
                               <td>
                                <ul>
                                   <li>
                                    Feeling of stomach fullness
                                   </li>
                                   <li>
                                     Heartburn
                                   </li>
                                   <li>
                                     Abdominal pain
                                   </li>
                                    <li>
                                    Nausea
                                   </li>

                               </ul>
                              </td>
                                <td>Type 2</td>
                            </tr>
                             <tr>
                              <td>
                                <ul><li>
                                 GlipiZIDE XL
                               </li>
                               <li>
                                 Glucotrol
                               </li>
                               <li>
                                 Glucotrol XL
                               </li>
                               </ul>
                              </td>
                              <td>glipizide</td>
                              <td>France and US</td>
                               <td><ul><li>
                                 Abdominal or stomach pain
                               </li>
                               <li>
                                 Body aches or pain
                               </li>
                               <li>
                                 Burning, dry, or itching eyes
                               </li>
                                <li>
                                 dark urine
                               </li>
                                <li>
                                 difficult or labored breathing
                               </li>
                                <li>
                                 feeling of warmth
                               </li>

                               </ul></td>
                                <td>Type 2</td>
                            </tr>
                            <tr>
                              <td>
                              <ul><li>
                                 Diabeta
                               </li>
                               <li>
                                 Glycron
                               </li>
                               <li>
                                 Glynase
                               </li>
                                <li>
                                 Micronase
                               </li>
                                
                               </ul>
                               </td>
                              <td>Glyburide</td>
                              <td> </td>
                              <td>
                                <ul><li>
                                 Nausea
                               </li>
                               <li>
                                 Heartburn
                               </li>
                               <li>
                                 stomach fullness
                               </li>
                                <li>
                                 weight gain
                               </li>
                                
                               </ul>

                              </td>
                              <td>Type 2</td>
                            </tr>
                           
                          </tbody>
                        </table>
            
                     </div>

                    </form>
            </div>
</div>
         </div>
    </div>
</div>



<div id="progress_level" class="col s12">
<div class="container" style="margin-top:25px">
<div class="col s12">

              <div class="card-panel">
                <h5>My Progress Level</h5>

                <img src="images/Screen Shot 2017-04-26 at 11.44.19 PM.png" width="550px">
                     
                    <div class="row">
                     
                   </div>
                   </div>
            </div>

  </div>
   <!--div class="container" style="margin-top:25px">
<div class="col s12">

              <div class="card-panel">
                <h5>Diet Plans</h5>
                     
                    <div class="row">
                     
                   </div>
                   </div>
            </div>

  </div>
  </div-->



<?php include('footer.php'); ?>


<script type="text/javascript">

    $(document).ready(function(){
      $('.slider').slider();
    });


</script>





<script type="text/javascript"  src="http://code.jquery.com/jquery-2.1.1.min.js"></script>

<script type="text/javascript" src="js/materialize.min.js"></script>

<script type="text/javascript">
$( document ).ready(function(){

$(".button-collapse").sideNav();

})	


</script>




</body>
</html>