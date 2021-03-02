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
OK 1. Construire le markup HTML et la mise en forme.
OK 2. Construire la base de données
OK 3. Rajouter du faux contenu dans la base de données
4. Constuire votre requete de selection (SELECT), pour afficher le contenu du chat dans votre page principal
   #### mettre en place un connecteur bdd (voir bondecommande)
   #### travailler dans index.php
        OK - faire un require du connecteur bdd
        OK - préparer notre requête (récupérer l'ensemble des conversations, s'entrainer d'abord sur phpmyadmin)
        OK - exécuter la requête
        OK - récupérer le résultat et le stocker dans ($conversations)

   #### travailler dans views/index.phtml
        - afficher le contenu de $conversations

5. Traiter le formulaire (chat.php), en fin de traitement, mettre en place une redirection vers index.php
   #### travailler dans chat.php
    - tester si les champs POST du formulaire sont bien présents
    - préparer la requete d'insertion (2 paramètres dynamiques !)
    - exerequete
    - redirection vers index.php

remarque pour la requete : pas besoin de faire apparaitre Id, et Created_at (mysql gère tout seul ces valeurs)


### Bonus


#### supprimer ses messages
    rajouter un lien sur chaque contribution dans index.phtml, 
    qui va appeler delete.php en lui fesant passer en argument 
    l'id de la conversation à supprimer


#### formulaire de création de compte
    - nouvelle page (account.php -> account.phtml) :
        champs :
        - email (unique)
        - pseudo (unique)
        - mot de passe x2
        
    - rajouter une nouvelle table dans la base de données (user) :
        Id (PK)
        Email (unique)
        Nickname (unique)
        Password
        Created_at -> datetime
        Last_login -> datetime pourra être NULL
        
        
    - traitement du formulaire (accountTraitement.php)
        tester si les champs $_POST existents
        avant traitement
        
        
        //comment on gère l'enregistrement du mot de passe dans la base
        
        il redirigera vers index.php

#### formulaire d'identification pour utiliser le chat

#### formulaire de modification du compte



#### formulaire d'upload de l'avatar

#### rajouter du javascript pour éviter de recharger les pages (rafraichir la liste du chat, et poster une contribution)

