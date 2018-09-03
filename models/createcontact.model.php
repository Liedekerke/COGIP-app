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
  $name = filter_var( $_POST['name'],FILTER_SANITIZE_STRING);
  $firstname = filter_var($_POST['firstname'],FILTER_SANITIZE_STRING);
  $personnesphone = filter_var(filter_var($_POST['personnesphone'], FILTER_SANITIZE_NUMBER_INT), FILTER_VALIDATE_INT);
  $email = filter_var(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL), FILTER_VALIDATE_EMAIL);
  $idsociete = $_POST['idsociete'];
  $message = 'contact rajouté avec succès.';
$createcontact2->execute();
}
 ?>
