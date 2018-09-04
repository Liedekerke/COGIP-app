<div class="columns structure-pages">
 <div class="column is-4 is-offset-4">    
    <div class="box">
      <form class="" action="" method="post">
        <h2 class="subtitle is-size-3 has-text-weight-bold"> Ajouter une nouvelle facture</h2>
        <label for="">Date de facture</label>
        <input class="input is-link is-rounded" type="date" name="datefacture" value="" required>
        <br><br>
        <label for="">Motif de prestation</label>
        <input class="input is-link is-rounded" type="text" name="prestationmotif" value="" required>
        <br><br>
        <label for="">Societe</label>
        <div class="select is-link is-rounded">
          <select class="" name="idsociete" id='idsociete' required onchange="test()">
            <?php while ($donnee = $societelist->fetch()) { ?>
              <option value="<?php echo $donnee['idsociete'] ?>"><?php echo $donnee['socialname'] ?></option>
            <?php } ?>
          </select>
        </div>
        <br><br>
        <label for="">Personne de contact</label>
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
        <br><br>
        <input class="button is-link is-rounded is-pulled-right" type="submit" name="submit" value="ajout">
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
