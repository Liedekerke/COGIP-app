<div class="columns structure-pages">
    <div class="column is-half is-offset-3">
      <div class="box">
       <table>
        <h2 class="subtitle is-size-3 has-text-weight-bold"> Sociétés-fournisseurs</h2>
         <thead>
           <th>nom</th>
           <th></th>
           <th></th>
         </thead>
         <tbody>
           <?php while ($dataSuppliers = $displaySocietiesSuppliers->fetch()) { ?>
             <tr>
                <td><a href="?page=detailsociete&societe=<?php echo $dataSuppliers['idsociete'] ?>"><?php echo $dataSuppliers['socialname'] ?></a></td>
                <td>
                <td>
                  <form onsubmit="confirmation()" class="" action="" method="post">
                   <input class="button is-link is-inverted" type="hidden" name="iddelete" value="<?php echo $dataSuppliers['idsociete'] ?>">
                   <button class="button is-link is-inverted" type="submit" name="delete2" <?php sessionCheckDelUpd() ?>><i class="fas fa-trash-alt"></i></button>
                 </form>
                </td>
             </tr>
           <?php } ?>
         </tbody>
       </table>
     </div>
  </div>
</div>
