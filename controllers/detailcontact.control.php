<?php
$title = "detail de contact";
require "views/partials/head.view.php";
session_start();
require "controllers/partials/partial.control.php";
sessionCheck();
require "models/detailcontact.model.php";
require "views/detailcontact.view.php";
?>
