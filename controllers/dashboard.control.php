<?php
require "models/dashboard.model.php";

if (isset($_POST['delete'])) {
  delete($database);
}

require "views/dashboard.view.php";

 ?>
