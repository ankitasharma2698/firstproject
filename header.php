<?php
ob_start();

function e_hand($eno, $emsg) {    
}
set_error_handler("e_hand");

session_start();
date_default_timezone_set("asia/kolkata");
$today = date("Y-m-d");
?>

<link href="vender/bs/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="vender/fa/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="vender/jquery-3.3.1.min.js"></script>
<script src="vender/popper.min.js"></script>
<script src="vender/bs/js/bootstrap.min.js"></script>
<?php require_once 'include/const.php'; ?>
<?php require_once 'include/db.php'; ?>
<?php require_once 'include/my_mail.php'; ?>
<?php require_once 'include/myfun.php'; ?>


<div class="mybox1">
    <div>    
       <h1 class="display-1 head1">Heart Care</h1>
        <p class="head2">Because Life is Priceless!!!! </p>
     </div>   
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <a class="navbar-brand text-danger">HEART CARE</a>                  
                    <!-- <a class="navbar-brand text-white"><img src="images/c1.jpg" style="width: 60px"/></a>                   -->
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#n1"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="n1">
                      <ul class="navbar-nav ml-auto">
                       <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="expert.php">Our Experts</a></li>
                           
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="guide.php" data-toggle="dropdown">User Guide</a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="heartattack.php">Heart Attack</a>
                        <a class="dropdown-item" href="heartfailure.php">Heart failure</a>
                        <a class="dropdown-item" href="crtd.php">CRTD</a>
                        <a class="dropdown-item" href="bypass.php">Bypass Surgery</a>
                   
                        <li class="nav-item"><a class="nav-link" href="hospital.php">Best Hospitals</a></li>
                        
                        <?php if(is_login()) {
                    echo "<li class='nav-item'><a class='nav-link' href='logout.php'>Logout</a></li>";                    
                }
                else {
                    echo "<li class='nav-item'><a class='nav-link' href='login.php'>Login</a></li>";
                }
                ?>

                            </ul>                  
                    </div>
    </nav>

