<?php
// İp'ler visitors.html 'e düşüyor panelden chmod yetkisi verin bb 
$ip = $_SERVER['REMOTE_ADDR'];
$browser= htmlspecialchars ($_SERVER['HTTP_USER_AGENT']);
$dateTime = date('Y/m/d G:i:s');
$file = "visitors.html";
$file = fopen($file, "a");
$data =  "<b> User IP </b>: $ip <b> Browser </b>: $browser <br> on Time </br> : $dateTime <pre><br></pre></br>" ;
fwrite($file, $data);
fclose($file);
?>
