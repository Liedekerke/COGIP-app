<?php
  session_start();
  require "controllers/partials/partial.control.php";
  sessionCheck();

if (isset($_POST['delete'])) {
  delete("factures", "idfactures");
}

require "models/factures.model.php";
require "views/factures.view.php";

?>
