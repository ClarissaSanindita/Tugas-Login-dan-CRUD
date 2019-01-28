<!doctype html>
<html lang="en">

<head>
	<title>Elements | Klorofil - Free Bootstrap Dashboard Template</title>
	<style media="screen">
		table{
			margin-top: 150px;
		}

		.panel{
			margin-top: 30px;

		}

		.col-md-6{
			margin-left: 250px;
		}

		.foto img{
			position: absolute;
			width: 130px;
			margin-left: 180px;
			margin-top: 90px;
		}
	</style>
</head>

<body>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Biodata</h3>
					<div class="row">
						<div class="col-md-6">
							<!-- BUTTONS -->
							<div class="foto">
								<img src="<?= base_url() ?>assets/img/hiya.png">
							</div>
							<div class="panel">

								<div class="panel-body">
									<p class="demo-button">
										<div class="panel">
											<div class="panel-body">
												<table class="table table-hover">
													<thead>
													</thead>
													<tbody>
														<tr>
															<td></td>
															<td>Nama</td>
															<td></td>
															<td>Clarissa Sanindita R</td>
														</tr>
														<tr>
															<td></td>
															<td>TTL</td>
															<td></td>
															<td>Malang, 08 Oktober 2001</td>
														</tr>
														<tr>
															<td></td>
															<td>Sekolah</td>
															<td></td>
															<td>SMK Telkom Malang</td>
														</tr>
														<tr>
															<td></td>
															<td>Alamat</td>
															<td></td>
															<td>JL.S.Supriadi GG.08 No.14, Sukun, Malang</td>
														</tr>

													</tbody>
												</table>
											</div>
										</div>
										<!-- END TABLE HOVER -->



									</div>
								</div>
							</div>
							<!-- END BUTTONS -->
							<!-- INPUTS -->
							<!-- <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
									<input type="text" class="form-control" placeholder="text field">
									<br>
									<input type="password" class="form-control" value="asecret">
									<br>
									<textarea class="form-control" placeholder="textarea" rows="4"></textarea>
									<br>
									<select class="form-control">
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
										<option value="pepperoni">Pepperoni</option>
										<option value="onions">Onions</option>
									</select>
									<br>
									<label class="fancy-checkbox">
										<input type="checkbox">
										<span>Fancy Checkbox 1</span>
									</label>
									<label class="fancy-checkbox">
										<input type="checkbox">
										<span>Fancy Checkbox 2</span>
									</label>
									<label class="fancy-checkbox">
										<input type="checkbox">
										<span>Fancy Checkbox 3</span>
									</label>
									<br>
									<label class="fancy-radio">
										<input name="gender" value="male" type="radio">
										<span><i></i>Male</span>
									</label>
									<label class="fancy-radio">
										<input name="gender" value="female" type="radio">
										<span><i></i>Female</span>
									</label>
								</div>
							</div> -->
							<!-- END INPUTS -->
							<!-- INPUT SIZING -->
							<!-- <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Input Sizing</h3>
								</div>
								<div class="panel-body">
									<input class="form-control input-lg" placeholder=".input-lg" type="text">
									<br>
									<input class="form-control" placeholder="Default input" type="text">
									<br>
									<input class="form-control input-sm" placeholder=".input-sm" type="text">
									<br>
									<select class="form-control input-lg">
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
										<option value="pepperoni">Pepperoni</option>
										<option value="onions">Onions</option>
									</select>
									<br>
									<select class="form-control">
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
										<option value="pepperoni">Pepperoni</option>
										<option value="onions">Onions</option>
									</select>
									<br>
									<select class="form-control input-sm">
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
										<option value="pepperoni">Pepperoni</option>
										<option value="onions">Onions</option>
									</select>
								</div>
							</div> -->
							<!-- END INPUT SIZING -->
						</div>
						<div class="col-md-6">
							<!-- LABELS -->
							<!-- <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Labels &amp; Badges</h3>
								</div>
								<div class="panel-body">
									<span class="label label-default">DEFAULT</span>
									<span class="label label-primary">PRIMARY</span>
									<span class="label label-success">SUCCESS</span>
									<span class="label label-info">INFO</span>
									<span class="label label-warning">WARNING</span>
									<span class="label label-danger">DANGER</span>
									<br>
									<br>
									<a href="#">Inbox <span class="badge">42</span></a>
									<br>
									<br>
									<button class="btn btn-primary" type="button">
										Messages <span class="badge">4</span>
									</button>
								</div>
							</div> -->
							<!-- END LABELS -->
							<!-- PROGRESS BARS -->
							<!-- <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Progress Bars</h3>
								</div>
								<div class="panel-body">
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
											<span class="sr-only">60% Complete</span>
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
											<span class="sr-only">60% Complete (warning)</span>
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
											<span class="sr-only">60% Complete (success)</span>
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
											<span class="sr-only">60% Complete (danger)</span>
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
											75%
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
											<span class="sr-only">20% Complete</span>
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
											<span class="sr-only">45% Complete</span>
										</div>
									</div>
									<div class="progress progress-xs">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
											<span class="sr-only">80% Complete</span>
										</div>
									</div>
								</div>
							</div> -->
							<!-- END PROGRESS BARS -->
							<!-- INPUT GROUPS -->
							<!-- <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Input Groups</h3>
								</div>
								<div class="panel-body">
									<div class="input-group">
										<input class="form-control" type="text">
										<span class="input-group-btn"><button class="btn btn-primary" type="button">Go!</button></span>
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-btn">
							<button class="btn btn-primary" type="button">Go!</button>
						</span>
										<input class="form-control" type="text">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" placeholder="Username" type="text">
									</div>
									<br>
									<div class="input-group">
										<input class="form-control" placeholder="Username" type="text">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">$</span>
										<input class="form-control" type="text">
										<span class="input-group-addon">.00</span>
									</div>
								</div>
							</div> -->
							<!-- END INPUT GROUPS -->
							<!-- ALERT MESSAGES -->
							<!-- <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Alert Messages</h3>
								</div>
								<div class="panel-body">
									<div class="alert alert-info alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-info-circle"></i> The system is running well
									</div>
									<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Your settings have been succesfully saved
									</div>
									<div class="alert alert-warning alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-warning"></i> Warning, check your permission settings
									</div>
									<div class="alert alert-danger alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-times-circle"></i> Your account has been suspended
									</div>
								</div>
							</div> -->
							<!-- END ALERT MESSAGES -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->

		<!-- END MAIN -->
		<!-- <div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div> -->
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<!-- <script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script> -->
</body>

</html>