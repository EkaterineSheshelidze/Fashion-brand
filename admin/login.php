<?php
require_once "../config/Config.php";
require_once "../helpers/Session.php";
require_once "../config/database.php";
require_once "../config/model.php";
require_once "../models/admin/user.php";

session::start();

$userModel = new User();

$id = $userModel->getUser($_POST['username'], $_POST['password']);

if($id){
    session::set("user_id", $id);
    header("Location: ".HOST."admin");
}else {
    header("Location: ".HOST."admin/login.php");
}


