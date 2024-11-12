# Use PHP with Apache as the base image
FROM php:8.2-apache

# Install necessary dependencies for Laravel
RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        zip \
        git \
        && docker-php-ext-install pdo_mysql zip

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set the document root to the 'public' directory of Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Update Apache configuration to reflect the document root change
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Copy the Laravel application into the container
COPY . /var/www/html

# Set the working directory to the Laravel project folder
WORKDIR /var/www/html

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Laravel's PHP dependencies via Composer
RUN composer install --no-dev --optimize-autoloader

# Set permissions for Laravel storage and cache folders
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 755 /var/www/html

# Set environment file for production
COPY .env /var/www/html/.env

# Run Laravel's optimization commands for production
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

# Expose port 80 for Apache
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
