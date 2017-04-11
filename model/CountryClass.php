<?php

/*
 * 
 */

class Country {

    public $country_name;
    public $description;
    public $image;

    public function __construct($country_name, $description, $image) {
        $this->country_name = $country_name;
        $this->description = $description;
        $this->image = $image;
    }

}
