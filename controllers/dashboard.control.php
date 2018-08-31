<?php

if (isset($_POST['delete'])) {
  delete("factures", "idfactures");
}
require "models/dashboard.model.php";
require "views/dashboard.view.php";

 ?>
