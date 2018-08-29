<?php

/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=cgpi;host=localhost';
$user = 'root';
$password = '12345678';

try {
    $dbh = new PDO($dsn, $user, $password);
    $displayLatestFactures = $dbh->query('SELECT * FROM ( SELECT * FROM factures ORDER BY idfactures DESC LIMIT 5 ) sub  ORDER BY datefacture DESC');

    $displayLatestCredit = $dbh->query('SELECT * FROM notecredit ORDER BY datenotecredit DESC LIMIT 0,5');

    $displayLatestPeople = $dbh->query('SELECT * FROM personnes ORDER BY idpersonnes DESC LIMIT 0,5');

    $displayLatestSocieties = $dbh->query('SELECT * FROM societe ORDER BY idsociete DESC LIMIT 0,5');

    $displaySocietiesAlphab = $dbh->query('SELECT socialname, idsociete FROM societe ORDER BY socialname ASC');

    $displayFacturesAlphab = $dbh->query('SELECT idfactures, datefacture FROM factures ORDER BY datefacture DESC');

    $displayAnnuaireAlphab = $dbh->query('SELECT name, firstname, idpersonnes FROM personnes ORDER BY name ASC');

    $displayDetailsSocieties = $dbh->prepare('SELECT societe.socialstatus, societe.adresse, societe.telephonesociete, societe.tvanumber, societe.account, devis.iddevis, boncommande.idboncommande, factures.idfactures, notecredit.idnotecredit, personnes.name, personnes.firstname, type.type FROM societe left JOIN factures ON societe.idsociete = factures.idfactures LEFT JOIN personnes ON societe.idsociete = personnes.idsociete LEFT JOIN notecredit ON factures.idfactures = notecredit.idfactures LEFT JOIN type ON societe.idsociete = type.idsociete LEFT JOIN boncommande ON factures.idfactures = boncommande.idfactures LEFT JOIN devis ON boncommande.idboncommande = devis.idboncommande WHERE societe.idsociete = :id');
    $displaySocietiesSuppliers = $dbh->query("SELECT socialname FROM societe LEFT JOIN type ON societe.idsociete = type.idsociete WHERE type.relation = 'fournisseurs'");

    $displaySocietiesCustomers = $dbh->query("SELECT socialname FROM societe LEFT JOIN type ON societe.idsociete = type.idsociete WHERE type.relation = 'clients'");

    $displayDetailsSocieties = $dbh->prepare('SELECT societe.socialname, societe.adresse, societe.telephonesociete, societe.tvanumber, societe.account, devis.iddevis, boncommande.idboncommande, factures.idfactures, notecredit.idnotecredit, personnes.name, personnes.firstname, type.type FROM societe left JOIN factures ON societe.idsociete = factures.idfactures LEFT JOIN personnes ON societe.idsociete = personnes.idsociete LEFT JOIN notecredit ON factures.idfactures = notecredit.idfactures LEFT JOIN type ON societe.idsociete = type.idsociete LEFT JOIN boncommande ON factures.idfactures = boncommande.idfactures LEFT JOIN devis ON boncommande.idboncommande = devis.idboncommande WHERE societe.idsociete = :id');

    $displayDetailsSocieties->bindParam(':id', $id);
    if (isset($_GET['societe'])) {
      $id = $_GET['societe'];
      $displayDetailsSocieties->execute();
    }

    $sqlDetailsFactures = "SELECT factures.idfactures, factures.datefacture, boncommande.idboncommande, societe.socialname, type.relation, societe.account, personnes.name, personnes.firstname \n"

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

    $displayDetailsPersonnes = $dbh->prepare('SELECT personnes.name, personnes.firstname, personnes.personnesphone, personnes.email, societe.socialstatus, societe.adresse, factures.idfactures FROM personnes LEFT JOIN societe ON personnes.idsociete = societe.idsociete LEFT JOIN factures ON personnes.idpersonnes = factures.idpersonnes WHERE personnes.idpersonnes = :idpersonnes');
    $displayDetailsPersonnes->bindParam(':idpersonnes', $idpersonnes);
    if (isset($_GET['personnes'])) {
      $idpersonnes = $_GET['annuaire'];
      $displayDetailsPersonnes->execute();
    }

    } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>
