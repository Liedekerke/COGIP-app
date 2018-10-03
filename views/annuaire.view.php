<div class="columns structure-pages">
 <div class="column is-half is-offset-3">
  <div class="box">
    <h2 class="subtitle is-size-3 has-text-weight-bold">Annuaire</h2>
    <table>
      <thead>
        <th>Noms</th>
        <th>Prénoms</th>
        <th></th>
      </thead>
      <tbody>
        <?php while ($donneeseven = $displayAnnuaireAlphab->fetch()) { ?>
          <tr>
            <td><a href="?page=detailcontact&annuaire=<?php echo $donneeseven['idpersonnes'] ?>"><?php echo $donneeseven['name'] ?></a></td>
            <td><?php echo $donneeseven['firstname'] ?></td>
            <td>
              <form onsubmit="confirmation()" class="" action="" method="post">
                 <input type="hidden" name="iddelete" value="<?php echo $donneeseven['idpersonnes'] ?>">
                 <button class="button is-link is-inverted" type="submit" name="delete3" <?php sessionCheckDelUpd() ?>><i class="fas fa-trash-alt"></i></button>
               </form>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <a class="button create is-rounded <?php sessionCheckAdd() ?>" <?php sessionCheckAdd() ?> href="?page=createcontact&createcontact">Nouveau client</a>
 </div>
</div>
