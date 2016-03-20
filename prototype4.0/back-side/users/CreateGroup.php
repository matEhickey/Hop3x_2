<?php
	//include("../../back-side/users/scaffoldGroup.php");
	
		$groupnom = $_POST['nom'];
		$validation = getGroupName();
		$y = TRUE;
		$b = 0;
		$i = 0;
		
		if (sizeof($validation)>0){
			while ($y == TRUE && $i < count($validation)){
				foreach($validation as $value){
					if($value == $groupnom){
						$y = FALSE;
					}
					else{
						$y = TRUE;
						$i++;
					}
			
				}
			}
		}
		else{
			createGroup($groupnom);
			$y = FALSE;
		}

		if($y == TRUE){
			createGroup($groupnom);
		}
?>