FROM php:8.2-fpm

# Szükséges csomagok + Composer
RUN apt-get update && apt-get install -y nginx git unzip \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"

WORKDIR /var/www/html

# Composer dependencies telepítése (Whoops is itt lesz)
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader

# Projekt fájlok másolása
COPY . .

# Nginx konfiguráció
COPY nginx.conf /etc/nginx/nginx.conf

# Nginx + PHP-FPM indítása
CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]