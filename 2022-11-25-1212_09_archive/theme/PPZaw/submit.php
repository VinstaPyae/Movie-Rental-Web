<!DOCTYPE html>
<html>
<head>
	<!-- Site Title -->
	<title></title>	
	<meta name="robots" content="index, follow" />
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="theme/PPZaw/style.css" media="all" />
    
    <title> Rewind Rentals </title>	
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
                    <h4> Rent Form </h4>                    
                    <table class="brA">              

                    <form action="datacollect" onsubmit="return validateForm(this)" method="post">
                    <tr>
                        <th> First Name:  </th>
                        <th> <input type="text" name="fname" required> </th>
                    </tr>
                    <tr>
                        <th> Last Name: </th>
                        <th> <input type="text" name="lname" required> </th>
                    </tr>
                    <tr>
                        <th> Email : </th>
                        <th> <input type="email" name="email" required> </th>
                    </tr>
                    <tr>
                        <th> Previously submitted: </th>
                        <th> <input type="text" name="pre_submit" required> </th>
                    </tr>
                    <tr>
                        <th> Are you satified: </th>
                        <th> <input type="radio" name="satisfied" value="yes" required/> Yes
                            <input type="radio" name="satisfied" value="no" required/> No </th>
                    </tr>
                    <tr>
                        <th> <label for=""> Select Category:</label></th>
                        <th> 
                            <select name="selectcategory">
                            <?php 
                            $mydir = 'data/pages/products'; 
                            
                            $myfiles = array_diff(scandir($mydir), array('.', '..')); 
                            //var_dump($myfiles);
                            foreach($myfiles as $file)
                            { $nf=substr($file,0,-4);
                            if ($nf!='xmltemplate'&& $nf!='Main'){
                                echo "<option value=$file>$nf</option>";
                            }
                            } 
                            ?> 
                            </select>                        
                        </th>
                    </tr>
                    <tr>
                        <th> </th>
                        <th>
                            <div class="container1">
                                <button class="add_form_field">Add New Field &nbsp; 
                                <span style="font-size:16px; font-weight:bold;">+ </span>
                                </button>
                                <div><input type="text" name="mytext[]"></div>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th><textarea cols="20" name="review" placeholder="Describe your experience..."></textarea></th>
                        <th>
                            <div class="rating-group">        
                                <input disabled checked class="rating__input rating__input--none" name="rating3" id="rating3-none" value="0" type="radio" required>
                                <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
                                <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                                <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
                                <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
                                <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th> Item Name</th>
                        <th> <input type="text" name="item_name" required></th>
                    </tr>
                    <tr>
                        <th> Year </th>
                        <th> <input type="text" name="year" required></th>
                    </tr>
                    <tr>
                        <th> Info </th>
                        <th> <input type="text" name="info" required></th>
                    </tr>
                    <tr>
                        <th> Studio </th>
                        <th> <input type="text" name="studio" required></th>
                    </tr>
                    <tr>
                        <th> Cost </th>
                        <th> <input type="text" name="cost" required></th>
                    </tr>
                    <tr>
                        <th> Rate </th>
                        <th> <input type="text" name="rate" required></th>
                    </tr>
                    <tr>
                        <th> Review </th>
                        <th> <input type="text" name="review" required></th>
                    </tr>
                    <tr>
                        <th> Link </th>
                        <th> <input type="text" name="xlink" required></th>
                    </tr>
                    <tr>
                        <th><input type="checkbox" name="agree" id="agree" value="yes" /></th>
                        <th>
                            <label for="agree">I agree to the terms and conditions</label>
                            <div style="visibility:hidden; color:red" id="agree_chk_error">
                            Can't proceed as you didn't agree to the terms!
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2" class="fmcancel"> 
                        <input type="submit" name='submit' value="submit" /> 
                        <input type ="reset" value ="Reset" /></th>
                    </tr>
                    </form>
                    </table>
                </div>
            </div>
        </div>
	</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
    var max_fields = 10;
    var wrapper = $(".container1");
    var add_button = $(".add_form_field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="delete">Delete</a></div>'); //add input box
        } else {
            alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});
</script>
<script>
    function validateForm(form)
        {
            console.log("checkbox checked is ", form.agree.checked);
            if(!form.agree.checked)
            {
                document.getElementById('agree_chk_error').style.visibility='visible';
                return false;
            }
            else
            {
                document.getElementById('agree_chk_error').style.visibility='disabled';
                return true;
            }
        }
</script>
	
	<div class="clear"></div>
	
	<?php get_footer(); ?>
        <div id="copy">
			<h5 id="copytext"> Remarks!!! This website is use for assignment only!!!<br/> Copyright ,Year 2022 Oct, Pyae Phyo Zaw<br>c3412786@uon.edu.au</h5>
		</div>
	
</div><!-- end wrapper -->
</body>
</html>
