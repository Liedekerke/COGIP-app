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
         <th>ID</th>
         <th>Date</th>
         <th>dates prestations</th>
         <th>Prix</th>
         <th>hors tva</th>
         <th>Taux tva</th>
         <th>prix ttc</th>
         <th>id note crédit</th>
       </thead>
       <tbody>
        <?php while ($donnee = $displayLatestFactures->fetch()) { ?>
          <tr>
            <td><?php echo $donnee['idfactures'] ?></td>
            <td><?php echo $donnee['datefacture'] ?></td>
            <td><?php echo $donnee['prestationdates'] ?></td>
            <td><?php echo $donnee['prix'] ?></td>
            <td><?php echo $donnee['ht']?></td>
            <td><?php echo $donnee['tauxtva'] ?></td>
            <td><?php echo $donnee['ttc'] ?></td>
            <td><?php echo $donnee['idnotecredit'] ?></td>
          </tr>
        <?php } ?>
       </tbody>
     </table>
     <table>
       <thead>
         <th>id</th>
         <th>date</th>
         <th>reduction</th>
       </thead>
       <?php while ($donneesecond = $displayLatestCredit->fetch()) { ?>
         <tr>
           <td><?php echo $donneesecond['idnotecredit'] ?></td>
           <td><?php echo $donneesecond['datefacture'] ?></td>
           <td><?php echo $donneesecond['reduction'] ?></td>
         </tr>
       <?php } ?>
     </table>
     <table>
       <thead>
         <th>id</th>
         <th>name</th>
         <th>first name</th>
         <th>phone number</th>
         <th>email</th>
         <th>facture id</th>
       </thead>
       <tbody>
         <?php while ($donneethird = $displayLatestPeople->fetch()) { ?>
         <tr>
           <td><?php echo $donneethird['idpersonnes'] ?></td>
           <td><?php echo $donneethird['name'] ?></td>
           <td><?php echo $donneethird['firstname'] ?></td>
           <td><?php echo $donneethird['personnesphone'] ?></td>
           <td><?php echo $donneethird['email'] ?></td>
           <td><?php echo $donneethird['idfactures'] ?></td>
         </tr>
        <?php } ?>
       </tbody>
     </table>
     <table>
       <thead>
         <th>id</th>
         <th>social status</th>
         <th>adresse</th>
         <th>country</th>
         <th>tva number</th>
         <th>phone number</th>
         <th>id type</th>
         <th>id facture</th>
         <th>id personnes</th>
       </thead>
       <tbody>
         <?php while ($donneefourth = $displayLatestSocieties->fetch()) { ?>
           <tr>
             <td><?php echo $donneefourth['idsociete'] ?></td>
             <td><?php echo $donneefourth['socialstatus'] ?></td>
             <td><?php echo $donneefourth['adresse'] ?></td>
             <td><?php echo $donneefourth['country'] ?></td>
             <td><?php echo $donneefourth['tvanumber'] ?></td>
             <td><?php echo $donneefourth['telephonesociete'] ?></td>
             <td><?php echo $donneefourth['idtype'] ?></td>
             <td><?php echo $donneefourth['idfactures'] ?></td>
             <td><?php echo $donneefourth['idpersonnes'] ?></td>
           </tr>
         <?php } ?>
       </tbody>
     </table>
     <div class="">
       <a href="fournisseurs">Fournisseurs</a>
     </div>
     <div class="">
       <a href="clients">Clients</a>
     </div>
   </body>
 </html>
