<div class="columns structure-pages">
 <div class="column is-8 is-offset-2">    
    <div class="box">
<form class="" action="" method="post">
  <table>
     <thead>
       <th>nom</th>
       <th>prénom</th>
       <th>téléphone</th>
       <th>email</th>
       <th>social name</th>
     </thead>
     <tbody>
       <tr>
       <?php while ($donnee = $displayDetailsPersonnes->fetch()) { ?>
           <td>
             <input type="text" name="name" value="<?php echo $donnee['personnesName'] ?>">
           </td>
           <td>
             <input type="text" name="firstname" value="<?php echo $donnee['firstname'] ?>">
           </td>
           <td>
             <input type="number" name="personnesphone" value="<?php echo $donnee['personnesphone'] ?>">
           </td>
           <td>
             <input type="email" name="email" value="<?php echo $donnee['email'] ?>">
           </td>
       <?php } ?>
        <td>
          <select class="" name="">
           <?php while ($donnee3 = $displayDetailsPersonnes3->fetch()) { ?>
             <option value="<?php echo $donnee3['idsociete'] ?>" <?php testselect($donnee3['idsociete'], $donnee['idsociete']) ?>><?php echo $donnee3['socialname'] ?></option>
           <?php } ?>
           </select>
        </td>
        <td><input type="submit" name="update" value="update"></td>
       </tr>
     </tbody>
   </table>

    <?php echo $message; ?>

    <table>
      <thead>
        <th>factures</th>
      </thead>
      <tbody>
        <?php while ($donnee2 = $displayDetailsPersonnes2->fetch()) { ?>
          <tr>
            <td><a href="?page=detailfacture&factures=<?php echo $donnee2['idfactures'] ?>"><?php echo $donnee2['idfactures'] ?></a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </form>
