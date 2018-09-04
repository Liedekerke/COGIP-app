<?php
session_start();
require "controllers/partials/partial.control.php";
sessionCheck();


if (isset($_POST['delete'])) {
  delete("factures", "idfactures");
}
if (isset($_POST['delete2'])) {
  delete("societe", "idsociete");
}
if (isset($_POST['delete3'])) {
  delete("personnes", "idpersonnes");
}
require "models/dashboard.model.php";
require "views/dashboard.view.php";



 ?>
