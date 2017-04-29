<?php
	include('dash.php');

?>
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Imediacte Reaction and Solutions</h4>
									<p class="category">Search Information</p>
	                            </div>
	                            <div class="card-content">
	                                <form method="post" action="search.php">
	                                    <div class="row">
																					<script>
																					$(document).ready(function() {
																					 $('select').material_select();
																					});
																					</script>
																						<div class="input-field col s12">
																					    <select name="opt" >
																					      <option value="" disabled selected>Choose your option</option>
																								<?php
                                                include('config.php');
                                                $sql= "SELECT name FROM item ";
                                                $result = $conn->query($sql);
                                                while($row = $result->fetch_assoc()) {
                                                ?>
																					      <option ><?php echo $row['name'] ?></option>
																								<?php
                                                  }
                                                ?>
																					    </select>
																					    <label>Select the Medicine</label>
																							<button type="submit" name="submit" class="btn btn-info pull-right">Search</button>
																					  </div>
																						<div class="card-content table-responsive">
								                                <table class="table">
								                                    <thead class="text-primary">
																											<td>Medicine Name</td>
																											<td>Other Name</td>
																											<td>Reflection</td>
																											<td>Solution</td>
								                                    </thead>
								                                    <tbody>
																											<?php
						                                            include("config.php");
																												$name = $_POST['opt'];
						                                            $sql= "SELECT * FROM item where name = '$name' ";
						                                            $result = $conn->query($sql);
						                                            while($row = $result->fetch_assoc()) {
						                                        ?>
								                                        <tr>
								                                        	<td><?php echo $row['name'] ?></td>
								                                        	<td><?php echo $row['othername'] ?></td>
								                                        	<td><?php echo $row['reaction'] ?></td>
																													<td><?php echo $row['solution'] ?></td>
								                                        </tr>
																												<?php
																													}
																												?>
								                                    </tbody>
								                                </table>

								                            </div>
								                        </div>


	                                    </div>

	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>

	                </div>
	            </div>
	        </div>

<?php
	include ('footer.php');
?>
