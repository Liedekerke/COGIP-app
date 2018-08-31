<?php
$displaySocietiesCustomers = $dbh->query("SELECT societe.socialname, societe.idsociete FROM societe LEFT JOIN type ON societe.idsociete = type.idsociete WHERE type.relation = 'client'");
 ?>
