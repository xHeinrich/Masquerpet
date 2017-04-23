# Masquerpet
A simple front and backend for the Hellion C# FlyFF Emulator written using Laravel. Currently there
is no administration auth out of the box however this will be written soon.

# Requirements
- PHP 7.0+
- MySQL
- Composer
- NodeJS/NPM

# Installation
This Laravel installation includes migrations for the game server sql file. To install
simply pull the repo and run the following commands from the projects root folder:
- composer update
(set up your .ENV file with settings for mysql)
- php artisan config:cache
- php artisan migrate
- php artisan key:generate
