<?php
$displaySocietiesCustomers = $dbh->query("SELECT societe.idsociete, societe.socialname FROM societe LEFT JOIN type ON societe.idsociete = type.idsociete WHERE type.relation = 'client'");
 ?>
