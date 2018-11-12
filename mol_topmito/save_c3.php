<?php

$data = $_POST;

//GiangVT write log when anyone submit landingpage
require_once("./save_log.php");
$data_log_before = print_r($data, true);
save($data_log_before, 'logs.txt');
//End - GiangVT write log when anyone submit landingpage

if ($data && is_numeric($data['phone'])) {
    require_once("Rest_client/Topica_Rest_Client.php");

    $config = array(
        'server' => 'http://molthai.topicanative.asia/',
        'api_key' => 'Yx4uhuqGsLW2Tym0pDvNyUHKGyu4WTzKht5oOlV6',
        'api_name' => 'key',
        'http_user' => 'admin',
        'http_pass' => 'admin',
        'http_auth' => 'basic'
    );
    $restClient = new Topica_Rest_Client($config);
    $uri = "contact_collection_api/add_contact";
    $param = array(
        'name' => $data['name'],
        'phone' => $data['phone'],
        'email' => $data['email'],
        'country' => isset($data['country']) ? $data['country'] : '',
        'sector' => isset($data['sector']) ? $data['sector'] : '',
        'graduation' => isset($data['graduation']) ? $data['graduation'] : '',
        'id_camp_landingpage' => isset($data["id_camp_landingpage"]) ? $data["id_camp_landingpage"] : "-100",
        'domain' => isset($data["domain"]) ? $data["domain"] : "",
        'code_chanel' => isset($data["code_chanel"]) ? $data["code_chanel"] : "-100",
        'ip' => $_SERVER['REMOTE_ADDR'],
        'http_referer' => isset($data['http_referer']) ? $data['http_referer'] : '',
        'age' => isset($data['age']) ? $data['age'] : '',
        'line_id' => isset($data['line_id']) ? $data['line_id'] : '',
    );
    $result = $restClient->post($uri, $param);
    //TuanLV gủi Email template
     if ($result) {
        $uri_email = "res_cronjob/send_email";
        $params_email = array(
            'email' => $data['email']
        );
        $temp = $restClient->post($uri_email,$params_email);
        $response = array(
            'status' => TRUE,
            'msg' => 'Successful',
            'redirect'=> 'http://topicanative.asia/thank-you.php'
        );
        }else{
            $response = array(
                'status' => FALSE,
                'msg' => 'การลงทะเบียนของคุณมีบางอย่างผิดพลาด โปรดลงทะเบียนอีกครั้ง!',
            );
        }
        //End - TuanLV gủi Email template
        echo json_encode($response);
    //GiangVT write log reponed when call API to MOL
    if($result) {
        $data_log_after = print_r($result, true);
        save($data_log_after, 'logs.txt');
    }else {
        $id_error = $_SERVER['REMOTE_ADDR'] . '/' . date('Y-m-d/H:i:B') . "\n";
        $data_log_after = "Have an error, ID: " . $id_error;
        save($data_log_after, 'logs.txt');
        $data_log_after_error =  $id_error . print_r($param, true);
        save($data_log_after_error, 'logs-error.txt');
    }
    //End - GiangVT write log reponed when call API to MOL
    //echo json_encode($result);
} else {
    $response = array(
        'status' => FALSE,
        'msg' => 'การลงทะเบียนของคุณมีบางอย่างผิดพลาด โปรดลงทะเบียนอีกครั้ง!',
    );
    echo json_encode($response);
}

//$result = $restClient->debug($uri, $param);
//echo '<meta content="text/html; charset=utf-8" http-equiv="Content-Type">';
//echo "<pre>";
// print_r($result);
?>