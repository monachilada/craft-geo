<?php
namespace Craft;

class GeoVariable
{
    public function location()
    {
        return craft()->geo_location->getInfo($_SERVER['REMOTE_ADDR']);
    }
    
    public function countries($numindex = false) {
	    $countries = craft()->geo_location->_getCountries();
		
		return ($numindex)? array_values($countries): $countries;
    }
}
