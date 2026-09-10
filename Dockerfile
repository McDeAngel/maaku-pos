FROM php:8.3-apache

RUN apt-get update \
    && apt-get install -y --no-install-recommends libicu-dev libonig-dev \
    && docker-php-ext-install intl mbstring \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html
COPY . .

RUN sed -ri 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf \
    && chown -R www-data:www-data writable \
    && chmod -R 775 writable

EXPOSE 80
