ARG testImage=auto-test-prod:latest
FROM composer as composer
COPY ./code /usr/src/app

WORKDIR /usr/src/app

CMD composer install --ignore-platform-reqs

FROM $testImage

COPY --from=composer /usr/src/app/vendor /usr/src/app/vendor

# This can run more then one set of tests
CMD php bin/phpunit