
  <section class="hero is-medium is-info">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
          Bienvenue sur votre dashboard
        </h1>
      </div>
    </div>
  </section>
   <main>
      <div class="tables">
        <div class="box">
          <h2 class="subtitle is-size-3 has-text-info has-text-weight-bold">Les dernières factures</h2>
          <table>
            <thead>
              <th>id</th>
              <th>date</th>
              <th>motif prestations</th>
              <th>nom société</th>
              <th></th>
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
                     <input type="hidden" name="iddelete" value="<?php echo $donnee['idfactures'] ?>">
                     <button class="button is-info" type="submit" name="delete"><i class="fas fa-trash-alt"></i></button>
                   </form>
                 </td>
               </tr>
             <?php } ?>
            </tbody>
          </table>
        </div>
        <button class="button is-info create" type="button" name="create"> <a href="?page=newfacture">Nouvelle facture</a> </button>
        <div class="box">
          <h2 class="subtitle is-size-3 has-text-info has-text-weight-bold">Les dernières sociétés</h2>
          <table>
            <thead>
              <th>id</th>
              <th>nom société</th>
              <th>adresse</th>
              <th>pays</th>
              <th>numéro tva</th>
              <th>numéro téléphone</th>
              <th></th>
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
                  <td>
                    <form class="" action="" method="post">
                     <input type="hidden" name="iddelete" value="<?php echo $donnee2['idsociete'] ?>">
                     <button class="button is-info" type="submit" name="delete2"><i class="fas fa-trash-alt"></i></button>
                   </form>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <button class="button is-info create" type="button" name="create"><a href="?page=newsociete">Nouvelle société</a></button>
        <div class="box">
          <h2 class="subtitle is-size-3 has-text-info has-text-weight-bold">Les derniers contacts</h2>
          <table>
            <thead>
              <th>id</th>
              <th>nom</th>
              <th>prénom</th>
              <th>num téléphone</th>
              <th>email</th>
              <th>nom société</th>
              <th></th>
            </thead>
            <tbody>
              <?php while ($donneethird = $displayLatestPeople->fetch()) { ?>
              <tr>
                <td><?php echo $donneethird['idpersonnes'] ?></td>
                <td><a href="?page=detailcontact&annuaire=<?php echo $donneethird['idpersonnes'] ?>"><?php echo $donneethird['name'] ?></a></td>
                <td><?php echo $donneethird['firstname'] ?></td>
                <td><?php echo $donneethird['personnesphone'] ?></td>
                <td><?php echo $donneethird['email'] ?></td>
                <td><a href="?page=detailsociete&societe=<?php echo $donneethird['idsociete'] ?>"><?php echo $donneethird['socialname'] ?></a></td>
                <td>
                  <form class="" action="" method="post">
                     <input type="hidden" name="iddelete" value="<?php echo $donnee3['idpersonnes'] ?>">
                     <button class="button is-info" type="submit" name="delete3"><i class="fas fa-trash-alt"></i></button>
                   </form>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <button class="button is-info create" type="button" name="create" value="create"><a href="?page=createcontact&createcontact">Nouveau client</a></button>
      </div>
  </main>
  <script type="text/javascript" src="./assets/js/main.js"></script>
  </body>
</html>
