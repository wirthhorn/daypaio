<?php
namespace Daypaio;

class Utils
{
	public static function formatDate($date)
	{
		return $date->format("Y-m-dTH:i:s") . 'Z';
	}

	public static function formatDateString($dateString)
	{
		return self::formatDate(new \DateTime($dateString));
	}

	public static function getTimestamp()
	{
		return self::formatDate(new \DateTime());
	}
}