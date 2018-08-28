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
         <th>name</th>
       </thead>
       <tbody>
         <?php while ($donneefifth = $displaySocietiesAlphab->fetch()) { ?>
           <tr>
             <td><a href="detailsociete.php?societe=<?php echo $donneefifth['idsociete'] ?>"><?php echo $donneefifth['socialstatus'] ?></a></td>
           </tr>
         <?php } ?>
       </tbody>
     </table>
   </body>
 </html>
