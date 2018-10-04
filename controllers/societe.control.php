<?php
session_start();
require "controllers/partials/partial.control.php";
sessionCheck();
$errorDelSociete = '';
if (isset($_POST['delete2'])) {
  try {
    delete("societe", "idsociete");
  } catch (\Exception $e) {
    $errorDelSociete = "la suppression ne c'est pas faite correctement";
  }
 }

require "models/societe.model.php";
require "views/societe.view.php";
 ?>
