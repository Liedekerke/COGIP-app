    <table>
      <thead>
        <th>Annuaire</th>
      </thead>
      <tbody>
        <?php while ($donneeseven = $displayAnnuaireAlphab->fetch()) { ?>
          <tr>
            <td><a href="?page=detailcontact&annuaire=<?php echo $donneeseven['idpersonnes'] ?>"><?php echo $donneeseven['name'] ?></a></td>
            <td><?php echo $donneeseven['firstname'] ?></td>
            <td>
              <form onsubmit="confirmation()" class="" action="" method="post">
                 <input type="hidden" name="iddelete" value="<?php echo $donneeseven['idpersonnes'] ?>">
                 <button type="submit" name="delete3"><i class="fas fa-trash-alt"></i></button>
               </form>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
