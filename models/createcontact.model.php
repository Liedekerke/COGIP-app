<?php
$createcontact2 = $dbh->prepare('INSERT INTO personnes (name, firstname, personnesphone, email, idsociete) VALUES (:name, :firstname, :personnesphone, :email, :idsociete)');
$createcontact = $dbh->query("SELECT socialname, idsociete FROM societe");

$createcontact2->bindParam(':name',$name);
$createcontact2->bindParam(':firstname',$firstname);
$createcontact2->bindParam(':personnesphone',$personnesphone);
$createcontact2->bindParam(':email',$email);
$createcontact2->bindParam(':idsociete',$idsociete);

$message = '';

if(isset($_POST['update'])){
  global $dbh;
  $check = $dbh->prepare('SELECT * FROM users WHERE name = :name ');
  $check->bindParam(':name', $_SESSION['username']);
  $check->execute();
  $check2 = $check->fetch();
  if ($check2['privilege'] == 'IDDQD' || $check2['privilege'] == 'MODO') {
    $name = filter_var( $_POST['name'],FILTER_SANITIZE_STRING);
    $firstname = filter_var($_POST['firstname'],FILTER_SANITIZE_STRING);
    $testphone = ( ($_POST['personnesphone'] < 1000000000) && (filter_var(filter_var($_POST['personnesphone'], FILTER_SANITIZE_NUMBER_INT), FILTER_VALIDATE_INT) !== FALSE)? $personnesphone = filter_var(filter_var($_POST['personnesphone'], FILTER_SANITIZE_NUMBER_INT), FILTER_VALIDATE_INT): $message = "numero de telephone non valide" );
    $email = filter_var(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL), FILTER_VALIDATE_EMAIL);
    $idsociete = $_POST['idsociete'];
    if ($message == '') {
      $message = 'contact rajouté avec succès.';
      $createcontact2->execute();
    }
  } else {
    $message = "Vous ne pouvez pas ajouter de contact";
  }
}
 ?>
