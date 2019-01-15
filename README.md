    # bangladesh-geocode
Division, District, Upazila level fully mapped package for Laravel

- [Installation](#installation)
    - [Composer](#composer)
    - [Service Provider](#service-provider)    
    - [Migrations Files](#migrations-file)
    - [Migrations](#migrations)
- [Usage](#usage)
    - [Getting Records](#geeting-records)
    - [Getting Records With Relations](#geeting-records-with-relations)    
- [Credit Notes](#credit-notes)
- [More Information](#more-information)
- [Opening an Issue](#opening-an-issue)
- [License](#license)

---

## Installation

This package is very easy to set up. There are only couple of steps.

### Composer

Pull this package in through Composer
```
composer require exceptio/bangladesh-geocode
```

### Service Provider
* Laravel 5.5 and up
Uses package auto discovery feature, no need to edit the `config/app.php` file.

* Laravel 5.4 and below
Add the package to your application service providers in `config/app.php` file.

```php
'providers' => [

    ...

    /**
     * Third Party Service Providers...
     */
    Exceptio\BangladeshGeoCode\BangladeshGeoCodeServiceProvider::class,

],
```

### Migrations File

Publish the package migrations file to your application if required. Run these commands inside your terminal.

    php artisan vendor:publish --tag=exceptio-bd-geocode-migrations


### Migrations and seeds

Run the migration command to make the changes to the database, this will also dump the required data to tables.

    php artisan migrate

### And that's it!

---

## Usage

### Getting Records

Use the package models to get the records.

```php
use Exceptio\BangladeshGeoCode\Model\Division;

$division = Division::get();

```

### Getting Records With Relations

Use the package models with relations to get the records and you can use your own where clause.

```php
use Exceptio\BangladeshGeoCode\Model\Division;
use Exceptio\BangladeshGeoCode\Model\DivisionDistrict;
use Exceptio\BangladeshGeoCode\Model\DivisionDistrictUpazila;

$division = Division::with('districts.upazilas')->get();

```

---
## Credit Notes
This package database file is inspired from [nuhil/bangladesh-geocode](https://github.com/nuhil/bangladesh-geocode)
This package readme file is inspired from [laravel-roles](https://github.com/jeremykenedy/laravel-roles)


## More Information
For more information, please have a look at [Model](https://github.com/azcpavel/bangladesh-geocode/tree/master/src/Model) files.


## Opening an Issue
Before opening an issue there are a couple of considerations:
* A **star** on this project shows support and is a way to say thank you to all the contributors. If you open an issue without a star, *your issue may be closed without consideration.* Thank you for understanding and support.
* **Read the instructions** and make sure all steps were *followed correctly*.
* **Check** that the issue is not *specific to your development environment* setup.
* **Provide** *duplication steps*.
* **Attempt to look into the issue**, and if you *have a solution, make a pull request*.
* **Show that you have made an attempt** to *look into the issue*.
* **Check** to see if the issue you are *reporting is a duplicate* of a previously reported issue.
* **Following these instructions show me that you have tried.**
* If you have questions send me an email to azc.pavel@gmail.com
* Please be considerate that this is an open source project that I provide to the community for FREE when opening an issue. 

## License
This package is free software distributed under the terms of the MIT license.
