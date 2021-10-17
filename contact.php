
<!DOCTYPE html>
<html>
<head>
  <title>TailorBD</title>



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


<script type="text/javascript">
$(window).load(function() {
  $('#slider').nivoSlider({
    effect:'random',
    slices:10,
    animSpeed:500,
    pauseTime:2200,
    startSlide:0, //Set starting Slide (0 index)
    directionNav:false,
    directionNavHide:false, //Only show on hover
    controlNav:false, //1,2,3...
    controlNavThumbs:false, //Use thumbnails for Control Nav
    pauseOnHover:true, //Stop animation while hovering
    manualAdvance:false, //Force manual transitions
    captionOpacity:0.8, //Universal caption opacity
    beforeChange: function(){},
    afterChange: function(){},
    slideshowEnd: function(){} //Triggers after all slides have been shown
  });
});
</script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}



</style>

  <link rel="stylesheet" href="style.css"> 

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
      <a  href="index.php"> Home</a></li>
    <li>
      <a href="about.php"> About</a></li>
    <li>
      <a id="active" href="contact.php"> Contact</a>
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

	<div class="consection clear">
		<h2>Contact Us</h2>
		<div class="maincontact clear">

		<div class="contacthead">

			<form method="post" action="">
			
				<label id="ppp">First Name:</label><br>
				<input type="text" name="name" id="con" placeholder="Enter First Name"><br><br>
				<label id="ppp">Last Name:</label><br>
				<input type="text" name="name" id="con" placeholder="Enter Last Name"><br><br>
				<label id="ppp">Email:</label><br>
				<input type="email" name="name" id="con" placeholder="Enter Email"><br><br>
				<label id="ppp">Address:</label><br>
				<textarea id="textcon" rows="5" cols="50" placeholder="Enter Address Here"></textarea><br><br>
				<input type="submit" id="subcon" value="Submit" name="">
			</form>
		</div>

		
		
	</div>

	<div class="contentleft clear">
		

			   <div class="conleft">
	 	 <div class="w3-container w3-content w3-padding-64" style="max-width:960px; margin-bottom: 50px;" id="contact">
	 	 	

		    <div class="w3-row w3-padding-32">
		    	<div class="uapimg">
			<a href="#"><img src="image/tailor.jpg"></a>
		</div>

			      <div class="w3-col m6 w3-large w3-margin-bottom" style="margin-top:60px;color: #585858;">

			        <i class="fa fa-map-marker" style="width:30px;margin-left: 70px;"></i> TailorBD<br>
			        <i class="fa fa-phone" style="width:30px;margin-left: 70px;"></i> Phone: 01989931659<br>
			        <i class="fa fa-envelope" style="width:30px;margin-left: 70px;"> </i> Email: tailorbd@gmail.com<br>
			      </div>
			    </div>
		  	</div>
			 </div>
			
			
			
	</div>



	  			<div class="mapsection">
			<div class="googlemap">
			<div id="map"></div>
		</div>
		</div>



	</div>


  	<script src="http://maps.google.com/maps/api/js"></script>
	  <script src="js/gmaps.js"></script>

	<script type="text/javascript">
    var map;
    $(document).ready(function(){
      var map = new GMaps({
        el: '#map',
        lat: -12.043333,
        lng: -77.028333
        // scrollwheel:false
      });

      GMaps.geolocate({
        success: function(position){
          map.setCenter(position.coords.latitude, position.coords.longitude);
        },
        error: function(error){
          alert('Geolocation failed: '+error.message);
        },
        not_supported: function(){
          alert("Your browser does not support geolocation");
        },
        always: function(){
          alert("Done!");
        }
      });
    });
  </script>

  	<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow23.js"></script>










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
  <p>All Rights Reserved by Web MEchanix</p>

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
