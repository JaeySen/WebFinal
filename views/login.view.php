<?php
include "includes/header.php";
 ?>
  <!-- <link rel="stylesheet" href="css/login.css"> -->
<?php
include "includes/navbar.php";
?>

 <div id="banner" class="jumbotron">
 <div class="display-4 mb-4 text-center">Create Account or Login!</div>
  <div class="container-form">
  <?php if (isset($errors) && !empty($errors)): ?>
     <div class="alert alert-danger" role="alert">
       <?php foreach ($errors as $error): ?>
         <?php echo $error . "</br>"; ?>
       <?php endforeach; ?>
     </div>
   <?php endif; ?>
   <div class="row p-4">
     <div class="col-md-6">
       <h3><i class="fa fa-plus"></i> Create Account</h3>
       <form class="" action="login.php" method="post">
         <input type="text" name="username" class="form-control" placeholder="Username" value="<?php if (isset($username)) {
           echo htmlspecialchars($username);}?>">
         <p class="error"><?php if(isset($errors['create_username'])) {echo $errors['create_username'];} ?></p>

         <input type="email" name="email" class="form-control" placeholder="Email" value="<?php if (isset($email)) { echo htmlspecialchars($email);} ?>">
         <p class="error"><?php if(isset($errors['create_email'])) { echo $errors['create_email'];} ?></p>

         <input type="password" name="password1" class="form-control" placeholder="Password"value="">
         <p class="error"></p>

         <input type="password" name="password2" class="form-control" placeholder="Confirm password"value="">
         <p class="error"><?php if(isset($errors['create_password'])) { echo $errors['create_password'];} ?></p>

         <button type="submit" name="create" class="btn btn-outline-success">Create Account</button>
       </form>
     </div>
     <div class="col-md-6">
       <h3><i class="fa fa-user"></i> Login</h3>
       <form class="" action="login.php" method="post">
         <input type="text" name="username" class="form-control" placeholder="Username">
         <p class="error error-username"></p>
          
         <input type="password" name="password" class="form-control" placeholder="Password">
         <p class="error error-password"></p>
         <button type="submit" name="login" class="btn btn-block btn-success"><i class="fa fa-user"></i> Login</button>
       </form>
     </div>
   </div>
  </div>

 </div>



 <?php
include "includes/footer.php";
  ?>
