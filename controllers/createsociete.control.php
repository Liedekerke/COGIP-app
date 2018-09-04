<?php
session_start();
require "controllers/partials/partial.control.php";
sessionCheck();
require "models/createsociete.model.php";
require "views/createsociete.view.php";
 ?>
