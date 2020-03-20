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

<?php
$stat_headers_title = "Блоки";
include "stat_headers.php";
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
