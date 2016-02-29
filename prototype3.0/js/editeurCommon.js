					
					var eventEnable = true;
					var file_id = -1;
					
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
						
					
					
						function saveEvent(editor,event){
							//preparation et envoi de l ajax pour evenement clavier
							
								//formate l evenement, grace aux argument de event, l id de l utilisateur, l id du fichier
							if(eventEnable){
								//print_debug("event at timestamp "+(Date.now())+"  : \n");
								//print_debug("    from line "+event.from.line+"  col "+event.from.ch+"\n");
								//print_debug("    to line "+event.to.line+"  col "+event.to.ch+"\n");
								//console.log(event);
								//console.log(Object.getOwnPropertyNames(event.removed).toString());
							
							
								//print_debug("    text("+event.text.length+"): \'"+event.text+"\'"+"\n");
								//println_debug("    removed("+event.removed.length+"): \'"+event.removed+"\'"+"\n");
							
							
								//save via ajax  -> js/myAjax.js
								if(file_id != -1){
									var event_id = SauvegardeKeyboardEvent(file_id,Date.now() , event.from.line, event.to.line , event.from.ch, event.to.ch  ,event.text,event.removed);
								}
								else{
									alert("no file to write");
								}
							}
							
							
							
						}
						
						function DesactiveKeyboardEvent(){
							eventEnable = false;
						}
						
						function ReactiveKeyboardEvent(){
							eventEnable = true;
						}
						
						function EditorSetFileId(id){
							file_id = id;
							//active edition
							editor.setOption("readOnly",false);
						}
						
						
