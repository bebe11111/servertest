FROM php:8.2-fpm

# Telepítjük az NGINX-et
RUN apt-get update && apt-get install -y nginx && rm -rf /var/lib/apt/lists/*

# Másoljuk a fájlokat
COPY index.php /var/www/html/index.php
COPY nginx.conf /etc/nginx/nginx.conf

# Expose port 80
EXPOSE 80

# Indítsuk PHP-FPM-et a default socketen, majd NGINX-et foreground-ban
CMD php-fpm -F & nginx -g "daemon off;"