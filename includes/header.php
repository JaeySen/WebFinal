<?php
// var_dump($_SERVER);
 ?>

<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="slideshow.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <!-- <script src="path/to/jquery.cookie.js"></script> -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Grandstander&display=swap" rel="stylesheet">

    <title>A Fun Poll Generator</title>
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-light bg-orange" style="">
         <a href="index.php" class="navbar-brand">
           <img src="images/logo_transparent.png" alt="logo">
           PollGenZ
         </a>

         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
           aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navigation">
           <ul class="navbar-nav ml-auto">
             <li class="nav-item <?php if($_SERVER['PHP_SELF'] = "../index.php"){echo "active";} ?>">
               <a class="nav-link grow" href="index.php">Home</a>
             </li>
             <li class="nav-item <?php if($_SERVER['PHP_SELF'] = "../trending2.php"){echo "active";} ?>">
               <a class="nav-link grow" href="trending2.php">Trending</a>
             </li>
             <li class="nav-item <?php if($_SERVER['PHP_SELF'] = "../about.php"){echo "active";} ?>">
               <a class="nav-link grow" href="about.php">About</a>
             </li>
             <li class="nav-item <?php if($_SERVER['PHP_SELF'] = "../login.php"){echo "active";} ?>">
               <a class="nav-link grow" href="login.php">Login</a>
             </li>
           </ul>
         </div>
       </nav>
    </header>
