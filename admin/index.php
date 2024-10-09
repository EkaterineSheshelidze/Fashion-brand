<?php
require_once "../config/Config.php";
require_once "../helpers/Session.php";
require_once "../config/database.php";
require_once "../config/AdminPage.php";
require_once "../config/AdminController.php";
require_once "../config/model.php";

Session::start();

$page = new AdminPage($_GET);