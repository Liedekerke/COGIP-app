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
          <tr>
            <td><?php echo $donnee['User'] ?></td>
            <td>
              <div class="select is-link is-rounded">
                <select class="" name="">
                  <option value="">IDDQD</option>
                  <option value="">Modo</option>
                  <option value="">Guest</option>
                </select>
              </div>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  </div>
</div>