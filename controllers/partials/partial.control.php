<?php
session_start();
//common model
/* Connect to a MySQL database using driver invocation */
$dsn = getenv('DSN');
$user = $_SESSION['username'];
$password = $_SESSION['password'];
// $dsn = 'mysql:dbname=cgpi;host=127.0.0.1';
// $user ='root';
// $password ='12345678';


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
    $test = $dbh->query('SET ROLE iddqd');
    $test2 = $dbh->query('SET ROLE modo');
    $test3 = $dbh->query('SET ROLE guest');

    } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    session_destroy();
    header('location:?page=login');
}

echo $dsn . $user . $password;
?>
