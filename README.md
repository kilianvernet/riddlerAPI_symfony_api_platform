# riddlerAPI_synfony_api_platform

## Prérequis
- mysql
- composer

## Préparation de la base de données
- CREATE DATABASE riddlerapi;
- GRANT ALL PRIVILEGES ON riddlerapi.* TO edward@localhost IDENTIFIED BY 'nigma';

## Installation
- Cloner ce dépôt
- se déplacer dans le dossier du dépôt et lancer la commande : **php bin/console doctrine:migrations:execute --up 'DoctrineMigrations\Version20220330115434'**
- Lancer un serveur web avec php : **php -S 127.0.0.1:8000 -t public**
- L'API se trouve à l'adresse suivante : **http://127.0.0.1:8000/api**
