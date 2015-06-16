<?
/*if(!$_POST or !$_POST['mac']){
	echo "
	<html>
	<body style='background:#1a1a1a url(../imgs/no_mikrotik_data.jpg) top center no-repeat; background-size: auto 100%; margin: 0; padding: 0'>
	<div style='background: '>
	</div>
	</body>
	</html>
	";

	$to 		= "rip@wifi.ua";
	$subject	= "Microtik alert: no POST data was given";
	$message	= "Something is wrong: no POST data was sent by Microtik, user was rejected to access"
	$header		= "From: noc@wifi.ua";
	mail($to,$subject,$message,$header);

}*/
error_reporting(0);
//  raw statistic
include_once("stats.php");
include_once("analyticstracking.php");
?>

<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
  <!-- привет айдивайс -->
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' name='viewport' />
  
  <title>Free WiFi</title>
 <link rel="stylesheet" href="../styles.css"/>
 </head>
 <body>

<div class='wifi_header' onclick='stoptimer()'>
	<span id='timer'></span>
	
	<a href='http://wifi.ua' class='wifiua'> </a>
	 <a href='http://kievcity.gov.ua/' class="kmda" style='position: absolute; left: 0;'></a>
	<span id='goweb' class='goweb' style='display: none'></span>
</div>


<div class='adv_wrapper' id='adv_wrapper'>
</div>

<div class='form'>
	<form method="post"  name='envelope' id='envelope' action='goweb.php'>
	<?
	foreach($_POST as $n=>$v){
		echo "<input type='hidden' name='{$n}' value='{$v}'/>\n";
	}
	?>
	<input type="hidden" name="isitidevice" value="" />
	<input type="hidden" name="out" value="1" />
	</form>
</div>
</body>
</html>

<script language="javascript">
if (navigator.userAgent.match(/(iPhone|iPad|iPod)/i))  {
   document.forms[0].elements['isitidevice'].value = "1";
}
 
// *********************
	function resize_frame(){
		var wi = 0;
		var he = 0;

		var RndNum4NoCash = Math.round(Math.random() * 1000000000);
		var ar_Tail='unknown'; if (document.referrer) ar_Tail = escape(document.referrer);

	if (window.innerWidth){
		wi = window.innerWidth;
		he = window.innerHeight;
	}else{
		with(document.body){
		wi = clientWidth;
		he = clientHeight;
		}
	}
	if((window.orientation == Math.abs(90)) && (wi < he)){ // landscape after change
		wi = he;
		he = wi;
	}
	he -= 40;
//	alert("index: w: "+document.body.clientWidth+" h:"+document.body.clientHeight);
		

		
/* ниже вставляется линк, выданный Адривером,  ***********************/	

/*		- вставлять только ту часть кода, которая между символами "'<iframe" и "</iframe>'";
		- заменить "width=XXX" на "width='+wi+'", а height=ХХХ – на "height='+he+'"
*/		
var RndNum4NoCash = Math.round(Math.random() * 1000000000);
var ar_Tail='unknown'; if (document.referrer) ar_Tail = escape(document.referrer);


		var AdriverLink = '<iframe id="adr" src="http://ad.adriver.ru/cgi-bin/erle.cgi?'
+ 'sid=191182&target=top&bt=51&pz=0&rnd=' + RndNum4NoCash + '&tail256=' + ar_Tail
+ '" frameborder=0 vspace=0 hspace=0 width='+wi+' height='+he+' marginwidth=0'
+ ' marginheight=0 scrolling=no></iframe>'; 
//		AdriverLink = '<iframe id="adr" src="../IK/index.html" frameborder=0 vspace=0 hspace=0 width='+wi+' height='+he+' marginwidth=0'+ ' marginheight=0 scrolling=no></iframe>';
/* дальше этой строки адривера нет ***********************************/

		document.getElementById('adv_wrapper').innerHTML = AdriverLink;
	}
	var res;
    window.addEventListener("resize", function() {
    clearTimeout(res);
	res = setTimeout(function(){resize_frame();}, 200);
 }, false);
	
	window.onload = function()
	{
		resize_frame();
	}
	
//	window.onload = printout(), callbanner();
/*	if(navigator.userAgent.match(/Android/i)){
			window.scrollTo(0,1);
    	}*/
/*==========google analytics starts==========*/
 var _gaq = _gaq || [];
 _gaq.push(['_setAccount', 'UA-32487416-1']);
 _gaq.push(['_trackPageview']);

	(function()
	{
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	}
	)();	
/*==========google analytics ends==========*/
	
	var wait = 18; // главный таймер
	var waitGoWeb = 8; //за сколько секунд до конца отсчета повяляется возможность пропустить рекламу
	var timer;
	var clicked = false;
	var t = document.getElementById('timer');
	function gowebbuttontimer(extra){
		var l = document.createElement("a");
		t.innerHTML = "";
		l.href = "javascript:document.forms[0].submit()";
		l.className = "goweb";
		var word = "далее";
		if(extra)
		{
			word += extra;
		}
		l.innerHTML = word;
		l.style.background = "none";
		t.appendChild(l);
		t.style="display: block";
	}
	gowebbuttontimer();

	function setString(stop){
			var str = " секунд";
			var last = (wait.toString()).substring(1, str.length - 1);
			if(wait < 10) last = wait;
			if(wait < 10 || wait > 20){
				switch(parseInt(last)){
					case 1: str += "а";
							break;
					case 4:
					case 2:
					case 3: str += "ы";
							break;
				}
			}
			t.innerHTML = wait+str;
			--wait;
			
			
			if(wait > 0){
				if(wait <= waitGoWeb)
				{
					gowebbuttontimer(" ["+wait+"]");
				}
				timer = setTimeout(setString, 1000)
			}else{
				clearTimeout(timer);
				if(!clicked){ document.forms[0].submit();}
				else{
					gowebbuttontimer();
				}
			}
		}
	setString();

	
	function stoptimer(){
		clicked = true;
	}

     function gowebbutton(extra){
                var m = document.createElement("b");
                t.innerHTML = "";
                m.href = "javascript:document.forms[0].submit()";
                m.className = "goweb";
                m.style.background = "none";
                t.appendChild(m);
                t.style="display: block";
                clearTimeout(timer);
                //look here:
//              var myLinkEsc = document.createElement("input");
//              myLinkEsc.name = "link-orig-esc"; //<--- put here the EXACT name of a field. IDR, "lin_orig_esc" or something
//              myLinkEsc.value = "transfer"; //put there a desired link;
//              document.forms[0].appendChild(myLinkEsc);
                // stop look
                document.forms[0].submit();

        }
	
</script>
