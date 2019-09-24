#bin/bash

echo "Bem-vindo ao SOD 2.0\n";

echo "Criado pela DigitalOcean, desenvolvedor utilizador: Leonardo Costa Sabino";

cp .env.example .env

cp .env.example .env.backup

docker run --rm -v $(pwd):/app composer install

docker run -v $(pwd):/app -w /app node:7 npm install

sudo chmod 755 -R ../Docker-Laravel

sudo chmod 777 -R ../Docker-Laravel/storage

sudo chmod 777 -R ../Docker-Laravel/public

#sudo echo "127.0.1.1 local.sod.unisuam.edu.br" >> Documentos/leo

docker-compose kill

docker-compose up -d --build

docker-compose exec app php artisan storage:link

docker-compose exec app php artisan key:generate

echo "Finalizado"

echo "Por favor entre no seu navegador e digite: localhost/home"

#echo -e 'docker-compose exec db mysql -u root -p\n docker-compose exec db show databases;\n docker-compose exec db GRANT ALL ON sod.* TO 'sistemas'@'%' IDENTIFIED BY '123456';\n docker-compose exec db FLUSH PRIVILEGES;'

#docker-compose exec app php artisan migrate
