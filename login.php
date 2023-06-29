<?php
include "includes/header.php";
 ?>
  <link rel="stylesheet" href="login.css">
<?php
include "includes/navbar.php";
?>

 <div id="banner" class="container-fluid">
   <?php if (isset($errors) && !empty($errors)): ?>
     <div class="alert alert-danger" role="alert">
       <?php foreach ($errors as $error): ?>
         <?php echo $error . "</br>"; ?>
       <?php endforeach; ?>
     </div>
   <?php endif; ?>
   <div class="row">
     <div class="col-md-6">
       <h3><i class="fa fa-plus"></i> Create Account</h3>
       <form class="" action="login.php" method="post">
         <label for="username">Username</label>
         <input type="text" name="username" class="form-control" placeholder="Input your username..." value="<?php if (isset($username)) {
           echo htmlspecialchars($username);}?>">

         <p class="error"><?php if(isset($errors['create_username'])) {echo $errors['create_username'];} ?></p>

         <label for="email">Email</label>
         <input type="email" name="email" class="form-control" placeholder="Input your username..." value="<?php if (isset($email)) { echo htmlspecialchars($email);} ?>">
         <p class="error"><?php if(isset($errors['create_email'])) { echo $errors['create_email'];} ?></p>
         <label for="password1">Password</label>
         <input type="password" name="password1" class="form-control" placeholder="Input your username..."value="">
         <p class="error"></p>
         <label for="password2">Confirm Password</label>
         <input type="password" name="password2" class="form-control" placeholder="Input your username..."value="">
         <p class="error"><?php if(isset($errors['create_password'])) { echo $errors['create_password'];} ?></p>
         <button type="submit" name="create" class="btn btn-outline-success">Create Account</button>
       </form>
     </div>
     <div class="col-md-6">
       <h3><i class="fa fa-user"></i> Login</h3>
       <form class="" action="login.php" method="post">
         <label for="username">Username</label>
         <input type="text" name="username" class="form-control" placeholder="Enter your name...">
         <p class="error error-username"></p>
         <label for="password">Password</label>
         <input type="password" name="password" class="form-control" placeholder="...">
         <p class="error error-password"></p>
         <button type="submit" name="login" class="btn btn-block btn-success"><i class="fa fa-user"></i> Login</button>
       </form>
     </div>
   </div>
 </div>



 <?php
include "includes/footer.php";
  ?>
