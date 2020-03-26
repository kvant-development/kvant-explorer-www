<?php


$f = "/conf.dev.ip.php";
if(file_exists($f))
{
    include $f;
    $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
    if(in_array($ip,$ip_debug))
    {
    $auth[role][admin] =1;
    $adm = 1;
    }
}

//if($adm) die;

if(1)
{
$t = $_SERVER['HTTP_X_FORWARDED_PROTO'];
switch($t)
{
    case "https":
    break;
    default:
    $t1 = $_SERVER['HTTP_HOST']	;
    $t2 = $_SERVER['REQUEST_URI'];
    $kuda = "https://".$t1."".$t2;
//print $kuda."\n";die;
    header("Location: $kuda");
    die;
}
}


include "conf.php";
//print __FILE__.":".__LINE__."<br>";die;

if($_POST[action])
{
    $file = $dir."/action/".$_POST[action].".php";
//print $file."<br>";die;
    if(file_exists($file))
    {
	include $file;
	if($need_redir)
	{
	    if(!$kuda)
	    {
	    $kuda = $_SERVER['HTTP_REFERER'];
	    redirect($kuda);
	    }
	}
    }
    
}


$shadow = 0;
if(isset($_REQUEST[shadow]))
$shadow = 1;

$auth[user] = $_SERVER['PHP_AUTH_USER'];
switch($auth[user])
{
    case "al":
	$auth[role][admin] = 1;
    break;
}
$t = __DIR__;
$t = dirname($t);
$t = basename($t);
$domen = $t;

# дебаг на домен
if($domen == "explorer-test2.kvant.io")
$auth[role][admin] = 1;

//phpinfo();die;

$t = $_SERVER['REQUEST_URI'];
//if($adm)
{
//print "t = $t<br>";
$t = explode("?",$t,2);
$t = $t[0];
//print "t = $t<br>";
$uri = $t[1];
$t = explode("/",$t);

unset($t[0]);
$item_mas = $t;

$lang_mas[ru] = "";
$lang_mas[en] = "";
$lang = $t[1];
if(!isset($lang_mas[$lang]))
{
$lang = "ru";
$i = 1;
}
else
{
$i = 2;
}
//$t2 = $t[0];

$item = $t[$i++];
$item2 = $t[$i++];
$item_whats = $t[$i++];

$item3 = $item."_".$item2;
//print_r($t);
//$t2 = "$item $item2 $item_whats";
//print_mas($t2);

//die("=======================");
}
//print_mas("eeeeeeeeeeeeeeeeeeeeeeeeeeeeee");
if($adm)
{
//    print "item = $item";die;
}
//if(!$lang)

if(!$item)$item = $_GET[item];

if(!$item)
//$item = "welcome";
$item = "blocks";


$dir = dirname(__FILE__);
$inc_dir = $dir."";

switch($item)
{
    case "welcome":
    $inc_path = $inc_dir."/inc.dark/";
    break;
    case "exit":
    case "main":
    case "js":
    case "jss":
    $inc_path = $inc_dir."/inc.clean/";
    break;
    default:
    $inc_path = $inc_dir."/inc.white/";
}



//if(!$shadow)$inc[] = "init";
if(!$shadow)$inc[] = "stat";
//print_mas($_GET);
//print "================= $item ===<br>";
if(!$shadow)$inc[] = "header";
//if(!$shadow)$inc[] = "js";
if(!$shadow)$inc[] = "svg";
if(!$shadow)$inc[] = "line_up";
//if(!$shadow)$inc[] = "line_lang";

unset($t2);
$logout_item[] = "my";
$logout_item[] = "send";
//$t2[] = "register";
if(in_array($item,$logout_item))
$inc[] = "line_logout2";
//if(!$shadow)
if(!$shadow)$inc[] = "line_down";
//if(!$shadow)$inc[] = "line_nav";
//if(!$shadow)$inc[] = "center_01_up";
//if(!$shadow)$inc[] = "center";


switch($item)
{
    case "css":
	header("Content-type: text/css");
	$shadow = 1;
        $inc[] = $item;
    break;
//    case "jss":
    case "js":
	if($shadow)$inc[] = "stat";
        $inc[] = $item;
    break;
    case "blocks1":
    $inc[] = $item;
    $inc[] = "paginator";

    break;

    default:
    $inc[] = $item;
    $inc[] = $item."_".$item2;
//    if(!$item)
//    $item = "exchange";

}

/*
$t = explode("_",$item,2);
$pref = $t[0];
$item1 = $t[0];
$item2 = $t[1];
*/



if(!$shadow)
{
//$inc[] = "script_time";
$inc[] = "center_02_down";
$inc[] = "footer_init";
$inc[] = "footer";
$inc[] = "footer_menu2";
$inc[] = "footer_js";
$inc[] = "footer2";
}

//error_reporting(65535);
	ob_start();
foreach($inc as $file)
{
    $include_file = $inc_path.$file.".php";
//print $include_file."<br>\n";;
    if(file_exists($include_file))
    {

	include $include_file;
    }

}
   $page = ob_get_contents();
   ob_end_clean();


//$glob[title][] = $_SERVER['HTTP_HOST'];
//$glob[a] = "a";
//$glob[title][] = "asdfadfadf";

$t = $glob[title];
$t = array_reverse($t);
$t = implode(" .:. ",$t);
$glob[title] = $t;
//print_r($glob);
    reset($glob);
    foreach($glob as $k=>$v)
    {
	$k2 = "glob_".$k;
//print "k = $k2<br>";
	$page = str_replace("{:$k2:}",$v,$page);
    }


    reset($stat);
    foreach($stat as $k=>$v)
    {
	$k2 = "stat_".$k;
//print "k = $k2<br>";
	$page = str_replace("{:$k2:}",$v,$page);
    }
    $preg = "/(\{\:.*?\:\})/sim";
    $page = preg_replace($preg,"",$page);

    $preg = "/(\<\!\-\-.*?\-\-\>)/sim";
    $page = preg_replace($preg,"",$page);

    $preg = "/(\/\*.*?\*\/)/sim";
    $page = preg_replace($preg,"",$page);

    $preg = "/(\/\/\s.*?\n)/sim";
    $page = preg_replace($preg,"",$page);

//    $preg = "/(\n.*?\/\/)/sim";
//    $page = preg_replace($preg,"\n//",$page);
$skiped = isset($_GET[skip_ob])?1:0;

$skiped = 1;
if(!$skiped)
{
    $preg = "/([\s]{2,100})/sim";
    $page = preg_replace($preg," ",$page);

    $page = str_replace("\n"," ",$page);
    $page = cyr_utf_html($page);
}
    print $page;

?>
