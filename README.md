# Captcha with Chinese


## Installation

The Captcha Service Provider can be installed via [Composer](http://getcomposer.org) by requiring the `bugcat/captcha` package and setting the `minimum-stability` to `dev` in your project's `composer.json`.

```json
{
    "require": {
        "bugcat/captcha": "~0.0"
    },
    "minimum-stability": "dev"
}
```

or

Require this package with composer:
```
composer require bugcat/captcha
```

Update your packages with ```composer update``` or install with ```composer install```.

In Windows, you'll need to include the GD2 DLL `php_gd2.dll` in php.ini. And you also need include `php_fileinfo.dll` and `php_mbstring.dll` to fit the requirements of `bugcat/captcha`'s dependencies.



