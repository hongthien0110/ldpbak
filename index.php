<?php
    require_once './template/getDataC2.php';
?><!-- Phần get code chanel -->
<?php
//require_once './mol_topmito/save_c2.php';

$_SESSION["referer_0"] = isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : '';
// Include and instantiate the class.
require_once './mol_topmito/Mobile_Detect/Mobile_Detect.php';
$detect = new Mobile_Detect;
// Any mobile device (phones or tablets) or Any tablet device.
$url = 'http://english.topicanative.co.th//?code_chanel=' . $code_chanel . '&id=' . $id;
//if ($detect->isMobile() || $detect->isTablet()) {
//    header('Location: ' . $url . '');
//    exit;
//}
?>

<html>
<head>

    <?php require_once './template/head.php'; ?>
    <link href="css/slide.css" rel="stylesheet" type="text/css"/>
    <script src="js/slide_bao_chi.js" type="text/javascript"></script>
    <script src="js/slide.js" type="text/javascript"></script>
    <script src="js/language.js" type="text/javascript"></script>

    <link rel="image_src" href="img/thumbnail.png" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129206999-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-129206999-1');
    </script>

</head>
<body>

<div id="wrapper">
    <!--header-->
    <?php require_once './template/header.php'; ?>
    <!--slide-->
    <?php require_once './template/home-slide.php' ?>
    <!--text-breath-->
    <?php require_once './template/text-breath.php'; ?>
    <!--content-->
    <?php require_once './template/home-content.php'; ?>
    <!--extra info-->
    <?php require_once './template/extra-info.php'; ?>
    <!--footer-->
    <?php require_once './template/footer.php'; ?>
</div>
<!-- Google Code for Remarketing Tag -->
<!--
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
-->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 959053642;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""R
             src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/959053642/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>

</body>
</html>

