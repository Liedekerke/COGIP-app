<?php
  require "controllers/partials/partial.control.php";

  switch ($_GET['page']) {
    case 'detailfacture':
      require "controllers/detailfacture.control.php";
      break;
    case 'detailsociete':
      require "controllers/detailsociete.control.php";
      break;
    case 'annuaire':
      require "controllers/annuaire.control.php";
      break;
    case 'clients':
      require "controllers/clients.control.php";
      break;

    default:
      require "controllers/dashboard.control.php";
      break;
  }
 ?>
