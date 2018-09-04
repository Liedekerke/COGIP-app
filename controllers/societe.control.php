<?php
session_start();
require "controllers/partials/partial.control.php";
sessionCheck();
if (isset($_POST['delete2'])) {
  delete("societe", "idsociete");
 }

require "models/societe.model.php";
require "views/societe.view.php";
 ?>
