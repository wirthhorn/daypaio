<?php
namespace Daypaio\Tests;

use Daypaio\Daypaio;

final class InterestchannelTest extends DaypaioTestCase 
{
	public function setUp() {
		parent::setUp();
		$this->daypaio = new Daypaio(
			array_merge($this->daypaio->config, [
				'environment' => 'production'
			])
		);
	}

	public function testUrl() {
		$this->assertEquals(
			'https://app.daypaio.com/api/interestchannel?access_token=' . $this->daypaio->config['access_token'],
			$this->daypaio->interestchannel->getUrl()
		);
	}

	public function testGet()
	{
		$interestchannels = $this->daypaio->interestchannel->get();
		$this->assertInternalType('array', $interestchannels);
		foreach ($interestchannels as $interest) {
			$this->assertInternalType('array', $interest);
			$this->assertArrayHasKey('_id', $interest);
			$this->assertArrayHasKey('name', $interest);
		}
	}
}