<?php
$f = "/www/kvant.io/footers/footer.php";
if(!file_exists($f))
$f = "footer.php.def";

include "$f";
?>