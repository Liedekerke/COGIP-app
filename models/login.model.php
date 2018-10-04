<?php

$test = $dbh->query('SELECT * FROM users');

if ( isset($_POST['submit']) ) {
  session_start();
  $_SESSION['username'] = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
  $_SESSION['password'] = sha1(filter_var($_POST['password'], FILTER_SANITIZE_STRING));
  while ($donnee = $test->fetch()) {
    if ($_SESSION['username'] == $donnee['name'] && $_SESSION['password'] == $donnee['password']) {
      $check = 'yup';
    }
  }
  if (isset($check)) {
    header('location:?page=dashboard');
  } else {
    header('location:?page=login');
  }
}

$errormessage = '';
if ( $_GET['page'] == 'login' ) {
  $errormessage = "mot de passe ou login invalide";
}

switch ($_GET['page']) {
  case 'logintrue':
    $buttonvalue = 'delete';
    $buttontext = 'logout';
    session_start();
    session_destroy();
    header('location:?page=');
    break;

  default:
    $buttonvalue = 'submit';
    $buttontext = 'login';
    break;
}

if ( isset($_POST['delete']) ) {
  session_start();
  session_destroy();
  header('location:?page=');
}

 ?>
