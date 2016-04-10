<?php 
session_start();
if(!isset($_SESSION["FullName"])){
	header("location:signin.html");
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
		<title>HEATCHECK - Welcome Back!</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <script type="text/javascript">
   
            var minNumber = 0; // The minimum number you want
            var maxNumber = 100; // The maximum number you want
            
            var ATSnumberraw = Math.round((Math.random() * (60 + 1) + 30)*10)/10; // Generates random number
            var OUnumberraw = Math.round((Math.random() * (60 + 1) + 30)*10)/10;
            var ROInumberraw = Math.round((((ATSnumberraw + OUnumberraw)/2)/55-1)*100);
            
            var ATSnumber = " "+ATSnumberraw.toString()+"%"; 
            var OUnumber = " "+OUnumberraw.toString()+"%"; 
            var ROInumber = " "+ROInumberraw.toString()+"%"; 
        
        </script>

        
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					
						
						<!--	<h1><a id="logo" style="font-size: 3em; color: #ff3333; margin: -1em 0em 0em 0em;">HeatCheck</a></h1> -->
							
						
					
				</header>
				

			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="current"><a href="member.php">HeatCheck!</a></li>
						<li><a href="memberaboutus.php">About Us</a></li>
						<li><a href="logout.php">Sign out</a></li>
					</ul>
				</nav>

            
            <div  style="position: fixed; top: -10px;left: -10px; z-index: 1002;">
            
                <img style="height: 10em;" src="images/heatcheck.png" alt=""/>
            
            </div>
			<!-- Main -->
				<div id="main-wrapper">
					<div id="main" class="container">
						<div class="row">
							<div class="3u 12u(mobile)">
								<div class="sidebar">

									<!-- Sidebar -->

										<!-- Recent Posts -->
											<section>
												<ul class="divided" style="margin-top: 3em;">
                                                    <h2 style="font-size: 2.5em;"><a>Betting Summary</a></h2>
													<li>
														<article class="box post-summary">
															<h3 style="font-size: 1.6em;"><a>Against the spread</a></h3>
                                                            <li class="icon fa-cogs" style="font-size: 3em"> <script>document.write(ATSnumber); </script> </li>
														</article>
													</li>
													<li>
														<article class="box post-summary">
															<h3 style="font-size: 1.6em;"><a>Over/Under Predictions</a></h3>
                                                            <li class="icon fa-line-chart" style="font-size: 3em"><script>document.write(OUnumber)</script></li>
														</article>
													</li>
													<li>
														<article class="box post-summary">
															<h3 style="font-size: 1.6em;"><a>Return on Investment</a></h3>
                                                            <li class="icon fa-usd" style="font-size: 3em"><script>
                                                                if(ROInumberraw > 0) {document.write(ROInumber.fontcolor("green"));}
                                                                else { document.write(ROInumber); } </script></li>
														</article>
													</li>
												</ul>
											</section>

										
								</div>
							</div>
							<div class="9u 12u(mobile) important(mobile)">
								<div class="content content-right">

									<!-- Content -->

										<article class="box page-content">

											

											<section>
                                                <h2>Hello, <?=$_SESSION['FullName'];?></h2>
                                                <p></p>
                                                
                                                <h3>Tonight's Games</h3>
												<table border="1px solid black;" style="width:100%; margin-bottom: -2em;">
                                                  <tr>
                                                      <td><b>Home Team</b></td>
                                                    <td><b>Away Team</b></td> 
                                                    <td><b>Spread</b></td>
                                                    <td><b>HeatCheck Pick</b></td>
                                                    <td><b>Spread Confidence</b></td>
                                                    <td><b>Over/Under</b></td>
                                                    <td><b>Heat Check Pick</b></td>
                                                    <td><b>O/U Confidence</b></td>
                                                  </tr>
                                                  
                                                     <tr>
                                                    <td>Golden State Warriors</td>
                                                    <td>Minnesota Timberwolves</td> 
                                                    <td>-15.0</td>
                                                    <td>Home team</td>
                                                    <td>57%</td>
                                                    <td>224.5</td>
                                                    <td>Over</td>
                                                    <td>67%</td>
                                                  </tr>
                                                     <tr>
                                                    <td>Toronto Raptors</td>
                                                    <td>Charlotte Hornets</td> 
                                                    <td>-4.0</td>
                                                    <td>Away Team</td>
                                                    <td>55%</td>
                                                    <td>200.5</td>
                                                    <td>Over</td>
                                                    <td>61%</td>
                                                  </tr>
                                                     <tr>
                                                    <td>Miami Heat</td>
                                                    <td>Detroit Pistons</td> 
                                                    <td>-4.0</td>
                                                    <td>Home Team</td>
                                                    <td>68%</td>
                                                    <td>201.5</td>
                                                    <td>Under</td>
                                                    <td>57%</td>
                                                  </tr>
                                                     <tr>
                                                    <td>Milwaulke Bucks</td>
                                                    <td>Cleveland Cavaliers</td> 
                                                    <td>+7.5</td>
                                                    <td>Home Team</td>
                                                    <td>51%</td>
                                                    <td>203.0</td>
                                                    <td>Under</td>
                                                    <td>65%</td>
                                                  </tr>
                                                     <tr>
                                                    <td>Denver Nuggets</td>
                                                    <td>Oklahome City Thunder</td> 
                                                    <td>+8.5</td>
                                                    <td>Away Team</td>
                                                    <td>58%</td>
                                                    <td>216.0</td>
                                                    <td>Over</td>
                                                    <td>75%</td>
                                                  </tr>
                                                </table>
                                                
                                                <div style="margin-bottom: 2em;"></div>
											
                                               
                                            </section>
                                            
                                            
											<section>
                                                
                                                
                                                <h3>Recent Betting History</h3>
												<table border="1px solid black;" style="width:100%;">
                                                  <tr>
                                                      <td><b>Date</b></td>
                                                    <td><b>Game</b></td> 
                                                    <td><b>Game Outcome</b></td>
                                                    <td><b>Bet Type</b></td>
                                                    <td><b>Bet Amount</b></td>
                                                    <td><b>Status</b></td>
                                                    <td><b>Payout</b></td>

                                                  </tr>
                                                  
                                                     <tr>
                                                    <td>4/5/2016</td>
                                                    <td>GSW-MIN</td> 
                                                    <td>Not played</td>
                                                    <td>Over</td>
                                                    <td>$50</td>
                                                    <td>Pending</td>
                                                    <td>Pending</td>
                                                  </tr>
                                                     <tr>
                                                    <td>4/5/2016</td>
                                                    <td>DEN-OKC</td> 
                                                    <td>Not played</td>
                                                    <td>Spread-Home Team</td>
                                                    <td>$30</td>
                                                    <td>Pending</td>
                                                    <td>Pending</td>
                                                  </tr>
                                                     <tr>
                                                    <td>4/3/2016</td>
                                                    <td>LAC-WAS</td> 
                                                    <td>114-109</td>
                                                    <td>Spread-Home Team</td>
                                                    <td>$50</td>
                                                    <td>WIN</td>
                                                    <td>$50</td>
                                                  </tr>
                                                     <tr>
                                                    <td>4/3/2016</td>
                                                    <td>BKN-NOP</td> 
                                                    <td>87-106</td>
                                                    <td>Spread-Away Team</td>
                                                    <td>$20</td>
                                                    <td>WIN</td>
                                                    <td>$20</td>
                                                  </tr>
                                                     <tr>
                                                     <td>4/3/2016</td>
                                                    <td>CLE-CHA</td> 
                                                    <td>112-103</td>
                                                    <td>Under</td>
                                                    <td>$30</td>
                                                    <td>LOSS</td>
                                                    <td>$0</td>
                                                  </tr>
                                                </table>
                                                
                                            </section>
                                            
                                            <section>
												<h3>Recent NBA News</h3>
												<ul>
                                                  <li type="square">Jae Crowder (rest) will "definitely" play Sunday against the Lakers, Adam Himmelsbach of The Boston Globe reports.</li>
                                                    <li type="square">Thaddeus Young has been ruled out for the rest of the 2015-16 season, Mike Mazzeo of ESPN.com reports.</li>
                                                    <li type="square">Nic Batum (knee) has been ruled out for Tuesday's game against Toronto.</li>
                                                    <li type="square">Kyrie Irving (ankle) will go through shootaround before deciding whether or not he'll play against the Bucks on Tuesday, Chris Haynes of the Plain Dealer reports.</li>
                                                </ul>
                                                
                                                
                                                
                                               
											</section>

										</article>
                                        


								</div>
							</div>
                            
						</div>
						
					</div>
				</div>

			<!-- Footer -->
				<footer id="footer" class="container">

					<div class="row 200%">
						<div class="12u">

							<!-- Contact -->
								<!--<section>
									<h2 class="major"><span>Get in touch</span></h2>
									<ul class="contact">
										<li><a class="icon fa-facebook" href="www.facebook.com"><span class="label">Facebook</span></a></li>
										<li><a class="icon fa-twitter" href="www.twitter.com"><span class="label">Twitter</span></a></li>
										<li><a class="icon fa-instagram" href="www.instagram.com"><span class="label">Instagram</span></a></li>
										<li><a class="icon fa-dribbble" href="www.nba.com"><span class="label">Dribbble</span></a></li>
									</ul>
								</section>-->

						</div>
					</div>

					<!-- Copyright -->
						<div id="copyright">
							<ul class="menu">
								<li>&copy; Untitled. All rights reserved</li><li>Design: HTML5 UP</a></li>
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














