FROM php:7.3-fpm

RUN apt-get update -y && \
    apt-get install -y git libcurl4-openssl-dev libssl-dev net-tools \
    pkg-config supervisor unzip vim zip zlib1g-dev 

# Install php composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /home/app