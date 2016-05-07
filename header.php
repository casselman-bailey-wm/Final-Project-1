<?php
require_once('conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>GetCar</title>
  <script src="slider.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="slider.css"/>

  <link href="style.css" rel="stylesheet">
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>

<div id="wrapper">

  <!-- Sidebar -->
  <div id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li>
        <img style='width: 270px; height: 212px;'  src="Logo2.png">
      </li>
      <li class="sidebar-brand">
        <a href="index.php">
          Home
        </a>
      </li>
      <li>
        <?php
        $query = 'SELECT * FROM users_login WHERE user_id = :user_id';
        $stmt = $conn->prepare($query);
        $stmt->execute(array('user_id' => @$_SESSION['userSession']));
        $rows = $stmt->fetch();

        if(@$_SESSION['userSession'] == true) {

          echo '<h4 style="color: white;">Hello! ' . $rows['user_username'] . ' </h4><a href="logout.php">Logout</a>';

        }else{

          echo '<a href="account.php">Login / Signup</a>';
        }
        ?>
      </li>
      <?php

        if(@$_SESSION['userSession'] == true) {

         echo '<li><a href="checkout.php">Account</a></li>' ;

        }

      ?>
      <li>
        <a href="checkout.php">Subscription</a>
      </li>
      <li>
        <a href="about.php">About</a>
      </li>
      <li>
        <a href="#">Services</a>
      </li>
      <li>
        <a href="contact.php">Contact</a>
      </li>
    </ul>
  </div>