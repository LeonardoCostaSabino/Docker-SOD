#bin/bash

echo "Bem-vindo ao SOD 2.0\n";

echo "Criado pela DigitalOcean, desenvolvedor utilizador: Leonardo Costa Sabino";

echo "-------------MENU------------------
      | 1 - Iniciar atualização do sistema
      | 2 - Atualizar o .env
      | 3 - Adicionar Host no Linux
      | 4 - Atualizar o ambiente
      | 5 - Adicionar Permissões ao projeto"

read -r opcao

  case $opcao in
    1)
      docker run --rm -v $(pwd):/app composer install
      docker run -v $(pwd):/app -w /app node:latest npm install
      docker-compose kill
      sudo chmod 777 -R .
      docker-compose up -d
      echo "Finalizado"
      echo "Por favor entre no seu navegador e digite: local.sod.unisuam.edu.br/home"
    ;;
    2)
      cp .env.backup .env
      exit;
    ;;
    3)
      sudo echo "127.0.1.1 local.sod.unisuam.edu.br" >> /etc/hosts
    ;;
    4)
      docker-compose up -d --build
      docker-compose exec app php artisan storage:link
      docker-compose exec app php artisan key:generate
      echo "Finalizado"
      echo "Por favor entre no seu navegador e digite: local.sod.unisuam.edu.br/home"
      ;;
    5)


    ;;
esac
#echo -e 'docker-compose exec db mysql -u root -p\n docker-compose exec db show databases;\n docker-compose exec db GRANT ALL ON sod.* TO 'sistemas'@'%' IDENTIFIED BY '123456';\n docker-compose exec db FLUSH PRIVILEGES;'

#docker-compose exec app php artisan migrate
