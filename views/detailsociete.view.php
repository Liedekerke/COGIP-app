   <form action="" method="post">
     <table>
       <thead>
         <th>social name</th>
         <th>adresse</th>
         <th>phone</th>
         <th>tva</th>
       </thead>
       <tbody>
         <?php while ($donneesixth = $displayDetailsSocieties->fetch()) { ?>
           <tr>
             <td>
               <input type="text" name="socialname" value="<?php echo $donneesixth['socialname'] ?>">
             </td>
             <td>
              <input type="text" name="adresse" value="<?php echo $donneesixth['adresse'] ?>">
             </td>
             <td>
               <input type="number" name="telephonesociete" value="<?php echo $donneesixth['telephonesociete'] ?>">
             </td>
             <td>
              <input type="number" name="tvanumber" value="<?php echo $donneesixth['tvanumber'] ?>">
             </td>
             <td><input type="submit" name="update" value="update"></td>
           </tr>
         <?php } ?>
       </tbody>
     </table>
     <table>
       <thead>
         <th>id facture</th>
       </thead>
       <tbody>
         <?php while ($donneesixth2 = $displayDetailsSocieties3->fetch()) { ?>
           <tr>
             <td><?php echo $donneesixth2['idfactures']?></td>
           </tr>
         <?php } ?>
       </tbody>
     </table>
     <table>
       <thead>
         <th>name</th>
         <th>first name</th>
       </thead>
       <tbody>
         <?php while ($donneesixth3 = $displayDetailsSocieties2->fetch()) { ?>
           <tr>
             <td><?php echo $donneesixth3['name']?></td>
             <td><?php echo $donneesixth3['firstname']?></td>
           </tr>
         <?php } ?>
       </tbody>
     </table>
    </form>
   </body>
 </html>
