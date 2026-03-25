FROM php:8.2-fpm

COPY index.php /var/www/html/index.php

EXPOSE 9000

CMD ["php-fpm"]

FROM nginx:stable

COPY nginx.conf /etc/nginx/nginx.conf

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]