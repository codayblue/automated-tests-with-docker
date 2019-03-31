FROM composer as composer

COPY ./code /usr/src/app

WORKDIR /usr/src/app

CMD composer install --no-dev --ignore-platform-reqs


FROM php:7.3

COPY ./code /usr/src/app
COPY --from=composer /usr/src/app/vendor /usr/src/app/vendor

WORKDIR /usr/src/app

EXPOSE 8080

# DO NOT DO THIS IN REAL PRODUCTION
CMD bin/console server:run 0.0.0.0:8080