<?php include("inc/config.php"); ?>
<?php include("inc/header.php"); ?>
<?php $sel=mysql_query("select * from comp");
while($fetch=mysql_fetch_array($sel)){
$fetch['name'];	

 ?>
<table width='33%' border='0' cellspacing='0' style="border:2px solid #0fa;">
<tr><td colspan='3' align='center'> <?php echo $fetch['name'];?></td></tr>
<tr><td colspan='3'><?php echo $fetch['paner'];?>
</td></tr>
<tr><td>الحد الادنى : </td><td><?php echo $fetch['minum'];?></td></tr>
<tr><td>طرق الدفع : </td><td><?php echo $fetch['payment'];?></td></tr>
<tr><td>رابط التسجل : </td><td><a href='<?php echo $fetch['link'];?>'>اضغط هنا</a></td></tr>
<tr><td>اثبات الدفع </td><td><a href='<?php echo $fetch['prove'];?>'>اضغط للعرض</a></td></tr>
</table>
<br>
<? }?>
<?php include("inc/block.php"); ?>
<?php include("inc/footer.php"); ?>
