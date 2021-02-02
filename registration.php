<?php include('header.php') ?>
<a href="index.php" class="btn btn-primary">Back</a>
<div class="text-center">
  <h1>Registration</h1>
</div>
<form method="post">
  <div class="form-group">
    <label for="nickname">Nickname</label>
    <input type="nickname" class="form-control" id="nickname" placeholder="Enter nickname">
  </div>
  <div class="form-group">
    <label for="passwrod">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password">
  </div>
  <div class="form-group">
    <label for="confirm_password">Repeat password</label>
    <input type="confirm_password" class="form-control" id="confirm_password" placeholder="Repeat password">
  </div>
  <button class="btn btn-primary" id="register">Register</button>
<?php include('footer.php') ?>
