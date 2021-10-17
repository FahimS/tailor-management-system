<!-- //database connect -->
<?php
$conn =mysqli_connect("localhost","root","","darjibari") or die (mysql_error());
?>


<!DOCTYPE html>
<html>
<head>
    <title>Add Tailor</title>

     <!-- //cs link, slider link, fontawesome link -->

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
  	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!-- //table style -->
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>


</head>

<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:20%;top: 0;background-color: #989898 !important;color: #fff !important;font-size: 18px;">
	<a style="text-decoration: none;" href="dash.php"><h3 class="bbb" style="height: 8.5%;color: #fff;font-weight: bold;font-size: 24px;border: 2px solid;border-radius: 5px;text-align: center;margin-left: 5px;margin-right: 5px;padding: 5px 0px 0px 0px;background: #B22222;">TailorBD</h3></a>
  
  <a  href="add_admin.php" class="w3-bar-item w3-button">Add Admin</a>
  <a href="view_admin.php" class="w3-bar-item w3-button">View Admin</a><br>

  <a href="view_customer.php" class="w3-bar-item w3-button">View Customer</a><br>

    <a id="active" href="add_tailor.php" class="w3-bar-item w3-button">Add Tailors</a>
  <a href="view_tailor.php" class="w3-bar-item w3-button">View Tailors</a><br><br><br><br><br><br><br><br>

  <a style="text-decoration: none;" href="index.php"><h3 class="bbb" style="height: 8.5%;color: #fff;font-weight: bold;font-size: 24px;border: 2px solid;border-radius: 5px;text-align: center;margin-left: 5px;margin-right: 5px;padding: 5px 0px 0px 0px;background: #B22222;margin-top: 29px">Logout</h3></a>

</div>

<!-- Page Content -->
<div style="margin-left:20%">

<div class="dhead">
  <h1>Admin Panel</h1>
</div>

<!-- .............content here.............. -->
</div>

	<div class="adform templete clear">
		<h1>Tailor Registration Form</h1>


		<?php 
			if (isset($_POST['register'])) {
				$name = $_POST['name'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$mobile = $_POST['mobile'];
				$address = $_POST['address'];
				
				

				$sql = "INSERT into treg(name,email,password,mobile,address) values('$name','$email','$password','$mobile','$address')";
				$res = mysqli_query($conn, $sql);
				if ($res) {
					echo "<script>alert('Registration Successful')</script>";
        echo"<script>window.open('view_tailor.php','_self')</script>";
				}else{
					echo "Registration fail!!!";
				}
			}
		?>

		<form method="post" action="">
			
			<label>Tailor's Name:</label><br>
			<input type="text" name="name" id="num" placeholder="Enter Tailor's Name"><br><br>
			
 

			<label>Email:</label><br>
			<input type="email" name="email" id="num" placeholder="Enter Email"><br><br>

			<label>Paassword:</label><br>
			<input type="Password" name="password" id="num" placeholder="Enter Password" maxlength="10"><br><br>
			
			

			<label>Tailor's Mobiile Nub:</label><br>
			<input type="tel" name="mobile" placeholder="Enter Tailor's Mobile Number" id="num"><br><br>

			<label>Tailor's Address:</label><br>
			<textarea id="text" name="address" rows="5" cols="50" placeholder="Enter Tailor's Address Here"></textarea><br><br>
			<input type="submit" name="register" id="sub" value="Submit">



		</form>
		
	</div>


<!-- //footersection -->

<div class="dash_footersection templete clear">
    
    <p>&copy; 2018 Online Tailors Management Sytem.</p>
    <p>All Rights Reserved by Web Mechanix</p>

    <div class="social3">
                <a target="_blank" href="https://www.facebook.com"><img src="images/f.png" alt="Facebook "/></a>
                <a target="_blank" href="http://www.twitter.com"><img src="images/t.png" alt="Twitter "/></a>
                <a target="_blank" href="http://www.linkedin.com"><img src="images/l.png" alt="Linkedin "/></a>
                <a target="_blank" href="http://www.google.com"><img src="images/g.png" alt="Googleplus "/></a>
            </div>
</div>
	
<!-- ........................scroll button...................................... -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<img src="https://i1155.photobucket.com/albums/p559/scrolltotop/arrow36.png" />',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();</script>
      
</body>
</html>





