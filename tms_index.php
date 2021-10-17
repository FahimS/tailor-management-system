<!DOCTYPE html>
<html lang="en">
<!--  connect database -->
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
    <!--  CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
  </head>

  <body>
    <!-- >>>>>>>>>>>>>>>>>>> * header navbar * <<<<<<<<<<<<<<<<<<<< -->
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
              <ul class="nav navbar-nav">
                <li class="active"><a href="tms_index.php"><b>Dashboard</b></a></li>
                <li><a href="customer.php"><b>Customer</b></a></li>
                <li><a href="voucher.php"><b>Voucher</b></a></li>
                <li><a href="user.php"><b>User</b></a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                
                <li><!--  php code for showing user name -->
                    <?php
                        if(isset($_SESSION['email'])){
                            $user = $_SESSION['email'];
                            $get_name = "select * from treg where email = '$user'";
                            $run_name = mysqli_query($conn,$get_name);
                            $row_name = mysqli_fetch_array($run_name);
                            $name = $row_name['name'];
                            if(isset($user)){
                                echo "<a href='#' style='color:#fff;'><b>Hello, $name</b></a>";
                            }
                        }
                        else{
                            echo "<a href='#' style='color:#fff;'><b>Welcome</b></a>";
                        }
                    ?>
                </li>
                
                <li><!--  php code for login and logout -->
                    <?php 
                        if(!isset($_SESSION['email'])){
                            echo "<a href='tms_login.php' style='color:#fff;' class=''><b>Login</b></a>";
                        }
                        else{
                            echo "<a href='logout.php' style='color:#fff;' class=''><b>Logout</b></a>";
                        }
                    ?>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
      
    <!-- >>>>>>>>>>>>>>>>>>> * 2nd header * <<<<<<<<<<<<<<<<<<<< -->
      
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage your site</small></h1>
                </div>
                <div class="col-md-4" style="margin-top:15px;">
                    
                    <img src="image/cut.png" alt="" height="40" width="50">
                    <img src="image/sewing-tailor-pngrepo-com.png" alt="" height="40" width="50">
                    
                    <img src="image/ccc.png" alt="" height="40" width="50">
                    <img src="image/27-512.png" alt="" height="40" width="50">
                    <img src="image/a.png" alt="" height="40" width="50">
                </div>
                <div class="col-md-2">
                    <div class="dropdown create">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Create content
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a type="button" data-toggle="modal" data-target="#addpage" href="#">Create  Voucher</a></li>
                        <li><a type="button" data-toggle="modal" data-target="#add_user" href="#">Add user</a></li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- >>>>>>>>>>>>>>>>>>> * breadcrumb * <<<<<<<<<<<<<<<<<<<< -->
    
    <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="active">Dashboard</li>
            </ol>
        </div>
    </section>
    
    <!-- >>>>>>>>>>>>>>>>>>> * full content part * <<<<<<<<<<<<<<<<<<<< -->
    
    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!------- menu list -------->
                    <div class="list-group">
                      <a href="tms_index.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        Dashboard
                      </a>
                      
                      <a href="#" id="accordion" role="tablist" aria-multiselectable="true">
                          <a class="list-group-item" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Order
                          <span class="glyphicon glyphicon-menu-down icon-one" aria-hidden="true"></span>
                          </a>
                          <!------- sub order list -------->
                          <div id="collapseOne" class=" collapse" role="tabpanel" aria-labelledby="headingOne">
                              <div class="panel-body" style="background:#FFD700;">
                                  <a href="new_order.php" class="order"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New order</a>
                              </div>
                              <div class="panel-body" style="background:#FFD700;">
                                  <a href="order_list.php" ><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> List of Order</a>
                              </div>
                              <div class="panel-body" style="background:#FFD700;">
                                  <a href="pending_list.php" ><span class="glyphicon glyphicon-hourglass" aria-hidden="true"></span> Pending List</a>
                              </div>
                              <div class="panel-body" style="background:#FFD700;">
                                  <a href="complete_list.php" ><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Complete List</a>
                              </div>
                          </div>
                      </a>
        
                      <a href="customer.php" class="list-group-item"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span> Customer </a>
                      <a href="voucher.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Voucher </a>
                      <a href="user.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> User 
                          <span class="badge">
                          <!--  php code for couting total users -->
                              <?php 
                                $get_name = "select * from user";
                                $run_name = mysqli_query($conn,$get_name);
                                $no_row = mysqli_num_rows($run_name);
                                echo "$no_row";   
                              ?>
                          </span>
                      </a>
                    </div>
                    <!------- showing total percentage of earning -------->
                    <div class="well">
                        <h4>Total revenue this month</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                60%
                            </div>
                        </div>
                        <h4>Total revenue last month</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                40%
                            </div>
                         </div>
                    </div>
                </div>
                <!------- dashboard of income summary including cost summary -------->
                <div class="col-md-9">
                    <div class="panel panel-default ">
                      <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Income Summary</h3>
                        
                      </div>
                      <canvas id="mychart"></canvas>
                      <!--/*<div class="panel-body">
                          <div class="col-md-3">
                              <div class="well dash-box">
                                  <h2><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span><br>2000</h2>
                                  <h4>Today Income</h4>
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="well dash-box">
                                  <h2><span class="glyphicon glyphicon-usd" aria-hidden="true"></span><br>203 </h2>
                                  <h4>Today Cost</h4>
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="well dash-box">
                                  <h2><span class="glyphicon glyphicon-file" aria-hidden="true"></span><br>1000 </h2>
                                  <h4>Total Cost</h4>
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="well dash-box">
                              
                                 
                                  <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span><br></h2>
                                  <h4>Total Income</h4>
                              </div>
                          </div>
                      </div>*/-->
                    </div>
                    
                    <!----------- showing latest customer --------->
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">Latest Customer</h3>
                      </div>
                      <div class="panel-body">
                        <table class="table table-striped table-hover">
                          <thead>
                              <tr>
                                  <th>Name</th>
                                  <th>Phone</th>
                                  <th>Category</th>
                                  <th>Transaction ID</th>
                              </tr>
                              <!--  php code for showing customer by descending order -->
                              <?php
                                    global $conn;
                                    $select= "SELECT * FROM customer order by id desc";
                                    $run = mysqli_query($conn,$select);
                                    while($check=mysqli_fetch_array($run)){
                                        $name = $check['name'];
                                        $phone = $check['phone'];
                                        $cat = $check['category'];
                                        $tran_id = $check['tran_id'];                                        
                              ?>
                          </thead>
                          <tr>
                            <td><?php echo $name;?></td>
                            <td><?php echo $phone;?></td>
                            <td><?php echo $cat;?></td>
                            <td><?php echo $tran_id;?></td>
                          </tr>
                          <?php }?><!--  while loop end here -->
                        </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- >>>>>>>>>>>>>>>>>>> * footer part * <<<<<<<<<<<<<<<<<<<< -->
    
    <!-- <footer id="footer">
        <p>&copy; 2018 Online Tailors Management Sytem.</p>
        <p>All Rights Reserved by Web Mechanix</p>
        <div class="social3">
                <a target="_blank" href="https://www.facebook.com"><img src="images/f.png" alt="Facebook "/></a>
                <a target="_blank" href="http://www.twitter.com"><img src="images/t.png" alt="Twitter "/></a>
                <a target="_blank" href="http://www.linkedin.com"><img src="images/l.png" alt="Linkedin "/></a>
                <a target="_blank" href="http://www.google.com"><img src="images/g.png" alt="Googleplus "/></a>
            </div>
    </footer> -->


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

    
    <!-- modal part-->
    
    <!-- >>>>>>>>>>>>>>>>>>> * modal part of create voucher for customer * <<<<<<<<<<<<<<<<<<<< -->
    <div class="modal fade" id="addpage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
               
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Page</h4>
                </div>
                
                <div class="modal-body">
                    <div class="form-group">
                        <form action="voucher.php" method="post" enctype="multipart/form-data" >
                           <label>Transaction Id</label>
                            <input type="text" class="form-control" name="search" placeholder="">
                            <button type="submit" name="click" class="btn btn-info">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- >>>>>>>>>>>>>>>>>>> * modal part of create user account * <<<<<<<<<<<<<<<<<<<< -->
    <div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="form-group">
                        <form id="login" action="tms_index.php" method="post" class="well" enctype="multipart/form-data">
                           
                            <div class="form-group">
                                <label>First name</label>
                                <input type="text" class="form-control" name="f_name" placeholder="First Name" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control" name="l_name" placeholder="Last Name" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="pass" placeholder="Password" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="" name="image" required>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-block" name="register">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- >>>>>>>>>>>>>>>>>>> * php code of create user account * <<<<<<<<<<<<<<<<<<<< -->
    <?php
      if(isset($_SESSION['user_email']))
      {
        if(isset($_POST['register'])){
            $u_name_f = $_POST['f_name'];
            $u_name_l = $_POST['l_name'];
            $u_email = $_POST['email'];
            $u_pass = $_POST['pass'];
            $u_contact = $_POST['phone'];
            $u_image = $_FILES['image']['name'];
        $u_image_tmp = $_FILES['image']['tmp_name'];
            
            move_uploaded_file($u_image_tmp,"user_image/$u_image");
            
            $sql_e = "SELECT user_email FROM user WHERE user_email='$u_email'";
            $check_mail = mysqli_query($conn,$sql_e);
            $no_row = mysqli_num_rows($check_mail);
            if($no_row>0){
                echo "<script>alert('This email already exist')</script>";
                echo "<script>window.open('tms_index.php','_self')</script>";
            }
            else{
                $insert_info = "insert into user(user_f_name,user_l_name,user_email,user_pass,user_contact,user_images)values('$u_name_f','$u_name_l','$u_email','$u_pass','$u_contact','$u_image')";
                
                $run_query = mysqli_query($conn,$insert_info);
                $_SESSION['user_email']= $u_email;
                echo "<script>alert('Account has been created successfully')</script>";
                echo "<script>window.open('tms_index.php','_self')</script>";
            }


        }
      }
    ?>
    
    <!-- >>>>>>>>>>>>>>>>>>> * php code of create voucher * <<<<<<<<<<<<<<<<<<<< -->
    <?php
        if(isset($_POST['click'])){
            $search_query = $_POST['search'];
            $sql_e = "SELECT tran_id FROM voucher WHERE tran_id='$search_query'";
            $check_mail = mysqli_query($conn,$sql_e);
            $no_row = mysqli_num_rows($check_mail);
            /*check this trans id used already or not!*/
            if($no_row>0){
                echo "<script>alert('Voucher of this transaction id already created')</script>";
                echo "<script>window.open('tms_index.php','_self')</script>";
            }
            else{
                /*this query insert voucher information in voucher table*/
                $insert_product = "insert into voucher(tran_id,category,name,phone,order_date,delivery_date,total,paid,due,address,voucher_no) select tran_id,category,customer_name,customer_phone,order_date,delivery_date,total_price,paid,due,customer_address,voucher from order_info where tran_id='$search_query';";
                /*this query insert customer information in customer table*/
                $insert_product .= "insert into customer(tran_id,name,phone,category,address,voucher) select tran_id,customer_name,customer_phone,category,customer_address,voucher from order_info where tran_id='$search_query'";
                
                if($conn->multi_query($insert_product) === true){
                    echo "<script>alert('Voucher has been created successfully!')</script>";
                    echo "<script>window.open('voucher.php','_self')</script>";
                }
            }
        }
    ?>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <!-- javascript of order menu icon -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('.collapse').on('shown.bs.collapse', function () {
                $(this).parent().find('.glyphicon-menu-down')
                                .removeClass('glyphicon-menu-down')
                                .addClass('glyphicon-menu-up');
            }).on('hidden.bs.collapse', function () {
                $(this).parent().find(".glyphicon-menu-up")
                                .removeClass("glyphicon-menu-up")
                                .addClass("glyphicon-menu-down");
            });
        });
    </script>
    <script>
        <?php
            global $conn;
            $total=0;
            $sel_price = "SELECT total FROM complete_list where delivery_date like '%2018%'";
            $run_price = mysqli_query($conn,$sel_price);
            while($p_price=mysqli_fetch_array($run_price)){
                    $total_income = array($p_price['total']);
                    $values=array_sum($total_income);
                    $total +=$values;
            }
        ?>
        <?php
            global $conn;
            $total2=0;
            $sel_price = "SELECT total FROM complete_list where delivery_date like '%2017%'";
            $run_price = mysqli_query($conn,$sel_price);
            while($p_price=mysqli_fetch_array($run_price)){
                    $total_income = array($p_price['total']);
                    $values=array_sum($total_income);
                    $total2 +=$values;
            }
        ?>
        <?php
            global $conn;
            $total3=0;
            $sel_price = "SELECT total FROM complete_list where delivery_date like '%2016%'";
            $run_price = mysqli_query($conn,$sel_price);
            while($p_price=mysqli_fetch_array($run_price)){
                    $total_income = array($p_price['total']);
                    $values=array_sum($total_income);
                    $total3 +=$values;
            }
        ?>
    let mychart = document.getElementById('mychart').getContext('2d');
       
    let barchart = new Chart(mychart,{
        type:'bar',//bar,horizontal,pie, doughnut, radar,polarArea
        data:{
            labels:['2018','2017','2016'],
            datasets:[{
                label:'Total',
                data:[
                    <?php echo $total;?>,
                    <?php echo $total2;?>,
                    <?php echo $total3;?>
                    
                ],
                backgroundColor:[
                    'rgba(255,99,132,.6)',
                    'rgba(54,162,235,.6)',
                    'rgba(255,206,132,.6)'
                    
                ],
                borderWidth:1,
                borderColor:'#777',
                hoverBorderWidth:3,
                hoverBorderColor:'#000'
            }]
        }
        
    })
    </script> 
    
  </body>
</html>