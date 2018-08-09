<?php
namespace Daypaio;

/**
 * Class Daypaio
 */
class Daypaio
{
	/**
	 * Instantiates a new Daypaio super-class object.
	 *
	 * @param array $config
	 */
	public function __construct(array $config = [])
	{
		$this->config = array_merge([
			'environment' 	=> 'production',
			'access_token' 	=> null
		], $config);

		if (!$this->config['access_token'])
		{
			throw new \Exception('Provide an access token to the Daypaio api.');
		}

		if (!in_array($this->config['environment'], ['stage', 'production']))
		{
			throw new \Exception('Provide a valid environment. ' . $this->config['environment'] . ' is invalid.');
		}

		$this->initUrl();
		$this->initResources();
	}

	private function initUrl() 
	{
		if ($this->config['environment'] == 'stage') 
		{
			$this->config['url'] = 'https://stage.daypaio.com/api/';
		}
		else
		{
			$this->config['url'] = 'https://app.daypaio.com/api/';
		}
	}

	private function initResources()
	{
		$this->consumer 		= new Consumer($this->config);
		$this->delete 			= new Delete($this->config);
		$this->interestchannel 	= new Interestchannel($this->config);
		$this->query 			= new Query($this->config);
		$this->shops 			= new Shops($this->config);
	}
}