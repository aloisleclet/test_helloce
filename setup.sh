#!/bin/bash

#install db

echo "MYSQL -> DATABASE CREATION (password required)"

mysql -u root -p -e "CREATE DATABASE IF NOT EXISTS db_helloce;
CREATE USER 'helloce'@'localhost' IDENTIFIED BY '6Yv5cThAaHbawKWL';
GRANT ALL PRIVILEGES ON *.* TO 'helloce'@'localhost';
FLUSH PRIVILEGES;"

cd ./laravel

#install

composer install
composer update

npm install
npm update

#db migration

php artisan migrate

#launch server

php artisan serve
