#!bin/bash
cp laradock-env-example ./laradock/.env
cd laradock
docker-compose up -d mysql apache2 workspace phpmyadmin
