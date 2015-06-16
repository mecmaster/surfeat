<?
function pushout($show_link = false){
	if($_POST['link-orig-esc'] == "external")
	{
		$rk_dir = preg_split('/\//', $_POST['baner-location']);
		array_pop($rk_dir);
		$subpath = implode ( "/" ,$rk_dir);
		$fullurl = $_SERVER['HTTP_ORIGIN'].$subpath."/"; 
		if(isset($_POST['link_num']) && $_POST['link_num'] !== "") $ln = "_".$_POST['link_num'];
		return $fullurl."link".$ln.".php";
		
		
	}
	if($show_link) echo $_POST['link-orig-esc'];
}
?>