<?php
include ('/var/www/furmazon_db_cfg.php');
include_once ('../inc/codes.php');

if (isset($_POST['submit'])) {
    $access_code = $_POST['access_code'];
    $checkcode = new Codes($mysqli);
    $result = $checkcode->check($access_code);
    if ($result) {
        $_SESSION['valid_code'] = $access_code;
        header ('location: index.php');
    } else {
        $error = 'Invalid access code';
    }
}

?>