# Programmation Web avancée:TP2


Site Web de gestion de projet pour une société de développement Web.

-la première page : page d'accueil
 => cliquer sur 'liste des sites' pour voir liste  des sites
-dans la page de la liste des site vous pouvez : ajouter, afficher,modifier et supprimer un site


# installation  

## ajout fichier **.htaccess**

RewriteEngine On

RewriteCond  %{REQUEST_FILENAME}  !-d

RewriteCond  %{REQUEST_FILENAME}  !-f

RewriteRule  ^(.+)$  index.php?url=$1 [L]

## installation composer

npm composer install


## changer la valeur de {{path}}

aller au 'library/twig.php' et changer la valeur de path par votre adresse local de serveur 

## le lien vers webdev

https://e2295531.webdev.cmaisonneuve.qc.ca/tp2-mvc