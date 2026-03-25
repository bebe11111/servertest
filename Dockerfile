# PHP + FPM image
FROM php:8.2-fpm

# Telepíts Nginx-t
RUN apt-get update && apt-get install -y nginx

# NGINX konfiguráció másolása
COPY nginx.conf /etc/nginx/nginx.conf

# Projekt fájlok másolása
COPY . /var/www/html

# NGINX és PHP-FPM egyidejű futtatása
CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]