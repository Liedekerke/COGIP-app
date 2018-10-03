<?php

$detailsType = $dbh->query("SELECT type.type FROM type GROUP BY type.type");

$detailsRelation = $dbh->query("SELECT type.relation FROM type GROUP BY type.relation");

$lastSociete = $dbh->query("SELECT idsociete FROM societe ORDER BY idsociete DESC LIMIT 0,1");

$createSociete = $dbh->prepare('INSERT INTO societe (socialname, adresse, country, tvanumber, telephonesociete) VALUES (:socialname, :adresse, :country, :tvanumber, :telephonesociete)');
// Creation du type de societe(asbl,sprl,..)
$createType = $dbh->prepare('INSERT INTO type (type, relation, idsociete) VALUES (:type, :relation, :idsociete)');

$createSociete->bindParam(':socialname', $socialname);
$createSociete->bindParam(':adresse', $adresse);
$createSociete->bindParam(':country', $country);
$createSociete->bindParam(':tvanumber', $tvanumber);
$createSociete->bindParam(':telephonesociete', $telephonesociete);

$createType->bindParam(':type', $type);
$createType->bindParam(':relation', $relation);
$createType->bindParam(':idsociete', $idsociete3);

$message = '';

if(isset($_POST['createsociete'])) {
    $socialname = filter_var($_POST['socialname'], FILTER_SANITIZE_STRING);
    $adresse = filter_var($_POST['adresse'], FILTER_SANITIZE_STRING);
    $country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);
    $tvanumber = filter_var(filter_var($_POST['tvanumber'], FILTER_SANITIZE_NUMBER_INT), FILTER_VALIDATE_INT);
    $telephonesociete = filter_var(filter_var($_POST['telephonesociete'], FILTER_SANITIZE_NUMBER_INT), FILTER_VALIDATE_INT);
    $type = filter_var($_POST['type'], FILTER_SANITIZE_STRING);
   	$relation = filter_var($_POST['relation'], FILTER_SANITIZE_STRING);
    $idsociete = $lastSociete->fetch();
    $idsociete2 = filter_var(filter_var($idsociete['idsociete'], FILTER_SANITIZE_NUMBER_INT), FILTER_SANITIZE_NUMBER_INT);
    $idsociete3 = $idsociete2 + 1;
   	$createSociete->execute();
	  $createType->execute();
    $message = 'société ajoutée avec succès.';
  }


?>
