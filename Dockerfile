FROM php:7.2.2-apache
RUN apt-get update && docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli pdo pdo_mysql
COPY . /var/www
EXPOSE 80