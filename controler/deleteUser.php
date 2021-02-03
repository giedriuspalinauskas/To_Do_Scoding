<?php
include('../models/prisijungimas-db.php');
require_once('../models/user-crud.php');
deleteUser($_GET['id']);

header('Location: ../admin.php');
 ?>
