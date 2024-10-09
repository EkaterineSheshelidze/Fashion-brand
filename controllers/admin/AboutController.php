<?php

use config\AdminController;

class AboutController extends AdminController{
    public function index(){
        
        $about = new about();

        $this->data["about"] = $about->getAboutData();
        $this->tpl = "about";
    }
       
    public function update($data){
        $about = new about();
        $about->updateData($data);

        header("location: ".HOST."admin/?page=about");
    }
} 