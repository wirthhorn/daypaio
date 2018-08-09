<?php
namespace Daypaio\Tests;

use PHPUnit\Framework\TestCase;
use Daypaio\Daypaio;

class DaypaioTestCase extends TestCase 
{
	public function setUp() {
		$this->daypaio = new Daypaio([
			'access_token' => DaypaioTestCredentials::$accessToken,
			'environment' => 'stage'
		]);
	}
}