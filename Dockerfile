FROM php:8.2-fpm

# Telepítsünk NGINX-et
RUN apt-get update && apt-get install -y nginx && rm -rf /var/lib/apt/lists/*

# Másoljuk a fájlokat
COPY index.php /var/www/html/index.php
COPY nginx.conf /etc/nginx/nginx.conf

# Expose port 80
EXPOSE 80

# Indítsuk PHP-FPM-et TCP-n localhost:9000, majd NGINX foreground-ban
CMD php-fpm -F -R -O "listen=127.0.0.1:9000" & nginx -g "daemon off;"