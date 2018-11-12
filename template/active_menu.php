<?php 
    $url =  "$_SERVER[REQUEST_URI]";
    $active_url_0 = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
    $active_url_1= explode("?",$active_url_0);
    $active_url = $active_url_1[0];


?>