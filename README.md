# Laravel CRUD Example

-- This application is a simple CRUD(Create, Read, Update, Delete) application using Laravel.  A user will register, then login using their credentials (email address and password).  From there a user will be able to create, update, and delete posts.

## Installation
-- Prerequisites:  PHP, composer, and docker desktop should be installed on the machine in order to be able to use Laravel Sail.  Make sure if you're using Windows to configure WSL2 properly using these instructions:  https://laravel.com/docs/8.x/installation#getting-started-on-windows.  After PHP, composer, and docker desktop are installed, getting the application is relatively simple using the following steps:

    1. Clone the repo to a directory. (e.g. ~/laravel-crud)
    2. Navigate to that directory (cd ~/laravel-crud)
    3. Rename .env-example to .env
    4. Run "composer install"
    5. Run "./vendor/bin/sail up" - this should start the local server at http://localhost:80
    
## Registration
    1.  New Users will have to be registered and posts created to see the full CRUD capabilities.
