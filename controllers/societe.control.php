<?php
require "controllers/partials/partial.control.php";
if (isset($_POST['delete2'])) {
  delete("societe", "idsociete");
 }

require "models/societe.model.php";
require "views/societe.view.php";
 ?>
