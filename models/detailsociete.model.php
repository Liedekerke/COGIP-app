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
    $socialname = $_POST['socialname'];
    $adresse = $_POST['adresse'];
    $telephonesociete = $_POST['telephonesociete'];
    $tvanumber = $_POST['tvanumber'];
    $updateDetailsSociety->execute();
  }
  $displayDetailsSocieties->execute();
  $displayDetailsSocieties2->execute();
  $displayDetailsSocieties3->execute();
 ?>
