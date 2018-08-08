# daypaio
A simple PHP Daypaio API client.

## Requirements
PHP 7

CURL

## Usage

### Initialization

```php
use Daypaio;

$daypaio = new Daypaio([
	'access_token' => 'Enter access token',
	'environmet' => 'stage' // valid: stage, production
]);
```

### List interestchannels

```php
$daypaio->interestchannels->get();
```

### List shops

```php
$daypaio->shops->get();
```

### Create a new consumer

```php
$daypaio->consumer->create([
	"email" => "foo@bar.com",
  	"t" => "lead",
  	"first_name" => "foo",
  	"interestchannels" => [],
  	"preferedShop" => "",
  	"ext_id" => ""
]);
```

## Tests

1. [Composer](https://getcomposer.org/) is a prerequisite for running the tests. Install composer globally, then run `composer install` to install required files.
2. Create `tests/DaypaioTestCredentials.php` from `tests/DaypaioTestCredentials.php.dist` and edit it to add your access token.
3. The tests can be executed by running this command from the root directory:

```bash
$ ./vendor/bin/phpunit
```