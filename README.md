# Configuration for running project Skytours back end.

    1. configure your database in .env file! If you wanna use MySQL you could copy all of the variables in .env.copy file after that you paste in .env file and don't forget to adjust with your database configuration.
    2. php artisan config:cache
    3. php artisan migrate:fresh --seed or php artisan migrate --seed
    4. php artisan passport:install --force
    5. php artisan serve --port=8000 (My configuration for port 8000 so I encourage you to use port 8000)
