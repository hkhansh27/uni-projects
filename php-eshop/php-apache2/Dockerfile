FROM php:7.4-apache

COPY my-apache2.conf /etc/apache2/apach2.conf
RUN a2enmod rewrite

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql

RUN apt-get update && apt-get upgrade -y
