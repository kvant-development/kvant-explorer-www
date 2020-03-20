<div class="pages">
    <ul class="pages__menu">
<?php
$k = "/";
$menu[$k] = "Главная";

$k = "/txs";
$menu[$k] = "Транзакции";


if(in_array($item,$logout_item))
{
$k = "?item=exit";
$menu[$k] = "Выход";
}

foreach($menu as $k=>$v)
{
print "<li>
        <a href=\"$k\">$v</a>
      </li>";

}
?>
    </ul>
    <div class="pages__toggle">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
  </div>
  