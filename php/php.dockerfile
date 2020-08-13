FROM php:7.3-fpm-alpine

WORKDIR /var/www/html

#Install imagemagick:
ENV MAGICK_HOME=/usr

RUN apk --no-cache update \
    && apk --no-cache upgrade \
    && apk add --update freetype-dev libpng-dev libjpeg-turbo-dev libxml2-dev autoconf g++ imagemagick-dev imagemagick libtool make \
    && docker-php-ext-configure gd \
        --with-gd \
        --with-freetype-dir=/usr/include/ \
        --with-png-dir=/usr/include/ \
        --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd \
    && docker-php-ext-install mbstring \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install opcache \
    && docker-php-ext-install soap \
    && docker-php-ext-install pdo pdo_mysql \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && apk del autoconf g++ libtool make
