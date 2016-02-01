<?php
	include("../commons/commonBegin.php");
?>
<div>
	<div class="col-md-4">
		<form action="tableau_bord.php" method="post">
		  <div class="form-group">
		    <label for="Utilisateur">Nom Utilisateur</label>
		    <input type="email" class="form-control" name="Utilisateur" />
		  </div>
		  <div class="form-group">
		    <label for="motDePasse">Mot de passe</label>
		    <input type="password" class="form-control" name="motDePasse" />
		  </div>
		  <input type="submit" class="btn btn-default" 
			value="connecter"  name="connecter" id="connecter" />
		</form>
	</div>
	<div class="col-md-8">
		<p>Bonjour Monsieur</p>
	</div>
</div>


<?php
	include("../commons/commonEnd.php");
?>
