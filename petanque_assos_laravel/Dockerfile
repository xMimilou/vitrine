FROM php:8.1-fpm

# Create a non-root user
RUN useradd -ms /bin/bash laravel

# Install necessary packages
RUN apt-get update -y && apt-get install -y openssl zip unzip git libpq-dev libonig-dev

# Install PHP extensions
RUN docker-php-ext-configure pdo_mysql
RUN docker-php-ext-install pdo pdo_mysql mbstring

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /petanque_assos_laravel

# Copy the application files and change ownership
COPY . /petanque_assos_laravel
RUN chown -R laravel:laravel /petanque_assos_laravel

# Switch to non-root user
USER laravel

# Run Composer install
RUN composer install --verbose
<<<<<<< HEAD

# Command to run the Laravel application
CMD php artisan serve --host=0.0.0.0 --port=8000

# Expose port 8000
EXPOSE 8000
=======
RUN composer dump-autoload
CMD php artisan key:generate && php artisan serve --host=0.0.0.0 --port=8080
EXPOSE 8080
>>>>>>> 52621f999b029e45184511c4baa43d581ea4f26a
