<?php
  if (!isset($_GET['page'])) {
    $_GET['page'] = '';
  }
  switch ($_GET['page']) {
    case 'detailfacture':
      require "controllers/detailfacture.control.php";
      break;
    case 'detailsociete':
      require "controllers/detailsociete.control.php";
      break;
    case 'detailcontact':
      require "controllers/detailcontact.control.php";
      break;
    case 'societe':
      require "controllers/societe.control.php";
      break;
    case 'factures':
      require "controllers/factures.control.php";
      break;
    case 'annuaire':
      require "controllers/annuaire.control.php";
      break;
    case 'createcontact':
      require "controllers/createcontact.control.php";
      break;
    case 'clients':
      require "controllers/clients.control.php";
      break;
    case 'fournisseurs':
      require "controllers/fournisseurs.control.php";
      break;
    case 'newfacture':
      require "controllers/createfacture.control.php";
      break;
    case 'newsociete':
      require "controllers/createsociete.control.php";
      break;
    case 'dashboard':
      require "controllers/dashboard.control.php";
      break;
    case 'onlineusers':
      require "controllers/user.control.php";
      break;
    case '':
    case 'login':
    case 'logintrue':
      require "controllers/login.control.php";
      break;
    default:
      require "controllers/404.control.php";
      break;
  }

  require 'views/partials/footer.view.php';
 ?>
