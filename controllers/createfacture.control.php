<?php
session_start();
require "controllers/partials/partial.control.php";
sessionCheck();
require "models/createfacture.model.php";
require "views/createfacture.view.php";
 ?>
