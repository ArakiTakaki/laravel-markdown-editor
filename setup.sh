#!bin/bash

PROJECT_DIR="PROJECT_DIR=${PWD}/public"

git clone https://github.com/laradock/laradock
cp env-example .env

# Laradockの設定
cp laradock-env-example ./laradock/.env
cd laradock
docker-compose up -d mysql apache2 workspace phpmyadmin
php artisan key:generate
cd ..
# Laradockの設定

# nodeの設定
cd frontend
echo $PROJECT_DIR >> .env
npm install
# nodeの設定
