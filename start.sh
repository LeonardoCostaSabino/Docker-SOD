#bin/bash

echo -e "Bem ao Docker-Laravel\n";

echo -e "Criado pela DigitalOcean, desenvolvedor utilizador: Leonardo Costa Sabino";

sleep 2;

docker run --rm -v $(pwd):/app composer install

docker-compose up --build

docker-compose exec db bash

mysql -u root -p

show databases;

GRANT ALL ON sod.* TO 'sistemas'@'%' IDENTIFIED BY '123456';

FLUSH PRIVILEGES;

EXIT;

exit

docker-compose exec app php artisan migrate
