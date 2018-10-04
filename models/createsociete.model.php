<?php

$detailsType = $dbh->query("SELECT type.type FROM type GROUP BY type.type");

$detailsRelation = $dbh->query("SELECT type.relation FROM type GROUP BY type.relation");

$lastSociete = $dbh->query("SELECT idsociete FROM societe ORDER BY idsociete DESC LIMIT 0,1");

$createSociete = $dbh->prepare('INSERT INTO societe (socialname, adresse, country, tvanumber, telephonesociete) VALUES (:socialname, :adresse, :country, :tvanumber, :telephonesociete)');

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
  global $dbh;
  $check = $dbh->prepare('SELECT * FROM users WHERE name = :name ');
  $check->bindParam(':name', $_SESSION['username']);
  $check->execute();
  $check2 = $check->fetch();
  if ($check2['privilege'] == 'IDDQD' || $check2['privilege'] == 'MODO') {
    $socialname = filter_var($_POST['socialname'], FILTER_SANITIZE_STRING);
    $adresse = filter_var($_POST['adresse'], FILTER_SANITIZE_STRING);
    $country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);
    $testTva = ( (strlen($_POST["tvanumber"]) >= 4) && (strlen($_POST["tvanumber"]) <= 14) && (filter_var($_POST['tvanumber'], FILTER_SANITIZE_STRING) !== FALSE) ) ? $tvanumber = filter_var($_POST['tvanumber'], FILTER_SANITIZE_STRING) : $message .= "le numero de tva est invalide";
    $testphone = ( ($_POST['telephonesociete'] < 10000000000) && (filter_var(filter_var($_POST['telephonesociete'], FILTER_SANITIZE_NUMBER_INT), FILTER_VALIDATE_INT) !== FALSE) ? $telephonesociete = filter_var(filter_var($_POST['telephonesociete'], FILTER_SANITIZE_NUMBER_INT), FILTER_VALIDATE_INT): $message .= " numero de telephone non valide" );
   	$type = $_POST['type'];
   	$relation = $_POST['relation'];
    $idsociete = $lastSociete->fetch();
    $idsociete2 = $idsociete['idsociete'];
    $idsociete3 = $idsociete2 + 1;
    if ($message == '') {
      $createSociete->execute();
  	  $createType->execute();
      $message = 'société ajoutée avec succès.';
    }
  } else {
    $message = "Vous ne pouvez pas ajouter de contact";
  }
}
?>
