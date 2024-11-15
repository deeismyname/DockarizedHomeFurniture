
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
