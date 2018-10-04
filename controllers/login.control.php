<?php
$title = "page de login";
require "views/partials/head.view.php";
session_start();
require "controllers/partials/partial.control.php";
require 'models/login.model.php';
require 'views/login.view.php';
?>
