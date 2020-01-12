# from https://www.drupal.org/docs/8/system-requirements/drupal-8-php-requirements
FROM php:7.3-apache-stretch

RUN apt-get update -y && \
    pecl install mongodb && \
    echo "extension=mongodb.so" >> /usr/local/etc/php/conf.d/mongodb.ini

WORKDIR /var/www/html

EXPOSE 80