<?php
if ( isset($_POST['submit']) ) {
  session_start();
  $_SESSION['username'] = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
  $_SESSION['password'] = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
  header('location:?page=dashboard');
}

$errormessage = '';
if ( $_GET['page'] == 'login' ) {
  $errormessage = "mot de passe ou login invalide";
}

 ?>
