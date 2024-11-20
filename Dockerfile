FROM php:8.3-fpm

RUN apt-get update && apt-get install -y git

COPY . /var/www/html

WORKDIR /var/www/html