<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <!-- Student Testimonial Owl Slider CSS -->
    <link rel="stylesheet" type="text/css" href="css/owl.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/testyslider.css"> -->

    <!-- Custom Style CSS -->
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <title>Course-Sphere</title>
  </head>
  <body style="background-color: #9fc8fc;">
     <!-- Start Nagigation -->
    <nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top" >
      <a href="index.php" class="navbar-brand">Course-Sphere</a>
      <span class="navbar-text">Learn and Implement</span>
      
      </button>
      <div class="collapse navbar-collapse" id="myMenu">
        <ul class="navbar-nav pl-5 custom-nav">
          <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link"><strong>Home</strong></a></li>
          <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link"><strong>Courses</strong></a></li>
          <li class="nav-item custom-nav-item"><a href="paymentstatus.php" class="nav-link"><strong>Payment Status</strong></a></li>
          <?php 
              session_start();   
              if (isset($_SESSION['is_login'])){
                echo '<li class="nav-item custom-nav-item"><a href="student/studentProfile.php" class="nav-link"><strong>My Profile</strong></a></li> <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link"><strong>Logout</strong></a></li>';
              } else {
                echo '<li class="nav-item custom-nav-item"><a href="#login" class="nav-link" data-toggle="modal" data-target="#stuLoginModalCenter"><strong>Login</strong></a></li> <li class="nav-item custom-nav-item"><a href="#signup" class="nav-link" data-toggle="modal" data-target="#stuRegModalCenter"><strong>Signup</strong></a></li>';
              }
          ?> 
          <li class="nav-item custom-nav-item"><a href="#Feedback" class="nav-link"><strong>Feedback</strong></a></li>
          <li class="nav-item custom-nav-item"><a href="#Contact" class="nav-link"><strong>Contact</strong></a></li>
          <?php   
          if (isset($_SESSION['is_admin_login'])){
            echo '<a href="admin/adminDashboard.php"> Admin Dashboard</a> <a href="logout.php">Logout</a>';
          }else {
            echo '<a href="#login" data-toggle="modal" data-target="#adminLoginModalCenter"> <strong>Admin Login</strong></a>';
          }
    ?>
        </ul>
      </div>
    </nav> <!-- End Navigation -->