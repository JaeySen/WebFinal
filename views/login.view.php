<?php
include "Classes/User.php";
include "Classes/Validator.php";
include "db/db.php";

if(isset($_POST['login'])) {
  $validator = new Validator($_POST);
  $errors = $validator->validateLoginForm(); 
  if (!$errors) {
    $user = new User($conn, $_POST);
    $login_errors = $user->login();
    if (!$login_errors) {
      $user->runLoginSession($user);
    }
  }
}

if(isset($_POST['create'])) {
  $validator = new Validator($_POST);
  $errors = $validator->validateCreateForm(); 
  if (!$errors) {
    $user = new User($conn, $_POST);
    $create_errors = $user->checkExisted();
    if (!$create_errors) {
      $user->createAccount();
      $user->runLoginSession($user);
    }
  }
}

?>

<div id="banner" class="jumbotron">
  <div class="display-4 mb-4 text-center">Create Account or Login!</div>
  <div class="container-form flipper">

    <div class="row p-4">
      <div class="col-xl-6 front">
        <h3><i class="fa fa-plus"></i> Create Account</h3>
        <form class="form-create" action="" method="post">
          <!-- <label for="username">Username</label> -->
          <input type="text" name="username" class="form-control <?php if(isset($errors['username'])){ echo 'border border-danger'; } ?>" placeholder="Username" value="<?php if (isset($_POST['username'])) {
            echo htmlspecialchars($_POST['username']);}?>" >
          <p class="error error-username text-danger"> <?php if(isset($_POST['create'])){ if (empty($create_errors)) { echo $errors['username'] ?? '';} else { echo $create_errors['username'] ?? '';}  }?></p>

          <!-- <label for="email">Email</label> -->
          <input type="email" name="email" class="form-control <?php if(isset($errors['email'])){ echo 'border border-danger'; } ?>" placeholder="Email" value="<?php if (isset($_POST['email'])) { echo htmlspecialchars($_POST['email']);} ?>">
          <p class="error error-email text-danger"> <?php if(isset($_POST['create'])){ echo $errors['email'] ?? ''; } ?></p>

          <!-- <label for="password">Password</label> -->
          <input type="password" name="password" class="form-control <?php if(isset($errors['password'])){ echo 'border border-danger'; } ?>" placeholder="Password" autocomplete="on" value="">
          <p class="error error-password text-danger" for="password"> <?php if(isset($_POST['create'])){ echo $errors['password'] ?? ''; } ?></p>

          <!-- <label for="password-confirm">Confirm Password</label> -->
          <input type="password" name="password-confirm" class="form-control <?php if(isset($errors['password'])){ echo 'border border-danger'; } ?>" placeholder="Confirm password" autocomplete="on" value="">
          <p class="error error-password-confirm text-danger"> <?php if(isset($_POST['create'])){ echo $errors['password-confirm'] ?? ''; } ?></p>

          <button type="submit" name="create" class="btn btn-outline-success" >Create Account</button>
          
        </form>
      </div>
      <div class="col-xl-6 col-lg-12">
        <h3><i class="fa fa-user"></i> Login</h3>
        <form class="" action="" method="post">
          <input type="text" name="login-username" class="form-control" placeholder="Username">
          <p class="error error-username"> <?php if(isset($_POST['login'])) {echo $errors['username'];} ?></p>
          
          <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="on">
          <p class="error error-password"> <?php if(isset($_POST['login'])){ echo $errors['password']; }?></p>

          <button type="submit" name="login" class="btn btn-block btn-success"><i class="fa fa-user"></i> Login</button>
          <a href="" class="pt-2">Forgotten passoword? </a>
        </form>

        <div class="create-button">
          <hr>
          <button type="" name="" class="btn btn-block btn-outline-success"><i class="fa fa-user-plus" aria-hidden="true"></i> Create Account </button>
        </div>
      </div>
    </div>
  </div>

</div>
