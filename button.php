<?php
//yeah, yeah running sudo is not good in a command but what the heck its just a local photo booth.
$command = "sudo \/usr\/bin\/python3.2  \/var\/www\/images\/camera.py";

header('Content-Type: text/html; charset=utf-8');
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
echo "<style type='text/css'>
 body{
 background:#000;
 color: #7FFF00;
 font-family:'Lucida Console',sans-serif !important;
 font-size: 12px;
 }
 </style>";
//script is used to call python via PHP as I did not want to load CGI 

$pid = popen( $command,"r");

echo "<body><pre>";
while( !feof( $pid ) )
{
 echo fread($pid, 256);
 flush();
 ob_flush();
 echo "<script>window.scrollTo(0,99999);</script>";
 usleep(100000);
}
pclose($pid);

echo "</pre><script>window.scrollTo(0,99999);</script>";
echo "<br /><br />Script finalized<br /><br />";

sleep(2);
//makes call to update snapchat story
$snapper = file_get_contents("http://EXTERNALRASPBERRYPI IP/images/snap.php");
?>
