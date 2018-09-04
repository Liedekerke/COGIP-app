<div class="columns structure-pages">
 <div class="column is-10 is-offset-1">
    <div class="box">
      <form class="" action="" method="post">
        <table>
          <h2 class="subtitle is-size-3 has-text-weight-bold"> Modification contact</h2>
           <thead>
             <th>nom</th>
             <th>prénom</th>
             <th>téléphone</th>
             <th>email</th>
             <th>social name</th>
             <th></th>
           </thead>
           <tbody>
             <tr>
             <?php while ($donnee = $displayDetailsPersonnes->fetch()) { ?>
                 <td>
                   <input class="input is-link is-rounded" type="date" type="text" name="name" value="<?php echo $donnee['personnesName'] ?>">
                 </td>
                 <td>
                   <input class="input is-link is-rounded" type="date" type="text" name="firstname" value="<?php echo $donnee['firstname'] ?>">
                 </td>
                 <td>
                   <input class="input is-link is-rounded" type="date" type="number" name="personnesphone" value="<?php echo $donnee['personnesphone'] ?>">
                 </td>
                 <td>
                   <input class="input is-link is-rounded" type="date" type="email" name="email" value="<?php echo $donnee['email'] ?>">
                 </td>
             <?php } ?>
              <td>
                <div class="select is-link is-rounded">
                  <select class="" name="">
                   <?php while ($donnee3 = $displayDetailsPersonnes3->fetch()) { ?>
                     <option value="<?php echo $donnee3['idsociete'] ?>" <?php testselect($donnee3['idsociete'], $donnee['idsociete']) ?>><?php echo $donnee3['socialname'] ?></option>
                   <?php } ?>
                   </select>
                </div>
              </td>
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
          <input class="button is-link is-rounded is-pulled-right" type="submit" name="update" value="update" <?php sessionCheckDelUpd() ?>>
        </form>
      </div>
    </div>
  </div>
