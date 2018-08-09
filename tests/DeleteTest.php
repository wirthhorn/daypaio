<?php
namespace Daypaio\Tests;

use Daypaio\Daypaio;

final class DeleteTest extends DaypaioTestCase 
{
	public function testPost()
	{
		$results = $this->daypaio->query->get(['email' => 'stuber@wirth-horn.de'], ['_id', 'email']);
		if (Count($results['r']) > 0) 
		{
			$id = $results['r'][0]['id'];
			$message = $this->daypaio->delete->post('consumer', $id);
			$this->assertEquals($message, 'OK');
		}
	}
}