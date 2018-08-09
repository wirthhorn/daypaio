<?php
namespace Daypaio;

class Consumer extends Resource
{
	/**
	 * POST /consumer
	 *
	 */
	public function post($data)
	{
		try {
			$client = new \GuzzleHttp\Client();
			$response = $client->request('POST', $this->getUrl(), [
				'json' => $data,
				'verify' => false
			]);

			return json_decode($response->getBody()->getContents(), true);
		} catch (\Exception $e) {
			return $e->getMessage();
		}
	}
}