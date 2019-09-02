#bin/bash

echo -e "Bem ao Docker-Laravel\n";

echo -e "Criado pela DigitalOcean, desenvolvedor utilizador: Leonardo Costa Sabino";

sleep 2;

docker run --rm -v $(pwd):/app composer install

docker-compose up --build
