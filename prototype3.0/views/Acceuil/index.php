<?php

	include("../../commons/commonBegin.php");
	
	//affichage d'un message d'erreur en fonction du context
	if(isset($_GET["message"])){
		$message = $_GET["message"];
		if($message){
			echo "<strong>".$message."</strong>\n";
		}
	}
	
?>


		<div class="col-md-8 hop3xBox" >
			<!-- Image et instruction-->
			<div class="row">
			<!-- Image-->
			
				<!-- <img src="http://www-info.univ-lemans.fr/wp-content/themes/departementinformatique/images/slide4.jpg" class="img-responsive"> -->
				<img src="../../assets/imageIndex.jpg" class="img-responsive">
				<!-- <img src="http://www.wefollo.com/wp-content/uploads/2015/04/HERO-tourhistory71.jpg" class="img-responsive"> -->
			
			</div>
			<div class="row">
			<!-- instructions-->
				<h3>Instructions</h3>
				<div class="col-md-12">
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sed commodo ante. Pellentesque congue faucibus ultrices.
					Nulla consequat id nisl et convallis. Maecenas euismod pulvinar commodo. 
					Quisque consequat scelerisque nisl, et vestibulum lectus dignissim vel. Integer eget sem pellentesque, 
					hendrerit felis luctus, convallis mauris. In maximus, quam dapibus aliquam scelerisque, nulla mi placerat nibh, 
					non consequat est tellus vitae mauris. Sed interdum iaculis mauris, at tristique purus. Fusce sit amet vestibulum odio. 
					Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed mattis est augue, 
					ut posuere purus euismod ut. Ut molestie mauris id dolor elementum, eleifend viverra nunc viverra.
					</p>
				</div>
			</div>
		</div>
		
		
		
		
		<div class="col-md-4"  style="padding:5%;">
			<!-- Logo, formulaire inscription , et bouton validation -->
			<div class="row">
				<img class="img-responsive" src="http://hop3x.univ-lemans.fr/hop3x.png">
			</div>
			<form action="../../back-side/users/login.php" method="POST">
				<div class="row">
					
					  <div class="form-group">
					    <label for="username">Username</label>
					    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="password" name ="password" placeholder="Password">
					  </div>
					
				</div>
				<div class="row" >
				<button class="btn btn-primary" type="submit" name="connexionButton">Connexion</button>
				</div>
			</form>
			<a href="../users/getTableOfUsers.php"><button class="btn btn-primary">Espace administrateur</button></a>
		</div>
		
		
<?php
	include("../../commons/commonEnd.php");
?>
