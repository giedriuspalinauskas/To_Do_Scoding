<?php
include('../models/prisijungimas-db.php');
require_once('../models/user-crud.php');
$mainpass = $_POST['password'];
$md5pass = md5($mainpass);
createUser( $_POST['nickname'],
                  $md5pass,);
 ?>
