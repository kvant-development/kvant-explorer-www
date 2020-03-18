<?php

$query = "SELECT * FROM stat WHERE name = 'last_block'";
$res = mysqli_query($con,$query);
//$res = mysqli_fetch_assoc($con,$query);
$row = mysqli_fetch_assoc($res);
$blk = $row[comments];

$query = "SELECT * FROM block_raw WHERE txs is not null order by id desc limit 1";
$res = mysqli_query($con,$query);
//$res = mysqli_fetch_assoc($con,$query);
$row = mysqli_fetch_assoc($res);
$txs = $row[txs];

$t = "2020-02-23 16:35:13";
$t = strtotime($t);

$t2 = $row[time];
$t2 = strtotime($t2);
//print "$t $t2";

$t3 = $t2 - $t;
$t3 /= $blk;

$bps = round($t3,2);
$t4 = explode(".",$bps);
$bps2 = $t4[0].",<span>".$t4[1]." sec</span>";

$t3 = $t2 - $t;
$t3 /= $txs;

$tps = round($t3,2);
$t4 = explode(".",$tps);
$tps2 = $t4[0].",<span>".$t4[1]." sec</span>";

//$a = $row[comments];
//$a = raw2json($a);
//print_r($a);


?>
      <div class="content">
        <div class="container">

          <div class="wallet wallet_blocks">
            <div class="wallet__wrap">
              <div class="wallet__top">
                <h1 class="wallet__top-title">Blocks</h1>
                <div class="wallet__search-wrap">
                  <p>All blocks</p>
                  <form class="wallet__search" action="">
                    <input class="form-control" type="text" placeholder="Найти по ID" />
                    <button class="btn" type="submit">
                      <div class="svg-icon svg-icon_icon-search">
                        <svg>
                          <use xlink:href="#icon-search"></use>
                        </svg>
                      </div>
                    </button>
                  </form>
                </div>
              </div>
              <div class="balances">
                <div class="balances__item">
                  <div class="balances__icon">
                    <div class="svg-icon svg-icon_icon-arrows-up">
                      <svg>
                        <use xlink:href="#icon-arrows-up"></use>
                      </svg>
                    </div>
                  </div>
                  <div class="balances__num"><?php print $blk;?>
                  </div>
                  <div class="balances__desc">Последний блок</div>
                </div>
                <div class="balances__item">
                  <div class="balances__icon">
                    <div class="svg-icon svg-icon_icon-copy">
                      <svg>
                        <use xlink:href="#icon-copy"></use>
                      </svg>
                    </div>
                  </div>
                  <div class="balances__num"><?php print $txs;?>
                  </div>
                  <div class="balances__desc">Транзакций</div>
                </div>
                <div class="balances__item">
                  <div class="balances__icon">
                    <div class="svg-icon svg-icon_icon-time">
                      <svg>
                        <use xlink:href="#icon-time"></use>
                      </svg>
                    </div>
                  </div>
                  <div class="balances__num"><?php print $bps2;?> / <?php print $tps2;?>
                  </div>
                  <div class="balances__desc">Block Time / Tx Time</div>
                </div>

                <div class="balances__item">
                  <div class="balances__icon">
                    <div class="svg-icon svg-icon_icon-cart">
                      <svg>
                        <use xlink:href="#icon-cart"></use>
                      </svg>
                    </div>
                  </div>
                  <div class="balances__num">-
                  </div>
                  <div class="balances__desc">Кошельков</div>
                </div>
              </div>
<?php
$t1 = $blk-1;
$t2 = $blk-16;
$query = "SELECT id,tx,txs,time,size
, (SELECT hash FROM block_hash WHERE id = t1.id) hash
 FROM block_raw t1 WHERE id BETWEEN $t2 AND $t1 ORDER by id DESC";
//print $query."<br>";
$res = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($res))
{
    $id = $row[id];
$a = $row[comments];
$row[addons] = raw2json($a);

    $blks[$id] = $row;
}
//print_r($blks);
//$th[epoch] 	= "Эпоха";
$th[id] 	= "Высота";
$th[time] 	= "Время";
$th[tx] 	= "Tx";
$th[txs] 	= "Txs";

$th[size] 	= "Size";
//$th[hz] 	= "&nbsp;";
$th[hash] 	= "Hash";
//$th[] = "";
?>

              <div class="wallet__table wallet__table_blocks">
                <div class="wallet__table-wrap">
                  <table class="table">
                    <thead>
                      <tr>
<?php
reset($th);
foreach($th as $k=>$v)
{
    print "<td>".$v."</td>";
}
?>
<!--
                        <td>Height</td>
                        <td>Date</td>
                        <td>Amount</td>
                        <td>Fee</td>
                        <td>Nr TX</td>
                        <td>Generation</td>
                        <td>Payload</td>
-->
                      </tr>
                    </thead>
                    <tbody>
<?php

foreach($blks as $k=>$v3)
{

    $td = "";
    reset($th);
    foreach($th as $k2=>$v2)
    {
	$val = $v3[$k2];
	switch($k2)
	{
	    
	    case "time":
		$val .= " UTC";
	    break;
	    default:

	}
	    $td .= "<td class=\"$k\">$val</td>";
    }
    print "<tr>";
    print $td;
    print "</tr>";

}

