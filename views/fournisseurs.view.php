     <table>
       <thead>
         <th>name</th>
       </thead>
       <tbody>
         <?php while ($dataSuppliers = $displaySocietiesSuppliers->fetch()) { ?>
           <tr>
              <td><a href="?page=detailsociete&societe=<?php echo $dataSuppliers['idsociete'] ?>"><?php echo $dataSuppliers['socialname'] ?></a></td>
              <td>
              <td>
                <form class="" action="" method="post">
                 <input type="hidden" name="iddelete" value="<?php echo $dataSuppliers['idsociete'] ?>">
                 <button type="submit" name="delete2"><i class="fas fa-trash-alt"></i></button>
               </form>
              </td>
           </tr>
         <?php } ?>
       </tbody>
     </table>
   </body>
 </html>
