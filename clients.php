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
         <?php while ($dataCustomers = $displaySocietiesCustomers->fetch()) { ?>
           <tr>
             <td><a href="detailsociete.php?societe=
              <?php echo $dataCustomers['idsociete'] ?>">
              <?php echo $dataCustomers['socialstatus'] ?>
              </a></td>
           </tr>
         <?php } ?>
       </tbody>
     </table>
   </body>
 </html>