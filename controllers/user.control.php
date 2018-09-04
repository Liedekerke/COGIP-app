<?php
session_start();
require "controllers/partials/partial.control.php";
sessionCheck();
require 'models/user.model.php';
require 'views/user.view.php';

 ?>
