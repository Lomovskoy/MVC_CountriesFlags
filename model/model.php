<?php

/*
 * 
 */

class Model {

    public function getCountryList() {
        require("model/countries.php");

        $country_object = array();

        foreach ($countries as $item) {
            $country_object[] = new Country($item["country_name"], $item["description"], $item["image"]);
        }
        return $country_object;
    }
    //Просмотр информации о выбранной по ссылке стране
    public function getCountry($Country_Name) {
        $allCountry = $this->getCountryList();
        $i = 0;
        foreach ($allCountry as $country_one) {
            if ($country_one->country_name == $Country_Name) {
                return($allCountry[$i]);
            }
                $i++;
        }
    }
    //Страница - Главная (1 запись из массива)
    public function getHome() {
        $home_Page = $this->getCountryList();
        $i = 0;
        return($home_Page[$i]);
    }

}
