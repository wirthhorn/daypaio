<?php
namespace Daypaio\Tests;

use Daypaio\Daypaio;

final class QueryTest extends DaypaioTestCase 
{
	public function testGet(): void
	{
		$results = $this->daypaio->query->get(['email' => 'stuber@wirth-horn.de'], ['_id', 'email']);
		$this->assertInternalType('array', $results);
		$this->assertEquals($results['success'], true);
		$this->assertEquals($results['error'], false);
		$this->assertInternalType('array', $results['r']);
		foreach ($results['r'] as $result)
		{
			$this->assertEquals($result['email'], 'stuber@wirth-horn.de');
		}
	}
}