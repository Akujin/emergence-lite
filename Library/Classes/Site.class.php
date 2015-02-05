<?php

class Site
{
	// config properties
	static public $debug = false;

	static public $requestURI;
	static public $requestPath;
	static public $pathStack;

	static public $config;

	static public $doNotTrack;
	
	static public function prepareOptions($value, $defaults = array())
    {
        if(is_string($value))
        {
            $value = json_decode($value, true);
        }
        
        return is_array($value) ? array_merge($defaults, $value) : $defaults;
    }
}