<?php
session_start();
require "controllers/partials/partial.control.php";
sessionCheck();
require "models/detailfacture.model.php";
require "views/detailfacture.view.php";
 ?>
