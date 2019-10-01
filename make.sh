#!/bin/bash

echo "Bem-vindo a tela de gerenciamento de criação de funções SOD 2.0 Laravel\n";

if [ $# -lt 2 ]; then
  echo "Falta argumentos para execução do script!"
  exit 1;
fi

docker run --rm --interactive --tty \
 --user $(id -u):$(id -g) \
 --volume /etc/passwd:/etc/passwd:ro \
 --volume /etc/group:/etc/group:ro \
 --volume "$PWD":/var/www/ \
 digitalocean.com/php php artisan make:$1 $2 $3 $4 $5

