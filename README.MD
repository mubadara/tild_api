# README

## App Info
Développée grâce au framework PHP Leaf/API, l'application sert d'API Rest au projet "tild", consistant en une série de quizz autour du langage tech' alimentée par un dictionnaire communautaire.

## Installation
    git clone https://github.com/mubadara/tild_api.git
    composer install
Si votre installation de composer utilise php8 par défaut, vous pouvez override ce comportement en utilisant la commande suivante (systèmes arch et dérivés, n'a pas été testé ailleurs):

    php7 /usr/bin/composer install

## Dépendances
- apache
- php
- mysql
- composer
- php7, php7-cli (certaines dépendances ne sont pas compatibles PHP8)
- extensions php
    - php-gd
    - pdo_mysql
    - php-curl
    - php-exif
    - php-iconv
    - php-imap
    - php-intl
    - php-json
    - php-zip
    - PDO
    - php-mysqli
    - Zend OPCache (recommandé)
    Vous pouvez utiliser la commande suivante afin de voir les extensions actives:
        php -m
    Utilisez votre gestionnaire de paquets pour installer les extensions manquantes et/ou activez les dans le fichier php.ini de la version php utilisée, par exemple:
        /etc/php7/php.ini
    il suffit de supprimer le ";" au début d'une ligne afin de la décommenter et d'activer l'extension en question.

## Création de la base de données
- Création d'un fichier .env, se référer au fichier .env.example (en prenant soin de modifier la variable APP_KEY) concernant la syntaxe
- Création d'un utilisateur pour la base données
- Création de la base de données associée
    - Ligne de commandes ou phpmyadmin
    - N'hésitez pas à vous réferer à la documentation de votre SGBD ou à celle de phpmyadmin

## Initialisation de la base de données
Les fichiers de migrations sont à jour, il suffit donc de lancer la commande suivante:

    php leaf db:migrate

Si vous souhaitez charger les dummies afin de remplir votre base de données de données fictives:

    php leaf db:seed

## Instructions de déploiement
À venir