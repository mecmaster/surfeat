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


?>
<html>
<body>
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
</body>
</html>