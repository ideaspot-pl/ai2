FROM php:8.0-apache
COPY ./apache2.conf /etc/apache2/

RUN apt-get update \
  && apt-get install -y \
        libzip-dev \
        zip \
        sqlite3 \
  && docker-php-ext-install zip
