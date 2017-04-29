<?php
	include('dash.php');
	include('config.php');
?>
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Add medicine</h4>
									<p class="category">Complete all fields</p>
	                            </div>
	                            <div class="card-content">
	                                <form method="post" action="classAdd.php">
	                                    <div class="row">
	                                        <div class="col-md-5">
												<div class="form-group label-floating">
													<label class="control-label">Medicine Name</label>
													<input type="text" class="form-control" name="name">
												</div>
	                                        </div>
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Other Name</label>
													<input type="text" class="form-control" name="othername" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Production Country</label>
													<input type="text" class="form-control" name="country">
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Reaction</label>
													<input type="text" class="form-control" name="react">
												</div>
	                                        </div>
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Imediate Solution</label>
													<input type="text" class="form-control" name="solution">
												</div>
	                                        </div>
	                                    </div>
	                                    <button type="submit" name="submit" class="btn btn-primary pull-right">Add Medidicine</button>
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
