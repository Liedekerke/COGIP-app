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

  if (isset($_POST['update'])) {
    $datefacture = $_POST['datefacture'];
    $prestationmotif = filter_var($_POST['prestationmotif'], FILTER_SANITIZE_STRING);
    $idsociete = $_POST['idsociete'];
    $idpersonnes = $_POST['idpersonnes'];
    $updateDetailFacture->execute();
  }
  $displayDetailsFactures->execute();


 ?>
