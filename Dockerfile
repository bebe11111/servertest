FROM php:8.2-fpm

# Install NGINX
RUN apt-get update && apt-get install -y nginx && rm -rf /var/lib/apt/lists/*

# Copy NGINX config
COPY nginx.conf /etc/nginx/nginx.conf

# Copy PHP app
COPY index.php /var/www/html/index.php

# Expose port 80
EXPOSE 80

# Start both PHP-FPM and NGINX in foreground
CMD php-fpm -F & nginx -g "daemon off;"