?>
<!--
                      <tr>
                        <td>
                          <a href="">898932</a>
                        </td>
                        <td>25.02.3030 20:19:15</td>
                        <td>3 892,48</td>
                        <td>2,13</td>
                        <td>28</td>
                        <td>
                          <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                        </td>
                        <td>9 KB</td>
                      </tr>
                      <tr>
                        <td>
                          <a href="">898932</a>
                        </td>
                        <td>25.02.3030 20:19:15</td>
                        <td>3 892,48</td>
                        <td>2,13</td>
                        <td>28</td>
                        <td>
                          <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                        </td>
                        <td>9 KB</td>
                      </tr>
                      <tr>
                        <td>
                          <a href="">898932</a>
                        </td>
                        <td>25.02.3030 20:19:15</td>
                        <td>3 892,48</td>
                        <td>2,13</td>
                        <td>28</td>
                        <td>
                          <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                        </td>
                        <td>9 KB</td>
                      </tr>
                      <tr>
                        <td>
                          <a href="">898932</a>
                        </td>
                        <td>25.02.3030 20:19:15</td>
                        <td>3 892,48</td>
                        <td>2,13</td>
                        <td>28</td>
                        <td>
                          <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                        </td>
                        <td>9 KB</td>
                      </tr>
                      <tr>
                        <td>
                          <a href="">898932</a>
                        </td>
                        <td>25.02.3030 20:19:15</td>
                        <td>3 892,48</td>
                        <td>2,13</td>
                        <td>28</td>
                        <td>
                          <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                        </td>
                        <td>9 KB</td>
                      </tr>
                      <tr>
                        <td>
                          <a href="">898932</a>
                        </td>
                        <td>25.02.3030 20:19:15</td>
                        <td>3 892,48</td>
                        <td>2,13</td>
                        <td>28</td>
                        <td>
                          <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                        </td>
                        <td>9 KB</td>
                      </tr>
                      <tr>
                        <td>
                          <a href="">898932</a>
                        </td>
                        <td>25.02.3030 20:19:15</td>
                        <td>3 892,48</td>
                        <td>2,13</td>
                        <td>28</td>
                        <td>
                          <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                        </td>
                        <td>9 KB</td>
                      </tr>
                      <tr>
                        <td>
                          <a href="">898932</a>
                        </td>
                        <td>25.02.3030 20:19:15</td>
                        <td>3 892,48</td>
                        <td>2,13</td>
                        <td>28</td>
                        <td>
                          <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                        </td>
                        <td>9 KB</td>
                      </tr>
                      <tr>
                        <td>
                          <a href="">898932</a>
                        </td>
                        <td>25.02.3030 20:19:15</td>
                        <td>3 892,48</td>
                        <td>2,13</td>
                        <td>28</td>
                        <td>
                          <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                        </td>
                        <td>9 KB</td>
                      </tr>
                      <tr>
                        <td>
                          <a href="">898932</a>
                        </td>
                        <td>25.02.3030 20:19:15</td>
                        <td>3 892,48</td>
                        <td>2,13</td>
                        <td>28</td>
                        <td>
                          <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                        </td>
                        <td>9 KB</td>
                      </tr>
                      <tr>
                        <td>
                          <a href="">898932</a>
                        </td>
                        <td>25.02.3030 20:19:15</td>
                        <td>3 892,48</td>
                        <td>2,13</td>
                        <td>28</td>
                        <td>
                          <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                        </td>
                        <td>9 KB</td>
                      </tr>
                      <tr>
                        <td>
                          <a href="">898932</a>
                        </td>
                        <td>25.02.3030 20:19:15</td>
                        <td>3 892,48</td>
                        <td>2,13</td>
                        <td>28</td>
                        <td>
                          <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                        </td>
                        <td>9 KB</td>
                      </tr>
                      <tr>
                        <td>
                          <a href="">898932</a>
                        </td>
                        <td>25.02.3030 20:19:15</td>
                        <td>3 892,48</td>
                        <td>2,13</td>
                        <td>28</td>
                        <td>
                          <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                        </td>
                        <td>9 KB</td>
                      </tr>
                      <tr>
                        <td>
                          <a href="">898932</a>
                        </td>
                        <td>25.02.3030 20:19:15</td>
                        <td>3 892,48</td>
                        <td>2,13</td>
                        <td>28</td>
                        <td>
                          <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                        </td>
                        <td>9 KB</td>
                      </tr>
                      <tr>
                        <td>
                          <a href="">898932</a>
                        </td>
                        <td>25.02.3030 20:19:15</td>
                        <td>3 892,48</td>
                        <td>2,13</td>
                        <td>28</td>
                        <td>
                          <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                        </td>
                        <td>9 KB</td>
                      </tr>
-->
                    </tbody>
                  </table>
                </div>
              </div>

            </div>
<?php
//include "paginator.php";
?>


          </div>
        </div>
      </div>
