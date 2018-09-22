#!bin/bash

PROJECT_DIR="PROJECT_DIR=${PWD}/public"

git clone https://github.com/laradock/laradock
cp env-example .env
cp laradock-env-example ./laradock/.env
cd laradock

docker-compose up -d mysql apache2 workspace phpmyadmin
php artisan key:generate
cd ..
cd frontend
echo $PROJECT_DIR >> .env
npm install
