<h1 align="center">Locations package template</h1>

## Introduction

This package ...

## Installation

You can install the package via composer:

In `composer.json` add the following code:

For installing package from private repository, user should have access for it and enter his username and password or create a token for access composer config --global --auth gitlab-token.gitlab.com <token>


```php

    "require": {
        "probegin/test": "dev-{branch}",
    },
    "repositories": [
        {
            "name": "probegin/locations",
            "type": "vcs",
            "url": "git@github.com:EverRest/testpackage.git"
        }
    ],
```

And require the package:

``` bash
"probegin/test": "master"
```

The package will automatically register itself.

You can publish the migration with:

```bash
php artisan migrate
```

You can optionally publish the config file with:
```bash
php artisan vendor:publish --provider="Probegin\Test\TestServiceProvider" --tag="config"
```

## Running Tests
```bash
./vendor/bin/phpunit 
```
