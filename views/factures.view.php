   <table>
       <thead>
         <th>numéro facture</th>
         <th>date facture</th>
       </thead>
       <tbody>
         <?php while ($donnee = $displayFacturesAlphab->fetch()) { ?>
           <tr>
             <td><a href="?page=detailfacture&factures=<?php echo $donnee['idfactures'] ?>"><?php echo $donnee['idfactures'] ?></a></td>
             <td><?php echo $donnee['datefacture'] ?></td>
             <td>
               <form class="" action="" method="post">
                 <input type="hidden" name="iddelete" value="<?php echo $donnee['idfactures'] ?>">
                 <button type="submit" name="delete"><i class="fas fa-trash-alt"></i></button>
               </form>
             </td>
           </tr>
         <?php } ?>
       </tbody>
     </table>
   </body>
 </html>
