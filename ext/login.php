<?php
   $mac=$_POST['mac'];
   $ip=$_POST['ip'];
   $username=$_POST['username'];
   $linklogin=$_POST['link-login'];
   $linkorig=$_POST['link-orig'];
   $error=$_POST['error'];
   $chapid=$_POST['chap-id'];
   $chapchallenge=$_POST['chap-challenge'];
   $linkloginonly=$_POST['link-login-only'];
   $linkorigesc=$_POST['link-orig-esc'];
   $macesc=$_POST['mac-esc'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>mikrotik hotspot > login</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="expires" content="-1" />
<style type="text/css">
body {color: #737373; font-size: 10px; font-family: verdana;}

textarea,input,select {
background-color: #FDFBFB;
border: 1px solid #BBBBBB;
padding: 2px;
margin: 1px;
font-size: 14px;
color: #808080;
}

a, a:link, a:visited, a:active { color: #AAAAAA; text-decoration: none; font-size: 10px; }
a:hover { border-bottom: 1px dotted #c1c1c1; color: #AAAAAA; }
img {border: none;}
td { font-size: 14px; color: #7A7A7A; }
</style>

</head>

<body>
<!-- $(if chap-id) -->

	<form name="sendin" action="<?php echo $linkloginonly; ?>" method="post">
		<input type="hidden" name="username" />
		<input type="hidden" name="password" />
		<input type="hidden" name="dst" value="<?php echo $linkorig; ?>" />
		<input type="hidden" name="popup" value="true" />
	</form>
	
	<script type="text/javascript" src="./md5.js"></script>
	<script type="text/javascript">
	<!--
	    function doLogin() {
                <?php if(strlen($chapid) < 1) echo "return true;\n"; ?>
		document.sendin.username.value = document.login.username.value;
		document.sendin.password.value = hexMD5('<?php echo $chapid; ?>' + document.login.password.value + '<?php echo $chapchallenge; ?>');
		document.sendin.submit();
		return false;
	    }
	//-->
	</script>
<!-- $(endif) -->

<table width="100%" style="margin-top: 10%;">
	<tr>
	<td align="center" valign="middle">
<div class="notice" style="color: #c1c1c1; font-size: 9px">

<!--Блок подключения библиотеки скриптов Admixer-->
<script type='text/javascript'>
(function () {
 var w = window, d = document;
 w.admixZArr = (w.admixZArr || []);
 w.admixerSmOptions = (w.admixerSmOptions || {});
 w.admixerSmOptions.showAdsOnLoad = true;
 w.admixerSmOptions.isScannerEnabled = false;
 if (!w.admixerSm) {
     var adms = document.createElement('script');
     adms.async = true;
     adms.type = 'text/javascript';
     adms.src = 'http://ua.cdn.admixer.net/scriptlib/asm_nobehav.js';
     var node = d.getElementsByTagName('script')[0];
     node.parentNode.insertBefore(adms, node);
 }
})();
</script>	
<!--Конец блока подключения библиотеки скриптов Admixer-->

<div onclick="loadXMLDoc()">
<!-- Установите этот блок в том месте, где должен отображаться банер    -->
<div id="admixer_async_151283070"></div>
<script type="text/javascript">
    window.admixZArr = (window.admixZArr || []);
    window.admixZArr.push({ z: 'd40466ee-69be-46ce-8fa9-0134a0d61a84', ph: 'admixer_async_151283070'});
</script>
</div>
<!-- $(if trial == 'yes') -->
<a style="color: #FF8080" href="<?php echo $linkloginonly; ?>?username=T-<?php echo $macesc; ?>&dst=<?php echo $linkorigesc; ?>">click here</a>.
<!-- $(endif) -->

</div><br />
	<table width="240" height="240" style="border: 1px solid #cccccc; padding: 0px;" cellpadding="0" cellspacing="0">
	<tr>
	<td align="center" valign="bottom" height="175" colspan="2">
<!-- removed $(if chap-id) $(endif)  around OnSubmit -->
		<form name="login" action="<?php echo $linkloginonly; ?>" method="post" onSubmit="return doLogin()" >
			<input type="hidden" name="dst" value="<?php echo $linkorig; ?>" />
			<input type="hidden" name="popup" value="true" />
						
			<table width="100" style="background-color: #ffffff">
				<tr><td align="right">login</td>
				<td><input style="width: 80px" name="username" type="text" value="<?php echo $username; ?>"/></td>
				</tr>
				<tr><td align="right">password</td>
				<td><input style="width: 80px" name="password" type="password"/></td>
				</tr>
				<tr><td> </td>
				<td><input type="submit" value="OK" /></td>
				</tr>
			</table>
		</form>
	</td>
	</tr>
	</table>
	
	<h2>Logintest.php Test</h2>
Mac: <?php echo $mac ?><br>
IP: <?php echo $ip ?><br>
Username: <?php echo $username ?><br>
Link-login: <?php echo $linklogin ?><br>
Link-orig: <?php echo $linkorig ?><br>
Error: <?php echo $error ?><br>
chapid<?php echo $chapid ?><br>
chapchallenge <?php echo $chapchallenge ?><br>
linkloginonly <?php echo $linkloginonly ?><br>
linkorigesc <?php echo $linkorigesc ?><br>
Error: <?php echo $error ?><br>

<!-- $(if error) -->
<br /><div style="color: #FF8080; font-size: 9px"><?php echo $error; ?></div>
<!-- $(endif) -->

	</td>
	</tr>
</table>

<script type="text/javascript">
<!--
  document.login.username.focus();
//-->
</script>

<script>
function loadXMLDoc()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("GET","<?php echo $linkloginonly; ?>?username=T-<?php echo $macesc; ?>",false);
xmlhttp.send();
sleep(5000);
}
</script>


</body>
</html>