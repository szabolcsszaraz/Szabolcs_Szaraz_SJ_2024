<?php
  require('../_inc/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php 'Moj web | '. (basename($_SERVER["SCRIPT_NAME"], '.php'));?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php
  $page_name = basename($_SERVER["SCRIPT_NAME"], '.php');
  $page_object = new Page();
  $page_object->set_page_name($page_name);
  echo($page_object->add_styles());
  ?>

  <!-- =======================================================
  * Template Name: Delicious
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Updated: May 16 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top bg-b">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 11:00 AM - 23:00 PM</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center bg-b">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="home.php">Delicious</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <?php
          $pages = array('Home'=>'home.php', 
          'Menu'=>'menu.php',
          'Chefs'=>'chefs.php',
          'Gallery'=>'gallery.php',
          'Contact'=>'contact.php',
          'Login'=>'login.php'
          );

          if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
            $pages['Logout'] = 'logout.php';
          }
          
          $menu_object  = new Menu($pages);
          echo($menu_object->generate_menu());
          ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header --> 


