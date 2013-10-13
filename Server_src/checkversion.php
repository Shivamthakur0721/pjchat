<?php
function check_version($clienttype, $clientver)
{
	$inis = get_ini_file('version/info.ini');
	$arr  = $inis[$clienttype];
	//print_r($inis);
	//print_r($arr);
	$inis = get_ini_file('version/'.$clienttype.'.ini');
	$arr['overtime']=$inis[$clientver]['overtime'];
	return $arr;
}
function check_ve3rsion($cur_version)
{
//	if (!isset($_REQUEST['version'])) $client_ver=''; else $client_ver=$_REQUEST['version'];

	echo 'overtime=FALSE&lateast=v0.5.0&latesttime=2010-11-26&stable=v0.4.6&stabletime=2010-11-20';
}
function get_ini_file($file_name)
{
	$str=file_get_contents($file_name);//��ȡini�ļ��浽һ���ַ�����.
	$ini_section = explode("\r\n[",$str);//����section��,�ŵ�������.
	$ini_sections = array();
	foreach($ini_section as $temp)
	{
		$t1=explode("]\r\n",$temp);
		//print_r($t1);
		$key=trim($t1[0],'[');
		$ini_list = explode("\r\n",$t1[1]);//�����в�,�ŵ�������.
		foreach($ini_list as $item)
		{
			$one_item = explode("=",$item);
			if(isset($one_item[0])&&isset($one_item[1]))
				$ini_items[trim($one_item[0])] = trim($one_item[1]); //���key=>value����ʽ.
		}
		$ini_sections[$key]=$ini_items;
	}
	//print_r($ini_sections);
	return $ini_sections;
}

function get_ini_item($ini_items = null,$item_name = '')
{//���INI��Ŀ��ֵ.
if(empty($ini_items)) return "";
else return $ini_items[$item_name];
}

?>