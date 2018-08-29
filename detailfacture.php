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
         <th>id</th>
         <th>date</th>
         <th>social name</th>
         <th>relation</th>
         <th>name</th>
         <th>firstname</th>
       </thead>
       <tbody>
         <?php while ($donnee = $displayDetailsFactures->fetch()) { ?>
           <tr>
             <td><?php echo $donnee['idfactures'] ?></td>
             <td><?php echo $donnee['datefacture'] ?></td>
             <td><?php echo $donnee['socialname'] ?></td>
             <td><?php echo $donnee['relation'] ?></td>
             <td><?php echo $donnee['name'] ?></td>
             <td><?php echo $donnee['firstname'] ?></td>
           </tr>
         <?php } ?>
       </tbody>
     </table>
   </body>
 </html>
