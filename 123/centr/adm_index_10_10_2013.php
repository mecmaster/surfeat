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

        $to             = "rip@wifi.ua";
        $subject        = "Microtik alert: no POST data was given";
        $message        = "Something is wrong: no POST data was sent by Microtik, user was rejected to access"
        $header         = "From: noc@wifi.ua";
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


<!--  AdRiver code START. Type:counter(zeropixel) Site: Center PZ: 0 BN: 0 -->
<!--  AdRiver code END  -->

<script language="javascript">

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


<!-- Установите этот блок в том месте, где должен отображаться банер    -->
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
                var word = "п╢п╟п╩п╣п╣";
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
                        var str = " я│п╣п╨я┐п╫п╢";
                        var last = (wait.toString()).substring(1, str.length - 1);
                        if(wait < 10) last = wait;
                        if(wait < 10 || wait > 20){
                                switch(parseInt(last)){
                                        case 1: str += "п╟";
                                                        break;
                                        case 4:
                                        case 2:
                                        case 3: str += "я▀";
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
                                if(!clicked){ 
                var myLinkEsc = document.createElement("input");
                myLinkEsc.name = "link-orig-esc"; //<--- put here the EXACT name of a field. IDR, "lin_orig_esc" or something
                myLinkEsc.value = "transfer"; //put there a desired link;
                document.forms[0].appendChild(myLinkEsc);
                                document.forms[0].submit();}
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
//		var myLinkEsc = document.createElement("input");
//		myLinkEsc.name = "link-orig-esc"; //<--- put here the EXACT name of a field. IDR, "lin_orig_esc" or something
//		myLinkEsc.value = "transfer"; //put there a desired link;
//		document.forms[0].appendChild(myLinkEsc);
		// stop look
		document.forms[0].submit();
		
        }
//        gowebbutton();
</script>

    
<!--Блок подключения Admixer-->
    <script type="text/javascript">
        (function () {
            var w = window, d = document;
            w.admixZArr = (w.admixZArr || []);
            w.admixerSmOptions = (w.admixerSmOptions || {});
            w.admixerSmOptions.showAdsOnLoad = false;
            w.admixerSmOptions.isScannerEnabled = false;
        })();
    </script>
    <div id="admixer_async_1321523825"></div>
    <script type="text/javascript" src="http://cdn.admixer.net/scriptlib/asm2.js?v=3"></script>
    <script type="text/javascript">
        window.admixZArr = (window.admixZArr || []);
        window.admixZArr.push({ z: '83e1a200-c41b-4842-b9e2-28878209aec7', ph: 'admixer_async_1321523825' });
        window.admixerSm.onPageLoad();
    </script>


