<html>
<head>
<title>مدينة الارباح | افضل الشركات الربحية | اقوى الكورسات</title>
<meta charset='utf8'>
<link rel='stylesheet' href='css1.css'>
</head>
<body>
<div id ='main'> <!-- Home -->
<div id='header'>
<div id='logo'>
<img src='../images/logo2.png'>
</div>
<img src='../images/logo3.png'>

<img src='../images/logo.png'>
</div>
<div id='nb'>
<?php 
$sql=mysql_query("select * from nb");
while($fect=mysql_fetch_array($sql)){
	$name=$fect['name'];
	$id=$fect['id'];


 ?>
<ul>
<li><a href='<?php echo "?cat=".$name=$fect['id']; ?>'><?php echo $name=$fect['name']; ?></a></li>
</ul>
<? }?>
</div>
<table width="100%" dir="rtl" border="0" >
<tr>
<td width='70%' align='center' valign='top'>
<br>