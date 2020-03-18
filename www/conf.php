<?php


ini_set("default_socket_timeout",1);
$dir = dirname(__FILE__);



//include "func.php";

//include "../../func.php";
//include "../func.php";
include "../../kvant-func-php/func.php";

script_time();
//print __FILE__.":".__LINE__."<br>";die;

include "conf.sql.php";

$t = $_SERVER['HTTP_HOST'];
$t = strtoupper($t);
$glob[title][] = $t;



$nginx_dir = "/d02/nginx/logs/";

$node = 9;
$time_adder = 3600*3;
$glob[time_adder] = $time_adder;


$devider = "<!-- kvant devider-->";

$url_e = "http://explorer.kvant.io/";

$time_adder = 3600*3;

?>