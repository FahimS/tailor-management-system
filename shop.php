


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
      <a href="index.php"> Home</a></li>
    <li>
      <a href="about.php"> About</a></li>
    <li>
      <a href="contact.php"> Contact</a>
    </li>
    <li>
      <a id="active" href="shop.php"> Tailor Shop</a>
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


<div class="searchsection templete clear">
  <div class="searchhead emplete clear">
    <!-- <h2>Search Tailor Shop</h2> -->

  </div>

  <div class="searchbox templete clear" name="sb">
    
    <form action="" method="POST">
      <input type="text" placeholder="Enter Location" class="search" name="address">
      <button class="searchbutton" type="submit" name="search">&#128269;</button>
    </form>
  </div>

  <?php
    require_once('connect.php');
    if(isset($_POST['search']))
    {
      $sb=$_POST['address'];
      $q1="select * from treg";
    }else{
      $sb = '';
    }
  ?>

  <div class="searchtable templete clear">
    <table border="1">

    <thead>
      <tr class="attributes templete clear">
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Adress</th>

      </tr>
    </thead>
    <tbody>

      <?php
        global $q1, $sb;
        $run=mysqli_query($conn, "select * from treg where address='$sb'");
        while($row=mysqli_fetch_array($run))
        {
          $bd=$row['address'];
        ?>
          <tr class="data templete clear">
            <td><?=$row['name']?></td>
            <td><?=$row['email']?></td>
            
            <td><?=$row['mobile']?></td>
            <td><?=$row['address']?></td>
            
          </tr>
        <?php
        }

      ?>

    </tbody>
    
    
  </table>
  </div>



</div>






<div class="tailor">
    <h2>Tailor Shop List</h2>
    <img src="image/aa.jpg">
                <table class="listtable">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                
                                                <th>Tailor Name</th>
                                                <th>Email</th>
                                                <th>Contact</th>
                                                <th>Address</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
<?php
$i=0;
$query= "select * from treg";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)){
         $i++;
        
    
    $name=$row['name'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $address=$row['address'];

    
        
        echo "<tr>
        <td>$i</td>
        <td>$name</td>
        <td>$email</td>
        <td>$mobile</td>
        <td>$address</td>
        </tr>";
        
    }
                                            ?>
                                         </tbody>
                                    </table>
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
