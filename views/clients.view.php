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
             <td><a href="?page=detailsociete&societe=
              <?php echo $dataCustomers['idsociete'] ?>">
              <?php echo $dataCustomers['socialname'] ?>
              </a></td>
           </tr>
         <?php } ?>
       </tbody>
     </table>
   </body>
 </html>
