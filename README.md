# Captcha with Chinese


## Installation

The Captcha Service Provider can be installed via [Composer](http://getcomposer.org) by requiring the `bugcat/captcha` package and setting the `minimum-stability` to `dev` in your project's `composer.json`.

```json
{
    "require": {
        "bugcat/captcha": "~0.1"
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

## Usage

To use the Captcha Service Provider, you need to store the captcha characters and verify the correctness of the user's input. This captcha package is only responsible for generating characters and drawing captcha pictures.


Use it first.
```php
    use Bugcat\Captcha\Captcha;
```

Load it then.
```php
    $captcha = new Captcha();
```

Generate a new captcha using custom configuration, get the captcha codes, store it.
```php
    $config = []; //custom configuration
    $codes = $captcha->gnrt($config);
    $_SESSION['captcha'] = $codes;
```

Output the image to the user
```php
    $captcha->img();
```

Last, verify user input
```php
    if ( $_POST['captcha'] == $_SESSION['captcha'] ) {
        //do something.
    } else {
        //do something.
    }
```


## Configuration

There is a simple example for configuration in the captcha package, you can see it like this.
```php
    $captcha = new Captcha();
    var_dump($captcha::CFG_EXP);
```

This is the full description.
```php
    $config = [
        //Whether need a border, 1 is need and 0 is not, default 1.
        'border'   => '1|0', 
        
        //The verification code length, 1 at least, default 4.
        'charnum'  => '4', 
        
        //The fontsize of captcha,  using px, 8 at least, default 16.
        'fontsize' => '16',
        
        //The code direction, 0 is horizontal and  1 is vertical, default 0.
        'codedir'  => '1|0',
        
        //The font of code, use existing list or custom, default simhei.
        //This package provides these fonts: simhei, ABeeZee_regular, Asap_700, Khand_500, Open_Sans_regular, Roboto_regular, Ubuntu_regular, ygyxsziti2.0 .
        //If use custom, it needs the full and usable path.
        'font'     => 'simhei|Roboto_regular|/var/www/html/test/fonts/custom.ttf',
        
        //The character pool for captcha, use existing list or custom, default CHS.
        //This package provides these characters: 
        //  CHS : Chinese Simplified
        //  CHT : Chinese Traditional
        //  ENG : 2346789ABCDEFGHJMNPQRTUXYZ
        'text'     => 'CHS|CHT|ENG|custom string allow spaces because it will be ignored',
    ];
```

## Example Usage
```php
use Bugcat\Captcha\Captcha;

class Auth
{
    private $captcha;

    public function __construct()
    {
        $this->captcha = new Captcha();
    }

    public function vcode()
    {
        $config = ['charnum' => 2, 'text' => 'CHT'];
        $codes = $this->captcha->gnrt($config);
        $_SESSION['captcha'] = $codes;
        
        $this->captcha->img();
    }
    
    public function register()
    {
        if ( $_POST['CSRF'] ) {
            if ( !$this->verify() ) {
                die( 'the verification code is error.' );
            }
            //do something.
        }
        //do something.
    }
    
    private function verify()
    {
        if ( empty($_POST['captcha']) || empty($_SESSION['captcha']) ) {
            return false;
        }
        if ( $_POST['captcha'] == $_SESSION['captcha'] ) {
            return true;
        } else {
            retrun false;
        }
    }
    
}
```


