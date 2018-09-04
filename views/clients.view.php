<div class="columns structure-pages">
  <div class="column is-half is-offset-3">
    <div class="box">
     <table>
      <h2 class="subtitle is-size-3 has-text-weight-bold"> Sociétés-clients</h2>
       <thead>
         <th>name</th>
         <th></th>
       </thead>
       <tbody>
         <?php while ($dataCustomers = $displaySocietiesCustomers->fetch()) { ?>
           <tr>
             <td><a href="?page=detailsociete&societe=<?php echo $dataCustomers['idsociete'] ?>"><?php echo $dataCustomers['socialname'] ?>
              </a></td>
              <td>
                <form onsubmit="confirmation()" class="" action="" method="post">
                 <input class="button is-link is-inverted" type="hidden" name="iddelete" value="<?php echo $dataCustomers['idsociete'] ?>">
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
