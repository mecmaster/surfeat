<?
require_once('../tools.php');


// куда отправлять пользователя после того как он просмотрел рекламу, в случае по каким либо приичнам неизвестно, куда он на самом деле хочет:
$default_redirect_link = "www.google.com";

// осуществлять ли принудительную переадресацию (независимо от желаний пользователя - после просмотра рекламы идет перенаправление на определенный сайт (используется предыдущий адрес))
$force_redirect = false;
// this is for a cases when we need to use a banner link with extra data (used with an & symbol)

//if online comment till next exit;
$router = $_POST['link-login-only'];

switch($_POST['link-orig-esc']){
	case "external":
		$_POST['link-orig-esc'] = pushout();
		break;
	case "transfer":
		$_POST['link-orig-esc'] = "http://adv-dev.wifi.ua/centr/link.php";
		break;
	case "":
	case NULL:
	case "http://www.apple.com/library/test/success.html":
		$_POST['link-orig-esc'] = $default_redirect_link;
		break;
}
$redirectLocation = $router.".html?username=T-".$_POST['mac-esc']."&dst=".$_POST['link-orig-esc'];

if(!$_POST or !$_POST['mac']){
//	print_r($_POST);
	echo "
	<html>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' name='viewport' />
	<meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
	<body style='background:#1a1a1a; margin: 0; padding: 20 ; color:  white; font-family: Tahoma, Helvetica, sans-serif; text-align: center; font-size: 10pt;'>
	
	Щось пішло не так, як має, і ми не можемо встановити зв'язок з нашим сервером.<br/>
	Ми приносимо Вам свої вибачення, наступного разу все працюватиме як має.
	<div style='background: url(../imgs/no_mikrotik_data.jpg) center center no-repeat; height: 30%; background-size: auto 100%; margin: 10px'></div>
	Something goes wrong
and we can not establish connection with our server.<br/>
We apology,
next time everything will go the way it should.
	</body>
	</html>
	";
//	echo '</br>'.$redirectLocation;
}else{
	//raw statistic on leave
	include_once("stats.php");
	header("Location: ".$redirectLocation);
}
?>
