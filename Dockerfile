FROM php:8.2

# Install netcat
RUN apt-get update && apt-get install -y netcat-openbsd

# Install system dependencies, extensions, etc.
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install pdo_mysql zip bcmath

# Set working directory
WORKDIR /var/www/html

# Copy files
COPY . .

# Ensure the entrypoint script is executable
RUN chmod +x docker/entrypoint.sh

# Set permissions (be cautious about 777, try 755 or 775 if possible)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && chmod -R 775 storage bootstrap/cache

# Command to run on container start
ENTRYPOINT ["docker/entrypoint.sh"]
CMD ["php-fpm"]
