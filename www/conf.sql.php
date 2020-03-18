<?php
$db["host"] = "127.0.0.1";
$db["user"] = "react";
$db["pass"] = "hbfrn";
if(!$db["name"])
$db["name"] = "kvant-03";

$con = mysqli_connect($db["host"],$db["user"],$db["pass"],$db["name"]);
?>