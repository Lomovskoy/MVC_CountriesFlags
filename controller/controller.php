<?php

/* 
 * 
 */

class Controller {
    public $model;
    
    public function __construct() {
        
        $this->model = new Model();
        
    }
    
    public function site_start() {
        //left_menyy
        $state_list = $this->model->getCountryList();
        include 'view/statelist.php';
        //home page - content
        $state = $this->model->getHome();
        
        if (isset($_GET['state'])) {
            //right - content
            $state = $this->model->getCountry($_GET['state']);
        }
        
        //content
        include 'view/viewstate.php';
        include "view/templates/layout.php";
    }
}