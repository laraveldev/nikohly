FROM php:8.4-fpm

WORKDIR /var/www

# PHP uchun kerakli OS kutubxonalarni o‘rnatamiz
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    unzip \
    curl \
    git \
    nano \
    libpq-dev \
    build-essential \
    && docker-php-ext-install \
    intl \
    pdo \
    pdo_pgsql \
    pgsql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip

# Composer'ni o‘rnatish
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www