<?php
$createcontact = $dbh->prepare('INSERT INTO personnes (name, firstname, personnesphone, email, idsociete) VALUES (:name, :firstname, :personnesphone, :email, :idsociete)');
$createcontact->bindParam(':idfactures', $idfactures);
 ?>
