<?php ?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Grandstander&display=swap" rel="stylesheet">

  <!-- <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/slideshow.css"> -->

  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/common.css">
  <link rel="stylesheet" href="./css/button.css">

  <title>Poll Generator Z</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-light bg-orange">
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
