FROM php:apache

# Instala la extensión mysqli
RUN docker-php-ext-install mysqli
