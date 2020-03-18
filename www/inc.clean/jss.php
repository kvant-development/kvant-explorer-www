<?php

//die;
$v = $_GET[v];
$m = explode("|",$v);
//print_r($m);
foreach($m as $v2)
{
    $v = basename($v2);
    $file = __DIR__."/".$item."/".$v.".php";
//print $file."<br>\n";;
    if(file_exists($file))
    {
        include $file;
    }
}
?>