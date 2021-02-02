<?php
include('models/prisijungimas-db.php');
include('models/vartotojai-crud.php');
include('models/preke-crud.php');
include('models/img-crud.php');
include('models/uzsakymas-crud.php');
include('models/uzsakymo-prekes-crud.php');

session_start();
if (isset($_SESSION['user'])) {
  $user = $_SESSION['user'];
};
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Todo_Scoding</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="icon-small.png" rel="icon" />
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="container">
      <div class="text-center mb-5">
        <h1>Todo_Scoding</h1>
      </div>
