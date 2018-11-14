<?php require_once './template/getDataC2.php'; ?> <!-- Phần get code chanel -->

<html>
<head>
    <?php require_once './template/head.php'; ?>
    <link href="css/register.css" rel="stylesheet" type="text/css"/>
    <script src="js/language.js" type="text/javascript"></script>

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
    <?php require_once './template/register-slide.php'; ?>

    <!--text-breath-->
    <?php require_once './template/text-breath.php'; ?>
    
    <!--content-->
    <?php require_once './template/register-content.php'; ?>
    <!--extra info-->
    <?php require_once './template/extra-info.php'; ?>
    <!--footer-->
    <?php require_once './template/footer.php'; ?>
</div>
</body>
</html>
