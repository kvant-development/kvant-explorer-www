<?php
if(count($jss))
{
    $t = implode("|",$jss);
    print "<script src=\"?item=jss&v=$t\"></script>";
}
?>
