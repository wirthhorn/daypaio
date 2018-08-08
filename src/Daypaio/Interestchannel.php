<?php
namespace Daypaio;

class Interestchannel extends Resource
{
	public function get()
	{
		$client = new \GuzzleHttp\Client();
		$response = $client->request('GET', $this->getUrl(), [
			'verify' => false,
			'http_errors' => true
		]);
		return json_decode($response->getBody()->getContents(), true);
	}
}