<?php
	include("../commons/commonBegin.php");
?>

<?php 
	if(isset($_POST['connecter'])){
		$username=$_POST['Utilisateur'];
		$passe=$_POST['motDePasse'];
		if(($username=="doutoum@gmail.com")&&($passe=="AZERTY")){
			echo "Username : ".$username." <br/>";
			echo "password : ".$passe." ";
		}else{
			echo 'erreur de connexion';
		}
	}
?>

<div class="row">

	<div class="col-md-4">

	<ul style="list-style-type:none;">
		<li>
		    <a href="AjoutSession.php" class="btn btn-primary btn-lg btn block">session</a>
		</li>
		<li>
		   <a href="#" class="btn btn-primary btn-lg btn block">Test</a>
		</li>
		<li>
		   <a href="#" class="btn btn-primary btn-lg btn block">Examen</a>
		</li>
		<li>
		   <a href="#" class="btn btn-primary btn-lg btn block">Projet Personel</a></li>
	</ul>
	</div>
	<div class="col-md-8">
	  <p>h;jhk:j:gfhgjkljkhhjeghklzhjksbjhjehjbhkjjhqkhgbajzqvghklbkjf
	hhgj;gjmkj;k:,;kjfvhk:;hfkjv;jlktfgjkt!flglkfgjvbklkjfgvjknfkvhjckjjk
	  </p>
	</div>


</div>




<?php
	include("../commons/commonEnd.php");
?>
