FROM php:8.0-apache
WORKDIR /var/www/html
COPY index.php index.php
COPY api.php api.php
EXPOSE 80
