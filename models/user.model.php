<?php
$message = '';
if (isset($_POST['update'])) {
  global $dbh;
  $check = $dbh->prepare('SELECT * FROM users WHERE name = :name ');
  $check->bindParam(':name', $_SESSION['username']);
  $check->execute();
  $check2 = $check->fetch();
  if ($check2['privilege'] == 'IDDQD') {
    $update = $dbh->prepare('UPDATE users SET privilege = :privilege WHERE name = :name');
    $update->bindParam(':privilege', $_POST['privilege']);
    $update->bindParam(':name', $_POST['ident']);
    $update->execute();
    $message = "permission changée";
  }
  else {
    $message = "vous ne puvez pas changer les permissions";
  }
}
$users = $dbh->query('SELECT * FROM users');
$priv = $dbh->query('SELECT privilege FROM users GROUP BY privilege');
$donnee2 = $priv->fetchAll();
 ?>
