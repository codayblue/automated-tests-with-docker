ARG testImage=auto-test-prod:latest
FROM $testImage

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install dev deps for tests
RUN composer install

# This can run more then one set of tests
CMD php bin/phpunit