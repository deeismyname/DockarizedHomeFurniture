

# if [! mysql -u $DB_USER -p$DB_PASSWORD -e "USE $DB_NAME"]; then
#     echo "Database $DB_NAME does not exist. Creating it..."
#     mysql -u $DB_USER -p$DB_PASSWORD -e "CREATE DATABASE $DB_NAME;"
# else
#     echo "Database $DB_NAME exists."
# fi

# # Check if the composer autoload file exists, install dependencies if not
# if [ ! -f "vendor/autoload.php" ]; then
#     composer install --no-progress --non-interaction
# fi

# # Check if .env file exists, create it from .env.examp if not
# if [ ! -f ".env" ]; then
#     echo "Creating env file for env $APP_ENV"
#     cp .env.example .env
# else
#     echo ".env file exists."
# fi

# # Run migrations
# php artisan migrate

# # Generate the app key
# php artisan key:generate

# # Clear and cache configuration, routes, and cache
# php artisan cache:clear
# php artisan config:cache
# php artisan route:clear

# # Serve the application on the specified port
# php artisan serve --port=$PORT --host=0.0.0.0 --env=.env

# # Ensure the entrypoint is executed
# exec docker-php-entrypoint "$@"



#!/bin/bash
set -e

# Ensure composer dependencies are installed
if [ ! -f "vendor/autoload.php" ]; then
    composer install --prefer-dist --no-progress --no-interaction
fi

# Copy .env file if it doesn't exist
if [ ! -f ".env" ]; then
    echo "Creating .env file from .env.example"
    cp .env.example .env
    php artisan key:generate
fi

# Clear and cache configuration (optional)
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan config:cache

# Run migrations (optional: add --seed if you want to seed the database)
php artisan migrate --force

# Start the application (or leave for service startup)
exec "$@"
a
