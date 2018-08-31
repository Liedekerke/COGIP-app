<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php while ($donneeseven = $createcontac->fetch()) { ?>
    <form class="" action="index.html" method="post">
      <label for=""></label>
      <input type="text" name="name" value="" required>
      <br>
      <label for=""></label>
      <input type="text" name="firstname" value="" required>
      <br>
      <label for=""></label>
      <input type="number" name="personnesphone" value="" required>
      <br>
      <label for=""></label>
      <input type="email" name="email" value="" required>

      <td>
        <select class="" name="idsociete" required>
          <?php while ( $donnee2 = $displayDetailsFactures2->fetch() ) { ?>
           <option value="<?php echo $donnee2['idsociete'] ?>" <?php testselect($donneeseven['idsociete'], $donnee2['idsociete']) ?>> <?php echo $donnee2['socialname'] ?> </option>
         <?php } ?>
         <?php } ?>
        </select>
      </td>

      <td>
        <input type="submit" name="update" value="update">
      </td>
    </form>
  </body>
</html>
