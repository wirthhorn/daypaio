<?php
namespace Daypaio;

class Delete extends Resource
{
	public function post($type, $id)
	{
		$client = new \GuzzleHttp\Client();
		$response = $client->request('POST', $this->getUrl(), [
			'verify' => false,
			'http_errors' => true,
			'json' => [
				"type" => $type,
				"id" => $id
			]
		]);
		return$response->getBody()->getContents();
	}
}