<?php
$displayDetailsPersonnes = $dbh->prepare('SELECT personnes.name AS personnesName, personnes.firstname, personnes.personnesphone, personnes.email FROM personnes WHERE personnes.idpersonnes = :idpersonnes');
$displayDetailsPersonnes2 = $dbh->prepare('SELECT * FROM factures WHERE factures.idpersonnes = :idpersonnes');
$displayDetailsPersonnes3 = $dbh->prepare('SELECT societe.idsociete, societe.socialname, societe.adresse FROM societe LEFT JOIN personnes ON societe.idsociete = personnes.idsociete WHERE personnes.idpersonnes = :idpersonnes');

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

// Ajout update - cookie

 ?>
