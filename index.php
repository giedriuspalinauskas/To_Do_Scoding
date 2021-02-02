<!DOCTYPE html>
<?php
 include('header.php')
?>
<h1>Login:</h1>
<form method="post">
  <div class="form-group">
    <label for="nickname">Nickname</label>
    <input type="nickname" class="form-control" id="nickname" placeholder="Enter nickname">
  </div>
  <div class="form-group">
    <label for="passwrod">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a class="btn btn-warning" href="registration.php">Registracion</a>
</form>
<?php include('footer.php') ?>
