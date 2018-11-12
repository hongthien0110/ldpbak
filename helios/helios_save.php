<?php

header('Access-Control-Allow-Origin: *');
//echo "save_data({'user':'phongvh'})";

$api_path = "http://heliosapi.topicanative.asia/api/v5/";
//$api_path = "http://42.115.221.43/api/v5/";

$api_get_ads = "http://helios.topicanative.asia/api/get-ads";
//$api_get_ads = "http://42.115.221.30/api/get-ads";

$api_get_tks_page = "http://helios.topicanative.asia/api/get-thankyou-page";

if ($_POST["action"] == "visitor") {
    $api_data = $_POST["data"];
    $data_decoded = json_decode($api_data, true);

    $api_url = $api_path . "tracking/visitor";

    if (!array_key_exists("utm_ad", $data_decoded)
        && array_key_exists("code_chanel", $data_decoded)) {
        $api_data = getUtmInfo($data_decoded, $api_get_ads);
    }

    saveLog('visitor data : '.$api_data, 'logs.txt');

    $curl = curl_init($api_url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));
    curl_setopt($curl, CURLOPT_POSTFIELDS, $api_data);

    // Send the request
    $response = curl_exec($curl);
    $info = curl_getinfo($curl);
    curl_close($curl);

    $data = array();
    $data["code"] = $info['http_code'];
    // Check for errors
    if ($info['http_code'] == 200) {
        $data["data"] = json_decode($response);
    }
    echo json_encode($data);
}


if ($_POST["action"] == "contact") {
    $api_data = $_POST["data"];
    $api_url = $api_path . "tracking/submitter";

    // Save log
    $data_decoded = json_decode($api_data, true);
    // $data_log_before = print_r($data_decoded, true);

    $name = $data_decoded['name'];
    $email = $data_decoded['email'];

    if (!array_key_exists("utm_source", $data_decoded)
        && array_key_exists("code_chanel", $data_decoded)) {
        $api_data = getUtmInfo($data_decoded, $api_get_ads);
    }

    $url = "http://bestenglish.topicanative.co.th/helios";
    if (array_key_exists("utm_ad", $data_decoded)) {
        $url = getUrlTksPage(array("ad_name"=> $data_decoded['utm_ad']), $api_get_tks_page);
    } else if (array_key_exists("code_chanel", $data_decoded)) {
        $url = getUrlTksPage(array("ad_name"=> $data_decoded['code_chanel']), $api_get_tks_page);
    }

    saveLog('submitter data : '.$api_data, 'logs.txt');

    $curl = curl_init($api_url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));
    curl_setopt($curl, CURLOPT_POSTFIELDS, $api_data);
    // Send the request
    $response = curl_exec($curl);
    // saveLog('response  : '.$response, 'logs.txt');

    $info = curl_getinfo($curl);

    curl_close($curl);

    $data = array();
    $data["code"] = $info['http_code'];
    $data["url"]  = $url;
    // Check for errors
    if ($info['http_code'] == 200) {
        $data["data"] = json_decode($response);
        // send mail to user
        // sendMail($name, $email);
    }
    echo json_encode($data);
}

function getUtmInfo($data_decoded = array(), $api_get_ads) {
    // saveLog($api_data, 'logs.txt');
    $molx_params = curl_init($api_get_ads);
    curl_setopt($molx_params, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($molx_params, CURLOPT_POST, true);
    curl_setopt($molx_params, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));
    //5s trying to connect to the URL in question.
    curl_setopt($molx_params, CURLOPT_CONNECTTIMEOUT, 5);
    //5 seconds max
    curl_setopt($molx_params, CURLOPT_TIMEOUT, 10);
    //Tell cURL to return the response output as a string
    $ads = json_encode(array("name"=> $data_decoded['code_chanel']));
    saveLog('getUtmInfo ads : '.$ads, 'logs.txt');
    curl_setopt($molx_params, CURLOPT_POSTFIELDS, $ads);

    //Execute the request.
    $res= curl_exec($molx_params);
    saveLog('getUtmInfo res : '.$res, 'logs.txt');

    if(!curl_errno($molx_params)){
        $utm_info = json_decode($res, true);
        $all_info = array_merge($data_decoded, $utm_info);
        $all_info['utm_ad'] = $data_decoded['code_chanel'];
        saveLog('getUtmInfo all_info : '.$all_info, 'logs.txt');
        return json_encode($all_info);
    } else {
        saveLog('getUtmInfo errors : '.curl_error($molx_params), 'logs.txt');
    }
    curl_close($molx_params);
    return json_encode($data_decoded);
}

