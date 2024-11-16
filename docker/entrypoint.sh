#!/bin/bash
set -e

# Ensure composer dependencies are installed
if [ ! -f "vendor/autoload.php" ]; then
    echo "Installing Composer dependencies..."
    composer install --prefer-dist --no-progress --no-interaction --optimize-autoloader
fi

# Copy .env file if it doesn't exist
if [ ! -f ".env" ]; then
    echo "Creating .env file from .env.example"
    cp .env.example .env
    php artisan key:generate
fi

echo "Waiting for the database to be ready..."
while ! nc -z my-sql-server 3306; do
  sleep 1
done

echo "Database is up - executing migrations."

# Clear and cache Laravel configuration and routes
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan config:cache

# Run migrations
php artisan migrate --force

# Check if users table is empty, then run seeder if true
if [ $(php artisan tinker --execute="echo \App\Models\User::count();") -eq 0 ]; then
    echo "No users found in the database. Running seeder..."
    php artisan db:seed --class=UserSeeder
else
    echo "Users already exist in the database. Skipping seeder."
fi

# Execute the main process specified as CMD in Dockerfile
exec "$@"
