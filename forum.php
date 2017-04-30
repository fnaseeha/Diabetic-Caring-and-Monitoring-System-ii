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