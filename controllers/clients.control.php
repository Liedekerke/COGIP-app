<?php
session_start();
require "controllers/partials/partial.control.php";
sessionCheck();
$errorDelPersonnes = '';

if (isset($_POST['delete3'])) {
  try {
    delete("personnes", "idpersonnes");
  } catch (\Exception $e) {
    $errorDelPersonnes = "la suppression ne c'est pas faite correctement";
  }
}

require "models/clients.model.php";
require "views/clients.view.php";
 ?>
