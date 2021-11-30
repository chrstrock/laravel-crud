# Laravel CRUD Example

-- This application is a simple CRUD(Create, Read, Update, Delete) application using Laravel.  A user will register, then login using their credentials (email address and password).  From there a user will be able to create, update, and delete posts.

## Installation
-- Prerequisites:  PHP, composer, and docker desktop should be installed on the machine in order to be able to use Laravel Sail.  Make sure if you're using Windows to configure WSL2 properly using these instructions:  https://laravel.com/docs/8.x/installation#getting-started-on-windows.  After PHP, composer, and docker desktop are installed, getting the application is relatively simple using the following steps:

    1. Clone the repo to a directory. (e.g. ~/laravel-crud)
    2. Navigate to that directory (cd ~/laravel-crud)
    3. Run the following command:  
        docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs
    4. Set proper permissions using the following command:  sudo chown -R $USER: .
    5. Run the server with sail:  vendor/bin/sail up -d
    6. Copy the env vile cp .env.example .env
    7. Change the entry for "DB_HOST" to "mysql" from "127.0.0.1"
    8. Generate the app key with the command:  vendor/bin/sail artisan key:generate
    9. Seed the database with the command:  vendor/bin/sail artisan migrate:fresh --seed
    
    At this point localhost/ should be ready to go.
## Registration
    1.  New Users will have to be registered and posts created to see the full CRUD capabilities.
