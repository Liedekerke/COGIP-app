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
         <th>social name</th>
         <th>adresse</th>
         <th>phone</th>
         <th>tva</th>

         <th>name</th>
         <th>first name</th>
       </thead>
       <tbody>
         <?php while ($donneesixth = $displayDetailsSocieties->fetch()) { ?>
           <tr>
             <td><?php echo $donneesixth['socialname'] //done?></td>
             <td><?php echo $donneesixth['adresse'] //done?></td>
             <td><?php echo $donneesixth['telephonesociete'] //done ?></td>
             <td><?php echo $donneesixth['tvanumber'] // done ?></td>

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
             <td><?php echo $donneesixth2['idfactures'] // done?></td>
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
             <td><?php echo $donneesixth3['name'] //done ?></td>
             <td><?php echo $donneesixth3['firstname'] //done ?></td>
           </tr>
         <?php } ?>
       </tbody>
     </table>
   </body>
 </html>
