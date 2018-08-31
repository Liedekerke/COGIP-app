<?php
$displaySocietiesSuppliers = $dbh->query("SELECT socialname, societe.idsociete FROM societe LEFT JOIN type ON societe.idsociete = type.idsociete WHERE type.relation = 'fournisseur'");
 ?>
