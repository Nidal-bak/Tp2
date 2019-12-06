# Squelette Symfony avec dossier assets préparé pour app web tablet & desktop ; avec creation d'entité et integration de base de donnée

## Pré-requis

* avoir composer installé (gestionnaire de package php)
* avoir yarn installé (gestionnaire de packages, surcharge npm)

## Installation

Une fois cloné en local, se déplacer dans la racine du projet puis :
 
* `composer update`, installe les packages php décrits dans composer.json 
* `yarn install`, installe les packages js décrits dans package.json

Et ensuite pour travailler : 

* `./bin/console doctrine:database:create` , pour creer la base de donnée (j'ai utilisé sqllite , vous pouvez utilisé autres)

* `./bin/console doctrine:migrations:migrate` , applique le dernier fichier migrate pour creer les tables au niveau de la base de donnée

* `./bin/console s:r` ou `./bin/console server:run`, démarre un serveur web local de développement 
* `yarn watch`, exécute en continu 'encore' qui agrège les js et styles