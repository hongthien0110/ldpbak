<?php
function save($data = array(), $file_name = 'unknow.txt')
{
	date_default_timezone_set("Asia/Ho_Chi_Minh");
    $dir = './logs/'; //directory contain logs file
    $log_file = $dir . date('Y-m-d') . "-" . $file_name; /* name of logs file what have format: './logs/Y-m-d-logs.txt' */
    $content = "[" . $_SERVER['REMOTE_ADDR'] . ' ' . date('Y-m-d H:i:s') . "] ";
    $content .= $data ? $data . "\n" : ($data === "" ? "Have an error when call API\n" : "Have not data to write logs\n");
    file_put_contents($log_file, $content, FILE_APPEND | LOCK_EX);
}