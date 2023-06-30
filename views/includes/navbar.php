<?php 
  // $current_path = $_SERVER['PHP_SELF'];
  // var_dump(strpos($current_path, '/', -1));
  // $current_pg = basename($current_path);
  // $root = 'pollgenz-php/';  
  $current_pg = basename($root);
  // $output = strpos($current_path, '/', -1);
  // echo "<script>console.log('Debug Objects: " . basename($root) . "' );</script>";
  // $current_pg = substr($current_path, strpos($current_path, '/', -1))
?>

<body>
  <header class="fixed-top w-100">    
    <nav class="navbar navbar-expand-md navbar-light bg-orange">
    <div class="container">
      <a href="" class="navbar-brand">
        <img src="images/logo_transparent.png" alt="logo">
        PollGenZ
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php if($current_pg == "pollgenz-php"){echo "active";} ?>">
            <a class="nav-link grow" href="<?php echo $pg_req[0] ?>pollgenz-php">Home</a>
          </li>
          <li class="nav-item <?php if($current_pg == "latest"){echo "active";} ?>">
            <a class="nav-link grow" href="<?php echo $pg_req[0] ?>latest">Latest</a>
          </li>
          <li class="nav-item <?php if($current_pg == "random"){echo "active";} ?>">
            <a class="nav-link grow" href="<?php echo $pg_req[0] ?>random">Random</a>
          </li>
          <li class="nav-item <?php if($current_pg == "trending"){echo "active";} ?>">
            <a class="nav-link grow" href="<?php echo $pg_req[0] ?>trending.php">Trending</a>
          </li>
          <li class="nav-item <?php if($current_pg == "login"){echo "active";} ?>">
            <a class="nav-link grow" href="<?php echo $pg_req[0] ?>login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
    </nav>
  </header>