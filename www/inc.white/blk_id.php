<?php

$id = $item_whats*1;

//$t = $item
$jss[] = $item3;
$glob[title][] = "Блок";
$glob[title][] = $id;



print "\n<script>
var block_id = $id;
</script>
";



include "block.php";
?>