<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <meta charset="utf-8">
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <title>COGIP - App</title>
  </head>
  <body>
  	<header>
      <nav class="navbar is-fixed-top" role="navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="https://fr.wikipedia.org/wiki/COGIP">
            <img src="assets/img/cogip.png" alt="COGIP" width="50" height="28">
          </a>
          <a role="button" class="navbar-burger" aria-label="menu" data-target="navMenu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
        <div class="navbar-menu" id="navMenu">
            <a class="navbar-item" href="?page=dashboard" title="">Dashboard</a>
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link" href="?page=societe" title="">Sociétés</a>
              <div class="navbar-dropdown is-boxed">
                <a class="navbar-item" href="?page=societe">Toutes</a>
                <a class="navbar-item" href="?page=fournisseurs">Fournisseurs</a>
                <a class="navbar-item" href="?page=clients">Clients</a>
              </div>
            </div>
            <a class="navbar-item" href="?page=factures" title="">Factures</a>
            <a class="navbar-item" href="?page=annuaire" title="">Annuaire</a>
            <div class="navbar-end">
              <a class="navbar-item" href="?page=">Logout<i class="fas fa-user-lock"></i></a>
            </div>
        </div>
      </nav>
    </header>
