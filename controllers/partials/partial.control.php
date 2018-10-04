<?php
//common model
/* Connect to a MySQL database using driver invocation */
$dsn = getenv('DSN');
$user = getenv('USER');
$password = getenv('PASSWORD');
// $dsn = 'mysql:dbname=cgpi;host=127.0.0.1';
// $user ='root';
// $password ='12345678';


function sessionCheck() {
  global $dbh;
  $check = $dbh->prepare('SELECT * FROM users WHERE name = :name ');
  $check->bindParam(':name', $_SESSION['username']);
  $check->execute();
  $check2 = $check->fetch();
  if (!$check2) {
    header('location:?page=login');
  }
}

function sessionCheckAdd() {
  global $dbh;
  $check = $dbh->prepare('SELECT * FROM users WHERE name = :name ');
  $check->bindParam(':name', $_SESSION['username']);
  $check->execute();
  $check2 = $check->fetch();
  if ($check2['privilege'] !== 'IDDQD' && $check2['privilege'] !== 'MODO') {
    echo 'disabled';
  }
}

function sessionCheckDelUpd() {
  global $dbh;
  $check = $dbh->prepare('SELECT * FROM users WHERE name = :name ');
  $check->bindParam(':name', $_SESSION['username']);
  $check->execute();
  $check2 = $check->fetch();
  if ($check2['privilege'] !== 'IDDQD') {
    echo 'disabled';
  }
}

function testselect($par1, $par2) {
  if ($par1 == $par2) {
    echo "selected";
  }
}

function delete($database, $param) {
  global $dbh;
  $check = $dbh->prepare('SELECT * FROM users WHERE name = :name ');
  $check->bindParam(':name', $_SESSION['username']);
  $check->execute();
  $check2 = $check->fetch();
  if ($check2['privilege'] == 'IDDQD') {
    $deleteFacture = $dbh->prepare("DELETE FROM ".$database." WHERE ".$param." = :idgeneral");
    $deleteFacture->bindParam(':idgeneral', $delete);
    $delete = $_POST['iddelete'];
    $deleteFacture->execute();
  }
}

try {
    $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// echo $dsn . $user . $password;
?>
