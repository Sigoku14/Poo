<?php
require_once '../config.php';
require_once '../models/function/function.php';
require_once '../models/class/login.php';
//session_start();
// ログインされていなければログインページに飛ばす
$login = loginCheck();
require_once '../views/unsubscribe.php';
