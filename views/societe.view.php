   <table>
       <thead>
         <th>name</th>
       </thead>
       <tbody>
         <?php while ($donneefifth = $displaySocietiesAlphab->fetch()) { ?>
           <tr>
             <td><a href="?page=detailsociete&societe=<?php echo $donneefifth['idsociete'] ?>"><?php echo $donneefifth['socialname'] ?></a></td>
             <td>
               <form class="" action="" method="post">
                 <input type="hidden" name="iddelete" value="<?php echo $donneed2['idsociete'] ?>">
                 <button type="submit" name="delete2"><i class="fas fa-trash-alt"></i></button>
               </form>
             </td>
           </tr>
         <?php } ?>
       </tbody>
     </table>
   </body>
 </html>