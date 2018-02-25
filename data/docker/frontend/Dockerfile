FROM php:7.1-apache

WORKDIR /var/www

COPY .bash_aliases /root/.bash_aliases
COPY .bashrc /root/.bashrc

RUN apt-get update && apt-get install -y --no-install-recommends apt-utils \
    libmcrypt-dev \
    git \
    wget \
    nano \
    mysql-client \
    supervisor \
    && docker-php-ext-install mcrypt pdo_mysql

RUN set -x \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

COPY php.ini /usr/local/etc/php/

COPY super-test.loc.conf /etc/apache2/sites-available/
RUN a2ensite super-test.loc
RUN sed -i 's#DocumentRoot /var/www/html#DocumentRoot /var/www/public#' /etc/apache2/apache2.conf

RUN a2enmod rewrite

RUN usermod -u 1000 www-data