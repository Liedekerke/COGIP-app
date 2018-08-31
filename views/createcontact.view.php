<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" action="" method="post">
      <table>
        <thead>
          <th>Name</th>
          <th>Firstname</th>
          <th>Number</th>
          <th>Email</th>
          <th>Societe</th
        </thead>
        <tbody>
      <td>
        <label for=""></label>
        <input type="text" name="name" value="" required>
      </td>
      <br>
      <td>
        <label for=""></label>
        <input type="text" name="firstname" value="" required>
      </td>
      <br>
      <td>
        <label for=""></label>
        <input type="number" name="personnesphone" value="" required>
      </td>
      <br>
      <td>
        <label for=""></label>
        <input type="email" name="email" value="" required>
      </td>


      <td>
        <select class="" name="idsociete" required>
          <?php while ( $donnee2 = $createcontact->fetch() ) { ?>
           <option value="<?php echo $donnee2['idsociete'] ?>"> <?php echo $donnee2['socialname'] ?></option>
         <?php } ?>
        </select>
      </td>

      <td>
        <input type="submit" name="update" value="update">
      </td>
    </tbody>
    </table>
    </form>
  </body>
</html>
