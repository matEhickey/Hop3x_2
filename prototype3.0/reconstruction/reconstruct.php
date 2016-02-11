<?php
    
    //copie du prototype python, pas encore essayé
    
    
    
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
    
    
    
    $file_id = $_POST['id'];
    $events = getEventsByFile($file_id);
    
    $listOfEvents = [];
    
    for_each($events as $event){
        $texts = getTextLineByEvent($event["id"]);
        $removed = getRemovedLineByEvent($event["id"]);
        array_push($listOfEvents,new Event($event["time"],$event["f_l"],$event["t_l"],$event["f_c"],$event["t_c"],$texts,$removed));
    }
    
    
    
    
    //construction
        
    $file = [""];
    
    for_each($listOfEvent as $event){
        $before = substr(file[$event->f_l], 0 ,$event->f_c);    //debut de la premiere ligne a etre modifie
        $after = substr(file[$event->t_l], len($file[$event->t_l])-$event->t_c);    //fin de la derniere ligne a etre modifie
        $to_desc = $event->t_l - $event->f_l;//nombre de ligne a remonter a la fin
        
        //suppression
        $nline = $event->f_l;  #ligne de depart
        for_each($event->removed as $removed){
            if(($nline >= event->f_l)&&($nline <= event->t_l)){
                $file[$nline] = "";     //vide les lignes concernees par cet evt
            }
            $nline+=1;
        }
        
        
        //ajout
        $nline = $event->f_l;
        for_each($event->texts as $text){
            if($nline == $event->f_l): #si ligne de depart, ajoute le debut de la premiere ligne
                $file[$nline] = $before.$text;
            else:
                array_insert($file,$nline,$text);
            if(($nline-$event->f_l) == (count($event->texts)-1)){   # si ligne de fin ajoute la fin de la derniere ligne
                $file[$nline] = $file[$nline]+$after;
            }
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
                    $i+=1;
                }               
            }
            #supprimer les dernieres
            $i=0;
            while($i<$to_desc){
                array_pop($file);
                $i+=1;
            }
        }
        
    }
    
    
    
    
    
    
    
    
    
    
    
    

?>