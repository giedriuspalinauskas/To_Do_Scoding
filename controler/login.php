<?php
include('../models/prisijungimas-db.php');
require_once('../models/user-crud.php');
session_start();
$nickname = $_POST['nickname'];
$pass = $_POST['password'];
$nickname = strtolower($nickname);
$md5pass = md5($pass);
$manoSQL = "SELECT * FROM user WHERE name = '$nickname' AND password = '$md5pass' ";
$rezultataiMysqlObj = mysqli_query(getPrisijungimas(), $manoSQL);
$user = mysqli_fetch_assoc($rezultataiMysqlObj);
$user['name'] = strtolower($user['name']);
if ($user['name'] === $nickname && $user['password'] === $md5pass ) {
  echo "True";
  $_SESSION['user'] = $user;
} else echo "False";
 ?>
