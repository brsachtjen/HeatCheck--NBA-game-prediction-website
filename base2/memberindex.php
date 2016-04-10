<?php 
session_start();
if(!isset($_SESSION["FullName"])){
	header("location:login.php");
} else {
?>
<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>HEATCHECK</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">



			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.html">Home</a></li>

						<li><a href="memberaboutus.php">About Us</a></li>
						<li><a href="member.php">HeatCheck!</a></li>
						<li><a href="logout.php">Sign out</a></li>
					</ul>
				</nav>
                
            <div  style="position: fixed; top: -10px;left: -10px; z-index: 1002;">
            
                <img style="height: 10em;" src="images/heatcheck.png" alt=""/>
            
            </div>
                <!-- position: absolute;top: 0;left: 0;z-index: 1000; -->
            
			<!-- Banner -->
				<div id="banner-wrapper">
					<section id="banner">
						<h2>Welcome <?=$_SESSION['FullName'];?> to HeatCheck</h2>
						<p>The #1 site for NBA game predictions.</p>
						<a href="signup.html" class="button">Start Winning</a>
					</section>
				</div>

			<!-- Main -->
			<div id="main-wrapper" style="background: #f2f5f3;">
				<div class="row 200%" >
								<div class="12u" >

									<!-- Features -->
										<section class="box features" >
											<h2 class="major" style="font-size:8em; margin: 0em 0 1.0em 0;"><span>3 Easy Steps</span></h2>
											<div>
												<div class="row" style="margin:auto; width: 100%;">

														<div class="3u 12u(mobile)" style="margin:2.5em;"> 

															<!-- Feature -->
																<section class="box feature" style="font-size:1.25em; width: 125%;">
																	<a class="image featured"><img src="images/durant.jpg" alt=""/></a>
																	<h3><a>1. Sign up</a></h3>
																	<p>
																		It only takes a minute - and it's free!
																	</p>
																</section>

														</div>
														<div class="3u 12u(mobile)" style="margin:2.5em;">

															<!-- Feature -->
																<section class="box feature" style="font-size:1.25em; width: 125%;">
																	<a class="image featured"><img src="images/kobe.jpg" alt="" /></a>
																	<h3><a>2. Pick your games</a></h3>
																	<p>
																		Stats and predictions for every game.
																	</p>
																</section>

														</div>
														<div class="3u 12u(mobile)" style="margin:2.5em;">

															<!-- Feature -->
																<section class="box feature" style="font-size:1.25em; width: 125%;">
																	<a class="image featured"><img src="images/lebron.jpg" alt="" /></a>
																	<h3><a>Win Big!</a></h3>
																	<p>
																		Because who doesn't like cold hard cash?
																	</p>
																</section>

														</div>

												</div>
												<div class="row">
													<div class="12u">
														<ul class="actions">
															<li><a href="signup.html" class="button big">Sign up!</a></li>
															<li><a class="button alt big">More Info</a></li>
														</ul>
													</div>
												</div>
											</div>
										</section>

								</div>
							</div>
						</div>

				<div>
					<div id="main" class="container" style="border-bottom: solid 10px #3399ff; margin: 0em; padding: 0em; width: 100%" >
						<div class="row 200%" > 
							<div class="12u">

								<!-- Highlight -->
									<!-- <section class="wrapper style1"> -->
                                        <div class="container">
                                            <div class="row 200%">
                                                <section class="4u 12u(narrower)">
                                                    <div class="box highlight">

                                                        <ul class="special">
                                                                <li><a class="icon fa-cogs"><span class="label">Cogs</span></a></li>
                                                        </ul>
                                                        <h3>The Best Model.</h3>
                                                        <p>Our proprietary model gives you a higher prediction accuracy than anything other website on the market.</p>
                                                    </div>
                                                </section>
                                                <section class="4u 12u(narrower)">
                                                    <div class="box highlight">
                                                        <ul class="special">
                                                                <li><a class="icon fa-line-chart"><span class="label">LineChart</span></a></li>
                                                        </ul>
                                                        <h3>Real-time Stats.</h3>
                                                        <p>Full access to HeatCheck's historical game picking performance, player statistics, and your personal betting history. </p>
                                                    </div>
                                                </section>
                                                <section class="4u 12u(narrower)">
                                                    <div class="box highlight">
                                                        <ul class="special">
                                                                <li><a class="icon fa-comments"><span class="label">Comments</span></a></li>
                                                        </ul>
                                                        <h3>Help if you need it.</h3>
                                                        <p>Our customer service reprentatives are available 24 hours a day to answer your questions, or advise you on picks.</p>
                                                    </div>
                                                </section>

                                            </div>
                                        </div>
				                    <!-- </section> -->

							</div>
						</div> 
                    </div>


	<div class="cd-pricing-container">
		<h2 style="font-size:4em; margin: 0em 0 1.5em 0; text-align: center"><span>Pick your package!</span></h2>
		<ul class="cd-pricing-list">
			<li>
				<header class="cd-pricing-header">
					<h2 style="margin-bottom:20px">Basic</h2>

					<div class="cd-price">
						<span class="cd-currency">$</span>
						<span class="cd-value">1</span>
						<span class="cd-duration">mo</span>
					</div>
				</header> <!-- .cd-pricing-header -->

				<div class="cd-pricing-body">
					<ul class="cd-pricing-features">
						<li><em>7 games</em> per week</li>
						<li><em>Game spread</em> predictions</li>
						<li><em>60%+</em> accuracy</li>
						<li><em>24/7</em> Support</li>
					</ul>
				</div> <!-- .cd-pricing-body -->

				<footer class="cd-pricing-footer">
					<a class="cd-select" href="signup.html">Select</a>
				</footer> <!-- .cd-pricing-footer -->
			</li>
			<li class="cd-popular">
				<header class="cd-pricing-header">
					<h2 style="margin-bottom:20px">Popular</h2>

					<div class="cd-price">
						<span class="cd-currency">$</span>
						<span class="cd-value">5</span>
						<span class="cd-duration">mo</span>
					</div>
				</header> <!-- .cd-pricing-header -->

				<div class="cd-pricing-body">
					<ul class="cd-pricing-features">
						<li><em>40 games</em> per week</li>
						<li><em>Game spread</em> predictions</li>
						<li><em>Over/under</em> predictions</li>
						<li><em>24/7</em> Support</li>
					</ul>
				</div> <!-- .cd-pricing-body -->

				<footer class="cd-pricing-footer">
					<a class="cd-select" href="signup.html">Select</a>
				</footer> <!-- .cd-pricing-footer -->
			</li>
			<li>
				<header class="cd-pricing-header">
					<h2 style="margin-bottom:20px">Premier</h2>

					<div class="cd-price">
						<span class="cd-currency">$</span>
						<span class="cd-value">10</span>
						<span class="cd-duration">mo</span>
					</div>
				</header> <!-- .cd-pricing-header -->

				<div class="cd-pricing-body">
					<ul class="cd-pricing-features">
						<li><em>All games</em> every week</li>
						<li><em>Game spread</em> predictions</li>
						<li><em>Over/under</em> predictions</li>
						<li><em>24/7</em> Support</li>
					</ul>
				</div> <!-- .cd-pricing-body -->

				<footer class="cd-pricing-footer">
					<a class="cd-select" href="signup.html">Select</a>
				</footer>  <!-- .cd-pricing-footer -->
			</li>
		</ul> <!-- .cd-pricing-list -->
	</div> <!-- .cd-pricing-container -->

	
	

			<!-- Footer -->
				<footer id="footer" class="container">

					<div class="row 200%">
						<div class="12u">

							<!-- Contact -->
								<section>
									<h2 class="major"><span>Get in touch</span></h2>
									<ul class="contact">
										<li><a class="icon fa-facebook" href="www.facebook.com"><span class="label">Facebook</span></a></li>
										<li><a class="icon fa-twitter" href="www.twitter.com"><span class="label">Twitter</span></a></li>
										<li><a class="icon fa-instagram" href="www.instagram.com"><span class="label">Instagram</span></a></li>
										<li><a class="icon fa-dribbble" href="www.nba.com"><span class="label">Dribbble</span></a></li>

									</ul>
								</section>

						</div>
					</div>

					<!-- Copyright -->
						<div id="copyright">
							<ul class="menu">
								<li>&copy; HeatCheck. All rights reserved</li><li>Design: <a href="#">HTML5 UP</a></li>
							</ul>
						</div>

				</footer>

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
<?php
}
?>