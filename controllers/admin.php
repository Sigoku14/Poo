<?php
require_once '../config.php';
require_once '../models/function/function.php';
require_once '../models/class/login.php';
session_start();
if (!empty($_GET['state']) && $_GET['state'] == 'session_delete') {
    sessionDelete();
    session_start();
}
test_var($_SESSION);
?>
<a href="?state=session_delete">session_delete</a>
<br>
<a href="?">get_clear</a>