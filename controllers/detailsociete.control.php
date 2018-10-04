<?php
$title = "detail de société";
require "views/partials/head.view.php";
  session_start();
  require "controllers/partials/partial.control.php";
  sessionCheck();
  require "models/detailsociete.model.php";
  require "views/detailsociete.view.php";
 ?>
