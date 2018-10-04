<div class="columns structure-pages">
 <div class="column is-8 is-offset-2">
    <div class="box">
       <form action="" method="post">
         <table>
          <h2 class="subtitle is-size-3 has-text-weight-bold"> Modification société</h2>
           <thead>
             <th>nom social</th>
             <th>adresse</th>
             <th>téléphone</th>
             <th>tva</th>
             <th></th>
           </thead>
           <tbody>
             <?php while ($donneesixth = $displayDetailsSocieties->fetch()) { ?>
               <tr>
                 <td>
                   <input class="input is-link is-rounded" type="text" name="socialname" value="<?php echo $donneesixth['socialname'] ?>">
                 </td>
                 <td>
                  <input class="input is-link is-rounded" type="text" name="adresse" value="<?php echo $donneesixth['adresse'] ?>">
                 </td>
                 <td>
                   <input class="input is-link is-rounded" type="number" name="telephonesociete" value="<?php echo $donneesixth['telephonesociete'] ?>">
                 </td>
                 <td>
                  <input class="input is-link is-rounded" type="text" name="tvanumber" value="<?php echo $donneesixth['tvanumber'] ?>">
                 </td>
                 <td><input class="button is-link is-rounded" type="submit" name="update" value="update" <?php sessionCheckDelUpd() ?>></td>
               </tr>
             <?php } ?>
           </tbody>
         </table>
        </form>
      </div>
  </div>
</div>
