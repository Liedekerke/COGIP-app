<?php

//common model
/* Connect to a MySQL database using driver invocation */
$dsn = getenv('DSN');
$user = getenv('USER');
$password = getenv('PASSWORD');

if (!isset($_GET['page'])) {
  $_GET['page'] = '';
}

function testselect($par1, $par2) {
  if ($par1 == $par2) {
    echo "selected";
  }
}

function delete($database) {
  $deleteFacture = $dbh->prepare("DELETE FROM ".$database." WHERE idfactures = :idgeneral");
  $deleteFacture->bindParam(':idgeneral', $param);
  $param = $_POST['delete'];
  $deleteFacture->execute();
}

try {
    $dbh = new PDO($dsn, $user, $password);

    } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>
