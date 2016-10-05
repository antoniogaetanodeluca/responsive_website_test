<?php include("setup.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/jquery.mmenu.all.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/css/style.css" />
	<script src="<?php echo $path_js; ?>/jquery-2.2.1.min.js"></script>
	<script src="<?php echo $path_js; ?>/bootstrap.min.js"></script>
	<script src="<?php echo $path_js; ?>/jquery.mmenu.min.js"></script>
	<script src="<?php echo $path_js; ?>/custom.js"></script>
	<title>Test Project by - Antonio De Luca</title>
</head>

<body>

	<div>
		<div class="container-fluid">

			<header id="header">
				<?php include("inc/header.php"); ?>
			</header>

			<section class="container">
				<div id="main-content" class="row">
					<div class="col-xs-12 col-sm-3 col-md-3 sidebar-container">
						<div class="profile-container">
							<div class="row no-margin">
								<div class="col-md-12">
									<img src="http://lorempixel.com/300/300/people" class="img-responsive img-circle img-profile">
									<h3 class="text-capitalize text-center">graham smith</h3>
									<h4 class="text-capitalize text-center">london, uk</h4>
								</div>
							</div>

							<div class="row no-margin">
								<div class="col-md-12 no-padding">
									<ul>
										<li><a href="#">link</a><i class="fa fa-gitlab" aria-hidden="true"></i></li>
										<li><a href="#">link</a></li>
										<li><a href="#">link</a></li>
										<li><a href="#">link</a></li>
									</ul>
								</div>
							</div>

							<div class="row no-margin">
								<div class="col-xs-6 col-md-6">
									<a href="#" class="text-capitalize">profile settings</a>
								</div>

								<div class="col-xs-6 col-md-6">
									<a href="#" class="text-capitalize">logout</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-9 col-md-9">

						<div id="menu" class="row no-margin">
					      <div class="col-xs-12 col-md-12 no-padding">
					         <nav class="hidden-xs navigation">
					            <ul>
					               <li class="text-capitalize"><a href="">category</a></li>
					               <li class="text-capitalize"><a href="">group</a></li>
					               <li class="text-capitalize"><a href="">files</a></li>
					               <li class="text-capitalize"><a href="">campaign</a></li>
					            </ul>
					         </nav>

					         <nav id="menuMobile">
					            <ul>
					               <li class="text-capitalize"><a href="">category</a></li>
					               <li class="text-capitalize"><a href="">group</a></li>
					               <li class="text-capitalize"><a href="">files</a></li>
					               <li class="text-capitalize"><a href="">campaign</a></li>
					            </ul>
					         </nav>
					      </div>
					  	</div>

						<div class="row no-margin campaign-container-box">
							<div class="col-xs-12 col-md-9 campaign-container">

								<div class="row no-margin add-campaign">
									<div class="col-xs-12 col-md-12">
										<h3><i class="fa fa-plus" aria-hidden="true"></i> Create New Campaign</h3>
										<a href="#" class="text-uppercase btn-cta">add </a>
										<div class="clearfix"></div>
									</div>
								</div>

								<div class="row no-margin campaign">
									<div class="col-xs-12 col-md-12">
										<h3 class="text-capitalize">campaign name 1 <a href="#" class="show-detail"><span class="text-right"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></span></a></h3>
									</div>

									<div class="col-xs-12 col-md-12">
										<div class="row no-margin campaign-info">
											<div class="col-xs-12 col-md-12 no-padding">
												<img src="http://lorempixel.com/150/150/city" class="img-circle">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												<div class="clearfix"></div>
												<h4>Version 2.0 / File Size 5.0 MB / lorem ipsum dolor sit amet.</h4>
												<a href="#" class="text-uppercase btn-cta">download all </a>
											</div>
										</div>

										<div class="row no-margin campaign-detail">
											<div class="col-xs-3 col-md-3">
												<i class="fa fa-file-archive-o" aria-hidden="true"></i>
											</div>

											<div class="col-xs-9 col-md-9">
												<h5>Title of File</h5>

												<div class="row no-margin">
													<div class="col-xs-12 col-md-8 no-padding">
														<strong>File Type:</strong> ZIP <span class="light">Expires November 2017</span>
													</div>

													<div class="col-xs-12 col-md-4 no-padding text-right">
														<a href="#">Download <span>2MB</span> <i class="fa fa-download" aria-hidden="true"></i></a>
													</div>
												</div>
											</div>
										</div>

										<div class="row no-margin campaign-detail last-campaign">
											<div class="col-xs-3 col-md-3">
												<i class="fa fa-file-word-o" aria-hidden="true"></i>
											</div>

											<div class="col-xs-9 col-md-9">
												<h5>Title of File</h5>

												<div class="row no-margin">
													<div class="col-xs-12 col-md-8 no-padding">
														<strong>File Type:</strong> DOC <span class="light">Expires November 2017</span>
													</div>

													<div class="col-xs-12 col-md-4 no-padding text-right">
														<a href="#">Download <span>2MB</span> <i class="fa fa-download" aria-hidden="true"></i></a>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>

							</div>




							<div class="col-xs-12 col-md-3 event-container no-padding">
								<div><h3 class="text-uppercase">upcaming events</h3></div>

								<div class="event">
									<div class="event-cal">
										<i class="fa fa-calendar-o" aria-hidden="true"></i>
										<span class="text-center">20</span>
									</div>
									<div class="event-info">
										<h5 class="text-capitalize">event name</h5>
										<p class="text-capitalize">20th november 2015</p>
									</div>
									<div class="clearfix"></div>
								</div>

								<div class="event">
									<div class="event-cal">
										<i class="fa fa-calendar-o" aria-hidden="true"></i>
										<span class="text-center">22</span>
									</div>
									<div class="event-info">
										<h5 class="text-capitalize">event name</h5>
										<p class="text-capitalize">22th december 2015</p>
									</div>
									<div class="clearfix"></div>
								</div>

								<div class="event last-event">
									<div class="event-cal">
										<i class="fa fa-calendar-o" aria-hidden="true"></i>
										<span class="text-center">31</span>
									</div>
									<div class="event-info">
										<h5 class="text-capitalize">event name</h5>
										<p class="text-capitalize">31th jenuary 2016</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


			<footer id="footer">
				<?php include("inc/footer.php"); ?>
			</footer>


			<?php
				include("inc/analytics.php");
			?>

		</div>
	</div>

</body>

</html>
