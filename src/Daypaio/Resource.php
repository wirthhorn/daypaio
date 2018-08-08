<?php
namespace Daypaio;

class Resource
{
	public function __construct($config)
	{
		$this->config = $config;

		$className = get_class($this);
		$className = explode('\\', $className);
		$className = end($className);
		$className = strtolower($className);
		$this->resourcePath = $className;
	}

	public function getUrl($subPath = null)
	{
		$url = $this->config['url'];
		$url = rtrim($url, '/') . '/'; // Ensure trailing slash

		if ($this->resourcePath)
		{
			$url .= $this->resourcePath;
		}

		if ($subPath)
		{
			$url = rtrim($url, '/') . '/';
			$url .= $subPath;
		}

		// Append the access token
		$url .= '?' . http_build_query(['access_token' => $this->config['access_token']]);

		return $url;
	}
}