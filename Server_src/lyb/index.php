<?php
include("conn.php");
$page=0;
if($_POST['submit'])
{
	if ($_POST[imei] && $_POST[content])
	{
		$sql="insert into message (id,imei,content,lastdate)"."values ('','$_POST[imei]','$_POST[content]',NOW())";
		mysql_query($sql);
		$page=1;
	}
	else $page=2;
}
if ($page==0)
{
	echo "<form action='index.php' method='post'>";
	echo "�ֻ�IMEI��<input type='text' name='imei' /><br/>";
	echo "�������ݣ�<textarea name='content'></textarea><br/>";
	echo "<input type='submit' name='submit' value='�ύ'/></form>";
}
elseif ($page==1) echo"OK";
elseif ($page==2) echo"ERROR";
?>
