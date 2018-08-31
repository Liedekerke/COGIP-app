<?php
$displayLatestFactures = $dbh->query('SELECT * FROM factures LEFT JOIN societe ON factures.idsociete = societe.idsociete ORDER BY datefacture DESC LIMIT 0,5');
$displayLatestPeople = $dbh->query('SELECT * FROM personnes LEFT JOIN societe ON personnes.idsociete = societe.idsociete ORDER BY idpersonnes DESC LIMIT 0,5');
$displayLatestSocieties = $dbh->query('SELECT * FROM societe ORDER BY idsociete DESC LIMIT 0,5');
 ?>
