<?php
$title = "liste des fournisseurs";
require "views/partials/head.view.php";
session_start();
require "controllers/partials/partial.control.php";
sessionCheck();
require "models/fournisseurs.model.php";
require "views/fournisseurs.view.php";
 ?>
