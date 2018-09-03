<form action="" method="post">
  <div class="columns">
  	<div class="column"></div>
  	<div class="column-is-four-fifths">
  		<h1 class="title">Connectez-vous à votre compte</h1>
		<div class="field">
		  <p class="control has-icons-left has-icons-right">
		    <input class="input" type="text" name="username" value="" placeholder="username">
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
		    <input class="input" type="password" name="password" value="" placeholder="Password">
		    <span class="icon is-small is-left">
		      <i class="fas fa-lock"></i>
		    </span>
		  </p>
		</div>
		<div class="field">
		  <p class="control">
		    <button class="button is-info is-large" name="submit" value="submit">
		      Login
		    </button>
		  </p>
      <?php echo $errormessage; ?>
		</div>
	</div>
	<div class="column"></div>
  </div>
</form>
