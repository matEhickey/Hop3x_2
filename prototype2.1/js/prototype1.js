					function enableDescrTest(testNum){
					//fonction qui masque tout les boutons tests de l editeur, puis reactive si besoin le bouton cliqué


							//alert("(dis/en)able test"+testNum);
							element = document.getElementById("descrTest"+testNum);
							styleOld = element.style.display;//memoire de l etat init
							all = document.getElementsByClassName("descrTest");
							
							i = 0;
							size = all.length;
							//console.log(size);
							
							while(i<size){
								all[i].style.display="none";
								i+=1;
							}
							if(styleOld == "none"){
								element.style.display = "initial";
							}
							else{
								//deja en none
							}
							
						}


					
						function print_debug(e){
							document.getElementById("debugView").innerHTML += e;			
						}
						function println_debug(e){
							document.getElementById("debugView").innerHTML += e + "\n# ";			
						}
						
					
					
						function handler(editor,event){
							//preparation et envoi de l ajax
							
								//formate l evenement, grace aux argument de event, l id de l utilisateur, l id du fichier
							print_debug("event at timestamp "+ Date.now() +"  : \n");
							print_debug("    from line "+event.from.line+"  col "+event.from.ch+"\n");
							print_debug("    to line "+event.to.line+"  col "+event.to.ch+"\n");
							//console.log(event);
							//console.log(Object.getOwnPropertyNames(event.removed).toString());
							
							
							print_debug("    text("+event.text.length+"): \'"+event.text+"\'"+"\n");
							println_debug("    removed("+event.removed.length+"): \'"+event.removed+"\'"+"\n");
							
							
							//save via ajax  -> js/myAjax.js
							
							SauvegardeEvent("0",Date.now(),event.text,event.removed);
							
									
						}

						