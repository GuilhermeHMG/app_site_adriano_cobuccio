FROM php:7.4-apache

ARG user
ARG uid

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg62 \
    libonig-dev \
    libxml2-dev \
    libgeos-dev \
    zip \
    unzip \
    nano

RUN pecl install xdebug-2.9.8 && \
    docker-php-ext-enable xdebug

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql mysqli mbstring exif pcntl bcmath gd

COPY  --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY docker-compose/php/xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

COPY docker-compose/php/error_reporting.ini /usr/local/etc/php/conf.d/error_reporting.ini

RUN useradd -G www-data,root -u $uid -d /home/$user $user

RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

WORKDIR /var/www/html

USER $user
