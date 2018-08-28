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
         <?php while ($donneesixth = $displayDetailsSocieties->fetch()) { ?>
           <tr>
             <td><?php echo $donneesixth['socialstatus'] //done?></td>
             <td><?php echo $donneesixth['adresse'] //done?></td>
             <td><?php echo $donneesixth['telephonesociete'] //done ?></td>
             <td><?php echo $donneesixth['tvanumber'] // done ?></td>
             <td><?php echo $donneesixth['account'] // done ?></td>
             <td><?php echo $donneesixth['idfactures'] // done?></td>
             <td><?php echo $donneesixth['name'] //done ?></td>
             <td><?php echo $donneesixth['firstname'] //done ?></td>
             <td><?php echo $donneesixth['idboncommande'] // done?></td>
             <td><?php echo $donneesixth['iddevis'] //done?></td>
             <td><?php echo $donneesixth['idnotecredit'] //done?></td>
             <td><?php echo $donneesixth['type'] //done?></td>
           </tr>
         <?php } ?>
       </tbody>
     </table>
   </body>
 </html>
