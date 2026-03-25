FROM php:8.2-fpm

RUN apt-get update && apt-get install -y nginx && rm -rf /var/lib/apt/lists/*

COPY nginx.conf /etc/nginx/nginx.conf
COPY index.php /var/www/html/index.php

EXPOSE 80

# Indítsd PHP-FPM TCP-n 9000 porton, majd NGINX foreground-ban
CMD php-fpm -F -R -y /usr/local/etc/php-fpm.conf -O "listen=0.0.0.0:9000" & nginx -g "daemon off;"