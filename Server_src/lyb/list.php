<?php
include("conn.php");
function htmtocode($content)
{
	$content = str_replace("\n", "<br>", str_replace(" ", "&nbsp;", $content));
	return $content;
}
$SQL="SELECT * FROM `message` order by id desc limit 0,30";
$query=mysql_query($SQL);
echo "<strong>�ݽ�������v1.2�û������б�</strong>";
while($row=mysql_fetch_array($query)){
?>
<table width=350 border="0" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
<tr bgcolor="#eff3ff"><td>[ʱ��]��<?=$row[lastdate]?>[#<?=$row[id]?>]<br>[IMEI]��<?=$row[imei]?></td></tr>
<tr bgColor="#ffffff"><td>[����]��<br><?echo htmtocode($row[content]);?></td></tr>
</table>
<? } ?>

