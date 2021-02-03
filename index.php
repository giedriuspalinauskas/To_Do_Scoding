<!DOCTYPE html>
<?php
 include('header.php')
?>
<h1>Login:</h1>
<form action="controler/login.php" method="post">
  <div class="form-group">
    <label for="nickname">Nickname</label>
    <input type="nickname" class="form-control" id="nickname" name="nickname" placeholder="Enter nickname">
  </div>
  <div class="form-group">
    <label for="passwrod">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
  </div>
  <button class="btn btn-primary" id="login">Log in</button>
  <a class="btn btn-warning" href="registration.php">Register</a>
</form>
<?php include('footer.php') ?>
