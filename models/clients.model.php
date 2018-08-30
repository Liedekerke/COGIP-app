<?php
$displaySocietiesCustomers = $dbh->query("SELECT socialname FROM societe LEFT JOIN type ON societe.idsociete = type.idsociete WHERE type.relation = 'client'");
 ?>
