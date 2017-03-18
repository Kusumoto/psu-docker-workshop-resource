FROM php:7.1-apache
RUN apt-get update && apt-get install -y --force-yes \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
        mysql-common \
        openssl \
        git \
        libpq-dev \
        libmemcached-dev \
        libicu-dev \
    && docker-php-ext-install iconv mcrypt mysqli mbstring intl calendar

CMD ["apache2-foreground"]