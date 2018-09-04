<div class="columns structure-pages">
 <div class="column is-4 is-offset-4">    
    <div class="box">
      <form class="" action="" method="post">
         <h2 class="subtitle is-size-3 has-text-weight-bold"> Ajouter un nouveau contact</h2>
          <label for="name">Nom</label>
          <input class="input is-link is-rounded" type="text" name="name" value="" required>
          <br><br>
          <label for="firstname">Prénom</label>
          <input class="input is-link is-rounded" type="text" name="firstname" value="" required>
          <br><br>
          <label for="personnesphone">Numéro de tél</label>
          <input class="input is-link is-rounded" type="number" name="personnesphone" value="" required>
          <br><br>
          <label for="email">Email</label>
          <input class="input is-link is-rounded" type="email" name="email" value="" required>
          <br><br>
          <label for="email">Société</label><br>
          <div class="select is-link is-rounded">
              <select class="" name="idsociete" required>
                <?php while ( $donnee2 = $createcontact->fetch() ) { ?>
                 <option value="<?php echo $donnee2['idsociete'] ?>"> <?php echo $donnee2['socialname'] ?></option>
               <?php } ?>
              </select>
          </div>
          <br>
          <input class="button is-link is-rounded is-pulled-right" type="submit" name="update" value="ajout">
          <?php echo $message; ?>
      </form>
    </div>
  </div>
</div>
