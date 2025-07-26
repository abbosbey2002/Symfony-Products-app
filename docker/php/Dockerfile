FROM php:8.2-apache

# Apache rewrite moduli
RUN a2enmod rewrite

# PHP extensionlar va system packages
RUN apt-get update && apt-get install -y \
    git zip unzip libpng-dev \
    libzip-dev default-mysql-client \
    && docker-php-ext-install pdo pdo_mysql zip gd

# Composer o'rnatish
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Loyihani papkaga o‘tkazish
WORKDIR /var/www/html
COPY . /var/www/html

# Apache konfiguratsiya – public papkani ishlatish
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Composer install (superuserga ruxsat beriladi)
RUN COMPOSER_ALLOW_SUPERUSER=1 composer install --no-scripts --optimize-autoloader

EXPOSE 80

CMD ["apache2-foreground"]
