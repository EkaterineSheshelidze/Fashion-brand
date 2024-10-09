<?php
use config\Controller;

class ShopController extends Controller {
    public function index(){
        
        $shop = new shop();

        $this->data["menu"] = $shop->getMenu();
        
        $this->data["shop"] = $shop->get("shop"); 
        
        $this->tpl = "shop";
    }
 
   
}