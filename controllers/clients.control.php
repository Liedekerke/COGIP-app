<?php
session_start();
require "controllers/partials/partial.control.php";
sessionCheck();

if (isset($_POST['delete3'])) {
  delete("personnes", "idpersonnes");
}

require "models/clients.model.php";
require "views/clients.view.php";
 ?>
