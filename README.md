# Hop3x_2
IDE Multi-langage pour les TP d'informatiques de l'UFR Sciences de L'Université du Maine

Le programme doit être un site web ou les éleves ont leurs fichiers sur le cloud, et doivent faire passer a leurs programmes des tests pour qu'ils soient conformes aux tests réalisé par leurs professeurs.

Les professeurs, eux pourront visualiser en temps réel la progression des éleves sur leurs fichiers, et des informations seront collectés pour fournir une representation graphique au professeur.

Ce programme est un projet étudiant dans le cadre du cours "Conception et developpement logiciel" du Master 1 ISI de l'université du Maine, et a été proposé par M.Jacoboni et M.Desprès, enseignants-chercheurs a l'Institut Informatique Claude Chappe (UFR Sciences).






##GIT:
##Installation

* Pour Linux , le paquet _git_ est nécessaire; voir ci-dessous pour découvrir.

Debian et dérivés:
```Bash
sudo apt-get install git
```
Fedora:
```Bash
sudo yum install git
```

[Pour Windows]: http://windows.github.com
[Pour Mac]: http://mac.github.com

###Ajouter le repo et rediriger les push sur le repo commun

```Bash
git init
git remote add upstream https://github.com/matEhickey/Hop3x_2
git fetch upstream
```

##Utilisation (pour Linux)

En seulement 4 étapes !

1.Mettre à jour le dossier partagé

```Bash
cd "Le chemin vers le dossier cloné"
git pull https://github.com/matEhickey/Hop3x_2
```
**Rep tant que "Travail non finit"**

2.Faire un changement (travail)

3.Commiter le changement, càd mise à jour locale (Dire la mise à jour qu'on a effectué lors de nos dernières actions"
```Bash
git commit -a
```
**Fin rep**

4.Pusher votre travail (Mettre à jour le repo)
```Bash
git push https://github.com/matEhickey/Hop3x_2
```

#Voila !
