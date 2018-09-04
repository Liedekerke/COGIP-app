<?php
if (isset($_POST['update'])) {
  $update = $dbh->prepare('UPDATE users SET privilege = :privilege WHERE name = :name');
  $update->bindParam(':privilege', $_POST['privilege']);
  $update->bindParam(':name', $_POST['ident']);
  $update->execute();
}

$users = $dbh->query('SELECT * FROM users');
$priv = $dbh->query('SELECT privilege FROM users GROUP BY privilege');
$donnee2 = $priv->fetchAll();


 ?>
