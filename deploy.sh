#!/usr/bin/env bash

# activate maintenance mode
php artisan down

# update source code
git fetch --all
git reset --hard origin/master

# update PHP dependencies
export COMPOSER_HOME='/tmp/composer'
composer install --no-interaction --no-dev --prefer-dist
	# --no-interaction	Do not ask any interactive question
	# --no-dev		Disables installation of require-dev packages.
	# --prefer-dist		Forces installation from package dist even for dev versions.

# update database
php artisan migrate --force
	# --force		Required to run when in production.

# stop maintenance mode
php artisan up