FROM php:7.3

RUN apt-get update && \
    apt-get install -y git libzip-dev libxml2-dev && \
    docker-php-source extract && \
    docker-php-ext-install zip xml && \
    docker-php-source delete

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY ./code /usr/src/app

WORKDIR /usr/src/app

RUN composer install --no-dev

EXPOSE 8080

# DO NOT DO THIS IN REAL PRODUCTION
CMD php -S 0.0.0.0:8080 -t public/ public/index.php