<div class="columns structure-pages">
 <div class="column is-4 is-offset-4">
  <div class="box login">
	<form action="" method="post">
	  	<h2 class="subtitle is-size-3 has-text-weight-bold"> Connectez-vous</h2>
			<div class="field">
			  <p class="control has-icons-left has-icons-right">
			    <input class="input is-link is-rounded" type="text" name="username" value="" placeholder="username">
			    <span class="icon is-small is-left">
			      <i class="fas fa-user"></i>
			    </span>
			    <span class="icon is-small is-right">
			      <i class="fas fa-check"></i>
			    </span>
			  </p>
			</div>
			<div class="field">
			  <p class="control has-icons-left">
			    <input class="input is-link is-rounded" type="password" name="password" value="" placeholder="Password">
			    <span class="icon is-small is-left">
			      <i class="fas fa-lock"></i>
			    </span>
			  </p>
			</div>
			<label class="checkbox">
  				<input type="checkbox">
  				Remember me
			</label>
			<br>
			<div class="field">
			  <p class="control">
			    <button class="button is-link is-large is-pulled-right" name="<?php echo $buttonvalue; ?>" value="submit">
			      <?php echo $buttontext; ?>
			    </button>
			  </p>
	      		<?php echo $errormessage; ?>
			</div>
	</form>
   </div>
 </div>	
</div>
