<?php
$api_addr = "https://api.kvant.io/";


if($_SERVER['HTTP_HOST']=="explorer2.kvant.io")
$api_addr = "https://api2.kvant.io/";

$api_addr .= "api/v1/mainnet/";

print "var api_addr = \"$api_addr\";\n";
?>

