<?php
require_once '../config.php';
require_once '../models/function/function.php';
require_once '../models/class/login.php';
//session_start();
// ログインされていなければログインページに飛ばす
$login = loginCheck();
$db_data = db_query("SELECT COUNT(*) FROM picture WHERE user_id = '" . $login->getUserId() . "' AND save_datetime >= current_date()");
// test_var($db_data);
require_once '../views/index.php';
