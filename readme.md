<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>
<p align="center"><img src="https://s2.stc.all.kpcdn.net/best/crimea/kfuorigins/images/tild3362-6266-4433-b931-393661633231__rgb.png"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


## 1) Server Requirements

1. PHP:
    - PHP >= 7.1.3
    - OpenSSL PHP Extension
    - PDO PHP Extension
    - Mbstring PHP Extension
    - Tokenizer PHP Extension
    - XML PHP Extension
    - Ctype PHP Extension
    - JSON PHP Extension
    - BCMath PHP Extension
2. Apache Server
3. MySQL Server
4. Composer
5. Git

## 2) Deployment on MacOS, LinuxOS

    1. Clone git 
    >$ git clone [https://github.com/3d-math-university/admin-panel.git

    2. Run composer command:
    >$ composer update
    
    3. After installing project change default path in project in `/path/to/project/public`

    4. Permissions directory
    - Run command in console:
    > $ sudo chmod -R 755 `/path/to/project/storage`
    > $ sudo chmod -R 755 `/path/to/project/bootstrap/cache`
    
    5. Application key
    - Run command in project: $ php artisan key:generate
   
    6. Environment file
    - Copy `.env.example` and rename file to `.env`
    - Edit lines`(DB_DATABASE=%your-database%, DB_USERNAME=%your-username%, DB_PASSWORD=%your-password%)` in `.env` file for database
    
## 3) Deployment on Windows

    > ??????