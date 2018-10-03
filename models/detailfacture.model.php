<?php
  $updateDetailFacture = $dbh->prepare('UPDATE factures SET datefacture = :datefacture, prestationmotif = :prestationmotif, idsociete = :idsociete, idpersonnes = :idpersonnes WHERE idfactures = :idfactures');
  $updateDetailFacture->bindParam(':datefacture', $datefacture);
  $updateDetailFacture->bindParam(':prestationmotif', $prestationmotif);
  $updateDetailFacture->bindParam(':idsociete', $idsociete);
  $updateDetailFacture->bindParam(':idpersonnes', $idpersonnes);
  $updateDetailFacture->bindParam(':idfactures', $idfactures);
  $displayDetailsFactures = $dbh->prepare("SELECT * FROM factures LEFT JOIN type ON factures.idsociete = type.idsociete WHERE factures.idfactures = :idfactures");
  $displayDetailsFactures->bindParam(':idfactures', $idfactures);
  $displayDetailsFactures2 = $dbh->query("SELECT socialname, idsociete FROM societe");
  $displayDetailsFactures3 = $dbh->query("SELECT idpersonnes, name, firstname FROM personnes");

  $idfactures = $_GET['factures'];
  $message = '';

  if (isset($_POST['update'])) {
    $datefacture = filter_var(preg_replace("([^0-9/] | [^0-9-])","",$_POST['datefacture']));
    $prestationmotif = filter_var($_POST['prestationmotif'], FILTER_SANITIZE_STRING);
    $idsociete = filter_var(filter_var($_POST['idsociete'], FILTER_SANITIZE_NUMBER_INT), FILTER_SANITIZE_NUMBER_INT);
    $idpersonnes = filter_var(filter_var($_POST['idpersonnes'], FILTER_SANITIZE_NUMBER_INT), FILTER_SANITIZE_NUMBER_INT);
    $updateDetailFacture->execute();
    $message = 'facture modifiée avec succès';
  }
  $displayDetailsFactures->execute();


 ?>
