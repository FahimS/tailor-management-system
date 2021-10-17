<!-- //database connect -->
<?php
	include 'connect.php';
if(isset($_POST['clogin'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="select * from creg where email='$email' and password='$password';";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
        
    {
    header("location:shop.php");
    }
    
    else{
        
    echo "<script>alert('User not found! Registration First!!!')</script>";
        echo"<script>window.open('clogin.php','_self')</script>";
    }
    
}

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
		      <a href="#">Register</a>
		      <ul>
		        <li><a href="cus_reg.php"><abbr>Customer</abbr></a></li>
		        <li><a href="tailor_reg.php"><abbr>Tailor</abbr></a></li>
		      </ul>
		    </li>
		      
		  </ul>

	</div>
</div>


 <div class="title templete clear">
			<h1>Customer Login Form</h1>
		</div>

		<div class="container templete clear">
			<div class="left templete clear"></div>
			<div class="right templete clear">
				<div class="formbox templete clear">
					<form action="clogin.php" method="post">
						<p>Email</p>
						<input type="email" name="email" placeholder="Email" >
						<p>Password</p>
						<input type="Password" name="password" placeholder="Password" >
						<input type="submit" name="clogin" value="Sign In" >
					</form>
				</div>
			</div>
			
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
