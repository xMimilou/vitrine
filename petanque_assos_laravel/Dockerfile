FROM php:8.1-fpm
RUN apt-get update -y && apt-get install -y openssl zip unzip git libpq-dev libonig-dev
RUN docker-php-ext-configure pdo_mysql
RUN docker-php-ext-install pdo pdo_mysql mbstring
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /petanque_assos_laravel
COPY . /petanque_assos_laravel
RUN composer install --verbose
RUN composer dump-autoload
CMD php artisan key:generate && php artisan serve --host=0.0.0.0 --port=8080
EXPOSE 8080
