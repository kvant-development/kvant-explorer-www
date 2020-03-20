<?php

$glob[title][] = "Кошелек";

$id = $item2;
$id = str_replace("\n","",$id);
$id = str_replace("\r","",$id);
$wal = $id;


//$t = $item
$jss[] = $item;


print "\n<script>
var wallet_addr = '$wal';
</script>
";



include "address_tbl.php";
?>