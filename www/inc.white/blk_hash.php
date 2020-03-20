<?php

$hash = $item_whats;
$hash = str_replace("\n","",$hash);
$hash = str_replace("\r","",$hash);


//$t = $item
$jss[] = $item3;

/*
$query_add[hash] = $hash;
$query_add_mas = mas2sqlmas($query_add);
$query = "SELECT id FROM block_hash WHERE ".implode(" AND ",$query_add_mas)."";
print $query;
$res = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($res);
print_r($row);
$id = $row[id];
*/

print "\n<script>
var block_hash = '$hash';
</script>
";



include "block.php";
?>