<?php
include 'display.php';
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <table>
       <thead>
         <th>numéro facture</th>
         <th>date facture</th>
       </thead>
       <tbody>
         <?php while ($donnee = $displayFacturesAlphab->fetch()) { ?>
           <tr>
             <td><a href="?factures=<?php echo 'idfactures' ?>"><?php echo 'idfactures' ?></a></td>
             <td><?php echo 'datefacture' ?></td>
           </tr>
         <?php } ?>
       </tbody>
     </table>
   </body>
 </html>
