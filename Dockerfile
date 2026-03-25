FROM php:8.2-fpm

# Nginx telepítés
RUN apt-get update && apt-get install -y nginx

# Mappa létrehozás
WORKDIR /var/www/html

# Kód bemásolása
COPY src/ /var/www/html/

# Nginx config bemásolása
COPY nginx.conf /etc/nginx/nginx.conf

# Port (Railway ezt várja)
EXPOSE 8080

# Indítás
CMD service nginx start && php-fpm