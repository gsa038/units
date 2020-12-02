FROM php:7.4.10-fpm
RUN apt-get update && apt-get upgrade -y \
    && pecl install xdebug && docker-php-ext-enable xdebug \
    && apt-get autoremove --purge -y && apt-get autoclean -y && apt-get clean -y \
    && rm -rf /var/lib/apt/lists/* \
    && rm -rf /tmp/* /var/tmp/* \