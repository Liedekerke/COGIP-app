 <form class="" action="" method="post">
      <table>
        <thead>
          <th>id</th>
          <th>date</th>
          <th>motif</th>
          <th>social name</th>
          <th>relation</th>
          <th>name</th>
        </thead>
        <tbody>
          <?php while ($donnee = $displayDetailsFactures->fetch()) { ?>
              <td><?php echo $donnee['idfactures'] ?></td>
              <td><input type="date" name="datefacture" value="<?php echo $donnee['datefacture'] ?>"></td>
              <td><input type="text" name="prestationmotif" value="<?php echo $donnee['prestationmotif'] ?>"> </td>
              <td>
                <select class="" name="idsociete">
                  <?php while ( $donnee2 = $displayDetailsFactures2->fetch() ) { ?>
                   <option value="<?php echo $donnee2['idsociete'] ?>" <?php testselect($donnee['idsociete'], $donnee2['idsociete']) ?>> <?php echo $donnee2['socialname'] ?> </option>
                 <?php } ?>
                </select>
              </td>
              <td><?php echo $donnee['relation'] ?></td>
              <td>
                <select class="" name="idpersonnes">
                  <?php while ( $donnee3 = $displayDetailsFactures3->fetch() ) { ?>
                   <option value="<?php echo $donnee3['idpersonnes'] ?>" <?php testselect($donnee['idpersonnes'], $donnee3['idpersonnes']) ?>> <?php echo $donnee3['name'] . " " . $donnee3['firstname'] ?> </option>
                 <?php } ?>
                </select>
              </td>
              <td> <input type="submit" name="update" value="update"> </td>
          <?php } ?>
        </tbody>
      </table>
    </form>
    <?php echo $message; ?>
