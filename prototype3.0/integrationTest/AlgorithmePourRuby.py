import sys
def chercherMainDansRuby(nomFicherSource,nomFicherTest):
	f=open(nomFicherSource,"r")
	ll=f.readlines()
	f.close()
	fichSourceDecompose=nomFicherSource.split('.')
	nomFicherSourceSansExt=fichSourceDecompose[0]
    
	fichTestDecompose=nomFicherTest.split('.')
	nomFicherTestSansExt=fichTestDecompose[0]
	#print(nomFicherTestSansExt)
    
	ll.insert(0,nomFicherTestSansExt+".test1()\n")
	f=open(nomFicherSourceSansExt+"Debug.rb","w+")   
	for ligne in ll:
		f.write(ligne)
	f.close()
	###on lance la compilation par la suite
	print('génération réussie')

chercherMainDansRuby(sys.argv[1],sys.argv[2])
