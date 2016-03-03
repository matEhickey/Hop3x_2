def chercherMainDansJava(nomFicherSource,nomFicherTest):
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
    cherche = "public static void main(String [] args)"    
    i=0
    index = 0;
    for ligne in ll:
        if(cherche in ligne):
            print("Main trouver à la ligne "+str(i))
            index = i
        i+=1
    

    ll.insert(1,"import "+nomFicherTestSansExt+";\n")
    ll.insert(index+2,"\t\t"+nomFicherTestSansExt+" t=new "+nomFicherTestSansExt+"()\n\t\tt.test1();\n")
    f=open(nomFicherSourceSansExt+"Debug.java","w+")   
    for ligne in ll:
            f.write(ligne)
    f.close()
    ###on lance la compilation par la suite

def chercherMainDansPython(nomFicherSource,nomFicherTest):
    f=open(nomFicherSource,"r")
    ll=f.readlines()
    f.close()
    fichSourceDecompose=nomFicherSource.split('.')
    nomFicherSourceSansExt=fichSourceDecompose[0]
    
    fichTestDecompose=nomFicherTest.split('.')
    nomFicherTestSansExt=fichTestDecompose[0]
    #print(nomFicherTestSansExt)
    
    ll.insert(0,nomFicherTestSansExt+".test1()\n")
    f=open(nomFicherSourceSansExt+"Debug.py","w+")   
    for ligne in ll:
            f.write(ligne)
    f.close()
    ###on lance la compilation par la suite
    
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
    cherche1 = "int main(void)"
    cherche2 = "int main()"
    cherche3 = "int main(int argc, char* argv[])"
    cherche4 = "int main(int argc, char *argv[], char *envp[])"
    cherche5 ="int main(int argc, char **argv, char **envp)"
    i=0
    index = 0;
    for ligne in ll:
        if cherche1 in ligne or cherche2 in ligne or cherche3 in ligne or cherche4 in ligne or cherche5 in ligne:
            print("Main trouver à la ligne "+str(i))
            index = i
        i+=1
    
    ll.insert(1,"#include <"+nomFicherTestSansExt+".h>\n")
    ll.insert(index+2,"if(test1())\n")
    f=open(nomFicherSourceSansExt+"Debug.c","w+")   
    for ligne in ll:
            f.write(ligne)
    f.close()
######################### appel de la fonction ##################"""
    
chercherMainDansJava('Test.java',"Testeur.java")
chercherMainDansPython('Test.py','Testeur.py')
chercherMainDansC('Test.c','Testeur.c')
