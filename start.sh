#bin/bash

echo -e "Bem ao Docker-Laravel\n";

echo "Criado pela DigitalOcean, desenvolvedor utilizador: Leonardo Costa Sabino";

sleep 2;

docker run --rm -v $(pwd):/app composer install

sudo chmod 777 -R ../Docker-Laravel

docker-compose up -d --build
echo -e 'docker-compose exec db mysql -u root -p\n docker-compose exec db show databases;\n docker-compose exec db GRANT ALL ON sod.* TO 'sistemas'@'%' IDENTIFIED BY '123456';\n docker-compose exec db FLUSH PRIVILEGES;'

#docker-compose exec app php artisan migrate
