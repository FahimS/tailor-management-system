<?php
$conn =mysqli_connect("localhost","root","","darjibari") or die (mysql_error());
?>



<!DOCTYPE html>
<html>
<head>
  <title>About</title>
  <script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="style.css"> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}



</style>

</head>
<body>


<div class="main">
  <div class="headtop clear">
      <img src="image/logo-1-1.png" alt="logo"/>
        <div class="head clear">
          
          <h1>TailorBD</h1>
        </div>

        <div class="log">
         <!--  <p><input type="submit" name="login" value="Login"/><a href="login.html"></a></p> -->
          <a href="login.php"><p><input type="submit" name="login" value="Login"/></p></a>
        </div>
       
        
    
    </div>


  


    <div class="navsection templete "> 
  <ul>
    <li>
      <a href="index.php"> Home</a></li>
    <li>
      <a href="about.php"> About</a></li>
    <li>
      <a href="contact.php"> Contact</a>
    </li>
    <li>
      <a href="login.php"> Tailor Shop</a>
    </li>
    <li>
      <a id="active" href="#">Register</a>
      <ul>
        <li><a href="cus_reg.php"><abbr>Customer</abbr></a></li>
        <li><a href="tailor_reg.php"><abbr>Tailor</abbr></a></li>
      </ul>
    </li>
      
  </ul>

</div>

  </div>



 <div class="form templete clear">
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
        echo"<script>window.open('login.php','_self')</script>";
				}else{
					echo "Registration fail!!!";
				}
			}
		?>

		<form method="post" action="">
			
			<label>Tailor's Name:</label><br>
			<input type="text" name="name" id="num" placeholder="Enter Tailor's Name" required=""><br><br>
			
			<label>Email:</label><br>
			<input type="email" name="email" id="num" placeholder="Enter Email" required=""><br><br>
			<label>Paassword:</label><br>
			<input type="Password" name="password" id="num" placeholder="Enter Password" maxlength="10" required=""><br><br>

			<label>Mobiile Nub:</label><br>
			<input type="tel" name="mobile" placeholder="Enter Mobile Number" id="num" required=""><br><br>

			<label>Tailor's Address:</label><br>
			<textarea id="text" name="address" rows="5" cols="50" placeholder="Enter Tailor's Address Here" required=""></textarea><br><br>
			<input type="submit" name="register" id="sub" value="Submit">



		</form>
		
	</div>


<div class="footertop clear">
    <div class="samefooter clear">
      <h2>Reach Us</h2>
      <p><Strong>Address:</Strong></p>
      <p>TailorBD</p>
      <p>GreenRoad,</p>
      <p>Farmget,</p>
      <p>Dhaka-1204,</p>
      <p>Bangladesh.</p>
      
      
    </div>
    <div class="samefooter clear">
      
      
    </div>
    <div class="samefooter clear">
      <h2>Contact Us</h2>
      <p><strong>Phone:</strong> +888-3252155</p>
      <p><strong>Mobile:</strong> 01989931659</p>
      <p><strong>Email:</strong> tailorbd@gmail.com</p>
      
    </div>
    <div class="socialtop">
    <a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
    <a target="_blank" href="http://www.twitter.com"><i class="fab fa-twitter"></i></a>
    <a target="_blank" href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
    <a target="_blank" href="http://www.google.com"><i class="fab fa-google-plus-g"></i></a>
    
  </div>
  </div>



<div class="footersection templete clear">
  
  <p>&copy; 2018 Online Taylors Management Sytem.</p>
  <p>All Rights Reserved by Web Mechanix</p>

  <div class="social2">
        <a target="_blank" href="http://www.facebook.com"><img src="images/f.png" alt="Facebook "/></a>
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
