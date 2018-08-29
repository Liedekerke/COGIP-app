<?php

/* Connect to a MySQL database using driver invocation */
$dsn = getenv('DSN');
$user = getenv('USER');
$password = getenv('PASSWORD');

try {
    $dbh = new PDO($dsn, $user, $password);
    $displayLatestFactures = $dbh->query('SELECT * FROM factures LEFT JOIN societe ON factures.idsociete = societe.idsociete ORDER BY datefacture DESC LIMIT 0,5');

    $displayLatestCredit = $dbh->query('SELECT * FROM notecredit ORDER BY datenotecredit DESC LIMIT 0,5');

    $displayLatestPeople = $dbh->query('SELECT * FROM personnes LEFT JOIN societe ON personnes.idsociete = societe.idsociete ORDER BY idpersonnes DESC LIMIT 0,5');

    $displayLatestSocieties = $dbh->query('SELECT * FROM societe ORDER BY idsociete DESC LIMIT 0,5');

    $displaySocietiesAlphab = $dbh->query('SELECT socialname, idsociete FROM societe ORDER BY socialname ASC');

    $displayFacturesAlphab = $dbh->query('SELECT idfactures, datefacture FROM factures ORDER BY datefacture DESC');

    $displayAnnuaireAlphab = $dbh->query('SELECT name, firstname, idpersonnes FROM personnes ORDER BY name ASC');

    $displayDetailsSocieties = $dbh->prepare('SELECT societe.socialstatus, societe.adresse, societe.telephonesociete, societe.tvanumber, societe.account, devis.iddevis, boncommande.idboncommande, factures.idfactures, notecredit.idnotecredit, personnes.name, personnes.firstname, type.type FROM societe left JOIN factures ON societe.idsociete = factures.idfactures LEFT JOIN personnes ON societe.idsociete = personnes.idsociete LEFT JOIN notecredit ON factures.idfactures = notecredit.idfactures LEFT JOIN type ON societe.idsociete = type.idsociete LEFT JOIN boncommande ON factures.idfactures = boncommande.idfactures LEFT JOIN devis ON boncommande.idboncommande = devis.idboncommande WHERE societe.idsociete = :id');
    $displaySocietiesSuppliers = $dbh->query("SELECT socialname FROM societe LEFT JOIN type ON societe.idsociete = type.idsociete WHERE type.relation = 'fournisseur'");

    $displaySocietiesCustomers = $dbh->query("SELECT socialname FROM societe LEFT JOIN type ON societe.idsociete = type.idsociete WHERE type.relation = 'client'");

    // $displayDetailsSocieties = $dbh->prepare('SELECT societe.socialname, societe.adresse, societe.telephonesociete, societe.tvanumber, factures.idfactures, personnes.name, personnes.firstname FROM societe left JOIN factures ON societe.idsociete = factures.idsociete LEFT JOIN personnes ON societe.idsociete = personnes.idsociete WHERE societe.idsociete = :id');

    $displayDetailsSocieties = $dbh->prepare('SELECT * FROM societe WHERE societe.idsociete = :id');
    $displayDetailsSocieties2 = $dbh->prepare('SELECT * FROM personnes WHERE personnes.idsociete = :id');
    $displayDetailsSocieties3 = $dbh->prepare('SELECT * FROM factures WHERE factures.idsociete = :id');

    $displayDetailsSocieties->bindParam(':id', $id);
    $displayDetailsSocieties2->bindParam(':id', $id);
    $displayDetailsSocieties3->bindParam(':id', $id);

    if (isset($_GET['societe'])) {
      $id = $_GET['societe'];
      $displayDetailsSocieties->execute();
      $displayDetailsSocieties2->execute();
      $displayDetailsSocieties3->execute();
    }

    $sqlDetailsFactures = "SELECT factures.idfactures, factures.datefacture, societe.socialname, societe.idsociete, type.relation, personnes.name, personnes.firstname FROM factures LEFT JOIN societe ON factures.idsociete = societe.idsociete LEFT JOIN type ON societe.idsociete = type.idsociete LEFT JOIN personnes ON factures.idpersonnes = personnes.idpersonnes WHERE factures.idfactures = :idfactures";

    $displayDetailsFactures = $dbh->prepare($sqlDetailsFactures);
    $displayDetailsFactures->bindParam(':idfactures', $idfactures);
    // $displayDetailsFactures->execute();
    if (isset($_GET['factures'])) {
      $idfactures = $_GET['factures'];
      $displayDetailsFactures->execute();
    }

    $displayDetailsPersonnes = $dbh->prepare('SELECT personnes.name, personnes.firstname, personnes.personnesphone, personnes.email, societe.socialname, societe.adresse FROM personnes LEFT JOIN societe ON personnes.idsociete = societe.idsociete WHERE personnes.idpersonnes = :idpersonnes');
    $displayDetailsPersonnes2 = $dbh->prepare('SELECT * FROM factures WHERE factures.idpersonnes = :idpersonnes');
    $displayDetailsPersonnes->bindParam(':idpersonnes', $idpersonnes);
    $displayDetailsPersonnes2->bindParam(':idpersonnes', $idpersonnes);
    if (isset($_GET['annuaire'])) {
      $idpersonnes = $_GET['annuaire'];
      $displayDetailsPersonnes->execute();
      $displayDetailsPersonnes2->execute();
    }

    } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>
