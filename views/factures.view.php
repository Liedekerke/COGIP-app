<div class="columns structure-pages">
 <div class="column is-half is-offset-3">
  <div class="box">  
   <table>
       <h2 class="subtitle is-size-3 has-text-weight-bold">Factures</h2>
       <thead>
         <th>numéro facture</th>
         <th>date facture</th>
         <th></th>
       </thead>
       <tbody>
         <?php while ($donnee = $displayFacturesAlphab->fetch()) { ?>
           <tr>
             <td><a href="?page=detailfacture&factures=<?php echo $donnee['idfactures'] ?>"><?php echo $donnee['idfactures'] ?></a></td>
             <td><?php echo $donnee['datefacture'] ?></td>
             <td>
               <form onsubmit="confirmation()" class="" action="" method="post">
                 <input type="hidden" name="iddelete" value="<?php echo $donnee['idfactures'] ?>">
                 <button class="button is-link is-inverted" type="submit" name="delete"><i class="fas fa-trash-alt"></i></button>
               </form>
             </td>
           </tr>
         <?php } ?>
       </tbody>
     </table>
  </div>
 </div>
</div>
