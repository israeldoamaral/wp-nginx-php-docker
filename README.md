# Passos

- Build das imagens

docker build -t nginx -f nginx/Dockerfile .

docker build -t php-fpm -f php/Dockerfile .

# criar a rede

docker network create wordpress

# executar oa containers

docker run -d --name php \
-p 9000:9000 \
-v ./www:/var/www/html \
--network wordpress \
php-fpm


OBS corrigir: 2024/05/01 20:18:46 [emerg] 1#1: host not found in upstream "php" in /etc/nginx/conf.d/default.conf:14 - Tem que ficar atualizando o nome do container php

docker run -d --name nginx \
-p 80:80 \
-v ./logs/nginx:/var/log/nginx \
-v ./www:/var/www/html \
--network wordpress \
nginx


docker run -d --name mysql \
-p 3306:3306 \
-v ./database/mysql:/var/lib/mysql \
-e MYSQL_ROOT_PASSWORD=rootpassword \
-e MYSQL_DATABASE=helloworld \
-e MYSQL_USER=helloworld \
-e MYSQL_PASSWORD=helloworldpassword \
--network wordpress \
mysql:8.0.32 --default-authentication-plugin=mysql_native_password


--default-authentication-plugin=caching_sha2_password
-e MYSQL_ROOT_HOST='%'


docker exec -it mysql mysql -uroot -p

SELECT User, Host FROM mysql.user;


ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'rootpassword';
ALTER USER 'helloworld'@'%' IDENTIFIED WITH mysql_native_password BY 'helloworldpassword';

FLUSH PRIVILEGES;

docker run --rm --name phpmyadmin --network wordpress -p 8085:80 -e PMA_HOST=mysql -e PMA_PORT=3306 -e PMA_ARBITRARY=1 phpmyadmin/phpmyadmin


sudo chown -R www-data:www-data wp-content
sudo chmod 777 wp-content -R