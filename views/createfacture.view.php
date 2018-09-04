<div class="columns structure-pages">
 <div class="column is-half is-offset-3">    
    <div class="box">
      <form class="" action="" method="post">
        <h2 class="subtitle is-size-3 has-text-weight-bold"> Ajouter une nouvelle facture</h2>
        <label for="">date de facture</label>
        <input type="date" name="datefacture" value="" required>
        <br>
        <label for="">motif de prestation</label>
        <input type="text" name="prestationmotif" value="" required>
        <br>
        <label for=""> societe</label>
        <select class="" name="idsociete" id='idsociete' required onchange="test()">
          <?php while ($donnee = $societelist->fetch()) { ?>
            <option value="<?php echo $donnee['idsociete'] ?>"><?php echo $donnee['socialname'] ?></option>
          <?php } ?>
        </select>
        <br>
        <label for="">personne de contact</label>
          <?php
          while ($i <= $test) { ?>
            <select class="<?php if($i !== 1) {echo 'hidden';} else {echo 'shown';}?>" name="idpersonnes[]" id="test<?php echo $i ?>">
              <?php foreach ($donnee2 as $value) {
                if ($value['idsociete'] == $i) { ?>
               <option value="<?php echo $value['idpersonnes'] ?>"><?php echo $value['name'] . " " . $value['firstname'] ?></option>
              <?php }
            } ?>
            </select>
            <?php ++$i;
          }
           ?>
           <br>
        <input class="button is-link" type="submit" name="submit" value="submit">
      </form>
      <?php echo $message; ?>
    </div>
  </div>  
</div> 
<script type="text/javascript">
  function test(){
    societe = $('#idsociete').val();
    index = '#test' + societe;
    selectToShow = $(index);
    selectToHide = $("[id^='test']");
    selectToHide.addClass('hidden');
    selectToShow.removeClass('hidden');
  }
</script>
