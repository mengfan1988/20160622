<?php 
//session_start();
$log = 'log.txt';
if(!$handle = fopen($log,"a+")){ echo '日志文件打开失败'; exit(); }
if(!fwrite($handle,session_id().chr(13))){ echo '数据写入失败'; exit(); }
fclose($handle);
$file = file_get_contents($log);
$content = explode(chr(13),$file);
echo "本页被访问次数： <b>".(count($content)-1)." </b>";
?>