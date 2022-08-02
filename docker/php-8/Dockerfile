FROM php:8-fpm-nginx

RUN apt-get update && \
    apt-get upgrade -y 
RUN docker-php-ext-install mysqli pdo pdo_mysql && \
    docker-php-ext-enable pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

# Timezone
ENV TZ 'America/Sao_Paulo'
RUN echo $TZ > /etc/timezone
RUN rm /etc/localtime
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime
RUN dpkg-reconfigure -f noninteractive tzdata