Test technique PHP

 1- Ouvrir le terminal et acceder le dossier d'instalation
 (eg..) cd Desktop/test_technique_php

 2-Installer les dependencies
 Taper les commandes: npm install et npm run dev

 3-Mettre en place la base de données

 Option 1: 
 Importer le script testkoji.sql directement sur phpmyadmin

 Option 2:
 Taper les commandes: php bin/console doctrine:database:create sur le terminal
                      php bin/console make:migration
                      php bin/console doctrine:migrations:migrate

Dans les deux cas il faut-il mettre à jour le fichier .env ligne 33 (DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7) avant.

ex: db_user = root
    db_password = ''
    db_name = testkoji

DATABASE_URL=mysql://root:@127.0.0.1:3306/testkoji?serverVersion=10.4.14-MariaDB

4-Lancer l'applications sur le navigateur
Taper la commande sur le terminal: php -S localhost:8000 -t public/
Ouvrir le navigateur et taper l'url   localhost:8000

Pour lancer l'application il faudrait avoir php 7.4 installé



