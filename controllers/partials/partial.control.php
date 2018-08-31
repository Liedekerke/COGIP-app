<?php

//common model
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=cgpi;host=127.0.0.1';
$user = 'root';
$password = '12345678';

if (!isset($_GET['page'])) {
  $_GET['page'] = '';
}

function testselect($par1, $par2) {
  if ($par1 == $par2) {
    echo "selected";
  }
}

function delete($database, $param) {
  global $dbh;
  $deleteFacture = $dbh->prepare("DELETE FROM ".$database." WHERE ".$param." = :idgeneral");
  $deleteFacture->bindParam(':idgeneral', $delete);
  $delete = $_POST['iddelete'];
  $deleteFacture->execute();
}

try {
    $dbh = new PDO($dsn, $user, $password);

    } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>