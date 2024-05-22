<?php
session_start();
include('config.php');
if(isset($_SESSION['client']))
{ 
  	$useremail=$_SESSION['client'];

  $ql = "SELECT * FROM user WHERE email = '$useremail'";
  $rest = mysqli_query($con, $ql) or die( mysqli_error($con));
  while($jjw=mysqli_fetch_array($rest))
  {
    $user_id=$jjw['sno'];
	$uname = $jjw['name'];
	$uemail = $jjw['email'];
	$upassword = $jjw['password'];
	$uprofile_image = $jjw['profile_image'];
	$ulocation = $jjw['location'];
	$uweb = $jjw['web'];
	$ufb = $jjw['fb'];
	$uinsta = $jjw['insta'];
	$utwitter = $jjw['twitter'];
	$uyoutube = $jjw['youtube'];
	$uvimeo = $jjw['vimeo'];
	$ugithub = $jjw['github'];
	$status = $jjw['status'];
  }
  date_default_timezone_set("Asia/Calcutta");
  $date= date('d-m-Y-H-i');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>College Projects</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- inject:css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- end inject -->
</head>
<body>

<!-- start cssload-loader -->
<div id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->


<!--======================================
        START HEADER AREA
    ======================================-->
    <header class="header-area bg-white shadow-sm">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="logo-box">
                        <a href="index.php" class="logo"><h3>Logo</h3></a>
                        <div class="user-action">
                            <div class="off-canvas-menu-toggle icon-element icon-element-xs shadow-sm" data-toggle="tooltip" data-placement="top" title="Main menu">
                                <i class="la la-bars"></i>
                            </div>
                        </div>
                    </div>
                </div><!-- end col-lg-2 -->
                <div class="col-lg-10">
                    <div class="menu-wrapper">
                        <nav class="menu-bar ml-auto pr-2">
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                             </ul><!-- end ul -->
                        </nav><!-- end main-menu -->
                        <div class="nav-right-button">
							<?php 
							if(isset($_SESSION['client']))
							{ $email = $_SESSION['client'];
								$cat=mysqli_query($con,"select * from `user` WHERE email='$email'");
								while($row=mysqli_fetch_array($cat))
								{
							?>
                            <a href="setting.php" class="btn theme-btn"><i class="la la-user mr-1"></i> Hii..<?php echo $row['name'];?></a>
							<a href="logout.php" class="btn theme-btn theme-btn-outline mr-2"><i class="la la-sign-in mr-1"></i> Logout</a>
                       		<?php } } else { ?>
							<a href="login.php" class="btn theme-btn theme-btn-outline mr-2"><i class="la la-sign-in mr-1"></i> Login</a>
                            <a href="signup.php" class="btn theme-btn"><i class="la la-user mr-1"></i> Sign up</a>
                       		<?php } ?>
                            </div><!-- end nav-right-button -->
                    </div><!-- end menu-wrapper -->
                </div><!-- end col-lg-10 -->
            </div><!-- end row -->
        </div><!-- end container -->
        
        
        <div class="body-overlay"></div>
    </header><!-- end header-area -->
    <!--======================================
            END HEADER AREA
    ======================================-->