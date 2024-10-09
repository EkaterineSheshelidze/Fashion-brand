<?php

use config\AdminController;

class ShopController extends AdminController{
    public function index(){
        
        $shop = new shop();
        
        $this->data["shop"] = $shop->get("shop"); 
        
        $this->tpl = "shop/index";
    }
    public function create() {
        $this->tpl = "shop/create";
    }

    public function store($data){
        $shops = new Shop();
        $shops->insertShop($data);
        header('Location: '.HOST.'admin/?page=shop');
    }
    ////
    public function edit(){
        $shop = new shop();
        $this->data["shop"] = $shop->getById("shop", $_GET["id"]);
        
        $this->tpl = "shop/edit";
    }

    public function update($data){
        $shop = new shop();
        $shop->updateShop($data);
        header('Location: '.HOST.'admin/?page=shop');
    }
    public function delete($data){
        $shop = new shop();
        $shop->deleteById('shop', $data['id']);
        // header('Location: '.HOST.'admin/?page=services');

    }
}  