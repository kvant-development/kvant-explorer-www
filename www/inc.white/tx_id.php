<?php

$id = $item_whats;

//$t = $item
$jss[] = $item3;
$glob[title][] = "Транзакция";
$glob[title][] = $id;


print "\n<script>
var tx_id = $id;
</script>
";



include "tx_detail.php";
?>