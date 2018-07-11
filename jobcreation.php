
<!DOCTYPE>
<html>
	<head>
		<title>job creation</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="assets/js/user.js"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header Wrapper -->
				<div id="header-wrapper">
					<div class="container">

						<!-- Header -->
							<header id="header">
								<div class="inner">

									<!-- Logo -->
										<h1><a id="logo">.S.H.E.</a></h1>

									<!-- Nav -->
										<?php  
  
                          include("navmenu.php");
                          ?>

								</div>
							</header>
			<?php  if ((isset($_SESSION['User'])==false) || ($_SESSION['User']=='')){
			echo"<script>window.open('SignIn.php','_self')
            alert('You need to login first.')
       		 </script>"; }
       		?>
					</div>
				</div>

			<!-- Main Wrapper -->
				<div id="main-wrapper">
					<div class="wrapper style2">
						<div class="inner">
							<div class="container">
								<div id="content">

									<!-- Content -->

										<article>
													<header class="major">
														<h2>CREATE JOB</h2>
														<p>You can create your own job and hire people to help you complete your work.You just need to fill the form given below and interested people can apply. Go ahead and be your own boss </p>
													</header>

				

													<h3>FILL UP THE FORM</h3>
													<div class="panel-body">  
                    <form role="form" method="post" action="createjob.php">  
                        <fieldset>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="OwnerName" name="ownername" type="text" autofocus value="<?php echo $_SESSION['User'];?>" readonly>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="JobName" name="jobname" type="text" autofocus>  
                            </div>  
                            
                            <div class="form-group">  
                                <textarea rows="4" cols="50" placeholder="Description : Do mention the last date for applying and salary for the work in description here" name="des"></textarea>
                            </div> 
                             <b>Job Location</b>
                             <div class="form-group">  
                                <input class="form-control" type="radio" name="jobtype" value="local"  > Local 

                            </div> 
                             <div class="form-group">  
                                <input class="form-control" type="radio"  name="jobtype" value="anywhere" >  Anywhere
                            </div><br>
                            <div class="form-group"><b>Job Category</b>  
                                <select name ="jobcategory">
                                	<option disabled selected>Select job category</option>
 									 <option value="Educational">Educational</option>
 									 <option value="Professional">Professional</option>
 									 <option value="Catering">Catering</option>
 									 <option value="Craft">Craft</option>
								</select>
                            </div> 
                            <b>Keywords</b>
                             <div class="form-group">  
                                <textarea rows="4" cols="50" placeholder="Keywords" name="keywords"></textarea>
                            </div> 
                             <br>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="create" name="create" >
												</article>
								</div>
							</div>
						</div>
					</div>
					
								
				</div>

			<!-- Footer Wrapper -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="3u 12u(mobile)">

								
							</div>
							<div class="6u 12u(mobile)">

								<!-- About -->
									<section>
										<a href="mailto: admin@gmail.com" class="button alt icon fa-arrow-circle-right">contact</a>
									</section>

								<!-- Contact -->
									<section>
										<h2>Get in touch</h2>
										<div>
											<div class="row">
												<div class="6u 12u(mobile)">
													<dl class="contact">
														<dt>Twitter</dt>
														<dd><a href="#">@untitled-corp</a></dd>
														<dt>Facebook</dt>
														<dd><a href="www.facebook.com">facebook.com/untitled</a></dd>
														<dt>WWW</dt>
														<dd><a href="#">untitled.tld</a></dd>
														<dt>Email</dt>
														<dd><a href="#">user@untitled.tld</a></dd>
													</dl>
												</div>
												<div class="6u 12u(mobile)">
													<dl class="contact">
														<dt>Address</dt>
														<dd>
															1234 Fictional Rd<br />
															Lucknow<br />
															India
														</dd>
														<dt>Phone</dt>
														<dd>(000) 000-0000</dd>
													</dl>
												</div>
											</div>
										</div>
									</section>

							</div>
						</div>
						<div class="row">
							<div class="12u">
								<div id="copyright">
									<ul class="menu">
										<li>&copy; Untitled. All rights reserved</li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

		</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>