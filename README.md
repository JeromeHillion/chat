# Réalisation d'un Chat avec PHP (et un peu de javascript)

Dans cet exercice, vous allez utiliser les notions abordées précédemment pour construire un module de chat :

* Pour le markup HTML vous pouvez vous aider de Bootstrap.
* Les données devront être enregistrées dans une base de données à l'aide de PHP.


## Contrainte

Le module doit être fonctionnel sans Js, le js sera une surcouche rajoutée afin de rendre l'expérience utilisateur plus fluide.

## Méthodologie

### Architecture du module

* index.php //fichier principal
* chat.php //contient le script de traitement du formulaire
* css/style.css //stylage
* views/
        index.phtml


### Conception

* Le markup sera divisé en 2 zones :
    - un container incluant le contenu des discussions du chat
    - un formulaire de saisie
* Dans un premier temps, Les données seront composées :
    - d'un pseudo (nickname) 
    - d'un message (message)

ces données seront obligatoires pour valider le traitement du formulaire.

### Etapes
1. Construire le markup HTML et la mise en forme.
2. Construire la base de données
3. Rajouter du faux contenu dans la base de données
4. Constuire votre requete de selection (SELECT), pour afficher le contenu du chat dans votre page principal
5. Traiter le formulaire (chat.php), en fin de traitement, mettre en place une redirection vers index.php


### Bonus

#### rajouter une colonne chatDate dans la base de données de type datetime

mettre en place les modifs dans le code (afficher la date dans la liste)

#### formulaire de création de compte

#### formulaire d'identification pour utiliser le chat

#### formulaire de modification du compte

#### possibilité de modifier ou supprimer ses messages

#### formulaire d'upload de l'avatar

#### rajouter du javascript pour éviter de recharger les pages (rafraichir la liste du chat, et poster une contribution)

