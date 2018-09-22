#!bin/bash
PROJECT_DIR="PROJECT_DIR=${PWD}/public"
cp laradock-env-example ./laradock/.env
cd laradock
docker-compose up -d mysql apache2 workspace phpmyadmin
cd ..
cd frontend
echo $PROJECT_DIR >> .env
