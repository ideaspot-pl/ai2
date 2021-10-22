FROM php:8.0-apache

RUN apt-get update \
  && apt-get install -y \
        libzip-dev \
        zip \
        sqlite3 \
  && docker-php-ext-install zip \
  && docker-php-ext-configure pdo_mysql \
  && docker-php-ext-install pdo_mysql \
  && pecl install xdebug-3.1.1 \
  && docker-php-ext-enable xdebug

RUN apt-get update \
    && apt-get install wget \
    && wget https://get.symfony.com/cli/installer -O - | bash \
    && mv /root/.symfony/bin/symfony /usr/local/bin/symfony \
    && apt-get clean

RUN a2enmod rewrite

COPY ./apache2.conf /etc/apache2/
COPY ./000-default.conf /etc/apache2/sites-enabled/
COPY ./docker-php-ext-xdebug.ini /usr/local/etc/php/conf.d/
