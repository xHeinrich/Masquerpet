# Masquerpet
A simple front and backend for the Hellion C# FlyFF Emulator written using PHP/Laravel. Currently there
is no administration auth out of the box however this will be written soon.

# Packages/Frameworks
- Laravel 5.4 (https://laravel.com/docs/5.4)
- Backpack (https://laravel-backpack.readme.io/docs)

# Requirements
- PHP 7.0+
- MySQL
- Composer
- NodeJS/NPM

# Installation
This Laravel installation includes migrations for the game server sql file. To install
simply pull the repo and run the following commands from the projects root folder:
- $ composer update
- At this point a .env file should have been generated, set up your configuration settings for mysql in here
- $ php artisan config:cache
- $ php artisan migrate
- $ php artisan key:generate
