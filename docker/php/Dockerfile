FROM php:7.0-fpm-alpine
 
RUN apk update --no-cache \
&& apk add \
icu-dev \
oniguruma-dev \
tzdata
 
RUN docker-php-ext-install intl

RUN docker-php-ext-install pcntl

RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN docker-php-ext-install mbstring

RUN docker-php-ext-install opcache
COPY ./php/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

RUN rm -rf /var/cache/apk/*
 
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer
 
CMD ["php-fpm"]



# FROM php:fpm-alpine
# RUN docker-php-ext-install opcache
# COPY php/production/opcache.ini /usr/local/etc/php/conf.d/opcache.ini
# #COPY ./data/ /var/www/html/