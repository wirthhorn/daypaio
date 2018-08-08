<?php
namespace Daypaio\Tests;

use Daypaio\Daypaio;

final class ShopsTest extends DaypaioTestCase 
{
	public function setUp(): void {
		parent::setUp();
		$this->daypaio = new Daypaio(
			array_merge($this->daypaio->config, [
				'environment' => 'production'
			])
		);
	}

	public function testUrl(): void {
		$this->assertEquals(
			'https://app.daypaio.com/api/shops?access_token=' . $this->daypaio->config['access_token'],
			$this->daypaio->shops->getUrl()
		);
	}

	public function testGet(): void
	{
		$shops = $this->daypaio->shops->get();
		$this->assertInternalType('array', $shops);
		foreach ($shops as $shop) {
			$this->assertInternalType('array', $shop);
			$this->assertArrayHasKey('_id', $shop);
			$this->assertArrayHasKey('name', $shop);
		}
	}
}