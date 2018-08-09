# daypaio
A simple PHP client for the Daypaio API.

## Requirements
PHP 7

CURL

## Usage

### Initialization

```php
use Daypaio;

$daypaio = new Daypaio([
	'access_token' => 'Enter access token',
	'environment' => 'stage' // valid: stage, production
]);
```

### List interestchannels

```php
$daypaio->interestchannel->get();
```

### List shops

```php
$daypaio->shops->get();
```

### Create a new consumer

```php
$daypaio->consumer->post([
	"email" => "foo@bar.com",
  	"t" => "lead",
  	"first_name" => "foo",
  	"interestchannels" => [],
  	"preferredShop" => "",
  	"ext_id" => ""
]);
```

### Search a consumer

```php
$daypaio->query->get(
	["email" => "stuber@wirth-horn.de"], // search parameters
	["id", "email"] // fields to return
);
```

### Delete an existing consumer

```php
$daypaio->delete->post("consumer", "5b2a63c2d848af4cc12ecf44");
```

## Tests

1. [Composer](https://getcomposer.org/) is a prerequisite for running the tests. Install composer globally, then run `composer install` to install required files.
2. Create `tests/DaypaioTestCredentials.php` from `tests/DaypaioTestCredentials.php.dist` and edit it to add your access token.
3. The tests can be executed by running this command from the root directory:

```bash
$ ./vendor/bin/phpunit
```