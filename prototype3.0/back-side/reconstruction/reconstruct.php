<?php
    
    
    include_once("../keyboardEvent/eventsController.php");
    include_once("../keyboardEvent/eventsTextController.php");
    include_once("../keyboardEvent/eventsRemovedController.php");
    
    
    //not mine, remplace array.insert de python
    function array_insert(&$array, $position, $insert)
    {
        if (is_int($position)) {
            array_splice($array, $position, 0, $insert);
        } else {
            $pos   = array_search($position, array_keys($array));
            $array = array_merge(
                array_slice($array, 0, $pos),
                $insert,
                array_slice($array, $pos)
            );
        }
    }
    
    
    
    class Event{
        var $texts;
        var $removed;
        
        var $time;
        var $f_l;
        var $t_l;
        var $f_c;
        var $t_c;
        
        
        function Event($time,$f_l,$t_l,$f_c,$t_c,$texts,$removed){
            $this->time = $time;
            $this->f_l = $f_l;
            $this->t_l = $t_l;
            $this->f_c = $f_c;
            $this->t_c = $t_c;
            $this->texts = $texts;
            $this->removed = $removed;
        }
        
        function display(){
            echo "event time =".$this->time;
        }
        
        
    }
    
    //fonction qui re-converti les char non admissibles
    function decrypt($chaine){
    	$retour = str_replace("®","+",$chaine);
    	$retour = str_replace("¥","'",$retour);
    	$retour = str_replace("™","&",$retour);
    	return($retour);
    }
    
    
    
    function reconstructFichier($file_id){
    
    
    
		    $events = getEvenementhop3xFile($file_id);
		    
		    $listOfEvents = [];
		    
		    foreach($events as $event){
		    	$texts = [];
			$textsTamp = getEventtext($event["id"]);
			foreach($textsTamp as $textLine){
				array_push($texts,decrypt($textLine));
			}
			
			$removed = getEventremoved($event["id"]);
			array_push($listOfEvents,new Event($event["time"],intval($event["from_l"]),intval($event["to_l"]),intval($event["from_c"]),intval($event["to_c"]),$texts,$removed));
		    }
		    
		    
		    
		    
		    //construction
		
		    $file = [""];
		    $nEvent = 0;
		    foreach($listOfEvents as $event){
		    	
		    	//echo "evnt ".$nEvent."<br>";
		    	$nEvent ++;
		    	
		    	if(count($file)<= $event->f_l){
		    		array_insert($file,$event->f_l,"");
		    	}
			$before = substr($file[$event->f_l], 0 ,$event->f_c);    //debut de la premiere ligne a etre modifie
			$after = substr($file[$event->t_l],$event->t_c);    //fin de la derniere ligne a etre modifie
		
			//echo "before :".$before."<br>";
			//echo "after :".$after."<br>";
		
			$to_desc = $event->t_l - $event->f_l;//nombre de ligne a remonter a la fin
		
			//suppression
			$nline = $event->f_l;  #ligne de depart
			foreach($event->removed as $removed){
			    if(($nline >= $event->f_l)&&($nline <= $event->t_l)){
				$file[$nline] = "";     //vide les lignes concernees par cet evt
			    }
			    $nline+=1;
			}
		
		
			//ajout
			$nline = $event->f_l;
			foreach($event->texts as $text){
				//echo "premiere ligne? ".($nline == $event->f_l)."<br>";
			    if($nline == $event->f_l){ //si ligne de depart, ajoute le debut de la premiere ligne
			    	//var_dump($text);
				$file[$nline] = $before.$text["text"];
				//echo "ligne de debut <br>";
				//echo $file[$nline]."<br>";
			    }
			    else{
				array_insert($file,$nline,$text["text"]);
				//echo "ligne du millieu<br>";
			    }
			    if(($nline-$event->f_l) == (count($event->texts)-1)){   // si ligne de fin ajoute la fin de la derniere ligne
			    	//echo $tamp.$after."<br>";
				$file[$nline] = $file[$nline].$after;
				//echo "ligne de fin<br>";
			    }
			    $file[$nline] = str_replace("!!APOST!!","'",$file[$nline]);
			    
			    $nline +=1;
			    
			    
			    
			}
		
		
		
		
			//post formatage 
			if($to_desc>0){
			    //descendre les lignes
			    $i=0;
			    while($i<count($file)){
				if($i>$event->t_l){
				    $file[$i-$to_desc] = $file[$i];
				    $file[$i] = "";
				}
				$i+=1;               
			    }
			    #supprimer les dernieres
			    $i=0;
			    while($i<=$to_desc){
				array_pop($file);
				$i += 1;
			    }
			}
		
		
			/*
			    $chaine = "";
			    foreach($file as $ligne){
			    	$chaine = $chaine.$ligne."\n";
			    }
			    
			    echo $chaine;
		
			    echo "<br><br><br>";
			    */
		
		    }
		    
		    	    $chaine = "";
		    	    $j = 0;
			    foreach($file as $ligne){
			    	$chaine = $chaine.$ligne;
			    	$j++;
			    	if($j != count($file)){$chaine .= "\n";}
			    	
			    }
			    $content =  $chaine;
			    return($content);
		
			    //echo "<br><br><br>";
		    
		    
	}
    
    
    
    
    
    
    
    
    

?>
