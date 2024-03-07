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
	<title> Rewind Rentals </title>
    <h1><b>Welcome to Rewind Rentals</b></h1>
</head>
<body id="<?php get_page_slug(); ?>" >

	<div id="wrapper">
		<div id="header">
			<div class="btnblock">
				<button class="btnstyle1" onclick ="document.location='index'">Home</a></li>
				<button class="btnstyle1" onclick ="document.location='category'">Categories</a></li>
				<button class="btnstyle1" onclick ="document.location='movies'">Movies</button>
				<button class="btnstyle1" onclick ="document.location='games'">Games</button>
				<button class="btnstyle1" onclick ="document.location='aboutus'">About Us</button>
			</div>
			<p><em>You can get your favorite Movies or Games from us. <strong>There are no <del>hidden fee charge.</del>
			</strong> </em></p>
		</div><!-- end header -->
		<hr />
		<div id="content">		
			<div id="page-content">
				<div class="page-text">
					<?php get_page_content(); ?>
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
