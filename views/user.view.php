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
          <select class="" name="">
            <option value="">IDDQD</option>
            <option value="">Modo</option>
            <option value="">Guest</option>
          </select>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
