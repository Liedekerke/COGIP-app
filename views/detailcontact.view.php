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
            <td><?php echo $donnee['name']?></td>
            <td><?php echo $donnee['firstname']?></td>
            <td><?php echo $donnee['personnesphone']?></td>
            <td><?php echo $donnee['email']?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    <table>
      <thead>
        <th>social name</th>
        <th>adresse</th>
      </thead>
      <tbody>
        <?php while ($donnee3 = $displayDetailsPersonnes3->fetch()) { ?>
          <tr>
            <td><?php echo $donnee3['socialname']?></td>
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
            <td><?php echo $donnee2['idfactures']?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </body>
</html>