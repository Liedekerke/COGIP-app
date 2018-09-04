<?php
$users = $dbh->query('SELECT information_schema.PROCESSLIST.User, mysql.roles_mapping.Role FROM information_schema.PROCESSLIST LEFT JOIN mysql.roles_mapping ON information_schema.PROCESSLIST.User = mysql.roles_mapping.User');


 ?>
