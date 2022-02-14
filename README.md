# Art Danse - école de danse
### Asmaou, Nicolas, Pauline, Wardati

## Récupérer notre projet
1- Commencer par cloner notre repository
2- faire un **Composer install**
3- Créer un fichier .env **cp .env.example .env**
4- Compléter le fichier .env :
 - Nom de la BDD  
 - Les accès à la BDD  
5- Créer une BDD PhpMyAdmin
6- Générer une clé **php artisan key:generate**
7- Faire le lien pour les images **php artisan storage:link**
8- Lancer les migrations et les seeders **php artisan migrate:fresh --seed**
Vous pouvez maintenant lancer le projet ! 

## Connexion administrateur
1- S'incrire sur le site
2- Se connecter
3- Modifier dans la table Users la colonne admin en 1
4- Suivez le lien vers le tableau de bord
5- Depuis le tableau de bord, possiblité d'ajouter, de modifier et supprimer un article.

## Page contact
1- Nous avons utiliser MailTrap pour vérifier les envois de mails.
2- Se créer un compte MailTrap
3- Selectionner la technologie utilisée (laravel 7+)
4- Copier les instructions à coller dans le .env pour faire le lien entre notre site et Mailtrap
5- Vous pouvez envoyer un message depuis la page contact.