function getUrlTksPage($ad_name = array(), $api_get_tks_page) {
    $molx_params = curl_init($api_get_tks_page);
    curl_setopt($molx_params, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($molx_params, CURLOPT_POST, true);
    curl_setopt($molx_params, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));
    curl_setopt($molx_params, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($molx_params, CURLOPT_TIMEOUT, 10);
    saveLog('getUrlTksPage ads : '.json_encode($ad_name), 'logs.txt');
    curl_setopt($molx_params, CURLOPT_POSTFIELDS, json_encode($ad_name));

    //Execute the request.
    $res= curl_exec($molx_params);
    saveLog('getUrlTksPage res : '.$res, 'logs.txt');

    $url_info = null;
    if(!curl_errno($molx_params)){
        $url_info = json_decode($res, true);
        saveLog('getUrlTksPage url_info : '.$url_info, 'logs.txt');
    } else {
        saveLog('getUrlTksPage errors : '.curl_error($molx_params), 'logs.txt');
    }
    curl_close($molx_params);
    if ($url_info != null && array_key_exists("url", $url_info)) {
        return $url_info['url'];
    }
}

function sendMail($name, $email) {

    saveLog('sending to : {name: '.$name.', email: '.$email.'}', 'logs.txt');

    $to = $email;
    $subject = $name." คุณได้ลงทะเบียนกับทาง TOPICA Native เรียบร้อยแล้ว";
    $message = '<table style="width:100%;margin:0 auto;background-color:#0e0e0d">
            <tbody>
                <tr style="background-color:#151616">
                    <td style="padding:15px 0;box-sizing:border-box"><img src="https://ci3.googleusercontent.com/proxy/lSfhNGTHMtxOLrM5bqkhQkHlPhPARgoyZFW8kIOQocW88T9iDRqUXTZuSkvz_0qM4qPunlq6niiOdyRJ2L_Ntz4J=s0-d-e1-ft#http://sv1.upsieutoc.com/2017/09/19/logo.png" style="margin:0 auto;display:block" class="CToWUd"></td>
                </tr>
                <tr>
                    <td align="center">
                        <img src="https://ci5.googleusercontent.com/proxy/-oaaKFNqSOVKDAOw4jO8agBUDRQ88wQ9oBYu20xX4vn7ph9efExkV0KsuCkysADGM2hlSAbAJAT40DBCBsGBijGF3F5s=s0-d-e1-ft#http://sv1.upsieutoc.com/2017/09/19/unnamed.png" alt="" class="CToWUd">
                    </td>
                </tr>
                <tr>
                    <td align="center" style="box-sizing:border-box;padding:20px 0">
                        <ul style="list-style:none;margin:0;padding:0;float:left;width:50%">
                            <li style="float:right;color:rgb(204,153,102);font-size:18px;width:100%;text-align:right;margin-bottom:20px">
                            <span style="padding-right:100px;display:block;font-style:italic">เรียนออนไลน์</span></li>
                            <li style="float:right;color:rgb(204,153,102);font-size:18px;width:100%;text-align:right;margin-bottom:20px">
                            <span style="padding-right:106px;display:block;font-style:italic">16 ช.ม.ต่อวัน</span></li>
                        </ul>
                        <ul style="list-style:none;margin:0;padding:0;float:right;width:50%">
                            <li style="float:left;color:rgb(204,153,102);font-size:18px;width:100%;text-align:left;margin-bottom:20px">
                            <span style="padding-left:115px;display:block;font-style:italic">มีที่ปรึกษาส่วนตัว</span></li>
                            <li style="float:left;color:rgb(204,153,102);font-size:18px;width:100%;text-align:left;margin-bottom:20px">
                            <span style="padding-left:100px;display:block;font-style:italic">อาจารย์เจ้าชาวต่างชาติ</span></li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td align="center">
                        <ul style="list-style:none;margin:0;background-color:#fff;width:90%;box-sizing:border-box;padding:30px 20px;line-height:30px;font-size:18px;color:#000">
                            <li>สวัสดีครับคุณ '.$name.'</li>
                            <li><span style="color:rgb(204,153,102);font-weight:bold">TOPICA NATIVE</span>  ขอขอบคุณที่คุณสนใจรับฟังข้อมูล<wbr>ของเรา</li>
                            <li>ทางเรายินดีให้คำปรึกษาเกี่ยวโป<wbr>รแกรมเรียนภาษาอังกฤษออนไลน์ <span style="color:#000">ของ</span><span style="color:rgb(204,153,102);font-weight:bold"> TOPICA NATIVE</span></li>
                            <li>โดยผู้ให้คำปรึกษาจะโทรหาคุณด้ว<wbr>ยหมายเลขโทรศัพท์ของเราคือ <span style="color:rgb(204,153,102);font-weight:bold">021 054 257 </span><span style="color:#000">หรือ</span><br>
                            <span style="color:rgb(204,153,102);font-weight:bold"> 060 003 5989 </span> ภายใน 3 วันทำงานครับ</li>
                            <li>เพื่อเป็นการขอบคุณที่คุณ สนใจรับฟังข้อมูลกับทางเรา <br>วันนี้ เรามี e-book ฝึกภาษาสุดพิเศษมอบให้ครับ </li>
                            <li>ทั้งนี้ คุณสามารถวัดระดับภาษาได้ฟรีหลั<wbr>งจากมีเจ้าหน้าที่ติดต่อไปครับ</li>
                            <hr style="background-color:rgb(204,153,102);height:2px;border:none;margin:30px 0">
                            <h2 style="color:#800000;font-size:18px">FOLLOW US</h2>
                                <ul style="list-style:none;margin:0;padding:0;width:100%;margin-bottom:30px;font-size:14px">
                                    <li style="float:left;margin-right:15px;margin-left:25%">
                                        <img src="https://ci4.googleusercontent.com/proxy/3tEu5VN4ivu4IH-l5gVmxeKWHJ2FzjD-wW3iJpJT2YFBDhHZ2ZIS1rQn2TPRDy50TNuK-teH9VRleTaj1BTBfA=s0-d-e1-ft#http://sv1.upsieutoc.com/2017/09/19/fb.png" alt="fb.png" style="float:left;margin-right:5px" class="CToWUd">
                                        <a href="https://u5794863.ct.sendgrid.net/wf/click?upn=Jhtqal147dncvRM-2FxOMvLNt07aLcrN-2BgIkFSCc6h6pdt-2F3ULrMQgdhodRi8n9CiEQDnVA0-2FsM1Mp65bIFzDWqg-3D-3D_Y7xYE9lz5ZNCNKm44Js9cG-2FreI6NxFmFscYbJWEQqYWCKeEkH-2Fh5EOXDsJieEeFUwHAd-2BmpiddpZy1sG5ktRDfLu-2F5C-2FnyQzjC-2Bwxog0Tj6lDgd0Z42w3Kd8AMfJ3v0RJFehuBZLYGPlqJiPF0WD9kklShdsZem1x9NHZhzEVWTZeFvxjRraRLDlvHpc6-2B4Ev3fm3OfJ-2BTthUpuV89v-2FbytscFhkIuNZx3xqYkiMORo-3D" style="float:left;display:block;color:rgb(51,134,176);text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=https://u5794863.ct.sendgrid.net/wf/click?upn%3DJhtqal147dncvRM-2FxOMvLNt07aLcrN-2BgIkFSCc6h6pdt-2F3ULrMQgdhodRi8n9CiEQDnVA0-2FsM1Mp65bIFzDWqg-3D-3D_Y7xYE9lz5ZNCNKm44Js9cG-2FreI6NxFmFscYbJWEQqYWCKeEkH-2Fh5EOXDsJieEeFUwHAd-2BmpiddpZy1sG5ktRDfLu-2F5C-2FnyQzjC-2Bwxog0Tj6lDgd0Z42w3Kd8AMfJ3v0RJFehuBZLYGPlqJiPF0WD9kklShdsZem1x9NHZhzEVWTZeFvxjRraRLDlvHpc6-2B4Ev3fm3OfJ-2BTthUpuV89v-2FbytscFhkIuNZx3xqYkiMORo-3D&amp;source=gmail&amp;ust=1528253903172000&amp;usg=AFQjCNEgFU7juVeE2BZD3-FW3DlnWi83_A">Follow on Facebook</a>
                                    </li>
                                    <li style="float:left;margin-right:15px;margin-left:0">
                                    <img src="https://ci6.googleusercontent.com/proxy/3Zjerr-dIIR1cHho-I4Uw2pvWZOG3W1eb-caqqiCk8f6UkmgPjU34PepmZF33ZwmTEntMz9xKCc3kfOY_vZDMfgqAYRb=s0-d-e1-ft#http://sv1.upsieutoc.com/2017/09/19/website.png" alt="website.png" style="float:left;margin-right:5px" class="CToWUd">
                                    <a href="https://u5794863.ct.sendgrid.net/wf/click?upn=CQGsTLeLoR5Ki67c0210gDDuGdPEz4RfbRhqDlIOxeOGIrMTfdML6H2SCpIDRneH_Y7xYE9lz5ZNCNKm44Js9cG-2FreI6NxFmFscYbJWEQqYWCKeEkH-2Fh5EOXDsJieEeFUcxatf58XP-2BWthUSfxJMRVC6MJ0qHgy-2Feo9c2BxvTcTDrA31OVWHP3MI9piaGpzs95y5nrhu74SZp9DsFPJgmorSOIhsWmjObJfy79VUoJL2bpLYeNFXCRw6QZiIYtBnom5AWaD15u4B-2BX6cpktE1Joc8HaEU-2FvzqHyUZo0n6IAU-3D" style="float:left;display:block;color:rgb(51,134,176);text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=https://u5794863.ct.sendgrid.net/wf/click?upn%3DCQGsTLeLoR5Ki67c0210gDDuGdPEz4RfbRhqDlIOxeOGIrMTfdML6H2SCpIDRneH_Y7xYE9lz5ZNCNKm44Js9cG-2FreI6NxFmFscYbJWEQqYWCKeEkH-2Fh5EOXDsJieEeFUcxatf58XP-2BWthUSfxJMRVC6MJ0qHgy-2Feo9c2BxvTcTDrA31OVWHP3MI9piaGpzs95y5nrhu74SZp9DsFPJgmorSOIhsWmjObJfy79VUoJL2bpLYeNFXCRw6QZiIYtBnom5AWaD15u4B-2BX6cpktE1Joc8HaEU-2FvzqHyUZo0n6IAU-3D&amp;source=gmail&amp;ust=1528253903172000&amp;usg=AFQjCNEILcu4dViZYWrdShujljaSp0L6qQ">Website</a></li>
                                    <li style="float:left;margin-left:0">
                                    <img src="https://ci3.googleusercontent.com/proxy/vh4vvUWVpAajgGn_X4SSWQ7W6J9WNyA4VlOwT62lUfKZpjpAoyTPROBT-chw4gGBpmXxGAPPEH8pTvjnTRkvg8ZwkA=s0-d-e1-ft#http://sv1.upsieutoc.com/2017/09/19/email.png" alt="email.png" style="float:left;margin-right:5px" class="CToWUd">
                                    <a href="mailto:infonative@topica.asia" style="float:left;display:block;color:rgb(51,134,176);text-decoration:none" target="_blank">Email</a></li>
                                    <div style="clear:both"></div>
                                </ul>
                        </ul>


                    </td>
                </tr>

                <tr>
                    <td>
                        <p style="width:50%;margin:0 auto;text-align:center;margin-top:20px;color:#fff;font-size:12px;font-style:italic;margin-bottom:50px">Copyright © 2017 TOPICA Native All rights reserved. <br>
                        อาคารชาร์เตอร์ สแควร์ ชั้นที่ 11 ห้องเลขที่ 11-07 เลขที่ 152 <br>
                        ถนนสาทรเหนือแขวงสีลม เขตบางรัก <br>
                        กรุงเทพฯ 10500 </p>
                    </td>
                </tr>
            </tbody>
        </table>';

    // To send HTML mail, the Content-type header must be set
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';

    // Additional headers
    $headers[] = 'To: '.$name.' <'.$email.'>';
    $headers[] = 'From: Topica Native <native@topica.asia>';

    // Mail it
    mail($to, $subject, $message, implode("\r\n", $headers), '-f native@topica.asia');
}

if ($_POST["action"] == "savelog") {
    $message = $_POST["data"];
    saveLog($message, $_POST["fileName"] != "" ? $_POST["fileName"] : "errorlog.txt");
}

if ($_POST["action"] !== "visitor" && $_POST["action"] !== "contact" && $_POST["action"] !== "savelog") {
    echo "You're not invited. Goodbye!";
}

function saveLog($data = array(), $file_name = 'unknow.txt') {
    date_default_timezone_set("Asia/Bangkok");
    $dir = './helios/helios_logs/'; //directory contain logs file
    $log_file = $dir . date('Y-m-d') . "-" . $file_name; /* name of logs file what have format: './logs/Y-m-d-logs.txt' */
    $content = "[" . $_SERVER['REMOTE_ADDR'] . ' ' . date('Y-m-d H:i:s') . "] ";
    $content .= $data ? $data . "\n" : ($data === "" ? "Have an error when call API\n" : "No data saved\n");
    echo '-saved!-';
    file_put_contents($log_file, $content, FILE_APPEND | LOCK_EX);
    echo '-put!-';
}