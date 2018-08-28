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
         <th>name</th>
         <th>adresse</th>
         <th>country</th>
         <th>tva number</th>
         <th>phone number</th>
       </thead>
       <tbody>
         <?php while ($donnee = $displayDetailsFactures->fetch()) { ?>
           <tr>
             <td><?php echo $donnee['idfactures'] //done?></td>
             <td><?php echo $donnee['datefacture'] //done?></td>
             <td><?php echo $donnee['idboncommande'] //done ?></td>
             <td><?php echo $donnee['socialstatus'] // done ?></td>
             <td><?php echo $donnee['relation'] // done ?></td>
             <td><?php echo $donnee['account'] // done?></td>
             <td><?php echo $donnee['name'] //done ?></td>
             <td><?php echo $donnee['firstname'] //done ?></td>
           </tr>
         <?php } ?>
       </tbody>
     </table>
   </body>
 </html>
