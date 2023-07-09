<?php
include "Classes/User.php";
include "Classes/Validator.php";
include "db/db.php";

if(isset($_POST['login'])) {
  // header("Location: /pollgenz-php");
  // $user_password = $_POST['password'];
  // $user = new User($conn);
  // $user->checkLogin($user_name, $user_password);
  // $errors = $user->errors;
  $validator = new Validator($_POST);
  $errors = $validator->validateForm(); 
  if (!$errors) {
    echo("<script>console.log('No error found');</script>");
    $user = new User($conn, $_POST);
    $user->login();
  }

  // if (!$errors) {
  //   echo("<script>console.log('No error found');</script>");

  // }

  // echo("<script>console.log('PHP to console: $errors');</script>");

}

if(isset($_POST['create'])) {
  // $user_name = $_POST['username'];
  // $user_email = $_POST['email'];
  // $user_password = $_POST['password1'];
  // $user_password2 = $_POST['password2'];
  // $user = new User($conn);
  // $user->checkRegistration($user_name, $user_email, $user_password, $user_password2);

  // $errors = $user->errors;
  // echo("<script>console.log('PHP to console: $_POST');</script>");
  // $username = $_POST['username'];
  // $login = $_POST['create'];
  // echo("<script>console.log('PHP to console: $login');</script>");
  $validator = new Validator($_POST);
  $errors = $validator->validateForm(); 
  foreach($errors as $error){
    echo("<script>console.log('PHP to console: $error');</script>");
  }
  

}

?>


<div id="banner" class="jumbotron">
  <div class="display-4 mb-4 text-center">Create Account or Login!</div>
  <div class="container-form">

    <div class="row p-4">
      <div class="col-md-6">
        <h3><i class="fa fa-plus"></i> Create Account</h3>
        <form class="" action="" method="post">
          <input type="text" name="username" class="form-control" placeholder="Username" value="<?php if (isset($username)) {
            echo htmlspecialchars($username);}?>">
          <p class="error"><?php if(isset($errors['create_username'])) {echo $errors['create_username'];} ?></p>

          <input type="email" name="email" class="form-control" placeholder="Email" value="<?php if (isset($email)) { echo htmlspecialchars($email);} ?>">
          <p class="error"><?php if(isset($errors['create_email'])) { echo $errors['create_email'];} ?></p>

          <input type="password" name="password1" class="form-control" placeholder="Password" autocomplete="on" value="">
          <p class="error"></p>

          <input type="password" name="password2" class="form-control" placeholder="Confirm password" autocomplete="on" value="">
          <p class="error"><?php if(isset($errors['create_password'])) { echo $errors['create_password'];} ?></p>

          <button type="submit" name="create" class="btn btn-outline-success">Create Account</button>
        </form>
      </div>
      <div class="col-md-6">
        <h3><i class="fa fa-user"></i> Login</h3>
        <form class="" action="" method="post">
          <input type="text" name="username" class="form-control" placeholder="Username">
          <p class="error error-username"> <?php echo $errors['username'] ?? ''?></p>
          
          <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="on">
          <p class="error error-password"> <?php echo $errors['email'] ?? ''?></p>
          <button type="submit" name="login" class="btn btn-block btn-success"><i class="fa fa-user"></i> Login</button>
        </form>
      </div>
    </div>
  </div>

</div>
