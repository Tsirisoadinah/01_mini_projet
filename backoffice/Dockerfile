FROM php:8.2-cli

# Extensions required by Laravel + PostgreSQL
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        git \
        unzip \
        libpq-dev \
        libzip-dev \
    && docker-php-ext-install pdo pdo_pgsql zip \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

EXPOSE 8000

# Start Laravel if present; otherwise keep container alive with a helpful message.
CMD ["sh", "-c", "if [ -f artisan ]; then php artisan serve --host=0.0.0.0 --port=8000; else echo 'Laravel project not found in /var/www/html. Mount or copy your app into backoffice/.'; tail -f /dev/null; fi"]
