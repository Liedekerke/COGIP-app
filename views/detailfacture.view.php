<div class="columns structure-pages">
 <div class="column is-10 is-offset-1">
    <div class="box">
     <form class="" action="" method="post">
      <table>
        <h2 class="subtitle is-size-3 has-text-weight-bold"> Modification facture</h2>
        <thead>
          <th>id</th>
          <th>date</th>
          <th>motif</th>
          <th>nom social</th>
          <th>relation</th>
          <th>nom</th>
          <th></th>
        </thead>
        <tbody>
          <?php while ($donnee = $displayDetailsFactures->fetch()) { ?>
              <td><?php echo $donnee['idfactures'] ?></td>
              <td><input class="input is-link is-rounded" type="date" name="datefacture" value="<?php echo $donnee['datefacture'] ?>"></td>
              <td><input class="input is-link is-rounded" type="text" name="prestationmotif" value="<?php echo $donnee['prestationmotif'] ?>"> </td>
              <td>
                <div class="select is-link is-rounded">
                  <select class="" name="idsociete">
                    <?php while ( $donnee2 = $displayDetailsFactures2->fetch() ) { ?>
                     <option value="<?php echo $donnee2['idsociete'] ?>" <?php testselect($donnee['idsociete'], $donnee2['idsociete']) ?>> <?php echo $donnee2['socialname'] ?> </option>
                   <?php } ?>
                  </select>
                </div>
              </td>
              <td><?php echo $donnee['relation'] ?></td>
              <td>
                <div class="select is-link is-rounded">
                  <select class="" name="idpersonnes">
                    <?php while ( $donnee3 = $displayDetailsFactures3->fetch() ) { ?>
                     <option value="<?php echo $donnee3['idpersonnes'] ?>" <?php testselect($donnee['idpersonnes'], $donnee3['idpersonnes']) ?>> <?php echo $donnee3['name'] . " " . $donnee3['firstname'] ?> </option>
                   <?php } ?>
                  </select>
                </div>
              </td>
              <td>
                <input class="button is-link is-rounded" type="submit" name="update" value="update" <?php sessionCheckDelUpd() ?>>
              </td>
          <?php } ?>
        </tbody>
      </table>
     </form>
    </div>
  </div>
</div>
<?php echo $message; ?>
