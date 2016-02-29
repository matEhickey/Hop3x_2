
import time

class Evenement:
    i=0
    
    def __init__(self,f_l,f_c,t_l,t_c,text,removed):
        ##print("hello");
        self.f_l = f_l
        self.f_c = f_c
        self.t_l = t_l
        self.t_c = t_c
        self.text = text
        self.removed = removed
        
        self.time = Evenement.i #les evenements arrivenet classes par temps        
        Evenement.i += 1
        
events = []

events.append( Evenement(0,0,0,0,["a"],[""]) )
events.append( Evenement(0,1,0,1,["b"],[""]) )
events.append( Evenement(0,2,0,2,["c"],[""]) )
events.append( Evenement(0,3,0,3,["d"],[""]) )
events.append( Evenement(0,4,0,4,["e"],[""]) )
events.append( Evenement(0,5,0,5,["", ""],[""]) )
events.append( Evenement(1,0,1,0,["1"],[""]) )
events.append( Evenement(1,1,1,1,["2"],[""]) )
events.append( Evenement(1,2,1,2,["3"],[""]) )
events.append( Evenement(1,3,1,3,["4"],[""]) )
events.append( Evenement(1,4,1,4,["5"],[""]) )
events.append( Evenement(1,5,1,5,["", ""],[""]) )






file = [""]



#construction evenement par evenement
for event in events:
    
    
    before = file[event.f_l][:event.f_c]#stocke le debut de la premiere ligne qui concerne l'evt
    after = file[event.t_l][event.t_c:]#stocke la fin de la derniere ligne qui concerne l'evt
    
    #suppression
    to_desc = (event.t_l-event.f_l)  
    
    nline = event.f_l #ligne de depart de la supr
    for line in event.removed:
        if((nline >= event.f_l)and(nline <= event.t_l)):
            file[nline]=""  #vide toute les lignes dans les limites
        nline+=1

    #ajout
    nline = event.f_l #ligne de depart de l'ajout
    for line in event.text:
        #print("line = "+file[nline]);
        if(nline == event.f_l): #si ligne de depart, ajoute le debut de la premiere ligne
            file[nline] = before+line
        else:
            file.insert(nline,line)
        if((nline-event.f_l) == (len(event.text)-1)):   # si ligne de fin ajoute la fin de la derniere ligne
            file[nline] = file[nline]+after
        nline +=1
        
    
    #post formatage 
    if(to_desc>0):
        #descendre les lignes
        i=0
        while(i<len(file)):
            if(i>event.t_l):
                file[i-to_desc] = file[i]
                file[i] = ""
            i+=1
        #supprimer les dernieres
        i=0
        while(i<to_desc):
            file.pop()
            i+=1
        
    print(file)
    time.sleep(0.1)



















        
    

