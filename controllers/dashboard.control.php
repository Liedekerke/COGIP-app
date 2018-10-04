<?php
session_start();
require "controllers/partials/partial.control.php";
sessionCheck();
$errorDelFactures = '';
$errorDelSociete = '';
$errorDelPersonnes = '';
if (isset($_POST['delete'])) {
  try {
    delete("factures", "idfactures");
  } catch (\Exception $e) {
    $errorDelFactures = "la suppression ne s'est pas faite correctement";
  }
}
if (isset($_POST['delete2'])) {
  try {
    delete("societe", "idsociete");
  } catch (\Exception $e) {
    $errorDelSociete = "la suppression ne s'est pas faite correctement";
  }
}
if (isset($_POST['delete3'])) {
  try {
    delete("personnes", "idpersonnes");
  } catch (\Exception $e) {
    $errorDelPersonnes = "la suppression ne s'est pas faite correctement";
  }
}
require "models/dashboard.model.php";
require "views/dashboard.view.php";
 ?>
