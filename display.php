<?php

/* Connect to a MySQL database using driver invocation */
$dsn = getenv('DSN');
$user = getenv('USER');
$password = getenv('PASSWORD');

try {
    $dbh = new PDO($dsn, $user, $password);
    $displayLatestFactures = $dbh->query('SELECT * FROM ( SELECT * FROM factures ORDER BY idfactures DESC LIMIT 5 ) sub  ORDER BY datefacture DESC');

    $displayLatestCredit = $dbh->query('SELECT * FROM notecredit ORDER BY datenotecredit DESC LIMIT 0,5');

    $displayLatestPeople = $dbh->query('SELECT * FROM personnes ORDER BY idpersonnes DESC LIMIT 0,5');

    $displayLatestSocieties = $dbh->query('SELECT * FROM societe ORDER BY idsociete DESC LIMIT 0,5');

    $displaySocietiesAlphab = $dbh->query('SELECT socialstatus, idsociete FROM societe ORDER BY socialstatus ASC');

    $displayFacturesAlphab = $dbh->query('SELECT idfactures, datefacture FROM factures ORDER BY datefacture DESC');

    $displayAnnuaireAlphab = $dbh->query('SELECT name, firstname FROM personnes ORDER BY name, firstname');

    $displayDetailsAnnuaire = $dbh->prepare('SELECT personnes.name, personnes.firstname FROM personnes SELF JOIN personnes ON ouioui ');

    $displayDetailsSocieties = $dbh->prepare('SELECT societe.socialstatus, societe.adresse, societe.telephonesociete, societe.tvanumber, societe.account, devis.iddevis, boncommande.idboncommande, factures.idfactures, notecredit.idnotecredit, personnes.name, personnes.firstname, type.type FROM societe left JOIN factures ON societe.idsociete = factures.idfactures LEFT JOIN personnes ON societe.idsociete = personnes.idsociete LEFT JOIN notecredit ON factures.idfactures = notecredit.idfactures LEFT JOIN type ON societe.idsociete = type.idsociete LEFT JOIN boncommande ON factures.idfactures = boncommande.idfactures LEFT JOIN devis ON boncommande.idboncommande = devis.idboncommande WHERE societe.idsociete = :id');

    $displayDetailsSocieties->bindParam(':id', $id);
    if (isset($_GET['societe'])) {
      $id = $_GET['societe'];
      $displayDetailsSocieties->execute();
    }

    $sqlDetailsFactures = "SELECT factures.idfactures, factures.datefacture, boncommande.idboncommande, societe.socialstatus, type.relation, societe.account, personnes.name, personnes.firstname \n"

    . "FROM factures\n"

    . "LEFT JOIN boncommande ON factures.idfactures = boncommande.idfactures\n"

    . "LEFT JOIN societe ON factures.idsociete = societe.idsociete\n"

    . "LEFT JOIN type ON societe.idsociete = type.idsociete\n"

    . "LEFT JOIN personnes ON factures.idpersonnes = personnes.idpersonnes"

    . "WHERE factures.idfactures = :idfactures";

    $displayDetailsFactures = $dbh->prepare($sqlDetailsFactures);
    $displayDetailsFactures->bindParam(':idfactures', $idfactures);
    if (isset($_GET['factures'])) {
      $idfactures = $_GET['factures'];
      $displayDetailsFactures->execute();
    }

    } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>
