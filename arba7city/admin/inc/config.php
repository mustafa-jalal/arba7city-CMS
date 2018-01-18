<?php
$con=mysql_connect("localhost","root","root");
$date=mysql_select_db("arb7city");
if (!$con or !$date){echo "يوجد مشكلة فى الاتصال بقاعدة البيانات جارى الصيانة .....";}
define('DB_CHARSET', 'utf8');

?>