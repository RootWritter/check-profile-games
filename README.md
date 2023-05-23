## Check Profile Games Wrapper

:coffee: Buy Me a Coffee : https://trakteer.id/iqbal%20rootw/link

## List Game

## Installation

Install my-project with composer or clone this repository

Cloning

```bash
  git@github.com:RootWritter/check-profile-games.git
```

Install Composer

```bash
  composer require rootwritter/check-nick
```

## PHP Version Support

- [x] PHP 8.1.x

## How To Use

```php
  <?php
require 'vendor/autoload.php';

use RootWritter\Init;

$check = new Init();

/**
 * Check ML
 */
$data = $check->initCheck('MOBILE_LEGENDS', [
    'userId' => '1131281222',
    'zoneId' => '13566',
]);
echo $data;
```

## Support

For support, email rootwritter@aol.com or telegram https://t.me/rootwritter
