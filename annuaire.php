<?php
include 'display.php';
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Annuaire</title>
   </head>
   <body>
     <table>
       <thead>
         <th>Annuaire</th>
       </thead>
       <tbody>
         <?php while ($donneeseven = $displayAnnuaireAlphab->fetch()) { ?>
           <tr>
             <td><a href="?annuaire=<?php echo $donneeseven['idpersonnes'] ?>"><?php echo $donneeseven['name'] ?></a></td>
             <td><?php echo $donneeseven['firstname'] ?></td>
           </tr>
         <?php } ?>
       </tbody>
     </table>
   </body>
 </html>
