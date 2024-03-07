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
	<title> <title> Rewind Rentals </title> </title>
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
                    <!------------ Start of Movies ----------------->        
                    <div class="movies">                       
                        <h3>Movies Category</h3><br>
                        <div id="main_cat">                            
                        <?php
                        $xml = simplexml_load_file("data/pages/products/Movies.xml") ;        

                           for ($i = 0; $i < count($xml->headercontent->form); $i++) {
                                echo '<div>';
                                
                                if (!empty($xml->headercontent->form[$i]->Picture)){
                                    echo '<img src="'.$xml->headercontent->form[$i]->Picture.'" class="movies">';                               
                            
                                }
                                else{
                                    echo '<img src="data/uploads/noimage.png" class="movies">';                               
                            
                                }
                                    echo 'first Name: ' . $xml->headercontent->form[$i]->fname . '<br>';
                                echo 'Last Name: ' . $xml->headercontent->form[$i]->lname . '<br>';
                                echo 'Email: ' . $xml->headercontent->form[$i]->email . '<br>';
                                echo 'Pre Submitted: ' . $xml->headercontent->form[$i]->pre_submit . '<br>';
                                echo 'Satisfied: ' . $xml->headercontent->form[$i]->satisfied . '<br>';
                                echo 'Select Category: ' . $xml->headercontent->form[$i]->selectcategory . '<br>';
                                echo 'Rating: ' . $xml->headercontent->form[$i]->rating3 . '<br>';
                                echo 'Item Name: ' . $xml->headercontent->form[$i]->item_name . '<br>';
                                echo 'Year: ' . $xml->headercontent->form[$i]->year . '<br>';
                                echo 'Info: ' . $xml->headercontent->form[$i]->info . '<br>';
                                echo 'Studio: ' . $xml->headercontent->form[$i]->studio . '<br>';
                                echo 'Cost: ' . $xml->headercontent->form[$i]->cost . '<br>';
                                echo 'Rate: ' . $xml->headercontent->form[$i]->rate . '<br>';
                                echo 'Review: ' . $xml->headercontent->form[$i]->review . '<br>';
                                echo 'Link: ' . $xml->headercontent->form[$i]->xlink . '<br>';
                                echo '</div>';
                            }
        
                        ?>
                        </div>
                    </div><!------------ End of Movies -------------->
					<hr />
					<div class="movies">                       
                        <h3>Games Category</h3><br>
                        <div id="main_cat">                            
                        <?php
                        $xml = simplexml_load_file("data/pages/products/Games.xml") ;        

                           for ($i = 0; $i < count($xml->headercontent->form); $i++) {
                                echo '<div>';
                                
                                if (!empty($xml->headercontent->form[$i]->Picture)){
                                    echo '<img src="'.$xml->headercontent->form[$i]->Picture.'" class="movies">';                               
                            
                                }
                                else{
                                    echo '<img src="data/uploads/noimage.png" class="movies">';                               
                            
                                }
                                    echo 'first Name: ' . $xml->headercontent->form[$i]->fname . '<br>';
                                echo 'Last Name: ' . $xml->headercontent->form[$i]->lname . '<br>';
                                echo 'Email: ' . $xml->headercontent->form[$i]->email . '<br>';
                                echo 'Pre Submitted: ' . $xml->headercontent->form[$i]->pre_submit . '<br>';
                                echo 'Satisfied: ' . $xml->headercontent->form[$i]->satisfied . '<br>';
                                echo 'Select Category: ' . $xml->headercontent->form[$i]->selectcategory . '<br>';
                                echo 'Rating: ' . $xml->headercontent->form[$i]->rating3 . '<br>';
                                echo 'Item Name: ' . $xml->headercontent->form[$i]->item_name . '<br>';
                                echo 'Year: ' . $xml->headercontent->form[$i]->year . '<br>';
                                echo 'Info: ' . $xml->headercontent->form[$i]->info . '<br>';
                                echo 'Studio: ' . $xml->headercontent->form[$i]->studio . '<br>';
                                echo 'Cost: ' . $xml->headercontent->form[$i]->cost . '<br>';
                                echo 'Rate: ' . $xml->headercontent->form[$i]->rate . '<br>';
                                echo 'Review: ' . $xml->headercontent->form[$i]->review . '<br>';
                                echo 'Link: ' . $xml->headercontent->form[$i]->xlink . '<br>';
                                echo '</div>';
                            }
        
                        ?>
                        </div>
                    </div><!------------ End of Games -------------->
                    
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
