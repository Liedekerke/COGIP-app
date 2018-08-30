<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <thead>
        <th>ID</th>
        <th>Date</th>
        <th>Motif prestations</th>
        <th>Nom de societe</th>
      </thead>
      <tbody>
       <?php while ($donnee = $displayLatestFactures->fetch()) { ?>
         <tr>
           <td><a href="?page=detailfacture&factures=<?php echo $donnee['idfactures'] ?>"><?php echo $donnee['idfactures'] ?></a></td>
           <td><?php echo $donnee['datefacture'] ?></td>
           <td><?php echo $donnee['prestationmotif'] ?></td>
           <td><a href="?page=detailsociete&societe=<?php echo $donnee['idsociete'] ?>"><?php echo $donnee['socialname'] ?></a></td>
           <td>
             <form class="" action="" method="post">
               <input type="hidden" name="iddelete" value="<?php echo $donnee['idfactures'] ?>">
               <button type="submit" name="delete"><i class="fas fa-trash-alt"></i></button>
             </form>
           </td>
         </tr>
       <?php } ?>
      </tbody>
    </table>
    <table>
      <thead>
        <th>id</th>
        <th>social name</th>
        <th>adresse</th>
        <th>country</th>
        <th>tva number</th>
        <th>phone number</th>
      <!--   <th>id type</th>
        <th>id facture</th>
        <th>id personnes</th> -->
      </thead>
      <tbody>
        <?php while ($donneefourth = $displayLatestSocieties->fetch()) { ?>
          <tr>
            <td><?php echo $donneefourth['idsociete'] ?></td>
            <td><a href="?page=detailsociete&societe=<?php echo $donneefourth['idsociete'] ?>"><?php echo $donneefourth['socialname'] ?></a></td>
            <td><?php echo $donneefourth['adresse'] ?></td>
            <td><?php echo $donneefourth['country'] ?></td>
            <td><?php echo $donneefourth['tvanumber'] ?></td>
            <td><?php echo $donneefourth['telephonesociete'] ?></td>
            <!-- <td><?php echo $donneefourth['idtype'] ?></td>
            <td><?php echo $donneefourth['idfactures'] ?></td>
            <td><?php echo $donneefourth['idpersonnes'] ?></td> -->
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <table>
      <thead>
        <th>id</th>
        <th>name</th>
        <th>first name</th>
        <th>phone number</th>
        <th>email</th>
        <th>nom de société</th>
     <!--    <th>facture id</th> -->
      </thead>
      <tbody>
        <?php while ($donneethird = $displayLatestPeople->fetch()) { ?>
        <tr>
          <td><?php echo $donneethird['idpersonnes'] ?></td>
          <td><a href="detailcontact.php?annuaire=<?php echo $donneethird['idpersonnes'] ?>"><?php echo $donneethird['name'] ?></a></td>
          <td><?php echo $donneethird['firstname'] ?></td>
          <td><?php echo $donneethird['personnesphone'] ?></td>
          <td><?php echo $donneethird['email'] ?></td>
          <td><a href="?page=detailsociete&societe=<?php echo $donneethird['idsociete'] ?>"><?php echo $donneethird['socialname'] ?></a></td>
<!--            <td><?php echo $donneethird['idfactures'] ?></td>
-->         </tr>
       <?php } ?>
      </tbody>
    </table>
    <div class="">
      <a href="?page=fournisseurs">Fournisseurs</a>
    </div>
    <div class="">
      <a href="?page=clients">Clients</a>
    </div>
  </body>
</html>
