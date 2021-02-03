<?php
include('header.php');
if (isset($user)) {
?>
<div class="row">
  <div class="col">
    <a href="todo.php" class="btn btn-primary">Back</a>
  </div>
</div>
<!-- Create TO DO -->
<div id="alertmessage">
</div>
<form class="container" method="post">
<div class="form-group">
  <label for="name">Name</label>
  <input type="text" class="form-control mb-2" id="name">
  <label>Description</label>
  <textarea class="form-control" rows="5" id="description" maxlength="500"></textarea>
  <div class="float-right">
    <button class="btn btn-primary m-3" id="todo">Save</button>
  </div>
</div>
</form>
<br><br>

<!-- User TABLE -->
<div class="row">
  <label><b>Users</b></label>
</div>
<table class="table">
  <form class="">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Creation Date</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <!-- Gauni visi duomenys is duomenu bazes -->
  <?php
    $i = 1;
    $admins = getUsers();
    while ($admin = mysqli_fetch_assoc($admins)){
      // Jeigu adminas, kad nerodytu bendroje lenteleje su useriais.
      if ($admin['status'] == "2") {
        continue;
      }
      ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $i++;  ?></th>
      <td><?php echo $admin['name'] ?></td>
      <td><?php echo $admin['status'] ?></td>
      <td><?php echo $admin['Date'] ?></td>
      <td> <a class="btn bg-warning text-white" href="controler/deleteUser.php?id=<?php echo $admin['ID'] ?>">Detele</a> </td>
    </tr>
  </tbody>
  <?php } ?>
</table>
<?php
} else{
  echo "Need to Log in!";
}
include('footer.php')
?>
