  <section class="hero is-medium is-info">
    <div class="hero-body">
      <div class="container">
        <h1 class="title is-2 has-text-centered has-text-white-ter">
          <em>Bienvenue sur votre dashboard</em>
        </h1>
      </div>
    </div>
  </section>
   <main>
      <div class="tables">
        <div class="box">
          <h2 class="subtitle is-size-3 has-text-weight-bold">Dernières factures encodées</h2>
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
                   <form onsubmit="confirmation()" class="" action="" method="post">
                     <input type="hidden" name="iddelete" value="<?php echo $donnee['idfactures'] ?>">
                     <button class="button is-link is-inverted" type="submit" name="delete" <?php sessionCheckDelUpd() ?>><i class="fas fa-trash-alt"></i></button>
                   </form>
                 </td>
                 <td><?php echo $errorDelFactures ?></td>
               </tr>
             <?php } ?>
            </tbody>
          </table>
        </div>
        <a class="button create is-rounded <?php sessionCheckAdd() ?>" <?php sessionCheckAdd() ?> href="?page=newfacture">Nouvelle facture</a>
        <div class="box">
          <h2 class="subtitle is-size-3 has-text-weight-bold">Dernières sociétés encodées</h2>
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
                    <form onsubmit="confirmation()" class="" action="" method="post">
                     <input type="hidden" name="iddelete" value="<?php echo $donneefourth['idsociete'] ?>">
                     <button class="button is-link is-inverted" type="submit" name="delete2" <?php sessionCheckDelUpd() ?>><i class="fas fa-trash-alt"></i></button>
                   </form>
                  </td>
                  <td><?php echo $errorDelSociete ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <a class="button create is-rounded <?php sessionCheckAdd() ?>" <?php sessionCheckAdd() ?> href="?page=newsociete">Nouvelle société</a>
        <div class="box">
          <h2 class="subtitle is-size-3 has-text-weight-bold">Derniers contacts encodés</h2>
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
                  <form onsubmit="confirmation()" class="" action="" method="post">
                     <input type="hidden" name="iddelete" value="<?php echo $donneethird['idpersonnes'] ?>">
                     <button class="button is-link is-inverted" type="submit" name="delete3" <?php sessionCheckDelUpd() ?>><i class="fas fa-trash-alt"></i></button>
                   </form>
                </td>
                <td><?php echo $errorDelPersonnes ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <a class="button create is-rounded <?php sessionCheckAdd() ?>" <?php sessionCheckAdd() ?> href="?page=createcontact&createcontact">Nouveau client</a>
      </div>
  </main>
