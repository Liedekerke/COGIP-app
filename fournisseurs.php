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
         <?php while ($dataSuppliers = $displaySocietiesSuppliers->fetch()) { ?>
           <tr>
              <td><a href="detailsociete.php?societe=
              	<?php echo $dataSuppliers['idsociete'] ?>">
              	<?php echo $dataSuppliers['socialname'] ?>
              </a></td>
           </tr>
         <?php } ?>
       </tbody>
     </table>
   </body>
 </html>
