FROM php:7.4.10-fpm
RUN apt-get update && apt-get upgrade -y \
    && pecl install xdebug && docker-php-ext-enable xdebug