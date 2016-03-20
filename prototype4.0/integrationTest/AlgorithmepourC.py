import sys
    
def chercherMainDansC(nomFicherSource,nomFicherTest):
	f=open(nomFicherSource,"r")
	ll=f.readlines()
	f.close()
	fichSourceDecompose=nomFicherSource.split('.')
	if len(fichSourceDecompose)==2:
		nomFicherSourceSansExt=fichSourceDecompose[0]
    
	fichTestDecompose=nomFicherTest.split('.')
	if len(fichTestDecompose)==2:
		nomFicherTestSansExt=fichTestDecompose[0]
		#print(nomFicherTestSansExt)
	#La chaine à chercher est la signature de main
	i=0
	index = 0;
	for ligne in ll:
		if ligne.find(" main(")!=-1 or ligne.find(" main ")!=-1:
			print("Main trouvé à la ligne "+str(i))
			index = i
		i+=1
	ll.insert(1,"#include <"+nomFicherTestSansExt+".h>\n")
	ll.insert(index+2,"if(test1())\n")
	f=open(nomFicherSourceSansExt+"Debug.c","w+")   
	for ligne in ll:
		f.write(ligne)
	f.close()
	print('génération réussie')
######################### appel de la fonction ##################"""
chercherMainDansC(sys.argv[1],sys.argv[2])
