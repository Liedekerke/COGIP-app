<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <nav class="navbar is-light" role="navigation">
        <div class="navbar-menu">
            <a class="navbar-item" href="?page=dashboard" title="">Dashboard</a>
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link" href="?page=societe" title="">Sociétés</a>
              <div class="navbar-dropdown is-boxed">
                <a class="navabar-item" href="?page=societe">Toutes</a>
                <a class="navabar-item" href="?page=fournisseurs">Fournisseurs</a>
                <a class="navabar-item" href="?page=clients">Clients</a>
              </div>
            </div>
            <a class="navbar-item" href="?page=factures" title="">Factures</a>
            <a class="navbar-item" href="?page=annuaire" title="">Annuaire</a>
            <div class="navbar-end">
              <a class="navbar-item" href="">Login</a>
            </div>
        </div>
      </nav>
    </header>
    <section class="hero is-medium is-info is-bold">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            Bienvenue sur votre dashboard
          </h1>
          <h2 class="subtitle">
            Ci-dessous, vos dernières données
          </h2>
        </div>
      </div>
    </section>
    <div class="tables">
      <table>
        <thead>
          <th>ID</th>
          <th>Date</th>
          <th>Motif prestations</th>
          <th>Nom de societe</th>
        </thead>
        <tbody>
         <?php while ($donnee = $displayLatestFactures->fetch()) { ?>
           <tr>
             <td><a href="?page=detailfacture&factures=<?php echo $donnee['idfactures'] ?>"><?php echo $donnee['idfactures'] ?></a></td>
             <td><?php echo $donnee['datefacture'] ?></td>
             <td><?php echo $donnee['prestationmotif'] ?></td>
             <td><a href="?page=detailsociete&societe=<?php echo $donnee['idsociete'] ?>"><?php echo $donnee['socialname'] ?></a></td>
             <td>
               <form class="" action="" method="post">
                 <input type="hidden" name="iddelete" value="<?php echo $donneed['idfactures'] ?>">
                 <button type="submit" name="delete"><i class="fas fa-trash-alt"></i></button>
               </form>
             </td>
           </tr>
         <?php } ?>
        </tbody>
      </table>
      <table>
        <thead>
          <th>id</th>
          <th>social name</th>
          <th>adresse</th>
          <th>country</th>
          <th>tva number</th>
          <th>phone number</th>
        </thead>
        <tbody>
          <?php while ($donneefourth = $displayLatestSocieties->fetch()) { ?>
            <tr>
              <td><?php echo $donneefourth['idsociete'] ?></td>
              <td><a href="?page=detailsociete&societe=<?php echo $donneefourth['idsociete'] ?>"><?php echo $donneefourth['socialname'] ?></a></td>
              <td><?php echo $donneefourth['adresse'] ?></td>
              <td><?php echo $donneefourth['country'] ?></td>
              <td><?php echo $donneefourth['tvanumber'] ?></td>
              <td><?php echo $donneefourth['telephonesociete'] ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <table>
        <thead>
          <th>id</th>
          <th>name</th>
          <th>first name</th>
          <th>phone number</th>
          <th>email</th>
          <th>nom de société</th>
        </thead>
        <tbody>
          <?php while ($donneethird = $displayLatestPeople->fetch()) { ?>
          <tr>
            <td><?php echo $donneethird['idpersonnes'] ?></td>
            <td><a href="detailcontact.php?annuaire=<?php echo $donneethird['idpersonnes'] ?>"><?php echo $donneethird['name'] ?></a></td>
            <td><?php echo $donneethird['firstname'] ?></td>
            <td><?php echo $donneethird['personnesphone'] ?></td>
            <td><?php echo $donneethird['email'] ?></td>
            <td><a href="?page=detailsociete&societe=<?php echo $donneethird['idsociete'] ?>"><?php echo $donneethird['socialname'] ?></a></td>
          </tr>
         <?php } ?>
        </tbody>
      </table>   
    </div>
  </body>
</html>
