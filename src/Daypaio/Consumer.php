<?php
namespace Daypaio;

class Consumer extends Resource
{
	public function get($id)
	{
		
	}

	/**
	 * POST /consumer
	 *
	 */
	public function create($data)
	{
		var_dump($this->getUrl());

		try {
			$client = new \GuzzleHttp\Client();
			$response = $client->request('POST', $this->getUrl(), [
				'json' => $data,
				'verify' => false,
				'debug' => true
			]);

			return $response->getBody();
		} catch (\Exception $e) {
			return $e->getMessage();
		}
	}
}