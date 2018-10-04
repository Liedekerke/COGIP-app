<div class="columns structure-pages">
 <div class="column is-half is-offset-3">
  <div class="box">
   <table>
      <h2 class="subtitle is-size-3 has-text-weight-bold"> Sociétés</h2>
       <thead>
         <th>name</th>
         <th></th>
       </thead>
       <tbody>
         <?php while ($donneefifth = $displaySocietiesAlphab->fetch()) { ?>
           <tr>
             <td><a href="?page=detailsociete&societe=<?php echo $donneefifth['idsociete'] ?>"><?php echo $donneefifth['socialname'] ?></a></td>
             <td>
               <form onsubmit="confirmation()" class="" action="" method="post">
                 <input type="hidden" name="iddelete" value="<?php echo $donneefifth['idsociete'] ?>">
                 <button class="button is-link is-inverted" type="submit" name="delete2" <?php sessionCheckDelUpd() ?>><i class="fas fa-trash-alt"></i></button>
               </form>
             </td>
             <td><?php echo $errorDelSociete ?></td>
           </tr>
         <?php } ?>
       </tbody>
     </table>
    </div>
  </div>
</div>
