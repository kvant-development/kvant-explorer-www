<?php

$jss[] = $item;
$glob[title][] = "Блоки";
/*
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

*/
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
                  <div class="balances__num" id="p_block_last">&nbsp;
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
                  <div class="balances__num" id="p_txs">&nbsp;
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
                  <div class="balances__num" id="p_bps_tps">&nbsp;
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
                  <div class="balances__num" id="p_wals">&nbsp;
                  </div>
                  <div class="balances__desc">Кошельков</div>
                </div>
              </div>
<?php
?>

              <div class="wallet__table wallet__table_blocks">
                <div class="wallet__table-wrap" id="p_tbl">
                </div>
              </div>

            </div>
<?php
//include "paginator.php";
?>


          </div>
        </div>
      </div>
