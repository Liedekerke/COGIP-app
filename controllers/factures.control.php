<?php
$title = "liste des factures";
require "views/partials/head.view.php";
  session_start();
  require "controllers/partials/partial.control.php";
  sessionCheck();
$errorDelFactures = '';
if (isset($_POST['delete'])) {
  try {
    delete("factures", "idfactures");
  } catch (\Exception $e) {
    $errorDelFactures = "la suppression ne c'est pas faite correctement";
  }
}
require "models/factures.model.php";
require "views/factures.view.php";
?>
