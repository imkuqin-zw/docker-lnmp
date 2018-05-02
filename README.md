# docker compose LNMP

* PHP:7.16
    * php.ini -> ./php-fpm/php.ini-production
    * composer 
* Mysql:5.7.22
    * root password 123456
* nginx:latest
    * /usr/share/nginx/html -> ./www
    * nginx/conf -> ./nginx/nginx.conf
    * conf.d -> ./nginx/conf.d

