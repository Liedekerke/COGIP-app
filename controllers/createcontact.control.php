<?php
session_start();
require "controllers/partials/partial.control.php";
sessionCheck();
require "models/createcontact.model.php";
require "views/createcontact.view.php";
 ?>
