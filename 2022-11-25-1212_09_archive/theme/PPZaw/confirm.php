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
	<title> Rewind Rentals </title>
	<meta name="robots" content="index, follow" />
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="theme/PPZaw/style.css" media="all" />	
    <h1><b>Welcome to Rewind Rentals</b></h1>
</head>
<body>

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
            <div class="subform">
                <h4> Confirmation Page !!! </h4>
                <?php                
                session_start();
                if(isset($_POST['fname'])){
                    $_SESSION["formName"]="Confirm Data";
                    $_SESSION["fname"]= $_POST['fname'];
                    $_SESSION["lname"]= $_POST['lname'];
                    $_SESSION["email"]=$_POST['email'];
                    $_SESSION["pre_submit"]=$_POST['pre_submit'];
                    $_SESSION["satisfied"]=$_POST['satisfied'];
                    $_SESSION["selectcategory"]=$_POST['selectcategory'];                    
                    $_SESSION["rating3"]=$_POST['rating3'];
                    $_SESSION["item_name"]=$_POST['item_name'];
                    $_SESSION["year"]=$_POST['year'];
                    $_SESSION["info"]=$_POST['info'];
                    $_SESSION["studio"]=$_POST['studio'];
                    $_SESSION["cost"]=$_POST['cost'];
                    $_SESSION["rate"]=$_POST['rate'];
                    $_SESSION["review"]=$_POST['review'];
                    $_SESSION["xlink"]=$_POST['xlink'];			
                }
                //var_dump($_SESSION["fname"]);die();
                function creatXml(){ 
    
                    $xmldoc = new DomDocument( '1.0' );
                    $xmldoc->preserveWhiteSpace = false;
                    $xmldoc->formatOutput = true;
                   // var_dump()
                    if( $xml = file_get_contents('data/pages/products/'.$_SESSION["selectcategory"]) ) {
                        $xmldoc->loadXML( $xml, LIBXML_NOBLANKS );                    
                        
                        $root = $xmldoc->getElementsByTagName('headercontent')->item(0);
                        
                        $product = $xmldoc->createElement('form');
                        $numAttribute = $xmldoc->createAttribute("name");
                        $numAttribute->value = $_SESSION["formName"];
                        $product->appendChild($numAttribute);                    
                        
                        $root->insertBefore( $product, $root->firstChild );                    
                        
                        $nameElement = $xmldoc->createElement('fname');
                        $product->appendChild($nameElement);
                        $nameText = $xmldoc->createTextNode($_SESSION["fname"]);
                        $nameElement->appendChild($nameText);

                        $lastnameElement = $xmldoc->createElement('lname');
                        $product->appendChild($lastnameElement);
                        $lastnameText = $xmldoc->createTextNode($_SESSION["lname"]);
                        $lastnameElement->appendChild($lastnameText);
                    
                        $categoryElement = $xmldoc->createElement('email');
                        $product->appendChild($categoryElement);
                        $categoryText = $xmldoc->createTextNode($_SESSION["email"]);
                        $categoryElement->appendChild($categoryText);
                    
                        $availableElement = $xmldoc->createElement('pre_submit');
                        $product->appendChild($availableElement);
                        $availableText = $xmldoc->createTextNode($_SESSION["pre_submit"]);
                        $availableElement->appendChild($availableText);

                        $choiceElement = $xmldoc->createElement('satisfied');
                        $product->appendChild($choiceElement);
                        $choiceText = $xmldoc->createTextNode($_SESSION["satisfied"]);
                        $choiceElement->appendChild($choiceText);
                    
                        $si = $xmldoc->createElement('selectcategory');
                        $product->appendChild($si);
                        $selectitemText = $xmldoc->createTextNode($_SESSION["selectcategory"]);
                        $si->appendChild($selectitemText);
                        
                        $ratingElement = $xmldoc->createElement('rating3');
                        $product->appendChild($ratingElement);
                        $ratingText = $xmldoc->createTextNode($_SESSION["rating3"]);
                        $ratingElement->appendChild($ratingText);

                        $itemnameElement = $xmldoc->createElement('item_name');
                        $product->appendChild($itemnameElement);
                        $itemnameText = $xmldoc->createTextNode($_SESSION["item_name"]);
                        $itemnameElement->appendChild($itemnameText);

                        $yearElement = $xmldoc->createElement('year');
                        $product->appendChild($yearElement);
                        $yearText = $xmldoc->createTextNode($_SESSION["year"]);
                        $yearElement->appendChild($yearText);

                        $infoElement = $xmldoc->createElement('info');
                        $product->appendChild($infoElement);
                        $infoText = $xmldoc->createTextNode($_SESSION["info"]);
                        $infoElement->appendChild($infoText);

                        $studioElement = $xmldoc->createElement('studio');
                        $product->appendChild($studioElement);
                        $studioText = $xmldoc->createTextNode($_SESSION["studio"]);
                        $studioElement->appendChild($studioText);

                        $costElement = $xmldoc->createElement('cost');
                        $product->appendChild($costElement);
                        $costText = $xmldoc->createTextNode($_SESSION["cost"]);
                        $costElement->appendChild($costText);

                        $rateElement = $xmldoc->createElement('rate');
                        $product->appendChild($rateElement);
                        $rateText = $xmldoc->createTextNode($_SESSION["rate"]);
                        $rateElement->appendChild($rateText);

                        $reviewElement = $xmldoc->createElement('review');
                        $product->appendChild($reviewElement);
                        $reviewText = $xmldoc->createTextNode($_SESSION["review"]);
                        $reviewElement->appendChild($reviewText);

                        $linkElement = $xmldoc->createElement('xlink');
                        $product->appendChild($linkElement);
                        $linkText = $xmldoc->createTextNode($_SESSION["xlink"]);
                        $linkElement->appendChild($linkText);                        
                    
                        $xmldoc->save('data/pages/products/'.$_SESSION["selectcategory"]);
                        
                    }
                }
                if(isset($_POST['button1'])) {
                    creatXml();
                    session_unset();
                    session_destroy();
                    header("location:category");
                    
                }
                if(isset($_POST['button2'])) {
                    echo "This is Button2 that is selected";
                    header("location:submit");    
                }
                
                echo "First Name: " . $_SESSION["fname"] . "" . "<br>";                
                echo "Last Name: " . $_SESSION["lname"] . "" . "<br>";
                echo "Email: " . $_SESSION["email"] . "" ."<br>";
                echo "Previously Submitted : " . $_SESSION["pre_submit"] . "" . "<br>";
                echo "Are you Satisfied: " . $_SESSION["satisfied"] . "" ."<br>";
                echo "Select Category : " . $_SESSION["selectcategory"] . "" . "<br>";
                echo "Rating : " . $_SESSION["rating3"] . "" . "<br>";
                echo "Item Name : " . $_SESSION["item_name"] . "" . "<br>";
                echo "Year: " . $_SESSION["year"] . "" . "<br>";
                echo "Info: " . $_SESSION["info"] . "" . "<br>";
                echo "Studio: " . $_SESSION["studio"] . "" . "<br>";
                echo "Cost  : " . $_SESSION["cost"] . "" . "<br>";
                echo "Rate : " . $_SESSION["rate"] . "" . "<br>";
                echo "Review: " . $_SESSION["review"] . "" . "<br>";
                echo "Link: " . $_SESSION["xlink"] . "" . "<br>";
                   
                ?>                
                <form method="post">
                    <input type="submit" onclick="messageBox()" name="button1" class="button" value="Save" />						
						<script>
						function messageBox() {alert("Form Submitted is Successfully");}
						</script>
                    <input type="submit" name="button2"class="button" value="Cancel" />
                </form>
            </div><!---------------------- End of Sub Form ------------------->
            <br /> <br />
            </div>
        </div>
	</div>
	
	<div class="clear"></div>
	
	<?php get_footer(); ?>
        <div id="copy">
			<h5 id="copytext"> Remarks!!! This website is use for assignment only!!!<br/> Copyright ,Year 2022 Oct, Pyae Phyo Zaw<br>c3412786@uon.edu.au</h5>
		</div>
	
</div><!-- end wrapper -->
</body>
</html>
