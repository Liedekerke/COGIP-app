<div class="columns structure-pages">
 <div class="column is-4 is-offset-4">    
    <div class="box">
      <form class="" action="" method="post">
        <h2 class="subtitle is-size-3 has-text-weight-bold"> Ajouter une nouvelle société</h2>
        <label for="socialname">Nom</label>
        <input class="input is-link is-rounded" type="text" name="socialname" value="">
        <br><br>
        <label for="adresse">Adresse</label>
        <input class="input is-link is-rounded" type="text" name="adresse" value="">
        <br><br>
        <label for="country">Pays</label>
        <input class="input is-link is-rounded" type="text" name="country" value="">
        <br><br>
        <label for="tvanumber">Numéro de TVA</label>
        <input class="input is-link is-rounded" type="number" name="tvanumber" value="">
        <br><br>
        <label for="telephonesociete">Numéro de Téléphone</label>
        <input class="input is-link is-rounded" type="number" name="telephonesociete" value="">
        <br><br>
        <label for="type">Type</label>
        <div class="select is-link is-rounded">
          <select class="" name="type">
             <?php while ($donneetype = $detailsType->fetch()) { ?>
            <option value="<?php echo $donneetype['type'] ?>" <?php testselect($donneetype['type'], $donneetype['type']) ?>><?php echo $donneetype['type']?></option>
            <?php } ?>
          </select>
        </div>
        <br><br>
        <label for="relation">Relation</label>
        <div class="select is-link is-rounded">
          <select class="" name="relation">
            <?php while ($donneerel = $detailsRelation->fetch()) { ?>
            <option value="<?php echo $donneerel['relation'] ?>" <?php testselect($donneerel['relation'], $donneerel['relation']) ?>><?php echo $donneerel['relation']?></option>
            <?php } ?>
          </select>
        </div>
        <br>
        <input class="button is-link is-rounded is-pulled-right" type="submit" name="createsociete" value="ajout">
      </form>
      <?php echo $message; ?>
    </div>
  </div>  
</div> 