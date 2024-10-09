<?php
use config\Controller;

class AboutController extends Controller {
    public function index(){
        
        $about = new about();
        $this->data["about"] = $about->getAboutData(); //?
        $this->data["menu"] = $about->getMenu();
        
        
        $this->tpl = "about";
    }
 
   
}