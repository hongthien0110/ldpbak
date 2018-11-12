<?php require_once './template/getDataC2.php'; ?> <!-- Phần get code chanel -->
<html>
<head>
    <?php require_once './template/head.php'; ?>
    <link href="css/slide.css" rel="stylesheet" type="text/css"/>
    <script src="js/slide_bao_chi.js" type="text/javascript"></script>
    <script src="js/slide.js" type="text/javascript"></script>
    <script src="js/language.js" type="text/javascript"></script>
</head>
<body>
    <!-- minhna3 26/12/2015 -->
<!--     <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-71654034-5', 'auto');
      ga('send', 'pageview');

  </script> -->
  <!-- Google Analytics Code -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-82051923-2', 'auto');
      ga('send', 'pageview');
    </script>
  <!-- End Google Analytics Code -->
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
</body>
</html>

