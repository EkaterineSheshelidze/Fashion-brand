<?php 
require_once "../config/Config.php";
require_once "../helpers/session.php";

session::start();
session::end();

header("Location: ".HOST."admin");