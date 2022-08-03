FROM php:8.1-apache

RUN apt-get update && \
    apt-get upgrade -y 
RUN docker-php-ext-install mysqli pdo pdo_mysql && \
    docker-php-ext-enable pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash -
RUN apt-get install -y nodejs
RUN service apache2 restart
# Timezone
ENV TZ 'America/Sao_Paulo'
RUN echo $TZ > /etc/timezone
RUN rm /etc/localtime
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime
RUN dpkg-reconfigure -f noninteractive tzdata

WORKDIR /var/www/html
COPY ./src/ /var/www/html
RUN apt-get install -y git
RUN apt-get install -y unzip
RUN cd /var/www/html && \
    composer require laravel/ui && \
    composer install && \
    php artisan key:generate && \
    php artisan route:clear && \
    php artisan route:cache
RUN npm install
RUN apt-get install -y nano
#RUN nano /etc/apache2/error.log
RUN chown -R www-data:www-data /var/www/html
USER www-data:www-data