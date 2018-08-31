    <h1>Ajout d'une société</h1>
    <form class="" action="" method="post">
      <label for="socialname">Social name</label>
        <input type="text" name="socialname" value="">
        <br>
      <label for="adresse">Address</label>
      <input type="text" name="adresse" value="">
      <br>
      <label for="country">Country</label>
      <input type="text" name="country" value="">
      <br>
      <label for="tvanumber">TVA number</label>
      <input type="number" name="tvanumber" value="">
      <br>
      <label for="telephonesociete">Phone number</label>
      <input type="number" name="telephonesociete" value="">
      <br>
      <label for="type">Type</label>
      <select class="" name="type">
         <?php while ($donneetype = $detailsType->fetch()) { ?>
        <option value="<?php echo $donneetype['type'] ?>" <?php testselect($donneetype['type'], $donneetype['type']) ?>><?php echo $donneetype['type']?></option>
        <?php } ?>
      </select>
      <br>
      <label for="relation">Relation</label>
      <select class="" name="relation">
        <?php while ($donneerel = $detailsRelation->fetch()) { ?>
        <option value="<?php echo $donneerel['relation'] ?>" <?php testselect($donneerel['relation'], $donneerel['relation']) ?>><?php echo $donneerel['relation']?></option>
        <?php } ?>
      </select>
      <br>
      <input type="submit" name="createsociete" value="ajout">
    </form>
  </body>
</html>


