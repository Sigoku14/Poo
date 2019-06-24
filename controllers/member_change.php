<?php
require_once '../config.php';
require_once '../models/function/function.php';
require_once '../models/class/login.php';
require_once '../models/class/memberChange.php';
session_start();
// ログインされていなければログインページに飛ばす
$login = loginCheck();
$memberChange = new hew\MemberChange($login);
if (!empty($_POST)) {
    if (!empty($_POST['mail'])) {
        $memberChange->setChangeMail(h($_POST['mail']));
    }
    if (!empty($_POST['mail2'])) {
        $memberChange->setChangeMail2(h($_POST['mail2']));
    }
    if (!empty($_POST['pass'])) {
        $memberChange->setChangePass($_POST['pass']);
    }
    if (!empty($_POST['pass2'])) {
        $memberChange->setChangePass2($_POST['pass2']);
    }
    if (!empty($_POST['name'])) {
        $memberChange->setChangeName(h($_POST['name']));
    }
    $memberChange->memberCheck();
}
// if ($memberChange->memberChange()) {
// }
// $_SESSION['memberChange'] = $memberChange;
require_once '../views/member_change.php';
