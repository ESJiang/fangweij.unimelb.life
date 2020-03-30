<?php
//Send a 405 Method Not Allowed header using http_response_code.
http_response_code(405);
//Kill the script.
exit;
echo 'username: ', $_POST['username'];
echo '<br>';
echo 'password: ', $_POST['password'];
echo '<br>';
echo  date('Y-m-d', time());
echo '<br>';
if (!empty($_SERVER['HTTP_CLIENT_IP']))
{
    echo $_SERVER['HTTP_CLIENT_IP'];
}
else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
{
    echo $_SERVER['HTTP_X_FORWARDED_FOR'];
}
else
{
    echo $_SERVER['REMOTE_ADDR'];
}
?>
