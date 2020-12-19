FROM php:7.2.4-apache
ADD ./php  /var/www/html
RUN docker-php-ext-install mysqli