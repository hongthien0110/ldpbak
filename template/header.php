<div style="height: 116px;">
    <div id="header" class="container-fluid header-white" style="min-width: 1170px;height: 116px;">
        <div class="row">
            <div class="col-xs-2" style=" margin-top: 23px;margin-bottom: 15px;">
                <a href="./Home.php"><img src="img/LOGO.png" alt="" id="logo" style="margin-left: 10px;" /></a>
                <a href="./Home.php"><img src="img/LOGO2.png" alt="" id="logo2" style="margin-left: 15px;" /> </a>
            </div>
            <div class="col-xs-8 col-xs-offset-2" style="padding-left: 110px;">
                <ul class="row" style="width: 900px;">
                    <li class="hvr-overline-from-center menu_li"><a id="home" href="./Home.php<?php
                            if ($id != '4173'|| $code_chanel != 'topicanative_asia_001') {
                                echo '?code_chanel=' . $code_chanel . '&id=' . $id;
                            }
                            ?>" class="color_a  <?php if ($active_url == "/Home.php" || $active_url=='/' ) echo "bold br-white" ; ?>">HOME</a></li>
                    <li class="hvr-overline-from-center menu_li"><a id="whyus" href="./Whyus.php<?php
                            if ($id != '4173'|| $code_chanel != 'topicanative_asia_001') {
                                echo '?code_chanel=' . $code_chanel . '&id=' . $id;
                            }
                            ?>" class="color_a <?php if ($active_url == "/Whyus.php") echo "bold br-white" ; ?>">WHY US</a></li>
                    <li class="hvr-overline-from-center menu_li"><a id="ourteam" href="./Ourteam.php<?php
                            if ($id != '4173'|| $code_chanel != 'topicanative_asia_001') {
                                echo '?code_chanel=' . $code_chanel . '&id=' . $id;
                            }
                            ?>" class="color_a <?php if ($active_url == "/Ourteam.php") echo "bold br-white" ; ?>">OUR TEAM</a></li>
                    <li class="hvr-overline-from-center menu_li"><a id="method" href="./Method.php<?php
                            if ($id != '4173'|| $code_chanel != 'topicanative_asia_001') {
                                echo '?code_chanel=' . $code_chanel . '&id=' . $id;
                            }
                            ?>" class="color_a <?php if ($active_url == "/Method.php") echo "bold br-white" ; ?>">LEARNING METHOD</a></li>
                    <li class="hvr-overline-from-center menu_li"><a id="package" href="./Package.php<?php
                            if ($id != '4173'|| $code_chanel != 'topicanative_asia_001') {
                                echo '?code_chanel=' . $code_chanel . '&id=' . $id;
                            }
                            ?>" class="color_a <?php if ($active_url == "/Package.php") echo "bold br-white" ; ?>">PACKAGE</a></li>
                    <li class="hvr-overline-from-center menu_li"><a id="register" href="./Register.php<?php
                            if ($id != '4173'|| $code_chanel != 'topicanative_asia_001') {
                                echo '?code_chanel=' . $code_chanel . '&id=' . $id;
                            }
                            ?>" class="color_a <?php if ($active_url == "/Register.php") echo "bold br-white" ; ?>">REGISTER</a></li>
                    <!--                        <li class="hvr-overline-from-center menu_li"><a href="http://jobs.topicanative.asia/index1.php" class="color_a">JOB OPPORTUNITY</a></li>-->
                </ul>

                <div class="col-xs-2 col-xs-offset-10 row" style="margin-top: -6px;">
                    <p style="padding-left:10px;">
                        <!--
                        <a href=""><img src="img/uk-language.png" alt="" class="width-20" style="margin-right: 5px;" /></a>
                        <a href="http://topicanative.co.th/"><img src="img/thailand_flag_16.png" alt="" class="width-20" /></a>
-->
                        <a onclick="setLanguage('eng')"><img src="img/uk-language.png" alt="ENG" class="width-20" style="margin-right: 5px;" /></a>
                        <a onclick="setLanguage('thai')"><img src="img/thailand_flag_16.png" alt="THAI" class="width-20" /></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
