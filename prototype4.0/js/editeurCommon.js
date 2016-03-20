					
					var eventEnable = true;
					var file_id = -1;
					
					


					
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
							
							
								//save via ajax 
								if(file_id != -1){
									var event_id = SauvegardeKeyboardEvent(file_id,Date.now() , event.from.line, event.to.line , event.from.ch, event.to.ch  ,event.text,event.removed);
								}
								else{
									alert("no file to write");
								}
							}
						}
						
						function afficheEvent(event){
							print_debug("event at timestamp "+(Date.now())+"  : \n");
							print_debug("    from line "+event.from.line+"  col "+event.from.ch+"\n");
							print_debug("    to line "+event.to.line+"  col "+event.to.ch+"\n");
							console.log(event);
							console.log(Object.getOwnPropertyNames(event.removed).toString());
						
						
							print_debug("    text("+event.text.length+"): \'"+event.text+"\'"+"\n");
							println_debug("    removed("+event.removed.length+"): \'"+event.removed+"\'"+"\n");
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
						
						function initEnonces(){
							//console.log("call to initEnonces");
							var fenetreEnonce = document.getElementById("fenetreEnonce");
							if(fenetreEnonce != null){
								enonceActuel = 0;	//instance unique, pas de var
								afficheEnonce(enonceActuel);
							}
						}
						
						function afficheEnonce(id){
							var enonces = document.getElementsByClassName("enonce");
							if(enonces.length > 0){
								//console.log("len = "+enonces.length+ "   id="+id);
								if(id<enonces.length && id >= 0){
									for(var i = 0; i< enonces.length;i++){				
										enonces[i].style.display = 'none';
									}
									enonces[id].style.display = 'block';
									enonceActuel = id;
								
								}
								else if(id >= enonces.length){
									alert("Bravo, c'etait le dernier enoncé");
								}
							}
							else{
								var fenetreEnonce = document.getElementById("fenetreEnonce");
								fenetreEnonce.style.display = 'none';
							}
						}
						
						
						function enoncePrecedent(){
							afficheEnonce(enonceActuel-1);
						}
						
						function enonceSuivant(){
							afficheEnonce(enonceActuel+1);
						}
						
						function setEditorLanguage(language_id){
							//change la coloration syntaxique
							switch(language_id){
								case(0):
									console.log("change color to C");
									editor.setOption("mode","text/x-csrc");
									break;
								case(1):
									console.log("change color to Ruby");
									editor.setOption("mode","text/x-ruby");
									break;
								case(2):
									console.log("change color to Java");
									editor.setOption("mode","text/x-java")
									break;
								case(3):
									console.log("change color to Python");
									editor.setOption("mode","python");
									break;
							}
						}
						
						
