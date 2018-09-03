   <table>
      <thead>
        <th>nom</th>
        <th>prénom</th>
        <th>téléphone</th>
        <th>email</th>
      </thead>
      <tbody>
        <?php while ($donnee = $displayDetailsPersonnes->fetch()) { ?>
          <tr>
            <td>
              <input type="text" name="name" value="<?php echo $donnee['personnesName'] ?>">
            </td>
            <td>
              <input type="text" name="firstname" value="<?php echo $donnee['firstname'] ?>">
            </td>
            <td>
              <input type="number" name="personnesphone" value="<?php echo $donnee['personnesphone'] ?>">
            </td>
            <td>
              <input type="email" name="email" value="<?php echo $donnee['email'] ?>">
            </td>
             <td><input type="submit" name="update" value="update"></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php echo $message; ?>

    <table>
      <thead>
        <th>social name</th>
        <th>adresse</th>
      </thead>
      <tbody>
        <?php while ($donnee3 = $displayDetailsPersonnes3->fetch()) { ?>
          <tr>
            <td><a href="?page=detailsociete&societe=<?php echo $donnee3['idsociete'] ?>"><?php echo $donnee3['socialname'] ?></a>
            </td>

            <td><?php echo $donnee3['adresse']?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    <table>
      <thead>
        <th>factures</th>
      </thead>
      <tbody>
        <?php while ($donnee2 = $displayDetailsPersonnes2->fetch()) { ?>
          <tr>
            <td><a href="?page=detailfacture&factures=<?php echo $donnee2['idfactures'] ?>"><?php echo $donnee2['idfactures'] ?></a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </form>
