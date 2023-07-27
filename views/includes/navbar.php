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
            <a class="nav-link grow" href="<?php echo $root ?>">Home</a>
          </li>
          <li class="nav-item <?php if($current_pg == "latest"){echo "active";} ?>">
            <a class="nav-link grow" href="<?php echo $root ?>/latest">Latest</a>
          </li>
          <li class="nav-item <?php if($current_pg == "random"){echo "active";} ?>">
            <a class="nav-link grow" href="<?php echo $root ?>/random">Random</a>
          </li>
          <li class="nav-item <?php if($current_pg == "trending"){echo "active";} ?>">
            <a class="nav-link grow" href="<?php echo $root ?>/trending">Trending</a>
          </li>
          <li class="nav-item <?php if($current_pg == "login"){echo "active";} ?>">
            <a class="nav-link grow" href="<?php echo $root ?>/login">Login</a>
          </li>
        </ul>
      </div>
    </div>
    </nav>
  </header>