
# Laravel CMS (based on Laravel 11.x)
**Laravel CMS** is a Laravel 11.x based simple CMS project. Most of the commonly needed features of an application like `Authentication`, `Authorisation`, `Users` and `Role management`, `Application Backend`, `Backup`, `Log viewer` are available here. It is modular, so you may use this project as a base and build your own modules. A module can be used in any `Laravel` based project.
Here Frontend and Backend are completely separated with separate routes, controllers, and themes as well.

***Please let me know your feedback and comments.***



# Reporting a Vulnerability
If you discover any security-related issues, please send an e-mail to Codename via codename@gmail.com instead of using the issue tracker.


# Custom Commands

We have created a number of custom commands for the project. The commands are listed below with a brief about their use of it.

## To Create New module

To create a project use the following command, you have to replace the MODULE_NAME with the name of the module.

```php
php artisan module:build MODULE_NAME
```

You may want to use `--force` option to overwrite the existing module. if you use this option, it will replace all the existing files with the default stub files.

```php
php artisan module:build MODULE_NAME --force
```

## Clear All Cache

```bash
composer clear-all
```

this is a shortcut command to clear all cache including config, route, and more

## Code Style Fix

We are now using `Laravel Pint` to make the code style stay as clean and consistent as the Laravel Framework. Use the following command to apply CS-Fix.

```bash
composer pint
```

## Role - Permissions

Several custom commands are available to add and update `role-permissions`. Please read the [Role - Permission Wiki page](https://github.com/spatie/laravel-permission), where you will find the list of commands with examples.


# Features

The `Laravel CMS` comes with several features which are the most common in almost all applications. It is a template project which means it is intended to be built in a way that it can be used for other projects.

It is a modular application, and some modules are installed by default. It will be helpful to use it as a base for future applications.

* Admin feature and public views are completely separated as `Backend` and `Frontend` namespace.
* Major features are developed as `Modules`. A module like Posts, Comments, and Tags are separated from the core features like User, Role, Permission


## Core Features

* User Authentication
* Build in a way adding more is much easier now
* User Profile with Avatar
* Role-Permissions for Users
* Dynamic Menu System
* Language Switcher
* Localization enabled across the project
* Backend Theme
  * Bootstrap 5, CoreUI
  * Fontawesome 6
  * Dark Mode
* Frontend Theme
  * Tailwind
  * Fontawesome 6
  * Dark Mode
* Article Module
  * Posts
  * Categories
  * Tags
  * Comments
  * wysiwyg editor
  * File browser
* Shop Module
  * Shops
  * Categories
  * Tags
  * Comments
  * wysiwyg editor
  * File browser

* Application Settings
* External Libraries
  * Bootstrap 5
  * Fontawesome 6
  * CoreUI
  * Tailwind
  * Datatables
  * Select2
  * Date Time Picker
* Log Viewer
* Notification
  * Dashboard and details view


# User Guide

## Installation
