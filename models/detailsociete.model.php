<?php
  $updateDetailsSociety = $dbh->prepare('UPDATE societe SET socialname = :socialname, adresse = :adresse, telephonesociete = :telephonesociete, tvanumber = :tvanumber WHERE idsociete = :id');
  $updateDetailsSociety->bindParam(':socialname', $socialname);
  $updateDetailsSociety->bindParam(':adresse', $adresse);
  $updateDetailsSociety->bindParam(':telephonesociete', $telephonesociete);
  $updateDetailsSociety->bindParam(':tvanumber', $tvanumber);
  $updateDetailsSociety->bindParam(':id', $id);

  $displayDetailsSocieties = $dbh->prepare('SELECT * FROM societe WHERE societe.idsociete = :id');
  $displayDetailsSocieties2 = $dbh->prepare('SELECT * FROM personnes WHERE personnes.idsociete = :id');
  $displayDetailsSocieties3 = $dbh->prepare('SELECT * FROM factures WHERE factures.idsociete = :id');

  $displayDetailsSocieties->bindParam(':id', $id);
  $displayDetailsSocieties2->bindParam(':id', $id);
  $displayDetailsSocieties3->bindParam(':id', $id);

  $id = $_GET['societe'];

  if(isset($_POST['update'])) {
    $socialname = filter_var($_POST['socialname'], FILTER_SANITIZE_STRING);
    $adresse = filter_var($_POST['adresse'], FILTER_SANITIZE_STRING);
    $telephonesociete = filter_var(filter_var($_POST['telephonesociete'], FILTER_SANITIZE_NUMBER_INT), FILTER_VALIDATE_INT);
    $tvanumber = filter_var(filter_var($_POST['tvanumber'], FILTER_SANITIZE_NUMBER_INT), FILTER_VALIDATE_INT);
    $updateDetailsSociety->execute();
  }
  
  $displayDetailsSocieties->execute();
  $displayDetailsSocieties2->execute();
  $displayDetailsSocieties3->execute();
 ?>
