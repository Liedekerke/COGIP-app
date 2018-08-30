<?php

//common model
/* Connect to a MySQL database using driver invocation */
$dsn = getenv('DSN');
$user = getenv('USER');
$password = getenv('PASSWORD');

function testselect($par1, $par2) {
  if ($par1 == $par2) {
    echo "selected";
  }
}

try {
    $dbh = new PDO($dsn, $user, $password);

    //dashboard model
    $displayLatestFactures = $dbh->query('SELECT * FROM factures LEFT JOIN societe ON factures.idsociete = societe.idsociete ORDER BY datefacture DESC LIMIT 0,5');
    $displayLatestCredit = $dbh->query('SELECT * FROM notecredit ORDER BY datenotecredit DESC LIMIT 0,5');
    $displayLatestPeople = $dbh->query('SELECT * FROM personnes LEFT JOIN societe ON personnes.idsociete = societe.idsociete ORDER BY idpersonnes DESC LIMIT 0,5');
    $displayLatestSocieties = $dbh->query('SELECT * FROM societe ORDER BY idsociete DESC LIMIT 0,5');

    //societe model
    $displaySocietiesAlphab = $dbh->query('SELECT socialname, idsociete FROM societe ORDER BY socialname ASC');
    //factures model
    $displayFacturesAlphab = $dbh->query('SELECT idfactures, datefacture FROM factures ORDER BY datefacture DESC');
    //annuaire model
    $displayAnnuaireAlphab = $dbh->query('SELECT name, firstname, idpersonnes FROM personnes ORDER BY name ASC');
    //fournisseurs model
    $displaySocietiesSuppliers = $dbh->query("SELECT socialname FROM societe LEFT JOIN type ON societe.idsociete = type.idsociete WHERE type.relation = 'fournisseur'");
    //clients model
    $displaySocietiesCustomers = $dbh->query("SELECT socialname FROM societe LEFT JOIN type ON societe.idsociete = type.idsociete WHERE type.relation = 'client'");

    //detailsociete model
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

    //detailfacture model
    if (isset($_GET['factures'])) {
      $idfactures = $_GET['factures'];
      if (isset($_POST['update'])) {
        $updateDetailFacture = $dbh->prepare('UPDATE factures SET datefacture = :datefacture, prestationmotif = :prestationmotif, idsociete = :idsociete, idpersonnes = :idpersonnes WHERE idfactures = :idfactures');
        $updateDetailFacture->bindParam(':datefacture', $datefacture);
        $updateDetailFacture->bindParam(':prestationmotif', $prestationmotif);
        $updateDetailFacture->bindParam(':idsociete', $idsociete);
        $updateDetailFacture->bindParam(':idpersonnes', $idpersonnes);
        $updateDetailFacture->bindParam(':idfactures', $idfactures);
        $datefacture = $_POST['datefacture'];
        $prestationmotif = $_POST['prestationmotif'];
        $idsociete = $_POST['idsociete'];
        $idpersonnes = $_POST['idpersonnes'];
        $updateDetailFacture->execute();
      }
      $displayDetailsFactures = $dbh->prepare("SELECT * FROM factures LEFT JOIN type ON factures.idsociete = type.idsociete WHERE factures.idfactures = :idfactures");
      $displayDetailsFactures->bindParam(':idfactures', $idfactures);


      $displayDetailsFactures->execute();

      $displayDetailsFactures2 = $dbh->query("SELECT socialname, idsociete FROM societe");
      $displayDetailsFactures3 = $dbh->query("SELECT idpersonnes, name, firstname FROM personnes");


    }

    //detail contact model
    $displayDetailsPersonnes = $dbh->prepare('SELECT personnes.name, personnes.firstname, personnes.personnesphone, personnes.email FROM personnes WHERE personnes.idpersonnes = :idpersonnes');
    $displayDetailsPersonnes2 = $dbh->prepare('SELECT * FROM factures WHERE factures.idpersonnes = :idpersonnes');
    $displayDetailsPersonnes3 = $dbh->prepare('SELECT socialname, adresse FROM societe LEFT JOIN personnes ON societe.idsociete = personnes.idsociete WHERE personnes.idpersonnes = :idpersonnes');

    $displayDetailsPersonnes->bindParam(':idpersonnes', $idpersonnes);
    $displayDetailsPersonnes2->bindParam(':idpersonnes', $idpersonnes);
    $displayDetailsPersonnes3->bindParam(':idpersonnes', $idpersonnes);

    if (isset($_GET['annuaire'])) {
      $idpersonnes = $_GET['annuaire'];
      $displayDetailsPersonnes->execute();
      $displayDetailsPersonnes2->execute();
      $displayDetailsPersonnes3->execute();
    }

    if (isset($_POST['delete'])) {
      $deleteFacture = $dbh->prepare("DELETE FROM factures WHERE idfactures = :idfactures");
      $deleteFacture->bindParam(':idfactures', $idfactures);
      $idfactures = $_POST['delete'];
      $deleteFacture->execute();
    }

    } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>
