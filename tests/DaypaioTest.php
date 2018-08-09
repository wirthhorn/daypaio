<?php
namespace Daypaio\Tests;

use PHPUnit\Framework\TestCase;
use Daypaio\Daypaio;

final class DaypaioTest extends TestCase 
{
	public function testConfiguration()
	{
		$this->expectException(\Exception::class);
		$daypaio = new Daypaio([]);
	}

	public function testEnvironment()
	{
		$this->expectException(\Exception::class);
		$daypaio = new Daypaio(['access_token' => 'FAKE_ACCESS_TOKEN', 'environment' => 'foo']);
	}

	public function testInstantiation()
	{
		$daypaio = new Daypaio(['access_token' => 'FAKE_ACCESS_TOKEN', 'environment' => 'stage']);
		$this->assertInstanceOf(Daypaio::class, $daypaio);
	}
}