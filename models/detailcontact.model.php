<?php
$displayDetailsPersonnes = $dbh->prepare('SELECT personnes.name AS personnesName, personnes.firstname, personnes.personnesphone, personnes.email, personnes.idsociete FROM personnes WHERE personnes.idpersonnes = :idpersonnes');
$displayDetailsPersonnes2 = $dbh->prepare('SELECT * FROM factures WHERE factures.idpersonnes = :idpersonnes');
$displayDetailsPersonnes3 = $dbh->prepare('SELECT societe.idsociete, societe.socialname, societe.adresse FROM societe');

$displayDetailsPersonnes->bindParam(':idpersonnes', $idpersonnes);
$displayDetailsPersonnes2->bindParam(':idpersonnes', $idpersonnes);
$displayDetailsPersonnes3->bindParam(':idpersonnes', $idpersonnes);

$message = '';

if (isset($_GET['annuaire'])) {
  $idpersonnes = $_GET['annuaire'];
  $displayDetailsPersonnes->execute();
  $displayDetailsPersonnes2->execute();
  $displayDetailsPersonnes3->execute();
  $message = 'contact modifié avec succès.';
}

if (isset($_POST['update'])) {
  $updateperson = $dbh->prepare('UPDATE personnes SET name = :name, firstname = :firstname, idsociete = :idsociete, personnesphone = :personnesphone, email = :email WHERE idpersonnes = :idpersonnes');
  $updateperson->bindParam(':name', $name);
  $updateperson->bindParam(':firstname', $firstname);
  $updateperson->bindParam(':idsociete', $idsociete);
  $updateperson->bindParam(':personnesphone', $personnesphone);
  $updateperson->bindParam(':email', $email);
  $name = $_POST['name'];
  $firstname = $_POST['firstname'];
  $idsociete = $_POST['idsociete'];
  $personnesphone = $_POST['personnesphone'];
  $email = $_POST['email'];
  $updateperson->execute();
  $message = 'contact modifié avec succès.';
}

// Ajout update - cookie

 ?>
