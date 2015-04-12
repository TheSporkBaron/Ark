<?php include('includes/appvars.php'); ?>

<?php

if (!isset($_COOKIE)) {
  session_start();
}

if(isset($_COOKIE['username'])) {
  $log_display = 

  '<li style="padding-top: 5px;">
      <a href="character.php">Character</a>
  </li>' . 

  '<li style="margin-left: 4px;" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Account
    <span class="caret"></span></a>

  <ul class="dropdown-menu">

    <li>
      <a href="viewprofile.php">Your Profile</a>
    </li>

    <li>
      <a href="editprofile.php">Edit Profile</a>
    </li>

    <li>
      <a href="logout.php">Log Out</a>
    </li>

  </ul>
</li>';
} else {
  $log_display = 


       '<li style="padding-top: 5px;">
          <a href="loginpage.php">Log In</a>
        </li>

        <li style="padding-top: 5px;">
          <a href="signup.php">Sign Up</a>
        </li>'; 
}

?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="" name="description">
  <meta content="" name="author">
  <link href="favicon.ico" rel="icon">

  <title>Ark3 Project</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery.powertip.min.css" rel="stylesheet">
  <!-- CSS for main site -->
  <link href="css/main.css" rel="stylesheet">
  <!-- CSS for character creator -->
  <link href="css/charactercreator.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle collapsed" data-target="#navbar"
        data-toggle="collapse" type="button"><span class="sr-only">Toggle
        navigation</span> <span class="icon-bar"></span> <span class=
        "icon-bar"></span> <span class="icon-bar"></span></button>
      </div>

      <div class="navbar-collapse collapse" id="navbar">

        <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="About.php">About</a>
          </li>

          <li>
            <a href="Guide.php">Guide</a>
          </li>

          <li>
            <a href="index.php">Home</a>
          </li>
        <?php echo $log_display; ?>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <body>

