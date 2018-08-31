<?php
$createfacture = $dbh->prepare('INSERT INTO factures (datefacture, prestationmotif, idsociete, idpersonnes) VALUES (:datefacture, :prestationmotif, :idsociete, :idpersonnes)');
$createfacture->bindParam()
 ?>
