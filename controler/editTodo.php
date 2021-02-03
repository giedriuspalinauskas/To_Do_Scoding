<?php
include('../models/prisijungimas-db.php');
include('../models/todo-crud.php');
$array = getTodo($_POST['ID']);
updateTodo(
  $array['ID'],
  $array['name'],
  $array['description'],
  $_POST['status'],
  $array['data'],
);

print_r($_POST);
print_r($array);
header('Location: ../todo.php');
?>
