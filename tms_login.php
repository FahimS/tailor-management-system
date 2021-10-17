<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include("dbcon.php");
?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="image/favicon.ico"/>
    <title>TMS</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style2.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="logo">
                <a class="navbar-brand" href="tms_index.php"><img src="image/logo-1-1.png" alt="logo"></a>
                  <div class="head clear">
                        
                        <h1>TailorBD</h1>
                      </div>
              </div>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12" style="margin-top:20px;text-align:center;">
              <img src="image/cut.png" alt="" height="40" width="50">
                    <img src="image/sewing-tailor-pngrepo-com.png" alt="" height="40" width="50">
                    
                    <img src="image/ccc.png" alt="" height="40" width="50">
                    <img src="image/27-512.png" alt="" height="40" width="50">
                    <img src="image/a.png" alt="" height="40" width="50">
          </div>
        </div>
      </div>
    </header>

    <section id="login">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form id="login" class="well" method="post">
                  <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter Email" required>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="pass" placeholder="Password" required>
                  </div>
                  <button type="submit" class="btn btn-default btn-block" name="login">Login</button>
              </form>
          </div>
        </div>
      </div>
    </section>

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
    
    
    <?php
    if(isset($_POST['login'])){
        $c_email = $_POST['email'];
        $c_pass = $_POST['pass'];
        $sel_c = "select * from user where user_pass ='$c_pass' AND user_email='$c_email'";
        $run_c = mysqli_query($conn,$sel_c);
        $check_user = mysqli_num_rows($run_c);
        if($check_user==0){
            echo "<script>alert('Email or Password is incorrect')</script>";
            exit();
        }
        else{
            $_SESSION['user_email']=$c_email;
            echo "<script>alert('you logged in successfully, Thanks')</script>";
            echo "<script>window.open('tms_index.php','_self')</script>";
        }
        
        
    }
?>
  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>



     <!-- ........................scroll button...................................... -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<img src="https://i1155.photobucket.com/albums/p559/scrolltotop/arrow36.png" />',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();</script>


  </body>
</html>
