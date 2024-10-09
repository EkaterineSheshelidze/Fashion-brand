<?php

class AdminPage {
    public $pageName;


    public function __construct($request){
        if (Session::get("user_id") == NULL){
            $this->pageName = "login";
            $this->getController();
        }else {
            $this->pageName = isset($request["page"]) && !empty($request["page"]) ? $request["page"] : "home";
            
        
        $this->getModel();

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $this->getPostMethod($_POST["action"]);
        }else {
            $this->getController();
        }
    }
    }

    public function getPostMethod($action){
        $path = $this->getControllerPath();
        require_once $path;

        $pagename = $this->getControllerName();
        $page = new $pagename($this->pageName, $_GET);
        $page->$action($_POST);
    }

    public function getModel(){
        $path = $this->getModelPath();
        require_once $path;
    }

    public function getController(){
        $path = $this->getControllerPath();
        require_once $path;

        $pagename = $this->getControllerName();
        $page = new $pagename($this->pageName, $_GET);
        $page->renderView();
    }

    public function getControllerPath(){
        $name = $this->getControllerName(). ".php";
        return "../controllers/admin/". $name;
    }

    public function getModelPath(){
        $name = $this->getModelName() . ".php";
        return '../models/admin/' . $name;
    }

    public function getModelName(){
        return ucfirst($this->pageName);
    }

    public function getControllerName(){
        return ucfirst($this->pageName) . "Controller";
    }
}