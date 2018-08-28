<?php include 'display.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <thead>
        <th>nom</th>
        <th>prénom</th>
        <th>téléphone</th>
        <th>email</th>
        <th>nom de société</th>
        <th>adresse société</th>
        <th>factures</th>
      </thead>
      <tbody>
        <?php while ($donnee = $displayDetailsPersonnes->fetch()) { ?>
          <td><?php echo $donnee['name']?></td>
          <td><?php echo $donnee['firstname']?></td>
          <td><?php echo $donnee['personnesphone']?></td>
          <td><?php echo $donnee['email']?></td>
          <td><?php echo $donnee['socialstatus']?></td>
          <td><?php echo $donnee['adresse']?></td>
          <td><?php echo $donnee['idfactures']?></td>
        <?php } ?>
      </tbody>
    </table>
  </body>
</html>
