<?php

namespace config;

abstract class Controller{

    public $data = [];
    public $tpl;
    

    abstract public function index();

    public function renderView(){
        $this->index();

        $data = $this->data;
        $tpl = $this->tpl;

        include "views/layout.php"; 
    }

}











