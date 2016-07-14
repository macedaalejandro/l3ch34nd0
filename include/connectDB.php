<?php
$handle = mysqli_init();
mysqli_options($handle, MYSQLI_OPT_LOCAL_INFILE, true);
//mysqli_real_connect($handle,server,user,code,database);
mysqli_real_connect($handle,'localhost', 'j5000440_lechear', 'DUsema83to', 'j5000440_lechear');
$db = mysqli_connect('localhost', 'j5000440_lechear', 'DUsema83to', 'j5000440_lechear');

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

$db->query("SET NAMES 'utf8'");
 
header("Content-type:text/html; charset=utf-8");
?>
