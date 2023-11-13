# LSi Coding Exercise

## Objectives

- Add a CSS library
- Add a URL slug for products
- Allow for multiple images per product
- Add a product enquiry form which sends an email to a recipient (it doesn't need to send live emails, a preview is fine)

How you achieve these objectives is completely up to you.

## Setting up the project

The project requires [Git](https://git-scm.com/download/win), [Composer](https://getcomposer.org/download/), [NPM](https://nodejs.org/en) and [PHP 8.1+](https://www.php.net/downloads.php) with the following non-default extensions enabled:

- fileinfo
- pdo_sqlite

These instructions presume you're installing the project in Windows on your C:\\ drive. However, feel free do do this your own way.

`git clone https://github.com/scott-lsi/exercise.git`

`cd exercise`

`composer install`

It may display an error after completing this but it's ok, it's because you've not configured your database connection yet.

`copy .env.example .env`

Configure your database connection in the .env file. For simplicity, you can create a file at `database\database.sqlite` then set the following environment variables:


	DB_CONNECTION=sqlite
	DB_FOREIGN_KEYS=true


`php artisan key:generate`

`php artisan migrate --seed`

`npm install`

`composer require doctrine/dbal`

`php artisan serve`

...and, at the same time...

`npm run dev`

## Submitting the project

You do not need to deploy the project anywhere. Simply commit it to your GitHub account and let us know.

Good luck!