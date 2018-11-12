<?php session_start();?>
<?php require_once './template/active_menu.php' ?>
<?php
//get data
$ref = $_SESSION["referer_0"];;
$domain = isset($_SERVER[HTTP_HOST]) ? "http://$_SERVER[HTTP_HOST]" . $_SERVER["REQUEST_URI"] : '';
$id = isset($_GET["id"]) ? $_GET["id"] : "4173";
$preview = isset($_GET["preview"]) ? $_GET["preview"] : "-100";
$code_chanel = isset($_GET["code_chanel"]) ? $_GET["code_chanel"] : "topicanative_asia_001";

require_once './mol_topmito/Mobile_Detect/Mobile_Detect.php';
$detect = new Mobile_Detect;
// Any mobile device (phones or tablets) or Any tablet device.
$url = 'http://m.english.topicanative.co.th/?code_chanel=' . $code_chanel . '&id=' . $id;
//if ($detect->isMobile() || $detect->isTablet()) {
//    header('Location: ' . $url . '');
//    exit;
//}

// require_once './mol_topmito/save_c2.php';
?>
