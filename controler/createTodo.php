<?php
include('../models/prisijungimas-db.php');
include('../models/todo-crud.php');
$status = "New";
print_r($_POST);
createTodo(       $_POST['name'],
                  $_POST['description'],
                  $status,);
 // header('Location: ../admin.php');

 ?>
