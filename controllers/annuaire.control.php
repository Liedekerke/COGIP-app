<?php
$title = "liste des contacts";
require "views/partials/head.view.php";
session_start();
require "controllers/partials/partial.control.php";
sessionCheck();
require "models/annuaire.model.php";
require "views/annuaire.view.php";
 ?>
