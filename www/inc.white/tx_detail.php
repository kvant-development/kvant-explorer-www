<?php
$prev = $id-1;
$prev = 10;
if($prev<1)$prev = '';

$next = $id+1;
//$prev = "";
?>

      <div class="content">
        <div class="container">
          <div class="wallet wallet_block">
            <div class="wallet__wrap">
              <div class="wallet__top wallet__top_block">
<?php
if($prev>0)
{
$url = "/$item/$item2/$prev";
$url = "#";
//print "                <a class=\"wallet__back-btn btn btn-default blue with-icon\" href=\"$url\" id=\"btn_prev_tx\">";
print "
                <a class=\"wallet__back-btn btn btn-default blue with-icon\" href=\"/\" id=\"btn_prev_tx\">
                  <div class=\"icon\">
                    <div class=\"svg-icon svg-icon_icon-arrow\">
                      <svg>
                        <use xlink:href=\"#icon-arrow\"></use>
                      </svg>
                    </div>
                  </div>Назад
                </a>
";
}
?>
                <h1 class="wallet__top-title" >Транзакция: <b id="p_nn2"><?php print $id?></b>
                </h1>
<?php
if($next)
{
$url = "/$item/$item2/$next";
$url = "#";
/*
print "
                <a class=\"wallet__next-btn btn btn-default blue with-icon\" href=\"$url\"  id=\"btn_next_tx\">Вперёд<div class=\"icon\">
                    <div class=\"svg-icon svg-icon_icon-arrow\">
                      <svg>
                        <use xlink:href=\"#icon-arrow\"></use>
                      </svg>
                    </div>
                  </div>
                </a>
";
*/
}
?>
              </div>
<!--
              <ul class="wallet__tabs nav">
                <li>
                  <a href="#explorer-tab1" data-toggle="tab">TRANSTACIONS</a>
                </li>
                <li>
                  <a class="active" href="#explorer-tab2" data-toggle="tab">BLOCK DETAILS</a>
                </li>
              </ul>
-->
              <div class="tab-content">
                <div class="tab-pane" id="explorer-tab1">
                  <div class="wallet__table wallet__table_block">
                    <div class="wallet__table-wrap" id="p_tbl_txs">
                    </div>
                  </div>
                </div>
                <div class="tab-pane active" id="explorer-tab2">
                  <table class="table table-striped">
                    <tbody>
<?php

unset($mas);
$mas[txhash] = "Хеш транзакции";
$mas[id] = "Блок";
$mas[addr_from] = "От кого";
$mas[addr_to] = "Кому";
$mas[amount] = "Сумма";
$mas[fee] = "Комиссия";
$mas[coin] = "Монета";
//$mas[blk_tx] = "Транзакций в блоке";
//$mas[blk_txs] = "Транзакций суммарно";
//$mas[blk_size] = "Размер блока в байтах";
//$mas[blk_hash_prev] = "Previous Block Hash";
//$mas[" "] = "&nbsp;";

foreach($mas as $k=>$v)
{

//$v2 = "";
//if($v)
$v2 = $v.":";
print "
                      <tr>
                        <td>$v2</td>
                        <td id=\"p_$k\"></td>
                      </tr>
";
}

?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      