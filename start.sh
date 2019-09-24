#bin/bash

echo "Bem-vindo ao SOD 2.0\n";

echo "Criado pela DigitalOcean, desenvolvedor utilizador: Leonardo Costa Sabino";

cp .env.example .env

cp .env.example .env.backup

docker run --rm -v $(pwd):/app composer install

docker run -v $(pwd):/app -w /app node:7 npm install

docker-compose kill

docker-compose up -d --build

sudo chmod 755 -R .

sudo chmod 777 -R storage

sudo chmod 777 -R public

docker-compose exec app php artisan storage:link

docker-compose exec app php artisan key:generate

sudo echo "127.0.1.1 local.sod.unisuam.edu.br" >> /etc/hosts

echo "Finalizado"

echo "Por favor entre no seu navegador e digite: local.sod.unisuam.edu.br/home"

#echo -e 'docker-compose exec db mysql -u root -p\n docker-compose exec db show databases;\n docker-compose exec db GRANT ALL ON sod.* TO 'sistemas'@'%' IDENTIFIED BY '123456';\n docker-compose exec db FLUSH PRIVILEGES;'

#docker-compose exec app php artisan migrate
