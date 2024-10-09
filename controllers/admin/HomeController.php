<?php

use config\AdminController;

class HomeController extends AdminController{
    public function index(){

        $home = new home();
        
        $this->data["menu"] = $home->getMenu();
        $this->tpl = "home";
    }
}