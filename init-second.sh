#!/bin/bash

cd /var/www/html
chmod +x composer.phar
./composer.phar install
cp .env.example .env
php artisan key:generate
php artisan migrate
chmod 755 -R ../html
chmod -R o+w storage
exit
