#bin/bash

echo -e "Bem-vindo ao SOD 2.0\n";

echo "Criado pela DigitalOcean, desenvolvedor utilizador: Leonardo Costa Sabino";

cp .env.example .env

docker run --rm -v $(pwd):/app composer install

docker run -v $(pwd):/app -w /app node:7 npm install

sudo chmod 777 -R ../Docker-Laravel/storage

docker-compose kill

docker-compose up -d --build

docker-compose exec app php artisan storage:link

#echo -e 'docker-compose exec db mysql -u root -p\n docker-compose exec db show databases;\n docker-compose exec db GRANT ALL ON sod.* TO 'sistemas'@'%' IDENTIFIED BY '123456';\n docker-compose exec db FLUSH PRIVILEGES;'

#docker-compose exec app php artisan migrate
