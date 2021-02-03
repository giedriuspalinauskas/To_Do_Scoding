<?php
include('header.php');
if (isset($user)) {
?>
<div class="row">
  <div class="col-2">
    <p><b>Vartotojas: <?php echo $user['name'] ?></b></p>
  </div>
  <div class="col">
    <a href="controler/logout.php" class="btn btn-warning">Log out</a>
    <?php if ($user['status'] == "2") { ?>
    <a href="admin.php" class="btn btn-primary">Admin panel</a>
    <?php } ?>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Data</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <!-- Gauni visi duomenys is duomenu bazes -->
  <?php
    $i = 1;
    $todos = getTodos();
    while ($todo = mysqli_fetch_assoc($todos)){ ?>
  <form method="post" action="controler/editTodo.php">
  <tbody>
    <tr>
      <th scope="row"><?php echo $i++;  ?></th>
      <td><?php echo $todo['name'] ?></td>
      <td><?php echo $todo['description'] ?></td>
      <td>
      <select name="status" id="status">
        <option value="New" <?php if ($todo['status'] == "New") { echo "selected"; } ?>>New</option>
        <option value="In progress" <?php if ($todo['status'] == "In progress") { echo "selected"; } ?>>In progress</option>
        <option value="Done" <?php if ($todo['status'] == "Done") { echo "selected"; } ?>>Done</option>
      </select>
      </td>
      <td><?php echo $todo['data'] ?></td>
      <td> <button class="btn btn-warning" name="ID" value="<?php echo $todo['ID'] ?>" type="submit">Save</button> </td>
    </tr>
  </tbody>
  </form>
  <?php } ?>
</table>


<?php
} else{
  echo "Need to Log in!";
}
include('footer.php')
?>
