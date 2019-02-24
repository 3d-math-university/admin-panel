<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Deployment

1. Clone git

    - $ git clone https://github.com/3d-math-university/admin-panel.git

2. After installing Laravel, you should configure your web server's document / web root to be the public directory. The index.php in this directory serves as the front controller for all HTTP requests entering your application.

3. After installing Laravel, you may need to configure some permissions. Directories within the storage and the bootstrap/cache directories should be writable by your web server or Laravel will not run. If you are using the Homestead virtual machine, these permissions should already be set.
    - $ sudo chmod -R 777 /var/www/3dmath/storage
    - $ sudo chmod -R 777 /var/www/3dmath/bootstrap/cache
    
4. Application Key
   
   - $ php artisan key:generate
   
5. Environment file
    
    - $ cp .env.example .env
    - edit database (DB_DATABASE, DB_USERNAME, DB_PASSWORD)