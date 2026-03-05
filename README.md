## About this starter kit

This is an opinionated application skeleton for the Laravel framework. It includes:

* Stricter code styling with Pint
* Static analysis with PHPStan
* Stricter defaults in the AppServiceProvider
* A GitHub actions workflow for automatic testing
* Composer scripts to lint, test and analyze the code

## Getting started

> This starter kit requires at least PHP 8.5.

Create a new project using Composer:

    composer create-project command-g/blueprint --prefer-dist example-app

Create a new project with the Laravel installer

    laravel new --using=command-g/blueprint example-app

## License

The Laravel framework and this starter kit are open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
