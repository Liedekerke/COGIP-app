<?php
$societelist = $dbh->query('SELECT socialname, idsociete FROM societe');
$personneslist = $dbh->query('SELECT idpersonnes, name, firstname, idsociete FROM personnes ORDER BY idsociete ASC');

$createfacture = $dbh->prepare('INSERT INTO factures (datefacture, prestationmotif, idsociete, idpersonnes) VALUES (:datefacture, :prestationmotif, :idsociete, :idpersonnes)');
$createfacture->bindParam(':datefacture', $datefacture);
$createfacture->bindParam(':prestationmotif', $prestationmotif);
$createfacture->bindParam(':idsociete', $idsociete);
$createfacture->bindParam(':idpersonnes', $idpersonnes);

$message = '';

if (isset($_POST['submit'])) {
  $datefacture = $_POST['datefacture'];
  $prestationmotif = filter_var($_POST['prestationmotif'], FILTER_SANITIZE_STRING);
  $idsociete = $_POST['idsociete'];
  $idpersonnes = $_POST['idpersonnes'][$idsociete -1];
  $createfacture->execute();
  $message = 'Facture ajoutée avec succès.';
}

$donnee2 = $personneslist->fetchAll();

$test = count(array_count_values(array_column($donnee2, 'idsociete')));
$i = 1;
 ?>
