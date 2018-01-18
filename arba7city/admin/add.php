<?php include("inc/config.php"); ?>
<?php include("inc/header.php"); ?>
<?php

if($_GET['addthing']==comp){		
?>
<form action='add.php?addthing=comp' method='post'>
<table width='50%' border='0'>
<tr>
<td>اسم الشركة</td>
<td>
<input type='text' name='name' size='40'>
</td>
<tr>
<td>البنر</td>
<td><textarea cols='40' rows='5' name='paner'></textarea></td>
</tr>
<tr>
<td>طرق الدفع </td>
<td><input type='text' name='payment' size='40'></td>
</tr>
<tr>
<td>الحد الادنى بالدولار</td>
<td><input type='text' name='min' size='40'></td>
</tr>
<tr>
<td>رابط التسجيل</td>
<td><input type='text' name='link' size='40'></td>
</tr>
<tr>
<td>اثبات الدفع</td>
<td><input type='file' name='prove' enctype="multipart/form-data"></td>
</tr>
<tr><td colspan='3'><input type='submit' name='submit' value='اضافة شركة'></td></tr>
</table>
</form>
<? }
else if ($_GET['addthing']==np){
?>
<form action='add.php?addthing=np' method='post'>
<table width='50%' border='0'>
<tr>
<td>اسم القائمة</td>
<td>
<input type='text' type='name' size='40'>
</td>
</tr>
<tr><td colspan='3'><input type='submit' name='submit2' value='ادخل القائمة'></td></tr>
</table>
</form>  
<? } ?>
<br>
<?php
$name=$_POST['name'];
$paner=$_POST['paner'];
$payment=$_POST['payment'];
$min=$_POST['min'];
$link=$_POST['link'];
$submit=$_POST['submit'];
if($submit){
	if (!$name or !$paner or !$payment or !$min or !$link){echo "<div id='worn'>ادخل جميع البيانات للمتابعة</div>";}
	else {$isert=mysql_query("insert into comp $name,$")}
}
?>
<br>



<?php include("inc/footer.php"); ?>
