<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		PPZaw theme for GetSimple CMS
*
*****************************************************/
?>
<!DOCTYPE html>
<html>
<head>

	<!-- Site Title -->
	<title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
	<?php get_header(); ?>
	<meta name="robots" content="index, follow" />
	<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="theme/PPZaw/style.css" media="all" />
	<title> <h1><b>Welcome to Rewind Rentals</b></h1> </title>
    <h1><b>Welcome to Rewind Rentals</b></h1>
</head>
<body id="<?php get_page_slug(); ?>" >

	<div id="wrapper">
		<div id="header">
		<div>
			<img src="data/uploads/unique-rewind-button-icon-label-3d-isolated-on-free-vector.jpg" alt="cars" class="headerimg"> 
			<h2>Welcome to <abbr title="Rewind Rentals">R&R</abbr>, We provide <mark><span> Renting services</span></mark>.<br> Find your favorite Movies or Games to rent on our pages.</h2>
		</div>
		<div class="btnblock">			
			<button class="btnstyle1" onclick ="document.location='index'">Home</a></li>
			<button class="btnstyle1" onclick ="document.location='category'">Categories</a></li>
			<button class="btnstyle1" onclick ="document.location='#MV'">Movies</button>
			<button class="btnstyle1" onclick ="document.location='#FC'">Games</button>
			<button class="btnstyle1" onclick ="document.location='#AU'">About Us</button>
		</div>
		<p><em>You can get your favorite Movies or Games from us. <strong>There are no <del>hidden fee charge.</del></strong> </em></p>
		<hr>
		</div><!-- end header -->
		
		<div id="content">		
			<div id="page-content">
				<div class="page-text">
					<?php get_page_content(); ?>
					<h1 id="MV"><i>Movies</i></h1> 
					<h4><i> You can choose.</i></h4>
					<div>
						<abbr title="The Avengers"><img src="data/uploads/745c9b06-af55-4510-836d-9a320a3f26f9.jpg" class="cd" alt="Movies The Avengers"></abbr>
						<abbr title="Avengers Age of Ultron"><img src="data/uploads/Avengers-Age-of-Ultron-Poster.jpg" class="cd" alt="Movies Avengers Age of Ultron"></abbr>
						<abbr title="Infinity War"><img src="data/uploads/B-n_ClcUAAAMdpM.jpg" class="cd" alt="Movies Infinity War"></abbr>
					</div>
					<h3>Movies List. <small style="font-size:15px;"><a href="Movies.xml" target="_blank">click for more details</a></small></h3>
					<ul class="cdlist">
						<li>The Avengers
							<ul class="cddetails">
								<li>$10</li>
								<li>10 Days</li>
								<li><a href="https://www.rottentomatoes.com/m/marvels_the_avengers" target="_blank">Link</a></li>
							</ul>
						</li>
						<li>Avengers Age of Ultron
							<ul class="cddetails">
								<li>$10</li>
								<li>10 Days</li>
								<li><a href="https://www.rottentomatoes.com/m/avengers_age_of_ultron" target="_blank">Link</a></li>
							</ul>
						</li>
						<li>Infinity War
							<ul class="cddetails">
								<li>$10</li>
								<li>10 Days</li>
								<li><a href="https://www.rottentomatoes.com/m/avengers_infinity_war" target="_blank">Link</a></li>
							</ul>
						</li>
					</ul>
					<hr>
					<h1 id="FC"><i>Games</i></h1>
					<h4><i> You can choose.</i></h4>
					<div>
						<abbr title="God Of War"><img src="data/uploads/gow.jpg" class="cd" alt="Games God Of War"></abbr>
						<abbr title="Stray Cat"><img src="data/uploads/starycat.jpg" class="cd" alt="Games Stray Cat"></abbr>
						<abbr title="Elden Ring"><img src="data/uploads/eldenring.jpg" class="cd" alt="Games Elden Ring"></abbr>
					</div>
					<h3>Games list. <small style="font-size:15px;"> <a href="Games.xml" target="_blank">click for more details</a></small></h3>
					<ul class="cdlist">
						<li>God Of War
							<ul class="cddetails">
								<li>$20</li>
								<li>1 month</li>
								<li><a href="https://www.playstation.com/en-sg/games/god-of-war/" target="_blank">Link</a></li>
							</ul>
						</li>
						<li>Stray Cat
							<ul class="cddetails">
								<li>$20</li>
								<li>1 month</li>
								<li><a href="https://store.steampowered.com/app/1332010/Stray/" target="_blank">Link</a></li>
							</ul>
						</li>
						<li>Elden Ring
							<ul class="cddetails">
								<li>$20</li>
								<li>1 month</li>
								<li><a href="https://en.bandainamcoent.eu/elden-ring/elden-ring" target="_blank">Link</a></li>
							</ul>
						</li>
					</ul>
					<hr>
						<h1 id="AU">About Us</h1>
					<!--mailto function allow user send email dicrectly-->
						<p>Person in charge: Pyae Phyo Zaw<br><abbr title="Student Identification number">ID</abbr>: C3412786<br> email: <a href ="mailto:c3412786@uon.edu.au">c3412786@uon.edu.au</a><br> Contact number:+6598061369</p>
					
				</div>
			</div>
		</div>	
		<div class="confirm">
			<a href="submit" class="btnstyle1">Rent Form</a></li>
		</div>
		<div class="clear"></div>
		
		<?php get_footer(); ?>
		<footer>
			<div id="copy">
				<h5 id="copytext"> Copyright ,Year 2022 Oct, Pyae Phyo Zaw<br>c3412786@uon.edu.au</h5>
			</div>
		</footer>
		
		
	</div><!-- end wrapper -->
</body>
</html>
