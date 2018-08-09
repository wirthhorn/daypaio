<?php
namespace Daypaio;

class Query extends Resource
{
	public function __construct($config)
	{
		parent::__construct($config);
		
		$this->resourcePath .= '/consumers';
	}

	public function get($query, $fields)
	{
		$client = new \GuzzleHttp\Client();
		$url = $this->getUrl();
		$url .= '&q=' . urlencode(json_encode($query));
		$url .= '&f=' . urlencode(implode(' ', $fields));
		$response = $client->request('GET', $url, [
			'verify' => false,
			'http_errors' => true
		]);
		return json_decode($response->getBody()->getContents(), true);
	}
}