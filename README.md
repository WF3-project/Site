# Site

Pour travailler sur le projet

On récupére le projet :

cd C:\xampp\htdocs

git clone PROJET

cd PROJET

On installe les dépendances :

composer install

On configure la base de données dans .env.local.

On crée la base de données :

php bin/console doctrine:database:create

On importe le schéma de la BDD :

php bin/console doctrine:migrations:migrate

On importe les fixtures de la BDD :

php bin/console doctrine:fixtures:load


Pour bosser sur la BDD : 

Creer la database : project_wf3
