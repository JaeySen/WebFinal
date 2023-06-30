<?php 
  $current_path = $_SERVER['PHP_SELF'];
  var_dump(strpos($current_path, '/', -1));
  $current_pg = basename($current_path);
  // $output = strpos($current_path, '/', -1);
  // echo "<script>console.log('Debug Objects: " . $current_pg . "' );</script>";
  // $current_pg = substr($current_path, strpos($current_path, '/', -1))
?>

</head>

<body>
  <header class="fixed-top w-100">    
    <nav class="navbar navbar-expand-md navbar-light bg-orange">
    <div class="container">
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
          <li class="nav-item <?php if($current_pg == "index.php"){echo "active";} ?>">
            <a class="nav-link grow" href="index.php">Home</a>
          </li>
          <li class="nav-item <?php if($current_pg == "latest.php"){echo "active";} ?>">
            <a class="nav-link grow" href="<?php echo $root?>latest">Latest</a>
          </li>
          <li class="nav-item <?php if($current_pg == "random.php"){echo "active";} ?>">
            <a class="nav-link grow" href="random.php">Random</a>
          </li>
          <li class="nav-item <?php if($current_pg == "trending.php"){echo "active";} ?>">
            <a class="nav-link grow" href="trending.php">Trending</a>
          </li>
          <li class="nav-item <?php if($current_pg == "login.php"){echo "active";} ?>">
            <a class="nav-link grow" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
    </nav>
  </header>