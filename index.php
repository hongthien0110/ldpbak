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
    <!-- longtt 31/12/2015 -->
    <!--      <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-71654034-5', 'auto');
          ga('send', 'pageview');

      </script> -->
</head>
<body>
<!-- minhna3 26/12/2015 -->

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
<!-- Google Analytics Code -->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-82051923-2', 'auto');
    ga('send', 'pageview');
</script>
<!-- End Google Analytics Code -->
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

