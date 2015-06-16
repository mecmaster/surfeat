<?
//  raw statistic


if($_POST['mac']){ // если этого нет, значит вход не через микротик

//	include_once("stats_test.php");
	
	
	$errorCode = 0;

	$m_host		= "localhost";
	$m_login 	= "adv_dev_wifi_ua";
	$m_pw		= "kljhdf876adfbF6jhg65VNG6bvchgfdncghgd5";
	$dbname		= "adv_dev_wifi_ua";
	$tablename	= "ps_statistics";
	
	$cd 		= date("Y-m-d H:i:s");
	
	$mc			= $_POST['mac'];
	
	mysql_connect($m_host, $m_login, $m_pw);
	if(!mysql_select_db($dbname)) // if any troubles with a DB, make a txt file
	{
		$errorCode = 1;
	}
	else
	{
		if(!$_POST['out'])
			$dir = 'i';
		else
			$dir = 'o';
		
		$sql = "insert into `{$tablename}` (`timestamp`, `dir`, `mac`) values ('{$cd}', '{$dir}', '{$mc}')";
		
		
		if(!mysql_query($sql))
			$errorCode = 1;
	}
	if($errorCode == 1)
	{
		$file = fopen("dbfail.txt", "a");
		fwrite($file, mysql_error()."\n");
		fwrite($file, $cd." - ".$mc."\n");
		fclose($file);
	}
}


?>