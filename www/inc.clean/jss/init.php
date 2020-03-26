<?php
//$api_addr = "https://api.kvant.io/";

switch($_SERVER['HTTP_HOST'])
{
    case "explorer2.kvant.io":
    case "blockchain2.kvant.io":
    $api_addr = "https://api2.kvant.io/";
    break;
    default:
    $api_addr = "https://api.kvant.io/";
}

//if($_SERVER['HTTP_HOST']=="explorer2.kvant.io")


$api_addr .= "api/v1/mainnet/";

print "var api_addr = \"$api_addr\";\n";
?>

