<div class="columns structure-pages">
 <div class="column is-half is-offset-3">
  <div class="box">
    <table>
      <thead>
        <th>Utilisateurs</th>
        <th>Privilèges</th>
      </thead>
      <tbody>
        <?php while ($donnee = $users->fetch()) { ?>
          <form class="" action="" method="post">
            <tr>
              <td><?php echo $donnee['name'] ?></td>
              <td>
                <div class="select is-link is-rounded">
                  <select class="" name="privilege">
                    <?php foreach ($donnee2 as $value) { ?>
                      <option value="<?php echo $value['privilege'] ?>" <?php testselect($value['privilege'], $donnee['privilege']) ?>><?php echo $value['privilege'] ?></option>
                    <?php } ?>
                  </select>
                </div>
              </td>
              <td> <input type="hidden" name="ident" value="<?php echo $donnee['name'] ?>"> </td>
              <td> <input type="submit" name="update" value="test" <?php sessionCheckDelUpd() ?>> </td>
            </tr>
          </form>
        <?php } ?>
      </tbody>
    </table>
  </div>
  </div>
</div>
